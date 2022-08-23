@extends('layouts.master')

@section('title')
About Us
@endsection

@section('content')


<!-- page title start -->
<section class="page__title-area pt-80 pb-65">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-10">
                <div class="page__title-wrapper text-center">
                    <span class="page__title-pre">Hi, We Are Habi Clothiers</span>
                    <h3 class="page__title">About Us</h3>
                    <p>The most important part of improving at photography has been sharing it. Sign up for an Exposure account, or post regularly to Tumblr, or both. Tell people you’re trying to get better at photography. When you talk about it, other people get excited about it. There are few plugins and apps available for this purpose.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title end -->

<!-- about banner area start -->
<section class="about__banner">
    <div class="container-fluid p-0">
        <div class="row gx-0">
            <div class="col-xxl-12">
                <div class="about__banner-thumb w-img">
                    <img src="{{ url('frontend_assets') }}/assets/img/about/hero.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about banner area end -->

<!-- about history area start -->
<section class="about__history pt-95 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-10">
                <div class="about__history-wrapper">
                    <div class="about__history-title-area">
                        <span class="about__history-title-pre">Our History</span>
                        <h3 class="about__history-title">
                            <span>Hello, We Are Habi Clothiers.</span> <br>
                            With 20+ Years of Experience
                        </h3>
                    </div>
                    <p class="about__history-text">It is accompanied by a case that can contain up to three different diffusers and can be used for dry storage of loose tea. The perfect way to enjoy brewing tea on low hanging fruit to identify. Lighting is a minimal residence located in Tokyo, Japan, designed by AYO. Large tiles were arranged on the counter top plate near the window.</p>

                    <p>The perfect way to enjoy brewing tea on low hanging fruit to identify. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. For me, the most important part of improving at photography has been sharing it. Sign up for an Exposure account, or post regularly to Tumblr, or both. Tell people you’re trying to get better at photography. Talk about it. When you talk about it, other people get excited about it. There are few plugins and apps available for this purpose, many of them required a monthly subscription.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about history area end -->

<!-- features area start -->
<section class="features__area mt-100 pb-75">
    <div class="container">
        <div class="row gx-0">
            <div class="col-xxl-4 offset-xxl-2 col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-6">
                <div class="features__item-2 features__item-pb-40 features__item-br features__item-bb text-center">
                    <div class="features__icon-2">
                        <img src="{{ url('frontend_assets') }}/assets/img/icon/trophy.png" alt="">
                    </div>
                    <div class="features__content-2">
                        <h3 class="features__title-2">20+ Years of Experience</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6">
                <div class="features__item-2 features__item-pb-40 features__item-bb text-center">
                    <div class="features__icon-2">
                        <img src="{{ url('frontend_assets') }}/assets/img/icon/user.png" alt="">
                    </div>
                    <div class="features__content-2">
                        <h3 class="features__title-2">20+ Years of Experience</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 offset-xxl-2  col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-6">
                <div class="features__item-2 features__item-pt-65 features__item-br text-center">
                    <div class="features__icon-2">
                        <img src="{{ url('frontend_assets') }}/assets/img/icon/like.png" alt="">
                    </div>
                    <div class="features__content-2">
                        <h3 class="features__title-2">20+ Years of Experience</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5  col-lg-5  col-md-6">
                <div class="features__item-2 features__item-pt-65 text-center">
                    <div class="features__icon-2">
                        <img src="{{ url('frontend_assets') }}/assets/img/icon/pen.png" alt="">
                    </div>
                    <div class="features__content-2">
                        <h3 class="features__title-2">20+ Years of Experience</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features area end -->

@endsection