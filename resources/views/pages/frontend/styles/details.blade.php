@extends('layouts.master')

@section('title')
{{ $style->slug }}
@endsection

@section('content')

<!-- product details area start -->
<section class="product__details-area pb-45 box-plr-45 gray-bg-4 pt-40 pb-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="product__details-nav-wrapper d-sm-flex align-items-center">
                    
                    <div class="product__details-thumb">
                        <div class="tab-content" id="productDetailsTabContent">
                            <div class="tab-pane fade show active" id="pro-nav-1" role="tabpanel" aria-labelledby="pro-nav-1-tab">
                                <div class="product-nav-thumb-wrapper">
                                    <a href="{{ $style->image }}" class="product-img-zoom popup-image">
                                        <i class="fal fa-compress"></i>
                                    </a>
                                    <img src="{{ $style->image }}" alt="{{ $style->slug }}" height="321" width="400">
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 col-lg-6">
                <div class="product__details-content pt-60">
                    <h3 class="product__details-title">
                        <a href="product-details.html">{{ $style->name }}</a>
                    </h3>
                    <div class="product__details-price">
                        <span class="price">{{ '₦'.number_format($style->price) }}</span>
                    </div>
                    <div class="product__details-rating d-flex align-items-center mb-15">
                        <ul class="mr-10">
                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                        </ul>
                        <div class="product__details-customer">
                            <span><a href="#">04 Customer Reviews</a></span>
                        </div>
                    </div>
                    <p class="product-des">{!! $style->description !!}</p>
                   
                    <div class="product__details-action">
                        <form action="#">
                            <div class="product__details-quantity d-sm-flex align-items-center">
                                <!-- <div class="product-quantity mb-20 mr-15">
                                    <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                </div> -->
                                <div class="product-add-cart mb-20 loading-button">
                                    <a href="{{ route('special.order', $style->slug) }}" class="s-btn s-btn-2 s-btn-big">Sew this for me</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="product__details-meta mb-25">
                        <ul>
                            <li>
                                <div class="product-availibility">
                                    <span>Availability</span>
                                    <p>
                                        <span>In Stock</span>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="product-sku">
                                    <span>Sku:</span>
                                    <p>
                                        <span>0026AG90</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="product__details-social d-sm-flex align-items-center">
                        <span>Share: </span>
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
</section>
<!-- product details area end -->
@endsection
