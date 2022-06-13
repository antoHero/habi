<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Blackwood - Clean Minimal eCommerce HTML5 Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
      <!-- CSS here -->
      @include('partials.css')
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


        <!-- prealoder area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="first_object"></div>
                    <div class="object" id="second_object"></div>
                    <div class="object" id="third_object"></div>
                </div>
            </div>      
        </div>
        <!-- prealoder area end --> 

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->
      
        @include('partials.header')

		<main>
            <!-- slider area start -->
            <section class="slider__area">
                <div class="slider__active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg" data-background="assets/img/slider/3/slider-1.jpg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="slider__content slider__content-3 p-relative z-index-11 text-center">
                                            <span data-animation="fadeInUp" data-delay=".3s">wooden edition</span>
                                            <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">Liveable Luxury</h3>
                                            <p data-animation="fadeInUp" data-delay=".5s">Combining Extraordinary Quality</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg" data-background="assets/img/slider/3/slider-2.jpg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="slider__content slider__content-3 p-relative z-index-11 text-center">
                                            <span data-animation="fadeInUp" data-delay=".3s">SUMMER ‘21</span>
                                            <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">Living Comportable</h3>
                                            <p data-animation="fadeInUp" data-delay=".4s">Combining Extraordinary Quality</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider-pagination main-slider-pagination-2">
                        <button class="main-slider-button-prev"><i class="fal fa-angle-left"></i></button>
                        <button class="main-slider-button-next"><i class="fal fa-angle-right"></i></button>
                    </div>
                </div>
            </section>
            <!-- slider area end -->

            <!-- product area start -->
            <section class="product__area pb-30 pt-30">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="section__title-line section__title-line-2">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-5">
                                        <div class="section__title-wrapper">
                                            <span class="section__title-icon mr-15">
                                                <img src="assets/img/icon/section-icon-3.png" alt="">
                                            </span>
                                            <h2 class="section__title-3">Popular Products</h2>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-7">
                                        <div class="product__tab product__tab-2">
                                            <ul class="nav nav-tabs" id="trendingTab" role="tablist">
                                                <li class="nav-item nav-item-2" role="presentation">
                                                <button class="nav-link active" id="new" data-bs-toggle="tab" data-bs-target="#new-2" type="button" role="tab" aria-controls="new-2" aria-selected="true">Men</button>
                                                </li>
                                                <li class="nav-item nav-item-2" role="presentation">
                                                <button class="nav-link" id="featured" data-bs-toggle="tab" data-bs-target="#featured-2" type="button" role="tab" aria-controls="featured-2" aria-selected="false">Women</button>
                                                </li>
                                                <li class="nav-item nav-item-2" role="presentation">
                                                <button class="nav-link" id="top" data-bs-toggle="tab" data-bs-target="#top-2" type="button" role="tab" aria-controls="top-2" aria-selected="false">Accessories</button>
                                                </li>
                                                <li class="nav-item nav-item-2" role="presentation">
                                                    <button class="nav-link" id="top-t" data-bs-toggle="tab" data-bs-target="#top-3" type="button" role="tab" aria-controls="top-3" aria-selected="false">Fabrics</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="product__item-wrapper-2 pt-30">
                                <div class="product__tab-content">
                                    <div class="tab-content" id="trendingTabContent">
                                        <div class="tab-pane fade show active" id="new-2" role="tabpanel" aria-labelledby="new-2">
                                            <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-1.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>15%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Wooden</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Matin Small Table Lamp</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-2.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Stell</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Matin Small Mog</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-3.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Plain Side Table White</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-4.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Wooden Single Drawer</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-5.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>15%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Wooden</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Smart Watches Wood</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-6.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Stell</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Panton Tunior Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-7.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>20%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Eames Lounge Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-8.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Wine Bottle Lantern</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-9.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Cotton Tunior Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-10.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>20%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Porsalin Plate</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$150.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="featured-2" role="tabpanel" aria-labelledby="featured-2">
                                            <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-6.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Stell</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Panton Tunior Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-7.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>20%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Eames Lounge Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-8.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Wine Bottle Lantern</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-9.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Cotton Tunior Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-1.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>15%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Wooden</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Matin Small Table Lamp</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-2.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Stell</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Matin Small Mog</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-3.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Plain Side Table White</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-4.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Wooden Single Drawer</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-5.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>15%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Wooden</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Smart Watches Wood</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-10.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>20%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Porsalin Plate</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$150.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="top-2" role="tabpanel" aria-labelledby="top-2">
                                            <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-9.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Cotton Tunior Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-1.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>15%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Wooden</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Matin Small Table Lamp</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-2.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Stell</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Matin Small Mog</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-3.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Plain Side Table White</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-4.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Wooden Single Drawer</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-6.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Stell</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Panton Tunior Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-7.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>20%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Eames Lounge Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-8.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Wine Bottle Lantern</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-5.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>15%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Wooden</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Smart Watches Wood</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-10.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>20%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Porsalin Plate</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$150.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="top-3" role="tabpanel" aria-labelledby="top-3">
                                            <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-6.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Stell</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Panton Tunior Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-7.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>20%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Eames Lounge Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-8.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Wine Bottle Lantern</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-5.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>15%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Wooden</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Smart Watches Wood</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-10.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>20%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Porsalin Plate</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$150.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-9.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Cotton Tunior Chair</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-1.jpg" alt="">
                                                            </a>
                                                            <div class="product__flash-3">
                                                                <span>15%</span>
                                                            </div>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Wooden</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Matin Small Table Lamp</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-2.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Stell</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Matin Small Mog</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-3.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Plain Side Table White</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/2/product-4.jpg" alt="">
                                                            </a>
                                                            <div class="product__action product__action-3 transition-3">
                                                                <ul>
                                                                   <li>
                                                                      <a href="#">
                                                                        <i class="fas fa-heart"></i>                      
                                                                      </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                   </li>
                                                                   <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-signal-4"></i>
                                                                        </a>
                                                                   </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="#">Living Room</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a href="product-details.html">Wooden Single Drawer</a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price">$180.00</span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product area end -->

            <!-- department__area start -->
            <section class="department__area grey-bg-3 pt-85 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="trending__info text-center">
                                <h5>Explore All Department</h5>
                                <p>There are many variations passages Lorem Ipsum available majority</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-40">
                        <div class="col-xl-6 col-lg-6">
                            <div class="department__image w-img mb-30">
                                <div class="department__product-sm-image">
                                    <img src="assets/img/products/department/1.jpg" alt="">
                                </div>
                                <div class="department__product">
                                    <a href="shop.html"><span>Men</span><p>(210)</p></a>
                                </div>
                            </div>
                            <div class="department__image w-img mb-30">
                                <div class="department__product-sm-image">
                                    <img src="assets/img/products/department/2.jpg" alt="">
                                </div>
                                <div class="department__product">
                                    <a href="shop.html"><span>Women</span><p>(377)</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="department__image w-img mb-30">
                                <div class="department__product-sm-image">
                                    <img src="assets/img/products/department/3.jpg" alt="">
                                </div>
                                <div class="department__product">
                                    <a href="shop.html"><span>Accessories</span><p>(150)</p></a>
                                </div>
                            </div>
                            <div class="department__image w-img mb-30">
                                <div class="department__product-sm-image">
                                    <img src="assets/img/products/department/4.jpg" alt="">
                                </div>
                                <div class="department__product">
                                    <a href="shop.html"><span>Fabrics</span><p>(170)</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="view-option-button text-center">
                                <a href="shop.html" class="select-btn-3">Browse All Departments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- department__area end -->

            <!-- shop modal start -->
            <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                    <div class="modal-content">
                        <div class="product__modal-wrapper p-relative">
                            <div class="product__modal-close p-absolute">
                                <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                            </div>
                            <div class="product__modal-inner">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="product__modal-box">
                                            <div class="tab-content" id="modalTabContent">
                                                <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="assets/img/products/quick-view/quick-view-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="assets/img/products/quick-view/quick-view-2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="assets/img/products/quick-view/quick-view-3.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="assets/img/products/quick-view/quick-view-4.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                        <img src="assets/img/products/quick-view/nav/quick-nav-1.jpg" alt="">
                                                </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                                    <img src="assets/img/products/quick-view/nav/quick-nav-2.jpg" alt="">
                                                </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                                    <img src="assets/img/products/quick-view/nav/quick-nav-3.jpg" alt="">
                                                </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                                    <img src="assets/img/products/quick-view/nav/quick-nav-4.jpg" alt="">
                                                </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4 class="product__modal-title"><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                        <div class="product__modal-des mb-40">
                                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt </p>
                                        </div>
                                        <div class="product__modal-stock">
                                            <span>Availability :</span>
                                            <span>In Stock</span>
                                        </div>
                                        <div class="product__modal-stock sku mb-30">
                                            <span>SKU:</span>
                                            <span>Samsung C49J89: £875, Debenhams Plus</span>
                                        </div>
                                        <div class="product__modal-review d-sm-flex">
                                            <div class="rating mb-15 mr-35">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            </div>
                                            <div class="product__modal-add-review mb-15">
                                            <span><a href="#">1 Review</a></span>
                                            <span><a href="#">Add Review</a></span>
                                            </div>
                                        </div>
                                        <div class="product__modal-price">
                                            <span>$560.00</span>
                                        </div>
                                        <div class="product__modal-form mb-30">
                                            <form action="#">
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                    <a href="cart.html" class="add-to-cart-btn">Add to cart</a>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="product__modal-links">
                                            <ul>
                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop modal end -->

        </main>

        <!-- footer area start -->
        @include('partials.footer')
        <!-- footer area end -->


      <!-- JS here -->
      @include('partials.js')
   </body>
</html>
