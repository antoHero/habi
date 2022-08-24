@extends('layouts.master')

@section('content')

<!-- slider area start -->
<section class="slider-area-rel">
    <div class="slider-active slider-active-6 s-dot-style dot-style dot-style-1 dot-bottom-left-2 ">
        <div class="single-slider single-slider-3 slider-height-2 d-flex align-items-center cream-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-6 pt-60 pb-10 ">
                        <div class="slider-content-6">
                            <span class="s-subtitle s-subtitle-3 s-subtitle-6 pb-25" > category</span>
                            <h2 class="s-title s-title-2 s-title-6 pb-28" >Styles</h2>
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
<div id="category-area" class="category__area gray-bg-5 mb-20 mt-20">
    <div class="container-fluid">
        <div class="row pb-20">
            @foreach ($styles as $style)
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-product mb-15 wow fadeInUp" data-wow-delay=".1s">
                    <div class="product-thumb">
                        <img src="{{ $style->image }}" alt="{{ $style->slug }}">
                        <img src="{{ $style->image }}" alt="{{ $style->slug }}">
                        <div class="cart-btn cart-btn-1 p-abs">
                            <a href="{{ route('product.details', $style->slug) }}">View</a>
                        </div>
                        <div class="product-action product-action-1 p-abs">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="icon-box icon-box-1 openStyleModal" data-id="{{ $style->id }}">
                                <i class="fal fa-eye"></i>
                                <i class="fal fa-eye"></i>
                            </a>
                            <a href="#" class="icon-box icon-box-1">
                                <i class="fal fa-heart"></i>
                                <i class="fal fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4 class="pro-title pro-title-1 text-center"><a href="{{ route('product.details', $style->slug) }}">{{ $style->name }}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @include('partials.styles_modal')
    </div>
</div>

<!-- category area end -->

@endsection
