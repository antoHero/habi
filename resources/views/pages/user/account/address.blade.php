@extends('layouts.master')

@section('title')
My order history
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
                          <li class="breadcrumb-item active" aria-current="page">Address</li>
                        </ol>
                    </nav>
                </div>                    
            </div>
        </div>
    </div>
</div>

<section class="blog__area pt-10 pb-10">
    <div class="container">
        <div class="row">
            
            @include('pages.user.partials.nav')

            <div class="col-xxl-9 col-xl-9 col-lg-8 order-first order-lg-last">
                <div class="postbox__wrapper pr-45">
                    <div class="postbox__details">
                        <div class="postbox__details-content">
                            <a href="#" class="tag-btn postbox__tag postbox__tag-2">Edit Address</a>
                            <a href="{{ route('user.delivery.address') }}" class="tag-btn postbox__tag postbox__tag-2">Back to address book</a>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('user.update.address', $address->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                             <label>First name <span class="required">*</span></label>
                                             <input 
                                                 type="text" 
                                                 placeholder="First name" 
                                                 name="firstname" 
                                                 class="@error('firstname') is-invalid @enderror" 
                                                 value="{{ $address->firstname }}" 
                                             />
                                        </div>
                                     </div>
                                     
                                     <div class="col-md-6">
                                        <div class="checkout-form-list">
                                             <label>Last name <span class="required">*</span></label>
                                             <input 
                                                 type="text" 
                                                 placeholder="Last name" 
                                                 name="lastname" 
                                                 class="@error('lastname') is-invalid @enderror" 
                                                 value="{{ $address->lastname }}" 
                                             />
                                        </div>
                                     </div>
                                    <div class="col-md-6">
                                       <div class="country-select">
                                            <label>Country <span class="required">*</span></label>
                                            <select 
                                                name="country" 
                                                class="newAddressCountry @error('country') is-invalid @enderror" 
                                                value="{{ old('country') }}"
                                            >
                                                @foreach($countries as $country)
                                                <option value="{{ $address->country }}">{{ $address->country }}</option>
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                                @endforeach
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                             <label>State <span class="required">*</span></label>
                                             <input 
                                                 type="text" 
                                                 placeholder="State" 
                                                 name="state" 
                                                 class="@error('state') is-invalid @enderror" 
                                                 value="{{ $address->state }}" 
                                             />
                                        </div>
                                     </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Street Address <span class="required">*</span></label>
                                            <input 
                                                type="text" 
                                                placeholder="Street address" 
                                                name="address" 
                                                class="@error('address') is-invalid @enderror" 
                                                value="{{ $address->address }}" 
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="checkout-form-list">
                                            <label>City <span class="required">*</span></label>
                                            <input 
                                                type="text" 
                                                placeholder="City" 
                                                name="city" 
                                                class="@error('city') is-invalid @enderror" 
                                                value="{{ $address->city }}" 
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="checkout-form-list">
                                            <label>Postal Code <span class="required">*</span></label>
                                            <input 
                                                type="text" 
                                                placeholder="Postal Code" 
                                                name="code" 
                                                class="@error('code') is-invalid @enderror" 
                                                value="{{ $address->code }}" 
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input 
                                                type="text" 
                                                placeholder="Phone" 
                                                name="phone" 
                                                class="@error('phone') is-invalid @enderror" 
                                                value="{{ $address->phone }}" 
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="ship-different-title">
                                            <h3>
                                               <label>Set as default address?</label>
                                               <input id="ship-box" type="checkbox" name="default" value="{{ $address->is_default }}" @if($address->is_default == 'Yes') @checked(true) @endif />
                                            </h3>
                                         </div>
                                    </div>
                                    <div class="order-button-payment mt-20">
                                        <button type="submit" class="s-btn s-btn-2">Update</button>
                                     </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection