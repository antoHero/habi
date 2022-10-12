<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Habi CLothiers</title>
<meta name="description" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="_token" content="{{ csrf_token() }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend_assets') }}/assets/img/favicon.ico">
<!-- Place favicon.ico in the root directory -->

<!-- CSS here -->
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/preloader.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/animate.min.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/magnific-popup.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/meanmenu.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/animate.min.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/slick.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/themify-icons.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/nice-select.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/ui-range-slider.css">
<link rel="stylesheet" href="{{ url('frontend_assets') }}/assets/css/main.css">

@include('partials.custom_css')
<style type="text/css">
  /* .loading-button {
    display: inline-flex;
  	 flex-direction: column;
  	 margin-top: 1em;
  }
  .loading-button button{
    border-color: #000;
  	background: #000;
    color: #fff;
  	margin: 0.25em 1em;
  }
  .loading-button button:active, .loading-button button:focus, .loading-button button.disabled {
    background: #004d00 !important;
    border-color: #004d00;
  }

   */
.submitMeasurementBtn:disabled {
  cursor: not-allowed;
}
svg:not(:root) {
    overflow: hidden;
}
.main-wrapper {
    max-width: 1170px;
    margin: 0 auto;
    text-align: center;
}
.upload-main-wrapper{
    width: 220px;
    margin: 0 auto;
}
#file-upload-name{
    margin: 4px 0 0 0;
    font-size: 12px;
}
.upload-wrapper {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    margin: 40px auto 0;
    position: relative;
    cursor: pointer;
    background-color: #be7823;
    padding: 8px 10px;
    border-radius: 10px;
    overflow: hidden;
    transition: 0.2s linear all;
    color: #ffffff;
}
.upload-wrapper input[type="file"] {
    width: 100%;
    position: absolute;
    left: 0;
    right: 0;
    opacity: 0;
    top: 0;
    bottom: 0;
    cursor: pointer;
    z-index: 1;
}
.upload-wrapper > svg {
    width: 50px;
    height: auto;
    cursor: pointer;
}
.upload-wrapper.success > svg{
    transform: translateX(-200px);
}
.upload-wrapper.uploaded {
    transition: 0.2s linear all;
    width: 60px;
    border-radius: 50%;
    height: 60px;
    text-align: center;
}
.upload-wrapper .file-upload-text {
    position: absolute;
    left: 80px;
    opacity: 1;
    visibility: visible;
    transition: 0.2s linear all;
}
.upload-wrapper.uploaded .file-upload-text {
    text-indent: -999px;
    margin: 0;
}
.file-success-text {
    opacity: 0;
    transition: 0.2s linear all;
    visibility: hidden;
    transform: translateX(200px);
    position: absolute;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}
.file-success-text svg {
    width: 25px;
    height: auto;
}
.file-success-text span{
   margin-left: 15px;
}
.upload-wrapper.success .file-success-text{
    opacity: 1;
    visibility: visible;
    transform: none;
}
.upload-wrapper.success.uploaded .file-success-text{
    opacity: 1;
    visibility: visible;
    transform: none;
}
.upload-wrapper.success.uploaded .file-success-text span{
    display: none;
}
.upload-wrapper .file-success-text circle{
	  stroke-dasharray: 380;
    stroke-dashoffset: 380;
    transition: 1s linear all;
    transition-delay: 1.4s;
}
.upload-wrapper.success .file-success-text  circle {
	stroke-dashoffset: 0;
}
.upload-wrapper .file-success-text polyline {
	stroke-dasharray: 380;
	stroke-dashoffset: 380;
	transition: 1s linear all;
	transition-delay: 2s;
}
.upload-wrapper.success .file-success-text polyline {
    stroke-dashoffset: 0;
}
.upload-wrapper.success .file-upload-text{
    -webkit-animation-name: bounceOutLeft;
    animation-name: bounceOutLeft;
    -webkit-animation-duration: 0.2s;
    animation-duration: 0.2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
@-webkit-keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px, 0, 0);
        transform: translate3d(20px, 0, 0);
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0);
    }
}

@keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px, 0, 0);
        transform: translate3d(20px, 0, 0);
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0);
    }
}

#active-link a {
    color: #f57e60;
}

.is-invalid {
    border: 2px solid red !important;
}
.default-address {
    border: 2px solid #f57e60;
}

#editAddressBtn {
    background-color: #ffffff;
    color: #f57e60;
}

#deleteAddressBtn {
    background-color: #f57e60;
    cursor: pointer;
    color: #fff;
}

@media (max-width: 575px)
.breadcrumb-area-2 {
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
