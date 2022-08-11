@extends('layouts.master')

@section('title')
Success
@endsection

@section('content')


 <!-- subscribe area start -->
 <div class="subscribe-area pb-100 gray-bg-2 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title text-center">
                    <i class="fal fa-check-square fa-5x text-success"></i>
                    <span class="text-success p-subtitle">Your request has been processed successfully</span>
                    
                </div>
                <div class="text-center mt-50">
                    <a href="{{ url('/') }}" class="subscribe-btn subscribe-btn-1">Continue shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- subscribe area end -->
    
  

@endsection