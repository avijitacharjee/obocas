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