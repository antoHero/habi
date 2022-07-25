<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Country, 
    State, 
    City, 
    Order, 
    TemporalOrder, 
    TemporalOrderItem,
    OrderItem
};
use Illuminate\Support\Facades\{Redirect, DB};
use Illuminate\Support\Str;
use App\Http\Requests\CheckoutRequest;
use Paystack;
use Jackiedo\Cart\Cart;
use App\Enums\DeliveryStatusEnum;

class CheckoutController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart) 
    {
        $this->middleware('auth');
        $this->cart = $cart;
    }

    public function index()
    {
        $countries = Country::all();
        return view('pages.frontend.cart.checkout', compact('countries'));
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {   
        return DB::transaction(function() use($request) {
            $basket = $this->cart->name('basket');
            
            $temporalOrder = TemporalOrder::create([
                'user_id' => auth()->user()->id,
                'name' => $request->firstname ." ". $request->lastname,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'tracking_id' => $this->generateTrackingId(),
                'reference' => $request->reference,
                'code' => $request->code,
                'status' => 'Pending'
            ]);
            foreach($basket->getDetails()->get('items') as $item) {
                TemporalOrderItem::create([
                    'temporal_order_id' => $temporalOrder->id,
                    'product_id' => $item->id,
                    'name' => $item->title,
                    'qty' => $item->quantity,
                    'amount' => $item->price
                ]);
            }

            $data = array(
                "amount" => $request->amount,
                "reference" => $request->reference,
                "email" => $request->email,
                "currency" => "NGN"
            );
            
            try{
                return Paystack::getAuthorizationUrl($data)->redirectNow();
            }catch(\Exception $e) {
                return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
            }   
            
        });  
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $basket = $this->cart->name('basket');
        $paymentDetails = Paystack::getPaymentData();
        $status = $paymentDetails['data']['status'];
        $reference = $paymentDetails['data']['reference'];
        $channel = $paymentDetails['data']['channel'];
        if($status === 'success') {
            //check if reference matches temporal order
            if($temporalOrder = TemporalOrder::where('reference', $reference)->first())
            {
                return DB::transaction(function() use($temporalOrder, $basket, $paymentDetails) {
                    $order = Order::create([
                        'user_id' => auth()->user()->id,
                        'name' => $temporalOrder->name,
                        'phone' => $temporalOrder->phone,
                        'email' => $temporalOrder->email,
                        'address' => $temporalOrder->address,
                        'country' => $temporalOrder->country,
                        'state' => $temporalOrder->state,
                        'city' => $temporalOrder->city,
                        'tracking_id' => $temporalOrder->tracking_id,
                        'reference' => $temporalOrder->reference,
                        'code' => $temporalOrder->code,
                        'order_amount' => $basket->getTotal(),
                        'payment_type' => $paymentDetails['data']['channel'],
                        'payment_status' => $paymentDetails['data']['status'],
                        'status' => DeliveryStatusEnum::PENDING(),
                        'delivery_type' => 1,
                        'note' => ''
                    ]);

                    foreach($basket->getDetails()->get('items') as $item) {
                        OrderItem::create([
                            'order_id' => $order->id,
                            'product_id' => $item->id,
                            'name' => $item->title,
                            'qty' => $item->quantity,
                            'amount' => $item->price
                        ]);
                    }

                    $temporalOrder->status = "Paid";
                    $temporalOrder->save();

                    notify()->success('Payment was successful', 'Success');
                    $basket->clearItems();
                    return redirect()->route('get.home');
                });
            }

            notify()->error('No payment information for this transaction', 'Error');
            
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function generateTrackingId()
    {
        $trackingId = 'HBC'. Str::random(6) . mt_rand(1000, 9999);
        if(TemporalOrder::where('tracking_id', $trackingId)->first()) {
            return self::generateTrackingId();
        }
        return $trackingId;
    }
}
