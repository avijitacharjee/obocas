<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> <span>Main</span>
                </li>
                <li class={{ isset($dashboard) ? 'active' : '' }}>
                    <a href="{{ url('/') }}" class={{ isset($dashboard) ? 'active' : '' }}>
                        <i class="feather-home"></i><span>Dashboard</span>
                    </a>
                </li>
                <li class={{ isset($hotel) ? 'active' : '' }}>
                    <a href="{{ url('/hotels') }}" class={{ isset($hotel) ? 'active' : '' }}><i
                            class="feather-home"></i><span>Hotel List</span></a>
                </li>
                <li class={{ isset($booking) ? 'active' : '' }}>
                    <a href="{{ url('/bookings') }}" class={{ isset($hotel) ? 'active' : '' }}><i
                            class="feather-home"></i><span>Booking List</span></a>
                </li>
                <!-- <li>
                    <a href="{{ url('mentee.html') }}"><i class="feather-users"></i><span>User List</span></a>
                </li>
                <li>
                    <a href="{{ url('booking-list.html') }}"><i class="feather-list"></i><span>Booking List</span></a>
                </li>
                <li>
                    <a href="{{ url('categories.html') }}"><i class="feather-disc"></i><span>Categories</span></a>
                </li>
                <li>
                    <a href="{{ url('transactions-list.html') }}"><i
                            class="feather-dollar-sign"></i><span>Transactions</span></a>
                </li>
                <li>
                    <a href="{{ url('settings.html') }}"><i class="feather-settings"></i><span>Settings</span></a>
                </li>
                <li class="submenu">
                    <a href="{{ url('#') }}"><i class="feather-book"></i><span> Reports</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('invoice-report.html') }}">Invoice Reports</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <li>
                    <a href="{{ url('profile.html') }}"><i class="feather-user-plus"></i><span>My Profile</span></a>
                </li>
                <li class="submenu">
                    <a href="{{ url('#') }}"><i class="feather-book-open"></i><span>Blog</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('blog.html') }}"> Blog </a></li>
                        <li><a href="{{ url('blog-details.html') }}"> Blog Details </a></li>
                        <li><a href="{{ url('add-blog.html') }}"> Add Blog </a></li>
                        <li><a href="{{ url('edit-blog.html') }}"> Edit Blog </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="{{ url('#') }}"><i class="feather-lock"></i><span> Authentication </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('login.html') }}"> Login </a></li>
                        <li><a href="{{ url('register.html') }}"> Register </a></li>
                        <li><a href="{{ url('forgot-password.html') }}"> Forgot Password </a></li>
                        <li><a href="{{ url('lock-screen.html') }}"> Lock Screen </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="{{ url('#') }}"><i class="feather-alert-octagon"></i><span> Error Pages </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('error-404.html') }}">404 Error </a></li>
                        <li><a href="{{ url('error-500.html') }}">500 Error </a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('blank-page.html') }}"><i class="feather-file"></i><span>Blank Page</span></a>
                </li>
                <li class="menu-title">
                    <span>UI Interface</span>
                </li>
                <li>
                    <a href="{{ url('components.html') }}"><i class="feather-layers"></i><span>Components</span></a>
                </li>
                <li class="submenu">
                    <a href="{{ url('#') }}"><i class="feather-sidebar"></i><span> Forms </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('form-basic-inputs.html') }}">Basic Inputs </a></li>
                        <li><a href="{{ url('form-input-groups.html') }}">Input Groups </a></li>
                        <li><a href="{{ url('form-horizontal.html') }}">Horizontal Form </a></li>
                        <li><a href="{{ url('form-vertical.html') }}"> Vertical Form </a></li>
                        <li><a href="{{ url('form-mask.html') }}"> Form Mask </a></li>
                        <li><a href="{{ url('form-validation.html') }}"> Form Validation </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="{{ url('#') }}"><i class="feather-layout"></i><span> Tables </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('tables-basic.html') }}">Basic Tables </a></li>
                        <li><a href="{{ url('data-tables.html') }}">Data Table </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="{{ url('javascript:void(0);') }}"><i class="feather-align-left"></i><span>Multi Level</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="submenu">
                            <a href="{{ url('javascript:void(0);') }}"> <span>Level 1</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ url('javascript:void(0);') }}"><span>Level 2</span></a></li>
                                <li class="submenu">
                                    <a href="{{ url('javascript:void(0);') }}"> <span> Level 2</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="{{ url('javascript:void(0);') }}">Level 3</a></li>
                                        <li><a href="{{ url('javascript:void(0);') }}">Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('javascript:void(0);') }}"> <span>Level 2</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('javascript:void(0);') }}"> <span>Level 1</span></a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
