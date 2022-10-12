<header >
    <div class="header-area">
        <div class="header-top pl-60 pr-60 d-none d-md-block">
            <div class="row align-items-center">
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-4">

                </div>
                <div class="col-xxl-4 col-xl-4 d-none d-xl-block">
                    <p class="white-text center-text">Our stores are open — welcome back. COVID-19 Updates.</p>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-8">
                    <div class="topbar-menu">
                        <ul class="end-text">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header-main header-main-2 header-padding-2 pl-60 pr-60 header-sticky header-sticky-white">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-4">
                    <div class="header-left">
                        <div class="logo pr-55 d-inline-block">
                            <a href="{{ url('/') }}">
                              HABICLOTHIERS
                              <!-- <img src="{{ url('frontend_assets') }}/assets/img/logo/logo-black.png" alt="#"> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-8 col-lg-8 d-none d-lg-block">
                    <div class="main-menu p-rel d-flex align-items-center justify-content-center">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="{{ route('get.women.area') }}">Women</a></li>
                                <li class="static">
                                    <a href="{{ route('get.men.area') }}">Men</a>
                                </li>
                                <li>
                                    <a href="{{ route('get.fabrics.area') }}">Fabrics</a>
                                </li>
                                <li>
                                    <a href="{{ route('get.accessories.area') }}">Accessories</a>
                                </li>
                                <li>
                                    <a href="{{ route('get.styles.area') }}">Styles</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-8 col-sm-6 col-8">
                    <div class="header-right-wrapper d-flex align-items-center justify-content-end">
                        <div class="header-right header-right-2 d-flex align-items-center justify-content-end">
                            {{-- <a href="login.html" class="d-none d-xxl-inline-block">Login / Register</a> --}}
                            <div class="header-icon header-icon-2 d-inline-block ml-30">
                                <a href="javascript:void(0)" class="search-toggle"><i class="fal fa-search"></i></a>
                                <a href="{{ route('login') }}" title="My Account" class="d-none d-xl-inline-block"><i class="fal fa-user"></i></a>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#cartMiniModal"><i class="fal fa-shopping-cart"></i><span id="cartItemsCount">{{ count($cartItems) }}</span></button>
                            </div>
                        </div>
                        <div class="header-bar ml-20 d-lg-none">
                            <button type="button" class="header-bar-btn header-bar-btn-black" data-bs-toggle="modal" data-bs-target="#offCanvasModal">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
