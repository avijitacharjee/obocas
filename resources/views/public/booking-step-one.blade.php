<!DOCTYPE html>
<html>

<head>
    <!--====== Required meta tags =======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=on" />

    <title>Steap one</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slickcss')}}">
    <!-- FrontAwesome -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bui-react.min.css')}}">
    <!-- Project Css-->
    <!-- CloudFront Css-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/cloudfront.min.css')}}" />
    <!-- Bstatic -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bstatic.min.css')}}">
    <!-- Search -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/search-page.min.css')}}">
    <!-- Hotle -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/hotel.min.css')}}">

</head>

<body>

    <!-- Header -->
    <header class="bui-header bui-header--logo-large bui-u-hidden-print bui-header--rounded-tabs">
        <!-- Nav Top -->
        <nav class="header-menu container">
            <!-- Nav Left Part -->
            <!-- Logo -->
            <div class="bui-header__main">
                <div class="bui-header__logo d-lg-block d-md-none">
                    <span>
                        <img src="{{asset('frontend/assets/images/logo.png')}}" alt="">
                    </span>
                </div>

                <div class="bui-header__logo d-lg-none d-md-block">
                    <span>
                        <i class="fa-solid fa-angle-left"></i>
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
                            viewBox="0 0 24 24" role="presentation" focusable="false">
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
                        <a class="bui-button bui-button--secondary " href="#">
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
                        <a class="bui-button bui-button--secondary " href="signin.html">
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
                            <a class="bui-button bui-traveller-header__profile bui-button--light bui-button--large "
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

    <div class="container">

        <!-- Bradcrumb -->
        <div class="row mt-4 mb-4">
            <div class="col-12">
                <div class="bui-spacer--medium clearfix">
                    <nav id="breadcrumb" class="bui-breadcrumb breadcrumb--multi_product">
                        <ol class="bui-group bui-group--inline bui-breadcrumb__list">
                            <li class="bui-breadcrumb__item hp-breadcrumb__item">
                                <div class="bui-breadcrumb__text">
                                    <a href="#" class="bui-link bui-link--primary bui_breadcrumb__link">
                                        Home
                                    </a>
                                </div>
                            </li>
                            <svg class="bk-icon -iconset-navarrow_right bui-breadcrumb__icon" height="16" width="16"
                                viewBox="0 0 128 128">
                                <path
                                    d="M54.3 96a4 4 0 0 1-2.8-6.8L76.7 64 51.5 38.8a4 4 0 0 1 5.7-5.6L88 64 57.2 94.8a4 4 0 0 1-2.9 1.2z">
                                </path>
                            </svg>
                            <li class="bui-breadcrumb__item hp-breadcrumb__item">
                                <div class="bui-breadcrumb__text">
                                    <a href="#" class="bui-link bui-link--primary bui_breadcrumb__link"
                                        title="Hotels in Bangladesh">
                                        Bangladesh
                                    </a>
                                </div>
                            </li>
                            <svg class="bk-icon -iconset-navarrow_right bui-breadcrumb__icon" height="16" width="16"
                                viewBox="0 0 128 128">
                                <path
                                    d="M54.3 96a4 4 0 0 1-2.8-6.8L76.7 64 51.5 38.8a4 4 0 0 1 5.7-5.6L88 64 57.2 94.8a4 4 0 0 1-2.9 1.2z">
                                </path>
                            </svg>
                            <li class="bui-breadcrumb__item hp-breadcrumb__item">
                                <div class="bui-breadcrumb__text">
                                    <a href="#" class="bui-link bui-link--primary bui_breadcrumb__link"
                                        title="Hotels in Dhaka">
                                        Dhaka
                                    </a>
                                </div>
                            </li>
                            <svg class="bk-icon -iconset-navarrow_right bui-breadcrumb__icon" height="16" width="16"
                                viewBox="0 0 128 128">
                                <path
                                    d="M54.3 96a4 4 0 0 1-2.8-6.8L76.7 64 51.5 38.8a4 4 0 0 1 5.7-5.6L88 64 57.2 94.8a4 4 0 0 1-2.9 1.2z">
                                </path>
                            </svg>
                            <li class="bui-breadcrumb__item hp-breadcrumb__item">
                                <div class="bui-breadcrumb__text">
                                    <div class="bui_breadcrumb__nolink">
                                        <h1>
                                            <a class="bui_breadcrumb__link_masked" href="#">
                                                Nascent Gardenia Baridhara (Hotel), Dhaka (Bangladesh) Deals
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /Bradcrumb -->




        <div class="row">

            <!-- Left Side -->
            <div class="col-lg-3 d-lg-block d-md-none">

                <div class="bpg_holder_light_block">
                    <div id="rate_guarantee" class="">
                        <a href="#" class="open-bpg-in-overlay-instead pp_bpg_tooltip_holder">
                            We Price Match
                        </a>
                    </div>
                </div>
                <!-- Search Box -->
                <div class="sb-searchbox__outer sb-searchbox-universal">
                    <form id="frm" class="sb-searchbox sb-face-lift sb-searchbox--painted   -small  js--sb-searchbox">
                        <div class="sb-searchbox__row u-clearfix -title">
                            <h2 class="-searchbox__title">
                                <span class="sb-searchbox__title-text">
                                    Search
                                </span>
                            </h2>
                        </div>

                        <div class="sb-searchbox__row u-clearfix ">

                            <label class="sb-searchbox__label -main" for="ss">
                                Destination/property name:
                            </label>
                            <div>
                                <div class="c-autocomplete sb-destination -with-icon region_second_line">
                                    <svg class="bk-icon -streamline-magnifying_glass sb-destination__icon"
                                        fill="#333333" focusable="false" height="20" width="20" viewBox="0 0 24 24">
                                        <path
                                            d="M17.464 6.56a8.313 8.313 0 1 1-15.302 6.504A8.313 8.313 0 0 1 17.464 6.56zm1.38-.586C16.724.986 10.963-1.339 5.974.781.988 2.9-1.337 8.662.783 13.65c2.12 4.987 7.881 7.312 12.87 5.192 4.987-2.12 7.312-7.881 5.192-12.87zM15.691 16.75l7.029 7.03a.75.75 0 0 0 1.06-1.06l-7.029-7.03a.75.75 0 0 0-1.06 1.06z">
                                        </path>
                                    </svg>
                                    <input type="search"
                                        class="c-autocomplete__input sb-searchbox__input sb-destination__input"
                                        placeholder="Dhaka" value="">
                                </div>
                            </div>
                        </div>

                        <div class="sb-searchbox__row u-clearfix">
                            <div class="sb-dates
                                        js--sb-dates
                                        -compact
                                        xp__dates">

                                <!-- Check-in & Check-out date -->
                                <div class="sb-dates__grid u-clearfix">
                                    <!-- Check-in date  -->
                                    <div class="sb-dates__col --checkin-field xp__date-time">
                                        <label for="checkin_monthday" class="sb-searchbox__label">
                                            Check-in date
                                        </label>
                                        <div class="sb-date-field__wrapper">
                                            <div class="sb-date-field b-datepicker"
                                                data-component="search/dates/date-field-select" data-sb-id="main"
                                                data-mode="checkin" data-calendar2-type="checkin"
                                                data-calendar2-title="Check-in">
                                                <div class="sb-searchbox__input sb-date-field__field sb-date__field-svg_icon"
                                                    data-field="">
                                                    <span
                                                        class="sb-date-field__icon sb-date-field__icon-btn bk-svg-wrapper calendar-restructure-sb">
                                                        <svg class="bk-icon -streamline-calendar sb-date-picker_icon-svg"
                                                            fill="#BDBDBD" focusable="false" height="20" width="20"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M22.502 13.5v8.25a.75.75 0 0 1-.75.75h-19.5a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v8.25zm1.5 0V5.25A2.25 2.25 0 0 0 21.752 3h-19.5a2.25 2.25 0 0 0-2.25 2.25v16.5A2.25 2.25 0 0 0 2.252 24h19.5a2.25 2.25 0 0 0 2.25-2.25V13.5zm-23.25-3h22.5a.75.75 0 0 0 0-1.5H.752a.75.75 0 0 0 0 1.5zM7.502 6V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0zm10.5 0V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0z">
                                                            </path>
                                                        </svg>
                                                        <i class="sb-date-field__icon-text sb-date-field__icon-text-wide"
                                                            data-icon-day="" data-placeholder="+">5</i>
                                                    </span>
                                                    <div class="sb-date-field__controls sb-date-field__controls__ie-fix"
                                                        data-controls="" data-calendar2-cant-touch-this="">
                                                        <div class="sb-date-field__select -month-year js-date-field__part"
                                                            data-type="month-year">
                                                            <div class="sb-date-field__select-value">
                                                                <!-- <span class="js-date-field__value" data-placeholder="Check-in month">April 2022</span> -->
                                                                <i
                                                                    class="sb-date-field__select-icon bicon-downchevron"></i>
                                                            </div>
                                                            <select
                                                                class="sb-date-field__select-field js-date-field__select"
                                                                aria-label="Check-in month" data-no-old-calendar="1">
                                                                <option value="" selected=""></option>
                                                            </select>
                                                            <input type="hidden" class="js-date-field__year"
                                                                name="checkin_year" value="2022">
                                                            <input type="hidden" class="js-date-field__month"
                                                                name="checkin_month" value="4">
                                                        </div>
                                                        <div class="sb-date-field__select -day js-date-field__part"
                                                            data-type="date">
                                                            <div class="sb-date-field__select-value">
                                                                <!-- <span class="js-date-field__value" data-placeholder="Check-in day">5, Tuesday</span> -->
                                                                <i
                                                                    class="sb-date-field__select-icon bicon-downchevron"></i>
                                                            </div>
                                                            <select
                                                                class="sb-date-field__select-field js-date-field__select"
                                                                name="checkin_monthday" data-selected="20"
                                                                aria-label="Check-in day" data-no-old-calendar="1">
                                                                <option value="" selected=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="sb-date-field__display" data-placeholder="Check-in Date"
                                                        data-date-format="date_with_weekday" data-display="">
                                                        Tuesday, April 5, 2022</div>
                                                    <svg class="bk-icon -streamline-arrow_nav_down sb-date-field__icon-arrow-down"
                                                        fill="#333333" focusable="false" height="18" width="18"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Check-in date  -->

                                    <!-- Check-out date -->
                                    <div class="sb-dates__col --checkout-field xp__date-time">
                                        <label for="checkout_monthday" class="sb-searchbox__label">Check-out
                                            date </label>
                                        <div class="sb-date-field__wrapper">
                                            <div class="sb-date-field b-datepicker"
                                                data-component="search/dates/date-field-select"
                                                data-calendar2-type="checkout" data-calendar2-title="Check-out">
                                                <div class="sb-searchbox__input sb-date-field__field sb-date__field-svg_icon"
                                                    data-field="">

                                                    <span
                                                        class="sb-date-field__icon sb-date-field__icon-btn bk-svg-wrapper calendar-restructure-sb">
                                                        <svg class="bk-icon -streamline-calendar sb-date-picker_icon-svg"
                                                            fill="#BDBDBD" focusable="false" height="20" width="20"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M22.502 13.5v8.25a.75.75 0 0 1-.75.75h-19.5a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v8.25zm1.5 0V5.25A2.25 2.25 0 0 0 21.752 3h-19.5a2.25 2.25 0 0 0-2.25 2.25v16.5A2.25 2.25 0 0 0 2.252 24h19.5a2.25 2.25 0 0 0 2.25-2.25V13.5zm-23.25-3h22.5a.75.75 0 0 0 0-1.5H.752a.75.75 0 0 0 0 1.5zM7.502 6V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0zm10.5 0V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0z">
                                                            </path>
                                                        </svg>
                                                        <i class="sb-date-field__icon-text sb-date-field__icon-text-wide"
                                                            data-icon-day="" data-placeholder="+">6</i>
                                                    </span>

                                                    <div class="sb-date-field__controls sb-date-field__controls__ie-fix"
                                                        data-controls="" data-calendar2-cant-touch-this="">
                                                        <div class="sb-date-field__select -month-year js-date-field__part"
                                                            data-type="month-year">
                                                            <div class="sb-date-field__select-value">
                                                                <span class="js-date-field__value"
                                                                    data-placeholder="Check-out month">April
                                                                    2022</span>
                                                                <i
                                                                    class="sb-date-field__select-icon bicon-downchevron"></i>
                                                            </div>
                                                            <select
                                                                class="sb-date-field__select-field js-date-field__select"
                                                                aria-label=" Check-out month" data-no-old-calendar="1">
                                                                <option value="" disabled=""></option>
                                                                <option value="2-2022">March 2022</option>
                                                                <option value="3-2022" selected="">April
                                                                    2022</option>
                                                                <option value="4-2022">May 2022</option>
                                                                <option value="5-2022">June 2022</option>
                                                                <option value="6-2022">July 2022</option>
                                                                <option value="7-2022">August 2022</option>
                                                                <option value="8-2022">September 2022
                                                                </option>
                                                                <option value="9-2022">October 2022</option>
                                                                <option value="10-2022">November 2022
                                                                </option>
                                                                <option value="11-2022">December 2022
                                                                </option>
                                                                <option value="0-2023">January 2023</option>
                                                                <option value="1-2023">February 2023
                                                                </option>
                                                                <option value="2-2023">March 2023</option>
                                                                <option value="3-2023">April 2023</option>
                                                                <option value="4-2023">May 2023</option>
                                                                <option value="5-2023">June 2023</option>
                                                            </select>
                                                            <input type="hidden" class="js-date-field__year"
                                                                name="checkout_year" value="2022">
                                                            <input type="hidden" class="js-date-field__month"
                                                                name="checkout_month" value="4">
                                                        </div>
                                                        <div class="sb-date-field__select -day js-date-field__part"
                                                            data-type="date">
                                                            <div class="sb-date-field__select-value">
                                                                <span class="js-date-field__value" data-placeholder="
                                        Check-out day
                                        ">6, Wednesday</span>
                                                                <i
                                                                    class="sb-date-field__select-icon bicon-downchevron"></i>
                                                            </div>
                                                            <select
                                                                class="sb-date-field__select-field js-date-field__select"
                                                                name="checkout_monthday" data-selected="15" aria-label="
                                        Check-out day
                                        " data-no-old-calendar="1">
                                                                <option value="" disabled=""></option>
                                                                <option value="1">1, Friday</option>
                                                                <option value="2">2, Saturday</option>
                                                                <option value="3">3, Sunday</option>
                                                                <option value="4">4, Monday</option>
                                                                <option value="5">5, Tuesday</option>
                                                                <option value="6" selected="">6, Wednesday
                                                                </option>
                                                                <option value="7">7, Thursday</option>
                                                                <option value="8">8, Friday</option>
                                                                <option value="9">9, Saturday</option>
                                                                <option value="10">10, Sunday</option>
                                                                <option value="11">11, Monday</option>
                                                                <option value="12">12, Tuesday</option>
                                                                <option value="13">13, Wednesday</option>
                                                                <option value="14">14, Thursday</option>
                                                                <option value="15">15, Friday</option>
                                                                <option value="16">16, Saturday</option>
                                                                <option value="17">17, Sunday</option>
                                                                <option value="18">18, Monday</option>
                                                                <option value="19">19, Tuesday</option>
                                                                <option value="20">20, Wednesday</option>
                                                                <option value="21">21, Thursday</option>
                                                                <option value="22">22, Friday</option>
                                                                <option value="23">23, Saturday</option>
                                                                <option value="24">24, Sunday</option>
                                                                <option value="25">25, Monday</option>
                                                                <option value="26">26, Tuesday</option>
                                                                <option value="27">27, Wednesday</option>
                                                                <option value="28">28, Thursday</option>
                                                                <option value="29">29, Friday</option>
                                                                <option value="30">30, Saturday</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="sb-date-field__display"
                                                        data-placeholder="Check-out Date"
                                                        data-date-format="date_with_weekday" data-display="">
                                                        Wednesday, April 6, 2022</div>

                                                    <svg class="bk-icon -streamline-arrow_nav_down sb-date-field__icon-arrow-down"
                                                        fill="#333333" focusable="false" height="18" width="18"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                        </path>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Check-out date -->
                                </div>
                                <!-- /Check-in & Check-out date -->

                                <!-- Data Calender -->
                                <div class="xp-calendar " data-component="search/dates/single-calendar"
                                    data-sb-id="main" data-render-los="1" data-separate-triggers="1"
                                    data-choose-mode="end">

                                    <div class="bui-calendar" style="display: none;">
                                        <div class="bui-calendar__main b-a11y-calendar-contrasts">

                                            <div class="bui-calendar__control bui-calendar__control--prev"
                                                data-bui-ref="calendar-prev">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z">
                                                    </path>
                                                </svg>
                                            </div>

                                            <div class="bui-calendar__control bui-calendar__control--next"
                                                data-bui-ref="calendar-next">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z">
                                                    </path>
                                                </svg>
                                            </div>

                                            <div class="bui-calendar__content" data-bui-ref="calendar-content">

                                                <div class="bui-calendar__wrapper" data-bui-ref="calendar-month">
                                                    <div class="bui-calendar__month"
                                                        id="bui-calendar-1647382643173yaapkwf" aria-live="polite">
                                                        April 2022</div>
                                                    <table class="bui-calendar__dates"
                                                        aria-labelledby="bui-calendar-1647382643173yaapkwf">

                                                        <thead class="bui-calendar__row">

                                                            <tr>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Mo</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Tu</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    We</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Th</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Fr</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Sa</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Su</th>
                                                            </tr>

                                                        </thead>

                                                        <tbody>

                                                            <tr class="bui-calendar__row">
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-01"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="1 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>1</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-02"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="2 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>2</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-03"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="3 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>3</span>
                                                                    </span>
                                                                </td>
                                                            </tr>

                                                            <tr class="bui-calendar__row">
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-04"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="4 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>4</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date bui-calendar__date--selected"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-05"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="5 April 2022" role="checkbox"
                                                                        aria-checked="true">
                                                                        <span>5</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date bui-calendar__date--selected"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-06"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="6 April 2022" role="checkbox"
                                                                        aria-checked="true">
                                                                        <span>6</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-07"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="7 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>7</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-08"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="8 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>8</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-09"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="9 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>9</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-10"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="10 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>10</span>
                                                                    </span>
                                                                </td>
                                                            </tr>

                                                            <tr class="bui-calendar__row">
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-11"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="11 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>11</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-12"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="12 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>12</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-13"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="13 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>13</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-14"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="14 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>14</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-15"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="15 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>15</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-16"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="16 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>16</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-17"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="17 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>17</span>
                                                                    </span>
                                                                </td>
                                                            </tr>

                                                            <tr class="bui-calendar__row">
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-18"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="18 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>18</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-19"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="19 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>19</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-20"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="20 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>20</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-21"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="21 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>21</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-22"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="22 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>22</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-23"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="23 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>23</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-24"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="24 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>24</span>
                                                                    </span>
                                                                </td>
                                                            </tr>

                                                            <tr class="bui-calendar__row">
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-25"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="25 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>25</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-26"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="26 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>26</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-27"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="27 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>27</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-28"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="28 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>28</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-29"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="29 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>29</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-04-30"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="30 April 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>30</span>
                                                                    </span>
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="bui-calendar__wrapper" data-bui-ref="calendar-month">
                                                    <div class="bui-calendar__month"
                                                        id="bui-calendar-1647382643173yaapkwf" aria-live="polite">
                                                        May 2022</div>
                                                    <table class="bui-calendar__dates"
                                                        aria-labelledby="bui-calendar-1647382643173yaapkwf">

                                                        <thead class="bui-calendar__row">
                                                            <tr>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Mo</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Tu</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    We</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Th</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Fr</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Sa</th>
                                                                <th scope="col" class="bui-calendar__day-name">
                                                                    Su</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>

                                                            <tr class="bui-calendar__row">
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-01"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="1 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>1</span>
                                                                    </span>
                                                                </td>
                                                            </tr>

                                                            <tr class="bui-calendar__row">
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-02"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="2 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>2</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-03"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="3 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>3</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-04"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="4 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>4</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-05"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="5 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>5</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-06"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="6 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>6</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-07"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="7 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>7</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-08"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="8 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>8</span>
                                                                    </span>
                                                                </td>
                                                            </tr>

                                                            <tr class="bui-calendar__row">
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-09"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="9 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>9</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-10"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="10 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>10</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-11"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="11 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>11</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-12"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="12 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>12</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-13"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="13 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>13</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-14"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="14 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>14</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-15"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="15 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>15</span>
                                                                    </span>
                                                                </td>
                                                            </tr>

                                                            <tr class="bui-calendar__row">
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-16"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="16 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>16</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-17"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="17 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>17</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-18"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="18 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>18</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-19"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="19 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>19</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-20"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="20 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>20</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-21"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="21 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>21</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-22"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="22 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>22</span>
                                                                    </span>
                                                                </td>
                                                            </tr>

                                                            <tr class="bui-calendar__row">
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-23"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="23 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>23</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-24"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="24 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>24</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-25"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="25 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>25</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-26"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="26 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>26</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-27"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="27 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>27</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-28"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="28 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>28</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-29"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="29 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>29</span>
                                                                    </span>
                                                                </td>
                                                            </tr>

                                                            <tr class="bui-calendar__row">
                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-30"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="30 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>30</span>
                                                                    </span>
                                                                </td>

                                                                <td class="bui-calendar__date"
                                                                    data-bui-ref="calendar-date" data-date="2022-05-31"
                                                                    role="gridcell" tabindex="-1">
                                                                    <span aria-label="31 May 2022" role="checkbox"
                                                                        aria-checked="false">
                                                                        <span>31</span>
                                                                    </span>
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                                <td
                                                                    class="bui-calendar__date bui-calendar__date--empty">
                                                                </td>
                                                            </tr>


                                                        </tbody>

                                                    </table>
                                                </div>

                                            </div>

                                            <div class="bui-calendar__display" data-bui-ref="calendar-selected-display">
                                                Tuesday, April 5, 2022 - Wednesday, April 6, 2022 (1-night
                                                stay)
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- Data Calender -->
                                <div>
                                    <div class="sb-dates__los">
                                        1-night stay
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Papole Select -->
                        <div class="sb-searchbox__row u-clearfix">
                            <div class="xp__fieldset js--sb-fieldset accommodation sb--guests__toggle_container">
                                <div class="xp__input-group xp__guests" data-component="search/group/group-with-modal"
                                    data-sb-id="main" tabindex="0" data-sb-group-show-close-button="1">
                                    <label id="xp__guests__toggle" for="xp__guests__input" class="xp__guests__toggle"
                                        data-group-toggle="" role="button" aria-expanded="true"
                                        aria-controls="xp__guests__inputs-container"
                                        data-et-click="INLGHUDSJNQQdKBUPfECIAEcOHT:3 INLGHUDSJNQQdKBUPfECIAEcOHT:4 "
                                        data-group-toggle-shown="1">
                                        <span class="xp__guests__count">
                                            <span class="adults-count" data-adults-count="">2 adults</span>
                                            ·
                                            <span data-visible="accommodation">
                                                <span class="children-count" data-children-count="">0
                                                    children</span>
                                            </span>
                                            ·
                                            <span data-visible="accommodation">
                                                <span data-room-count="">4 rooms</span>
                                            </span>
                                        </span>
                                        <svg class="bk-icon -streamline-arrow_nav_down sb-date-field__icon-arrow-down"
                                            fill="#333333" focusable="false" height="18" role="presentation" width="18"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                            </path>
                                        </svg>
                                    </label>

                                    <div class="xp__guests__modal_container focussable " data-group-modal=""
                                        style="display: none;" role="region" aria-label="Rooms and occupancy">
                                        <div id="xp__guests__inputs-container" class="xp__guests__inputs focussable">
                                            <div data-component="search/group/group" data-sb-id="main"
                                                data-sb-width="small" data-sb-bbtool-searchbox="0"
                                                data-sb-group-children-hide="0" data-sb-group-children-ages-hide="0"
                                                data-sb-group-infants-hide="1" data-sb-group-pets-hide="0"
                                                data-sb-group-rooms-hide="0" data-sb-group-block-labels="0"
                                                data-sb-group-use_adults_label="0" data-sb-group-always-expanded="0"
                                                data-sb-group-use-bui-stepper="1"
                                                data-sb-group-bui-steppers-accessible="1"
                                                data-fe_sb_group_descriptive_dropdowns="1"
                                                data-fe_sb_universal_design="0" data-fe_sb_xpi="1"
                                                data-fe_remove_duplicate_ids="0" data-fe_sb_unique_id=""
                                                data-sb_reorder_rooms_block="1" data-sb-facelift="0"
                                                data-fe_sb_show_children_age_bracket="0"
                                                data-fe_sb_mandatory_child_ages="1"
                                                data-fe_fam_d_index_mandatory_ages_new_copy="0"
                                                data-fe_sb_dont_use_default_child_age="1">
                                                <div class="u-clearfix" data-render="">


                                                    <div class="sb-group__field sb-group__field-adults">

                                                        <div class="bui-stepper" data-bui-component="InputStepper">
                                                            <div class="bui-stepper__title-wrapper">
                                                                <label class="bui-stepper__title"
                                                                    for="group_adults">Adults</label>

                                                            </div>

                                                            <div class="bui-stepper__wrapper sb-group__stepper-a11y">
                                                                <input style="display: none" type="number"
                                                                    class="bui-stepper__input"
                                                                    data-bui-ref="input-stepper-field" id="group_adults"
                                                                    name="group_adults" min="1" max="30" value="1"
                                                                    data-group-adults-count="">
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__subtract-button sb-group__stepper-button-disabled"
                                                                    data-bui-ref="input-stepper-subtract-button"
                                                                    type="button" aria-label="Decrease number of Adults"
                                                                    aria-describedby="group_adults_desc">
                                                                    <span class="bui-button__text">−</span>
                                                                </button>
                                                                <span class="bui-stepper__display"
                                                                    data-bui-ref="input-stepper-value">1</span>
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__add-button "
                                                                    data-bui-ref="input-stepper-add-button"
                                                                    type="button" aria-label="Increase number of Adults"
                                                                    aria-describedby="group_adults_desc">
                                                                    <span class="bui-button__text">+</span>
                                                                </button>
                                                                <span class="bui-u-sr-only" aria-live="assertive"
                                                                    id="group_adults_desc">1 Adults</span>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="sb-group__field sb-group-children ">

                                                        <div class="bui-stepper" data-bui-component="InputStepper">
                                                            <div class="bui-stepper__title-wrapper">
                                                                <label class="bui-stepper__title"
                                                                    for="group_children">Children</label>

                                                            </div>

                                                            <div class="bui-stepper__wrapper sb-group__stepper-a11y">
                                                                <input style="display: none" type="number"
                                                                    class="bui-stepper__input"
                                                                    data-bui-ref="input-stepper-field"
                                                                    id="group_children" name="group_children" min="0"
                                                                    max="10" value="0" data-group-children-count="">
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__subtract-button sb-group__stepper-button-disabled"
                                                                    data-bui-ref="input-stepper-subtract-button"
                                                                    type="button"
                                                                    aria-label="Decrease number of Children"
                                                                    aria-describedby="group_children_desc">
                                                                    <span class="bui-button__text">−</span>
                                                                </button>
                                                                <span class="bui-stepper__display"
                                                                    data-bui-ref="input-stepper-value">0</span>
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__add-button "
                                                                    data-bui-ref="input-stepper-add-button"
                                                                    type="button"
                                                                    aria-label="Increase number of Children"
                                                                    aria-describedby="group_children_desc">
                                                                    <span class="bui-button__text">+</span>
                                                                </button>
                                                                <span class="bui-u-sr-only" aria-live="assertive"
                                                                    id="group_children_desc">0
                                                                    Children</span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="sb-group__field sb-group__field-rooms">

                                                        <div class="bui-stepper" data-bui-component="InputStepper">
                                                            <div class="bui-stepper__title-wrapper">
                                                                <label class="bui-stepper__title"
                                                                    for="no_rooms">Rooms</label>

                                                            </div>
                                                            <div class="bui-stepper__wrapper sb-group__stepper-a11y">
                                                                <input style="display: none" type="number"
                                                                    class="bui-stepper__input"
                                                                    data-bui-ref="input-stepper-field" id="no_rooms"
                                                                    name="no_rooms" min="1" max="30" value="1"
                                                                    data-group-rooms-count="">
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__subtract-button sb-group__stepper-button-disabled"
                                                                    data-bui-ref="input-stepper-subtract-button"
                                                                    type="button" aria-label="Decrease number of Rooms"
                                                                    aria-describedby="no_rooms_desc">
                                                                    <span class="bui-button__text">−</span>
                                                                </button>
                                                                <span class="bui-stepper__display"
                                                                    data-bui-ref="input-stepper-value">1</span>
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__add-button "
                                                                    data-bui-ref="input-stepper-add-button"
                                                                    type="button" aria-label="Increase number of Rooms"
                                                                    aria-describedby="no_rooms_desc">
                                                                    <span class="bui-button__text">+</span>
                                                                </button>
                                                                <span class="bui-u-sr-only" aria-live="assertive"
                                                                    id="no_rooms_desc">1
                                                                    Rooms</span>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <button id="doneBtn" type="button"
                                                class="bui-button bui-button--secondary bui-button--wide">
                                                <span class="bui-button__text">
                                                    Done
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Papole Select -->

                        <div class="sb-searchbox__row u-clearfix -submit sb-searchbox__footer -last">

                            <div class="sb-searchbox-submit-col -button-messages">
                                <div class="bui-form__group sb-bui-checkbox js-sb-entire-place-checkbox">
                                    <label class="bui-checkbox">
                                        <input class="bui-checkbox__input" name="sb_entire_place" type="checkbox"
                                            value="1">
                                        <span class="bui-checkbox__label">
                                            Entire homes &amp; apartments
                                        </span>
                                    </label>
                                    <span class="sb-bui-checkbox__icon">
                                        <span class="bui-button__text">
                                            <svg class="bk-icon -streamline-question_mark_circle" fill="#333333"
                                                focusable="false" height="14" width="14" viewBox="0 0 24 24">
                                                <path
                                                    d="M9.75 9a2.25 2.25 0 1 1 3 2.122 2.25 2.25 0 0 0-1.5 2.122v1.006a.75.75 0 0 0 1.5 0v-1.006c0-.318.2-.602.5-.708A3.75 3.75 0 1 0 8.25 9a.75.75 0 1 0 1.5 0zM12 16.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </div>

                                <div class="bui-form__group sb-bui-checkbox">
                                    <label class="bui-checkbox">
                                        <input name="sb_travel_purpose" class="bui-checkbox__input" type="checkbox"
                                            value="business" checked="checked">
                                        <span class="bui-checkbox__label">
                                            I'm traveling for work
                                        </span>
                                    </label>
                                    <span class="sb-bui-checkbox__icon">
                                        <span class="bui-button__text">
                                            <svg class="bk-icon -streamline-question_mark_circle" fill="#333333"
                                                focusable="false" height="14" width="14" viewBox="0 0 24 24">
                                                <path
                                                    d="M9.75 9a2.25 2.25 0 1 1 3 2.122 2.25 2.25 0 0 0-1.5 2.122v1.006a.75.75 0 0 0 1.5 0v-1.006c0-.318.2-.602.5-.708A3.75 3.75 0 1 0 8.25 9a.75.75 0 1 0 1.5 0zM12 16.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </div>

                            </div>

                            <!-- Submit Button -->
                            <div class="sb-searchbox-submit-col -submit-button ">
                                <button type="submit" class="sb-searchbox__button ">
                                    <span>
                                        Search
                                    </span>
                                    <span class="sb-submit-helper"></span>
                                </button>
                            </div>
                            <!-- /Submit Button -->

                        </div>

                    </form>
                </div>
                <!-- /Search Box -->

                <div class="sb-searchbox__spacing"></div>

                <!-- Map -->
                <div class="map">
                    <a id="googleMap" class="loc_block_link_underline_fix map_static_zoom show_map map_static_hover"
                        href="#" style=" height:110px;">
                        <div class="txp-map-cta-wrap">
                            <button class="txp-map-cta bui-button bui-button--primary">
                                <span class="bui-button__text">
                                    Show on map
                                </span>
                            </button>
                        </div>
                        <span class="map-thumb__marker--current">
                            <svg class="property-marker" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 29">
                                <ellipse class="shadow" fill="#000000" fill-opacity="0.24" cx="9" cy="27" rx="6" ry="2">
                                </ellipse>
                                <path class="pin"
                                    d="M9,27 C7,27 0,16.9704016 0,9 C2.28269391e-16,4.02943725 4.02943725,0 9,0 C13.9705627,0 18,4.02943725 18,9 C18,16.9704016 11,27 9,27 Z M9,13 C11.209139,13 13,11.209139 13,9 C13,6.790861 11.209139,5 9,5 C6.790861,5 5,6.790861 5,9 C5,11.209139 6.790861,13 9,13 Z">
                                </path>
                            </svg>
                        </span>
                    </a>
                </div>
                <!-- /Map -->
            </div>
            <!-- Left Side -->


            <div class="col-lg-9">
                <!-- Header Nav -->
                <div class="hp_nav_bar_wrapper hp-nav-bottom-border bui-spacer--large d-lg-table d-md-none">
                    <ul class="hp_nav_bar boldify_hp_nav">
                        <li class="hp_nav_bar_item">
                            <a href="#availability" class="hp_nav_availability_link nav-link-room--bold" rel="main">
                                Info &amp; prices
                            </a>
                        </li>
                        <li class="hp_nav_bar_item">
                            <a href="#HotelFacilities" class="hp_nav_facilities_link"
                                data-scroll="a[name=HotelFacilities]">
                                Facilities
                            </a>
                        </li>
                        <li class="hp_nav_bar_item">
                            <a href="#policies" class="hp_nav_policies_link" rel="main">
                                House rules
                            </a>
                        </li>
                        <li class="hp_nav_bar_item">
                            <a href="#GuestReviews" class="hp_nav_reviews_link toggle_review track_review_link_zh"
                                id="show_reviews_tab" rel="reviews" role="button">
                                <span>
                                    <b>Our Guests’</b> (9)
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Header Nav -->

                <div class="row">
                    <div class="col-12">
                        <div id="wrap-hotelpage-top" class="wrap-hotelpage-top">

                            <form action="#" method="post" class="wrap-hotelpage-top__book top-book-form form_wl_fix">

                                <a class="txp-bui-header-pp bui-button bui-button--primary book_now_button_handler bui-u-pull-end"
                                    type="button" href="#Reserve">
                                    <span class="bui-button__text">
                                        Reserve
                                    </span>
                                </a>

                                <button class="wl-entrypoint bui-button bui-button--tertiary">
                                    <svg class="bk-icon -iconset-heart_outline" fill="#0071C2" height="16" width="16"
                                        viewBox="0 0 128 128" size="medium">
                                        <path
                                            d="M119.5 40.3a29 29 0 0 0-22.8-23.7 33.8 33.8 0 0 0-32.7 13 33.7 33.7 0 0 0-32.7-13A29 29 0 0 0 8.5 40.3c-1.3 7.2-.6 18.8 9.4 33.3A140 140 0 0 0 62 111.5a3.7 3.7 0 0 0 4 0c20.2-12 35-24.8 44.1-38 10-14.4 10.7-26 9.5-33.2zm-55.5 63c-33-20.1-50.8-43-47.7-61.6A20.7 20.7 0 0 1 33 24.3a22.3 22.3 0 0 1 4.5-.4c8.8 0 17.3 5.2 23.2 14.6a4 4 0 0 0 3.4 1.8 4 4 0 0 0 3.4-1.8c6-9.4 14.4-14.6 23.2-14.6a22.3 22.3 0 0 1 4.5.5 20.7 20.7 0 0 1 16.6 17.2c3 18.6-14.8 41.6-47.8 61.7z">
                                        </path>
                                    </svg>
                                </button>
                                <!-- Shear -->
                                <div class="bui-dropdown bui-dropdown--end share_center_square_cta"
                                    data-bui-component="Dropdown" data-active-button-classname="bui-button--active">
                                    <button type="button" class="bui-dropdown_link_trigger hp_share_center_button"
                                        data-bui-ref="dropdown-button" aria-haspopup="true" tabindex="0"
                                        id="share_center_btn">
                                        <i class="fa-solid fa-share-nodes"></i>
                                        <h3 id="share_center_label" class="invisible_spoken"> Share Nascent Gardenia
                                            Baridhara
                                        </h3>
                                    </button>
                                    <div class="bui-dropdown__content" data-bui-ref="dropdown-slot"
                                        id="dropdown_share_center">
                                        <div class="bui-dropdown-menu" id="dropdown_secondary_menu" role="menu">
                                            <ul class="bui-dropdown-menu__items">
                                                <li class="bui-dropdown-menu__item">
                                                    <a href="http://www.facebook.com/share.php?u=DATA"
                                                        data-href="http://www.facebook.com/share.php?u=DATA"
                                                        class="bui-dropdown-menu__button" title="Share on Facebook"
                                                        data-bui-ref="dropdown-item" role="link" tabindex="1"
                                                        data-channel="facebook">
                                                        <span class="bui-dropdown-menu__text">
                                                            <svg class="bk-icon -sprite-share_center_facebook bui__share_center_icon"
                                                                height="24" width="24" viewBox="0 0 32 32">
                                                                <path fill="#3B5998"
                                                                    d="M31 28c0 1.7-1.3 3-3 3H4c-1.7 0-3-1.3-3-3V4c0-1.7 1.3-3 3-3h24c1.7 0 3 1.3 3 3v24z">
                                                                </path>
                                                                <path fill="#003580"
                                                                    d="M20.4 14V9.7c0-1 .9-.8.9-.8h2.5V5h-4c-4.2 0-4.4 3.7-4.4 3.7V14H13v4.1h2.4V29h4.9V18.1h3.1L24 14h-3.6z">
                                                                </path>
                                                                <path fill="#FFF"
                                                                    d="M20.4 13V8.7c0-1 .9-.8.9-.8h2.5V4h-4c-4.2 0-4.4 3.7-4.4 3.7V13H13v4.1h2.4V28h4.9V17.1h3.1L24 13h-3.6z">
                                                                </path>
                                                            </svg>
                                                            Share on Facebook
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="bui-dropdown-menu__item">
                                                    <a href="http://twitter.com/home/?status=DATA"
                                                        data-href="http://twitter.com/home/?status=DATA"
                                                        class="bui-dropdown-menu__button" title="Share on Twitter"
                                                        data-bui-ref="dropdown-item" role="link" tabindex="1"
                                                        data-channel="twitter">
                                                        <span class="bui-dropdown-menu__text">
                                                            <svg class="bk-icon -sprite-share_center_twitter bui__share_center_icon"
                                                                height="24" width="24" viewBox="0 0 32 32">
                                                                <path
                                                                    d="m31 28c0 1.7-1.3 3-3 3h-24c-1.7 0-3-1.3-3-3v-24c0-1.7 1.3-3 3-3h24c1.7 0 3 1.3 3 3z"
                                                                    fill="#00aced"></path>
                                                                <path
                                                                    d="m26.5 9.5c-.8.3-1.6.6-2.4.7.9-.5 1.6-1.4 1.9-2.4-.8.5-1.7.8-2.7 1-.9-.8-2-1.3-3.3-1.3-2.3 0-4.3 1.9-4.3 4.3 0 .3 0 .7.1 1-3.6-.2-6.8-1.9-8.9-4.5-.4.6-.6 1.4-.6 2.1 0 1.5.7 2.8 1.9 3.6-.7 0-1.4-.2-1.9-.5v.1c0 2.1 1.5 3.8 3.4 4.2-.3.2-.6.2-1.1.2-.3 0-.5 0-.8-.1.5 1.7 2.1 2.9 4.1 3-1.5 1.1-3.3 1.8-5.4 1.8-.3 0-.7 0-1-.1 1.9 1.2 4.2 1.9 6.6 1.9 7.9 0 12.3-6.5 12.3-12.3v-.6c.8-.5 1.5-1.2 2.1-2.1"
                                                                    fill="#fff"></path>
                                                            </svg>
                                                            Share on Twitter
                                                        </span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Shear -->
                                <div class="topbook_pricematch">
                                    <div id="rate_guarantee" class="bpg_hp_no_availability hp-availability-block-usp">
                                        <a href="#" class="open-bpg-in-overlay-insteadpp_bpg_tooltip_holder">
                                            We Price Match
                                        </a>
                                    </div>
                                </div>

                            </form>

                            <div class="hp__hotel-title">
                                <h2 class="hp__hotel-name" id="hp_hotel_name">
                                    <span class="hp__hotel-type-badge">Hotel</span> Nascent Gardenia Baridhara
                                </h2>

                                <span class="hp__hotel_ratings">
                                    <span class="hp__hotel_ratings__stars nowrap">
                                        <span class="e36b9d9c39 a402fa53fd">
                                            <div class="d29be61cd3">
                                                <span role="img" class="_bebcf8d60 _00b78c844">
                                                    <span class="_3ae5d40db _617879812 _6ab38b430">
                                                        <svg viewBox="0 0 24 24">
                                                            <path
                                                                d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="_3ae5d40db _617879812 _6ab38b430">
                                                        <svg viewBox="0 0 24 24">
                                                            <path
                                                                d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="_3ae5d40db _617879812 _6ab38b430">
                                                        <svg viewBox="0 0 24 24">
                                                            <path
                                                                d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="_3ae5d40db _617879812 _6ab38b430">
                                                        <svg viewBox="0 0 24 24">
                                                            <path
                                                                d="M23.555 8.729a1.505 1.505 0 0 0-1.406-.98h-6.087a.5.5 0 0 1-.472-.334l-2.185-6.193a1.5 1.5 0 0 0-2.81 0l-.005.016-2.18 6.177a.5.5 0 0 1-.471.334H1.85A1.5 1.5 0 0 0 .887 10.4l5.184 4.3a.5.5 0 0 1 .155.543l-2.178 6.531a1.5 1.5 0 0 0 2.31 1.684l5.346-3.92a.5.5 0 0 1 .591 0l5.344 3.919a1.5 1.5 0 0 0 2.312-1.683l-2.178-6.535a.5.5 0 0 1 .155-.543l5.194-4.306a1.5 1.5 0 0 0 .433-1.661z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </span>
                                    </span>

                                    <img src="{{asset('frontend/assets/images/icon/preferred-plus.svg')}}" class="pp-icon-valign--initial"
                                        height="24">

                                </span>
                            </div>
                            <p class="address address_clean">
                                <i class="fa-solid fa-map-location-dot"></i>
                                <span class="hp_address_subtitle js-hp_address_subtitle">
                                    27 Park Road, Baridhara Diplomatic Zone, 1212 Dhaka, Bangladesh
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Photo Gallery -->
                <div class="row">
                    <div class="col-12">
                        <div class="clearfix bh-photo-grid bh-photo-grid--space-down fix-score-hover-opacity">

                            <div class="row">
                                <div class="col-lg-4 d-lg-block d-md-none">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="#" class="bh-photo-grid-item bh-photo-grid-side-photo active-image"
                                                style="background-image: url({{asset('frontend/assets/images/galllery-2.jpg')}});" title="">
                                                <img src="{{asset('frontend/assets/images/galllery-2.jpg')}}" class="hide" alt="">
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <a href="#" class="bh-photo-grid-item bh-photo-grid-side-photo active-image"
                                                style="background-image: url({{asset('frontend/assets/images/galllery-3.jpg')}});" title="">
                                                <img src="{{asset('frontend/assets/images/galllery-3.jpg')}}" class="hide" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 pl-md-0">
                                    <a href="#" class="bh-photo-grid-item bh-photo-grid-photo1 active-image "
                                        style="background-image: url({{asset('frontend/assets/images/galllery-1.jpg')}});" title="">
                                        <img src="{{asset('frontend/assets/images/galllery-1.jpg')}}" class="hide" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="row d-lg-flex d-md-none">
                                <div class="col-2 pr-0">
                                    <div class="bh-photo-grid-thumb-cell">
                                        <a href="#" class="bh-photo-grid-item bh-photo-grid-thumb"
                                            style="background-image: url(assets/images/galllery-4.jpg);">
                                            <img src="{{asset('frontend/assets/images/galllery-4.jpg')}}" class="hide" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-2 pr-0">
                                    <div class="bh-photo-grid-thumb-cell">
                                        <a href="#" class="bh-photo-grid-item bh-photo-grid-thumb"
                                            style="background-image: url(assets/images/galllery-5.jpg);">
                                            <img src="{{asset('frontend/assets/images/galllery-5.jpg')}}" class="hide">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-2 pr-0">
                                    <div class="bh-photo-grid-thumb-cell">
                                        <a href="#" class="bh-photo-grid-item bh-photo-grid-thumb"
                                            style="background-image: url(assets/images/galllery-6.jpg);">
                                            <img src="{{asset('frontend/assets/images/galllery-6.jpg')}}" class="hide">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-2 pr-0">
                                    <div class="bh-photo-grid-thumb-cell">
                                        <a href="#" class="bh-photo-grid-item bh-photo-grid-thumb"
                                            style="background-image: url(assets/images/galllery-7.jpg);">
                                            <img src="{{asset('frontend/assets/images/galllery-7.jpg')}}" class="hide" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-2 pr-0">
                                    <div class="bh-photo-grid-thumb-cell">
                                        <a href="#" class="bh-photo-grid-item bh-photo-grid-thumb"
                                            style="background-image: url(assets/images/galllery-7.jpg);">
                                            <img src="{{asset('frontend/assets/images/galllery-7.jpg')}}" class="hide" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="bh-photo-grid-thumb-cell">
                                        <a href="#"
                                            class="bh-photo-grid-item bh-photo-grid-thumb js-bh-photo-grid-item-see-all"
                                            style="background-image: url(assets/images/galllery-8.jpg);">
                                            <span class="bh-photo-grid-thumb-more">
                                                <span class="bh-photo-grid-thumb-more-inner">
                                                    <span class="bh-photo-grid-thumb-more-inner-2">
                                                        +45 photos
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="hp-gallery-review">
                                <div class="fixed_review_container">
                                    <div class="best-review-score">
                                        <a class="" href="#blockdisplay4" rel="reviews">
                                            <div
                                                class="_0e12d9386 _d81584806 _667470915 _6e13af835 _88c9d425e a6b95f6195 _479ad76cf e18ef83843">
                                                <div class="_9c5f726ff bd528f9ea6">9.0 </div>
                                                <div class="_f8ff3180e b8710dea1b">
                                                    <div class="_9c5f726ff _192b3a196 f1cbb919ef">Wonderful</div>
                                                    <div class="_4abc4c3d5 _1e6021d2f _6e869d6e0"> 9 reviews</div>
                                                </div>
                                            </div>

                                        </a>
                                    </div>

                                    <div class="best-review-score">
                                        <a class="" href="#blockdisplay4" rel="reviews">
                                            <div
                                                class="_0e12d9386 _d81584806 _667470915 _6e13af835 _88c9d425e a6b95f6195 _479ad76cf e18ef83843">
                                                <div class="_f8ff3180e b8710dea1b">
                                                    <div class="_9c5f726ff _192b3a196 f1cbb919ef">Staff</div>
                                                </div>
                                                <div class="_9c5f726ff bd528f9ea6">9.0 </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Photo Gallery -->

            </div>
        </div>

    </div>

    <div class="container">
        <div class="row mt-4">
            <div class="col-12">

                <!-- Cheapest option at this property -->
                <div class="row" id="Reserve">
                    <div class="col-12">
                        <div class="b-group-rec-block bui-f-depth-1">
                            <h3 class="bui-container bui-text bui-text--variant-headline_3 ">
                                Cheapest option at this property for 2 adults, 1 child
                            </h3>
                            <div class="cheapest-info">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <ul>
                                            <li class="cheapest-info-item">
                                                <span class="e2e-gr-room-name room_link">
                                                    1&nbsp;x&nbsp;
                                                    <a href="#RD91336615" class="">Deluxe Room</a>
                                                </span>
                                            </li>
                                            <li class="cheapest-info-item">
                                                <div class="gr-occ-bed-info">
                                                    <div class="maxPersons-container">
                                                        <span class="maxPersonsLeft__title">Price for</span>:
                                                        <div class="c-occupancy-icons ">
                                                            <span class="c-occupancy-icons__children">
                                                                <span class="c-occupancy-icons__plus-kids">+</span>
                                                                <i class="fa-solid fa-person"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cheapest-info-item">
                                                <span class="m-rs-bed-display__bed-option">
                                                    <span class="m-rs-bed-display__bed-type">
                                                        <span class="m-rs-bed-display__bed-type-name">
                                                            1 queen bed
                                                        </span>
                                                        <span class="m-rs-bed-display__bed-type-icon-wrapper">
                                                            <svg class="bk-icon -fonticon-double m-rs-bed-display__bed-type-icon"
                                                                height="12" width="36" viewBox="0 0 96 32">
                                                                <path
                                                                    d="M41.319 18.973H1.077c.695-3.848 12.649-6.76 27.054-6.76 7.957 0 15.1.888 20.018 2.332 4.903-1.442 12.015-2.332 19.954-2.332 14.408 0 26.177 2.929 26.875 6.777H41.316l.003-.016zm54.677 3.55c0-.817-.473-1.501-1.311-1.501H1.512C.68 21.022 0 21.705 0 22.523v.906l-.015.059.007 6.977c0 .832.68 1.501 1.519 1.501h1.964c.838 0 1.516-.669 1.516-1.501l-.008-2.474h85.994v2.474c0 .832.68 1.501 1.518 1.501h2.194c.838 0 1.31-.669 1.31-1.501v-7.022l-.004-.921zM7.945 7.893c0-1.709.33-2.942.33-2.942.188-.891.602-1.337 1.602-1.59 1.419-.342 3.037-.297 4.489-.327 1.464-.03 2.926-.045 4.393-.059.622-.015 1.246.015 1.871 0 .437 0 .874 0 1.311-.015h.345c.895 0 1.791 0 2.687.015.437 0 50.343 0 50.78.015.625 0 1.249-.03 1.871-.015 1.465.03 2.929.03 4.391.059 1.452.045 3.07-.015 4.49.342 1 .238 1.413.683 1.6 1.575 0 0 .332 1.233.332 2.957 0 1.946-.402 3.442-.402 3.442-.117.386-.29.728-.536 1.01 1.468.401 3.329.862 4.52 1.411V2.345A2.338 2.338 0 0 0 89.67.012H6.366c-1.299 0-2.348 1.04-2.348 2.318v11.441c1.191-.55 3.257-1.025 4.726-1.426-.246-.267-.419-.624-.537-1.01 0 0-.26-1.496-.26-3.442z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cheapest-info-item">
                                                <div class="hp-gr__policy e2e-policy">
                                                    Partially refundable
                                                    <span>
                                                        <svg class="bk-icon -iconset-question_mark_circle"
                                                            fill="#0071C2" height="14" width="14" viewBox="0 0 128 128">
                                                            <path
                                                                d="M64 8a56 56 0 1 0 56 56A56 56 0 0 0 64 8zm0 100a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm18.4-39.6A32.6 32.6 0 0 1 74 74l-2 1.1V82a2 2 0 0 1-2 2H58a2 2 0 0 1-2-2v-8.8c0-7.8 6.7-11.3 10.7-13.4a20.5 20.5 0 0 0 4.4-2.7 10 10 0 1 0-15-13.2 10.3 10.3 0 0 0-2.1 6.4V54a2 2 0 0 1-2 2H40a2 2 0 0 1-2-2v-3.5a26.7 26.7 0 0 1 6.9-18.1 26 26 0 0 1 22.6-8.2 25.5 25.5 0 0 1 12.2 5 26 26 0 0 1 2.7 39.2z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="cheapest-info-item">
                                                <div class="hp_room_reinforcement">
                                                    <span class="hp_room_reinforcement__icon ">
                                                        <svg class="bk-icon -fonticon-coffee" height="16" width="15"
                                                            viewBox="0 0 30 32">
                                                            <path
                                                                d="M29.09 27.912H.91c0 .031-.008.056-.008.084C.902 29.72 3.204 32 4.931 32h20.138c1.728 0 4.029-2.28 4.029-4.004 0-.028-.008-.053-.008-.084z">
                                                            </path>
                                                            <path
                                                                d="M13.507 8.575a.547.547 0 0 0 .384-.934c-.03-.029-.742-.755-.721-2.102.01-.685.209-1.416.594-2.175a.546.546 0 0 0-.973-.493c-.459.908-.699 1.8-.711 2.652-.029 1.841 1.008 2.858 1.052 2.901.105.101.24.151.375.151z">
                                                            </path>
                                                            <path
                                                                d="M15.84 8.39a.545.545 0 1 0 .757-.785c-.016-.015-2.028-1.512-.632-4.275.475-.938.719-1.856.724-2.73a.545.545 0 0 0-.54-.55c-.276.011-.548.24-.55.54-.005.705-.209 1.461-.606 2.248-1.757 3.474.76 5.469.847 5.552z">
                                                            </path>
                                                            <path
                                                                d="M8.76 26.534h12.483a2.171 2.171 0 0 0 2.164-2.167l.344-3.397c.091.02.186.039.297.058.188.029.377.043.613.049h.023a4.23 4.23 0 0 0 1.838-.434 4.109 4.109 0 0 0 1.84-1.782c.948-1.794.469-3.996-1.197-5.282a3.993 3.993 0 0 0-.543-.348 3.91 3.91 0 0 0-.551-.235l-.118-.043a4.25 4.25 0 0 0-1.278-.201c-.031 0-.063.004-.094.005l.267-2.631c0-.159-.021-.314-.054-.464H5.207c-.034.15-.054.305-.054.464l1.441 14.242a2.172 2.172 0 0 0 2.166 2.166zm16.29-12.146l.081.015a2.852 2.852 0 0 1 .742.252c.1.054.194.112.332.216.089.067.173.135.252.212a2.566 2.566 0 0 1 .483 3.025 2.46 2.46 0 0 1-.585.73c-.463.402-1.058.625-1.758.625h-.011a2.507 2.507 0 0 1-.276-.022l-.081-.013a2.558 2.558 0 0 1-.312-.083l.499-4.936c.117-.016.234-.036.359-.043.079.002.161.007.275.022zM7.935 11.319c.456-.066.87.28.919.739l1.252 11.477a.833.833 0 1 1-1.658.18L7.195 12.238a.835.835 0 0 1 .74-.919z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    Breakfast included
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <ul>
                                            <li class="cheapest-info-item">
                                                <div class="prco-text-nowrap-helper">
                                                    <div
                                                        class="bui-price-display__value prco-text-nowrap-helper prco-inline-block-maker-helper ">
                                                        <span class="prco-valign-middle-helper">
                                                            BDT&nbsp;252,582
                                                        </span>
                                                    </div>
                                                    <span class="bui-u-sr-only">
                                                        Price
                                                        BDT&nbsp;252,582
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="cheapest-info-item">
                                                <div class="prd-taxes-and-fees-under-price  blockuid-">
                                                    +BDT&nbsp;66,934 taxes and charges
                                                </div>
                                            </li>
                                            <li class="cheapest-info-item">
                                                <div class="c-earn-credits ">
                                                    <span class="">
                                                        <span class="bui-badge bui-badge--constructive">
                                                            <span class=" bui-badge__text">
                                                                Earn BDT&nbsp;22,366 Credits
                                                            </span>
                                                        </span>

                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="reserve-box">
                                            <li class="cheapest-info-item">
                                                <div class="bui-price-display__label ">
                                                    33 nights, 2 adults, 1 child
                                                </div>
                                            </li>
                                            <li class="cheapest-info-item">
                                                <div
                                                    class="bui-price-display__value prco-text-nowrap-helper prco-inline-block-maker-helper ">
                                                    <span class="prco-valign-middle-helper">
                                                        BDT&nbsp;252,582
                                                    </span>
                                                </div>
                                                <span class="bui-u-sr-only">
                                                    Price
                                                    BDT&nbsp;252,582
                                                </span>
                                            </li>
                                            <li class="cheapest-info-item">
                                                <div class="prd-taxes-and-fees-under-price  blockuid-">
                                                    +BDT&nbsp;66,934 taxes and charges
                                                </div>
                                            </li>
                                            <li class="cheapest-info-item">
                                                <div class="bui-f-font-caption bui-f-color-grayscale-darker ">
                                                    You'll earn <b class="bui-f-color-constructive">BDT&nbsp;22,366</b>
                                                    credit on this booking.
                                                </div>
                                            </li>
                                            <li class="cheapest-info-item">
                                                <div>
                                                    <a class="txp-group-cta bui-button bui-button--primary bui-button--large bui-button--wide s-grup-rcommendation-reserve-btn"
                                                        href="#">
                                                        <span class="bui-button__text">
                                                            Reserve
                                                        </span>
                                                    </a>

                                                </div>
                                            </li>
                                            <li class="cheapest-info-item">
                                                <div class="groups_click_no_pay">
                                                    Don't worry - clicking this button won't charge
                                                    you anything!
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Cheapest option at this property -->

                <!-- Most popular facilities & Others -->
                <div class="row mt-5">
                    <div class="col-lg-8">
                        <div class="hp-description">
                            <div class="hp_desc_main_content">
                                <div id="summary" class="">
                                    <div id="property_description_content">
                                        <p>Located just 3.1 mi from the Hazrat Shahjalal
                                            International Airport, Nascent Gardenia Baridhara
                                            operates a 24-hour front desk to assist guests at all
                                            hours and a fitness center. Free WiFi is available in
                                            all areas.</p>
                                        <p>The air-conditioned rooms feature a flat-screen cable TV,
                                            seating area and working desk. Each room has a dining
                                            area, microwave and a refrigerator. The attached
                                            bathrooms are equipped with a shower, hairdryer
                                            and free toiletries.
                                        </p>

                                        <p>Dining options include Curry &amp; Leaf, an in-house
                                            multi-cuisine restaurant, and a NOVO Signature
                                            Restaurant that serves Japanese delights. Room service
                                            can be requested for in-room dining comforts. </p>
                                    </div>
                                </div>
                                <p class="summary  hotel_meta_style">
                                    <span class="hp-desc-highlighted">
                                        Nascent Gardenia Baridhara has been welcoming Booking.com
                                        guests since Mar 7, 2014<br>
                                    </span> Hotel chain/brand:
                                </p>

                                <div class="inline-feedback_bordered-light">
                                    <div>
                                        <span class="inline-feedback__title">
                                            Missing some information?
                                        </span>
                                        <button class="inline-feedback__link a11y_btn_style">Yes </button>
                                        <span class="inline-feedback__separator">/</span>
                                        <button class="inline-feedback__link a11y_btn_style">No</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bui-grid__column bui-grid__column-12 js-k2-hp--block k2-hp--popular_facilities">
                            <div class="hp_desc_important_facilities clearfix hp_desc_important_facilities--bui ">
                                <h3 class="bui-f-font-heading">
                                    Most popular facilities
                                </h3>

                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-shuttle hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M92 100a10 10 0 1 1-10 10 10 10 0 0 1 10-10zm-66 10a10 10 0 1 0 10-10 10 10 0 0 0-10 10zM16 56h88.2a8 8 0 0 1 7.6 5.5l7.8 26.3a8 8 0 0 1 .4 2.5V106a6 6 0 0 1-6 6h-6.1a16 16 0 1 0-31.8 0H52a16 16 0 1 0-31.8 0H16a8 8 0 0 1-8-8V64a8 8 0 0 1 8-8zm72 24l25 8-7-24H88zm-24 0h16V64H64zm-24 0h16V64H40zm-24 0h16V64H16zm28.2-44.6l8 4.5 4.4 8a.4.4 0 0 0 .6 0l1-1a.4.4 0 0 0 0-.3V37l6.5-5.9L76.1 46a1.4 1.4 0 0 0 2 .4l1-.5a1.4 1.4 0 0 0 .5-1.8L72 24.2l9-8.4a10.2 10.2 0 0 0 3-6.4A1.4 1.4 0 0 0 82.6 8a10.2 10.2 0 0 0-6.5 2.9L67.6 20l-19.8-7.5a1.4 1.4 0 0 0-1.8.6l-.5 1A1.4 1.4 0 0 0 46 16l15 11.5-5.8 6.2h-9.7a.4.4 0 0 0-.3.1l-1 1a.4.4 0 0 0 0 .6z">
                                        </path>
                                    </svg> Airport shuttle (free)
                                </div>

                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-wifi hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <circle cx="64" cy="100" r="12"></circle>
                                        <path
                                            d="M118.3 32.7A94.9 94.9 0 0 0 64 16 94.9 94.9 0 0 0 9.7 32.7a4 4 0 1 0 4.6 6.6A87 87 0 0 1 64 24a87 87 0 0 1 49.7 15.3 4 4 0 1 0 4.6-6.6zM87.7 68.4a54.9 54.9 0 0 0-47.4 0 4 4 0 0 0 3.4 7.2 47 47 0 0 1 40.6 0 4 4 0 0 0 3.4-7.2z">
                                        </path>
                                        <path
                                            d="M104 50.5a81.2 81.2 0 0 0-80 0 4 4 0 0 0 4 7 73.2 73.2 0 0 1 72 0 4 4 0 0 0 4-7z">
                                        </path>
                                    </svg>
                                    Free WiFi
                                </div>

                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-fitness hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M80 85.6L42.4 48l5.6-5.6L85.6 80zM13.2 19a4 4 0 1 0 5.7-5.7l-4-4A4 4 0 0 0 9.2 15zM56 8l-8 8-8-8L8 40l8 8-8 8 8.1 8.1 48-48zm58.9 101.1a4 4 0 1 0-5.7 5.7l4 4a4 4 0 1 0 5.7-5.7zm5.2-37l-8.1-8.2-48 48 8.2 8.1 8-8 8 8 32-32-8-8z">
                                        </path>
                                    </svg>
                                    Fitness center
                                </div>

                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-nosmoking hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M64 8a56 56 0 1 0 56 56A56 56 0 0 0 64 8zm0 104a48 48 0 0 1-36.6-79l31 31H28v8h38.3L95 100.6A47.8 47.8 0 0 1 64 112zm36.6-17l-23-23H84v-8H69.7L33 27.4A48 48 0 0 1 100.6 95zM92 64h8v8h-8zm0-10c0-7.7-5.9-14-13.2-14H78a2 2 0 0 1-2-2 10 10 0 0 0-10-10h-8a2 2 0 0 1 0-4h8a14 14 0 0 1 13.8 12c9 .6 16.2 8.4 16.2 18a2 2 0 0 1-4 0zm-8 0a2 2 0 0 1-4 0 2 2 0 0 0-2-2h-3a15 15 0 0 1-15-15 2 2 0 0 1 4 0 11 11 0 0 0 11 11h3a6 6 0 0 1 6 6z">
                                        </path>
                                    </svg> Non-smoking rooms
                                </div>

                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-gourmet hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M112 68a4 4 0 0 1-4 4H20a4 4 0 0 1 0-8h88a4 4 0 0 1 4 4zM26 56h76a2 2 0 0 0 2-2.1 40 40 0 0 0-32-37.1V16a8 8 0 0 0-16 0v.8a40 40 0 0 0-32 37 2 2 0 0 0 2 2.2zm77 24s-27 6-42.7 0C53.6 80 42 83 36 88s-20 15.5-20 15.5L32 120l19.8-19a12 12 0 0 1 8.5-3.5L81.7 96a4 4 0 0 0 2.4-.8l20.1-11.6A2 2 0 0 0 103 80z">
                                        </path>
                                    </svg> Room service
                                </div>

                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-food hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M44.1 8.9L48 44a12 12 0 0 1-12 12h-3.6l3.4 59.8a4 4 0 0 1-4 4.2h-7.6a4 4 0 0 1-4-4.2L23.6 56H20A12 12 0 0 1 8 44l3.9-35.1a1 1 0 0 1 1-.9H15a1 1 0 0 1 1 1v19a4 4 0 0 0 4 4h4.8L26 9a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1l1.2 23H36a4 4 0 0 0 4-4V9a1 1 0 0 1 1-1h2.1a1 1 0 0 1 1 .9zM60 24v48h8l-3.8 43.8a4 4 0 0 0 4 4.2h7.6a4 4 0 0 0 4-4.2L80 8h-4a16 16 0 0 0-16 16zm60 8c0-13.3-7.2-24-16-24S88 18.8 88 32c0 11 5 20.2 11.6 23l-3.4 60.8a4 4 0 0 0 4 4.2h7.6a4 4 0 0 0 4-4.2L108.4 55c6.7-2.8 11.6-12 11.6-23z">
                                        </path>
                                    </svg> Restaurant
                                </div>

                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-tea_maker hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M102 40H58a2 2 0 0 0-2 2v46a8 8 0 0 0 8 8h32a8 8 0 0 0 8-8v-.4a20 20 0 0 0 0-39.2V42a2 2 0 0 0-2-2zM73 80a4 4 0 0 1-8 0V56a4 4 0 0 1 8 0zm39-12a12 12 0 0 1-8 11.3V56.7a12 12 0 0 1 8 11.3zm0-60H16a8 8 0 0 0-8 8v96a8 8 0 0 0 8 8h96a8 8 0 0 0 8-8v-6a2 2 0 0 0-2-2H50a2 2 0 0 1-2-2V26a2 2 0 0 1 2-2h14v8h32v-8h22a2 2 0 0 0 2-2v-6a8 8 0 0 0-8-8zM28 64a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm0-24a8 8 0 1 1 8-8 8 8 0 0 1-8 8z">
                                        </path>
                                    </svg> Tea/Coffee Maker in All Rooms
                                </div>

                                <div class=" important_facility">
                                    <svg class="bk-icon -iconset-coffee hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M104 116a4 4 0 0 1-4 4H28a4 4 0 0 1 0-8h72a4 4 0 0 1 4 4zM40 96V50a2 2 0 0 1 2-2h44a2 2 0 0 1 2 2v6.4a20 20 0 0 1 0 39.2v.4a8 8 0 0 1-8 8H48a8 8 0 0 1-8-8zm48-31.3v22.6a12 12 0 0 0 0-22.6zM49 88a4 4 0 0 0 8 0V64a4 4 0 0 0-8 0zm-1-52a4 4 0 0 0 4-4V16a4 4 0 0 0-8 0v16a4 4 0 0 0 4 4zm16 4a4 4 0 0 0 4-4V12a4 4 0 0 0-8 0v24a4 4 0 0 0 4 4zm16-4a4 4 0 0 0 4-4V16a4 4 0 0 0-8 0v16a4 4 0 0 0 4 4z">
                                        </path>
                                    </svg> Breakfast
                                </div>

                                <div class="important_facility  important_facility--cribs">
                                    <i class="important_facility--cribs__icon bicon-babycot"></i>
                                    Cribs (upon request)
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-md-3">
                        <div class="property-highlights ph-icon-fill-color">

                            <h3 class="bui-f-font-heading">
                                Property Highlights
                            </h3>

                            <div class="ph-section">
                                <div class="ph-content">
                                    <h4 class="ph-item-header">Perfect for a 33-night stay!</h4>
                                </div>
                                <div class="ph-content ">
                                    <p class="ph-item contextual-reviews-trigger">
                                        <span class="ph-icon-container ph-icon-container-top-location">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </span>
                                        <span class="ph-item-copy ">
                                            <span class="ph-item-copy-top-location">Top
                                                Location: Highly rated by recent guests
                                                (9.2)</span>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div class="ph-section">
                                <div class="ph-content">
                                    <h4 class="ph-item-header">Breakfast Info</h4>
                                </div>
                                <div class="ph-content ">
                                    <p class="ph-item contextual-reviews-trigger">
                                        <span class="ph-item-copy ">
                                            <span class="ph-item-copy-breakfast-option">Continental,
                                                Italian, Full English/Irish, Vegetarian, Vegan,
                                                Halal, Gluten-free, Kosher, Asian, American,
                                                Buffet</span>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div class="ph-section">
                                <div class="ph-content">
                                    <p class="ph-item contextual-reviews-trigger">
                                        <span class="ph-icon-container ph-icon-container-parking">
                                            <i class="fa-solid fa-circle-h"></i>
                                        </span>
                                        <span class="ph-item-copy ">
                                            <span class="ph-item-copy-parking">Free private
                                                parking available at the hotel</span>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div class="ph-footer">

                                <button
                                    class=" txp-sidebar-cta bui-button bui-button--primary call_to_action--wide js-ph__ctapx--fw-cta"
                                    type="button">
                                    <span class="bui-button__text">
                                        Reserve for 2 adults,
                                        1 child
                                        <span class="b-button__from-text">
                                            (for BDT&nbsp;252,582)
                                        </span>
                                    </span>
                                </button>

                                <div class="hp-lists-ph">
                                    <div class="txp-sidebar-block hp-lists hp-lists--save-wl-below-ph hide">
                                        <button type="button"
                                            class="wl-entrypoint bui-button bui-button--secondary bui-button--wide small">
                                            <svg class="bk-icon -iconset-heart_outline" fill="#0071C2" height="16"
                                                width="16" viewBox="0 0 128 128" size="medium">
                                                <path
                                                    d="M119.5 40.3a29 29 0 0 0-22.8-23.7 33.8 33.8 0 0 0-32.7 13 33.7 33.7 0 0 0-32.7-13A29 29 0 0 0 8.5 40.3c-1.3 7.2-.6 18.8 9.4 33.3A140 140 0 0 0 62 111.5a3.7 3.7 0 0 0 4 0c20.2-12 35-24.8 44.1-38 10-14.4 10.7-26 9.5-33.2zm-55.5 63c-33-20.1-50.8-43-47.7-61.6A20.7 20.7 0 0 1 33 24.3a22.3 22.3 0 0 1 4.5-.4c8.8 0 17.3 5.2 23.2 14.6a4 4 0 0 0 3.4 1.8 4 4 0 0 0 3.4-1.8c6-9.4 14.4-14.6 23.2-14.6a22.3 22.3 0 0 1 4.5.5 20.7 20.7 0 0 1 16.6 17.2c3 18.6-14.8 41.6-47.8 61.7z">
                                                </path>
                                            </svg>

                                            <span class="wl-entrypoint__btn-text">
                                                Save the property
                                            </span>
                                        </button>
                                        <p class="hp-lists-counter wishlist-social-count">
                                            Saved to 96 lists
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- Most popular facilities & Others-->



                <!-- Change Search Box -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="hp-section-header hp-section-header--with-badge mb-3">
                            <h2 class="hp-dates-summary__header" id="availability" name="">
                                Availability
                            </h2>
                            <div id="rate_guarantee" class="bpg_hp_no_availability hp-availability-block-usp">
                                <a href="#" class="open-bpg-in-overlay-instead pp_bpg_tooltip_holder">We Price Match
                                </a>
                            </div>
                        </div>
                        <!-- RE-Search Form -->
                        <div class="sb-searchbox__outer" data-sb-outer="">
                            <form method="" action="#" role="search"
                                class=" sb-searchbox sb-searchbox--painted sb-searchbox--xp -minified js-sb-frm-hp js--sb-searchbox"
                                data-component="search/searchbox/searchbox-xp" data-sb-id="main"
                                data-sb-flags=" AEJPAcBacPONDcFGHT:0 show_overlay_on_submit:1 icon_revamp:1 region_second_line:1"
                                data-is-first-visible="1" data-skip-hp-refresh="1" data-show-overlay-on-submit="1"
                                data-sb-action-for-group="/hotel/bd/nascent-gardenia-baridhara.html#group_recommendation">


                                <div class="xp__fieldset js--sb-fieldset accommodation -no-destination"
                                    data-view="accommodation">
                                    <div data-visible="accommodation,flights,rentalcars" class="xp__dates xp__group">
                                        <div class="xp__dates-inner">
                                            <div data-component="search/dates/dates-errors" data-view-id="accommodation"
                                                data-sb-id="main" role="alert" data-dates-errors=""></div>
                                            <div data-visible="accommodation,flights,rentalcars"
                                                class="xp__input-group xp__date-time">
                                                <div class="xp__dates-inner xp__dates__checkin">
                                                    <div data-visible="accommodation,flights,rentalcars"
                                                        class="xp__group xp__date c2-wrapper-s-hidden">
                                                        <div class="sb-date-field b-datepicker"
                                                            data-component="search/dates/date-field-select"
                                                            data-sb-id="main" data-mode="checkin"
                                                            data-calendar2-type="checkin"
                                                            data-calendar2-title="Check-in">
                                                            <div class="sb-searchbox__input sb-date-field__field sb-date__field-svg_icon"
                                                                data-field="">
                                                                <span
                                                                    class="sb-date-field__icon sb-date-field__icon-btn bk-svg-wrapper calendar-restructure-sb">
                                                                    <svg class="bk-icon -streamline-calendar sb-date-picker_icon-svg"
                                                                        fill="#BDBDBD" height="20" width="20"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M22.502 13.5v8.25a.75.75 0 0 1-.75.75h-19.5a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v8.25zm1.5 0V5.25A2.25 2.25 0 0 0 21.752 3h-19.5a2.25 2.25 0 0 0-2.25 2.25v16.5A2.25 2.25 0 0 0 2.252 24h19.5a2.25 2.25 0 0 0 2.25-2.25V13.5zm-23.25-3h22.5a.75.75 0 0 0 0-1.5H.752a.75.75 0 0 0 0 1.5zM7.502 6V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0zm10.5 0V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0z">
                                                                        </path>
                                                                    </svg>
                                                                    <i class="sb-date-field__icon-text sb-date-field__icon-text-wide"
                                                                        data-icon-day="" data-placeholder="+">20</i>
                                                                </span>
                                                                <div class="sb-date-field__controls sb-date-field__controls__ie-fix"
                                                                    data-controls="">
                                                                    <div class="sb-date-field__select -month-year js-date-field__part"
                                                                        data-type="month-year">
                                                                        <div class="sb-date-field__select-value">
                                                                            <span class="js-date-field__value"
                                                                                data-placeholder="Check-in month ">March
                                                                                2022</span>
                                                                            <i
                                                                                class="sb-date-field__select-icon bicon-downchevron"></i>
                                                                        </div>
                                                                        <select
                                                                            class="sb-date-field__select-field js-date-field__select"
                                                                            aria-label="Check-in month"
                                                                            data-no-old-calendar="1">
                                                                            <option value="" disabled="">
                                                                            </option>

                                                                        </select>

                                                                    </div>
                                                                    <div class="sb-date-field__select -day js-date-field__part"
                                                                        data-type="date">
                                                                        <div class="sb-date-field__select-value">
                                                                            <span class="js-date-field__value"
                                                                                data-placeholder="Check-in day">20,
                                                                                Sunday</span>
                                                                            <i
                                                                                class="sb-date-field__select-icon bicon-downchevron"></i>
                                                                        </div>
                                                                        <select
                                                                            class="sb-date-field__select-field js-date-field__select"
                                                                            name="checkin_monthday" data-selected="19"
                                                                            aria-label="Check-in day"
                                                                            data-no-old-calendar="1">
                                                                            <option value="" disabled="">
                                                                            </option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="sb-date-field__display"
                                                                    data-placeholder="Check-in"
                                                                    data-date-format="short_date_with_weekday_without_year"
                                                                    data-display="">Sun,
                                                                    Mar 20</div>
                                                                <i class="sb-date-field__chevron bicon-downchevron"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-visible="accommodation,flights,rentalcars"
                                                class="xp__input-group xp__date-time">
                                                <div class="xp__dates-inner xp__dates__checkout">
                                                    <div data-visible="accommodation,flights,rentalcars"
                                                        class="xp__group xp__date c2-wrapper-s-hidden">
                                                        <div class="sb-date-field b-datepicker"
                                                            data-component="search/dates/date-field-select"
                                                            data-sb-id="main" data-mode="checkout"
                                                            data-calendar2-type="checkout"
                                                            data-calendar2-title="Check-out">
                                                            <div class="sb-searchbox__input sb-date-field__field sb-date__field-svg_icon"
                                                                data-field="">
                                                                <span
                                                                    class="sb-date-field__icon sb-date-field__icon-btn bk-svg-wrapper calendar-restructure-sb">
                                                                    <svg class="bk-icon -streamline-calendar sb-date-picker_icon-svg"
                                                                        fill="#BDBDBD" height="20" width="20"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M22.502 13.5v8.25a.75.75 0 0 1-.75.75h-19.5a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v8.25zm1.5 0V5.25A2.25 2.25 0 0 0 21.752 3h-19.5a2.25 2.25 0 0 0-2.25 2.25v16.5A2.25 2.25 0 0 0 2.252 24h19.5a2.25 2.25 0 0 0 2.25-2.25V13.5zm-23.25-3h22.5a.75.75 0 0 0 0-1.5H.752a.75.75 0 0 0 0 1.5zM7.502 6V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0zm10.5 0V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0z">
                                                                        </path>
                                                                    </svg>
                                                                    <i class="sb-date-field__icon-text sb-date-field__icon-text-wide"
                                                                        data-icon-day="" data-placeholder="+">21</i>
                                                                </span>
                                                                <div class="sb-date-field__controls sb-date-field__controls__ie-fix"
                                                                    data-controls="">
                                                                    <div class="sb-date-field__select -month-year js-date-field__part"
                                                                        data-type="month-year">
                                                                        <div class="sb-date-field__select-value">
                                                                            <span class="js-date-field__value"
                                                                                data-placeholder="Check-out month">April
                                                                                2022</span>
                                                                            <i
                                                                                class="sb-date-field__select-icon bicon-downchevron"></i>
                                                                        </div>
                                                                        <select
                                                                            class="sb-date-field__select-field js-date-field__select"
                                                                            aria-label="Check-out month"
                                                                            data-no-old-calendar="1">
                                                                            <option value="" disabled="">
                                                                            </option>

                                                                        </select>
                                                                        <input type="hidden" class="js-date-field__year"
                                                                            name="checkout_year" value="2022">
                                                                        <input type="hidden"
                                                                            class="js-date-field__month"
                                                                            name="checkout_month" value="4">
                                                                    </div>
                                                                    <div class="sb-date-field__select -day js-date-field__part"
                                                                        data-type="date">
                                                                        <div class="sb-date-field__select-value">
                                                                            <span class="js-date-field__value"
                                                                                data-placeholder="Check-out day">21,
                                                                                Thursday</span>
                                                                            <i
                                                                                class="sb-date-field__select-icon bicon-downchevron"></i>
                                                                        </div>
                                                                        <select
                                                                            class="sb-date-field__select-field js-date-field__select"
                                                                            name="checkout_monthday" data-selected="21"
                                                                            aria-label="Check-out day"
                                                                            data-no-old-calendar="1">
                                                                            <option value="" disabled=""> </option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="sb-date-field__display"
                                                                    data-placeholder="Check-out"
                                                                    data-date-format="short_date_with_weekday_without_year"
                                                                    data-display="">Thu,
                                                                    Apr 21</div>
                                                                <i class="sb-date-field__chevron bicon-downchevron"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xp-calendar searchbox-calendar--with-prices"
                                            data-component="search/dates/single-calendar-with-prices" data-sb-id="main"
                                            data-render-los="1">
                                            <div class="bui-calendar" style="display: none;">
                                                <div class="bui-calendar__main b-a11y-calendar-contrasts">
                                                    <div class="bui-calendar__control bui-calendar__control--prev bui-calendar__control--hidden"
                                                        data-bui-ref="calendar-prev">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24">
                                                            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="bui-calendar__control bui-calendar__control--next"
                                                        data-bui-ref="calendar-next">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24">
                                                            <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="bui-calendar__content" data-bui-ref="calendar-content">
                                                        <div class="bui-calendar__wrapper"
                                                            data-bui-ref="calendar-month">
                                                            <div class="bui-calendar__month"
                                                                id="bui-calendar-1647383489644vujhb" aria-live="polite">
                                                                March 2022</div>
                                                            <table class="bui-calendar__dates"
                                                                aria-labelledby="bui-calendar-1647383489644vujhb">

                                                                <thead class="bui-calendar__row">
                                                                    <tr>
                                                                        <th scope="col" class="bui-calendar__day-name">
                                                                            Mo
                                                                        </th>

                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr class="bui-calendar__row">
                                                                        <td
                                                                            class="bui-calendar__date bui-calendar__date--empty">
                                                                        </td>

                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="bui-calendar__wrapper"
                                                            data-bui-ref="calendar-month">
                                                            <div class="bui-calendar__month"
                                                                id="bui-calendar-1647383489644vujhb" aria-live="polite">
                                                                April 2022</div>

                                                        </div>
                                                    </div>
                                                    <div
                                                        class="bui-calendar__display calendar-dates-prices-info-section">
                                                        <div class="calendar-dates-prices-info-message">
                                                            Approximate prices in BDT for a 1-night stay
                                                        </div>
                                                        <div class="calendar-dates-prices-loader"
                                                            style="display: none;">
                                                            <div aria-label="Label"
                                                                class="bui-spinner bui-spinner--size-small calendar-dates-prices-loading__spinner"
                                                                role="alert" aria-busy="true">
                                                                <div class="bui-spinner__inner"></div>
                                                            </div>
                                                            <div class="bui-text calendar-dates-prices-loading__text">
                                                                Loading dates...</div>
                                                        </div>
                                                    </div>
                                                    <div class="bui-calendar__display"
                                                        data-bui-ref="calendar-selected-display">Sun, Mar 20
                                                        - Thu, Apr 21 (32-night stay)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-visible="accommodation,flights" class="xp__input-group xp__guests"
                                        data-component="search/group/group-with-modal" data-sb-id="main" tabindex="0">
                                        <div data-component="xp-index/guest-errors" data-sb-id="main"
                                            data-view-id="accommodation" role="alert">
                                        </div>
                                        <label id="xp__guests__toggle" for="xp__guests__input" class="xp__input"
                                            data-group-toggle="" role="button" aria-expanded="false"
                                            aria-controls="xp__guests__inputs-container">
                                            <span class="invisible_spoken">Rooms and occupancy</span>
                                            <span class="xp__guests__count">
                                                <span data-adults-count="">2 adults</span>
                                                <span data-visible="accommodation">
                                                    &nbsp;·&nbsp;
                                                    <span data-children-count="">1 child</span>
                                                </span>
                                                <span data-visible="accommodation">
                                                    &nbsp;·&nbsp;
                                                    <span data-room-count="">1 room</span>
                                                </span>
                                            </span>
                                        </label>
                                        <div id="xp__guests__inputs-container" class="xp__guests__inputs focussable "
                                            data-group-modal="" style="display: none;" role="region"
                                            aria-label="Rooms and occupancy">
                                            <div data-component="search/group/group" data-sb-id="main"
                                                data-sb-width="medium" data-sb-bbtool-searchbox="0"
                                                data-sb-group-children-hide="0" data-sb-group-children-ages-hide="0"
                                                data-sb-group-infants-hide="1" data-sb-group-pets-hide="0"
                                                data-sb-group-rooms-hide="0" data-sb-group-block-labels="0"
                                                data-sb-group-use_adults_label="0" data-sb-group-always-expanded="0"
                                                data-sb-group-use-bui-stepper="1"
                                                data-sb-group-bui-steppers-accessible="0"
                                                data-fe_sb_group_descriptive_dropdowns="0"
                                                data-fe_sb_universal_design="0" data-fe_sb_xpi="1"
                                                data-fe_remove_duplicate_ids="0" data-fe_sb_unique_id=""
                                                data-sb_reorder_rooms_block="1" data-sb-facelift="0"
                                                data-fe_sb_show_children_age_bracket="0"
                                                data-fe_sb_mandatory_child_ages="0"
                                                data-fe_fam_d_index_mandatory_ages_new_copy="0"
                                                data-fe_sb_dont_use_default_child_age="0">
                                                <div class="u-clearfix" data-render="">
                                                    <div class="sb-group__field sb-group__field-adults">
                                                        <div class="bui-stepper" data-bui-component="InputStepper">
                                                            <div class="bui-stepper__title-wrapper">
                                                                <label class="bui-stepper__title"
                                                                    for="group_adults">Adults</label>
                                                            </div>
                                                            <div class="bui-stepper__wrapper">
                                                                <input type="range" class="bui-stepper__input"
                                                                    data-bui-ref="input-stepper-field" id="group_adults"
                                                                    name="group_adults" min="1" max="30" value="2"
                                                                    data-group-adults-count="">
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__subtract-button"
                                                                    data-bui-ref="input-stepper-subtract-button"
                                                                    type="button">
                                                                    <span class="bui-button__text">-</span>
                                                                </button>
                                                                <span class="bui-stepper__display"
                                                                    data-bui-ref="input-stepper-value">2</span>
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__add-button"
                                                                    data-bui-ref="input-stepper-add-button"
                                                                    type="button">
                                                                    <span class="bui-button__text">+</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="sb-group__field sb-group-children ">
                                                        <div class="bui-stepper" data-bui-component="InputStepper">
                                                            <div class="bui-stepper__title-wrapper">
                                                                <label class="bui-stepper__title"
                                                                    for="group_children">Children</label>
                                                            </div>
                                                            <div class="bui-stepper__wrapper">
                                                                <input type="range" class="bui-stepper__input"
                                                                    data-bui-ref="input-stepper-field"
                                                                    id="group_children" name="group_children" min="0"
                                                                    max="10" value="1" data-group-children-count="">
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__subtract-button"
                                                                    data-bui-ref="input-stepper-subtract-button"
                                                                    type="button">
                                                                    <span class="bui-button__text">-</span>
                                                                </button>
                                                                <span class="bui-stepper__display"
                                                                    data-bui-ref="input-stepper-value">1</span>
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__add-button"
                                                                    data-bui-ref="input-stepper-add-button"
                                                                    type="button">
                                                                    <span class="bui-button__text">+</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="sb-group__field sb-group__field-rooms">
                                                        <div class="bui-stepper" data-bui-component="InputStepper">
                                                            <div class="bui-stepper__title-wrapper">
                                                                <label class="bui-stepper__title"
                                                                    for="no_rooms">Rooms</label>
                                                            </div>
                                                            <div class="bui-stepper__wrapper">
                                                                <input type="range" class="bui-stepper__input"
                                                                    data-bui-ref="input-stepper-field" id="no_rooms"
                                                                    name="no_rooms" min="1" max="30" value="1"
                                                                    data-group-rooms-count="">
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__subtract-button"
                                                                    data-bui-ref="input-stepper-subtract-button"
                                                                    type="button" disabled="">
                                                                    <span class="bui-button__text">-</span>
                                                                </button>
                                                                <span class="bui-stepper__display"
                                                                    data-bui-ref="input-stepper-value">1</span>
                                                                <button
                                                                    class="bui-button bui-button--secondary bui-stepper__add-button"
                                                                    data-bui-ref="input-stepper-add-button"
                                                                    type="button">
                                                                    <span class="bui-button__text">+</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sb-group__children__field clearfix">
                                                        <label
                                                            class="sb-searchbox__label -small sb-group__children__label">
                                                            How old is the child you're traveling with?
                                                        </label>
                                                        <select name="age" data-group-child-age="0"
                                                            aria-label="Child 1 age">
                                                            <option class="sb_child_ages_empty_zero" value="12 ">Age at
                                                                check-out</option>
                                                            <option value="0">0 years old</option>
                                                            <option value="1">1 year old </option>
                                                            <option value="2" selected="">2 years old </option>
                                                            <option value="3">3 years old</option>
                                                            <option value="4">4 years old</option>
                                                            <option value="5">5 years old</option>
                                                            <option value="6">6 years old</option>
                                                            <option value="7">7 years old</option>
                                                            <option value="8">8 years old</option>
                                                            <option value="9"> 9 years old </option>
                                                            <option value="10">10 years old</option>
                                                            <option value="11">11 years old </option>
                                                            <option value="12">12 years old</option>
                                                            <option value="13">13 years old</option>
                                                            <option value="14">14 years old</option>
                                                            <option value="15">15 years old </option>
                                                            <option value="16">16 years old</option>
                                                            <option value="17">17 years old
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xp__button">
                                        <div class="sb-searchbox-submit-col -button-messages">
                                        </div>
                                        <div class="sb-searchbox-submit-col -submit-button ">
                                            <button data-sb-id="main" type="submit" class="sb-searchbox__button "
                                                data-et-click="    customGoal:INLGHUDSJNQQdKBUPfECIAEcOHT:4    ">
                                                <span>
                                                    Change search
                                                </span>
                                                <span class="sb-submit-helper"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- RE-Search Form -->

                    </div>
                </div>
                <!-- /Change Search Box -->


                <!-- Why choose Us-->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="pp-section-header">
                            <h2 class="pp-section-title bui-text bui-text--variant-headline_2">
                                4 reasons to choose Nascent Gardenia Baridhara
                            </h2>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <li class="property_usp_item">
                                    <div class="property_usp_icon inverse">
                                        <svg class="bk-icon -streamline-wallet" height="32" width="32"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M21 18.5V20a2.25 2.25 0 0 1-2.25 2.25h-15A2.25 2.25 0 0 1 1.5 20V9.5a2.25 2.25 0 0 1 2.25-2.25h15A2.25 2.25 0 0 1 21 9.5V11a.75.75 0 0 0 1.5 0V9.5a3.75 3.75 0 0 0-3.75-3.75h-15A3.75 3.75 0 0 0 0 9.5V20a3.75 3.75 0 0 0 3.75 3.75h15A3.75 3.75 0 0 0 22.5 20v-1.5a.75.75 0 0 0-1.5 0zM19.42 6.165l-2.328-4.658A2.25 2.25 0 0 0 14.074.5h-.002L3.415 5.83a.75.75 0 0 0 .67 1.34l10.658-5.328a.75.75 0 0 1 1.007.335l2.33 4.658a.75.75 0 1 0 1.34-.67zm2.33 13.085A2.25 2.25 0 0 0 24 17v-4.5a2.25 2.25 0 0 0-2.25-2.25H18a4.5 4.5 0 1 0 0 9h3.75zm0-1.5H18a3 3 0 1 1 0-6h3.75a.75.75 0 0 1 .75.75V17a.75.75 0 0 1-.75.75zM18 15.125a.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5 1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="bui-text bui-text--variant-emphasized_1">
                                        <div>Prices you can't beat!</div>
                                    </div>
                                </li>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <li class="property_usp_item">
                                    <div class="property_usp_icon inverse">
                                        <svg class="bk-icon -streamline-lock_closed" height="32" width="32"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M19.5 16.5v5.25a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75v-10.5a.75.75 0 0 1 .75-.75h13.5a.75.75 0 0 1 .75.75v5.25zm1.5 0v-5.25A2.25 2.25 0 0 0 18.75 9H5.25A2.25 2.25 0 0 0 3 11.25v10.5A2.25 2.25 0 0 0 5.25 24h13.5A2.25 2.25 0 0 0 21 21.75V16.5zM7.5 9.75V6a4.5 4.5 0 0 1 9 0v3.75a.75.75 0 0 0 1.5 0V6A6 6 0 0 0 6 6v3.75a.75.75 0 0 0 1.5 0zM12 15a1.125 1.125 0 1 0 .004 0h-.006a.75.75 0 0 0 .004 1.5H12a.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="bui-text bui-text--variant-emphasized_1">
                                        Booking is safe
                                    </div>
                                </li>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <li class="property_usp_item">
                                    <div class="property_usp_icon inverse">
                                        <svg class="bk-icon -streamline-manage_booking" height="32" width="32"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M18 16.5a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.5 0a2.25 2.25 0 1 0-4.5 0 2.25 2.25 0 0 0 4.5 0zm-1.694-5.582l.442 1.453a1.744 1.744 0 0 0 2.06 1.194l1.473-.341a.588.588 0 0 1 .557.976l-1.032 1.112a1.75 1.75 0 0 0 0 2.383l1.031 1.11a.589.589 0 0 1-.56.976l-1.468-.34a1.744 1.744 0 0 0-2.06 1.195l-.442 1.445a.58.58 0 0 1-1.113.004l-.442-1.456a1.744 1.744 0 0 0-2.06-1.194l-1.473.341a.588.588 0 0 1-.557-.976l1.032-1.112a1.75 1.75 0 0 0 0-2.383l-1.031-1.11a.589.589 0 0 1 .56-.976l1.468.34a1.744 1.744 0 0 0 2.06-1.195l.442-1.452a.58.58 0 0 1 1.112.002zm1.437-.432a2.08 2.08 0 0 0-3.985-.009l-.441 1.452a.244.244 0 0 1-.29.168l-1.47-.34a2.089 2.089 0 0 0-1.994 3.46l1.031 1.11a.25.25 0 0 1 0 .34l-1.03 1.112a2.089 2.089 0 0 0 1.989 3.46l1.476-.342a.244.244 0 0 1 .287.167l.442 1.454a2.079 2.079 0 0 0 3.984-.003l.441-1.443a.244.244 0 0 1 .29-.169l1.47.34a2.089 2.089 0 0 0 1.994-3.46l-1.031-1.11a.25.25 0 0 1 0-.34l1.03-1.112a2.089 2.089 0 0 0-1.989-3.46l-1.476.342a.244.244 0 0 1-.287-.167l-.443-1.454zM3.75 7.5h10.5a.75.75 0 0 0 0-1.5H3.75a.75.75 0 0 0 0 1.5zm0 4.5H7.5a.75.75 0 0 0 0-1.5H3.75a.75.75 0 0 0 0 1.5zm0 4.5H7.5a.75.75 0 0 0 0-1.5H3.75a.75.75 0 0 0 0 1.5zm3.75 3H2.25a.75.75 0 0 1-.75-.75V2.25a.75.75 0 0 1 .75-.75h10.629a.75.75 0 0 1 .53.22L16.28 4.59c.14.14.219.331.219.53V6.75a.75.75 0 0 0 1.5 0V5.121a2.25 2.25 0 0 0-.659-1.59L14.47.659A2.25 2.25 0 0 0 12.88 0H2.25A2.25 2.25 0 0 0 0 2.25v16.5A2.25 2.25 0 0 0 2.25 21H7.5a.75.75 0 0 0 0-1.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="bui-text bui-text--variant-emphasized_1">
                                        Manage your bookings online
                                    </div>
                                </li>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <li class="property_usp_item">
                                    <div class="property_usp_icon inverse">
                                        <svg class="bk-icon -streamline-speech_bubble" height="32" width="32"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12.751 0C6.546-.009 1.51 5.014 1.5 11.219a11.235 11.235 0 0 0 1.696 5.952l-.04-.718-3.083 6.475c-.304.637.362 1.303 1 1l6.473-3.084-.718-.04c5.276 3.28 12.213 1.663 15.494-3.614 3.28-5.276 1.663-12.213-3.614-15.494A11.25 11.25 0 0 0 12.748 0zm0 1.5A9.75 9.75 0 1 1 7.62 19.53a.75.75 0 0 0-.718-.04L.428 22.573l1 1 3.082-6.476a.75.75 0 0 0-.04-.718A9.735 9.735 0 0 1 3 11.22c.008-5.377 4.372-9.729 9.749-9.721z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="bui-text bui-text--variant-emphasized_1">
                                        The staff speaks English
                                    </div>
                                </li>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /Why choose Us-->

                <!-- Guest reviews -->
                <div class="row mt-5" id="GuestReviews">
                    <!-- Review Header -->
                    <div class="col-12">
                        <h2 class="bui-f-font-display_two">
                            <span class="bui-button__text">Guest reviews</span>
                        </h2>

                    </div>

                    <div class="col-12">
                        <div class="row mt-4 mb-3">
                            <div class="col-8">
                                <a href="#blockdisplay4" class="">
                                    <div class="hp-review-score-cta-container-remote">
                                        <div class="rivew-header-icon">
                                            <div class="_9c5f726ff bd528f9ea6">9.0</div>
                                            <div class="review-header-text">
                                                <span class="_9c5f726ff _192b3a196 f1cbb919ef"> Wonderful</span>
                                                <span class="_9c5f726ff _1e6021d2f _6e869d6e0">. 9 reviews</span>
                                            </div>
                                        </div>
                                        <div class="review-header-btn">
                                            Read all reviews
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4">
                                <div class="hp-topic-filter-read-cta">
                                    <button type="button" id="cta-reviews"
                                        class="txp-reviews-cta bui-button bui-button--primary hp-scroll-up-to-dates">
                                        <span class="bui-button__text">
                                            See availability
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Review Header -->
                    <div class="col-12">
                        <div class="hp_location_block__header_title mb-3">
                            Categories:
                        </div>
                        <!-- loop -->

                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="c-score-bar subscore_better">
                                    <span class="c-score-bar__title mb-1">
                                        Staff&nbsp;
                                        <svg class="bk-icon -iconset-arrow_up_bold" fill="#006607" height="14"
                                            width="14" viewBox="0 0 128 128">
                                            <path
                                                d="M101.7 61.7a8 8 0 0 1-11.4 0L72 43.3V104a8 8 0 0 1-16 0V43.3L37.7 61.7a8 8 0 0 1-11.4-11.4L64 12.7l37.7 37.6a8 8 0 0 1 0 11.4z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="c-score-bar__score">9.4</span>
                                    <div class="c-score-bar__bar">
                                        <span class="c-score-bar__value" data-value="9.4" style="width:94%"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="c-score-bar">
                                    <span class="c-score-bar__title mb-1">
                                        Location&nbsp;
                                        <svg class="bk-icon -iconset-arrow_up_bold" fill="#006607" height="14"
                                            width="14" viewBox="0 0 128 128">
                                            <path
                                                d="M101.7 61.7a8 8 0 0 1-11.4 0L72 43.3V104a8 8 0 0 1-16 0V43.3L37.7 61.7a8 8 0 0 1-11.4-11.4L64 12.7l37.7 37.6a8 8 0 0 1 0 11.4z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="c-score-bar__score">9.2</span>
                                    <div class="c-score-bar__bar">
                                        <span class="c-score-bar__value" data-value="9.2" style="width:92%"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="c-score-bar">
                                    <span class="c-score-bar__title mb-1">Cleanliness</span>
                                    <span class="c-score-bar__score">8.9</span>
                                    <div class="c-score-bar__bar">
                                        <span class="c-score-bar__value" data-value="8.9" style="width:89%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="c-score-bar">
                                    <span class="c-score-bar__title mb-1">
                                        Comfort&nbsp;
                                        <svg class="bk-icon -iconset-arrow_up_bold" fill="#006607" height="14"
                                            width="14" viewBox="0 0 128 128">
                                            <path
                                                d="M101.7 61.7a8 8 0 0 1-11.4 0L72 43.3V104a8 8 0 0 1-16 0V43.3L37.7 61.7a8 8 0 0 1-11.4-11.4L64 12.7l37.7 37.6a8 8 0 0 1 0 11.4z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="c-score-bar__score">9.2</span>
                                    <div class="c-score-bar__bar">
                                        <span class="c-score-bar__value" data-value="9.2" style="width:92%"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="c-score-bar">
                                    <span class="c-score-bar__title mb-1">
                                        Facilities&nbsp;
                                        <svg class="bk-icon -iconset-arrow_up_bold" fill="#006607" height="14"
                                            width="14" viewBox="0 0 128 128">
                                            <path
                                                d="M101.7 61.7a8 8 0 0 1-11.4 0L72 43.3V104a8 8 0 0 1-16 0V43.3L37.7 61.7a8 8 0 0 1-11.4-11.4L64 12.7l37.7 37.6a8 8 0 0 1 0 11.4z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="c-score-bar__score">8.9</span>
                                    <div class="c-score-bar__bar">
                                        <span class="c-score-bar__value" data-value="8.9" style="width:89%"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="c-score-bar">
                                    <span class="c-score-bar__title mb-1">Value for money</span>
                                    <span class="c-score-bar__score">8.1</span>
                                    <div class="c-score-bar__bar">
                                        <span class="c-score-bar__value" data-value="8.1" style="width:81%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /loop -->
                        <div class="review_list_score_container hp_subscore_explanation_container">
                            <div class="v2_review-scores__wrapper ugc-sub-scores">
                                <div class=" v2_review-scores__body v2_review-scores__body--compared_to_average   ">


                                    <div class="v2_review-scores__body__legend ">
                                        <span class="v2_review-scores__body__legend__rating_better">
                                            <svg class="bk-icon -iconset-arrow_up_bold" fill="#006607" height="14"
                                                width="14" viewBox="0 0 128 128">
                                                <path
                                                    d="M101.7 61.7a8 8 0 0 1-11.4 0L72 43.3V104a8 8 0 0 1-16 0V43.3L37.7 61.7a8 8 0 0 1-11.4-11.4L64 12.7l37.7 37.6a8 8 0 0 1 0 11.4z">
                                                </path>
                                            </svg>
                                            High score for Dhaka
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="hp_location_block__header_title">
                            Select topics to read reviews:
                        </div>
                        <div class="row mt-3">
                            <div class="col-9">
                                <div
                                    class="bui-inline-container--topics-wrapper bui-group bui-group--inline bui-spacer--large">
                                    <label class="bui-input-checkbutton">
                                        <input class="bui-input-checkbutton__input" type="checkbox">
                                        <span class="bui-input-checkbutton__item">
                                            Spa
                                            <svg class="bk-icon -iconset-plus bui-input-checkbutton__check" height="16"
                                                width="16" viewBox="0 0 128 128">
                                                <path
                                                    d="M108 60H68V20a4 4 0 0 0-8 0v40H20a4 4 0 0 0 0 8h40v40a4 4 0 0 0 8 0V68h40a4 4 0 0 0 0-8z">
                                                </path>
                                            </svg>
                                            <svg class="bk-icon -iconset-close bui-input-checkbutton__uncheck"
                                                height="16" width="16" viewBox="0 0 128 128">
                                                <path
                                                    d="M69.7 64l33.1-33.2a4 4 0 0 0-5.6-5.6L64 58.3 30.8 25.2a4 4 0 1 0-5.6 5.6L58.3 64 25.2 97.2a4 4 0 1 0 5.6 5.6L64 69.7l33.2 33.1a4 4 0 0 0 5.6-5.6z">
                                                </path>
                                            </svg>
                                        </span>
                                    </label>
                                    <label class="bui-input-checkbutton">
                                        <input class="bui-input-checkbutton__input" type="checkbox">
                                        <span class="bui-input-checkbutton__item">
                                            Room
                                            <svg class="bk-icon -iconset-plus bui-input-checkbutton__check" height="16"
                                                width="16" viewBox="0 0 128 128">
                                                <path
                                                    d="M108 60H68V20a4 4 0 0 0-8 0v40H20a4 4 0 0 0 0 8h40v40a4 4 0 0 0 8 0V68h40a4 4 0 0 0 0-8z">
                                                </path>
                                            </svg>
                                            <svg class="bk-icon -iconset-close bui-input-checkbutton__uncheck"
                                                height="16" width="16" viewBox="0 0 128 128">
                                                <path
                                                    d="M69.7 64l33.1-33.2a4 4 0 0 0-5.6-5.6L64 58.3 30.8 25.2a4 4 0 1 0-5.6 5.6L58.3 64 25.2 97.2a4 4 0 1 0 5.6 5.6L64 69.7l33.2 33.1a4 4 0 0 0 5.6-5.6z">
                                                </path>
                                            </svg>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="hp-featured_reviews-bottom text-end">
                                    <button class="bui-button bui-button--secondary" type="button"
                                        href="#blockdisplay4">
                                        <span class="bui-button__text">
                                            Read all reviews
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /Guest reviews -->

                <!-- Hotel Surroundings -->
                <div class="row mt-5">

                    <!-- Header -->
                    <div class="col-12">
                        <div class="hp_location_block__main_header bui-spacer--larger">
                            <div class="hp_location_block__header_title_and_map">
                                <div class="hp_location_block__header_title">
                                    Hotel surroundings *
                                </div>
                                <span class="show_map_surroundings">
                                    <a class=" loc_block_link_underline_fix bui-linkshow_on_map_hp_link"
                                        href="#map_opened-hotel_surroundings" style="white-space:nowrap" role="button">
                                        Excellent location - show map
                                    </a>
                                </span>
                            </div>
                            <div>
                                <button class="bui-button hp-scroll-up-to-dates" type="button">
                                    <span class="bui-button__text">See availability</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Header -->

                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hp_location_block__section_container">
                                    <div class="bui-title bui-title--strong_1 bui-spacer--large">
                                        <span class="bui-title__text">
                                            <svg class="bk-icon -streamline-sports_walking location_section_icon"
                                                height="20" width="20" viewBox="0 0 24 24">
                                                <path
                                                    d="M12.974 3.554a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0zm1.5 0a3.375 3.375 0 1 0-6.75 0 3.375 3.375 0 0 0 6.75 0zm3.675 7.496a1.488 1.488 0 0 1-1.168-.56 8.45 8.45 0 0 0-6.634-3.19A6.756 6.756 0 0 0 3.6 14.05a2.25 2.25 0 1 0 4.5 0 2.255 2.255 0 0 1 1.689-2.174l-.189-.726h-.75v.5a15.568 15.568 0 0 1-2.622 8.66 2.252 2.252 0 1 0 3.748 2.496 20.15 20.15 0 0 0 2.336-4.768l-1.111.396a7.288 7.288 0 0 1 3.018 3.838c.343 1.165 1.595 1.846 2.787 1.494a2.25 2.25 0 0 0 1.47-2.944 11.771 11.771 0 0 0-5.785-6.712l.398.788c.175-1.074.263-2.16.263-3.248v-.03h-.75l-.356.66a3.98 3.98 0 0 1 1.223 1.022 5.971 5.971 0 0 0 4.688 2.252 2.25 2.25 0 0 0-.002-4.5v.75l.6-.45-.003-.004a.75.75 0 0 0-.602-.3zm.004 1.5l-.002-.75-.6.45.003.004a.75.75 0 0 0 .6.3.75.75 0 0 1 0 1.5 4.473 4.473 0 0 1-3.513-1.687 5.48 5.48 0 0 0-1.684-1.407.75.75 0 0 0-1.106.66v.03c0 1.007-.081 2.012-.243 3.006a.75.75 0 0 0 .398.788 10.288 10.288 0 0 1 5.081 5.952.75.75 0 0 1-1.439.425A8.804 8.804 0 0 0 12 17.166a.75.75 0 0 0-1.111.396 18.65 18.65 0 0 1-2.162 4.412.752.752 0 0 1-1.252-.832 17.066 17.066 0 0 0 2.874-9.493v-.499a.75.75 0 0 0-.939-.726A3.756 3.756 0 0 0 6.6 14.048a.75.75 0 1 1-1.5.002 5.256 5.256 0 0 1 5.25-5.25 6.95 6.95 0 0 1 5.459 2.624 2.989 2.989 0 0 0 2.345 1.126z">
                                                </path>
                                            </svg>
                                            What's nearby
                                        </span>
                                    </div>
                                    <ul class="bui-list bui-list--divided bui-list--text">

                                        <li class="bui-list__item">
                                            <div class="bui-list__body">
                                                <div class="bui-list__description">
                                                    High Commission of Malaysia
                                                </div>
                                                <div
                                                    class="bui-list__item-action hp_location_block__section_list_distance">
                                                    0.2 km
                                                </div>
                                            </div>
                                        </li>

                                        <li class="bui-list__item">
                                            <div class="bui-list__body">
                                                <div class="bui-list__description">
                                                    United Hospital Dhaka
                                                </div>
                                                <div
                                                    class="bui-list__item-action hp_location_block__section_list_distance">
                                                    0.6 km
                                                </div>
                                            </div>
                                        </li>

                                        <li class="bui-list__item">
                                            <div class="bui-list__body">
                                                <div class="bui-list__description">
                                                    Embassy of the People's Republic of China
                                                </div>
                                                <div
                                                    class="bui-list__item-action hp_location_block__section_list_distance">
                                                    0.6 km
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hp_location_block__section_container">
                                    <div class="bui-title bui-title--strong_1 bui-spacer--large">
                                        <span class="bui-title__text">
                                            <svg class="bk-icon -streamline-attractions location_section_icon"
                                                height="20" width="20" viewBox="0 0 24 24">
                                                <path
                                                    d="M13.5 3a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM15 3a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zM6 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zM21 15a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-9-3.75a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zM6 15a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm10.066 1.277a7.5 7.5 0 0 1-3.077 2.05.75.75 0 0 0 .498 1.415 9 9 0 0 0 3.693-2.46.75.75 0 1 0-1.114-1.005zm1.798-6.466c.177.922.183 1.869.015 2.792a.75.75 0 1 0 1.476.268c.2-1.106.194-2.24-.019-3.344a.75.75 0 1 0-1.472.284zm-5.337-5.784a7.5 7.5 0 0 1 3.54 2.196.75.75 0 0 0 1.113-1.004 9.002 9.002 0 0 0-4.247-2.636.75.75 0 1 0-.406 1.444zM6.434 6.223a7.5 7.5 0 0 1 3.539-2.196.75.75 0 1 0-.406-1.444A9.001 9.001 0 0 0 5.32 5.219a.75.75 0 0 0 1.114 1.004zM4.636 12.69a7.602 7.602 0 0 1 0-2.878.75.75 0 1 0-1.472-.284 9.102 9.102 0 0 0 0 3.446.75.75 0 0 0 1.472-.284zm4.876 5.639a7.517 7.517 0 0 1-3.035-2.005.75.75 0 0 0-1.106 1.014 9.017 9.017 0 0 0 3.641 2.405.75.75 0 1 0 .5-1.414zM7.31 21.872A1.5 1.5 0 0 0 8.672 24h6.656a1.5 1.5 0 0 0 1.362-2.128l-3.314-8.217c-.361-.785-1.252-1.114-2.005-.767a1.5 1.5 0 0 0-.733.734l-3.343 8.283zm1.377.595l3.328-8.25-.015.033 3.313 8.217.015.033H8.672z">
                                                </path>
                                            </svg>
                                            Top attractions
                                        </span>
                                    </div>
                                    <ul class="bui-list bui-list--divided bui-list--text">

                                        <li class="bui-list__item">
                                            <div class="bui-list__body">
                                                <div class="bui-list__description">
                                                    High Commission of Canada
                                                </div>
                                                <div
                                                    class="bui-list__item-action hp_location_block__section_list_distance">
                                                    0.9 km
                                                </div>
                                            </div>
                                        </li>

                                        <li class="bui-list__item">
                                            <div class="bui-list__body">
                                                <div class="bui-list__description">
                                                    Embassy of Russian Federation
                                                </div>
                                                <div
                                                    class="bui-list__item-action hp_location_block__section_list_distance">
                                                    1 km
                                                </div>
                                            </div>
                                        </li>

                                        <li class="bui-list__item">
                                            <div class="bui-list__body">
                                                <div class="bui-list__description">
                                                    High Commission of Australia
                                                </div>
                                                <div
                                                    class="bui-list__item-action hp_location_block__section_list_distance">
                                                    1 km
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hp_location_block__section_container">
                                    <div class="bui-title bui-title--heading bui-spacer--large">
                                        <span class="bui-title__text">
                                            <svg class="bk-icon -streamline-food location_section_icon" height="20"
                                                width="20" viewBox="0 0 24 24">
                                                <path
                                                    d="M5.999.75v22.5a.75.75 0 0 0 1.5 0V.75a.75.75 0 0 0-1.5 0zm3 0V7.5a2.259 2.259 0 0 1-2.252 2.25 2.258 2.258 0 0 1-2.248-2.252V.75a.75.75 0 0 0-1.5 0V7.5a3.76 3.76 0 0 0 3.748 3.75 3.76 3.76 0 0 0 3.752-3.748V.75a.75.75 0 0 0-1.5 0zm6.75 15.75h3c1.183.046 2.203-.9 2.25-2.111a2.22 2.22 0 0 0 0-.168c-.25-6.672-.828-9.78-3.231-13.533a1.508 1.508 0 0 0-2.77.81V23.25a.75.75 0 0 0 1.5 0V1.503c0 .003.001 0 .003 0a.006.006 0 0 1 .008.002c2.21 3.45 2.75 6.354 2.99 12.773v.053a.696.696 0 0 1-.721.67L15.749 15a.75.75 0 0 0 0 1.5z">
                                                </path>
                                            </svg>
                                            Restaurants &amp; cafes
                                        </span>
                                    </div>
                                    <ul class="bui-list bui-list--divided bui-list--text">
                                        <li class="bui-list__item">
                                            <div class="bui-list__body">
                                                <div class="bui-list__description">
                                                    <span class="hp_location_block__section_list_key_tag">
                                                        Restaurant
                                                    </span> The Mandarin
                                                </div>
                                                <div
                                                    class="bui-list__item-action hp_location_block__section_list_distance">
                                                    2 km
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="hp_location_block__section_container">
                                    <div class="bui-title bui-title--strong_1 bui-spacer--large">
                                        <span class="bui-title__text">
                                            <svg class="bk-icon -streamline-mountains location_section_icon" height="20"
                                                width="20" viewBox="0 0 128 128">
                                                <path
                                                    d="M127.5 104.38l-45.33-82a4.323 4.323 0 0 0-.33-.5 10.858 10.858 0 0 0-2-2c-4.7-3.567-11.398-2.674-15 2a3.61 3.61 0 0 0-.33.5l-25.44 46-7.87-10.47a4 4 0 0 0-6.75.55l-24 46A4 4 0 0 0 4 110.31h120a4 4 0 0 0 3.5-5.93zM71.32 26.57a2.73 2.73 0 0 1 3.68-.32c.128.093.246.2.35.32L89 51.35l-7.33 6.87-2.54-2.84a7.85 7.85 0 0 0-5.83-2.68 7.88 7.88 0 0 0-5.87 2.68l-2.54 2.83-7.24-6.91zM28.61 67.79l6.21 8.28-14.51 26.24H10.6zm.84 34.52L42.83 78.1c.196-.265.358-.554.48-.86l10.34-18.7 5.86 5.6a7.78 7.78 0 0 0 5.71 2.17 7.89 7.89 0 0 0 5.56-2.67l2.52-2.83 2.53 2.83a7.85 7.85 0 0 0 5.55 2.67h.32a7.75 7.75 0 0 0 5.37-2.17l6-5.58 24.19 43.74z">
                                                </path>
                                            </svg>
                                            Natural Beauty
                                        </span>
                                    </div>
                                    <ul class="bui-list bui-list--divided bui-list--text">
                                        <li class="bui-list__item">
                                            <div class="bui-list__body">
                                                <div class="bui-list__description">
                                                    <span class="hp_location_block__section_list_key_tag">
                                                        Lake
                                                    </span> Baridhara Lake
                                                </div>
                                                <div
                                                    class="bui-list__item-action hp_location_block__section_list_distance">
                                                    0.1 km
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="hp_location_block__section_container">
                                    <div class="bui-title bui-title--strong_1 bui-spacer--large">
                                        <div class="bui-f-font-strong bui-spacer--medium">
                                            How to get to Nascent Gardenia Baridhara from Hazrat Shahjalal
                                            International Airport
                                        </div>
                                        <ul class="bui-list bui-list--divided bui-list--text">
                                            <div class="hp_location_block__dot">
                                                <svg class="bk-icon -streamline-taxi_sign location_section_icon"
                                                    height="16" width="16" viewBox="0 0 24 24">
                                                    <path
                                                        d="M21.75 15.5V8a.75.75 0 0 0-1.5 0v7.5a.75.75 0 0 0 1.5 0zm-16.5 0V8a.75.75 0 0 0-1.5 0v7.5a.75.75 0 0 0 1.5 0zM3 8.75h3a.75.75 0 0 0 0-1.5H3a.75.75 0 0 0 0 1.5zm6.75 6.75v-6a.75.75 0 0 1 1.5 0v6a.75.75 0 0 0 1.5 0v-6a2.25 2.25 0 0 0-4.5 0v6a.75.75 0 0 0 1.5 0zM9 13.25h3a.75.75 0 0 0 0-1.5H9a.75.75 0 0 0 0 1.5zm5.304-4.971l3 7.5a.75.75 0 0 0 1.392-.557l-3-7.5a.75.75 0 0 0-1.392.557zm3-.558l-3 7.5a.75.75 0 0 0 1.392.557l3-7.5a.75.75 0 0 0-1.392-.557zM.75 5h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zm0 15h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5z">
                                                    </path>
                                                </svg> Taxi
                                            </div>
                                            <div class="hp_location_block__dot">
                                                <svg class="bk-icon -streamline-transport_bus_front location_section_icon"
                                                    height="16" width="16" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.5 20.213v1.5a2.25 2.25 0 0 0 4.5 0v-1.5a.75.75 0 0 0-1.5 0v1.5a.75.75 0 0 1-1.5 0v-1.5a.75.75 0 0 0-1.5 0zm13.5 0v1.5a.75.75 0 0 1-1.5 0v-1.5a.75.75 0 0 0-1.5 0v1.5a2.25 2.25 0 0 0 4.5 0v-1.5a.75.75 0 0 0-1.5 0zm1.5-1.5a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75v-13.5a3.75 3.75 0 0 1 3.75-3.75h7.5a3.75 3.75 0 0 1 3.75 3.75v13.5zm1.5 0v-13.5c0-2.9-2.35-5.25-5.25-5.25h-7.5A5.25 5.25 0 0 0 3 5.213v13.5a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25zM9.75 4.463h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm-6 3h16.5l-.75-.75v7.5l.75-.75H3.75l.75.75v-7.5l-.75.75zm0-1.5a.75.75 0 0 0-.75.75v7.5c0 .414.336.75.75.75h16.5a.75.75 0 0 0 .75-.75v-7.5a.75.75 0 0 0-.75-.75H3.75zm3 12h3a.75.75 0 0 0 0-1.5h-3a.75.75 0 0 0 0 1.5zm7.5 0h3a.75.75 0 0 0 0-1.5h-3a.75.75 0 0 0 0 1.5zm-10.5-10.5h-1.5A2.25 2.25 0 0 0 0 9.713v4.5a.75.75 0 0 0 1.5 0v-4.5a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 0 0-1.5zm16.5 1.5h1.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 0 1.5 0v-4.5a2.25 2.25 0 0 0-2.25-2.25h-1.5a.75.75 0 0 0 0 1.5z">
                                                    </path>
                                                </svg> Public transportation
                                            </div>
                                            <div class="hp_location_block__dot">
                                                <svg class="bk-icon -streamline-parking_sign location_section_icon"
                                                    height="16" width="16" viewBox="0 0 24 24">
                                                    <path
                                                        d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12zm-9.75-1.5a1.5 1.5 0 0 1-1.5 1.5H10.5l.75.75v-4.5L10.5 9h2.25a1.5 1.5 0 0 1 1.5 1.5zm1.5 0a3 3 0 0 0-3-3H10.5a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h2.25a3 3 0 0 0 3-3zm-4.5 6.75v-4.5a.75.75 0 0 0-1.5 0v4.5a.75.75 0 0 0 1.5 0z">
                                                    </path>
                                                </svg> Free parking is available.
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Hotel Surroundings -->

                <!-- Facilities -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div id="HotelFacilities" class="hotel-facilities__header bui-spacer--larger">
                            <div class="bui-title hotel-facilities__header_title">
                                <strong class="bui-title__text bui-f-font-display_two">
                                    Facilities of Nascent Gardenia Baridhara
                                </strong>
                            </div>
                            <button class="bui-button bui-button--primary hp-scroll-up-to-dates"
                                data-et-click="customGoal:eWHMBUAdRTWZBNZEYScXQOVWe:1 customGoal:eWHMBUTZUKTSdZPMXWDIbYO:5"
                                id="cta-facilities">
                                <span class="bui-button__text">
                                    See availability
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- Most Popular Faclities -->
                    <div class="col-12">
                        <div class="hotel-facilities__most-popular bui-spacer--larger">
                            <div class="hp_desc_important_facilities clearfix hp_desc_important_facilities--bui ">
                                <h3 class="bui-f-font-heading">
                                    Most popular facilities
                                </h3>
                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-shuttle hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M92 100a10 10 0 1 1-10 10 10 10 0 0 1 10-10zm-66 10a10 10 0 1 0 10-10 10 10 0 0 0-10 10zM16 56h88.2a8 8 0 0 1 7.6 5.5l7.8 26.3a8 8 0 0 1 .4 2.5V106a6 6 0 0 1-6 6h-6.1a16 16 0 1 0-31.8 0H52a16 16 0 1 0-31.8 0H16a8 8 0 0 1-8-8V64a8 8 0 0 1 8-8zm72 24l25 8-7-24H88zm-24 0h16V64H64zm-24 0h16V64H40zm-24 0h16V64H16zm28.2-44.6l8 4.5 4.4 8a.4.4 0 0 0 .6 0l1-1a.4.4 0 0 0 0-.3V37l6.5-5.9L76.1 46a1.4 1.4 0 0 0 2 .4l1-.5a1.4 1.4 0 0 0 .5-1.8L72 24.2l9-8.4a10.2 10.2 0 0 0 3-6.4A1.4 1.4 0 0 0 82.6 8a10.2 10.2 0 0 0-6.5 2.9L67.6 20l-19.8-7.5a1.4 1.4 0 0 0-1.8.6l-.5 1A1.4 1.4 0 0 0 46 16l15 11.5-5.8 6.2h-9.7a.4.4 0 0 0-.3.1l-1 1a.4.4 0 0 0 0 .6z">
                                        </path>
                                    </svg>
                                    Airport shuttle (free)
                                </div>
                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-wifi hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <circle cx="64" cy="100" r="12"></circle>
                                        <path
                                            d="M118.3 32.7A94.9 94.9 0 0 0 64 16 94.9 94.9 0 0 0 9.7 32.7a4 4 0 1 0 4.6 6.6A87 87 0 0 1 64 24a87 87 0 0 1 49.7 15.3 4 4 0 1 0 4.6-6.6zM87.7 68.4a54.9 54.9 0 0 0-47.4 0 4 4 0 0 0 3.4 7.2 47 47 0 0 1 40.6 0 4 4 0 0 0 3.4-7.2z">
                                        </path>
                                        <path
                                            d="M104 50.5a81.2 81.2 0 0 0-80 0 4 4 0 0 0 4 7 73.2 73.2 0 0 1 72 0 4 4 0 0 0 4-7z">
                                        </path>
                                    </svg>
                                    Free WiFi
                                </div>
                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-fitness hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M80 85.6L42.4 48l5.6-5.6L85.6 80zM13.2 19a4 4 0 1 0 5.7-5.7l-4-4A4 4 0 0 0 9.2 15zM56 8l-8 8-8-8L8 40l8 8-8 8 8.1 8.1 48-48zm58.9 101.1a4 4 0 1 0-5.7 5.7l4 4a4 4 0 1 0 5.7-5.7zm5.2-37l-8.1-8.2-48 48 8.2 8.1 8-8 8 8 32-32-8-8z">
                                        </path>
                                    </svg>
                                    Fitness center
                                </div>
                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-nosmoking hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M64 8a56 56 0 1 0 56 56A56 56 0 0 0 64 8zm0 104a48 48 0 0 1-36.6-79l31 31H28v8h38.3L95 100.6A47.8 47.8 0 0 1 64 112zm36.6-17l-23-23H84v-8H69.7L33 27.4A48 48 0 0 1 100.6 95zM92 64h8v8h-8zm0-10c0-7.7-5.9-14-13.2-14H78a2 2 0 0 1-2-2 10 10 0 0 0-10-10h-8a2 2 0 0 1 0-4h8a14 14 0 0 1 13.8 12c9 .6 16.2 8.4 16.2 18a2 2 0 0 1-4 0zm-8 0a2 2 0 0 1-4 0 2 2 0 0 0-2-2h-3a15 15 0 0 1-15-15 2 2 0 0 1 4 0 11 11 0 0 0 11 11h3a6 6 0 0 1 6 6z">
                                        </path>
                                    </svg>
                                    Non-smoking rooms
                                </div>
                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-gourmet hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M112 68a4 4 0 0 1-4 4H20a4 4 0 0 1 0-8h88a4 4 0 0 1 4 4zM26 56h76a2 2 0 0 0 2-2.1 40 40 0 0 0-32-37.1V16a8 8 0 0 0-16 0v.8a40 40 0 0 0-32 37 2 2 0 0 0 2 2.2zm77 24s-27 6-42.7 0C53.6 80 42 83 36 88s-20 15.5-20 15.5L32 120l19.8-19a12 12 0 0 1 8.5-3.5L81.7 96a4 4 0 0 0 2.4-.8l20.1-11.6A2 2 0 0 0 103 80z">
                                        </path>
                                    </svg>
                                    Room service
                                </div>
                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-food hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M44.1 8.9L48 44a12 12 0 0 1-12 12h-3.6l3.4 59.8a4 4 0 0 1-4 4.2h-7.6a4 4 0 0 1-4-4.2L23.6 56H20A12 12 0 0 1 8 44l3.9-35.1a1 1 0 0 1 1-.9H15a1 1 0 0 1 1 1v19a4 4 0 0 0 4 4h4.8L26 9a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1l1.2 23H36a4 4 0 0 0 4-4V9a1 1 0 0 1 1-1h2.1a1 1 0 0 1 1 .9zM60 24v48h8l-3.8 43.8a4 4 0 0 0 4 4.2h7.6a4 4 0 0 0 4-4.2L80 8h-4a16 16 0 0 0-16 16zm60 8c0-13.3-7.2-24-16-24S88 18.8 88 32c0 11 5 20.2 11.6 23l-3.4 60.8a4 4 0 0 0 4 4.2h7.6a4 4 0 0 0 4-4.2L108.4 55c6.7-2.8 11.6-12 11.6-23z">
                                        </path>
                                    </svg>
                                    Restaurant
                                </div>
                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-tea_maker hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M102 40H58a2 2 0 0 0-2 2v46a8 8 0 0 0 8 8h32a8 8 0 0 0 8-8v-.4a20 20 0 0 0 0-39.2V42a2 2 0 0 0-2-2zM73 80a4 4 0 0 1-8 0V56a4 4 0 0 1 8 0zm39-12a12 12 0 0 1-8 11.3V56.7a12 12 0 0 1 8 11.3zm0-60H16a8 8 0 0 0-8 8v96a8 8 0 0 0 8 8h96a8 8 0 0 0 8-8v-6a2 2 0 0 0-2-2H50a2 2 0 0 1-2-2V26a2 2 0 0 1 2-2h14v8h32v-8h22a2 2 0 0 0 2-2v-6a8 8 0 0 0-8-8zM28 64a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm0-24a8 8 0 1 1 8-8 8 8 0 0 1-8 8z">
                                        </path>
                                    </svg>
                                    Tea/Coffee Maker in All Rooms
                                </div>
                                <div class="important_facility">
                                    <svg class="bk-icon -iconset-coffee hp__important_facility_icon" height="20"
                                        width="20" viewBox="0 0 128 128">
                                        <path
                                            d="M104 116a4 4 0 0 1-4 4H28a4 4 0 0 1 0-8h72a4 4 0 0 1 4 4zM40 96V50a2 2 0 0 1 2-2h44a2 2 0 0 1 2 2v6.4a20 20 0 0 1 0 39.2v.4a8 8 0 0 1-8 8H48a8 8 0 0 1-8-8zm48-31.3v22.6a12 12 0 0 0 0-22.6zM49 88a4 4 0 0 0 8 0V64a4 4 0 0 0-8 0zm-1-52a4 4 0 0 0 4-4V16a4 4 0 0 0-8 0v16a4 4 0 0 0 4 4zm16 4a4 4 0 0 0 4-4V12a4 4 0 0 0-8 0v24a4 4 0 0 0 4 4zm16-4a4 4 0 0 0 4-4V16a4 4 0 0 0-8 0v16a4 4 0 0 0 4 4z">
                                        </path>
                                    </svg>
                                    Breakfast
                                </div>
                                <div class="important_facility  important_facility--cribs">
                                    <i class="important_facility--cribs__icon bicon-babycot"></i>
                                    Cribs (upon request)
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Most Popular Faclities -->

                    <!-- Faclities List -->
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="bui-spacer--large">
                                    <div class="hotel-facilities-group">
                                        <div
                                            class="bui-title bui-title--strong_1 bui-spacer--medium hotel-facilities-group__title">
                                            <div class="bui-title__text hotel-facilities-group__title-text">
                                                <span
                                                    class="bui-icon bui-icon--medium hotel-facilities-group__icon"><svg
                                                        class="bk-icon -streamline-bath" height="16" width="16"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12.75 15h10.5l-.74-.873-.664 3.986a5.25 5.25 0 0 1-5.179 4.387H7.333a5.25 5.25 0 0 1-5.18-4.387l-.663-3.986L.75 15h4.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0-.74.873l.664 3.986A6.75 6.75 0 0 0 7.334 24h9.333a6.75 6.75 0 0 0 6.659-5.64l.664-3.987a.75.75 0 0 0-.74-.873h-10.5a.75.75 0 0 0 0 1.5zM12 19.5H6v-5.25a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 .75.75v5.25zm0 1.5a1.5 1.5 0 0 0 1.5-1.5v-5.25A2.25 2.25 0 0 0 11.25 12h-4.5a2.25 2.25 0 0 0-2.25 2.25v5.25A1.5 1.5 0 0 0 6 21h6zm4.5-17.25a2.25 2.25 0 0 1 4.5 0v10.5a.75.75 0 0 0 1.5 0V3.75a3.75 3.75 0 1 0-7.5 0 .75.75 0 0 0 1.5 0zm-3 3a2.25 2.25 0 0 1 4.5 0l.75-.75h-6l.75.75zm-1.5 0c0 .414.336.75.75.75h6a.75.75 0 0 0 .75-.75 3.75 3.75 0 1 0-7.5 0z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                Bathroom
                                            </div>
                                        </div>
                                        <ul class="bui-list bui-list--text bui-list--icon hotel-facilities-group__list">

                                            <li class="bui-list__item facilities-group__list-item">
                                                <span class="bui-list__icon">
                                                    <svg class="bk-icon -streamline-checkmark" height="14" width="14"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="bui-list__body">
                                                    <div class="bui-list__description">
                                                        Towels
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="bui-list__item facilities-group__list-item">
                                                <span class="bui-list__icon">
                                                    <svg class="bk-icon -streamline-checkmark" height="14" width="14"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="bui-list__body">
                                                    <div class="bui-list__description">
                                                        Towels/Sheets (extra fee)
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="bui-list__item facilities-group__list-item">
                                                <span class="bui-list__icon">
                                                    <svg class="bk-icon -streamline-checkmark" height="14" width="14"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="bui-list__body">
                                                    <div class="bui-list__description">
                                                        Bathtub or shower
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="bui-list__item facilities-group__list-item">
                                                <span class="bui-list__icon">
                                                    <svg class="bk-icon -streamline-checkmark" height="14" width="14"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="bui-list__body">
                                                    <div class="bui-list__description">
                                                        Slippers
                                                    </div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="bui-spacer--large">
                                    <div class="hotel-facilities-group">
                                        <div
                                            class="bui-title bui-title--strong_1 bui-spacer--medium hotel-facilities-group__title">
                                            <div class="bui-title__text hotel-facilities-group__title-text">
                                                <span
                                                    class="bui-icon bui-icon--medium hotel-facilities-group__icon"><svg
                                                        class="bk-icon -streamline-food" height="16" width="16"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M5.999.75v22.5a.75.75 0 0 0 1.5 0V.75a.75.75 0 0 0-1.5 0zm3 0V7.5a2.259 2.259 0 0 1-2.252 2.25 2.258 2.258 0 0 1-2.248-2.252V.75a.75.75 0 0 0-1.5 0V7.5a3.76 3.76 0 0 0 3.748 3.75 3.76 3.76 0 0 0 3.752-3.748V.75a.75.75 0 0 0-1.5 0zm6.75 15.75h3c1.183.046 2.203-.9 2.25-2.111a2.22 2.22 0 0 0 0-.168c-.25-6.672-.828-9.78-3.231-13.533a1.508 1.508 0 0 0-2.77.81V23.25a.75.75 0 0 0 1.5 0V1.503c0 .003.001 0 .003 0a.006.006 0 0 1 .008.002c2.21 3.45 2.75 6.354 2.99 12.773v.053a.696.696 0 0 1-.721.67L15.749 15a.75.75 0 0 0 0 1.5z">
                                                        </path>
                                                    </svg>
                                                </span>Food &amp; Drink
                                            </div>
                                        </div>
                                        <ul class="bui-list bui-list--text bui-list--icon hotel-facilities-group__list">

                                            <li class="bui-list__item facilities-group__list-item">
                                                <span class="bui-list__icon">
                                                    <svg class="bk-icon -streamline-checkmark" height="14" width="14"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="bui-list__body">
                                                    <div class="bui-list__description">
                                                        Coffee house on site
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="bui-list__item facilities-group__list-item">
                                                <span class="bui-list__icon">
                                                    <svg class="bk-icon -streamline-checkmark" height="14" width="14"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="bui-list__body">
                                                    <div class="bui-list__description">
                                                        Fruit
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="bui-list__item facilities-group__list-item">
                                                <span class="bui-list__icon">
                                                    <svg class="bk-icon -streamline-checkmark" height="14" width="14"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="bui-list__body">
                                                    <div class="bui-list__description">
                                                        Kid-friendly buffet
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="bui-list__item facilities-group__list-item">
                                                <span class="bui-list__icon">
                                                    <svg class="bk-icon -streamline-checkmark" height="14" width="14"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="bui-list__body">
                                                    <div class="bui-list__description">
                                                        Kids' meals
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="bui-spacer--large">
                                    <div class="hotel-facilities-group">
                                        <div
                                            class="bui-title bui-title--strong_1 bui-spacer--medium hotel-facilities-group__title">
                                            <div class="bui-title__text hotel-facilities-group__title-text">
                                                <span class="bui-icon bui-icon--medium hotel-facilities-group__icon">
                                                    <svg class="bk-icon -streamline-lock_closed" height="16" width="16"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M19.5 16.5v5.25a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75v-10.5a.75.75 0 0 1 .75-.75h13.5a.75.75 0 0 1 .75.75v5.25zm1.5 0v-5.25A2.25 2.25 0 0 0 18.75 9H5.25A2.25 2.25 0 0 0 3 11.25v10.5A2.25 2.25 0 0 0 5.25 24h13.5A2.25 2.25 0 0 0 21 21.75V16.5zM7.5 9.75V6a4.5 4.5 0 0 1 9 0v3.75a.75.75 0 0 0 1.5 0V6A6 6 0 0 0 6 6v3.75a.75.75 0 0 0 1.5 0zM12 15a1.125 1.125 0 1 0 .004 0h-.006a.75.75 0 0 0 .004 1.5H12a.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                Safety &amp; security
                                            </div>
                                        </div>
                                        <ul class="bui-list bui-list--text bui-list--icon hotel-facilities-group__list">

                                            <li class="bui-list__item facilities-group__list-item">
                                                <span class="bui-list__icon">
                                                    <svg class="bk-icon -streamline-checkmark" height="14" width="14"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="bui-list__body">
                                                    <div class="bui-list__description">
                                                        Fire extinguishers
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="bui-list__item facilities-group__list-item">
                                                <span class="bui-list__icon">
                                                    <svg class="bk-icon -streamline-checkmark" height="14" width="14"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="bui-list__body">
                                                    <div class="bui-list__description">
                                                        CCTV outside property
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="bui-list__item facilities-group__list-item">
                                                <span class="bui-list__icon">
                                                    <svg class="bk-icon -streamline-checkmark" height="14" width="14"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="bui-list__body">
                                                    <div class="bui-list__description">
                                                        CCTV in common areas
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Faclities List -->

                    <div class="col-12">
                        <div class="inline-feedback_bordered">
                            <div>
                                <input type="hidden" value="913366">
                                <span class="inline-feedback__title">
                                    Missing some info?
                                </span>
                                <button class="inline-feedback__link a11y_btn_style">Yes</button>
                                <span class="inline-feedback__separator">/</span>
                                <button class="inline-feedback__link a11y_btn_style">No</button>
                            </div>
                            <div class="inline-feedback__hidden">
                                Awesome!
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Facilities -->

                <!-- Rouls -->
                <div class="row mt-5">
                    <div class="col-12 mb-4">
                        <div class="containh2" id="policies">
                            <h2 class="hp-section-header--with-cta clearfix">
                                <button class="txp-rules-cta bui-button bui-button--primary hp-scroll-up-to-dates">
                                    <span class="bui-button__text">
                                        See availability
                                    </span>
                                </button>
                                House rules
                                <span class="hp-section-header__subtitle">
                                    Nascent Gardenia Baridhara takes special requests - add in the next step!
                                </span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">

                        <div class="rules-box">
                            <div class="row mb-5">
                                <div class="col-4">
                                    <p class="policy_name">
                                        <span class="policy_name_icon">
                                            <svg class="bk-icon -experiments-calendar_checkin hp-policies-calendar-icon"
                                                height="20" width="20" viewBox="0 0 128 128">
                                                <path
                                                    d="m112 16h-16v-8h-8v8h-48v-8h-8v8h-16c-4.4 0-8 3.9-8 8.7v86.6c0 4.8 3.6 8.7 8 8.7h96c4.4 0 8-3.9 8-8.7v-86.6c0-4.8-3.6-8.7-8-8.7zm0 95.3a1.1 1.1 0 0 1 -.2.7h-95.6a1.1 1.1 0 0 1 -.2-.7v-71.3h96zm-80-27.3h12v12h-12zm38-16h-12v-12h12zm0 28h-12v-12h12zm26 0h-12v-12h12zm0-28h-12v-12h12zm-48-16h-20v20h20zm-6 14h-8v-8h8z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            Check-in
                                        </span>
                                    </p>
                                </div>
                                <div class="col-8 timebar__bar-col">
                                    <span class="timebar__core">
                                        <span class="timebar__base">
                                            <span class="timebar__bar"
                                                style="left:58.333333333333336%; width:42%"></span>
                                        </span>
                                        <span class="timebar__label" style="left: 58.3333%; margin-left: -21px;">
                                            2:00&nbsp;PM
                                        </span>
                                        <span class="timebar__caption" style="left: 79.3333%; margin-left: -47.5px;">
                                            From 2:00&nbsp;PM
                                            <span class="timebar__caption-pointer"></span>
                                        </span>
                                    </span>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <p class="policy_name">
                                        <span class="policy_name_icon">
                                            <svg class="bk-icon -experiments-calendar_checkout hp-policies-calendar-icon"
                                                height="20" width="20" viewBox="0 0 128 128">
                                                <path
                                                    d="m112 16h-16v-8h-8v8h-48v-8h-8v8h-16c-4.4 0-8 3.9-8 8.7v86.6c0 4.8 3.6 8.7 8 8.7h96c4.4 0 8-3.9 8-8.7v-86.6c0-4.8-3.6-8.7-8-8.7zm0 95.3a1.1 1.1 0 0 1 -.2.7h-95.6a1.1 1.1 0 0 1 -.2-.7v-71.3h96zm-68-43.3h-12v-12h12zm0 28h-12v-12h12zm26-28h-12v-12h12zm0 28h-12v-12h12zm26-28h-12v-12h12zm4 12h-20v20h20zm-6 14h-8v-8h8z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            Check-out
                                        </span>
                                    </p>
                                </div>
                                <div class="col-8 timebar__bar-col">
                                    <span class="timebar__core">
                                        <span class="timebar__base">
                                            <span class="timebar__bar"
                                                style="left:0%; width:52.083333333333336%"></span>
                                        </span>


                                        <span class="timebar__label"
                                            style="left: 52.0833%; margin-left: -24.5px;">12:30&nbsp;PM</span>


                                        <span class="timebar__caption" style="left: 26.0417%; margin-left: -49.5px;">
                                            Until 12:30&nbsp;PM
                                            <span class="timebar__caption-pointer"></span></span>

                                    </span>
                                </div>

                            </div>

                            <div class="row mt-5">
                                <div class="col-4">
                                    <p class="policy_name">
                                        <span class="policy_name_icon">
                                            <i class="fa-solid fa-circle-exclamation"></i>
                                        </span>
                                        <span>
                                            Cancellation/
                                            prepayment
                                        </span>
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p>
                                        Cancellation and prepayment policies vary according to accommodations
                                        type. Check what
                                        <a href="#availability_target" id="rm_cond_link">
                                            conditions</a> might apply to each option when making your
                                        selection.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-4">
                                    <p class="policy_name">
                                        <span class="policy_name_icon">
                                            <i class="fa-solid fa-person"></i>
                                        </span>
                                        <span>
                                            Children & Beds
                                        </span>
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p>
                                        Child policies Children of all ages are welcome.
                                        To see correct prices and occupancy info, make sure you add the correct number
                                        of children and their ages in your search.
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <p class="policy_name">
                                        <span class="policy_name_icon">
                                            <i class="fa-solid fa-money-check-dollar"></i>
                                        </span>
                                        <span>
                                            Cards accepted at this hotel
                                        </span>
                                    </p>
                                </div>
                                <div class="col-8">

                                    <p aria-label="Accepted payment methods and conditions"
                                        class="payment_methods_overall" rel="300">
                                        <img src="{{asset('frontend/assets/images/icon/master-card.png')}}"
                                            class="payment_methods_readability ppd_payment_methods_readability creditcard euromastercard"
                                            alt="Mastercard" title="Mastercard">
                                        <img src="{{asset('frontend/assets/images/icon/unionpay-card.png')}}"
                                            class="payment_methods_readability ppd_payment_methods_readability creditcard visa"
                                            alt="Visa" title="Visa">
                                        <img src="{{asset('frontend/assets/images/icon/amirican-card.png')}}"
                                            class="payment_methods_readability ppd_payment_methods_readability creditcard unionpaycreditcard"
                                            alt="UnionPay credit card" title="UnionPay credit card">
                                        <img src="{{asset('frontend/assets/images/icon/usb-card.png')}}"
                                            class="payment_methods_readability ppd_payment_methods_readability creditcard jcb"
                                            alt="JCB" title="JCB">
                                        <img src="{{asset('frontend/assets/images/icon/visa-card.png')}}"
                                            class="payment_methods_readability ppd_payment_methods_readability creditcard americanexpress"
                                            alt="American Express" title="American Express">
                                    </p>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Rouls -->

            </div>
        </div>
    </div>


    <!-- Buttom Section -->
    <div id="footer_menu_track" class="mt-4">
        <!-- Subscribe Section -->
        <div id="newsletter_form_footer_container" class="newsletter_subscribe_with_sprites">
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
    <!-- /Buttom Section -->



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
                                    <a class="bui-list-item bui-list-item--size-large" href="">
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
                                    <a class="bui-list-item bui-list-item--size-large" href="#">
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
                                    <a class="bui-list-item bui-list-item--size-large" href="#">
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
                                    <a class="bui-list-item bui-list-item--size-large" href="#">
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
                                    <a class="bui-list-item bui-list-item--size-large" href="" rel="nofollow">
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
                                    <a class="bui-list-item bui-list-item--size-large" href="" rel="nofollow">
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
    <script src="{{asset('frontend/assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Slick Slider -->
    <script src="{{asset('frontend/assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>

    <!-- Search Box -->
    <script src="{{asset('frontend/assets/js/search.min.js')}}"></script>
    <!-- <script src="{{asset('frontend/assets/js/google-map.js')}}"></script> -->

    <!-- Custom -->
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>


</body>

</html>