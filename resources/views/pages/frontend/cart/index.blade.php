@extends('layouts.master')

@section('title')
My Cart
@endsection

@section('content')

<!-- breadcrumb area start -->
<div class="breadcrumb-area-3 pt-20 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb-wrapper-2 text-center">
                    <h4>Your Cart</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- Cart Area Strat-->
<section class="cart-area pt-100 pb-100">
    <div class="container">
      @if(count($items))
      <div class="row">
          <div class="col-12">
              <form action="#">
                  <div class="table-content table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th class="cart-product-name">Product</th>
                                  <th class="product-price">Unit Price</th>
                                  <th class="product-quantity">Quantity</th>
                                  <th class="product-subtotal">Total</th>
                                  <th class="product-remove">Remove</th>
                              </tr>
                          </thead>
                          <tbody>

                            @foreach($items as $index=>$item)
                              <tr>
                                  <td class="product-name"><a href="product-details.html">{{ $item->title }}</a></td>
                                  <td class="product-price"><span class="amount">{{ '₦ '.number_format($item->price) }}</span></td>
                                  <td class="product-quantity">
                                      <div class="cart-plus-minus"><input type="text" value="1" min="1"/></div>
                                  </td>
                                  <td class="product-subtotal"><span class="amount">{{ '₦ '. number_format($item->quantity * $item->price) }}</span></td>
                                  <td class="product-remove"><a href="{{ route('cart.remove', $index) }}"><i class="fa fa-times"></i></a></td>
                              </tr>
                              @endforeach

                          </tbody>
                      </table>
                  </div>

                  @php $total = 0 @endphp
                    @foreach($items as $id => $details)
                        @php $total += $details->price * $details->quantity @endphp
                    @endforeach
                  <div class="row justify-content-end">
                      <div class="col-md-5 ml-auto">
                          <div class="cart-page-total">
                              <h2>Cart totals</h2>
                              <ul class="mb-20">
                                  <li>Subtotal <span>{{ '₦'.number_format($total) }}</span></li>
                                  <li>Total <span>{{ '₦'.number_format($total) }}</span></li>
                              </ul>
                              <a class="s-btn s-btn-2" href="checkout.html">Proceed to checkout</a>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
      @else

      <div class="row justify-content-center">
    		<div class="col-lg-8">
    			<div class="card border-width-3 border-radius-0 border-color-success">
    				<div class="card-body text-center">
    					<p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-times text-color-danger mr-1"></i> You have no items(s) in your cart!</p>
    				</div>
    			</div>
    		</div>
    	</div>
      @endif
    </div>
</section>
<!-- Cart Area End-->

@endsection
