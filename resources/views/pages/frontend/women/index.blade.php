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
                            <h2 class="s-title s-title-2 s-title-6 pb-28" >{{ $category->name }}</h2>
                            <div class="p-btn p-btn-5 slider-btn-6">
                                <a href="shop.html">Discover more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6">
                        <div class="slider-thumb-6">
                            <img src="{{ $category->bg }}" width="891" height="450" alt="{{ $category->slug }}">
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
        <div class="row row-cols-xxl-3 row-cols-xl-3 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
            @if(count($category->sub_categories) > 0)
              @foreach($category->sub_categories as $subcategory)
              <div class="col pb-10">
                  <div class="category__item category__br-right fix">
                      <div class="category__thumb">
                          <a href="{{ route('get.product.category.area', $subcategory->slug) }}">
                              <img src="{{ $subcategory->bg }}" alt="{{ $subcategory->name }}">
                          </a>
                      </div>
                      <div class="category__content text-center">
                          <div class="category__tag mb-10">
                              <a href="{{ route('get.women.area') }}">#women</a>
                          </div>
                          <h3 class="category__title">
                              <a href="{{ route('get.product.category.area', $subcategory->slug) }}">{{ $subcategory->name }}</a>
                          </h3>
                          <a href="{{ route('get.product.category.area', $subcategory->slug) }}" class="link-btn" style="padding: 10px; background-color: #fff; color: #000;">Show now</a>
                      </div>
                  </div>
              </div>

              @endforeach
            @else
            @endif
        </div>
    </div>
</div>
<!-- category area end -->

@endsection
