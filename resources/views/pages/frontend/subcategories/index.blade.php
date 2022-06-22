@extends('layouts.master')


@section('content')

<!-- top selling area start -->
<div class="top-selling-area top-selling-padding pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title top-selling-title text-center pb-47">
                    <h3 class="p-title pb-15 mb-0">{{ Request::route('slug') }}</h3>
                </div>
            </div>
        </div>
        <div class="row pb-20">
          @foreach($products as $product)
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-product mb-15 wow fadeInUp" data-wow-delay=".1s">
                    <div class="product-thumb">
                        <img src="{{ $product->image }}" alt="{{ $product->slug }}">
                        <img src="{{ $product->image }}" alt="{{ $product->slug }}">
                        <div class="cart-btn cart-btn-1 p-abs">
                            <a href="#">Add to cart</a>
                        </div>
                        <div class="product-action product-action-1 p-abs">
                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModal" >
                                <i class="fal fa-eye"></i>
                                <i class="fal fa-eye"></i>
                            </a>
                            <a href="#" class="icon-box icon-box-1">
                                <i class="fal fa-heart"></i>
                                <i class="fal fa-heart"></i>
                            </a>
                            <a href="#" class="icon-box icon-box-1">
                                <i class="fal fa-layer-group"></i>
                                <i class="fal fa-layer-group"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4 class="pro-title pro-title-1"><a href="product-details.html">{{ $product->name }}</a></h4>
                        <div class="pro-price">
                            <span>{{ '₦'.number_format($product->amount) }}</span>
                        </div>
                        <div class="rating">
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star"></i>
                            <i class="fal fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
        <div class="row">
            <div class="col-xxl-12">
                <div class="btn-area text-center wow fadeInUp" data-wow-delay="1.2s">
                    <div class="p-btn p-btn-1">
                        <a href="shop.html">SHOW ALL PRODUCTS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top selling area end -->

@endsection
