@extends('layouts.master')

@section('title')
My Account
@endsection

@section('content')
<div class="breadcrumb-area-2 pt-10 pb-10 include-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">     
                <div class="breadcrumb-wrapper-2 text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Settings</li>
                        </ol>
                    </nav>
                </div>                    
            </div>
        </div>
    </div>
</div>

<section class="blog__area pt-10 pb-100">
    <div class="container">
        <div class="row">
            
            @include('pages.user.partials.nav')

            <div class="col-xxl-9 col-xl-9 col-lg-8 order-first order-lg-last">
                <div class="postbox__wrapper pr-45">
                    <div class="postbox__details">
                        <div class="postbox__details-content">
                            <a href="#" class="tag-btn postbox__tag postbox__tag-2">Update Email</a>
                            
                            <div class="postbox__author d-sm-flex align-items-start">
                               
                                <div class="postbox__author-content">
                                    <form action="{{ route('user.update.email') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <div class="postbox__comment-input">
                                                    <input class="@error('update_email')
                                                        is-invalid
                                                    @enderror" type="email" placeholder="Email" value="{{ auth()->user()->email }}" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <div class="postbox__comment-input">
                                                    <input class="@error('password')
                                                        is-invalid
                                                    @enderror" type="password" placeholder="" name="password">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12">
    
                                                <div class="postbox__comment-btn text-center">
                                                    <button type="submit" class="s-btn s-btn-2 s-btn-big-2">Update Email</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="postbox__wrapper pr-45 pt-20">
                    <div class="postbox__details">
                        <div class="postbox__details-content">
                            <a href="#" class="tag-btn postbox__tag postbox__tag-2">Update Password</a>
                            
                            <div class="postbox__author d-sm-flex align-items-start">
                               
                                <div class="postbox__author-content">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('user.update.password') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <div class="postbox__comment-input">
                                                    <input class="@error('old_password')
                                                        is-invalid
                                                    @enderror" type="password" placeholder="Current Password" name="old_password">
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <div class="postbox__comment-input">
                                                    <input class="@error('new_password')
                                                        is-invalid
                                                    @enderror" type="password" placeholder="New Password" name="new_password">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <div class="postbox__comment-input">
                                                    <input class="@error('new_password_confirmation')
                                                        is-invalid
                                                    @enderror" type="password" placeholder="Confirm Password" name="new_password_confirmation">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12">
    
                                                <div class="postbox__comment-btn text-center">
                                                    <button type="submit" class="s-btn s-btn-2 s-btn-big-2">Update Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>
@endsection