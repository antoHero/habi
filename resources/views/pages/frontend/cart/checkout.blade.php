@extends('layouts.master')

@section('title')
Log into your account
@endsection

@section('content')

<!-- breadcrumb area start -->
<div class="breadcrumb-area-3 pt-20 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">     
                <div class="breadcrumb-wrapper-2 text-center">
                    <h3>Checkout</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>                    
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- coupon-area start -->
<section class="coupon-area pt-100 pb-30">
    @guest
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                    <div class="coupon-info">
                        <p class="coupon-text">Enter your email address and password.</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <p class="form-row-first">
                                <label>{{ __('Email Address') }} <span class="required">*</span></label>
                                <input 
                                        placeholder="Email Address..." 
                                        id="email" 
                                        type="email" name="email" 
                                        :value="old('email')" 
                                        required autofocus 
                                    />
                                </p>

                                <p class="form-row-last">
                                    <label>{{ __('Password') }} <span class="required">*</span></label>
                                    <input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        placeholder="Password..."
                                        required autocomplete="current-password" 
                                    />
                                </p>

                                <p class="form-row">
                                <button class="s-btn s-btn-2" type="submit">Login</button>
                                <label>
                                    <input id="remember_me" type="checkbox" name="remember" />
                                    Remember me
                                </label>
                                </p>
                                
                                <p class="lost-password">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif
                                </p>
                        </form>
                    </div>
                    </div>
                    <!-- ACCORDION END -->
            </div>
        </div>
        
        </div>
    </div>  
    
    @endguest
    
 </section>
 <!-- coupon-area end -->

 <!-- checkout-area start -->
 <section class="checkout-area pb-70">
       <div class="container">
          <form action="{{ route('pay') }}" method="POST" id="paymentForm">
            @csrf
             <div class="row">
                   <div class="col-lg-6">
                      <div class="checkbox-form">
                         <h3>Billing Details </h3>
                         <div class="row">
                               <div class="col-md-12">
                                  <div class="country-select">
                                     <label>Country <span class="required">*</span></label>
                                     <select name="country" id="checkoutCountry">
                                           <option default selected>--select--</option>
                                           @foreach ($countries as $country)
                                               <option value="{{ $country->name }}">{{ $country->name }}</option>
                                           @endforeach
                                     </select>
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="checkout-form-list">
                                     <label>First Name <span class="required">*</span></label>
                                     <input type="text" placeholder="" name="firstname" id="checkoutFirstname" />
                                     <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="checkout-form-list">
                                     <label>Last Name <span class="required">*</span></label>
                                     <input type="text" placeholder="" name="lastname" id="checkoutLastname" />
                                  </div>
                               </div>
                               <div class="col-md-12">
                                  <div class="checkout-form-list">
                                     <label>Address <span class="required">*</span></label>
                                     <input type="text" placeholder="Street address" name="address" id="checkoutAddress" />
                                  </div>
                               </div>
                               <div class="col-md-12">
                                  <div class="checkout-form-list">
                                     <label>Town / City <span class="required">*</span></label>
                                     <input type="text" placeholder="Town / City" name="city" id="checkoutCity" />
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="checkout-form-list">
                                     <label>State / County <span class="required">*</span></label>
                                     <input type="text" placeholder="" name="state" id="checkoutState" />
                                     
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="checkout-form-list">
                                     <label>Postcode / Zip <span class="required">*</span></label>
                                     <input type="text" placeholder="Postcode / Zip" name="code" id="checkoutCode" />
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="checkout-form-list">
                                     <label>Email Address <span class="required">*</span></label>
                                     <input type="email" placeholder="" name="email" id="checkoutEmail" />
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="checkout-form-list">
                                     <label>Phone <span class="required">*</span></label>
                                     <input type="text" placeholder="Postcode / Zip" name="phone" id="checkoutPhone" />
                                     <input type="hidden" name="metadata">
                                  </div>
                               </div>
                               @guest
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc">
                                        <input id="cbox" type="checkbox" name="newAccount" value="1" id="checkoutNewAccount" />
                                        <label>Create an account?</label>
                                    </div>
                                    <div id="cbox_info" class="checkout-form-list create-account">
                                        <p>Create an account by entering the information below. If you are a returning
                                            customer please login at the top of the page.</p>
                                        <label>Account password <span class="required">*</span></label>
                                        <input type="password" placeholder="password" name="password" id="checkoutPassword" />
                                        
                                    </div>
                                </div>
                               @endguest
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="your-order mb-30 ">
                         <h3>Your order</h3>
                         @if(count($cartItems))
                         <div class="your-order-table table-responsive">
                               <table>
                                  <thead>
                                     <tr>
                                           <th class="product-name">Product</th>
                                           <th class="product-total">Total</th>
                                     </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($cartItems as $index=>$item)
                                        <tr class="cart_item">
                                            <td class="product-name">
                                            {{ $item->title }} <strong class="product-quantity"> × {{ $item->quantity }}</strong>
                                            </td>
                                            <td class="product-total">
                                            <span class="amount">{{ '₦ '. number_format($item->quantity * $item->price) }}</span>
                                            </td>
                                    </tr>
                                    @endforeach
                                     
                                  </tbody>
                                  @php $total = 0 @endphp
                                    @foreach($cartItems as $id => $details)
                                        @php $total += $details->price * $details->quantity @endphp
                                    @endforeach
                                  <tfoot>
                                     <tr class="cart-subtotal">
                                           <th>Cart Subtotal</th>
                                           <td><span class="amount">{{ '₦'.number_format($total) }}</span></td>
                                     </tr>
                                     <tr class="shipping">
                                           <th>Shipping</th>
                                           <td>
                                              <ul>
                                                 <li>
                                                        <input type="hidden" name="amount" value="{{ $total * 100 }}">
                                                       <p><a href="#">Terms & Conditions</</p>
                                                 </li>
                                              </ul>
                                           </td>
                                     </tr>
                                     <tr class="order-total">
                                           <th>Order Total</th>

                                           <td><strong><span class="amount">{{ '₦'.number_format($total) }}</span></strong>
                                           </td>
                                     </tr>
                                  </tfoot>
                               </table>
                         </div>

                         <div class="payment-method">
                            <div class="accordion" id="checkoutAccordion">
                               <div class="accordion-item">
                                  <h2 class="accordion-header" id="paypalThree">
                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                     Paystack
                                     </button>
                                  </h2>
                                  <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                     <div class="accordion-body">
                                     Pay via Paystack with your credit card. They do not save your card details.
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="order-button-payment mt-20">
                               <button type="submit" class="s-btn s-btn-2">Place order</button>
                            </div>
                         </div>
                         @else
                         <p>Heys you cannot order an empty cart</p>
                         @endif
                      </div>
                   </div>
             </div>
          </form>
       </div>
 </section>
 <!-- checkout-area end -->
@endsection