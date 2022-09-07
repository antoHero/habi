@extends('layouts.master')

@section('content')
<!-- breadcrumb area start -->
<div class="breadcrumb-area pt-20 pb-20 mb-120">
    <div class="container">
        <div class="breadcrumb-title text-center">
            <h5>Shop</h5>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->
<!-- shop area start -->
<div class="shop-area mb-70 mt-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-12">
                <!-- /. shop top area -->
                <div class="shop-main-area">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade  show active" id="tab1">
                            <div class="row pb-20">
                                @foreach ($products as $product)
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-product mb-15 wow fadeInUp" data-wow-delay=".1s">
                                        <div class="product-thumb">
                                            <img src="{{ $product->image }}" alt="{{ $product->slug }}">
                                            <img src="{{ $product->image }}" alt="{{ $product->slug }}">
                                            <div class="cart-btn cart-btn-1 p-abs">
                                                <a href="#">Add to cart</a>
                                            </div>
                                            <div class="product-action product-action-1 p-abs">
                                                @if($product->type === 'APPAREL')
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="icon-box icon-box-1 openModal" data-id="{{ $product->id }}">
                                                        <i class="fal fa-eye"></i>
                                                        <i class="fal fa-eye"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('product.details', $product->slug) }}"  class="icon-box icon-box-1">
                                                        <i class="fal fa-eye"></i>
                                                        <i class="fal fa-eye"></i>
                                                    </a>
                                                @endif
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
                        </div>
                        @include('partials.modal')
                    </div>
                </div>

                <div class="shop-pagination">
                    <div class="basic-pagination">
                        <nav>
                           <ul>
                              <li>
                                 <a href="shop.html">
                                    <i class="far fa-angle-left"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="shop.html">1</a>
                              </li>
                              <li>
                                 <a href="shop.html" class="active">2</a>
                              </li>
                              <li>
                                 <a href="shop.html">3</a>
                              </li>
                              <li>
                                 <a href="shop.html">
                                    <i class="far fa-angle-right"></i>
                                 </a>
                              </li>
                           </ul>
                         </nav>
                     </div>
                </div>
                <!-- /. shop main area -->
            </div>
        </div>
    </div>
</div>
<!-- shop area end -->

@endsection
