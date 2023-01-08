<div class="page-component-header-container">
    <div class="page-component-header">
        <div class="page-component-header-fixed">
            <div class="header-container">
                <div class="hamberger-menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <a class="agoda-logo" href="{{ url("partner/dashboard") }}">
                    <img src="{{ asset("/partner-dashboard/assets/images/logo.png") }}">
                </a>
                <div class="menu-wrapper">
                    <ul class="main-menu pull-right">
                        <li class="username-menu-wrapper">
                            <div class="username-main-selector dropdown_button">
                                <i class="user-logo">
                                    <span class="user-logo-text">{{session('partner_name')?session('partner_name')[0]:'A'}}</span>
                                </i>
                                <span class="username-text">{{session('partner_name')??'Avijit'}}</span>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                            <div class="dropdown_menu">
                                <ul class="dropdown_menu_list">
                                    <li class="dropdown_menu_item">
                                        <a class="dropdown_menu_link" href="{{ url("partner/profile") }}">
                                            Profile
                                        </a>
                                    </li>
                                    <li class="dropdown_menu_item border-0">
                                        <a class="dropdown_menu_link" href="{{ url("partner/index") }}">
                                            Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mobile_user_photo">
                            <div class="username-main-selector" type="button" id="MobiledropdownMenuButton" >
                                <i class="user-logo">
                                    <span class="user-logo-text">{{session('partner_name')?session('partner_name')[0]:''}}</span>
                                </i>
                                <span class="username-text">{{session('partner_name')}}</span>
                            </div>
                            <ul class="mobile_user_photo-dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url("partner/profile") }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ url("partner/index") }}">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="page-menu-wrapper">
                        <!-- Tab Button -->
                        <ul class="page-menu page-menu-6" id="nav-tab" role="tablist">
                            <li class="wrapper">
                                <a id="dashboard-tab-button" @class(['link','traffic-tracking','active'=>Request::is('partner/dashboard')])
                                    href="{{ url("partner/dashboard") }}">
                                    <span class="page-menu-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="wrapper">
                                <a id="tools-tab-button" @class(['link','traffic-tracking','active'=>Request::is('partner/tools')]) href="{{ url("partner/tools") }}">
                                    <span class="page-menu-text">Tools</span>
                                </a>
                            </li>
                            <li class="wrapper">
                                <a id="personaldetails-tab-button" @class(['link','traffic-tracking','active'=>Request::is('partner/profile')])
                                    href="{{ url("partner/profile") }}">
                                    <span class="page-menu-text">Profile</span>
                                </a>
                            </li>
                            <li class="wrapper">
                                <a id="reporting-tab-button" @class(['link','traffic-tracking','active'=>Request::is('partner/report')])
                                    href="{{ url("partner/report") }}">
                                    <span class="page-menu-text">Reporting</span>
                                </a>
                            </li>
                            <li class="wrapper">
                                <a id="faq-tab-button" @class(['link','traffic-tracking','active'=>Request::is('partner/faq')]) href="{{ url("partner/faq") }}">
                                    <span class="page-menu-text">FAQ</span>
                                </a>
                            </li>
                        </ul>
                        <!-- /Tab Button -->
                    </div>
                
                    <div class="sidebar-panel hide-panel">
                        <div class="sidebar-menu-panel">
                            <div class="sidebar-username-text">
                                <a class="agoda-logo" href="{{ url("partner/dashboard") }}">
                                    <img src="{{ asset("/partner-dashboard/assets/images/logo.png") }}">
                                </a>
                                <span>{{session('partner_name')}}</span>
                            </div>
                            <!-- <div class="user-menu">
                                <a class="pull-left" href="{{ url("#") }}">Profile</a>
                                <a href="{{ url("#") }}" class="pull-right">Sign Out</a>
                            </div> -->
                            <ul class="sidebar-linklist">
                                <ul class="sidebar-linklist">
                                    <li @class(['sidemenu-item','active'=>Request::is('partner/dashboard')])>
                                        <a class="sidemenu-link traffic-tracking" href="{{ url("partner/dashboard") }}">
                                            <i class="ficon ficon-dashboard">
                                            </i>
                                            <span class="sidemenu-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li @class(['sidemenu-item','active'=>Request::is('partner/tools')])>
                                        <a class="sidemenu-link traffic-tracking" href="{{ url("partner/tools") }}">
                                            <i class="ficon ficon-tools"></i>
                                            <span class="sidemenu-text">Tools</span>
                                        </a>
                                    </li>
                                    <li @class(['sidemenu-item','active'=>Request::is('partner/profile')])>
                                        <a class="sidemenu-link traffic-tracking" href="{{ url("partner/profile") }}">
                                            <i class="ficon ficon-profiles"></i>
                                            <span class="sidemenu-text">Profile</span>
                                        </a>
                                    </li>
                                    <li @class(['sidemenu-item','active'=>Request::is('partner/report')])>
                                        <a class="sidemenu-link traffic-tracking" href="{{ url("partner/report") }}">
                                            <i class="ficon ficon-reporting"></i>
                                            <span class="sidemenu-text">Reporting</span>
                                        </a>
                                    </li>
                                    <li @class(['sidemenu-item','active'=>Request::is('partner/faq')])>
                                        <a target="" class="sidemenu-link traffic-tracking" href="{{ url("partner/faq") }}">
                                            <i class="ficon ficon-faq"></i>
                                            <span class="sidemenu-text">FAQ</span>
                                        </a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                        <div class="overlay-sidebar-panel"></div>
                    </div>
                
                </div>

            </div>

        </div>
    </div>

    <!-- <div class="banner-wrapper booking-tool-c">
        <div class="banner-container">
            <a href="{{ url("#") }}" class="button button-white banner-button banner-button-desktop">
                Make My Booking
            </a>
            <div class="banner-header-container">
                <div class="banner-header">Click the button to make direct bookings for yourself or for your customers.</div>
                <div class="banner-subheader">Note that you will be eligible to earn commissions on any bookings made after clicking the button</div>
            </div>
            <a href="{{ url("#") }}" class="button button-white banner-button banner-button-mobile">
                Make My Booking
            </a>
        </div>
    </div> -->

</div>