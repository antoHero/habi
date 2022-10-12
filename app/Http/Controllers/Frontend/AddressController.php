<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\{StoreAddressRequest, UpdateAddressRequest};
use App\Models\{Address, Country};
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function address()
    {
        $addresses = Address::where('user_id', auth()->user()->id)->get();
        return view('pages.user.account.addresses', [
            'addresses' => $addresses
        ]);
    }

    public function newAddress()
    {
        $countries = Country::all();
        return view('pages.user.account.new-address', [
            'countries' => $countries
        ]);
    }

    public function store(StoreAddressRequest $request)
    {
        //get the authenticated user
        $user = auth()->user();

        $data = $request->all();

        return DB::transaction(function() use($user, $data) {
            if(!isset($data['default'])) {
                $data['default'] = 'No';
            }
    
            if($data['default'] == 'Yes') {
                //get user addresses
                $address = $user->addresses()->where('is_default', 'Yes')->first();

                //set default to No

                $address->is_default = 'No';
                $address->save();
            }

            //store new address
            Address::create([
                'user_id' => $user->id,
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'phone' => $data['phone'],
                'country' => $data['country'],
                'state' => $data['state'],
                'city' => $data['city'],
                'code' => $data['code'],
                'is_default' => $data['default'],
                'address' => $data['address'],
            ]);

            notify()->success('Address successfully added', 'Added');

            return redirect()->route('user.delivery.address');
        });
        
    }

    public function view(Address $address)
    {
        $countries = Country::all();
        return view('pages.user.account.address', [
            'address' => $address,
            'countries' => $countries
        ]);
    }

    public function updateAddress(UpdateAddressRequest $request, Address $address)
    {
        
        //get the authenticated user
        $user = auth()->user();

        $data = $request->all();

        return DB::transaction(function() use($user, $data, $address) {
            if(!isset($data['default'])) {
                $data['default'] = 'No';
            }
    
            if($data['default'] == 'Yes') {
                //get user addresses
                $defaultAddress = $user->addresses()->where('is_default', 'Yes')->first();

                //set default to No

                $defaultAddress->is_default = 'No';
                $defaultAddress->save();
            }

            //store new address
            $address->firstname = $data['firstname'];
            $address->lastname = $data['lastname'];
            $address->phone = $data['phone'];
            $address->country = $data['country'];
            $address->state = $data['state'];
            $address->city = $data['city'];
            $address->code = $data['code'];
            $address->is_default = $data['default'];
            $address->address = $data['address'];
            $address->save();

            notify()->success('Address successfully updated', 'Added');

            return redirect()->route('user.delivery.address');
        });
    }
}
