@extends('layouts.master')

@section('title')
Special Order {{ $product->slug }}
@endsection

@section('content')


 <!-- subscribe area start -->
 <div class="subscribe-area pb-100 gray-bg-2 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title text-center">
                    <span class="p-subtitle">Special order</span>
                    <h3 class="p-title pb-15 mb-0">{{ $product->name }}</h3>
                    <div class="about__me">
                        <div class="about__me-contact mb-35">
                            <ul>
                                <li>Name: <a href="mailto:puik@Theme_pure.com">{{ $product->name }}</a></li>
                                <li>Cost of fabric: {{ '₦'.number_format($product->amount) }}</li>
                                <li class="about__me-title">PS: <span>The cost does not include workmanship and designs (if any)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-8">
                <div class="subscribe-form text-center">
                    
                    <form action="{{ route('submit.measurement', $product->slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="main-wrapper">
                            <div class="upload-main-wrapper">
                                <div class="upload-wrapper">
                                    <input type="file" id="upload-file" name="measurement" accept=".doc,.docx,.pdf">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                                    <span class="file-upload-text">Upload File</span>
                                    <div class="file-success-text">
                                        <svg version="1.1" id="check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 100 100"  xml:space="preserve">
                                            <circle style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;" cx="49.799" cy="49.746" r="44.757"/>
                                            <polyline style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                                            27.114,51 41.402,65.288 72.485,34.205 "/>
                                        </svg> 
                                        <span>Successful</span>
                                    </div>
                                </div>
                                <p id="file-upload-name"></p>
                            </div>
                        </div>
                        <div class="showUploadDiv">
                            <button type="submit" class="subscribe-btn subscribe-btn-1 mt-50 submitMeasurementBtn">Submit Measurement</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- subscribe area end -->
    
  

@endsection