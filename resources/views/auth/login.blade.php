@extends('layouts.master')

@section('title')
Log into your account
@endsection

@section('content')

<!-- breadcrumb area start -->
<div class="breadcrumb-area-2 pt-20 pb-40 include-bg" data-background="{{ url('frontend_assets') }}/assets/img/page-title/page-title-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">     
                <div class="breadcrumb-wrapper-2 text-center">
                    <h3>login</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" style="background-color: #fff; color: #000; padding: 20px 0 20px 0;">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">login</li>
                        </ol>
                    </nav>
                </div>                    
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- login area start -->
<section class="login-area pt-10 pb-100">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 offset-lg-2">
                <div class="basic-login">
                   <h3 class="text-center mb-60">{{ __('Login to your account') }}</h3>
                   <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <label for="name">{{ __('Email Address') }} <span>*</span></label>
                        <input 
                            placeholder="Email Address..." 
                            id="email" 
                            type="email" name="email" 
                            :value="old('email')" 
                            required autofocus 
                        />
                        <label for="password">{{ __('Password') }} <span>*</span></label>
                        

                        <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password..."
                            required autocomplete="current-password" 
                        />
                        
                        <div class="login-action mb-20 fix">
                        <span class="log-rem f-left">
                        <input id="remember_me" type="checkbox" name="remember" />
                        <label for="remember">{{ __('Remember me') }}</label>
                        </span>
                        <span class="forgot-login f-right">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </span>
                    </div>
                      <button type="submit" class="s-btn s-btn-4 w-100">{{ __('Login Now') }}</button>
                      <div class="or-divide"><span>or</span></div>
                      <a href="{{ route('register') }}" class="s-btn s-btn-2 w-100">{{ __('Create A New Account') }}</a>
                   </form>
                </div>
          </div>
       </div>
    </div>
 </section>
<!-- login area end -->

@endsection