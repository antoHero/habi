@extends('layouts.master')

@section('content')

<!-- slider area start -->
<section class="slider-area pb-95 p-rel">
    <div class="slider-active s-dot-style dot-style dot-style-1 dot-bottom-left-2">
        <div class="single-slider slider-height d-flex align-items-center theme-bg-2">
            <div class="container container-2">
                <div class="row align-items-center">
                    <div class="col-xxl-6  col-xl-7 col-lg-6 col-md-6 pt-60 pb-10 pt-md-0 pb-md-0">
                        <div class="slider-content slider-content-3">
                            <span class="s-subtitle s-subtitle-2 pb-25" data-animation="fadeInUp" data-delay=".3s"><i class="fal fa-share-alt"></i> Habi Clothiers Exclusive</span>
                            <h2 class="s-title pb-28" data-animation="fadeInUp" data-delay=".5s">ande</h2>
                            <p class="s-desc pb-75" data-animation="fadeInUp" data-delay=".7s">The name Ande reflects the inspiration drawn from years of excellence.</p>
                            <div class="p-btn p-btn-5" data-animation="fadeInUp" data-delay=".9s">
                                <a href="shop.html">Discover now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6  col-xl-5 col-lg-6 col-md-6 pt-60 pb-10 pt-md-0 pb-md-0">
                        <div class="slider-thumb" data-animation="fadeInRight" data-delay="1.2s">
                            <img src="{{ url('frontend_assets') }}/assets/img/slider/component/slide-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-height d-flex align-items-center cream-bg-2">
            <div class="container container-2">
                <div class="row align-items-center">
                    <div class="col-xxl-6  col-xl-7 col-lg-6 col-md-6 pt-60 pb-10 pt-md-0 pb-md-0">
                        <div class="slider-content slider-content-3">
                            <span class="s-subtitle s-subtitle-2 pb-25" data-animation="fadeInUp" data-delay=".3s"><i class="fal fa-share-alt"></i> Habi Clothiers Exclusive</span>
                            <h2 class="s-title pb-28" data-animation="fadeInUp" data-delay=".5s">wure</h2>
                            <p class="s-desc pb-75" data-animation="fadeInUp" data-delay=".7s">Wure gives you an assurance of quality.</p>
                            <div class="p-btn p-btn-5" data-animation="fadeInUp" data-delay=".9s">
                                <a href="shop.html">Discover now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6  col-xl-5 col-lg-6 col-md-6 pt-60 pb-10 pt-md-0 pb-md-0">
                        <div class="slider-thumb" data-animation="fadeInRight" data-delay="1.2s">
                            <img src="{{ url('frontend_assets') }}/assets/img/slider/component/slide-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-height d-flex align-items-center gray-bg-6">
            <div class="container container-2">
                <div class="row align-items-center">
                    <div class="col-xxl-6  col-xl-7 col-lg-6 col-md-6 pt-60 pb-10 pt-md-0 pb-md-0">
                        <div class="slider-content slider-content-3">
                            <span class="s-subtitle s-subtitle-2 pb-25" data-animation="fadeInUp" data-delay=".3s"><i class="fal fa-share-alt"></i> Habi Clothiers Exclusive</span>
                            <h2 class="s-title pb-28" data-animation="fadeInUp" data-delay=".5s">akoke</h2>
                            <p class="s-desc pb-75" data-animation="fadeInUp" data-delay=".7s">We are committed to make you fall in love with everything you see.</p>
                            <div class="p-btn p-btn-5" data-animation="fadeInUp" data-delay=".9s">
                                <a href="shop.html">Discover now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6  col-xl-5 col-lg-6 col-md-6 pt-60 pb-10 pt-md-0 pb-md-0">
                        <div class="slider-thumb" data-animation="fadeInRight" data-delay="1.2s">
                            <img src="{{ url('frontend_assets') }}/assets/img/slider/component/slide-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-scroll-2 p-abs">
        <a href="#category-area"><i class="fal fa-angle-double-down"></i> <span>Scroll Down</span></a>
    </div>
</section>
<!-- slider area end -->

<!-- category area start -->
<div class="category-area pb-93 p1-10" id="category-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title text-center pb-47">
                    <span class="p-subtitle p-subtitle-2">SEE OUR COLLECTION</span>
                    <h3 class="p-title pb-15 mb-0">Feature Collection</h3>
                </div>
            </div>
        </div>
        <div class="row row-3">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <a href="{{ route('get.women.area') }}">
                    <div class="single-category single-category-2 mb-4-px p-rel wow fadeInUp" data-wow-delay=".3s">
                        <div class="cat-thumb fix">
                            <img src="{{ url('frontend_assets') }}/assets/images/women-bg.jpg" height="385" alt="#">
                        </div>
                        <div class="cat-content cat-content-2 p-abs top-left">
                            <h4 class="pb-35">Women</h4>
                            <span class="has-underline d-inline-block">Shop Now</span>
                        </div>
                    </div>
                </a>
                <a href="shop.html">
                    <div class="single-category single-category-2 mb-4-px p-rel wow fadeInUp" data-wow-delay=".3s">
                        <div class="cat-thumb fix">
                            <img src="{{ url('frontend_assets') }}/assets/images/fabrics2-bg.jpg" height="300" alt="#">
                        </div>
                        <div class="cat-content cat-content-2 p-abs top-left">
                            <h4 class="pb-35">Fabrics</h4>
                            <span class="has-underline has-underline-sm d-inline-block">Shop Now</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <a href="{{ route('get.men.area') }}">
                    <div class="single-category single-category-2 mb-4-px p-rel wow fadeInUp" data-wow-delay=".3s">
                        <div class="cat-thumb fix">
                            <img src="{{ url('frontend_assets') }}/assets/images/men-bg.jpg" height="300" alt="#">
                        </div>
                        <div class="cat-content cat-content-2 p-abs top-left">
                            <h4 class="pb-35">Men</h4>
                            <span class="has-underline has-underline-sm d-inline-block">Shop Now</span>
                        </div>
                    </div>
                </a>
                <a href="shop.html">
                    <div class="single-category single-category-2 mb-4-px p-rel wow fadeInUp" data-wow-delay=".3s">
                        <div class="cat-thumb fix">
                            <img src="{{ url('frontend_assets') }}/assets/images/acc-bg.jpg" height="385" alt="#">
                        </div>
                        <div class="cat-content cat-content-2 p-abs top-left">
                            <h4 class="pb-35">Accessories</h4>
                            <span class="has-underline has-underline-sm d-inline-block">Shop Now</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- category area end -->
<!-- top selling product area start -->
@if(count($bestSellers) >= 3)
<div class="top-selling-product pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title text-center pb-47">
                    <span class="p-subtitle p-subtitle-2">Explore The Lookbook</span>
                    <h3 class="p-title pb-15 mb-0">Top Selling Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12">
                <div class="top-selling-active owl-carousel">
                    @foreach($bestSellers as $product)
                    <div class="single-product mb-15 wow fadeInUp" data-wow-delay=".1s">
                        <div class="product-thumb">
                            <img src="{{ $product->image }}" alt="#">
                            <img src="{{ $product->image }}" alt="#">
                            <div class="cart-btn cart-btn-2 p-abs">
                                <a href="#">Add to cart</a>
                            </div>
                            <span class="discount discount-2 p-abs">New</span>
                            <div class="product-action product-action-1 p-abs">
                                <a href="#" class="icon-box icon-box-2" data-bs-toggle="modal" data-bs-target="#productModal"> 
                                    <i class="fal fa-eye"></i>
                                    <i class="fal fa-eye"></i>
                                </a>
                                <a href="#" class="icon-box icon-box-2">
                                    <i class="fal fa-heart"></i>
                                    <i class="fal fa-heart"></i>
                                </a>
                                <a href="#" class="icon-box icon-box-2">
                                    <i class="fal fa-layer-group"></i>
                                    <i class="fal fa-layer-group"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4 class="pro-title pro-title-2"><a href="{{ route('product.details', $product->slug) }}">{{ $product->name }}</a></h4>
                            <div class="pro-price">
                                <span>{{ '₦ '.number_format($product->amount) }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
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
@endif
<!-- top selling product area end -->
<!-- product modal area start -->
<div class="product__modal-area modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="product__modal-inner position-relative">
            <div class="product__modal-close">
                <button data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="product__modal-left">
                <div class="tab-content mb-10" id="productModalThumb">
                    <div class="tab-pane fade show active" id="pro-1" role="tabpanel" aria-labelledby="pro-1-tab">
                        <div class="product__modal-thumb w-img">
                            <img src="{{ url('frontend_assets') }}/assets/img/products/modal/product-modal-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pro-2" role="tabpanel" aria-labelledby="pro-2-tab">
                        <div class="product__modal-thumb w-img">
                            <img src="{{ url('frontend_assets') }}/assets/img/products/modal/product-modal-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pro-3" role="tabpanel" aria-labelledby="pro-3-tab">
                        <div class="product__modal-thumb w-img">
                            <img src="{{ url('frontend_assets') }}/assets/img/products/modal/product-modal-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pro-4" role="tabpanel" aria-labelledby="pro-4-tab">
                        <div class="product__modal-thumb w-img">
                            <img src="{{ url('frontend_assets') }}/assets/img/products/modal/product-modal-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="product__modal-nav">
                    <ul class="nav nav-tabs" id="productModalNav" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab" data-bs-target="#pro-1" type="button" role="tab" aria-controls="pro-1" aria-selected="true">
                            <img src="{{ url('frontend_assets') }}/assets/img/products/modal/product-modal-sm-1.jpg" alt="">
                        </button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2" type="button" role="tab" aria-controls="pro-2" aria-selected="false">
                            <img src="{{ url('frontend_assets') }}/assets/img/products/modal/product-modal-sm-2.jpg" alt="">
                        </button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3" type="button" role="tab" aria-controls="pro-3" aria-selected="false">
                            <img src="{{ url('frontend_assets') }}/assets/img/products/modal/product-modal-sm-3.jpg" alt="">
                        </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pro-4-tab" data-bs-toggle="tab" data-bs-target="#pro-4" type="button" role="tab" aria-controls="pro-4" aria-selected="false">
                            <img src="{{ url('frontend_assets') }}/assets/img/products/modal/product-modal-sm-4.jpg" alt="">
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product__modal-right">
                <h3 class="product__modal-title">
                    <a href="product-details.html">Living Room Lighting</a>
                </h3>
                <div class="product__modal-rating d-flex align-items-center">
                    <ul class="mr-10">
                        <li>
                            <a href="#"><i class="ti-star"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ti-star"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ti-star"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ti-star"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ti-star"></i></a>
                        </li>
                    </ul>
                    <div class="customer-review">
                        <a href="#">(1 customer review)</a>
                    </div>
                </div>
                <div class="product__modal-price mb-10">
                    <span class="price new-price">$700.00</span>

                    <span class="price old-price">$899.99</span>
                </div>
                <div class="product__modal-available">
                    <p> Availability: <span>In Stock</span> </p>
                </div>
                <div class="product__modal-sku">
                    <p> Sku: <span> 0026AG90-1</span> </p>
                </div>
                <div class="product__modal-des">
                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod legunt saepius.…</p>
                </div>
                <div class="product__modal-quantity mb-15">
                    <h5>Quantity:</h5>
                    <form action="#">
                        <div class="pro-quan-area d-sm-flex align-items-center">
                            <div class="product-quantity mr-20 mb-25">
                                <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                            </div>
                            <div class="product__modal-cart mb-25">
                                <button class="product-modal-cart-btn " type="submit">Add to cart</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="product__modal-categories d-sm-flex align-items-center">
                    <span>Categories: </span>
                    <ul>
                        <li><a href="#">Decor, </a></li>
                        <li><a href="#">Lamp, </a></li>
                        <li><a href="#">Lighting</a></li>
                    </ul>
                </div>
                <div class="product__modal-categories d-sm-flex align-items-center">
                    <span>Tags: </span>
                    <ul>
                        <li><a href="#">Furniture, </a></li>
                        <li><a href="#">Lighting, </a></li>
                        <li><a href="#">Living Room, </a></li>
                        <li><a href="#">Table</a></li>
                    </ul>
                </div>
                <div class="product__modal-share d-sm-flex align-items-center">
                    <span>Share this product: </span>
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- product modal area start -->

<!-- popup area start -->
<div class="subscribe-popup d-none">
    <div class="subscribe-wrapper s-popup-padding h-100">
        <div class="pl-75 pr-75">
            <div class="row">
                <div class="col-xxl-6">
                    <div class="subscribe-content">
                        <div class="logo mb-65">
                            <a href="index.html"><img src="{{ url('frontend_assets') }}/assets/img/logo/logo-black.png" alt=""></a>
                        </div>
                        <h4 class="popup-title">Comming Soon</h4>
                        <p class="popup-desc">We’ll be here soon with our new<br>
                            awesome site, subscribe to be notified.</p>
                        <div class="comming-countdown  pb-45">
                            <div class="countdown-inner" data-countdown="" data-date="Mar 02 2024 20:20:22">
                                <ul>
                                    <li><span data-days="">401</span> Days</li>
                                    <li><span data-hours="">1</span> hours</li>
                                    <li><span data-minutes="">29</span> mins</li>
                                    <li><span data-seconds="">40</span> secs</li>
                                </ul>
                            </div>
                        </div>
                        <div class="subscribe-form-2 mb-30">
                            <input type="email" placeholder="Enter your email...">
                            <button class="p-btn border-0">Subscribe</button>
                        </div>
                        <div class="popup-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fal fa-basketball-ball"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="subscribe-thumb" data-background="{{ url('frontend_assets') }}/assets/img/popup/subscribe-bg.jpg"></div>
</div>
<!-- popup area end -->

@endsection
