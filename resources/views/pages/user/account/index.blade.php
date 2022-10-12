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
                          <li class="breadcrumb-item active" aria-current="page">My Account</li>
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
                            <a href="#" class="tag-btn postbox__tag postbox__tag-2">My Profile</a>
                            
                            <div class="postbox__author d-sm-flex align-items-start">
                               
                                <div class="postbox__author-content">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <div class="postbox__comment-input">
                                                    <input type="text" placeholder="Name" value="{{ auth()->user()->name }}">
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="postbox__comment-input">
                                                    <input type="text" placeholder="Email" value="{{ auth()->user()->email }}">
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="postbox__comment-input">
                                                    <input type="text" placeholder="Phone" value="{{ auth()->user()->profile->phone }}">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12">
    
                                                <div class="postbox__comment-btn text-center">
                                                    <button type="submit" class="s-btn s-btn-2 s-btn-big-2">Update</button>
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