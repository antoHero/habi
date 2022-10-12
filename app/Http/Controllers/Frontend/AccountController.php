<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\{Address, Country, Order, OrderItem};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index()
    {
        return view('pages.user.account.index');
    }

    public function orderHistory()
    {
        $orders = Order::where('user_id', auth()->user()->id)->get();

        return view('pages.user.account.orders', [
            'orders' => $orders
        ]);
    }

    public function orderDetails(Order $order)
    {
        $items = OrderItem::where('order_id', $order->id)->get();
        return view('pages.user.account.items', [
            'items' => $items
        ]);
    }
}
