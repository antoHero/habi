@extends('layouts.master')

@section('title')
My order history
@endsection

@section('content')
<div class="breadcrumb-area-2 pt-45 pb-45 include-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">     
                <div class="breadcrumb-wrapper-2 text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item" aria-current="page">My Addresses</li>
                        </ol>
                    </nav>
                </div>                    
            </div>
        </div>
    </div>
</div>

<section class="blog__area pt-100 pb-100">
    <div class="container">
        <div class="row">
            
            @include('pages.user.partials.nav')

            <div class="col-xxl-9 col-xl-9 col-lg-8 order-first order-lg-last">
                <div class="postbox__wrapper pr-45">
                    <div class="postbox__details">
                        <div class="postbox__details-content">
                            <a href="#" class="tag-btn postbox__tag postbox__tag-2">My Addresses</a>
                            <a href="{{ route('user.new.address') }}" class="tag-btn postbox__tag postbox__tag-2">Add New</a>
                            
                            @if(count($addresses))
                            <div class="row">
                                @foreach($addresses as $address)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 @if($address->is_default == 'Yes' ) default-address @endif">
                                    <div class="contact__address-item">
                                        <div class="contact__address-content">
                                            <ul>
                                                <li><b>Name</b> {{ $address->firstname .' '. $address->lastname}} </li>
                                                <li><b>Address</b> {{ $address->address }}, {{ $address->city }}, {{ $address->state }}.</li>
                                                <li><b>Country</b> {{ $address->country }}, {{ $address->state }}, {{ $address->country }}.</li>
                                                <li><b>Phone</b> <a href="tel:{{ $address->phone }}">{{ $address->phone }}</a></li>
                                            </ul>
                                            <div class="about__me-social">
                                                <ul>
                                                    <li class="pb-10"><a href="{{ route('user.get.address', $address->id) }}" class="contact__form-btn mt-15">Edit</a></li>
                                                    <li><a href="{{ route('user.delete.address', $address->id) }}" class="mt-15">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <div class="subscribe-area pb-100 pt-95">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="section-title text-center">
                                                <span class="p-subtitle">You currently have no saved address</span>
                                                <a href="{{ route('user.new.address') }}" type="button" class="subscribe-btn subscribe-btn-1">Add an Address</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection