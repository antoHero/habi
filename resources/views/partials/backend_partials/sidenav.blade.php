<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="crm-index.html" class="logo">
            <span>
                Habiclothiers
                {{-- <img src="{{ url('backend_assets') }}/images/logo-sm.png" alt="logo-small" class="logo-sm"> --}}
            </span>
            <span>
                {{-- Habiclothiers --}}
                {{-- <img src="{{ url('backend_assets') }}/images/logo.png" alt="logo-large" class="logo-lg logo-light"> --}}
                {{-- <img src="{{ url('backend_assets') }}/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark"> --}}
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li class="menu-label mt-0">Main</li>
            <li>
                <a href="widgets.html"><i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="javascript: void(0);"> <i data-feather="code" class="align-self-center menu-icon"></i><span>Categories</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('all.categories') }}"><i class="ti-control-record"></i>All Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('all.subcategories') }}"><i class="ti-control-record"></i>All Subcategories</a></li>
                </ul>
            </li>


            <li>
                <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Products</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('all.apparels') }}"><i class="ti-control-record"></i>Apparels</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('fabrics.index') }}"><i class="ti-control-record"></i>Fabrics </a></li>
                    <li class="nav-item"><a class="nav-link" href="apps-calendar.html"><i class="ti-control-record"></i>Accessories</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('styles.index') }}"><i class="ti-control-record"></i>Styles</a></li>

                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i data-feather="credit-card" class="align-self-center menu-icon"></i><span>Orders</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('orders.pending') }}"><i class="ti-control-record"></i>Pending</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('orders.progress') }}"><i class="ti-control-record"></i>Progress</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('orders.delivered') }}"><i class="ti-control-record"></i>Delivered</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('orders.cancelled') }}"><i class="ti-control-record"></i>Cancelled</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('orders.index') }}"><i class="ti-control-record"></i>All</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Log out</span></a>
            </li>
        </ul>
    </div>
</div>
