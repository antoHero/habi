@extends('layouts.master')

@section('content')

<!-- slider area start -->
@if(count($accessories))
<section class="slider-area-rel">
    <div class="slider-active slider-active-6 s-dot-style dot-style dot-style-1 dot-bottom-left-2 ">
        <div class="single-slider single-slider-3 slider-height-2 d-flex align-items-center cream-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-6 pt-60 pb-10 ">
                        <div class="slider-content-6">
                            <span class="s-subtitle s-subtitle-3 s-subtitle-6 pb-25" > category</span>
                            <h2 class="s-title s-title-2 s-title-6 pb-28" >Accessories</h2>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6">
                        <div class="slider-thumb-6">
                            {{-- <img src="{{ $category->bg }}" width="891" height="450" alt="{{ $category->slug }}"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-scroll-6 p-abs d-none d-sm-block">
        <a href="#category-area"><i class="fal fa-angle-double-down"></i> <span>Scroll Down</span></a>
    </div>
</section>
<!-- slider area end -->

<!-- category area start -->

<div id="category-area" class="category__area category__br-tp gray-bg-5 mb-20">
    <div class="container-fluid">
        <div class="row pb-20">
            @foreach ($accessories as $product)
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-product mb-15 wow fadeInUp" data-wow-delay=".1s">
                    <div class="product-thumb">
                        <img src="{{ $product->image }}" alt="{{ $product->slug }}">
                        <img src="{{ $product->image }}" alt="{{ $product->slug }}">
                        <div class="cart-btn cart-btn-1 p-abs">
                            <a href="{{ route('product.details', $product->slug) }}">Shop Now</a>
                        </div>
                        <div class="product-action product-action-1 p-abs">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="icon-box icon-box-1 openModal" data-id="{{ $product->id }}">
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
                        <h4 class="pro-title pro-title-1"><a href="{{ route('product.details', $product->slug) }}">{{ $product->name }}</a></h4>
                        <div class="pro-price">
                            <span>{{ '₦ '.number_format($product->amount) }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @include('partials.modal')
    </div>
</div>
@else 
<div class="subscribe-area pb-100 gray-bg-2 pt-15">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title text-center">
                    <i class="fal fa-frown fa-7x text-default" aria-hidden="true"></i>

                    <span class="p-subtitle mt-5">Oops! There's nothing here</span>
                    
                </div>
                <div class="text-center mt-50">
                    <a href="{{ url('/') }}" class="subscribe-btn subscribe-btn-1">Continue shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- category area end -->

@endsection
