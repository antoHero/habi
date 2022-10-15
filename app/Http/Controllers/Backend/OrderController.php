<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\GeneralDetail;
use App\Models\Order;
use App\Services\OrderService;

class OrderController extends Controller
{
    protected OrderService $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        $orders = $this->orderService->allOrders();

        return view('pages.dashboard.orders.index', [
            'orders' => $orders,
            'page' => array(
                'title' => 'All Orders',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function pending()
    {
        $orders = $this->orderService->allPending();
        return view('pages.dashboard.orders.pending', [
            'orders' => $orders,
            'page' => array(
                'title' => 'All Pending Orders',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function progress()
    {
        $orders = $this->orderService->allInProgress();
        return view('pages.dashboard.orders.progress', [
            'orders' => $orders,
            'page' => array(
                'title' => 'All Orders In Progress',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function completed()
    {
        $orders = $this->orderService->allCompleted();
        return view('pages.dashboard.orders.completed', [
            'orders' => $orders,
            'page' => array(
                'title' => 'All Completed Orders',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function cancelled()
    {
        $orders = $this->orderService->allCancelled();
        return view('pages.dashboard.orders.cancelled', [
            'orders' => $orders,
            'page' => array(
                'title' => 'All Cancelled Orders',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function details(Order $order)
    {
        $orders = $this->orderService->orderDetails($order);
        // dd($order->order_items);
        $site_detail = GeneralDetail::first();
        return view('pages.dashboard.orders.invoice', [
            'orders ' => $order->order_items,
            'order' => $order,
            'site_detail' => $site_detail,
            'page' => array(
                'title' => 'Order Invoice',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

}
