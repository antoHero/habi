<div class="col-xxl-3 col-xl-3 col-lg-4">
    <div class="blog__sidebar">
        <div class="sidebar__widget sidebar__widget-padding sidebar__widget-padding-2 mb-30">
            <h5 class="sidebar__widget-title mb-20">My Account</h5>
            <div class="sidebar__categories sidebar__links">
                <ul>

                    <li id="{{ Request::RouteIs('user.index') ? 'active-link' : '' }}">
                        <a href="{{ route('user.index') }}">Profile</a>
                    </li>
                    <li id="{{ Request::RouteIs('user.order.history') ? 'active-link' : '' }}">
                        <a href="{{ route('user.order.history') }}">My Order History</a>
                    </li>
                    <li id="{{ Request::RouteIs('user.delivery.address') || Request::RouteIs('user.new.address') || Request::RouteIs('user.get.address') ? 'active-link' : '' }}">
                        <a href="{{ route('user.delivery.address') }}">Address book</a>
                    </li>

                    <li id="{{ Request::RouteIs('user.account.settings') ? 'active-link' : '' }}">
                        <a href="{{ route('user.account.settings') }}">Settings</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>