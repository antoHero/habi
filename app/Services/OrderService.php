<?php 

namespace App\Services;

use App\Enums\DeliveryStatusEnum;
use App\Models\Order;
use App\Models\OrderItem;

class OrderService {

    /** Get all orders
     * return Collection
    */
    public function allOrders()
    {
        return Order::orderBy('created_at', 'desc')->get();
    }

    /** Get all pending orders
     * return Collection
    */
    public function allPending()
    {
        return Order::orderBy('created_at', 'desc')->where('status', DeliveryStatusEnum::PENDING()->value)->get();
    }

    /** Get all orders in progress
     * return Collection
    */
    public function allInProgress()
    {
        return Order::orderBy('created_at', 'desc')->where('status', DeliveryStatusEnum::PROGRESS()->value)->get();
    }

    /** Get delivered orders
     * return Collection
    */
    public function allCompleted()
    {
        return Order::orderBy('created_at', 'desc')->where('status', DeliveryStatusEnum::DELIVERED()->value)->get();
    }

    /** Get cancelled orders
     * return Collection
    */
    public function allCancelled()
    {
        return Order::orderBy('created_at', 'desc')->where('status', DeliveryStatusEnum::CANCELED()->value)->get();
    }

    /** View order details
     * return App\Models\Order
    */
    public function orderDetails(Order $order)
    {
        return OrderItem::where('order_id', $order->id)->get();
    }
}