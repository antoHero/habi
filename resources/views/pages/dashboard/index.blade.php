@extends('layouts.dashboard')

@section('title')
Dashboard
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
                            <h4 class="page-title">Sales</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dastyle</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
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
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Revenu Status</h4>                      
                            </div><!--end col-->
                            <div class="col-auto"> 
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       This Month<i class="las la-angle-down ml-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">This Year</a>
                                    </div>
                                </div>               
                            </div><!--end col-->
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body"> 
                        <div class="">
                            <div id="Revenu_Status" class="apex-charts"></div>
                        </div>                                                                                                                          
                    </div><!--end card-body--> 
                </div><!--end card-->   
            </div><!-- end col--> 
            <div class="col-lg-4">
                <div class="card"> 
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Earning Reports</h4>                   
                            </div><!--end col-->  
                            <div class="col-auto"> 
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       This Week<i class="las la-angle-down ml-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Mont</a>
                                        <a class="dropdown-item" href="#">This Year</a>
                                    </div>
                                </div>               
                            </div><!--end col-->                                      
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body border-bottom-dashed">
                        <div class="earning-data text-center">
                            <img src="{{ url('backend_assets') }}/images/money-beg.png" alt="" class="money-bag my-3" height="60">
                            <h5 class="earn-money mb-1">$51,255</h5>
                            <p class="text-muted font-15 mb-4">Total Revenue</p>
                            <div class="text-center my-2">
                                <h6 class="text-primary bg-soft-primary p-3 mb-0 font-11 rounded">
                                    <i data-feather="target" class="align-self-center icon-xs mr-1"></i>
                                    Target $90,000
                                    <span class="mx-2">/</span>
                                    <i data-feather="dollar-sign" class="align-self-center icon-xs mr-1"></i>
                                    Last Month $68,550
                                </h6>
                            </div> 
                        </div>                                                                                                          
                    </div><!--end card-body-->
                    <div class="card-body my-1">
                        <div class="row">
                            <div class="col">
                                <div class="media">
                                    <i data-feather="shopping-cart" class="align-self-center icon-md text-secondary mr-2"></i>
                                    <div class="media-body align-self-center"> 
                                        <h6 class="m-0 font-24">128</h6>
                                        <p class="text-muted mb-0">Today's New Order</p>                                                                                                                                               
                                    </div><!--end media body-->
                                </div>
                            </div><!--end col--> 
                            <div class="col">
                                <div class="media">
                                    <i data-feather="dollar-sign" class="align-self-center icon-md text-secondary mr-2"></i>
                                    <div class="media-body align-self-center"> 
                                        <h6 class="m-0 font-24">$5,335</h6>
                                        <p class="text-muted mb-0">Today's Revenue</p>                                                                                          
                                    </div><!--end media body-->
                                </div>
                            </div><!--end col--> 
                            
                        </div><!--end row-->  
                    </div><!--end card-body-->
                </div><!--end card-->   
            </div><!-- end col-->                                     
        </div><!--end row-->
        <div class="row">  
            <div class="col-lg-4">
                <div class="card"> 
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Order by Channel</h4>                      
                            </div><!--end col-->                                        
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body">  
                        <div class="border-bottom-dashed mb-4">
                            <div class="media mb-3">
                                <img src="{{ url('backend_assets') }}/images/brand-logo/amazon.png" height="40" class="mr-3 align-self-center rounded" alt="...">
                                <div class="media-body align-self-center"> 
                                    <h6 class="mt-0 mb-1">Amazon</h6>
                                    <p class="text-muted mb-1"><span class="text-success">+4.8%</span> From Yesterday</p>
                                    <small class="float-right text-muted ml-3 font-11">42%</small>
                                    <div class="progress mt-2" style="height:4px;">
                                        <div class="progress-bar bg-warning-50" role="progressbar" style="width: 42%; border-radius:5px;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>                                                                                          
                                </div><!--end media body-->
                            </div>                                        
                        </div> 
                        <div class="border-bottom-dashed mb-4">
                            <div class="media mb-3">
                                <img src="{{ url('backend_assets') }}/images/brand-logo/flipcart.png" height="40" class="mr-3 align-self-center rounded" alt="...">
                                <div class="media-body align-self-center"> 
                                    <h6 class="mt-0 mb-1">Flipcart</h6>
                                    <p class="text-muted mb-1"><span class="text-danger">-0.8%</span> From Yesterday</p>
                                    <small class="float-right text-muted ml-3 font-11">28%</small>
                                    <div class="progress mt-2" style="height:4px;">
                                        <div class="progress-bar bg-warning-50" role="progressbar" style="width: 28%; border-radius:5px;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>                                                                                          
                                </div><!--end media body-->
                            </div>                                        
                        </div>    
                        <div class="border-bottom-dashed mb-4">
                            <div class="media mb-3">
                                <img src="{{ url('backend_assets') }}/images/brand-logo/facebook.png" height="40" class="mr-3 align-self-center rounded" alt="...">
                                <div class="media-body align-self-center"> 
                                    <h6 class="mt-0 mb-1">Facebook</h6>
                                    <p class="text-muted mb-1"><span class="text-success">+2.1%</span> From Yesterday</p>
                                    <small class="float-right text-muted ml-3 font-11">18%</small>
                                    <div class="progress mt-2" style="height:4px;">
                                        <div class="progress-bar bg-warning-50" role="progressbar" style="width: 18%; border-radius:5px;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>                                                                                          
                                </div><!--end media body-->
                            </div>                                        
                        </div>
                        <div class="">
                            <!-- <div id="Order_channel" class="apex-charts"></div> -->
                            <div class="media mb-1">
                                <img src="{{ url('backend_assets') }}/images/brand-logo/insta.png" height="40" class="mr-3 align-self-center rounded" alt="...">
                                <div class="media-body align-self-center"> 
                                    <h6 class="mt-0 mb-1">Instagram</h6>
                                    <p class="text-muted mb-1"><span class="text-danger">-1.1%</span> From Yesterday</p>
                                    <small class="float-right text-muted ml-3 font-11">12%</small>
                                    <div class="progress mt-2" style="height:4px;">
                                        <div class="progress-bar bg-warning-50" role="progressbar" style="width: 12%; border-radius:5px;" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>                                                                                          
                                </div><!--end media body-->
                            </div>                                        
                        </div> 
                    </div><!--end card-body--> 
                </div><!--end card-->   
            </div><!-- end col-->     
            <div class="col-lg-8">
                <div class="card">                                
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">High Sales in Top 5 Country</h4>                      
                            </div><!--end col-->
                            <div class="col-auto"> 
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Today<i class="las la-angle-down ml-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Yesterday</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                    </div>
                                </div>          
                            </div><!--end col-->
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->                                 
                    <div class="card-body">  
                        <div class="row"> 
                            <div class="col-lg-7">
                                <div id="usa" class="" style="height: 290px"></div> 
                            </div><!--end col-->
                            <div class="col-lg-5 align-self-center"> 
                                <ul class="list-group custom-list-group mb-n3">
                                    <li class="list-group-item align-items-center d-flex justify-content-between py-2">
                                        <div class="media">
                                            <img src="{{ url('backend_assets') }}/images/flags/us_flag.jpg" height="15" class="mr-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center"> 
                                                <h6 class="m-0">USA</h6>                                                                                          
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="mb-n2">$45,552</span>                                                        
                                        </div>                                            
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between py-2">
                                        <div class="media">
                                            <img src="{{ url('backend_assets') }}/images/flags/germany_flag.jpg" height="15" class="mr-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center"> 
                                                <h6 class="m-0">Germany</h6>                                                                                          
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="mb-n2">$38,526</span>                                                        
                                        </div>                                            
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between py-2">
                                        <div class="media">
                                            <img src="{{ url('backend_assets') }}/images/flags/french_flag.jpg" height="15" class="mr-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center"> 
                                                <h6 class="m-0">French</h6>                                                                                          
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="mb-n2">$28,560</span>                                                        
                                        </div>                                            
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between py-2">
                                        <div class="media">
                                            <img src="{{ url('backend_assets') }}/images/flags/spain_flag.jpg" height="15" class="mr-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center"> 
                                                <h6 class="m-0">Spain</h6>                                                                                          
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="mb-n2">$15,985</span>                                                        
                                        </div>                                            
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between py-2">
                                        <div class="media">
                                            <img src="{{ url('backend_assets') }}/images/flags/italy_flag.jpg" height="15" class="mr-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center"> 
                                                <h6 class="m-0">Italy</h6>                                                                                          
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="mb-n2">$7,220</span>                                                        
                                        </div>                                            
                                    </li>
                                </ul>  
                            </div><!--end col-->
                        </div><!--end row-->  
                        <div class="row text-center mt-5">  
                            <div class="col">
                                <img src="{{ url('backend_assets') }}/images/brand-logo/amazon.svg" alt=""  height="25">
                            </div> <!--end col-->   
                            <div class="col">
                                <img src="{{ url('backend_assets') }}/images/brand-logo/google.svg" alt="" height="25">
                            </div> <!--end col-->   
                            <div class="col">
                                <img src="{{ url('backend_assets') }}/images/brand-logo/lenovo.svg" alt="" height="25">
                            </div> <!--end col-->   
                            <div class="col">
                                <img src="{{ url('backend_assets') }}/images/brand-logo/paypal.svg" alt="" height="25">
                            </div> <!--end col-->                                                   
                            <div class="col">
                                <img src="{{ url('backend_assets') }}/images/brand-logo/shopify.svg" alt="" height="25">
                            </div> <!--end col--> 
                        </div><!--end row-->                                   
                    </div><!--end card-body--> 
                </div><!--end card-body-->
            </div> <!--end col-->                            
        </div><!--end row-->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Earnings Reports</h4>                      
                            </div><!--end col-->                                        
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Date</th>                                                            
                                        <th class="border-top-0">Item Count</th>
                                        <th class="border-top-0">Text</th>
                                        <th class="border-top-0">Earnings</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>                                                        
                                        <td>01 January</td>                                                            
                                        <td>50</td>
                                        <td class="text-danger">-$70</td>
                                        <td>$15,000</td>
                                    </tr><!--end tr-->     
                                    <tr>                                                        
                                        <td>02 January</td>
                                        <td>25</td>
                                        <td>-</td>
                                        <td>$9,500</td>
                                        
                                    </tr><!--end tr-->    
                                    <tr>                                                        
                                        <td>03 January</td>
                                        <td>65</td>
                                        <td class="text-danger">-$115</td>
                                        <td>$35,000</td>
                                        
                                    </tr><!--end tr-->    
                                    <tr>                                                        
                                        <td>04 January</td>
                                        <td>20</td>
                                        <td>-</td>
                                        <td>$8,500</td>
                                    </tr><!--end tr-->    
                                    <tr>                                                        
                                        <td>05 January</td>
                                        <td>40</td>
                                        <td class="text-danger">-$60</td>
                                        <td>$12,000</td>                                                            
                                    </tr><!--end tr-->    
                                    <tr>                                                        
                                        <td>06 January</td>
                                        <td>45</td>
                                        <td class="text-danger">-$65</td>
                                        <td>$13,500</td>                                                            
                                    </tr><!--end tr-->                            
                                </tbody>
                            </table> <!--end table-->                                               
                        </div><!--end /div-->
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col-->   
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Most Populer Products</h4>                      
                            </div><!--end col-->                                        
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Product</th>
                                        <th class="border-top-0">Price</th>
                                        <th class="border-top-0">Sell</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Action</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>                                                        
                                        <td>
                                            <div class="media">
                                                <img src="{{ url('backend_assets') }}/images/products/01.png" height="40" class="mr-3 align-self-center rounded" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="m-0">Dastyle Camera EDM 5D(White)</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A3652</a>                                                                                           
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$50 <del class="text-muted font-10">$70</del></td>                                   
                                        <td>450 <small class="text-muted">(550)</small></td>
                                        <td><span class="badge badge-soft-warning px-2">Stock</span></td>
                                        <td>                                                       
                                            <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->     
                                    <tr>                                                        
                                        <td>
                                            <div class="media">
                                                <img src="{{ url('backend_assets') }}/images/products/02.png" height="40" class="mr-3 align-self-center rounded" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="m-0">Dastyle Shoes Max-Zon</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A5002</a>                                                                                          
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$99 <del class="text-muted font-10">$150</del></td>                                   
                                        <td>750 <small class="text-muted">(00)</small></td>
                                        <td><span class="badge badge-soft-primary px-2">Out of Stock</span></td>
                                        <td>                                                       
                                            <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->    
                                    <tr>                                                        
                                        <td>
                                            <div class="media">
                                                <img src="{{ url('backend_assets') }}/images/products/04.png" height="40" class="mr-3 align-self-center rounded" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="m-0">Dastyle Mask N99 [ISI]</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A6598</a>                                                                                           
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$199 <del class="text-muted font-10">$250</del></td>                                   
                                        <td>280 <small class="text-muted">(220)</small></td>
                                        <td><span class="badge badge-soft-warning px-2">Stock</span></td>
                                        <td>                                                       
                                            <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->    
                                    <tr>                                                        
                                        <td>
                                            <div class="media">
                                                <img src="{{ url('backend_assets') }}/images/products/img-5.png" height="40" class="mr-3 align-self-center rounded" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="m-0">Dastyle Bag (Blue)</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A9547</a>                                                                                            
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$40 <del class="text-muted font-10">$49</del></td>                                   
                                        <td>500 <small class="text-muted">(1000)</small></td>
                                        <td><span class="badge badge-soft-primary px-2">Out of Stock</span></td>
                                        <td>                                                       
                                            <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->    
                                                                  
                                </tbody>
                            </table> <!--end table-->                                               
                        </div><!--end /div-->
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col-->                                                   
        </div><!--end row-->
        
    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        &copy; 2020 Dastyle <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
    </footer><!--end footer-->
</div>
@endsection