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
                            <a href="{{ route('product.details', $product->slug) }}" style="cursor: pointer;">Shop Now</a>
                        </div>
                        <!-- <div class="product-action product-action-1 p-abs">
                            <a href="#" class="icon-box icon-box-1" id="viewQuickProduct" data-id="" data-bs-toggle="modal" data-bs-target="#productModal" onclick="getProduct({{$product->id}})">
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
                        </div> -->
                    </div>
                    <div class="product-content">
                        <h4 class="pro-title pro-title-1"><a href="product-details.html">{{ $product->name }}</a></h4>
                        <div class="pro-price">
                            <span id="productMint" data-id="{{ $product->id }}">{{ '₦'.number_format($product->amount) }}</span>
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
                    <div class="tab-content mb-10 productModalThumb" id="productModalThumb">

                    </div>
                    <div class="product__modal-nav">
                        <ul class="nav nav-tabs" id="productModalNav" role="tablist">
                            @foreach($product->product_attributes as $attribute)
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active-{{ $attribute->id }}" id="pro-{{ $attribute->id }}-tab" data-bs-toggle="tab" data-bs-target="#pro-{{ $attribute->id }}" type="button" role="tab" aria-controls="pro-1" aria-selected="true">

                                <img src="{{ $attribute->image }}" alt="{{ $product->slug }}">

                            </button>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="product__modal-right">
                    <h3 class="product__modal-title">
                        <a href="product-details.html" id="productName"></a>
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
                        <span class="price new-price" id="productPrice"></span>

                    </div>
                    <div class="product__modal-available">
                        <p> Availability: <span>In Stock</span> </p>
                    </div>
                    <div class="product__modal-sku">
                        <p> Sku: <span> 0026AG90-1</span> </p>
                    </div>
                    <div class="product__modal-des">
                        <p id="productDesc"></p>
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
                        <span>Category: </span>
                        <ul>
                            <li><a href="#">{{ $product->category->name }} </a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- product modal area start -->
</div>
<!-- top selling area end -->
<script src="{{ url('frontend_assets') }}/assets/js/jquery.min.js"></script>
<script type="">
  var url = "{{ url('/') }}";

  function getProduct(id) {
    $.get(url + '/product-json/' + id).done(function(res) {
      const {data, attributes } = res;
      $('#productName').html(data.name);
      $('#productPrice').html('₦' + formatAmount(data.amount));
      $('#productDesc').html(data.detail);
      $('.productModalThumb').empty();

      $.each(attributes, function(key, value) {
        $('.productModalThumb').append('<div class="tab-pane fade show active-'+value['id']+'" id="pro-'+value['id']+'" role="tabpanel" aria-labelledby="pro-'+value['id']+'-tab">' +
            '<div class="product__modal-thumb w-img">' +
              '<img src="'+value['image']+'" alt="'+data.slug+'" height="335" width="530">' +
            '</div>' +
          '</div>');
      })
    })
  }


  function formatAmount(x) {
      //Seperates the components of the number
      var n= x.toString().split(".");
      //Comma-fies the first part
      n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      //Combines the two sections
      return n.join(".");
  }

  function addToCart(id) {
    console.log('slug', id)
    $.get(url + '/cart/add/' + id).done(function(res) {
      console.log('response yeah?',res)
    });
  }

  //

    // $.post(url, { _token: token }).done(function(msg) {
    //   alert(msg);
    // });



  //
  //   console.log('this', id)
  // }
  // try {
  //   let response = fetch(url + '/product-json/' + id)
  //
  //
  //
  //   console.log(response)
  // } catch(e) {
  //   console.error(e)
  // }



</script>
@endsection
