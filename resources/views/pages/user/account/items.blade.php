@extends('layouts.master')

@section('title')
My order history
@endsection

@section('content')
<div class="breadcrumb-area-2 pt-240 pb-245 include-bg" data-background="{{ url('frontend_assets') }}/assets/img/page-title/page-title-1.jpg">
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

<section class="blog__area pt-100 pb-100">
    <div class="container">
        <div class="row">
            
            @include('pages.user.partials.nav')

            <div class="col-xxl-9 col-xl-9 col-lg-8 order-first order-lg-last">
                <div class="postbox__wrapper pr-45">
                    <div class="postbox__details">
                        <div class="postbox__details-content">
                            <a href="#" class="tag-btn postbox__tag postbox__tag-2">My Order History</a>
                            
                            <div class="row">
                                <div class="col-12">
                                    <form action="#">
                                        <div class="table-content table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail">Image</th>
                                                        <th class="cart-product-name">Product</th>
                                                        <th class="product-price">Unit Price</th>
                                                        <th class="product-quantity">Quantity</th>
                                                        <th class="product-subtotal">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($items as $item)
                                                    <tr>
                                                        <td class="product-thumbnail"><a href="{{ route('product.details', $item->product->slug) }}"><img src="{{ $item->product->image }}" alt="{{ $item->product->name }}"></a></td>
                                                        <td class="product-name"><a href="{{ route('product.details', $item->product->slug) }}">{{ $item->product->name }}</a></td>
                                                        <td class="product-price"><span class="amount">{{ '₦ '.number_format($item->amount) }}</span></td>
                                                        <td class="product-quantity">
                                                            <span>{{ $item->qty }}</span>
                                                        </td>
                                                        <td class="product-subtotal"><span class="amount">{{ '₦ '.number_format($item->amount * $item->qty) }}</span></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection