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
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
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


    <!-- Contant -->
    <div class="container">
        <!-- progress-top -->
        <div class="row">
            <div class="col-12">
                <div class="bui-card__content progress-top d-lg-block d-md-none">
                    <ol class="bui-nav-progress bui-nav-progress--horizontal">
                        <li class="bui-nav-progress__item ">
                            <span class="bui-nav-progress__indicator">
                                <svg class="bk-icon -streamline-checkmark_fill bui-nav-progress__icon"
                                    fill="currentColor" height="24" width="24" viewBox="0 0 128 128">
                                    <path
                                        d="M56.33 102a6 6 0 0 1-4.24-1.75L19.27 67.54A6.014 6.014 0 1 1 27.74 59l27.94 27.88 44-58.49a6 6 0 1 1 9.58 7.22l-48.17 64a5.998 5.998 0 0 1-4.34 2.39z">
                                    </path>
                                </svg>
                            </span>
                            <strong class="bui-nav-progress__title">
                                Your Selection
                            </strong>
                            <span class="bui-nav-progress__step">
                                Step 1 of 3
                            </span>
                        </li>
                        <li role="presentation" class="bui-nav-progress__divider"></li>
                        <li class="bui-nav-progress__item bui-nav-progress__item--active">
                            <span class="bui-nav-progress__indicator">
                                2
                            </span>
                            <strong class="bui-nav-progress__title">
                                Your Details
                            </strong>
                            <span class="bui-nav-progress__step">
                                Step 2 of 3
                            </span>
                        </li>
                        <li role="presentation" class="bui-nav-progress__divider"></li>
                        <li class="bui-nav-progress__item bui-nav-progress__item--active">
                            <span class="bui-nav-progress__indicator">
                                3
                            </span>
                            <strong class="bui-nav-progress__title">
                                Final Step
                            </strong>
                            <span class="bui-nav-progress__step">
                                Step 3 of 3
                            </span>
                        </li>
                    </ol>
                </div>

                <div class="bui-grid d-lg-none d-md-block">
                    <div class="bui-grid__column-full">
                        <div class="bui-panel bp-panel bp-bui-panel--stepbar">
                            <ol class="bp-stepbar_new">
                                <li class="bp-stepbar__step_1_with_cc bp-stepbar__done-step_new">
                                    <p class="bp_step_title bp_step_title_l bp_step_title_dimmed">
                                        <span class="off-screen">
                                            Completed page
                                        </span>
                                        Your Selection
                                    </p>
                                    <span class="bp_step_first bp_step_left_margin">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                </li>
                                <li class="bp-stepbar__done-step_new">
                                    <p class="bp_step_title bp_step_title_center">
                                        <span class="off-screen">
                                            Current page
                                        </span>
                                        Your Details
                                    </p>
                                    <span>
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                </li>
                                <li class="bp-stepbar__confirmation-step_new  bp-stepbar__current-step_new">
                                    <span class="off-screen">
                                        Incomplete page
                                    </span>
                                    <p class="bp_step_title bp_step_title_r bp_step_title_dimmed">
                                        Final Step</p>
                                    <span class="
                                        bp_step_right_margin
                                        ">
                                        <span class="bp-stepbar_current_dot animated flash"></span>
                                    </span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- progress-top -->

        <div class="row mt-4">
            <div class="col-lg-4">
                <section class="bui-card bp-card--booking-summary bui-u-bleed@small">
                    <div class="bui-card__content">
                        <header class="bui-card__header bui-spacer--large ">
                            <h2 class="bui-card__title">Your booking details</h2>
                        </header>
                        <div class="bui-group bui-group--large">
                            <div class="bui-group bui-group--large">
                                <div class="bui-group__item">
                                    <div
                                        class="bui-date-range bui-date-range--large bp-date-range justify-content-between">
                                        <div class="bui-date-range__item">
                                            <div id="bp-checkin-date__label" class="bui-date__label">
                                                Check-in</div>
                                            <time class="bui-date bui-date--large"
                                                aria-describedby="bp-checkin-date__label">
                                                <span class="bui-date__title">Sun, Mar 20, 2022</span>
                                                <span class="bui-date__subtitle">
                                                    From 2:00&nbsp;PM
                                                </span>
                                            </time>
                                        </div>
                                        <div class="bui-date-range__item">
                                            <div id="bp-checkout-date__label" class="bui-date__label">
                                                Check-out</div>
                                            <time class="bui-date bui-date--large"
                                                aria-describedby="bp-checkout-date__label">
                                                <span class="bui-date__title">Fri, Apr 15, 2022</span>
                                                <span class="bui-date__subtitle">
                                                    Until 12:30&nbsp;PM
                                                </span>
                                            </time>
                                        </div>
                                    </div>
                                </div>
                                <div class="bui-group__item bui-group bui-group--small">
                                    <div class="bui-group__item bui-f-font-emphasized">Total length of stay:
                                    </div>
                                    <div class="bui-group__item bui-f-font-strong">
                                        26 nights
                                    </div>
                                </div>
                                <div class="bui-group__item">
                                    <div class="bp-booking-summary__change-selection">
                                        <div
                                            class="bui-group bui-button-group bui-group--inline bui-group--vertical-align-middle">
                                            <div class="bui-group__item">
                                                <button type="button" b_data_id="open-change-dates-lightbox"
                                                    class="bui-button bui-button--tertiary bp_change_dates_link">
                                                    <span class="bui-button__text">Traveling on different
                                                        dates?</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="bui-divider">
                            <div class="bui-group bui-group--large">
                                <div class="bui-group__item">
                                    <div class="bui-group bui-group--small">
                                        <div class="bui-f-font-strong">You selected:</div>
                                        <ul class="bui-list bui-list--text bp-list--compact">
                                            <li class="bui-list__item">
                                                <div>
                                                    Deluxe Room
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bui-group__item">
                                    <div class="bp-booking-summary__change-selection">
                                        <div
                                            class="bui-group bui-button-group bui-group--inline bui-group--vertical-align-middle">
                                            <div class="bui-group__item">
                                                <a class="bui-button bui-button--tertiary" href="#">
                                                    <span class="bui-button__text">Change your
                                                        selection</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--  -->
                <section class="bui-card bp-card--price-details  e2e-price-details bui-u-bleed@small">
                    <div class="bui-card__content">

                        <div class="bui-card__text bp-price-details__total">
                            <div class="bui-group bui-group--large">
                                <div class="bui-group__item">
                                    <div class="bui-group bui-group--medium">
                                        <div class="bui-group__item">
                                            <div
                                                class="bp-price-details__total-line bp-price-details__total-line--user  e2e-price-details__total-line--user">
                                                <div class="bp-price-details__charge-type">
                                                    <div class="bp-price-details__charge-name">
                                                        Price
                                                    </div>
                                                    <div
                                                        class="bp-price-details__charge-description bp-price-details__charge-description--currency e2e-price-details__currency-type">
                                                        (your currency)
                                                    </div>
                                                </div>
                                                <div
                                                    class="bp-price-details__charge-value e2e-price-details__total-charge--user">
                                                    <span class="" style="display: inline-block;">
                                                        BDT&nbsp;154,283.99
                                                    </span> *
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bui-group__item">
                                            <hr class="bui-divider">
                                        </div>
                                        <div class="bui-group__item">
                                            <div
                                                class="bp-price-details__total-line bp-price-details__total-line--property  e2e-price-details__total-line--property">
                                                <div class="bp-price-details__charge-type">
                                                    <div class="bp-price-details__charge-name">
                                                        Propertys Currency
                                                    </div>
                                                    <div
                                                        class="bp-price-details__charge-description bp-price-details__charge-description--currency e2e-price-details__currency-type">
                                                        in US$
                                                    </div>
                                                </div>
                                                <div
                                                    class="bp-price-details__charge-value e2e-price-details__total-charge--property">
                                                    <span class="" style="display: inline-block;">
                                                        US$1,794
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="bp-price-details__price-clarification bp-price-details__price-clarification--different-currency">
                                            <span class="">(for
                                                2 guests
                                                and</span> &nbsp;
                                            <span>
                                                26 nights)
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bui-card__text">
                            <div class="bui-group bui-group--small">
                                <h3 class="bui-f-font-strong">Additional charges</h3>
                                <ul class="bp-price-details__charges">
                                    <li class="bp-price-details__charge-line">
                                        <div class="bp-price-details__charge-type ">
                                            <div class="bp-price-details__charge-name">
                                                TAX
                                            </div>
                                        </div>
                                        <div class="bp-price-details__charge-value ">
                                            BDT&nbsp;40,885
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bui-card__text">
                            <div class="bui-group bui-group--medium">
                                <hr class="bui-divider bui-spacer--medium">
                                <p class="bui-f-font-caption e2e-price-details__currency-exchange-info">
                                    <span>*</span> This price is converted to show you the
                                    approximate cost in BDT. Youll pay in <b>US$</b> or <b>BDT</b>.
                                    The exchange rate might change before you pay.
                                </p>
                                <p class="bui-f-font-caption e2e-price-details__currency-exchange-info">
                                    Keep in mind that your card issuer may charge you a foreign
                                    transaction fee.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--  -->
                <section class="bui-card bp-card--prepayment-schedule bui-u-bleed@small">
                    <div class="bui-card__content">
                        <header class="bui-card__header">
                            <h2 class="bui-card__title">
                                Your payment schedule
                            </h2>
                        </header>
                        <div class="bui-card__text">
                            <ul class="bp-schedule bp-schedule--prepayment e2e-prepayment-schedule">
                                <li class="bp-schedule__milestone">
                                    <div class="bp-schedule__milestone-name">
                                        Before you stay you will pay
                                    </div>
                                    <div class="bp-schedule__milestone-value">
                                        BDT&nbsp;5,934
                                    </div>
                                </li>
                                <li class="bp-schedule__milestone">
                                    <div class="bp-schedule__milestone-name">
                                        At the property you will pay
                                    </div>
                                    <div class="bp-schedule__milestone-value">
                                        BDT&nbsp;148,349
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!--  -->
                <section class="bui-card bp-card--cancellation-schedule bui-u-bleed@small">
                    <div class="bui-card__content">
                        <header class="bui-card__header">
                            <h2 class="bui-card__title">
                                How much will it cost to cancel?
                            </h2>
                        </header>
                        <div class="bui-card__text">
                            <ul class="bp-schedule bp-schedule--cancellation e2e-cancellation-schedule">
                                <li class="bp-schedule__milestone">
                                    <div class="bp-schedule__milestone-name">
                                        If you cancel, you will pay
                                    </div>
                                    <div class="bp-schedule__milestone-value">
                                        <span style="display: inline-block;">
                                            BDT&nbsp;5,934
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!--  -->
                <section class="bui-card bp-card--wallet-reward bui-u-bleed@small">
                    <div class="bui-card__content">
                        <header class="bui-card__header">
                            <h2 class="bui-card__title">
                                Your rewards
                            </h2>
                        </header>
                        <div class="bui-card__text">
                            <div class="bui-inline-container">
                                <div class="bui-inline-container__start">
                                    <span class="bui-icon bui-icon--large">
                                        <svg class="bk-icon -streamline-travel_credit bui-f-color-constructive"
                                            height="20" width="20" viewBox="0 0 24 24">
                                            <path
                                                d="M18.84 0c-.265 0-.528.04-.78.12L6.18 5h-.06a3.27 3.27 0 0 0-1.8 1.21 3.63 3.63 0 0 0-.7 2.11v.83a.69.69 0 0 0 .66.71.69.69 0 0 0 .66-.71v-.81a2.09 2.09 0 0 1 .58-1.45 1.92 1.92 0 0 1 1.39-.61h13.8a1.92 1.92 0 0 1 1.4.61c.373.39.581.91.58 1.45v10.18a2.12 2.12 0 0 1-.58 1.48 2 2 0 0 1-1.4.6h-6.8a.662.662 0 0 0-.63.69.65.65 0 0 0 .63.68h6.8A3.25 3.25 0 0 0 23 21a3.56 3.56 0 0 0 1-2.43V8.34a3.53 3.53 0 0 0-.67-2.07A3.29 3.29 0 0 0 21.58 5V2.85a2.77 2.77 0 0 0-.28-1.27 2.74 2.74 0 0 0-.81-1 2.67 2.67 0 0 0-1.16-.53 2.72 2.72 0 0 0-.49 0V0zM9.91 4.91l8.54-3.48c.126-.04.258-.06.39-.06.09-.01.18-.01.27 0 .217.043.42.14.59.28.179.134.323.309.42.51.099.206.15.432.15.66v2.09H9.91zm9 6.39a2 2 0 0 0-1.12.34 2 2 0 0 0-.85 2.06 2 2 0 0 0 1.57 1.58c.133.015.267.015.4 0a2 2 0 0 0 2-2.01 2.09 2.09 0 0 0-.59-1.42 2 2 0 0 0-1.41-.59v.04zm0 2.9a.91.91 0 0 1-.91-1.06.91.91 0 0 1 .25-.46.86.86 0 0 1 .45-.24h.18a.75.75 0 0 1 .33.07.77.77 0 0 1 .4.33.84.84 0 0 1 .15.49.882.882 0 0 1-.26.63.85.85 0 0 1-.62.26l.03-.02zM6.13 10.86c-3.34 0-6.13 1.5-6.13 3.65v5.84C0 22.5 2.79 24 6.13 24s6.13-1.5 6.13-3.65v-5.84c0-2.15-2.8-3.65-6.13-3.65zm0 5.84c-2.68 0-4.77-1.12-4.77-2.19 0-1.07 2.09-2.19 4.77-2.19 2.68 0 4.76 1.12 4.76 2.19 0 1.07-2.09 2.19-4.76 2.19zm0 1.46a8.3 8.3 0 0 0 4.76-1.31v.58c0 1.07-2.08 2.19-4.76 2.19-2.68 0-4.77-1.12-4.77-2.19v-.58a8.31 8.31 0 0 0 4.77 1.31zm0 2.92a8.3 8.3 0 0 0 4.76-1.31v.58c0 1.07-2.08 2.19-4.76 2.19-2.68 0-4.77-1.12-4.77-2.19v-.58a8.31 8.31 0 0 0 4.77 1.31z">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="bui-inline-container__main">
                                    <div class="bui-group bui-group--medium">
                                        <div class="bui-group__item">
                                            Earn
                                            <b class="bui-f-color-constructive">BDT&nbsp;13,662 credit</b>
                                        </div>
                                        <div class="bui-group__item">
                                            <div class="pd-wallet-credit__toggle-container">
                                                <div
                                                    class="bui-group bui-button-group bui-group--inline bui-group--vertical-align-middle">
                                                    <div class="bui-group__item">
                                                        <button type="button" class="bui-button bui-button--tertiary">
                                                            <span class="bui-button__text">See details</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-8 mt-lg-0 mt-md-5">
                <div class="row">
                    <div class="col-12">
                        <!-- tob -->
                        <div class="row">
                            <div class="col-3">
                                <div class="bp-property-details__photo-container">
                                    <img class="bp-property-details__photo w-100"
                                        src="{{asset('frontend/assets/images/single-property.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="bui-inline-container__main">
                                    <div class="bui-group">
                                        <div class="bui-group__item">
                                            <div class="bui-group bui-group--medium">
                                                <div class="bui-group__item">
                                                    <div class="bui-spacer--smaller">
                                                        <div
                                                            class="bui-group bui-group--inline bui-group--medium bui-group--vertical-align-middle bp-property-details__metadata">
                                                            <div class="bui-group__item">
                                                                <span
                                                                    class="bui-text--variant-emphasized_2 bui-text--color-neutral_alt">
                                                                    Hotel
                                                                </span>
                                                            </div>
                                                            <div class="bui-group__item">
                                                                <span class="c-accommodation-classification-rating">
                                                                    <span
                                                                        class="c-accommodation-classification-rating__badge c-accommodation-classification-rating__badge--stars ">
                                                                        <span class="bui-rating bui-rating--smaller">
                                                                            <span
                                                                                class="bui-icon bui-rating__item bui-icon--medium">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M23.555,8.729a1.505,1.505,0,0,0-1.406-.98H16.062a.5.5,0,0,1-.472-.334L13.405,1.222a1.5,1.5,0,0,0-2.81,0l-.005.016L8.41,7.415a.5.5,0,0,1-.471.334H1.85A1.5,1.5,0,0,0,.887,10.4l5.184,4.3a.5.5,0,0,1,.155.543L4.048,21.774a1.5,1.5,0,0,0,2.31,1.684l5.346-3.92a.5.5,0,0,1,.591,0l5.344,3.919a1.5,1.5,0,0,0,2.312-1.683l-2.178-6.535a.5.5,0,0,1,.155-.543l5.194-4.306A1.5,1.5,0,0,0,23.555,8.729Z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                            <span
                                                                                class="bui-icon bui-rating__item bui-icon--medium">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M23.555,8.729a1.505,1.505,0,0,0-1.406-.98H16.062a.5.5,0,0,1-.472-.334L13.405,1.222a1.5,1.5,0,0,0-2.81,0l-.005.016L8.41,7.415a.5.5,0,0,1-.471.334H1.85A1.5,1.5,0,0,0,.887,10.4l5.184,4.3a.5.5,0,0,1,.155.543L4.048,21.774a1.5,1.5,0,0,0,2.31,1.684l5.346-3.92a.5.5,0,0,1,.591,0l5.344,3.919a1.5,1.5,0,0,0,2.312-1.683l-2.178-6.535a.5.5,0,0,1,.155-.543l5.194-4.306A1.5,1.5,0,0,0,23.555,8.729Z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                            <span
                                                                                class="bui-icon bui-rating__item bui-icon--medium">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M23.555,8.729a1.505,1.505,0,0,0-1.406-.98H16.062a.5.5,0,0,1-.472-.334L13.405,1.222a1.5,1.5,0,0,0-2.81,0l-.005.016L8.41,7.415a.5.5,0,0,1-.471.334H1.85A1.5,1.5,0,0,0,.887,10.4l5.184,4.3a.5.5,0,0,1,.155.543L4.048,21.774a1.5,1.5,0,0,0,2.31,1.684l5.346-3.92a.5.5,0,0,1,.591,0l5.344,3.919a1.5,1.5,0,0,0,2.312-1.683l-2.178-6.535a.5.5,0,0,1,.155-.543l5.194-4.306A1.5,1.5,0,0,0,23.555,8.729Z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                            <span
                                                                                class="bui-icon bui-rating__item bui-icon--medium">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M23.555,8.729a1.505,1.505,0,0,0-1.406-.98H16.062a.5.5,0,0,1-.472-.334L13.405,1.222a1.5,1.5,0,0,0-2.81,0l-.005.016L8.41,7.415a.5.5,0,0,1-.471.334H1.85A1.5,1.5,0,0,0,.887,10.4l5.184,4.3a.5.5,0,0,1,.155.543L4.048,21.774a1.5,1.5,0,0,0,2.31,1.684l5.346-3.92a.5.5,0,0,1,.591,0l5.344,3.919a1.5,1.5,0,0,0,2.312-1.683l-2.178-6.535a.5.5,0,0,1,.155-.543l5.194-4.306A1.5,1.5,0,0,0,23.555,8.729Z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="bui-group__item">
                                                                <img src="{{asset('frontend/assets/images/icon/preferred-plus.svg')}}"
                                                                    height="20">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h1 class="bui-card__title bui-text--variant-headline_3">
                                                        Nascent Gardenia Baridhara
                                                    </h1>
                                                </div>

                                                <div class="bui-group__item">
                                                    <div>
                                                        <div class="bui-spacer--smaller">
                                                            <address class="bp-property-details__address">
                                                                27 Park Road, Baridhara Diplomatic Zone,
                                                                1212 Dhaka, Bangladesh
                                                            </address>
                                                        </div>
                                                        <div class="bui-f-font-caption bui-f-color-constructive">
                                                            This property has an excellent location. Guests
                                                            have rated it 9.2!
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bui-group__item">
                                                    <div
                                                        class="bui-review-score c-score bui-review-score--inline bui-review-score--smaller">
                                                        <div class="bui-review-score__badge"> 9.0 </div>
                                                        <div class="bui-review-score__content">
                                                            <div class="bui-review-score__title"> Wonderful
                                                            </div>
                                                            <div class="bui-review-score__text"> 9 reviews
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="bui-group__item">
                                                    <span class="bui-badge bui-badge--outline">
                                                        <svg class="bk-icon -streamline-transport_shuttle bp-bui-badge__icon"
                                                            height="14" width="14" viewBox="0 0 128 128">
                                                            <path
                                                                d="M108.42 55.84H44.26a9 9 0 0 0-8.94 8.94v20.67H19.58a9 9 0 0 0-8.93 8.94v14.8a9 9 0 0 0 8.93 8.94h6.47c2.2 7.332 9.928 11.491 17.26 9.291a13.861 13.861 0 0 0 9.29-9.291h22.8c2.2 7.332 9.928 11.491 17.26 9.291a13.861 13.861 0 0 0 9.29-9.291h1.53c7.658-.006 13.864-6.212 13.87-13.87V64.78a9 9 0 0 0-8.93-8.94zm.93 8.94v20.67H92.68V63.84h15.74a.94.94 0 0 1 .93.94zM68 85.45V63.84h16.68v21.61zM44.26 63.84H60v21.61H43.32V64.78c0-.52.42-.94.94-.94zM39.32 120a5.87 5.87 0 1 1 5.87-5.87 5.88 5.88 0 0 1-5.87 5.87zm49.36 0a5.87 5.87 0 1 1 5.87-5.87 5.87 5.87 0 0 1-5.87 5.87zm14.8-9.87H102c-2.2-7.332-9.928-11.491-17.26-9.291a13.861 13.861 0 0 0-9.29 9.291H52.6c-2.2-7.332-9.928-11.491-17.26-9.291a13.861 13.861 0 0 0-9.29 9.291h-6.47a.94.94 0 0 1-.93-.94v-14.8a.94.94 0 0 1 .93-.94h89.77v10.81a5.87 5.87 0 0 1-5.87 5.87zm-92.29-82a4 4 0 0 1 5.467-1.451l.003.001 6.69 3.88 12.33-6-13.79-8a4 4 0 0 1 4-6.91l18.4 10.73 13.07-6.4a4.003 4.003 0 1 1 3.52 7.19l-36 17.6a4 4 0 0 1-3.76-.13l-8.54-5a4 4 0 0 1-1.39-5.52z">
                                                            </path>
                                                        </svg>
                                                        Airport shuttle
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="bui-group__item">
                                                    <span class="bui-badge bui-badge--outline">
                                                        <svg class="bk-icon -streamline-parking_sign bp-bui-badge__icon"
                                                            height="14" width="14" viewBox="0 0 24 24">
                                                            <path
                                                                d="M22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12zm-9.75-1.5a1.5 1.5 0 0 1-1.5 1.5H10.5l.75.75v-4.5L10.5 9h2.25a1.5 1.5 0 0 1 1.5 1.5zm1.5 0a3 3 0 0 0-3-3H10.5a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h2.25a3 3 0 0 0 3-3zm-4.5 6.75v-4.5a.75.75 0 0 0-1.5 0v4.5a.75.75 0 0 0 1.5 0z">
                                                            </path>
                                                        </svg>
                                                        Free parking
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="bui-group__item">
                                                    <span class="bui-badge bui-badge--outline">
                                                        <svg class="bk-icon -streamline-food bp-bui-badge__icon"
                                                            height="14" width="14" viewBox="0 0 24 24">
                                                            <path
                                                                d="M5.999.75v22.5a.75.75 0 0 0 1.5 0V.75a.75.75 0 0 0-1.5 0zm3 0V7.5a2.259 2.259 0 0 1-2.252 2.25 2.258 2.258 0 0 1-2.248-2.252V.75a.75.75 0 0 0-1.5 0V7.5a3.76 3.76 0 0 0 3.748 3.75 3.76 3.76 0 0 0 3.752-3.748V.75a.75.75 0 0 0-1.5 0zm6.75 15.75h3c1.183.046 2.203-.9 2.25-2.111a2.22 2.22 0 0 0 0-.168c-.25-6.672-.828-9.78-3.231-13.533a1.508 1.508 0 0 0-2.77.81V23.25a.75.75 0 0 0 1.5 0V1.503c0 .003.001 0 .003 0a.006.006 0 0 1 .008.002c2.21 3.45 2.75 6.354 2.99 12.773v.053a.696.696 0 0 1-.721.67L15.749 15a.75.75 0 0 0 0 1.5z">
                                                            </path>
                                                        </svg>
                                                        2 Restaurants On Site
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- top -->
                        <!-- Form -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <form class="book-form" action="#" method="post">

                                    <div class="row">

                                        <div class="col-12">
                                            <section class="bui-card bp-card--user-details bg_form">
                                                <div class="bui-card__content">
                                                    <header class="bui-inline-container">
                                                        <div class="bui-inline-container__main">
                                                            <div class="bui-group bui-group--small">
                                                                <div class="bui-group__item">
                                                                    <h2 class="bui-text--variant-headline_3">
                                                                        Enter Your Info
                                                                    </h2>
                                                                </div>
                                                                <div class="bui-group__item">
                                                                    <div
                                                                        class="required_fields_description bui-spacer--large">
                                                                        Almost done! Just fill in the <b>*</b> required
                                                                        info
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </header>



                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="bp-field-container">
                                                                <label for="firstname" class="bp_form__field__label">
                                                                    Country/Region
                                                                    <abbr class="mandatory-asterisk"
                                                                        title="Required">*</abbr>
                                                                </label>
                                                                <select name=""
                                                                    class="bp_form__field bp_input_select bp_form__field__input bp-field-container--w-60"
                                                                    required="">
                                                                    <option value="">-- Select --
                                                                    </option>
                                                                    <option value="MasterCard">
                                                                        Bangladesh
                                                                    </option>

                                                                </select>
                                                                <div
                                                                    class="bui-text--variant-body_2 bui-text--color-neutral_alt">
                                                                    No address needed for this reservation</div>

                                                            </div>


                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="bui-card bp-card--personal-details-reassurance">
                                                                <div class="bui-card__content">
                                                                    <div class="bui-group bui-group--large">
                                                                        <div
                                                                            class="personal-details-reassurance__link-container">
                                                                            <svg class="bk-icon -streamline-account_user"
                                                                                fill="#6B6B6B" height="14" width="14"
                                                                                viewBox="0 0 24 24" role="presentation"
                                                                                aria-hidden="true" focusable="false">
                                                                                <path
                                                                                    d="M16.5 9.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0zm1.5 0a6 6 0 1 0-12 0 6 6 0 0 0 12 0zm1.445 10.597c-4.086-4.111-10.732-4.132-14.844-.046l-.046.046a.75.75 0 0 0 1.064 1.058l.04-.04a8.996 8.996 0 0 1 12.722.04.75.75 0 0 0 1.064-1.058zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
                                                                                </path>
                                                                            </svg>
                                                                            <a class="bui-link bui-f-font-caption"
                                                                                href="#">
                                                                                Change
                                                                            </a>
                                                                        </div>
                                                                        <ul
                                                                            class="bui-list bui-list--text personal-details-reassurance__details-container">
                                                                            <li class="bui-list__item">
                                                                                <div class="bui-f-font-strong">
                                                                                    Name
                                                                                </div>
                                                                                <div
                                                                                    class="bp-u-text-ellipsis bui-f-color-grayscale">
                                                                                    Elias
                                                                                    Bhuyan
                                                                                </div>
                                                                            </li>
                                                                            <li class="bui-list__item">
                                                                                <div class="bui-f-font-strong">
                                                                                    Email
                                                                                </div>
                                                                                <div
                                                                                    class="bp-u-text-ellipsis bui-f-color-grayscale">
                                                                                    amdadulhaquemelon15442@gmail.com
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="bp_form__field bp_form__field--email">
                                                                    <label for="email" class="bp_form__field__label">
                                                                        Telephone ( mobile number preferred )
                                                                        <abbr class="mandatory-asterisk"
                                                                            title="Required">
                                                                            *</abbr>
                                                                    </label>

                                                                    <div class="c-input-phone-country">
                                                                        <input id="phone"
                                                                            class="bp_form__field__input bp_input_text pl-4"
                                                                            type="text" name="phone" required=""
                                                                            value="" size="20" placeholder="+880">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 mt-3">
                                                                <div class="bui-form__group">
                                                                    <label class="bui-checkbox  ">
                                                                        <input type="checkbox"
                                                                            class="bui-checkbox__input" value="1">
                                                                        <span class="bui-checkbox__label">
                                                                            Yes, I want free paperless confirmation
                                                                            (recommended)
                                                                            We will text you a link to download our app
                                                                        </span>
                                                                    </label>

                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                            </section>
                                        </div>

                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <section class="bui-card bp-card--unit-details bg_form">
                                                <div class="bui-card__content">
                                                    <header class="bui-card__header payment-header mb-3">
                                                        <h2 class="bui-card__title bui-text--variant-headline_3">
                                                            How do you want to pay?
                                                        </h2>
                                                        <span id="no-card-faq__description" class="bui-u-sr-only">â€“
                                                            opens a dialog
                                                            box</span>
                                                        <button class="bui-button bui-button--tertiary bp-button"
                                                            type="button">
                                                            <span class="bui-button__icon js-button__icon">
                                                                <svg class="bk-icon -streamline-question_mark_circle"
                                                                    height="24" width="24" viewBox="0 0 24 24"
                                                                    role="presentation" aria-hidden="true"
                                                                    focusable="false">
                                                                    <path
                                                                        d="M9.75 9a2.25 2.25 0 1 1 3 2.122 2.25 2.25 0 0 0-1.5 2.122v1.006a.75.75 0 0 0 1.5 0v-1.006c0-.318.2-.602.5-.708A3.75 3.75 0 1 0 8.25 9a.75.75 0 1 0 1.5 0zM12 16.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span class="bui-button__text js-button__text">No card?
                                                            </span>

                                                        </button>
                                                    </header>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="bp_form__field bp_form__field--firstname">
                                                                <label for="firstname" class="bp_form__field__label">
                                                                    Cardholders name
                                                                    <abbr class="mandatory-asterisk"
                                                                        title="Required">*</abbr>
                                                                </label>
                                                                <input type="text" name="firstname"
                                                                    class="bp_input_text bp_form__field__input" value=""
                                                                    size="20">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="bp-field-container">
                                                                <label for="firstname" class="bp_form__field__label">
                                                                    Card Typ
                                                                    <abbr class="mandatory-asterisk"
                                                                        title="Required">*</abbr>
                                                                </label>
                                                                <select name=""
                                                                    class="bp_form__field bp_input_select bp_form__field__input bp-field-container--w-60"
                                                                    required="">
                                                                    <option value="">-- Select --
                                                                    </option>
                                                                    <option value="MasterCard">
                                                                        MasterCard
                                                                    </option>
                                                                    <option value="Visa">
                                                                        Visa
                                                                    </option>
                                                                    <option value="UnionPay credit card">
                                                                        UnionPay credit card
                                                                    </option>
                                                                    <option value="American Express">
                                                                        American Express
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="bp_form__field bp_form__field--firstname">
                                                                <label for="firstname" class="bp_form__field__label">
                                                                    Card Number
                                                                    <abbr class="mandatory-asterisk"
                                                                        title="Required">*</abbr>
                                                                </label>
                                                                <input type="text" name=""
                                                                    class="bp_input_text bp_form__field__input" value=""
                                                                    size="20">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="bp_form__field bp_form__field--firstname">
                                                                <label for="firstname" class="bp_form__field__label">
                                                                    Expiration date
                                                                    <abbr class="mandatory-asterisk"
                                                                        title="Required">*</abbr>
                                                                </label>
                                                                <input type="date" name="firstname"
                                                                    class="bp_input_text bp_form__field__input" value=""
                                                                    size="20">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- Form -->
                        <div class="row mt-3">
                            <div class="col-12">


                                <div
                                    class="bui-group bui-button-group bui-group--vertical-align-middle bui-group--inline bui-group--align-end ">

                                    <div class="bui-group__item">
                                        <button
                                            class="bui-button bui-button--secondary bui-button--large e2e-booking-overview__trigger bp-button"
                                            type="button" name="review">
                                            <span class="bui-button__text"> Check your booking </span>
                                        </button>
                                    </div>
                                    <div class="bui-group__item">
                                        <button
                                            class="bui-button  bui-button--primary bui-button--large  e2e-bp-submit-button--next-step bp-button"
                                            type="submit" name="book">
                                            <span class="bui-button__text ">
                                                Next: Final details
                                            </span>
                                            <span class="bui-button__icon bui-button__icon--end ">
                                                <svg class="bk-icon -streamline-arrow_nav_right" height="24" width="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M9.45 6c.2 0 .39.078.53.22l5 5c.208.206.323.487.32.78a1.1 1.1 0 0 1-.32.78l-5 5a.75.75 0 0 1-1.06 0 .74.74 0 0 1 0-1.06L13.64 12 8.92 7.28a.74.74 0 0 1 0-1.06.73.73 0 0 1 .53-.22zm4.47 5.72zm0 .57z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="bui-button__loader">
                                                <div class="bui-spinner bui-spinner--light ">
                                                    <div class="bui-spinner__inner"></div>
                                                </div>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bui-card bp-card--transparent bp-card--booking-conditions mt-3">
                                    <div class="bui-card__content">
                                        <div class="bui-card__text bui-u-text-right">
                                            <a class="bui-link e2e-booking-conditions__link " href="#" target="_blank"
                                                id="bookconditions">
                                                What are my booking conditions?
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
    <script src="{{asset('frontend/assets/js/google-map.js')}}"></script>

    <!-- Custom -->
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>

</body>

</html>