@extends('layouts.master')


@section('content')

<!-- top selling area start -->
@if(count($products))
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
                        <a href="">SHOW ALL PRODUCTS</a>
                    </div>
                </div>
            </div>
        </div>

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
