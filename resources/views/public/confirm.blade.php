<!DOCTYPE html>
<html>

<head>
    <!--====== Required meta tags =======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=on" />

    <title>Step Three</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/bootstrap.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/slick.css') }}">
    <!-- FrontAwesome -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/bui-react.min.css') }}">
    <!-- Project Css-->
    <!-- CloudFront Css-->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/cloudfront.min.css') }}" />
    <!-- Bstatic -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/bstatic.min.css') }}">
    <!-- Search -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/search-page.min.css') }}">
    <!-- Hotle -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/hotel.min.css') }}">

</head>

<body class="contrast-bg">

    <!-- Header -->
    <header class="bui-header bui-header--logo-large bui-u-hidden-print bui-header--rounded-tabs ">
        <!-- Nav Top -->
        <nav class="header-menu container">
            <!-- Nav Left Part -->
            <!-- Logo -->
            <div class="bui-header__main">
                <a href="/" class="bui-header__logo">
                    <span>
                        <img src="{{ asset('/frontend/assets/images/logo.png') }}" alt="">
                    </span>
                </a>
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
                            viewBox="0 0 24 24" role="presentation" focusable="false">
                            <path
                                d="M8.25 19h-3a.75.75 0 0 1-.75-.75v-7.5a.75.75 0 0 0-1.5 0v7.5a2.25 2.25 0 0 0 2.25 2.25h3a.75.75 0 0 0 0-1.5zM1.234 9.823l8.782-7.43a.75.75 0 0 1 .969 0l7.279 6.159a.75.75 0 1 0 .968-1.146l-7.279-6.159a2.25 2.25 0 0 0-2.906 0L.265 8.678a.75.75 0 1 0 .968 1.146zM15.75 2.5h3L18 1.75v3a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0 0 1.5zm6.75 14.25a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0zm1.5 0a6.75 6.75 0 1 0-13.5 0 6.75 6.75 0 0 0 13.5 0zm-7.5-3v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-1.5 0zm-2.25 3.75h6a.75.75 0 0 0 0-1.5h-6a.75.75 0 0 0 0 1.5z" />
                        </svg>
                        <a class="bui-button bui-button--light bui-traveller-header__product-action" href="{{ url('#') }}">
                            <span class="bui-button__text">
                                List your property
                            </span>
                        </a>
                    </div>
                    <!-- /Property List -->

                    <!-- SingIn & SingUp -->
                    <div class="bui-group__item">
                        <a class="bui-button bui-button--secondary js-header-login-link" href="{{ url('#') }}">
                            <span class="bui-button__text">
                                Register
                            </span>
                        </a>
                    </div>
                    <div class="bui-group__item">
                        <svg class="bk-icon -streamline-account_create" height="24" style="display:none;" width="24"
                            viewBox="0 0 24 24" role="presentation" focusable="false">
                            <path
                                d="M22.5 17.25a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0zm1.5 0a6.75 6.75 0 1 0-13.5 0 6.75 6.75 0 0 0 13.5 0zm-7.5-3v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-1.5 0zM14.25 18h6a.75.75 0 0 0 0-1.5h-6a.75.75 0 0 0 0 1.5zM1.5 17.25a6.003 6.003 0 0 1 8.356-5.518.75.75 0 0 0 .588-1.38A7.504 7.504 0 0 0 0 17.25a.75.75 0 0 0 1.5 0zm9.375-12.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0zm1.5 0a4.875 4.875 0 1 0-9.75 0 4.875 4.875 0 0 0 9.75 0z" />
                        </svg>
                        <a class="bui-button bui-button--secondary js-header-login-link" href="{{ url('signin.html') }}">
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
                                type="button" href="{{ url('signin.html') }}">
                                <span class="bui-button__icon bui-bubble-container">
                                    <i class="fa-solid fa-circle-user"></i>
                                </span>
                            </a>
                        </div>
                        <div class="bui-group__item">
                            <button class="bui-button bui-button--light bui-button--large mobile-menu-btn">
                                <span class="bui-button__icon">
                                    <span aria-hidden="true" class="bui-icon bui-icon--large">
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


    <!-- Contant -->
    <div class="container">

        <div class="reassurance mt-5">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="reassurance__cell-text">
                        <div class="reassurance__thanks">
                            Thanks, {{session('booking_firstname')}} {{session('booking_lastname')}}!
                        </div>
                        <h1 class="reassurance__title">
                            Your booking in {{$property->property_name}} is confirmed.
                        </h1>
                        <ul class="reassurance__list">
                            <li>
                                Your booking confirmation is in your inbox!
                                <a class="conf_mb_inline conf_mb_inline--edit_email" href="{{ url('#') }}">
                                    Edit
                                </a>
                            </li>
                            <li>
                                You can now
                                <a href="{{ url('') }}" class="custom_track">
                                    modify or cancel</a> your booking until check-in
                            </li>
                            <li>
                                Your <b>payment</b> will be handled by <strong>{{$property->property_name}}</strong>. The <b>Price</b> section below has more details.
                            </li>
                            <li data-pb-crsell="gta_checkmarks">
                                Get paperless confirmation when you
                                <a href="{{ url('#') }}">
                                    download the app</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="reassurance__cell-buttons mt-sm-3 mb-sm-3 mt-lg-5">
                        <div class="reassurance__button-container reassurance__button-container--first">
                            <div class="mb-conf-print">
                                <a href="{{ url('#') }}"
                                    class="btn btn-primary conf-btn--print mb-conf-print__link custom_trackreassurance__button">
                                    <i class="conf-btn__icon conf-btn__icon--print"></i>
                                    Print confirmation
                                    <i class="mb-loader mb-loader--print"></i>
                                </a>
                            </div>
                        </div>
                        <div class="reassurance__button-container">
                            <a href="{{ url('#') }}" class="btn btn-primary reassurance__button gta_button">
                                <span class="bui-button__icon">
                                    <i class="bicon-mobilephone"></i>
                                </span>
                                <span class="bui-button__text">
                                    Save confirmation to phone
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="slider mb-5">
            <div class="row">
                <div class="col-12">
                    <div class="cdr-container">
                        <div class="cdr-header mb-4">
                            <h3 class="bui_font_large">
                                {{session('booking_firstname')}} {{session('booking_lastname')}}, extend your trip...
                            </h3>
                            <p class="bui_font_small">Travelers who visited {{$property->city}} extended their trip</p>
                        </div>
                        <div id="cdr-accordion-content">
                            <div class="bui-carousel bui-carousel--medium bui-u-bleed@small">
                                <ul class="bui-carousel__inner extend-trip">

                                    <li class="bui-carousel__item cdr-card">
                                        <a href="{{ url('') }}">
                                            <div
                                                class="bui-card bui-card--media bui-card--transparent cdr-card-container">
                                                <div class="bui-card__image-container">
                                                    <img class="bui-card__image cdr-card-image"
                                                        src="{{ asset('/frontend/assets/images/confirm-page-slider-1.webp') }}">
                                                </div>
                                                <div class="bui-card__content">
                                                    <h4 class="bui-card__title">
                                                        Kolkata
                                                    </h4>
                                                    <span data-bui-component="Tooltip" data-tooltip-position="top"
                                                        data-tooltip-text="Culture">
                                                        <span class="cdr-bagdes"><span>Culture
                                                            </span>, </span>
                                                    </span>
                                                    <span data-bui-component="Tooltip" data-tooltip-position="top"
                                                        data-tooltip-text="History">
                                                        <span class="cdr-bagdes"><span>History
                                                            </span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="bui-carousel__item cdr-card">
                                        <a href="{{ url('#') }}">
                                            <div
                                                class="bui-card bui-card--media bui-card--transparent cdr-card-container">
                                                <div class="bui-card__image-container">
                                                    <img class="bui-card__image cdr-card-image"
                                                        src="{{ asset('/frontend/assets/images/confirm-page-slider-2.webp') }}">
                                                </div>
                                                <div class="bui-card__content">
                                                    <h4 class="bui-card__title">
                                                        Kathmandu
                                                    </h4>
                                                    <span>
                                                        <span class="cdr-bagdes">
                                                            <span>Temples
                                                            </span>, </span>
                                                    </span>
                                                    <span>
                                                        <span class="cdr-bagdes">
                                                            <span>Culture
                                                            </span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="bui-carousel__item cdr-card">
                                        <a href="{{ url('') }}">
                                            <div
                                                class="bui-card bui-card--media bui-card--transparent cdr-card-container">
                                                <div class="bui-card__image-container">
                                                    <img class="bui-card__image cdr-card-image"
                                                        src="{{ asset('/frontend/assets/images/confirm-page-slider-3.webp') }}">
                                                </div>
                                                <div class="bui-card__content">
                                                    <h4 class="bui-card__title">
                                                        Colombo
                                                    </h4>
                                                    <span>
                                                        <span class="cdr-bagdes"><span>Friendly People
                                                            </span>, </span>
                                                    </span>
                                                    <span>
                                                        <span class="cdr-bagdes">
                                                            <span>Shopping
                                                            </span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="bui-carousel__item cdr-card">
                                        <a href="{{ url('#') }}">
                                            <div
                                                class="bui-card bui-card--media bui-card--transparent cdr-card-container">
                                                <div class="bui-card__image-container">
                                                    <img class="bui-card__image cdr-card-image"
                                                        src="{{ asset('/frontend/assets/images/confirm-page-slider-4.webp') }}">
                                                </div>
                                                <div class="bui-card__content">
                                                    <h4 class="bui-card__title">
                                                        Yangon
                                                    </h4>
                                                    <span>
                                                        <span class="cdr-bagdes">
                                                            <span>Temples
                                                            </span>, </span>
                                                    </span>
                                                    <span>
                                                        <span class="cdr-bagdes">
                                                            <span>Friendly People
                                                            </span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="bui-carousel__item cdr-card">
                                        <a href="{{ url('#') }}">
                                            <div
                                                class="bui-card bui-card--media bui-card--transparent cdr-card-container">
                                                <div class="bui-card__image-container">
                                                    <img class="bui-card__image cdr-card-image"
                                                        src="{{ asset('/frontend/assets/images/confirm-page-slider-4.webp') }}">
                                                </div>
                                                <div class="bui-card__content">
                                                    <h4 class="bui-card__title">
                                                        Yangon
                                                    </h4>
                                                    <span>
                                                        <span class="cdr-bagdes">
                                                            <span>Temples
                                                            </span>, </span>
                                                    </span>
                                                    <span>
                                                        <span class="cdr-bagdes">
                                                            <span>Friendly People
                                                            </span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>


                                    <li class="bui-carousel__item cdr-card">
                                        <a href="{{ url('') }}">
                                            <div
                                                class="bui-card bui-card--media bui-card--transparent cdr-card-container">
                                                <div class="bui-card__image-container">
                                                    <img class="bui-card__image cdr-card-image"
                                                        src="{{ asset('/frontend/assets/images/confirm-page-slider-1.webp') }}">
                                                </div>
                                                <div class="bui-card__content">
                                                    <h4 class="bui-card__title">
                                                        Kolkata
                                                    </h4>
                                                    <span data-bui-component="Tooltip" data-tooltip-position="top"
                                                        data-tooltip-text="Culture">
                                                        <span class="cdr-bagdes"><span>Culture
                                                            </span>, </span>
                                                    </span>
                                                    <span data-bui-component="Tooltip" data-tooltip-position="top"
                                                        data-tooltip-text="History">
                                                        <span class="cdr-bagdes"><span>History
                                                            </span>
                                                        </span>
                                                    </span>
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
        </div> --}}

        <!-- Check Your Details -->
        <div class="check-details">
            <div class="row">
                <div class="col-lg-12">
                    <div class="conf-summary__main">
                        <h2 id="booking_details" class="b_conf_check_details">
                            Check Your Details
                        </h2>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th class="hotel_name larger_hotel_name" colspan="2" scope="row">
                                            {{$property->property_name}}
                                            <span class="nowrap pb-conf-rating">
                                                <span class="c-accommodation-classification-rating">
                                                    <span
                                                        class="c-accommodation-classification-rating__badge c-accommodation-classification-rating__badge--stars ">
                                                        <span class="bui-rating bui-rating--smaller" role="img"
                                                            aria-label="4 out of 5">
                                                            <span aria-hidden="true"
                                                                class="bui-icon bui-rating__item bui-icon--medium"
                                                                role="presentation">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" focusable="false"
                                                                    aria-hidden="true" role="img">
                                                                    <path
                                                                        d="M23.555,8.729a1.505,1.505,0,0,0-1.406-.98H16.062a.5.5,0,0,1-.472-.334L13.405,1.222a1.5,1.5,0,0,0-2.81,0l-.005.016L8.41,7.415a.5.5,0,0,1-.471.334H1.85A1.5,1.5,0,0,0,.887,10.4l5.184,4.3a.5.5,0,0,1,.155.543L4.048,21.774a1.5,1.5,0,0,0,2.31,1.684l5.346-3.92a.5.5,0,0,1,.591,0l5.344,3.919a1.5,1.5,0,0,0,2.312-1.683l-2.178-6.535a.5.5,0,0,1,.155-.543l5.194-4.306A1.5,1.5,0,0,0,23.555,8.729Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span aria-hidden="true"
                                                                class="bui-icon bui-rating__item bui-icon--medium"
                                                                role="presentation">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" focusable="false"
                                                                    aria-hidden="true" role="img">
                                                                    <path
                                                                        d="M23.555,8.729a1.505,1.505,0,0,0-1.406-.98H16.062a.5.5,0,0,1-.472-.334L13.405,1.222a1.5,1.5,0,0,0-2.81,0l-.005.016L8.41,7.415a.5.5,0,0,1-.471.334H1.85A1.5,1.5,0,0,0,.887,10.4l5.184,4.3a.5.5,0,0,1,.155.543L4.048,21.774a1.5,1.5,0,0,0,2.31,1.684l5.346-3.92a.5.5,0,0,1,.591,0l5.344,3.919a1.5,1.5,0,0,0,2.312-1.683l-2.178-6.535a.5.5,0,0,1,.155-.543l5.194-4.306A1.5,1.5,0,0,0,23.555,8.729Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span aria-hidden="true"
                                                                class="bui-icon bui-rating__item bui-icon--medium"
                                                                role="presentation">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" focusable="false"
                                                                    aria-hidden="true" role="img">
                                                                    <path
                                                                        d="M23.555,8.729a1.505,1.505,0,0,0-1.406-.98H16.062a.5.5,0,0,1-.472-.334L13.405,1.222a1.5,1.5,0,0,0-2.81,0l-.005.016L8.41,7.415a.5.5,0,0,1-.471.334H1.85A1.5,1.5,0,0,0,.887,10.4l5.184,4.3a.5.5,0,0,1,.155.543L4.048,21.774a1.5,1.5,0,0,0,2.31,1.684l5.346-3.92a.5.5,0,0,1,.591,0l5.344,3.919a1.5,1.5,0,0,0,2.312-1.683l-2.178-6.535a.5.5,0,0,1,.155-.543l5.194-4.306A1.5,1.5,0,0,0,23.555,8.729Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span aria-hidden="true"
                                                                class="bui-icon bui-rating__item bui-icon--medium"
                                                                role="presentation">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" focusable="false"
                                                                    aria-hidden="true" role="img">
                                                                    <path
                                                                        d="M23.555,8.729a1.505,1.505,0,0,0-1.406-.98H16.062a.5.5,0,0,1-.472-.334L13.405,1.222a1.5,1.5,0,0,0-2.81,0l-.005.016L8.41,7.415a.5.5,0,0,1-.471.334H1.85A1.5,1.5,0,0,0,.887,10.4l5.184,4.3a.5.5,0,0,1,.155.543L4.048,21.774a1.5,1.5,0,0,0,2.31,1.684l5.346-3.92a.5.5,0,0,1,.591,0l5.344,3.919a1.5,1.5,0,0,0,2.312-1.683l-2.178-6.535a.5.5,0,0,1,.155-.543l5.194-4.306A1.5,1.5,0,0,0,23.555,8.729Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>

                                                <svg aria-hidden="true" class="bk-icon" fill="#FEBB02" height="24"
                                                    rel="300" width="24" viewBox="0 0 128 128" role="presentation"
                                                    focusable="false">
                                                    <path
                                                        d="M112 8H16a8 8 0 0 0-8 8v96a8 8 0 0 0 8 8h96a8 8 0 0 0 8-8V16a8 8 0 0 0-8-8zM48 96H24V58h24zm56-25a8.7 8.7 0 0 1-2 6 8.9 8.9 0 0 1 1 4 6.9 6.9 0 0 1-5 7c-.5 4-4.8 8-9 8H56V58l10.3-23.3a5.4 5.4 0 0 1 10.1 2.7 10.3 10.3 0 0 1-.6 2.7L72 52h23c4.5 0 9 3.5 9 8a9.2 9.2 0 0 1-2 5.3 7.5 7.5 0 0 1 2 5.7z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Confirmation number</th>
                                        <td>{{$booking->id}}{{$booking->phone}}</td>
                                    </tr>
                                    {{-- <tr>
                                        <th scope="row">PIN Code</th>
                                        <td>
                                            2674
                                            <i class=""></i>
                                        </td>
                                    </tr> --}}
                                    <tr>
                                        <th scope="row">Booking Details</th>
                                        <td>{{$booking->number_of_days}} nights, 1 room</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">You booked for</th>
                                        <td>2 adults</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Check-in</th>
                                        <td>{{$booking->from_date}} (from 2:00 PM)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Check-out</th>
                                        <td>{{$booking->to_date}} (until 12:00 PM)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-4 mb-5">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            1 room
                                        </div>
                                        <div class="col">
                                            BDT {{$booking->total_amount}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="room-price">
                                                Price
                                            </div>
                                            <div class="room-price-note">
                                                (for {{$booking->number_of_persons}} guests)
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div>
                                                <span class="price-approx">
                                                    approx
                                                    .</span>
                                                &nbsp;
                                                <span class="room-price">
                                                    BDT&nbsp; {{$booking->total_amount}}
                                                </span>
                                            </div>
                                            {{-- <div class="room-price-converted">
                                                US$928.20
                                            </div> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-4">
                                        <div class="col">
                                            <div class="pb-pricebreakdown--excluded-desc">
                                                <div class="pb-pricebreakdown--excluded-desc-header">
                                                    Additional charges
                                                </div>
                                                <div class="pb-pricebreakdown--excluded-desc-text">
                                                    The price you see below is an approximate that may include fees
                                                    based on the maximum occupancy. This can include taxes set by local
                                                    governments or charges set by the property.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <span>TAX</span>&nbsp;

                                        </div>
                                        <div class="col">
                                            <span class="dimmed dimmed--dark">(26.5000%)
                                            </span>
                                        </div>
                                    </div> --}}
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="room-price-final">
                                                Final Price
                                            </div>
                                            <div class="room-price-note-final">
                                                (taxes included)
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div>
                                                <span class="price-approx">approx.&nbsp;</span>
                                                <span class="room-price-final">BDT&nbsp;{{$booking->total_amount}}</span>
                                            </div>
                                            {{-- <div>
                                                <span class="price-approx">
                                                    You'll pay <span class="room-price-converted">1,174.17</span> in
                                                    <span class="room-price-converted">USD</span>.
                                                </span>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <h4 class="pb-pricebreakdown--additional-info-header">
                                                The final price shown is the amount you'll pay to the property.
                                            </h4>
                                            <div class="pb-pricebreakdown--additional-info-text"
                                                data-et-view="bQbYSCZFceHEVJdYJNdDaXFCVCGXT:1">
                                                obocas.com doesn't charge guests any reservation, administration,
                                                or other fees.<br>
                                                Your card issuer may charge you a foreign transaction fee.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col">
                                            <h4 class="pb-pricebreakdown--additional-info-header">Payment Info</h4>
                                            <div class="pb-pricebreakdown--additional-info-text">
                                                Best Western PLUS Maya - Luxury Airport Hotel handles all
                                                payments.<br>
                                                This property accepts the following forms of payment:
                                                American Express,
                                                Visa,
                                                Mastercard,
                                                JCB,
                                                UnionPay credit card
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="pb-pricebreakdown--additional-info-header">Currency &amp;
                                                Exchange Rate Info</div>
                                            <div class="pb-pricebreakdown--additional-info-text">
                                                You'll pay Best Western PLUS Maya - Luxury Airport Hotel in USD
                                                according to the exchange rate on the day of payment.
                                                <br>
                                                The amount displayed in BDT is just an estimate based on
                                                <strong>today's</strong> exchange rate for USD.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <h4 class="pb-pricebreakdown--additional-info-header">Additional Info
                                            </h4>
                                            <div class="pb-pricebreakdown--additional-info-text">
                                                <div data-et-view="INQHUNFSVdINOfaKLYRTWe:2"></div>
                                                Note that additional supplements (e.g. an extra bed) aren't added in
                                                this total.<br>
                                                <span data-e2e="conf-free-cxl-taxes-fees">If you cancel, applicable
                                                    taxes may still be charged by the property.</span><br>
                                                <span data-e2e="conf-noshow-free-cxl-warning">If you don’t show up
                                                    for this booking, and you don’t cancel beforehand, the property
                                                    is liable to charge you the full reservation amount.</span><br>
                                                Remember to read the <strong>Important info</strong> below – it
                                                could contain important details not mentioned here.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="conf-summary__main mb-5">
                        <h2 id="booking_details" class="b_conf_check_details">
                            Property Details
                        </h2>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row">Address</th>
                                        <td>{{$property->address}}, {{$property->city}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Phone</th>
                                        <td>
                                            {{$property->phone}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">GPS Coordinates</th>
                                        <td>N 023° 50.087, E 90° 25.076</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Standard Double Room</th>
                                        <td>This double room has a flat-screen TV, air conditioning and minibar.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Guest name</th>
                                        <td>{{session('booking_firstname')}} {{session('booking_lastname')}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Max capacity</th>
                                        <td>2 adults</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Your stay includes:</th>
                                        <td>
                                            <div class="pb_facilities--badge" data-name-en="room size"
                                                data-facility-id="0" data-facility-type="0"><span class=""><svg
                                                        class="bk-icon -streamline-room_size" fill="#008009" height="16"
                                                        width="16" viewBox="0 0 24 24" role="presentation"
                                                        aria-hidden="true" focusable="false">
                                                        <path
                                                            d="M3.75 23.25V7.5a.75.75 0 0 0-1.5 0v15.75a.75.75 0 0 0 1.5 0zM.22 21.53l2.25 2.25a.75.75 0 0 0 1.06 0l2.25-2.25a.75.75 0 1 0-1.06-1.06l-2.25 2.25h1.06l-2.25-2.25a.75.75 0 0 0-1.06 1.06zM5.78 9.22L3.53 6.97a.75.75 0 0 0-1.06 0L.22 9.22a.75.75 0 1 0 1.06 1.06l2.25-2.25H2.47l2.25 2.25a.75.75 0 1 0 1.06-1.06zM7.5 3.75h15.75a.75.75 0 0 0 0-1.5H7.5a.75.75 0 0 0 0 1.5zM9.22.22L6.97 2.47a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.03 2.47v1.06l2.25-2.25A.75.75 0 1 0 9.22.22zm12.31 5.56l2.25-2.25a.75.75 0 0 0 0-1.06L21.53.22a.75.75 0 1 0-1.06 1.06l2.25 2.25V2.47l-2.25 2.25a.75.75 0 0 0 1.06 1.06zM10.5 13.05v7.2a2.25 2.25 0 0 0 2.25 2.25h6A2.25 2.25 0 0 0 21 20.25v-7.2a.75.75 0 0 0-1.5 0v7.2a.75.75 0 0 1-.75.75h-6a.75.75 0 0 1-.75-.75v-7.2a.75.75 0 0 0-1.5 0zm13.252 2.143l-6.497-5.85a2.25 2.25 0 0 0-3.01 0l-6.497 5.85a.75.75 0 0 0 1.004 1.114l6.497-5.85a.75.75 0 0 1 1.002 0l6.497 5.85a.75.75 0 0 0 1.004-1.114z">
                                                        </path>
                                                    </svg>26 m²</span></div>
                                            <div class="pb_facilities--badge" data-name-en="" data-facility-id="113"
                                                data-facility-type="1"><span class=""><svg
                                                        class="bk-icon -streamline-landmark" fill="#008009" height="16"
                                                        width="16" viewBox="0 0 24 24" role="presentation"
                                                        aria-hidden="true" focusable="false">
                                                        <path
                                                            d="M4.5 8.911h3l-.75-.75v9l.75-.75h-3l.75.75v-9l-.75.75zm0-1.5a.75.75 0 0 0-.75.75v9c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-9a.75.75 0 0 0-.75-.75h-3zm6 1.5h3l-.75-.75v9l.75-.75h-3l.75.75v-9l-.75.75zm0-1.5a.75.75 0 0 0-.75.75v9c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-9a.75.75 0 0 0-.75-.75h-3zm6 1.5h3l-.75-.75v9l.75-.75h-3l.75.75v-9l-.75.75zm0-1.5a.75.75 0 0 0-.75.75v9c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-9a.75.75 0 0 0-.75-.75h-3zm4.5 12H3l.75.75v-2.25h16.5v2.25l.75-.75zm0 1.5a.75.75 0 0 0 .75-.75v-2.25a1.5 1.5 0 0 0-1.5-1.5H3.75a1.5 1.5 0 0 0-1.5 1.5v2.25c0 .414.336.75.75.75h18zm-19.5 3h21a.75.75 0 0 0 0-1.5h-21a.75.75 0 0 0 0 1.5zm0-3h21a.75.75 0 0 0 0-1.5h-21a.75.75 0 0 0 0 1.5zm18.75-15.75v2.25H3.75v-2.25l-.415.67L12 1.5l8.665 4.332-.415-.671zm1.5 0a.75.75 0 0 0-.415-.67L12.67.157a1.503 1.503 0 0 0-1.34 0L2.666 4.49a.75.75 0 0 0-.415.671v2.25a1.5 1.5 0 0 0 1.5 1.5h16.5a1.5 1.5 0 0 0 1.5-1.5v-2.25zM3 5.911h18a.75.75 0 0 0 0-1.5H3a.75.75 0 0 0 0 1.5z">
                                                        </path>
                                                    </svg>Landmark view</span></div>
                                            <div class="pb_facilities--badge" data-name-en="" data-facility-id="121"
                                                data-facility-type="1"><span class=""><svg
                                                        class="bk-icon -streamline-city" fill="#008009" height="16"
                                                        width="16" viewBox="0 0 24 24" role="presentation"
                                                        aria-hidden="true" focusable="false">
                                                        <path
                                                            d="M2.75 6h9.5a.25.25 0 0 1-.25-.25v17.5l.75-.75H2.25l.75.75V5.75a.25.25 0 0 1-.25.25zm0-1.5c-.69 0-1.25.56-1.25 1.25v17.5c0 .414.336.75.75.75h10.5a.75.75 0 0 0 .75-.75V5.75c0-.69-.56-1.25-1.25-1.25h-9.5zm3-1.5h3.5A.25.25 0 0 1 9 2.75v2.5l.75-.75h-4.5l.75.75v-2.5a.25.25 0 0 1-.25.25zm0-1.5c-.69 0-1.25.56-1.25 1.25v2.5c0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75v-2.5c0-.69-.56-1.25-1.25-1.25h-3.5zM5.25 9h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zM7.5.75v1.5a.75.75 0 0 0 1.5 0V.75a.75.75 0 0 0-1.5 0zM15.75 24h6a.75.75 0 0 0 .75-.75V10.5A1.5 1.5 0 0 0 21 9h-4.5a1.5 1.5 0 0 0-1.5 1.5v12.75a.75.75 0 0 0 1.5 0V10.5H21v12.75l.75-.75h-6a.75.75 0 0 0 0 1.5zM19.5 8.25v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0zM.75 24h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5z">
                                                        </path>
                                                    </svg>City view</span></div>
                                            <div class="pb_facilities--badge" data-name-en="" data-facility-id="11"
                                                data-facility-type="1"><span class=""><svg
                                                        class="bk-icon -streamline-weather_snowflake" fill="#008009"
                                                        height="16" width="16" viewBox="0 0 24 24" role="presentation"
                                                        aria-hidden="true" focusable="false">
                                                        <path
                                                            d="M11.25.75v7.5a.75.75 0 0 0 1.5 0V.75a.75.75 0 0 0-1.5 0zm4.031.914l-3.75 3h.938l-3.75-3a.75.75 0 1 0-.938 1.172l3.75 3a.75.75 0 0 0 .938 0l3.75-3a.75.75 0 1 0-.938-1.172zM1.883 7.024l6.495 3.75a.75.75 0 0 0 .75-1.299l-6.495-3.75a.75.75 0 1 0-.75 1.3zM4.69 3.99l.723 4.748.468-.812-4.473 1.748a.75.75 0 0 0 .546 1.398l4.473-1.748a.75.75 0 0 0 .468-.812l-.723-4.748a.75.75 0 1 0-1.482.226zM2.632 18.274l6.495-3.75a.75.75 0 1 0-.75-1.298l-6.495 3.75a.75.75 0 1 0 .75 1.299zm-1.224-3.948l4.473 1.748-.468-.812-.723 4.748a.75.75 0 0 0 1.482.226l.723-4.748a.75.75 0 0 0-.468-.812l-4.473-1.748a.75.75 0 0 0-.546 1.398zM12.75 23.25v-7.5a.75.75 0 0 0-1.5 0v7.5a.75.75 0 0 0 1.5 0zm-4.031-.914l3.75-3h-.938l3.75 3a.75.75 0 0 0 .937-1.172l-3.75-3a.75.75 0 0 0-.937 0l-3.75 3a.75.75 0 0 0 .938 1.172zm13.399-5.36l-6.495-3.75a.75.75 0 0 0-.75 1.298l6.495 3.75a.75.75 0 0 0 .75-1.299zm-2.807 3.034l-.724-4.748-.468.812 4.473-1.748a.75.75 0 0 0-.546-1.398l-4.473 1.748a.75.75 0 0 0-.468.812l.723 4.748a.75.75 0 0 0 1.483-.226zm2.057-14.285l-6.495 3.75a.75.75 0 0 0 .75 1.3l6.495-3.75a.75.75 0 0 0-.75-1.3zm1.224 3.95l-4.473-1.749.468.812.724-4.748a.75.75 0 0 0-1.483-.226l-.723 4.748a.75.75 0 0 0 .468.812l4.473 1.748a.75.75 0 0 0 .546-1.398zM11.625 7.6L8.377 9.475a.75.75 0 0 0-.375.65v3.75a.75.75 0 0 0 .375.65l3.248 1.874a.75.75 0 0 0 .75 0l3.248-1.875a.75.75 0 0 0 .375-.649v-3.75a.75.75 0 0 0-.375-.65L12.375 7.6a.75.75 0 0 0-.75 0zm.75 1.3h-.75l3.248 1.874-.375-.649v3.75l.375-.65-3.248 1.876h.75l-3.248-1.876.375.65v-3.75l-.375.65L12.375 8.9z">
                                                        </path>
                                                    </svg>Air conditioning</span></div>
                                            <div class="pb_facilities--badge" data-name-en="" data-facility-id="75"
                                                data-facility-type="1"><span class=""><svg
                                                        class="bk-icon -streamline-tv_flat_screen" fill="#008009"
                                                        height="16" width="16" viewBox="0 0 24 24" role="presentation"
                                                        aria-hidden="true" focusable="false">
                                                        <path
                                                            d="M22.5 10.375v6.5a.25.25 0 0 1-.25.25H1.75a.25.25 0 0 1-.25-.25v-13a.25.25 0 0 1 .25-.25h20.5a.25.25 0 0 1 .25.25v6.5zm1.5 0v-6.5a1.75 1.75 0 0 0-1.75-1.75H1.75A1.75 1.75 0 0 0 0 3.875v13c0 .966.784 1.75 1.75 1.75h20.5a1.75 1.75 0 0 0 1.75-1.75v-6.5zm-16.5 12h9a.75.75 0 0 0 0-1.5h-9a.75.75 0 0 0 0 1.5zm3.75-4.5v3.75a.75.75 0 0 0 1.5 0v-3.75a.75.75 0 0 0-1.5 0z">
                                                        </path>
                                                    </svg>Flat-screen TV</span></div>
                                            <div class="pb_facilities--badge" data-name-en="" data-facility-id="123"
                                                data-facility-type="1"><span class=""><svg
                                                        class="bk-icon -streamline-resort" fill="#008009" height="16"
                                                        width="16" viewBox="0 0 24 24" role="presentation"
                                                        aria-hidden="true" focusable="false">
                                                        <path
                                                            d="M.768 11.413l1.5 6.75a.75.75 0 0 0 1.464-.326l-1.5-6.75a.75.75 0 0 0-1.464.326zM2.22 23.456l1.5-5.25L3 18.75h3a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 0 1.5 0V19.5A2.25 2.25 0 0 0 6 17.25H3a.75.75 0 0 0-.721.544l-1.5 5.25a.75.75 0 1 0 1.442.412zm19.547-12.369l-1.5 6.75a.75.75 0 1 0 1.464.326l1.5-6.75a.75.75 0 1 0-1.464-.326zm1.453 11.957l-1.5-5.25A.75.75 0 0 0 21 17.25h-3a2.25 2.25 0 0 0-2.25 2.25v3.75a.75.75 0 0 0 1.5 0V19.5a.75.75 0 0 1 .75-.75h3l-.721-.544 1.5 5.25a.75.75 0 1 0 1.442-.412zM11.25 6.75v16.5a.75.75 0 0 0 1.5 0V6.75a.75.75 0 0 0-1.5 0zm-4.5 7.5h10.5a.75.75 0 0 0 0-1.5H6.75a.75.75 0 0 0 0 1.5zM1.5 6l10.064-4.37c.297-.161.575-.161.803-.033l10.178 4.425L22.5 6H1.5zm0 1.5h21a1.5 1.5 0 0 0 .689-2.832L13.034.255c-.616-.35-1.452-.35-2.136.034L.858 4.646c-.544.28-.856.792-.857 1.352A1.5 1.5 0 0 0 1.499 7.5z">
                                                        </path>
                                                    </svg>Terrace</span></div>
                                            <div class="pb_facilities--badge" data-name-en="" data-facility-id="3"
                                                data-facility-type="1"><span class=""><svg
                                                        class="bk-icon -streamline-food_and_drink" fill="#008009"
                                                        height="16" width="16" viewBox="0 0 128 128" role="presentation"
                                                        aria-hidden="true" focusable="false">
                                                        <path
                                                            d="M48.25 4v36a20.13 20.13 0 0 1-16 19.59V124a4 4 0 0 1-8 0V59.58A20.09 20.09 0 0 1 8.25 40V4a4 4 0 0 1 8 0v36a12 12 0 0 0 8 11.28V4a4 4 0 0 1 8 0v47.29a12.1 12.1 0 0 0 8-11.3V4a4 4 0 0 1 8 0zm65 120a4 4 0 0 1-4 4H77.28a4 4 0 0 1 0-8h12V95.7c-14.139-2.16-24.023-15.135-22.35-29.34l6-59.17a8 8 0 0 1 8-7.19h24.67a8 8 0 0 1 8 7.19l6 59.23c1.633 14.181-8.24 27.115-22.35 29.28V120h12a4 4 0 0 1 3.96 4zM80.89 8l-2.43 24H108l-2.4-24zM83 84.88A18.49 18.49 0 0 0 93.17 88h.15a18.48 18.48 0 0 0 10.17-3.12 18.48 18.48 0 0 0 8.12-17.59L108.85 40H77.64l-2.76 27.23A18.49 18.49 0 0 0 83 84.88z">
                                                        </path>
                                                    </svg>Minibar</span></div>
                                            <div class="pb_facilities--badge" data-name-en="" data-facility-id="wifi"
                                                data-facility-type="2"><span class=""><svg
                                                        class="bk-icon -streamline-wifi" fill="#008009" height="16"
                                                        width="16" viewBox="0 0 24 24" role="presentation"
                                                        aria-hidden="true" focusable="false">
                                                        <path
                                                            d="M14.25 18.75a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0zm1.5 0a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0zm2.08-5.833a8.25 8.25 0 0 0-11.666 0 .75.75 0 0 0 1.06 1.06 6.75 6.75 0 0 1 9.546 0 .75.75 0 0 0 1.06-1.06zm3.185-3.182c-4.979-4.98-13.051-4.98-18.03 0a.75.75 0 1 0 1.06 1.06c4.394-4.393 11.516-4.393 15.91 0a.75.75 0 1 0 1.06-1.06zm2.746-3.603C17.136-.043 6.864-.043.24 6.132A.75.75 0 1 0 1.26 7.23c6.05-5.638 15.429-5.638 21.478 0a.75.75 0 0 0 1.022-1.098z">
                                                        </path>
                                                    </svg>
                                                    Free WiFi
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Meal Plan</th>
                                        <td>Start your day with breakfast for BDT 431 per guest, per night.
                                            Contact the property for details.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Prepayment</th>
                                        <td>No prepayment is needed.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <h5>
                                                <span class="policy_name_icon">
                                                    <i class="bicon-user-family"></i>
                                                </span>
                                                <span>Children &amp; Beds</span>
                                            </h5>
                                        </th>
                                        <td>
                                            <div class="c-child-policies bui-f-font-body">
                                                <div class="c-child-policies__general bui-spacer--large">
                                                    <h3 class="bui-f-font-heading bui-spacer--large">Child policies
                                                    </h3>
                                                    <p>Children of all ages are welcome.</p>
                                                    <div data-et-view="INQHUNPIFddfLLFKWIFdCVaSPXe:1"></div>
                                                </div>
                                                <h3 class="bui-f-font-heading bui-spacer--large">Crib and extra bed
                                                    policies</h3>
                                                <div class="c-child-policies__supplements">
                                                    <p>
                                                        No cribs or extra beds are available.
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="fde444d7ef _2d81b3471">Important Information</div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    Guests are required to show a photo ID and credit card upon check-in. Please note
                                    that all Special Requests are subject to availability and additional charges may
                                    apply.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="fde444d7ef _2d81b3471">Special Requests</div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    “Approximate time of arrival: between 01:00 and 02:00 This guest is interested in
                                    your airport shuttle service and would like to get more information from you.”
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="fde444d7ef _2d81b3471">Contact property</div>
                        <div class="_a11e76d75">For most questions, the property is usually best to
                            ask</div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="fe5178cae9"><span aria-hidden="true"
                                                class="_3ae5d40db _4de7b1cb8"><svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M22.5 12v6a.75.75 0 0 1-.75.75H2.25A.75.75 0 0 1 1.5 18V6a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v6zm1.5 0V6a2.25 2.25 0 0 0-2.25-2.25H2.25A2.25 2.25 0 0 0 0 6v12a2.25 2.25 0 0 0 2.25 2.25h19.5A2.25 2.25 0 0 0 24 18v-6zm-8.822-1.474l3.813 3.525a.75.75 0 1 0 1.018-1.102l-3.813-3.525a.75.75 0 1 0-1.018 1.102zM7.804 9.424L3.99 12.95a.75.75 0 1 0 1.018 1.102l3.813-3.525a.75.75 0 1 0-1.018-1.102zm14.65-5.027l-9.513 6.56a1.656 1.656 0 0 1-1.882 0l-9.513-6.56A.75.75 0 1 0 .694 5.63l9.513 6.56a3.156 3.156 0 0 0 3.586 0l9.513-6.56a.75.75 0 1 0-.852-1.234z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="_0fd59361b">
                                            <div class="_84f6fd780 _f98eca565">
                                                <div class="_29c344764">
                                                    <div class="ac6bdec376">Email property</div>
                                                </div>
                                                <div class="_29c344764">
                                                    <div class="_a11e76d75">Send a message to the property –
                                                        they'll respond as soon as possible</div>
                                                </div>
                                                <div class="_29c344764">
                                                    <div class="_a11e76d75">
                                                        <a href="{{ url('') }}" class="_4310f7077 _45807dae0 _f7538b398">
                                                            <span>Send
                                                                an email</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-3">
                                        <div class="fe5178cae9">
                                            <span aria-hidden="true" class="_3ae5d40db _4de7b1cb8">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M14.662 23.038l.012.007c2.46 1.566 5.71 1.21 7.792-.873l.774-.774a2.596 2.596 0 0 0 0-3.669l-3.26-3.26a2.596 2.596 0 0 0-3.67 0 1.093 1.093 0 0 1-1.546.002l-.001-.001-5.219-5.22a1.096 1.096 0 0 1 0-1.548 2.593 2.593 0 0 0 .002-3.666c0-.002 0-.002-.002-.003L6.284.77a2.596 2.596 0 0 0-3.669 0l-.774.774A6.285 6.285 0 0 0 .982 9.36L1 9.386A50.691 50.691 0 0 0 14.62 23.011zm.798-1.27A49.186 49.186 0 0 1 2.244 8.55l-.005-.008a4.78 4.78 0 0 1 .662-5.938l.774-.774a1.096 1.096 0 0 1 1.549 0l3.26 3.264v.002c.428.427.427 1.119 0 1.545a2.596 2.596 0 0 0 0 3.67l5.218 5.22.002.001a2.593 2.593 0 0 0 3.667-.002 1.096 1.096 0 0 1 1.548 0l3.26 3.26c.428.427.428 1.12 0 1.548l-.773.774a4.783 4.783 0 0 1-5.951.652l-.037-.022z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="_0fd59361b">
                                            <div class="_84f6fd780 _f98eca565">
                                                <div class="_29c344764">
                                                    <div class="ac6bdec376">Call property</div>
                                                </div>
                                                <div class="_29c344764">
                                                    <div class="_a11e76d75"><a href="{{ url('tel:+880 1755-562590') }}"
                                                            class="_4310f7077 fcb26725ff">{{$property->phone}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="fde444d7ef _2d81b3471">Need help?</div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="_7ac605330">
                                            <span aria-hidden="true" class="_3ae5d40db _4de7b1cb8"><svg
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M9.75 9a2.25 2.25 0 1 1 3 2.122 2.25 2.25 0 0 0-1.5 2.122v1.006a.75.75 0 0 0 1.5 0v-1.006c0-.318.2-.602.5-.708A3.75 3.75 0 1 0 8.25 9a.75.75 0 1 0 1.5 0zM12 16.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="a0964b478f">
                                            <div class="_84f6fd780 _f98eca565">
                                                <div class="_29c344764">
                                                    <div class="_a11e76d75">We're here to help answer your
                                                        questions and manage your booking</div>
                                                </div>
                                                <div class="_29c344764">
                                                    <div class="_a11e76d75"><a href="{{ url('#') }}"
                                                            class="_4310f7077 _45807dae0 _f7538b398">
                                                            <span>Contact
                                                                Customer Service</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>

    <!-- Mobile Side Menu Modal -->
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
                                    <a class="bui-list-item bui-list-item--size-large" href="{{ url('') }}">
                                        <div class="bui-inline-container bui-inline-container--align">
                                            <div class="bui-inline-container__start">
                                                <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                                                    <svg class="bk-icon -streamline-property_add" height="24" width="24"
                                                        viewBox="0 0 24 24" role="presentation" focusable="false">
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
                                    <a class="bui-list-item bui-list-item--size-large" href="{{ url('#') }}">
                                        <div class="bui-inline-container bui-inline-container--align">
                                            <div class="bui-inline-container__start">
                                                <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                                                    <svg class="bk-icon -streamline-book" height="24" width="24"
                                                        viewBox="0 0 24 24" role="presentation" focusable="false">
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
                                    <a class="bui-list-item bui-list-item--size-large" href="{{ url('#') }}">
                                        <div class="bui-inline-container bui-inline-container--align">
                                            <div class="bui-inline-container__start">
                                                <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                                                    <svg class="bk-icon -streamline-info_sign" height="24" width="24"
                                                        viewBox="0 0 24 24" role="presentation" focusable="false">
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
                                    <a class="bui-list-item bui-list-item--size-large" href="{{ url('#') }}">
                                        <div class="bui-inline-container bui-inline-container--align">
                                            <div class="bui-inline-container__start">
                                                <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                                                    <svg class="bk-icon -streamline-property_preferred" height="24"
                                                        width="24" viewBox="0 0 24 24" role="presentation"
                                                        focusable="false">
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
                                    <a class="bui-list-item bui-list-item--size-large" href="{{ url('') }}" rel="nofollow">
                                        <div class="bui-inline-container bui-inline-container--align">
                                            <div class="bui-inline-container__start">
                                                <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                                                    <svg class="bk-icon -streamline-food_cookie" height="24" width="24"
                                                        viewBox="0 0 24 24" role="presentation" focusable="false">
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
                                    <a class="bui-list-item bui-list-item--size-large" href="{{ url('') }}" rel="nofollow">
                                        <div class="bui-inline-container bui-inline-container--align">
                                            <div class="bui-inline-container__start">
                                                <span class="bui-icon bui-icon--large bui-icon--color-neutral">
                                                    <svg class="bk-icon -streamline-file_info" height="24" width="24"
                                                        viewBox="0 0 24 24" role="presentation" focusable="false">
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
    <!-- Mobile Side Menu Modal -->

    <!-- Bootstrap & Jquery -->
    <script src="{{ asset('/frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Slick Slider -->
    <script src="{{ asset('/frontend/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/slick.min.js') }}"></script>

    <!-- Search Box -->
    <script src="{{ asset('/frontend/assets/js/search.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/google-map.js') }}"></script>

    <!-- Custom -->
    <script src="{{ asset('/frontend/assets/js/script.js') }}"></script>

</body>

</html>
