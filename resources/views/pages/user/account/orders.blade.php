@extends('layouts.master')

@section('title')
My order history
@endsection

@section('content')
<div class="breadcrumb-area-2 pt-10 pb-10 include-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">     
                <div class="breadcrumb-wrapper-2 text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">My order history</li>
                        </ol>
                    </nav>
                </div>                    
            </div>
        </div>
    </div>
</div>

<section class="blog__area pt-10 pb-100">
    <div class="container">
        <div class="row">
            
            @include('pages.user.partials.nav')

            <div class="col-xxl-9 col-xl-9 col-lg-8 order-first order-lg-last">
                <div class="postbox__wrapper pr-45">
                    <div class="postbox__details">
                        <div class="postbox__details-content">
                            <a href="#" class="tag-btn postbox__tag postbox__tag-2">My Order History</a>
                            
                            @if(count($orders))
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-content table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail">#</th>
                                                        <th class="cart-product-name">Order Reference</th>
                                                        <th class="product-price">Order Date</th>
                                                        <th class="product-quantity">Status</th>
                                                        <th class="product-subtotal">Total Price</th>
                                                        <th class="product-remove"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $key=>$order)
                                                    <tr>
                                                        <td class="product-thumbnail">{{ $key++ }}</td>
                                                        <td class="product-name">{{ $order->reference }}</td>
                                                        <td class="product-price"><span class="amount">{{'₦ '.number_format($order->order_amount) }}</span></td>
                                                        <td class="product-subtotal"><span class="amount">{{ $order->created_at->format('Y-d-M') }}</span></td>
                                                        <td class="product-subtotal"><span class="amount">{{ $order->status }}</span></td>
                                                        <td class="product-name"><a href="{{ route('user.order.details', $order->reference) }}">View Details</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="subscribe-area pb-100 pt-95">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <div class="section-title text-center">
                                                    <span class="p-subtitle">0 Recent orders</span>
                                                    <p>You have not made any order</p>
                                                    <a href="{{ url('/') }}" type="button" class="subscribe-btn subscribe-btn-1">Continue shopping</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection