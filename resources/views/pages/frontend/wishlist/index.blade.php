@extends('layouts.master')

@section('title')
My Wishlist
@endsection

@section('content')
@if(count($items))
<div class="top-selling-product pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="top-selling-active owl-carousel">
                    @foreach($items as $product)
                    <div class="single-product mb-15 wow fadeInUp" data-wow-delay=".1s">
                        <div class="product-thumb">
                            {{-- <img src="{{ $product->extra_info->image }}" alt="#">
                            <img src="{{ $product->image }}" alt="#"> --}}
                            <div class="cart-btn cart-btn-2 p-abs">
                                <a href="#">Add to cart</a>
                            </div>
                            <div class="product-action product-action-1 p-abs">
                                <a href="#" class="icon-box icon-box-2" data-bs-toggle="modal"> 
                                    <i class="fal fa-trash"></i>
                                    <i class="fal fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4 class="pro-title pro-title-2"><a href="#">{{ $product->title }}</a></h4>
                            <div class="pro-price">
                                <span>{{ 'NGN '.number_format($product->price) }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@else
<!-- empty wishlist start -->
<section class="page__title-area pt-80 pb-65">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-10">
                <div class="page__title-wrapper text-center">
                    <span class="page__title-pre"><i class="fal fa-heart"></i></span>
                    <h5 class="page__title" style="font-size: 16px; font-weight: bold;">You have no saved items</h5>
                    <p>Start saving items here by selecting the little heart when you shop.</p>
                    <a class="s-btn s-btn-2" href={{ route('get.home') }} style="margin-top: 10px;">start shopping</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- empty wishlist end -->

@endsection
