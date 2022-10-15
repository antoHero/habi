@extends('layouts.dashboard')

@section('title')
    Orders
@endsection

@section('section')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">{{ $page['title'] }}</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $page['breadcrumb'] }}</a></li>
                                <li class="breadcrumb-item active">{{ $page['title'] }}</li>
                            </ol>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
                        </div><!--end col-->  
                    </div><!--end row-->                                                              
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body invoice-head"> 
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="list-inline mb-0 contact-detail float-right">                                                   
                                    <li class="list-inline-item">
                                        <div class="pl-3">
                                            <i class="mdi mdi-web"></i>
                                            <p class="text-muted mb-0">www.habiclothiers.com</p>
                                        </div>                                                
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="pl-3">
                                            <i class="mdi mdi-phone"></i>
                                            <p class="text-muted mb-0">{{ $site_detail->phone1 }}</p>
                                            <p class="text-muted mb-0">{{ $site_detail->phone1 }}</p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="pl-3">
                                            <i class="mdi mdi-map-marker"></i>
                                            <p class="text-muted mb-0">{{ $site_detail->address }}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--end col-->    
                        </div><!--end row-->     
                    </div><!--end card-body-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="">
                                    <h6 class="mb-0"><b>Order Date :</b> {{ date_format($order->created_at, 'd/m/Y') }}</h6>
                                    <h6><b>Order Reference :</b> # {{ $order->reference }}</h6>
                                </div>
                            </div><!--end col--> 
                            <div class="col-md-4">
                                <div class="">
                                    <address class="font-13">
                                        <strong class="font-14">Shipped To:</strong><br>
                                        {{ $order->name }}<br>
                                        {{ $order->address }}<br>
                                        {{ $order->city }}, {{ $order->state }}<br>
                                        <abbr title="Phone">Phone:</abbr> {{ $order->phone }}
                                    </address>
                                </div>
                            </div> <!--end col-->                                           
                            
                            <div class="col-md-4">
                                <div class="text-center bg-light p-3 mb-3">
                                    <h5 class="bg-info mt-0 p-2 text-white d-sm-inline-block">Payment Methods</h5>
                                    <h6 class="font-13">Card</h6>
                                </div>                                              
                            </div><!--end col-->                                           
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive project-invoice">
                                    <table class="table table-bordered mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Item</th>
                                                <th>Cost</th>
                                                <th>Qty</th> 
                                                <th>Subtotal</th>
                                            </tr><!--end tr-->
                                        </thead>
                                        <tbody>
                                            @foreach($order->order_items as $key=>$item)
                                            <tr>
                                                <td>
                                                    <h5 class="mt-0 mb-1 font-14">{{ $item->name }}</h5>
                                                    <p class="mb-0 text-muted"><span>Color: </span> {{ $item->color }}</p>
                                                    <p class="mb-0 text-muted"><span>Size: </span> {{ $item->size }}</p>
                                                </td>
                                                <td>{{ '₦' . number_format($item->amount) }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ '₦' . number_format($item->amount * $item->qty) }}</td>
                                            </tr><!--end tr-->
                                            @endforeach
                                        </tbody>
                                    </table><!--end table-->
                                </div>  <!--end /div-->                                          
                            </div>  <!--end col-->                                      
                        </div><!--end row-->

                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                
                            </div> <!--end col-->                                       
                            <div class="col-lg-6 align-self-end">
                                <div class="float-right" style="width: 30%;">
                                    <small>Account Manager</small>
                                    <img src="assets/images/signature.png" alt="" class="mt-2 mb-1" height="26">
                                    <p class="border-top">Signature</p>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        <hr>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                                <div class="text-center"><small class="font-12">Thank you very much for doing business with us.</small></div>
                            </div><!--end col-->
                            <div class="col-lg-12 col-xl-4">
                                <div class="float-right d-print-none">
                                    <a href="javascript:window.print()" class="btn btn-info"><i class="fa fa-print"></i></a>
                                    <a href="#" class="btn btn-primary">Submit</a>
                                    <a href="#" class="btn btn-danger">Cancel</a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div>

    </div><!-- container -->

    @include('partials.backend_partials.credits')
</div>
@endsection