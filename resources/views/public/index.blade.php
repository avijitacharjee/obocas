<!DOCTYPE html>
<html>
  <head>
    <!--====== Required meta tags =======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=on" />
    <!--====== Title =======-->
    <title>Booking Index</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <!-- FrontAwesome -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bui-react.min.css') }}">
    <!-- Project Css-->
    <!-- CloudFront Css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/cloudfront.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/index-cloudfront.css') }}" />
    <!-- Bstatic -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bstatic.min.css') }}">
  </head>
  <body">
  <!-- Header -->
  <header class="bui-header bui-header--logo-large bui-u-hidden-print bui-header--rounded-tabs ">
    <!-- Nav Top -->
    <nav class="header-menu container">
      <!-- Nav Left Part -->
      <!-- Logo -->
      <div class="bui-header__main">
        <div class="bui-header__logo">
          <span>
          <img src="{{ asset('frontend/assets/images/logo.png')}}" alt="">
          </span>
        </div>
      </div>
      <!-- /Logo -->
      <!-- /Nav Left Part -->
      <!-- Nav Right Part -->
      <div
        class="bui-group bui-button-group bui-group--inline bui-group--align-end bui-group--vertical-align-middle">
        <div class="nav-dasktop">
          <!-- Property List -->
          <div class="bui-group__item">
            <svg class="bk-icon -streamline-property_add" height="24" style="display:none;" width="24"
              viewBox="0 0 24 24" role="presentation">
              <path
                d="M8.25 19h-3a.75.75 0 0 1-.75-.75v-7.5a.75.75 0 0 0-1.5 0v7.5a2.25 2.25 0 0 0 2.25 2.25h3a.75.75 0 0 0 0-1.5zM1.234 9.823l8.782-7.43a.75.75 0 0 1 .969 0l7.279 6.159a.75.75 0 1 0 .968-1.146l-7.279-6.159a2.25 2.25 0 0 0-2.906 0L.265 8.678a.75.75 0 1 0 .968 1.146zM15.75 2.5h3L18 1.75v3a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0 0 1.5zm6.75 14.25a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0zm1.5 0a6.75 6.75 0 1 0-13.5 0 6.75 6.75 0 0 0 13.5 0zm-7.5-3v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-1.5 0zm-2.25 3.75h6a.75.75 0 0 0 0-1.5h-6a.75.75 0 0 0 0 1.5z" />
            </svg>
            <a class="bui-button bui-button--light bui-traveller-header__product-action" href="#">
            <span class="bui-button__text">
            List your property
            </span>
            </a>
          </div>
          <!-- /Property List -->
          <!-- SingIn & SingUp -->
          <div class="bui-group__item">
            <a class="bui-button bui-button--secondary js-header-login-link" href="#">
            <span class="bui-button__text">
            Register
            </span>
            </a>
          </div>
          <div class="bui-group__item">
            <svg class="bk-icon -streamline-account_create" height="24" style="display:none;" width="24"
              viewBox="0 0 24 24" role="presentation">
              <path
                d="M22.5 17.25a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0zm1.5 0a6.75 6.75 0 1 0-13.5 0 6.75 6.75 0 0 0 13.5 0zm-7.5-3v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-1.5 0zM14.25 18h6a.75.75 0 0 0 0-1.5h-6a.75.75 0 0 0 0 1.5zM1.5 17.25a6.003 6.003 0 0 1 8.356-5.518.75.75 0 0 0 .588-1.38A7.504 7.504 0 0 0 0 17.25a.75.75 0 0 0 1.5 0zm9.375-12.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0zm1.5 0a4.875 4.875 0 1 0-9.75 0 4.875 4.875 0 0 0 9.75 0z" />
            </svg>
            <a class="bui-button bui-button--secondary js-header-login-link" href="/signin">
            <span class="bui-button__text">
            Sign in
            </span>
            </a>
          </div>
          <!-- /SingIn & SingUp -->
        </div>
        <div class="nav-mobile">
          <div
            class="bui-group bui-group--inline bui-group--small bui-group--align-end bui-group--vertical-align-middle bui-button-group">
            <div class="bui-group__item">
              <a class="bui-button bui-traveller-header__profile bui-button--light bui-button--large js-header-login-link js-header-signin-notification"
                type="button" href="signin.html">
              <span class="bui-button__icon bui-bubble-container">
              <i class="fa-solid fa-circle-user"></i>
              </span>
              </a>
            </div>
            <div class="bui-group__item">
              <button class="bui-button bui-button--light bui-button--large mobile-menu-btn">
              <span class="bui-button__icon">
              <span class="bui-icon bui-icon--large">
              <i class="fa-solid fa-bars"></i>
              </span>
              </span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Nav Right Part -->
    </nav>
    <!-- /Nav Top -->
  </header>
  <!-- Header -->
  <!-- Banner -->
  <div class="banner">
    <!-- Banner Text -->
    <div class="hero-banner-wrapper">
      <header class="banner_header">
        <div class="container">
          <div class="header-large">
            <h1> Find your next stay </h1>
            <div class="sub-heading">Search deals on hotels, homes, and much
              more...
            </div>
          </div>
          <div class="searchbox_cross_product__title header-smal">
            <h1 id="form_search_h1" class="b-no-tap-highlight">
              Search
            </h1>
            <label class="search_hotels_subtext" for="input_destination">
            Destinations, properties, even an address
            </label>
          </div>
        </div>
      </header>
    </div>
    <!-- /Banner Text -->
    <div class="container" style="position: relative;">
      <!-- Banner Search Box -->
      <div class="hero-banner-searchbox">
        <div class="sb-searchbox__outer" data-sb-outer>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <form id="" action="#"
                  class="sb-searchbox sb-searchbox--painted sb-searchbox--xp js--sb-searchbox"
                  data-component="search/searchbox/searchbox-xp" data-sb-id="main"
                  data-sb-flags=" AEJPAcBacPONDcFGHT:0 calendar_on_destination_change:1 open_location_in_map_checkbox:1 with_popular_nearby_suggestions:1 can_show_sb_entire_place_checkbox:1 icon_revamp:1 region_second_line:1"
                  data-is-first-visible="1">
                  <div class="xp__fieldset js--sb-fieldset accommodation " data-view="accommodation">
                    <div class="row">
                      <div class="col-lg-3 col-sm-12 pr-md-0">
                        <!-- Place Select Option -->
                        <div class="place_option">
                          <div data-visible="accommodation,flights,rentalcars"
                            class="xp__input-group xp__search" data-destination-input>
                            <!-- Place Icon -->
                            <svg class="bk-icon -iconset-landmark" height="128"
                              style="display:none;" width="128" viewBox="0 0 128 128"
                              role="presentation">
                              <rect x="8" y="106" width="112" height="10" rx="2" ry="2" />
                              <path
                                d="M24 60a2 2 0 0 0-2 1.8v34.4a2 2 0 0 0 2 1.8h8a2 2 0 0 0 2-1.8V61.8a2 2 0 0 0-2-1.8zm24 0a2 2 0 0 0-2 1.8v34.4a2 2 0 0 0 2 1.8h8a2 2 0 0 0 2-1.8V61.8a2 2 0 0 0-2-1.8zm24 0a2 2 0 0 0-2 1.8v34.4a2 2 0 0 0 2 1.8h8a2 2 0 0 0 2-1.8V61.8a2 2 0 0 0-2-1.8zm24 0a2 2 0 0 0-2 1.8v34.4a2 2 0 0 0 2 1.8h8a2 2 0 0 0 2-1.8V61.8a2 2 0 0 0-2-1.8zm-85.8-8h107.6a2 2 0 0 0 1.3-3.7L65 12.3a2 2 0 0 0-2.2 0l-53.9 36a2 2 0 0 0 1.3 3.7z" />
                            </svg>
                            <svg class="bk-icon -iconset-airplane" height="128"
                              style="display:none;" width="128" viewBox="0 0 128 128"
                              role="presentation">
                              <path
                                d="M8.3 83.1l2.8-2.8a1 1 0 0 1 .7-.3h27.3l16-17.5-41.7-32a4 4 0 0 1-1.1-5.3l1.3-2.8a4 4 0 0 1 5.1-1.6l55.5 21.1L98 16a28.6 28.6 0 0 1 18-8 4 4 0 0 1 4 4 28.6 28.6 0 0 1-8 18L86.6 53.4l21 55.3a4 4 0 0 1-1.6 5.1l-2.7 1.4A4 4 0 0 1 98 114L66 72.3 48 89v27.3a1 1 0 0 1-.3.7l-2.8 2.8a1 1 0 0 1-1.6-.2L30.7 97.3 8.5 84.7a1 1 0 0 1-.2-1.6z" />
                            </svg>
                            <svg class="bk-icon -iconset-geo_pin" height="128"
                              style="display:none;" width="128" viewBox="0 0 128 128"
                              role="presentation">
                              <path
                                d="M98.5 42.5a34.5 34.5 0 1 0-64.3 17.2L64 120l29.8-60.3a34.2 34.2 0 0 0 4.7-17.2zM64 59.7a17.2 17.2 0 1 1 17-17 17.2 17.2 0 0 1-17 17z" />
                            </svg>
                            <svg class="bk-icon -iconset-bed" height="128"
                              style="display:none;" width="128" viewBox="0 0 128 128"
                              role="presentation">
                              <path
                                d="M120 96v11.8a4.1 4.1 0 0 1-3.6 4.2 4 4 0 0 1-4.4-4v-4H16v3.8a4.1 4.1 0 0 1-3.6 4.2 4 4 0 0 1-4.4-4V96a8 8 0 0 1 8-8h96a8 8 0 0 1 8 8zm-8-16a16 16 0 0 0-16-16H32a16 16 0 0 0-16 16v4h96zM24 36a4 4 0 0 1 4-4h72a4 4 0 0 1 4 4v16l8 8V36a12 12 0 0 0-12-12H28a12 12 0 0 0-12 12v24l8-8z" />
                            </svg>
                            <svg class="bk-icon -iconset-skiing" height="128"
                              style="display:none;" width="128" viewBox="0 0 128 128"
                              role="presentation">
                              <path
                                d="M79 29.4L70 22c8.4-8 15.4-4.8 15.4-4.8a5.5 5.5 0 0 1 4.1 5 6 6 0 0 1 0 .8l-1.4 20.2 14.6 11.4a3 3 0 0 1-3.4 4.9L81.7 48.3a3.6 3.6 0 0 1-1.7-2.8V45zM33.6 15.3l36 26a4 4 0 0 0 4.6-6.5l-36-26a4 4 0 0 0-4.6 6.4zM104 24a8 8 0 1 0-8-8 8 8 0 0 0 8 8zM56.9 79a3 3 0 0 0 4.2.2l17.7-16.3a4.2 4.2 0 0 0 .5-.5 3.8 3.8 0 0 0-.7-5.4l-.5-.4L59.6 42a7.5 7.5 0 0 0-.8-.5L54 38a28.8 28.8 0 0 0-4.8 6 7 7 0 0 0 3.2 10l16.9 7.4L56.9 75a3 3 0 0 0 0 4zm61 25.6a4 4 0 0 0-5.4 1.6s-2.5 4.4-6.7 5.5c-2.6.7-5.5 0-8.7-2l-83-53a4 4 0 0 0-4.3 6.7c.7.5 71.4 45.8 83 53.1a20.5 20.5 0 0 0 11 3.5 16 16 0 0 0 4.1-.6 20 20 0 0 0 11.6-9.4 4 4 0 0 0-1.6-5.4z" />
                            </svg>
                            <svg class="bk-icon -streamline-bed" height="24"
                              style="display:none;" width="24" viewBox="0 0 24 24"
                              role="presentation">
                              <path
                                d="M2.75 12h18.5c.69 0 1.25.56 1.25 1.25V18l.75-.75H.75l.75.75v-4.75c0-.69.56-1.25 1.25-1.25zm0-1.5A2.75 2.75 0 0 0 0 13.25V18c0 .414.336.75.75.75h22.5A.75.75 0 0 0 24 18v-4.75a2.75 2.75 0 0 0-2.75-2.75H2.75zM0 18v3a.75.75 0 0 0 1.5 0v-3A.75.75 0 0 0 0 18zm22.5 0v3a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-1.5 0zm-.75-6.75V4.5a2.25 2.25 0 0 0-2.25-2.25h-15A2.25 2.25 0 0 0 2.25 4.5v6.75a.75.75 0 0 0 1.5 0V4.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 .75.75v6.75a.75.75 0 0 0 1.5 0zm-13.25-3h7a.25.25 0 0 1 .25.25v2.75l.75-.75h-9l.75.75V8.5a.25.25 0 0 1 .25-.25zm0-1.5A1.75 1.75 0 0 0 6.75 8.5v2.75c0 .414.336.75.75.75h9a.75.75 0 0 0 .75-.75V8.5a1.75 1.75 0 0 0-1.75-1.75h-7z" />
                            </svg>
                            <svg class="bk-icon -streamline-sports_snowboard" height="24"
                              style="display:none;" width="24" viewBox="0 0 24 24"
                              role="presentation">
                              <path
                                d="M16.941 3.375a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0zm1.5 0a3.375 3.375 0 1 0-6.75 0 3.375 3.375 0 0 0 6.75 0zm-.194 15.837l-1.43-3.337a5.25 5.25 0 0 0-2.482-2.63l-2.252-1.125.354.967 1.07-2.491-1.024.375 6.081 3.042a2.25 2.25 0 1 0 2.012-4.026l-7.5-3.75A2.25 2.25 0 0 0 12.07 6H9.008a.742.742 0 0 1-.584-.28L6.322 3.094c-.705-.977-2.112-1.204-3.119-.476a2.25 2.25 0 0 0-.364 3.318L4.915 8.53a5.224 5.224 0 0 0 4.094 1.97h.783l-.69-1.045-1.353 3.16a2.22 2.22 0 0 0-.183.886v1.757c0 .198-.08.39-.22.53l-1 1a.75.75 0 1 0 1.061 1.06l1-1c.422-.422.658-.993.659-1.589V13.5c0-.101.02-.2.06-.291l1.355-3.164A.75.75 0 0 0 9.792 9h-.784a3.726 3.726 0 0 1-2.921-1.406L3.985 4.97a.75.75 0 1 1 1.144-.967l2.123 2.653A2.24 2.24 0 0 0 9.01 7.5h3.06a.75.75 0 0 1 .336.079l7.5 3.75a.75.75 0 1 1-.67 1.342L13.152 9.63a.75.75 0 0 0-1.024.375l-1.07 2.491a.75.75 0 0 0 .354.967l2.252 1.126a3.751 3.751 0 0 1 1.774 1.878l1.43 3.336a.75.75 0 0 0 1.378-.59zm-7.715-.244A5.205 5.205 0 0 0 11.997 16l-1.076.57 1.41.7a.755.755 0 0 1 .352.376l.767 1.79a.75.75 0 1 0 1.378-.591l-.767-1.791a2.259 2.259 0 0 0-1.06-1.125l-1.413-.702a.75.75 0 0 0-1.077.57 3.703 3.703 0 0 1-1.043 2.112.75.75 0 0 0 1.064 1.058zm10.083 2.974a.75.75 0 0 1-.891.576l-16.131-3.47a.75.75 0 0 1-.576-.89.75.75 0 0 0-1.466-.316 2.25 2.25 0 0 0 1.726 2.673l16.131 3.47a2.25 2.25 0 0 0 2.673-1.727.75.75 0 1 0-1.466-.316z" />
                            </svg>
                            <svg class="bk-icon -streamline-landmark" height="24"
                              style="display:none;" width="24" viewBox="0 0 24 24"
                              role="presentation">
                              <path
                                d="M4.5 8.911h3l-.75-.75v9l.75-.75h-3l.75.75v-9l-.75.75zm0-1.5a.75.75 0 0 0-.75.75v9c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-9a.75.75 0 0 0-.75-.75h-3zm6 1.5h3l-.75-.75v9l.75-.75h-3l.75.75v-9l-.75.75zm0-1.5a.75.75 0 0 0-.75.75v9c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-9a.75.75 0 0 0-.75-.75h-3zm6 1.5h3l-.75-.75v9l.75-.75h-3l.75.75v-9l-.75.75zm0-1.5a.75.75 0 0 0-.75.75v9c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-9a.75.75 0 0 0-.75-.75h-3zm4.5 12H3l.75.75v-2.25h16.5v2.25l.75-.75zm0 1.5a.75.75 0 0 0 .75-.75v-2.25a1.5 1.5 0 0 0-1.5-1.5H3.75a1.5 1.5 0 0 0-1.5 1.5v2.25c0 .414.336.75.75.75h18zm-19.5 3h21a.75.75 0 0 0 0-1.5h-21a.75.75 0 0 0 0 1.5zm0-3h21a.75.75 0 0 0 0-1.5h-21a.75.75 0 0 0 0 1.5zm18.75-15.75v2.25H3.75v-2.25l-.415.67L12 1.5l8.665 4.332-.415-.671zm1.5 0a.75.75 0 0 0-.415-.67L12.67.157a1.503 1.503 0 0 0-1.34 0L2.666 4.49a.75.75 0 0 0-.415.671v2.25a1.5 1.5 0 0 0 1.5 1.5h16.5a1.5 1.5 0 0 0 1.5-1.5v-2.25zM3 5.911h18a.75.75 0 0 0 0-1.5H3a.75.75 0 0 0 0 1.5z" />
                            </svg>
                            <svg class="bk-icon -streamline-transport_airplane_depart"
                              height="24" style="display:none;" width="24"
                              viewBox="0 0 24 24" role="presentation">
                              <path
                                d="M18.33 3.57L5.7 9.955l.79.07-1.96-1.478a.75.75 0 0 0-.753-.087l-2.1.925C.73 9.856.359 10.967.817 11.88c.11.22.263.417.45.577l3.997 3.402a2.94 2.94 0 0 0 3.22.4l3.62-1.8-1.084-.671v5.587a1.833 1.833 0 0 0 2.654 1.657l1.88-.932a1.85 1.85 0 0 0 .975-1.226l1.87-7.839-.396.498 3.441-1.707a3.494 3.494 0 1 0-3.11-6.259zm.672 1.342a1.994 1.994 0 0 1 1.775 3.571l-3.44 1.707a.75.75 0 0 0-.396.498l-1.87 7.838a.35.35 0 0 1-.185.232l-1.88.932a.335.335 0 0 1-.486-.304V13.79a.75.75 0 0 0-1.084-.672l-3.62 1.8a1.44 1.44 0 0 1-1.578-.197l-3.997-3.402a.35.35 0 0 1 .073-.577l2.067-.91-.754-.087 1.96 1.478a.75.75 0 0 0 .79.07l12.63-6.383zm-3.272.319l-4.46-2.26a1.852 1.852 0 0 0-1.656-.001l-1.846.912a1.85 1.85 0 0 0-.295 3.128l2.573 1.955a.75.75 0 1 0 .908-1.194L8.38 5.816a.35.35 0 0 1 .055-.591l1.845-.912a.351.351 0 0 1 .315 0l4.456 2.256a.75.75 0 0 0 .678-1.338z" />
                            </svg>
                            <svg class="bk-icon -streamline-geo_pin" height="24"
                              style="display:none;" width="24" viewBox="0 0 24 24"
                              role="presentation">
                              <path
                                d="M15 8.25a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm1.5 0a4.5 4.5 0 1 0-9 0 4.5 4.5 0 0 0 9 0zM12 1.5a6.75 6.75 0 0 1 6.75 6.75c0 2.537-3.537 9.406-6.75 14.25-3.214-4.844-6.75-11.713-6.75-14.25A6.75 6.75 0 0 1 12 1.5zM12 0a8.25 8.25 0 0 0-8.25 8.25c0 2.965 3.594 9.945 7 15.08a1.5 1.5 0 0 0 2.5 0c3.406-5.135 7-12.115 7-15.08A8.25 8.25 0 0 0 12 0z" />
                            </svg>
                            <!-- /Place Icon -->
                            <!-- Place Input Box -->
                            <div data-component="search/destination/input" data-sb-id="main"
                              data-gpf="1" data-flags="" data-open-focus
                              data-minLength="1" data-focus-on-typing="1">
                              <div
                                class="c-autocomplete sb-destination-with-clearregion_second_line">
                                <button data-clear type="button"
                                  class="sb-destination__clear">
                                  <svg class="bk-icon -streamline-close sb-destination__clear-icon"
                                    fill="#333333" height="20" role="presentation"
                                    width="20" viewBox="0 0 24 24"
                                    role="presentation">
                                    <path
                                      d="M13.31 12l6.89-6.89a.93.93 0 1 0-1.31-1.31L12 10.69 5.11 3.8A.93.93 0 0 0 3.8 5.11L10.69 12 3.8 18.89a.93.93 0 0 0 1.31 1.31L12 13.31l6.89 6.89a.93.93 0 1 0 1.31-1.31z" />
                                  </svg>
                                </button>
                                <label class="sb-destination-label-sr w-100">
                                <span class="bui-u-sr-only">Type your
                                destination</span>
                                <input type="search" name="" id=""
                                  class="c-autocomplete__input sb-searchbox__input sb-destination__input"
                                  placeholder="Where are you going?" value=""
                                  autocomplete="off"
                                  data-component="search/destination/input-placeholder"
                                  data-sb-id="main" data-input
                                  aria-autocomplete="both">
                                </label>
                                <ul data-list
                                  class="c-autocomplete__list sb-autocomplete__list"
                                  role="listbox"
                                  aria-label="List of suggested destinations">
                                </ul>
                                <div class="sb-a11y-announcement invisible_spoken"
                                  aria-live="polite" aria-atomic="true">
                                </div>
                              </div>
                            </div>
                            <!-- /Place Input Box -->
                          </div>
                        </div>
                        <!-- /Place Select Option -->
                      </div>
                      <div class="col-lg-3 col-sm-12 responsive-p pr-md-0 pl-md-0">
                        <!-- /Date Select Option -->
                        <div class="date_select">
                          <div data-visible="accommodation,flights,rentalcars"
                            class="xp__dates xp__group">
                            <div class="xp__dates-inner">
                              <div data-component="search/dates/dates-errors"
                                data-view-id="accommodation" data-sb-id="main"
                                role="alert" data-dates-errors>
                              </div>
                              <div class="checkin-check-out">
                                <div data-visible="accommodation,flights,rentalcars"
                                  class="xp__input-group xp__date-time checkin">
                                  <div class="xp__dates-inner xp__dates__checkin">
                                    <div data-visible="accommodation,flights,rentalcars"
                                      class="xp__group xp__date c2-wrapper-s-hidden">
                                      <div class="sb-date-field b-datepicker"
                                        data-component="search/dates/date-field-select"
                                        data-sb-id="main" data-mode="checkin"
                                        data-calendar2-type="checkin"
                                        data-calendar2-title="Check-in">
                                        <div class="sb-searchbox__input sb-date-field__field -empty sb-date__field-svg_icon"
                                          data-field>
                                          <span
                                            class="sb-date-field__icon sb-date-field__icon-btn bk-svg-wrapper calendar-restructure-sb">
                                            <svg class="bk-icon -experiments-calendar sb-date-picker_icon-svg"
                                              fill="#BDBDBD" height="20"
                                              role="presentation"
                                              width="20"
                                              viewBox="0 0 128 128"
                                              role="presentation">
                                              <path
                                                d="m112 16h-16v-8h-8v8h-48v-8h-8v8h-16c-4.4 0-8 3.9-8 8.7v86.6c0 4.8 3.6 8.7 8 8.7h96c4.4 0 8-3.9 8-8.7v-86.6c0-4.8-3.6-8.7-8-8.7zm0 95.3a1.1 1.1 0 0 1 -.2.7h-95.6a1.1 1.1 0 0 1 -.2-.7v-71.3h96zm-68-43.3h-12v-12h12zm0 28h-12v-12h12zm26-28h-12v-12h12zm0 28h-12v-12h12zm26 0h-12v-12h12zm0-28h-12v-12h12z"
                                                fill-rule="evenodd" />
                                            </svg>
                                            <i class="sb-date-field__icon-text sb-date-field__icon-text-wide"
                                              data-icon-day
                                              data-placeholder="+">
                                            +
                                            </i>
                                          </span>
                                          <div class="sb-date-field__controls sb-date-field__controls__ie-fix"
                                            data-controls
                                            data-calendar2-cant-touch-this>
                                            <div class="sb-date-field__select -month-year js-date-field__part"
                                              data-type="month-year">
                                              <div
                                                class="sb-date-field__select-value">
                                                <span
                                                  class="js-date-field__value"
                                                  data-placeholder="
                                                  Check-in month
                                                  ">
                                                </span>
                                                <i
                                                  class="sb-date-field__select-icon bicon-downchevron"></i>
                                              </div>
                                              <select
                                                class="sb-date-field__select-field js-date-field__select"
                                                aria-label="
                                                Check-in month
                                                " data-no-old-calendar="1">
                                              </select>
                                              <input type="hidden"
                                                class="js-date-field__year"
                                                name="checkin_year"
                                                value="" />
                                              <input type="hidden"
                                                class="js-date-field__month"
                                                name="checkin_month"
                                                value="" />
                                            </div>
                                            <div class="sb-date-field__select -day js-date-field__part"
                                              data-type="date">
                                              <div
                                                class="sb-date-field__select-value">
                                                <span
                                                  class="js-date-field__value"
                                                  data-placeholder="
                                                  Check-in day
                                                  ">
                                                </span>
                                                <i
                                                  class="sb-date-field__select-icon bicon-downchevron"></i>
                                              </div>
                                              <select
                                                class="sb-date-field__select-field js-date-field__select"
                                                name="checkin_monthday"
                                                data-selected=""
                                                aria-label="
                                                Check-in day
                                                " data-no-old-calendar="1">
                                              </select>
                                            </div>
                                          </div>
                                          <div class="sb-date-field__display"
                                            data-placeholder="Check-in"
                                            data-date-format="short_date_with_weekday_without_year"
                                            data-display>
                                            Check-in
                                          </div>
                                          <i
                                            class="sb-date-field__chevron bicon-downchevron"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div data-visible="accommodation,flights,rentalcars"
                                  class="xp__input-group xp__date-time check-out">
                                  <div class="xp__dates-inner xp__dates__checkout">
                                    <div data-visible="accommodation,flights,rentalcars"
                                      class="xp__group xp__date c2-wrapper-s-hidden">
                                      <div class="sb-date-field b-datepicker"
                                        data-component="search/dates/date-field-select"
                                        data-sb-id="main" data-mode="checkout"
                                        data-calendar2-type="checkout"
                                        data-calendar2-title="Check-out">
                                        <div class="
                                          sb-searchbox__input
                                          sb-date-field__field
                                          -empty
                                          sb-date__field-svg_icon
                                          " data-field>
                                          <span
                                            class="sb-date-field__icon sb-date-field__icon-btn bk-svg-wrapper calendar-restructure-sb">
                                            <svg class="bk-icon -experiments-calendar sb-date-picker_icon-svg"
                                              fill="#BDBDBD" height="20"
                                              role="presentation"
                                              width="20"
                                              viewBox="0 0 128 128"
                                              role="presentation">
                                              <path
                                                d="m112 16h-16v-8h-8v8h-48v-8h-8v8h-16c-4.4 0-8 3.9-8 8.7v86.6c0 4.8 3.6 8.7 8 8.7h96c4.4 0 8-3.9 8-8.7v-86.6c0-4.8-3.6-8.7-8-8.7zm0 95.3a1.1 1.1 0 0 1 -.2.7h-95.6a1.1 1.1 0 0 1 -.2-.7v-71.3h96zm-68-43.3h-12v-12h12zm0 28h-12v-12h12zm26-28h-12v-12h12zm0 28h-12v-12h12zm26 0h-12v-12h12zm0-28h-12v-12h12z"
                                                fill-rule="evenodd" />
                                            </svg>
                                            <i class="
                                              sb-date-field__icon-text
                                              sb-date-field__icon-text-wide
                                              " data-icon-day data-placeholder="+">
                                            +
                                            </i>
                                          </span>
                                          <div class="sb-date-field__controls sb-date-field__controls__ie-fix"
                                            data-controls
                                            data-calendar2-cant-touch-this>
                                            <div class="sb-date-field__select -month-year js-date-field__part"
                                              data-type="month-year">
                                              <div
                                                class="sb-date-field__select-value">
                                                <span
                                                  class="js-date-field__value"
                                                  data-placeholder="
                                                  Check-out month
                                                  ">
                                                </span>
                                                <i
                                                  class="sb-date-field__select-icon bicon-downchevron"></i>
                                              </div>
                                              <select
                                                class="sb-date-field__select-field js-date-field__select"
                                                aria-label="
                                                Check-out month
                                                " data-no-old-calendar="1">
                                              </select>
                                              <input type="hidden"
                                                class="js-date-field__year"
                                                name="checkout_year"
                                                value="" />
                                              <input type="hidden"
                                                class="js-date-field__month"
                                                name="checkout_month"
                                                value="" />
                                            </div>
                                            <div class="sb-date-field__select -day js-date-field__part"
                                              data-type="date">
                                              <div
                                                class="sb-date-field__select-value">
                                                <span
                                                  class="js-date-field__value"
                                                  data-placeholder="
                                                  Check-out day
                                                  ">
                                                </span>
                                                <i
                                                  class="sb-date-field__select-icon bicon-downchevron"></i>
                                              </div>
                                              <select
                                                class="sb-date-field__select-field js-date-field__select"
                                                name="checkout_monthday"
                                                data-selected=""
                                                aria-label="
                                                Check-out day
                                                " data-no-old-calendar="1">
                                              </select>
                                            </div>
                                          </div>
                                          <div class="sb-date-field__display"
                                            data-placeholder="Check-out"
                                            data-date-format="short_date_with_weekday_without_year"
                                            data-display>
                                            Check-out
                                          </div>
                                          <i
                                            class="sb-date-field__chevron bicon-downchevron"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="xp-calendar "
                              data-component="search/dates/single-calendar"
                              data-sb-id="main" data-render-los="1">
                              <div class="bui-calendar">
                                <div
                                  class="bui-calendar__main b-a11y-calendar-contrasts">
                                  <div class="bui-calendar__control bui-calendar__control--prev"
                                    data-bui-ref="calendar-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24">
                                      <path
                                        d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                                    </svg>
                                  </div>
                                  <div class="bui-calendar__control bui-calendar__control--next"
                                    data-bui-ref="calendar-next">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24">
                                      <path
                                        d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
                                    </svg>
                                  </div>
                                  <div class="bui-calendar__content"
                                    data-bui-ref="calendar-content">
                                  </div>
                                  <div class="bui-calendar__display"
                                    data-bui-ref="calendar-selected-display">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /Date Select Option -->
                      </div>
                      <div class="col-lg-4 col-sm-12 pl-md-0 pr-md-0">
                        <div class="children_submit">
                          <!-- Children Select Option -->
                          <div data-visible="accommodation,flights"
                            class="xp__input-group xp__guests"
                            data-component="search/group/group-with-modal" data-sb-id="main"
                            tabindex="0">
                            <div data-component="xp-index/guest-errors" data-sb-id="main"
                              data-view-id="accommodation" role="alert">
                            </div>
                            <label id="xp__guests__toggle" for="xp__guests__input"
                              class="xp__input" data-group-toggle role="button"
                              aria-expanded="false"
                              aria-controls="xp__guests__inputs-container">
                            <span class="invisible_spoken">Rooms and occupancy</span>
                            <span class="xp__guests__count">
                            <span data-adults-count>
                            2 adults
                            </span>
                            <span data-visible="accommodation">
                            &nbsp;&middot;&nbsp;
                            <span data-children-count>
                            0 children
                            </span>
                            </span>
                            <span data-visible="accommodation">
                            &nbsp;&middot;&nbsp;
                            <span data-room-count>
                            1 room
                            </span>
                            </span>
                            </span>
                            </label>
                            <input type="checkbox" id="xp__guests__input" />
                            <!-- Select People Box -->
                            <div id="xp__guests__inputs-container"
                              class="xp__guests__inputs focussable " data-group-modal
                              style="display: none;" role="region">
                              <div data-component="search/group/group" data-sb-id="main"
                                data-sb-width="medium" data-sb-bbtool-searchbox="0"
                                data-sb-group-children-hide="0"
                                data-sb-group-children-ages-hide="0"
                                data-sb-group-infants-hide="1"
                                data-sb-group-pets-hide="0"
                                data-sb-group-use-bui-stepper="1"
                                data-sb-group-bui-steppers-accessible="1"
                                data-fe_sb_group_descriptive_dropdowns="0"
                                data-fe_sb_universal_design="0" data-fe_sb_xpi="1"
                                data-fe_remove_duplicate_ids="0" data-fe_sb_unique_id=""
                                data-sb_reorder_rooms_block="1" data-sb-facelift="0"
                                data-fe_sb_show_children_age_bracket="1"
                                data-fe_sb_mandatory_child_ages="1"
                                data-fe_fam_d_index_mandatory_ages_new_copy="0"
                                data-fe_sb_dont_use_default_child_age="1">
                                <div class="u-clearfix" data-render>
                                  <div class="sb-group__field sb-group__field-adults">
                                    <div class="bui-stepper"
                                      data-bui-component="InputStepper">
                                      <div class="bui-stepper__title-wrapper">
                                        <label class="bui-stepper__title"
                                          for="group_adults">Adults</label>
                                      </div>
                                      <div
                                        class="bui-stepper__wrapper sb-group__stepper-a11y">
                                        <input style="display: none"
                                          type="number"
                                          class="bui-stepper__input"
                                          data-bui-ref="input-stepper-field"
                                          id="group_adults"
                                          name="group_adults" min="1" max="30"
                                          value="2" data-group-adults-count />
                                        <button
                                          class="bui-button bui-button--secondary bui-stepper__subtract-button "
                                          data-bui-ref="input-stepper-subtract-button"
                                          type="button">
                                        <span
                                          class="bui-button__text">&minus;</span>
                                        </button>
                                        <span class="bui-stepper__display"
                                          data-bui-ref="input-stepper-value">2</span>
                                        <button
                                          class="bui-button bui-button--secondary bui-stepper__add-button "
                                          data-bui-ref="input-stepper-add-button"
                                          type="button">
                                        <span
                                          class="bui-button__text">+</span>
                                        </button>
                                        <span class="bui-u-sr-only"
                                          aria-live="assertive"
                                          id="group_adults_desc">2
                                        Adults</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sb-group__field sb-group-children ">
                                    <div class="bui-stepper"
                                      data-bui-component="InputStepper">
                                      <div class="bui-stepper__title-wrapper">
                                        <label class="bui-stepper__title"
                                          for="group_children">Children</label>
                                        <span class="bui-stepper__subtitle">Ages
                                        0 –
                                        17</span>
                                      </div>
                                      <div
                                        class="bui-stepper__wrapper sb-group__stepper-a11y">
                                        <input style="display: none"
                                          type="number"
                                          class="bui-stepper__input"
                                          data-bui-ref="input-stepper-field"
                                          id="group_children"
                                          name="group_children" min="0"
                                          max="10" value="0"
                                          data-group-children-count />
                                        <button
                                          class="bui-button bui-button--secondary bui-stepper__subtract-button sb-group__stepper-button-disabled"
                                          data-bui-ref="input-stepper-subtract-button"
                                          type="button">
                                        <span
                                          class="bui-button__text">&minus;</span>
                                        </button>
                                        <span class="bui-stepper__display"
                                          data-bui-ref="input-stepper-value">0</span>
                                        <button
                                          class="bui-button bui-button--secondary bui-stepper__add-button "
                                          data-bui-ref="input-stepper-add-button"
                                          type="button">
                                        <span
                                          class="bui-button__text">+</span>
                                        </button>
                                        <span class="bui-u-sr-only"
                                          aria-live="assertive"
                                          id="group_children_desc">0
                                        Children</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div></div>
                                  <div class="sb-group__field sb-group__field-rooms">
                                    <div class="bui-stepper"
                                      data-bui-component="InputStepper">
                                      <div class="bui-stepper__title-wrapper">
                                        <label class="bui-stepper__title"
                                          for="no_rooms">Rooms</label>
                                      </div>
                                      <div
                                        class="bui-stepper__wrapper sb-group__stepper-a11y">
                                        <input style="display: none"
                                          type="number"
                                          class="bui-stepper__input"
                                          data-bui-ref="input-stepper-field"
                                          id="no_rooms" name="no_rooms"
                                          min="1" max="30" value="1"
                                          data-group-rooms-count />
                                        <button
                                          class="bui-button bui-button--secondary bui-stepper__subtract-button sb-group__stepper-button-disabled"
                                          data-bui-ref="input-stepper-subtract-button"
                                          type="button">
                                        <span
                                          class="bui-button__text">&minus;</span>
                                        </button>
                                        <span class="bui-stepper__display"
                                          data-bui-ref="input-stepper-value">1</span>
                                        <button
                                          class="bui-button bui-button--secondary bui-stepper__add-button"
                                          data-bui-ref="input-stepper-add-button"
                                          type="button">
                                        <span
                                          class="bui-button__text">+</span>
                                        </button>
                                        <span class="bui-u-sr-only"
                                          aria-live="assertive"
                                          id="no_rooms_desc">1 Rooms</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Select People Box -->
                          </div>
                          <!-- /Children Select Option -->
                        </div>
                      </div>
                      <div class="col-lg-2 col-sm-12 pl-md-0 responsive-pt-5">
                        <!-- Submit/Search Button -->
                        <div class="xp__button">
                          <div class="sb-searchbox-submit-col -button-messages"></div>
                          <div class="sb-searchbox-submit-col -submit-button ">
                            <button data-sb-id="main" type="submit"
                              class="sb-searchbox__button ">
                            <span>
                            Search
                            </span>
                            <span class="sb-submit-helper"></span>
                            </button>
                          </div>
                        </div>
                        <!-- Submit/Search Button -->
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Banner Search Box -->
    </div>
  </div>
  <!-- /Banner -->
  <div id="" class="container">
    <div class="features-images">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="unified-postcard">
            <div class="unified-postcard__content unified-postcard__content_pe"
              style="background: url({{ asset('frontend/assets/images/city-1.webp')}}) no-repeat center center; background-size: cover;">
              <div class="unified-postcard__overlay">
                <div class="unified-postcard__header">
                  <h3>
                    <a href="">Kuala Lumpur</a>
                  </h3>
                  <p>
                    4,223 properties
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="unified-postcard">
            <div class="unified-postcard__content unified-postcard__content_pe"
              style="background: url({{asset('frontend/assets/images/city-2.webp')}}) no-repeat center center; background-size: cover;">
              <div class="unified-postcard__overlay">
                <div class="unified-postcard__header">
                  <h3>
                    <a href="">Kuala Lumpur</a>
                  </h3>
                  <p>
                    4,223 properties
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="unified-postcard">
            <div class="unified-postcard__content unified-postcard__content_pe"
            style="background: url({{asset('frontend/assets/images/city-3.webp')}}) no-repeat center center; background-size: cover;">
              <div class="unified-postcard__overlay">
                <div class="unified-postcard__header">
                  <h3>
                    <a href="">
                    Bangkok
                    </a>
                  </h3>
                  <p>
                    4,040 properties
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="unified-postcard">
            <div class="unified-postcard__content unified-postcard__content_pe"
            style="background: url({{asset('frontend/assets/images/city-4.webp')}}) no-repeat center center; background-size: cover;">
              <div class="unified-postcard__overlay">
                <div class="unified-postcard__header">
                  <h3>
                    <a href="">
                    Bangkok
                    </a>
                  </h3>
                  <p>
                    4,040 properties
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="unified-postcard">
            <div class="unified-postcard__content unified-postcard__content_pe"
            style="background: url({{asset('frontend/assets/images/city-5.webp')}}) no-repeat center center; background-size: cover;">
              <div class="unified-postcard__overlay">
                <div class="unified-postcard__header">
                  <h3>
                    <a href="">
                    Bangkok
                    </a>
                  </h3>
                  <p>
                    4,040 properties
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Explore Bangladesh -->
    <div class="bui-spacer--largest popular-destinations-carousel-block mt-5">
      <div class="bui-title bui-title--headline_3 bui-spacer--large">
        <span class="bui-title__text">Explore Bangladesh</span>
        <span class="bui-title__subtitle">These popular destinations have a lot to offer</span>
      </div>
      <!-- Slider -->
      <div class="bui-carousel bui-carousel--small bui-u-bleed@small">
        <ul class="bui-carousel__inner ExploreSlider">
          <li class="bui-carousel__item">
            <a class="bui-card bui-card--media bui-card--transparent popular-destinations-carousel-link"
              href="">
              <div class="bui-card__image-container">
                <img class="bui-card__image" src="{{ asset('frontend/assets/images/explore-bangladesh-1.webp')}}" alt="" />
              </div>
              <div class="bui-card__content">
                <div class="bui-title bui-title--strong_1 bui-card__title">
                  <span class="bui-card__title text-dark">Cox&#39;s Bazar</span>
                  <span class="bui-title__subtitle">60 properties</span>
                </div>
              </div>
            </a>
          </li>
          <li class="bui-carousel__item">
            <a class="bui-card bui-card--media bui-card--transparent popular-destinations-carousel-link"
              href="">
              <div class="bui-card__image-container">
                <img class="bui-card__image" src="{{ asset('frontend/assets/images/explore-bangladesh-1.webp')}}" alt="" />
              </div>
              <div class="bui-card__content">
                <div class="bui-title bui-title--strong_1 bui-card__title">
                  <span class="bui-card__title text-dark">Cox&#39;s Bazar</span>
                  <span class="bui-title__subtitle">60 properties</span>
                </div>
              </div>
            </a>
          </li>
          <li class="bui-carousel__item">
            <a class="bui-card bui-card--media bui-card--transparent popular-destinations-carousel-link"
              href="">
              <div class="bui-card__image-container">
                <img class="bui-card__image" src="{{ asset('frontend/assets/images/explore-bangladesh-1.webp')}}" alt="" />
              </div>
              <div class="bui-card__content">
                <div class="bui-title bui-title--strong_1 bui-card__title">
                  <span class="bui-card__title text-dark">Cox&#39;s Bazar</span>
                  <span class="bui-title__subtitle">60 properties</span>
                </div>
              </div>
            </a>
          </li>
          <li class="bui-carousel__item">
            <a class="bui-card bui-card--media bui-card--transparent popular-destinations-carousel-link"
              href="">
              <div class="bui-card__image-container">
                <img class="bui-card__image" src="{{ asset('frontend/assets/images/explore-bangladesh-1.webp')}}" alt="" />
              </div>
              <div class="bui-card__content">
                <div class="bui-title bui-title--strong_1 bui-card__title">
                  <span class="bui-card__title text-dark">Cox&#39;s Bazar</span>
                  <span class="bui-title__subtitle">60 properties</span>
                </div>
              </div>
            </a>
          </li>
          <li class="bui-carousel__item">
            <a class="bui-card bui-card--media bui-card--transparent popular-destinations-carousel-link"
              href="">
              <div class="bui-card__image-container">
                <img class="bui-card__image" src="{{ asset('frontend/assets/images/explore-bangladesh-1.webp')}}" alt="" />
              </div>
              <div class="bui-card__content">
                <div class="bui-title bui-title--strong_1 bui-card__title">
                  <span class="bui-card__title text-dark">Cox&#39;s Bazar</span>
                  <span class="bui-title__subtitle">60 properties</span>
                </div>
              </div>
            </a>
          </li>
          <li class="bui-carousel__item">
            <a class="bui-card bui-card--media bui-card--transparent popular-destinations-carousel-link"
              href="">
              <div class="bui-card__image-container">
                <img class="bui-card__image" src="{{ asset('frontend/assets/images/explore-bangladesh-1.webp')}}" alt="" />
              </div>
              <div class="bui-card__content">
                <div class="bui-title bui-title--strong_1 bui-card__title">
                  <span class="bui-card__title text-dark">Cox&#39;s Bazar</span>
                  <span class="bui-title__subtitle">60 properties</span>
                </div>
              </div>
            </a>
          </li>
          <li class="bui-carousel__item">
            <a class="bui-card bui-card--media bui-card--transparent popular-destinations-carousel-link"
              href="">
              <div class="bui-card__image-container">
                <img class="bui-card__image" src="{{ asset('frontend/assets/images/explore-bangladesh-1.webp')}}" alt="" />
              </div>
              <div class="bui-card__content">
                <div class="bui-title bui-title--strong_1 bui-card__title">
                  <span class="bui-card__title text-dark">Cox&#39;s Bazar</span>
                  <span class="bui-title__subtitle">60 properties</span>
                </div>
              </div>
            </a>
          </li>
          <li class="bui-carousel__item">
            <a class="bui-card bui-card--media bui-card--transparent popular-destinations-carousel-link"
              href="">
              <div class="bui-card__image-container">
                <img class="bui-card__image" src="{{ asset('frontend/assets/images/explore-bangladesh-1.webp')}}" alt="" />
              </div>
              <div class="bui-card__content">
                <div class="bui-title bui-title--strong_1 bui-card__title">
                  <span class="bui-card__title text-dark">Cox&#39;s Bazar</span>
                  <span class="bui-title__subtitle">60 properties</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <!-- Slider -->
    </div>
    <!-- Explore Bangladesh -->
    <!-- Get inspiration for your next trip -->
    <div class="d-index__section bui-spacer--largest promote_articles mt-5">
      <h2 class="bui-f-font-display_two bui-spacer--large d-index__header-section">
        Get inspiration for your next trip
      </h2>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <!-- Single -->
          <a href="" class="promote_article">
            <div class="js-lazy-image promote_article_img"
              style="background: url('frontend/assets/images/inspiration-trip.webp');"></div>
            <div class="promote_article__overlay"></div>
            <div class="promote_article__content">
              <h3 class="promote_article__header text-white" id="promote_article_title_1">
                The best Michelin-starred hotel restaurants
              </h3>
              <p id="promote_article_desc_1" class="promote_article__description text-white">
                Have an unforgettable dining experience without leaving your hotel.
              </p>
            </div>
          </a>
          <!-- Single -->
        </div>
        <div class="col-lg-4 col-md-6">
          <!-- Single -->
          <a href="" class="promote_article ">
            <div class="js-lazy-image promote_article_img"
              style="background: url('frontend/assets/images/inspiration-trip-2.webp');"></div>
            <div class="promote_article__overlay"></div>
            <div class="promote_article__content">
              <h3 class="promote_article__header text-white" id="promote_article_title_2">
                Destination inspiration: Seoul, South Korea
              </h3>
              <p id="promote_article_desc_2" class="promote_article__description text-white">
                Mouth-watering food, dazzling nightlife, and shopping to rival Fifth Avenue.
              </p>
            </div>
          </a>
          <!-- Single -->
        </div>
        <div class="col-lg-4 col-md-12">
          <!-- Single -->
          <a href="" class="promote_article promote-articles-margin">
            <div class="js-lazy-image promote_article_img"
              style="background: url('frontend/assets/images/inspiration-trip-3.webp');"></div>
            <div class="promote_article__overlay"></div>
            <div class="promote_article__content">
              <h3 class="promote_article__header text-white" id="promote_article_title_3">
                The top 7 brunch spots in Los Angeles
              </h3>
              <p id="promote_article_desc_3" class="promote_article__description text-white">
                From ricotta toast to kimchi fried rice, 7 memorable late-morning meals to
                enjoy in LA.
              </p>
            </div>
          </a>
          <!-- Single -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <!-- Single type-2 -->
          <a href="" class="promote_article promote-articles-2-col ">
            <div class="js-lazy-image promote_article_img"
              style="background: url('frontend/assets/images/inspiration-trip-4.webp');"></div>
            <div class="promote_article__overlay"></div>
            <div class="promote_article__content">
              <h3 class="promote_article__header text-white" id="promote_article_title_4">5
                family-friendlysummer hikes in the Alps
              </h3>
              <p id="promote_article_desc_4" class="promote_article__description text-white">
                Discover snow-capped summertime wilderness on a family-friendly hiking
                adventure.
              </p>
            </div>
          </a>
          <!-- Single type-2 -->
        </div>
        <div class="col-lg-6 col-md-6">
          <!-- Single type-2 -->
          <a href="" class="promote_article promote-articles-2-col ">
            <div class="js-lazy-image promote_article_img"
              style="background: url('frontend/assets/images/inspiration-trip-5.webp');"></div>
            <div class="promote_article__overlay"></div>
            <div class="promote_article__content">
              <h3 class="promote_article__header text-white" id="promote_article_title_5">
                The 5 finest views in the USA
              </h3>
              <p id="promote_article_desc_5" class="promote_article__description text-white">
                Panoramic and photogenic national parks to take your breath away.
              </p>
            </div>
          </a>
          <!-- Single type-2 -->
        </div>
      </div>
    </div>
    <!-- Get inspiration for your next trip -->
    <!-- Homes guests love -->
    <div class="d-index__section bui-spacer--largest bh-carousel--new">
      <h2 class="bui-f-font-display_two bui-spacer--large d-index__header-section ">
        Homes guests love
      </h2>
      <!-- Slider -->
      <div class="bui-carousel bui-carousel--medium u-bleed@small">
        <ul class="bui-carousel__inner js-bh-carousel-async-inner HomeGuest">
          <!-- Single Slider -->
          <li class="bui-carousel__item">
            <div class="bui-card bui-card--media bui-card--transparent">
              <div class="bui-card__image-container bh-carousel--new__photo"
                style="background: url('frontend/assets/images/guest-love-1.jpg');"></div>
              <div class="bui-card__content bh-carousel--new__content">
                <h3 class="bui-card__title bh-carousel--new__title">
                  <span>Aparthotel Stare Miasto</span>
                </h3>
                <p class="bui-card__subtitle"> Krakow </p>
                <p class="bh-carousel--new__price bui_color_black">
                  Starting from BDT 7,719
                </p>
                <div style="margin-top: 4px">
                  <div
                    class="bui-review-score c-score bui-review-score--inline bui-review-score--small">
                    <div class="bui-review-score__badge" aria-label="Scored  ">
                      8.9
                    </div>
                    <div class="bui-review-score__content">
                      <div class="bui-review-score__title"> Excellent
                      </div>
                      <div class="bui-review-score__text"> 2,892 reviews </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- /Single Slider -->
          <!-- Single Slider -->
          <li class="bui-carousel__item">
            <div class="bui-card bui-card--media bui-card--transparent">
              <div class="bui-card__image-container bh-carousel--new__photo"
                style="background: url('frontend/assets/images/guest-love-1.jpg');"></div>
              <div class="bui-card__content bh-carousel--new__content">
                <h3 class="bui-card__title bh-carousel--new__title">
                  <span>Aparthotel Stare Miasto</span>
                </h3>
                <p class="bui-card__subtitle"> Krakow </p>
                <p class="bh-carousel--new__price bui_color_black">
                  Starting from BDT 7,719
                </p>
                <div style="margin-top: 4px">
                  <div
                    class="bui-review-score c-score bui-review-score--inline bui-review-score--small">
                    <div class="bui-review-score__badge" aria-label="Scored  ">
                      8.9
                    </div>
                    <div class="bui-review-score__content">
                      <div class="bui-review-score__title"> Excellent
                      </div>
                      <div class="bui-review-score__text"> 2,892 reviews </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- /Single Slider -->
          <!-- Single Slider -->
          <li class="bui-carousel__item">
            <div class="bui-card bui-card--media bui-card--transparent">
              <div class="bui-card__image-container bh-carousel--new__photo"
                style="background: url('frontend/assets/images/guest-love-1.jpg');"></div>
              <div class="bui-card__content bh-carousel--new__content">
                <h3 class="bui-card__title bh-carousel--new__title">
                  <span>Aparthotel Stare Miasto</span>
                </h3>
                <p class="bui-card__subtitle"> Krakow </p>
                <p class="bh-carousel--new__price bui_color_black">
                  Starting from BDT 7,719
                </p>
                <div style="margin-top: 4px">
                  <div
                    class="bui-review-score c-score bui-review-score--inline bui-review-score--small">
                    <div class="bui-review-score__badge" aria-label="Scored  ">
                      8.9
                    </div>
                    <div class="bui-review-score__content">
                      <div class="bui-review-score__title"> Excellent
                      </div>
                      <div class="bui-review-score__text"> 2,892 reviews </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- /Single Slider -->
          <!-- Single Slider -->
          <li class="bui-carousel__item">
            <div class="bui-card bui-card--media bui-card--transparent">
              <div class="bui-card__image-container bh-carousel--new__photo"
                style="background: url('frontend/assets/images/guest-love-1.jpg');"></div>
              <div class="bui-card__content bh-carousel--new__content">
                <h3 class="bui-card__title bh-carousel--new__title">
                  <span>Aparthotel Stare Miasto</span>
                </h3>
                <p class="bui-card__subtitle"> Krakow </p>
                <p class="bh-carousel--new__price bui_color_black">
                  Starting from BDT 7,719
                </p>
                <div style="margin-top: 4px">
                  <div
                    class="bui-review-score c-score bui-review-score--inline bui-review-score--small">
                    <div class="bui-review-score__badge" aria-label="Scored  ">
                      8.9
                    </div>
                    <div class="bui-review-score__content">
                      <div class="bui-review-score__title"> Excellent
                      </div>
                      <div class="bui-review-score__text"> 2,892 reviews </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- /Single Slider -->
          <!-- Single Slider -->
          <li class="bui-carousel__item">
            <div class="bui-card bui-card--media bui-card--transparent">
              <div class="bui-card__image-container bh-carousel--new__photo"
                style="background: url('frontend/assets/images/guest-love-1.jpg');"></div>
              <div class="bui-card__content bh-carousel--new__content">
                <h3 class="bui-card__title bh-carousel--new__title">
                  <span>Aparthotel Stare Miasto</span>
                </h3>
                <p class="bui-card__subtitle"> Krakow </p>
                <p class="bh-carousel--new__price bui_color_black">
                  Starting from BDT 7,719
                </p>
                <div style="margin-top: 4px">
                  <div
                    class="bui-review-score c-score bui-review-score--inline bui-review-score--small">
                    <div class="bui-review-score__badge" aria-label="Scored  ">
                      8.9
                    </div>
                    <div class="bui-review-score__content">
                      <div class="bui-review-score__title"> Excellent
                      </div>
                      <div class="bui-review-score__text"> 2,892 reviews </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- /Single Slider -->
        </ul>
      </div>
      <!-- Slider -->
    </div>
    <!-- Homes guests love -->
  </div>
  <div id="footer_menu_track"
    class="footerconstraint cnd-onview-anchor footer_no_lang_track a11y_fix_footer_contrast_footerconstraint">
    <!-- Subscribe Section -->
    <div id="newsletter_form_footer_container" class="newsletter_subscribe_with_sprites">
      <!-- Form -->
      <!-- Form -->
      <form action="#" method="post" name="newsletterform" id="emk-footer"
        class="footerForm emk-subscription-entry-point ">
        <div class="emk_footer_update emk_footer_centered emk_footer_update_space">
          <div class="footerconstraint-inner">
            <div class="emk_footer_banner_block">
              <h2>Save time, save money!</h2>
            </div>
            <div class="emk_footer_subbanner_block">
              Sign up and we&#39;ll send the best deals to you
            </div>
            <div class="clearfix"></div>
            <div class="emk_footer_form_layout">
              <label for="newsletter_to" class="invisible_spoken">
              Enter your email address and we&#39;ll send you our best deals
              </label>
              <div class="subscription_form_wrap">
                <input type="email" id="newsletter_to" class="input_newsletter_subscription_to"
                  placeholder="Your email" value="" />
                <button id="newsletter_button_footer">
                Subscribe
                </button>
              </div>
              <label class="emk_footer_gta_addition_left">
              <input type="checkbox" name="" value="1" />
              Send me a link to get the FREE Obocas.com app!
              </label>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- /Subscribe Section -->
    <div style="clear: both;"></div>
    <!-- Footer -->
    <div id="footer_top_menu" class="footer-top-menu ">
      <div class="footer-top-partners clearfix js-footer-top-menu">
        <div class="footerconstraint-inner clearfix">
          <div id="footertopnav-partners">
            <p class="footer-top-partner-text footer-top-partner-buttons">
              <a ref="nofollow" href="" class="footer-top-button">
              List your property
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="footerconstraint-inner clearfix container text-center">
        <div id="footertopnav">
          <ul class="footer-top-links-list">
            <li class="footer-top-link">
              <a href="">
              Your account
              </a>
            </li>
            <li class="footer-top-link">
              <a class="manage" href="">
              Make changes online to your booking
              </a>
            </li>
            <li class="footer-top-link">
              <a class="cuca" href="">
              Contact Customer Service
              </a>
            </li>
            <li class="footer-top-link">
              <a href="">
              Become an affiliate
              </a>
            </li>
            <li class="footer-top-link">
              <a href="" class="tracked">Booking.com
              for Business</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footerconstraint-inner">
      <div id="footer" class="footer-navigation-links-wrapper clearfix container">
        <div id="footer_links" class="footer-navigation-links">
          <div class="footer-navigation-links-column footer-seo-links-to-html-sitemaps">
            <ul class="footer-navigation-links-list">
              <li class="footer-navigation-link">
                <a href="">
                Countries
                </a>
              </li>
              <li class="footer-navigation-link">
                <a href="">
                Regions
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-navigation-links-column">
            <ul class="footer-navigation-links-list footer-seo-links-to-index">
              <li class="footer-navigation-link">
                <a href="">
                Homes
                </a>
              </li>
              <li class="footer-navigation-link">
                <a href="">
                Apartments
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-navigation-links-column">
            <ul class="footer-navigation-links-list">
              <li class="footer-navigation-link">
                <a href="">
                Unique places to stay
                </a>
              </li>
              <li class="footer-navigation-link">
                <a href="">
                All destinations
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-navigation-links-column">
            <ul class="footer-navigation-links-list">
              <li class="footer-navigation-link">
                <a href="">
                Car rental
                </a>
              </li>
              <li class="footer-navigation-link">
                <a href="">
                Flight finder
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-navigation-links-column">
            <ul class="footer-navigation-links-list">
              <li class="footer-navigation-link">
                <a href="">
                Coronavirus (COVID-19) FAQs
                </a>
              </li>
              <li class="footer-navigation-link">
                <a href="">About Booking.com</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
  </div>
  <div class="bui-overlay__content">
    <div class="bui-modal bui-modal--fill bui-modal--full-screen bui-modal--active">
      <div class="bui-modal__inner">
        <div class="bui-modal__slot">
          <button type="button" class="bui-modal__close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="presentation">
              <path
                d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
              </path>
            </svg>
          </button>
          <div class="bui-modal__body">
            <div class="bui-traveller-header__mobile-content">
              <div class="bui-box bui-box--size-large">
                <h2 class="bui-f-font-display_two" aria-label="More links, settings and support">
                  More
                </h2>
              </div>
              <ul>
                <li>
                  <a class="bui-list-item bui-list-item--size-large" href="">
                    <div class="bui-inline-container bui-inline-container--align">
                      <div class="bui-inline-container__start">
                        <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                          <svg class="bk-icon -streamline-property_add" height="24" width="24"
                            viewBox="0 0 24 24" role="presentation">
                            <path
                              d="M8.25 19h-3a.75.75 0 0 1-.75-.75v-7.5a.75.75 0 0 0-1.5 0v7.5a2.25 2.25 0 0 0 2.25 2.25h3a.75.75 0 0 0 0-1.5zM1.234 9.823l8.782-7.43a.75.75 0 0 1 .969 0l7.279 6.159a.75.75 0 1 0 .968-1.146l-7.279-6.159a2.25 2.25 0 0 0-2.906 0L.265 8.678a.75.75 0 1 0 .968 1.146zM15.75 2.5h3L18 1.75v3a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0 0 1.5zm6.75 14.25a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0zm1.5 0a6.75 6.75 0 1 0-13.5 0 6.75 6.75 0 0 0 13.5 0zm-7.5-3v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-1.5 0zm-2.25 3.75h6a.75.75 0 0 0 0-1.5h-6a.75.75 0 0 0 0 1.5z">
                            </path>
                          </svg>
                        </span>
                      </div>
                      <div class="bui-inline-container__main">
                        List your property
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
              <h3 class="bui-f-font-strong bui-traveller-header__menu-title">
                Inspiration
              </h3>
              <ul>
                <li>
                  <a class="bui-list-item bui-list-item--size-large" href="#">
                    <div class="bui-inline-container bui-inline-container--align">
                      <div class="bui-inline-container__start">
                        <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                          <svg class="bk-icon -streamline-book" height="24" width="24"
                            viewBox="0 0 24 24" role="presentation">
                            <path
                              d="M21 22.5H5.25a1.5 1.5 0 0 1-1.5-1.5.75.75 0 0 0-1.5 0 3 3 0 0 0 3 3H21a.75.75 0 0 0 0-1.5zM6 0a3.75 3.75 0 0 0-3.75 3.75V21h1.5a1.5 1.5 0 0 1 1.5-1.5h15a1.5 1.5 0 0 0 1.5-1.5V1.5a1.5 1.5 0 0 0-1.5-1.5H6zm0 1.5h14.25V18h-15a3 3 0 0 0-3 3c0 1 1.5 1 1.5 0V3.75A2.25 2.25 0 0 1 6 1.5zm14.25 21.75v-4.5a.75.75 0 0 0-1.5 0v4.5a.75.75 0 0 0 1.5 0z">
                            </path>
                          </svg>
                        </span>
                      </div>
                      <div class="bui-inline-container__main">
                        Travel articles
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
              <h3 class="bui-f-font-strong bui-traveller-header__menu-title">
                Settings and legal
              </h3>
              <ul>
                <li>
                  <a class="bui-list-item bui-list-item--size-large" href="#">
                    <div class="bui-inline-container bui-inline-container--align">
                      <div class="bui-inline-container__start">
                        <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                          <svg class="bk-icon -streamline-info_sign" height="24" width="24"
                            viewBox="0 0 24 24" role="presentation">
                            <path
                              d="M14.25 15.75h-.75a.75.75 0 0 1-.75-.75v-3.75a1.5 1.5 0 0 0-1.5-1.5h-.75a.75.75 0 0 0 0 1.5h.75V15a2.25 2.25 0 0 0 2.25 2.25h.75a.75.75 0 0 0 0-1.5zM11.625 6a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
                            </path>
                          </svg>
                        </span>
                      </div>
                      <div class="bui-inline-container__main">
                        About Boacos.com
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="bui-list-item bui-list-item--size-large" href="#">
                    <div class="bui-inline-container bui-inline-container--align">
                      <div class="bui-inline-container__start">
                        <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                          <svg class="bk-icon -streamline-property_preferred" height="24"
                            width="24" viewBox="0 0 24 24" role="presentation">
                            <path
                              d="M15.15 9.299l-3.981 5.308-2.389-2.388a.75.75 0 1 0-1.06 1.06l2.389 2.388a1.5 1.5 0 0 0 2.26-.16L16.35 10.2a.75.75 0 1 0-1.2-.9zm-3.836-7.472a.88.88 0 0 1 1.372 0l1.511 1.88a2.379 2.379 0 0 0 2.112.877l2.4-.261a.88.88 0 0 1 .974.971l-.262 2.402a2.38 2.38 0 0 0 .877 2.112l1.88 1.512a.88.88 0 0 1 0 1.37l-1.885 1.504a2.383 2.383 0 0 0-.878 2.114l.261 2.4a.88.88 0 0 1-.97.974l-2.403-.262a2.378 2.378 0 0 0-2.112.877l-1.506 1.873a.88.88 0 0 1-1.37 0l-1.511-1.88a2.38 2.38 0 0 0-2.113-.876l-2.4.261a.879.879 0 0 1-.974-.97l.262-2.403a2.381 2.381 0 0 0-.876-2.113l-1.88-1.51a.879.879 0 0 1 0-1.371l1.88-1.513a2.378 2.378 0 0 0 .876-2.111l-.261-2.4a.88.88 0 0 1 .97-.974l2.403.262a2.382 2.382 0 0 0 2.113-.876l1.51-1.867zM10.147.885l-1.511 1.87a.883.883 0 0 1-.784.325l-2.399-.26a2.379 2.379 0 0 0-2.626 2.629l.26 2.397a.878.878 0 0 1-.323.78L.883 10.139a2.379 2.379 0 0 0 0 3.709l1.88 1.51a.881.881 0 0 1 .324.782l-.26 2.4a2.378 2.378 0 0 0 2.63 2.626l2.396-.26a.881.881 0 0 1 .781.324l1.511 1.88a2.378 2.378 0 0 0 3.71 0l1.506-1.874a.878.878 0 0 1 .78-.324l2.4.26a2.378 2.378 0 0 0 2.626-2.628l-.26-2.398a.882.882 0 0 1 .324-.782l1.885-1.503a2.38 2.38 0 0 0 .002-3.71l-1.881-1.513a.88.88 0 0 1-.324-.78l.26-2.4a2.38 2.38 0 0 0-2.628-2.626l-2.398.26a.879.879 0 0 1-.78-.323L13.855.887a2.38 2.38 0 0 0-3.709 0z">
                            </path>
                          </svg>
                        </span>
                      </div>
                      <div class="bui-inline-container__main">
                        Become an affiliate
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="bui-list-item bui-list-item--size-large" href="" rel="nofollow">
                    <div class="bui-inline-container bui-inline-container--align">
                      <div class="bui-inline-container__start">
                        <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                          <svg class="bk-icon -streamline-food_cookie" height="24" width="24"
                            viewBox="0 0 24 24" role="presentation">
                            <path
                              d="M20.973 8.239a2.996 2.996 0 0 1-2.998-2.994v-.02a.75.75 0 0 0-1.207-.6 2.966 2.966 0 0 1-1.797.614 2.997 2.997 0 0 1-2.754-4.182.75.75 0 0 0-.72-1.045C4.883.28-.262 5.86.007 12.476c.268 6.615 5.849 11.76 12.464 11.492 6.615-.269 11.76-5.85 11.492-12.464a11.988 11.988 0 0 0-.562-3.172.75.75 0 0 0-1.064-.434c-.421.222-.89.339-1.366.341zm.003 1.5a4.458 4.458 0 0 0 2.06-.515l-.35-.663-.714.229c.288.898.453 1.832.491 2.774.235 5.788-4.266 10.67-10.054 10.905-5.787.235-10.67-4.266-10.905-10.054C1.27 6.628 5.771 1.745 11.558 1.51l-.03-.749-.689-.296a4.497 4.497 0 0 0 4.135 6.274 4.467 4.467 0 0 0 2.708-.924l-.457-.595-.75-.005v.03a4.496 4.496 0 0 0 4.498 4.494zm-12.003.75a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm4.5 6.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.5 0a2.25 2.25 0 1 0-4.5 0 2.25 2.25 0 0 0 4.5 0zm-9.373 0a.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5 1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5zm6.058-6.755a.375.375 0 1 1 .31-.43.376.376 0 0 1-.31.43h-.002a.75.75 0 0 0-.236-1.48h-.005a1.124 1.124 0 1 0 .364 2.22 1.125 1.125 0 0 0-.361-2.22.75.75 0 0 0 .24 1.48zm6 3a.375.375 0 1 1-.12-.74.375.375 0 0 1 .12.74.75.75 0 0 0-.24-1.48 1.125 1.125 0 1 0 .361 2.22 1.125 1.125 0 0 0-.361-2.22.75.75 0 0 0 .24 1.48z">
                            </path>
                          </svg>
                        </span>
                      </div>
                      <div class="bui-inline-container__main">
                        Privacy &amp; cookies
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="bui-list-item bui-list-item--size-large" href="" rel="nofollow">
                    <div class="bui-inline-container bui-inline-container--align">
                      <div class="bui-inline-container__start">
                        <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                          <svg class="bk-icon -streamline-file_info" height="24" width="24"
                            viewBox="0 0 24 24" role="presentation">
                            <path
                              d="M22.5 17.25a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0zm1.5 0a6.75 6.75 0 1 0-13.5 0 6.75 6.75 0 0 0 13.5 0zm-6 3v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0zm-.75-6.689a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM3.75 7.5h10.5a.75.75 0 0 0 0-1.5H3.75a.75.75 0 0 0 0 1.5zm0 4.5h6a.75.75 0 0 0 0-1.5h-6a.75.75 0 0 0 0 1.5zm0 4.5H7.5a.75.75 0 0 0 0-1.5H3.75a.75.75 0 0 0 0 1.5zm3.75 3H2.25a.75.75 0 0 1-.75-.75V2.25a.75.75 0 0 1 .75-.75h10.629a.75.75 0 0 1 .53.22L16.28 4.59c.14.14.219.331.219.53V7.5a.75.75 0 0 0 1.5 0V5.121a2.25 2.25 0 0 0-.659-1.59L14.47.659A2.25 2.25 0 0 0 12.88 0H2.25A2.25 2.25 0 0 0 0 2.25v16.5A2.25 2.25 0 0 0 2.25 21H7.5a.75.75 0 0 0 0-1.5z">
                            </path>
                          </svg>
                        </span>
                      </div>
                      <div class="bui-inline-container__main">
                        Terms and conditions
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap & Jquery -->
  <script src="{{ asset('frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Slick Slider -->
  <script src="{{ asset('frontend/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
  <!-- Search Box -->
  <script src="{{ asset('frontend/assets/js/search.min.js') }}"></script>
  <!-- Custom -->
  <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
  </body>
</html>