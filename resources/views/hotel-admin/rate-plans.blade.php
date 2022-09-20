<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="msapplication-config" content="none">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<title>Obocas Admin</title>
    <!-- favicon Icon -->
    <link rel="shortcut icon" href="{{ asset("/hotel-admin/assets/images/favicon.png") }}" type="image/png" />
	<!-- Bootstrap v5.0.0-beta3 -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/bootstrap.min.css") }}">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/all.min.css") }}">

	<link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/style.min.css") }}">

    <link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/pages/rate-plans.min.css") }}">

</head>


<body>
    <div id="main-container" class="container-fluid tfa_phone_alt container-fluid--color">
        <main id="content">
            <div class="page-body ">

                <div id="legacy-banners-new-hp" class="bui-u-hidden"></div>

                <div class="">

                    <!-- Header -->
                    <header class="ext-header ext-header--animated">

                        <!-- Header Top -->
                        <div class="ext-header__container">
                            <section class="ext-header__logo-container">
                                <a href="{{ url("#") }}">
                                    <img src="{{ asset("/hotel-admin/assets/images/logo.png") }}" alt="Logo" class="ext-header__logo">
                                </a>
                                <div data-test-id="property-details" class="ext-header__property-details">
                                    time squers - 7962700
                                </div>
                            </section>
                            <div class="ext-header__side-items">
                                <div class="ext-search__bar">
                                    <button class="ext-search-trigger ext-search-trigger--md-hidden">
                                        <svg height="20" fill="currentColor" viewBox="0 0 24 24" role="presentation"
                                            focusable="false" width="20" aria-hidden="true"
                                            class="ext-search-trigger__icon bk-icon -streamline-magnifying_glass">
                                            <path
                                                d="M17.464 6.56a8.313 8.313 0 1 1-15.302 6.504A8.313 8.313 0 0 1 17.464 6.56zm1.38-.586C16.724.986 10.963-1.339 5.974.781.988 2.9-1.337 8.662.783 13.65c2.12 4.987 7.881 7.312 12.87 5.192 4.987-2.12 7.312-7.881 5.192-12.87zM15.691 16.75l7.029 7.03a.75.75 0 0 0 1.06-1.06l-7.029-7.03a.75.75 0 0 0-1.06 1.06z">
                                            </path>
                                        </svg>
                                    </button>
                                    <div class="ext-search__wrap">
                                        <div class="ext-search__input-container">
                                            <div class="ext-search-input__wrap">
                                                <input type="text" name="" placeholder="Search for reservations" value="" class="ext-search-input">
                                                <button type="button" class="ext-search-input__icon-wrap">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" height="16"
                                                        aria-hidden="true" width="16" focusable="false"
                                                        role="presentation"
                                                        class="ext-search-input__icon ext-search-input__icon--white bk-icon -streamline-magnifying_glass">
                                                        <path
                                                            d="M17.464 6.56a8.313 8.313 0 1 1-15.302 6.504A8.313 8.313 0 0 1 17.464 6.56zm1.38-.586C16.724.986 10.963-1.339 5.974.781.988 2.9-1.337 8.662.783 13.65c2.12 4.987 7.881 7.312 12.87 5.192 4.987-2.12 7.312-7.881 5.192-12.87zM15.691 16.75l7.029 7.03a.75.75 0 0 0 1.06-1.06l-7.029-7.03a.75.75 0 0 0-1.06 1.06z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <a href="{{ url("") }}" class="ext-search-input__cancel-link">
                                                <span>Cancel</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="ext-action-menu__wrap">

                                    <!-- Dropdown Hotel -->
                                    <div class="ext-action-menu__item">

                                        <button class="ext-action-menu__section" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="ext-action-menu__avatar"
                                                style="background-image: url(assets/images/hotel.jfif);">
                                            </div>
                                            <div class="ext-action-menu__text">
                                                User Photo
                                            </div>
                                        </button>

                                        <div class="ext-action-dropdown__menu dropdown-menu dropdown-menu-end">
                                            <div class="ext-action-dropdown__content">
                                                <ul class="ext-action-dropdown__content ext-action-dropdown__content--scrollable ext-action-dropdown__content--no-margin-bottom">

                                                    <li class="">
                                                        <a href="{{ url("#") }}" class="ext-action-dropdown__item ext-action-property__wrap">
                                                            <div>
                                                                <img src="{{ asset("/hotel-admin/assets/images/hotel.jfif") }}" width="32px" height="32px" class="ext-action-property__avatar">
                                                            </div>
                                                            <div class="ext-action-property__body">
                                                                <div>
                                                                    square hotel
                                                                </div>
                                                                <div>793528</div>
                                                                <div>
                                                                    View your property's listing on Booking.com
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="">
                                                        <a href="{{ url("#") }}" class="ext-action-dropdown__item ext-action-property__wrap">
                                                            <div>
                                                                <img src="{{ asset("/hotel-admin/assets/images/hotel.jfif") }}" width="32px" height="32px" class="ext-action-property__avatar">
                                                            </div>
                                                            <div class="ext-action-property__body">
                                                                <div>
                                                                    square hotel
                                                                </div>
                                                                <div>
                                                                    7937459
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="ext-action-groups-link">
                                                    <a href="{{ url("#") }}" class="ext-action-dropdown__item ext-action-property__wrap">
                                                        <div class="ext-action-property__avatar ext-action-property__group-icon">
                                                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" class="bk-icon -streamline-city" slot="icon">
                                                                <path
                                                                    d="M2.75 6h9.5a.25.25 0 0 1-.25-.25v17.5l.75-.75H2.25l.75.75V5.75a.25.25 0 0 1-.25.25zm0-1.5c-.69 0-1.25.56-1.25 1.25v17.5c0 .414.336.75.75.75h10.5a.75.75 0 0 0 .75-.75V5.75c0-.69-.56-1.25-1.25-1.25h-9.5zm3-1.5h3.5A.25.25 0 0 1 9 2.75v2.5l.75-.75h-4.5l.75.75v-2.5a.25.25 0 0 1-.25.25zm0-1.5c-.69 0-1.25.56-1.25 1.25v2.5c0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75v-2.5c0-.69-.56-1.25-1.25-1.25h-3.5zM5.25 9h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zm0 3h4.5a.75.75 0 0 0 0-1.5h-4.5a.75.75 0 0 0 0 1.5zM7.5.75v1.5a.75.75 0 0 0 1.5 0V.75a.75.75 0 0 0-1.5 0zM15.75 24h6a.75.75 0 0 0 .75-.75V10.5A1.5 1.5 0 0 0 21 9h-4.5a1.5 1.5 0 0 0-1.5 1.5v12.75a.75.75 0 0 0 1.5 0V10.5H21v12.75l.75-.75h-6a.75.75 0 0 0 0 1.5zM19.5 8.25v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0zM.75 24h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="ext-action-property__body">
                                                            <span>Go to group home</span>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- /Dropdown Hotel -->

                                    <!-- Dropdown Account -->
                                    <div class="ext-action-menu__item">
                                        <!-- Toggle Botton -->
                                        <button class="ext-action-menu__section" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="ext-action-menu__avatar ext-action-menu__avatar--account">
                                                <svg height="20" viewBox="0 0 24 24" fill="currentColor" width="20"
                                                    aria-hidden="true" role="presentation" focusable="false" slot="icon"
                                                    class="ext-action-menu__avatar--icon bk-icon -streamline-account_user">
                                                    <path
                                                        d="M16.5 9.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0zm1.5 0a6 6 0 1 0-12 0 6 6 0 0 0 12 0zm1.445 10.597c-4.086-4.111-10.732-4.132-14.844-.046l-.046.046a.75.75 0 0 0 1.064 1.058l.04-.04a8.996 8.996 0 0 1 12.722.04.75.75 0 0 0 1.064-1.058zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="ext-action-menu__text">
                                                <span>Account</span>
                                            </div>
                                        </button>
                                        <!-- Toggle Botton -->

                                        <div class="ext-action-dropdown__menu dropdown-menu dropdown-menu-end">
                                            <div>
                                                <ul class="ext-action-dropdown__content">

                                                    <li>
                                                        <a href="{{ url("change-password.html") }}" class="ext-action-dropdown__item">
                                                            <span>
                                                                <svg width="20" height="20" fill="currentColor"
                                                                    viewBox="0 0 24 24" role="presentation"
                                                                    aria-hidden="true" focusable="false"
                                                                    class="ext-action-dropdown__icon bk-icon -streamline-key"
                                                                    slot="icon">
                                                                    <path
                                                                        d="M13.348 15.047l2.545-2.545-.724.194 1.752.47a2.322 2.322 0 0 0 2.843-2.841l-.47-1.753-.195.724.784-.784-.724.194 1.752.47a2.321 2.321 0 0 0 2.842-2.842l-.468-1.752-.195.724A3.106 3.106 0 1 0 18.697.914l-9.741 9.74.823-.16a7.033 7.033 0 1 0 3.73 3.73l-.16.823zm-1.06-1.06a.75.75 0 0 0-.16.823 5.532 5.532 0 0 1-7.254 7.254 5.533 5.533 0 1 1 4.32-10.188.75.75 0 0 0 .822-.16l9.741-9.742a1.606 1.606 0 1 1 2.273 2.272.75.75 0 0 0-.195.724l.47 1.752a.821.821 0 0 1-1.006 1.006l-1.752-.47a.75.75 0 0 0-.724.194l-.784.784a.75.75 0 0 0-.194.724l.47 1.752a.822.822 0 0 1-1.007 1.005l-1.75-.47a.75.75 0 0 0-.725.195l-2.545 2.545zM6.743 18.08a.821.821 0 1 1-1.642 0 .821.821 0 0 1 1.642 0zm1.5 0a2.321 2.321 0 1 0-4.642 0 2.321 2.321 0 0 0 4.642 0z">
                                                                    </path>
                                                                </svg>
                                                                Change password
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ url("notification-settings.html") }}" class="ext-action-dropdown__item">
                                                            <span>
                                                                <svg width="20" height="20" fill="currentColor"
                                                                    viewBox="0 0 24 24" role="presentation"
                                                                    aria-hidden="true" focusable="false"
                                                                    class="ext-action-dropdown__icon bk-icon -streamline-bell_normal"
                                                                    slot="icon">
                                                                    <path
                                                                        d="M9.28 21.961a2.837 2.837 0 0 0 5.445 0 .75.75 0 1 0-1.44-.422 1.337 1.337 0 0 1-2.565 0 .75.75 0 1 0-1.44.422zM12.75 3V.75a.75.75 0 0 0-1.5 0V3a.75.75 0 0 0 1.5 0zm-.75.75a6.75 6.75 0 0 1 6.75 6.75c0 3.154.29 5.436.785 6.994.323 1.02.684 1.59.995 1.84L21 18H3l.59 1.212c.248-.315.572-.958.88-2 .49-1.66.78-3.872.78-6.712A6.75 6.75 0 0 1 12 3.75zm0-1.5a8.25 8.25 0 0 0-8.25 8.25c0 2.702-.272 4.772-.72 6.288-.254.864-.493 1.336-.62 1.5A.75.75 0 0 0 3 19.5h18c.708 0 1.022-.892.47-1.335.019.016-.008-.015-.07-.113-.14-.223-.29-.553-.435-1.012-.443-1.396-.715-3.529-.715-6.54A8.25 8.25 0 0 0 12 2.25z">
                                                                    </path>
                                                                </svg>
                                                                Notification settings
                                                            </span>
                                                        </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="{{ url("contacts.html") }}" class="ext-action-dropdown__item">
                                                            <span>
                                                                <svg width="20" height="20" fill="currentColor"
                                                                    viewBox="0 0 24 24" role="presentation"
                                                                    aria-hidden="true" focusable="false"
                                                                    class="ext-action-dropdown__icon bk-icon -streamline-group"
                                                                    slot="icon">
                                                                    <path
                                                                        d="M6 6a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-3 3A4.5 4.5 0 0 0 0 13.5v2.25c0 .414.336.75.75.75h1.5l-.744-.657.75 6A.75.75 0 0 0 3 22.5h3A.75.75 0 0 0 6 21H3l.744.657-.75-6A.75.75 0 0 0 2.25 15H.75l.75.75V13.5a3 3 0 0 1 3-3 .75.75 0 0 0 0-1.5zM21 6a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-3 4.5a3 3 0 0 1 3 3v2.25l.75-.75h-1.5a.75.75 0 0 0-.744.657l-.75 6L21 21h-3a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 .744-.657l.75-6-.744.657h1.5a.75.75 0 0 0 .75-.75V13.5A4.5 4.5 0 0 0 19.5 9a.75.75 0 0 0 0 1.5zm-5.25-6.75a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0zm1.5 0a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0zM18 13.5a6 6 0 0 0-12 0v2.25c0 .414.336.75.75.75H9l-.746-.675.75 7.5A.75.75 0 0 0 9.75 24h4.5a.75.75 0 0 0 .746-.675l.75-7.5L15 16.5h2.25a.75.75 0 0 0 .75-.75V13.5zm-1.5 0v2.25l.75-.75H15a.75.75 0 0 0-.746.675l-.75 7.5.746-.675h-4.5l.746.675-.75-7.5A.75.75 0 0 0 9 15H6.75l.75.75V13.5a4.5 4.5 0 1 1 9 0z">
                                                                    </path>
                                                                </svg>
                                                                Contacts
                                                            </span>
                                                        </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="{{ url("security.html") }}" class="ext-action-dropdown__item">
                                                            <span>
                                                                <svg width="20" height="20" fill="currentColor"
                                                                    viewBox="0 0 24 24" role="presentation"
                                                                    aria-hidden="true" focusable="false"
                                                                    class="ext-action-dropdown__icon bk-icon -streamline-settings"
                                                                    slot="icon">
                                                                    <path
                                                                        d="M9.989 2.94a2.707 2.707 0 0 0 4.022 0l.943-1.035a1.21 1.21 0 0 1 2.107.87l-.071 1.4a2.708 2.708 0 0 0 2.837 2.841l1.401-.071a1.209 1.209 0 0 1 .87 2.105l-1.042.94a2.71 2.71 0 0 0 0 4.022l1.042.94a1.209 1.209 0 0 1-.873 2.104l-1.4-.071a2.708 2.708 0 0 0-2.843 2.843l.071 1.4a1.208 1.208 0 0 1-2.1.866l-.938-1.038a2.709 2.709 0 0 0-4.02 0l-.944 1.04a1.209 1.209 0 0 1-2.102-.87l.072-1.395a2.708 2.708 0 0 0-2.844-2.844l-1.399.071a1.208 1.208 0 0 1-.875-2.102l1.04-.94a2.71 2.71 0 0 0 0-4.022l-1.039-.943a1.208 1.208 0 0 1 .87-2.102l1.397.071a2.708 2.708 0 0 0 2.845-2.85l-.067-1.396a1.209 1.209 0 0 1 2.102-.87l.94 1.037zm1.113-1.005l-.94-1.038A2.71 2.71 0 0 0 5.45 2.845l.067 1.402a1.208 1.208 0 0 1-1.27 1.275l-1.401-.071a2.71 2.71 0 0 0-1.95 4.71l1.04.945a1.21 1.21 0 0 1 .001 1.797l-1.04.94a2.708 2.708 0 0 0 1.957 4.713l1.399-.071a1.208 1.208 0 0 1 1.269 1.268l-.072 1.4a2.709 2.709 0 0 0 4.71 1.951l.945-1.04a1.209 1.209 0 0 1 1.796-.002l.942 1.04a2.71 2.71 0 0 0 4.708-1.946l-.072-1.404a1.208 1.208 0 0 1 1.268-1.269l1.401.071a2.709 2.709 0 0 0 1.954-4.715l-1.043-.94a1.21 1.21 0 0 1 0-1.795l1.042-.941a2.71 2.71 0 0 0-1.949-4.716l-1.401.071a1.208 1.208 0 0 1-1.264-1.267l.071-1.4A2.709 2.709 0 0 0 13.843.897L12.9 1.933a1.207 1.207 0 0 1-1.796.003zM15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0zm1.5 0a5.25 5.25 0 1 0-10.5 0 5.25 5.25 0 0 0 10.5 0z">
                                                                    </path>
                                                                </svg>
                                                                Security
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url("#") }}" class="ext-action-dropdown__item">
                                                            <span>
                                                                <svg width="20" height="20" fill="currentColor"
                                                                    viewBox="0 0 128 128" role="presentation"
                                                                    aria-hidden="true" focusable="false"
                                                                    class="ext-action-dropdown__icon bk-icon -streamline-check_out"
                                                                    slot="icon">
                                                                    <path
                                                                        d="M111.33 66.22c.06-.1.11-.2.16-.3.05-.1.15-.25.21-.39s.08-.27.12-.41c.039-.112.073-.225.1-.34.1-.515.1-1.045 0-1.56a3.352 3.352 0 0 0-.1-.34c0-.14-.07-.28-.12-.41-.05-.13-.14-.26-.21-.39-.07-.13-.1-.2-.16-.3a4.886 4.886 0 0 0-.5-.61l-24-24a4.002 4.002 0 1 0-5.66 5.66L98.34 60H44a4 4 0 0 0 0 8h54.34L81.17 85.17a4.002 4.002 0 1 0 5.66 5.66l24-24c.183-.19.35-.394.5-.61zM44 120h-8c-6.627 0-12-5.373-12-12V20c0-6.627 5.373-12 12-12h8a4 4 0 0 0 0-8h-8C24.954 0 16 8.954 16 20v88c0 11.046 8.954 20 20 20h8a4 4 0 0 0 0-8z">
                                                                    </path>
                                                                </svg>
                                                                Sign out
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Dropdown Account -->
                                </div>
                            </div>
                        </div>
                        <!-- Header Top -->

                        <!-- Header Bottom -->
                        <div class="ext-header__navigation">
                            <nav class="ext-navigation">

                                <div data-test-id="mobile-trigger" class="ext-navigation__mobile-trigger">
                                    <svg height="20" viewBox="0 0 24 24" fill="currentColor" width="20" aria-hidden="true" role="presentation" focusable="false" class="ext-navigation__mobile-trigger-icon bk-icon -streamline-lines_horizontal">
                                        <path
                                            d="M2.25 18.753h19.5a.75.75 0 0 0 0-1.5H2.25a.75.75 0 0 0 0 1.5zm0-6h19.5a.75.75 0 0 0 0-1.5H2.25a.75.75 0 0 0 0 1.5zm0-6h19.5a.75.75 0 0 0 0-1.5H2.25a.75.75 0 0 0 0 1.5z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="ext-navigation__inner">
                                    <div class="ext-navigation__inner-container">
                                        <ul class="ext-navigation-top-item__list">

                                            <!-- Menu Item -->
                                            <li class="ext-navigation-top-item">
                                                <a href="{{ url("#") }}" class="ext-navigation-top-item__link">
                                                    <span class="ext-navigation-top-item__icon">
                                                        <svg height="24" viewBox="0 0 24 24" fill="currentColor"
                                                            width="24" aria-hidden="true" role="presentation"
                                                            focusable="false" class="bk-icon -streamline-house">
                                                            <path
                                                                d="M3 18v3.75A2.25 2.25 0 0 0 5.25 24h4.5a.75.75 0 0 0 .75-.75v-6a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 .75.75v6c0 .414.336.75.75.75h4.5A2.25 2.25 0 0 0 21 21.75V18a.75.75 0 0 0-1.5 0v3.75a.75.75 0 0 1-.75.75h-4.5l.75.75v-6A2.25 2.25 0 0 0 12.75 15h-1.5A2.25 2.25 0 0 0 9 17.25v6l.75-.75h-4.5a.75.75 0 0 1-.75-.75V18A.75.75 0 0 0 3 18zm-1.72-.97L11.47 6.841a.75.75 0 0 1 1.06 0l10.19 10.19a.75.75 0 1 0 1.06-1.061L13.591 5.78a2.25 2.25 0 0 0-3.182 0L.219 15.97a.75.75 0 1 0 1.061 1.06zm15.97-7.28v-1.5L16.5 9h3.75l-.75-.75v5.25a.75.75 0 0 0 1.5 0V8.25a.75.75 0 0 0-.75-.75H16.5a.75.75 0 0 0-.75.75v1.5a.75.75 0 0 0 1.5 0zM16.522.3l-.407.543a1.793 1.793 0 0 0 .279 2.461c.12.102.14.28.045.406l-.411.548a.75.75 0 1 0 1.2.9l.407-.543a1.793 1.793 0 0 0-.279-2.461.295.295 0 0 1-.045-.406l.411-.548a.75.75 0 1 0-1.2-.9zm3.75 0l-.407.543a1.793 1.793 0 0 0 .279 2.461c.12.102.14.28.045.406l-.411.548a.75.75 0 1 0 1.2.9l.407-.543a1.793 1.793 0 0 0-.279-2.461.295.295 0 0 1-.045-.406l.411-.548a.75.75 0 1 0-1.2-.9z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="ext-navigation-top-item__title">
                                                        <span class="ext-navigation-top-item__title-text">Home</span>
                                                    </span>
                                                </a>
                                                <div class="ext-navigation-top-item__submenu"></div>
                                            </li>
                                            <!-- /Menu Item -->

                                            <!-- Menu Item -->
                                            <li class="ext-navigation-top-item ext-navigation-top-item--active">
                                                <!-- toggle botton -->
                                                <button class="ext-navigation-top-item__link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">

                                                    <span class="ext-navigation-top-item__icon">
                                                        <svg focusable="false" role="presentation" aria-hidden="true"
                                                            width="24" viewBox="0 0 24 24" fill="currentColor"
                                                            height="24" class="bk-icon -streamline-calendar">
                                                            <path
                                                                d="M22.502 13.5v8.25a.75.75 0 0 1-.75.75h-19.5a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v8.25zm1.5 0V5.25A2.25 2.25 0 0 0 21.752 3h-19.5a2.25 2.25 0 0 0-2.25 2.25v16.5A2.25 2.25 0 0 0 2.252 24h19.5a2.25 2.25 0 0 0 2.25-2.25V13.5zm-23.25-3h22.5a.75.75 0 0 0 0-1.5H.752a.75.75 0 0 0 0 1.5zM7.502 6V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0zm10.5 0V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0z">
                                                            </path>
                                                        </svg>
                                                    </span>

                                                    <span class="ext-navigation-top-item__title">
                                                        <span class="ext-navigation-top-item__title-text">Rates &amp;
                                                            Availability</span>
                                                        <span class="ext-navigation-top-item__dropdown-indicator">
                                                            <svg height="15" viewBox="0 0 24 24" fill="currentColor"
                                                                role="presentation" focusable="false" width="15"
                                                                aria-hidden="true"
                                                                class="bk-icon -streamline-arrow_nav_down">
                                                                <path
                                                                    d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>

                                                    <span class="ext-navigation-top-item__dropdown-icon">
                                                        <svg focusable="false" role="presentation" aria-hidden="true"
                                                            width="24" viewBox="0 0 24 24" fill="currentColor"
                                                            height="24"
                                                            class="ext-navigation-top-item__dropdown-icon--mobile bk-icon -streamline-arrow_nav_down">
                                                            <path
                                                                d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                            </path>
                                                        </svg>
                                                    </span>

                                                </button>
                                                <!-- /toggle botton -->

                                                <!-- Sub Menu -->
                                                <div class="ext-navigation-top-item__submenu dropdown-menu">
                                                    <ul class="ext-navigation-submenu-item__list">
                                                        <!-- <li data-nav-tag="availability_calendar" class="ext-navigation-submenu-item">
                                                            <a href="calendar.html" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">Calendar</span>

                                                            </a>

                                                        </li> -->
                                                        <li data-nav-tag="open_close_rooms" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("open-close-rooms.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">Open/close
                                                                    rooms</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="rate_plans" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("rate-plans.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">Rate
                                                                    plans</span>

                                                            </a>

                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- /Sub Menu -->

                                            </li>
                                            <!-- /Menu Item -->

                                            <!-- Menu Item -->
                                            <li class="ext-navigation-top-item">
                                                <a href="{{ url("reservations.html") }}" class="ext-navigation-top-item__link">
                                                    <span class="ext-navigation-top-item__icon">
                                                        <svg focusable="false" role="presentation" aria-hidden="true"
                                                            width="24" fill="currentColor" viewBox="0 0 24 24"
                                                            height="24" class="bk-icon -streamline-list">
                                                            <path
                                                                d="M4.5 2.998a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-1.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-1.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm2.25-16.5h15a.75.75 0 0 0 0-1.5h-15a.75.75 0 0 0 0 1.5zm0 9h15a.75.75 0 0 0 0-1.5h-15a.75.75 0 0 0 0 1.5zm0 9h15a.75.75 0 0 0 0-1.5h-15a.75.75 0 0 0 0 1.5z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="ext-navigation-top-item__title">
                                                        <span
                                                            class="ext-navigation-top-item__title-text">Reservations</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <!-- /Menu Item -->

                                            <!-- Menu Item -->
                                            <li class="ext-navigation-top-item">

                                                <!-- toggle botton -->
                                                <button class="ext-navigation-top-item__link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="ext-navigation-top-item__icon">
                                                        <svg aria-hidden="true" width="24" focusable="false"
                                                            role="presentation" viewBox="0 0 24 24" fill="currentColor"
                                                            height="24" class="bk-icon -streamline-edit">
                                                            <path
                                                                d="M22.72 1.279a4.389 4.389 0 0 0-6.208.013l-.028.029L1.99 15.815a.75.75 0 0 0-.197.344l-1.77 6.905a.75.75 0 0 0 .913.913l6.905-1.771a.75.75 0 0 0 .344-.197l14.5-14.5a4.385 4.385 0 0 0 .067-6.197l-.03-.031zm-1.061 1.06l.02.02a2.887 2.887 0 0 1-.048 4.083L7.125 20.95l.344-.197-6.905 1.771.913.913 1.77-6.905-.197.344 14.5-14.5.025-.025a2.89 2.89 0 0 1 4.086-.009zm-5.583.451l5.134 5.134a.75.75 0 1 0 1.06-1.06L17.136 1.73a.75.75 0 1 0-1.06 1.06zM1.99 16.875l5.14 5.13a.75.75 0 0 0 1.059-1.062l-5.14-5.13a.75.75 0 0 0-1.059 1.062z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="ext-navigation-top-item__title">
                                                        <span
                                                            class="ext-navigation-top-item__title-text">Property</span>
                                                        <span aria-label="10 unread items"
                                                            class="ext-navigation-top-item__label bui-bubble bui-bubble--destructive">
                                                            10
                                                        </span>
                                                        <span class="ext-navigation-top-item__dropdown-indicator">
                                                            <svg fill="currentColor" viewBox="0 0 24 24" height="15"
                                                                focusable="false" role="presentation" aria-hidden="true"
                                                                width="15" class="bk-icon -streamline-arrow_nav_down">
                                                                <path
                                                                    d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="ext-navigation-top-item__dropdown-icon">
                                                        <svg width="24" aria-hidden="true" role="presentation"
                                                            focusable="false" height="24" fill="currentColor"
                                                            viewBox="0 0 24 24"
                                                            class="ext-navigation-top-item__dropdown-icon--mobile bk-icon -streamline-arrow_nav_down">
                                                            <path
                                                                d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <!-- /toggle botton -->

                                                <!-- Sub Menu -->
                                                <div class="ext-navigation-top-item__submenu dropdown-menu">
                                                    <ul class="ext-navigation-submenu-item__list">
                                                        <li data-nav-tag="content_score" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("property-page-score.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">Property
                                                                    page score</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="general_info" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("general-info.html") }}" class="ext-navigation-submenu-item__link"><span
                                                                    class="ext-navigation-submenu-item__icon">
                                                                </span> <span
                                                                    class="ext-navigation-submenu-item__title">General
                                                                    info</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="vat_tax_charges" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("vat-tax-charges.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">VAT/tax/charges</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="photos" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("photos.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">Photos</span>
                                                                <span aria-label="3 unread items" class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
                                                                    3
                                                                </span>
                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="policies" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("policies.html") }}" class="ext-navigation-submenu-item__link"><span
                                                                    class="ext-navigation-submenu-item__icon">
                                                                </span> <span
                                                                    class="ext-navigation-submenu-item__title">Policies</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="facilities" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("facilities-services.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">Facilities
                                                                    &amp; services</span>
                                                                <span aria-label="3 unread items" class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
                                                                    3
                                                                </span>
                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="rooms" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("room-details.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">Room
                                                                    details</span>

                                                            </a>

                                                        </li>

                                                        <li class="ext-navigation-submenu-item">
                                                            <a href="{{ url("get-time-squers.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">How to
                                                                    get to time squers</span>
                                                                <span aria-label="1 unread items" class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
                                                                    1
                                                                </span>
                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="surroundings" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("what's-nearby.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon"></span>
                                                                <span class="ext-navigation-submenu-item__title">What's
                                                                    nearby?</span>
                                                                <span aria-label="1 unread items" class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
                                                                    1
                                                                </span>
                                                            </a>

                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- /Sub Menu -->

                                            </li>
                                            <!-- /Menu Item -->

                                            <!-- Menu Item -->
                                            <li class="ext-navigation-top-item">
                                                <!-- toggle botton -->
                                                <button class="ext-navigation-top-item__link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="ext-navigation-top-item__icon">
                                                        <svg height="24" fill="currentColor" viewBox="0 0 24 24"
                                                            role="presentation" focusable="false" width="24"
                                                            aria-hidden="true" class="bk-icon -streamline-email">
                                                            <path
                                                                d="M22.5 12v6a.75.75 0 0 1-.75.75H2.25A.75.75 0 0 1 1.5 18V6a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v6zm1.5 0V6a2.25 2.25 0 0 0-2.25-2.25H2.25A2.25 2.25 0 0 0 0 6v12a2.25 2.25 0 0 0 2.25 2.25h19.5A2.25 2.25 0 0 0 24 18v-6zm-8.822-1.474l3.813 3.525a.75.75 0 1 0 1.018-1.102l-3.813-3.525a.75.75 0 1 0-1.018 1.102zM7.804 9.424L3.99 12.95a.75.75 0 1 0 1.018 1.102l3.813-3.525a.75.75 0 1 0-1.018-1.102zm14.65-5.027l-9.513 6.56a1.656 1.656 0 0 1-1.882 0l-9.513-6.56A.75.75 0 1 0 .694 5.63l9.513 6.56a3.156 3.156 0 0 0 3.586 0l9.513-6.56a.75.75 0 1 0-.852-1.234z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="ext-navigation-top-item__title">
                                                        <span class="ext-navigation-top-item__title-text">Inbox</span>
                                                        <span class="ext-navigation-top-item__dropdown-indicator">
                                                            <svg height="15" fill="currentColor" viewBox="0 0 24 24"
                                                                width="15" aria-hidden="true" role="presentation"
                                                                focusable="false"
                                                                class="bk-icon -streamline-arrow_nav_down">
                                                                <path
                                                                    d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="ext-navigation-top-item__dropdown-icon">
                                                        <svg focusable="false" role="presentation" aria-hidden="true"
                                                            width="24" fill="currentColor" viewBox="0 0 24 24"
                                                            height="24"
                                                            class="ext-navigation-top-item__dropdown-icon--mobile bk-icon -streamline-arrow_nav_down">
                                                            <path
                                                                d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <!-- /toggle botton -->
                                                <!-- Sub Menu -->
                                                <div class="ext-navigation-top-item__submenu dropdown-menu">
                                                    <ul class="ext-navigation-submenu-item__list">
                                                        <li class="ext-navigation-submenu-item">
                                                            <a href="{{ url("reservation-messages.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">
                                                                    Reservation messages
                                                                </span>

                                                            </a>

                                                        </li>
                                                        <li class="ext-navigation-submenu-item">
                                                            <a href="{{ url("obacas-messages.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">Booking.com
                                                                    messages</span>

                                                            </a>

                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- /Sub Menu -->
                                            </li>
                                            <!-- /Menu Item -->

                                            <!-- Menu Item -->
                                            <li class="ext-navigation-top-item">
                                                <!-- toggle botton -->
                                                <button class="ext-navigation-top-item__link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="ext-navigation-top-item__icon">
                                                        <svg height="24" viewBox="0 0 24 24" fill="currentColor"
                                                            width="24" aria-hidden="true" role="presentation"
                                                            focusable="false" class="bk-icon -streamline-heart_outline">
                                                            <path
                                                                d="M12.541 21.325l-9.588-10a4.923 4.923 0 1 1 6.95-6.976l1.567 1.566a.75.75 0 0 0 1.06 0l1.566-1.566a4.923 4.923 0 0 1 6.963 6.962l-9.6 10.014h1.082zm-1.082 1.038a.75.75 0 0 0 1.082 0l9.59-10.003a6.418 6.418 0 0 0-.012-9.07 6.423 6.423 0 0 0-9.083-.001L11.47 4.854h1.06l-1.566-1.566a6.423 6.423 0 1 0-9.082 9.086l9.577 9.99z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="ext-navigation-top-item__title">
                                                        <span class="ext-navigation-top-item__title-text">Guest
                                                            reviews</span>
                                                        <span class="ext-navigation-top-item__dropdown-indicator">
                                                            <svg focusable="false" role="presentation"
                                                                aria-hidden="true" width="15" fill="currentColor"
                                                                viewBox="0 0 24 24" height="15"
                                                                class="bk-icon -streamline-arrow_nav_down">
                                                                <path
                                                                    d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="ext-navigation-top-item__dropdown-icon">
                                                        <svg focusable="false" role="presentation" aria-hidden="true"
                                                            width="24" fill="currentColor" viewBox="0 0 24 24"
                                                            height="24"
                                                            class="ext-navigation-top-item__dropdown-icon--mobile bk-icon -streamline-arrow_nav_down">
                                                            <path
                                                                d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <!-- /toggle botton -->
                                                <!-- Sub Menu -->
                                                <div class="ext-navigation-top-item__submenu dropdown-menu">
                                                    <ul class="ext-navigation-submenu-item__list">
                                                        <li class="ext-navigation-submenu-item">
                                                            <a href="{{ url("guest-reviews.html") }}" class="ext-navigation-submenu-item__link"><span
                                                                    class="ext-navigation-submenu-item__icon">
                                                                </span> <span
                                                                    class="ext-navigation-submenu-item__title">Guest
                                                                    reviews</span>

                                                            </a>

                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- /Sub Menu -->
                                            </li>
                                            <!-- /Menu Item -->

                                            <!-- Menu Item -->
                                            <li class="ext-navigation-top-item">
                                                <!-- toggle botton -->
                                                <button class="ext-navigation-top-item__link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="ext-navigation-top-item__icon">
                                                        <svg width="24" aria-hidden="true" role="presentation"
                                                            focusable="false" height="24" fill="currentColor"
                                                            viewBox="0 0 24 24" class="bk-icon -streamline-page">
                                                            <path
                                                                d="M13.629 22.5H2.25a.75.75 0 0 1-.75-.75V2.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v11.379a.75.75 0 0 1-.22.53L14.16 22.28a.75.75 0 0 1-.53.219zm0 1.5a2.25 2.25 0 0 0 1.59-.659l8.122-8.122A2.25 2.25 0 0 0 24 13.63V2.25A2.25 2.25 0 0 0 21.75 0H2.25A2.25 2.25 0 0 0 0 2.25v19.5A2.25 2.25 0 0 0 2.25 24h11.379zM15 23.115V15.75a.75.75 0 0 1 .75-.75h7.365a.75.75 0 0 0 0-1.5H15.75a2.25 2.25 0 0 0-2.25 2.25v7.365a.75.75 0 0 0 1.5 0zM6.75 7.5h12a.75.75 0 0 0 0-1.5h-12a.75.75 0 0 0 0 1.5zm0 4.5H12a.75.75 0 0 0 0-1.5H6.75a.75.75 0 0 0 0 1.5z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="ext-navigation-top-item__title">
                                                        <span class="ext-navigation-top-item__title-text">Finance</span>
                                                        <span class="ext-navigation-top-item__dropdown-indicator">
                                                            <svg viewBox="0 0 24 24" fill="currentColor" height="15"
                                                                focusable="false" role="presentation" aria-hidden="true"
                                                                width="15" class="bk-icon -streamline-arrow_nav_down">
                                                                <path
                                                                    d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="ext-navigation-top-item__dropdown-icon">
                                                        <svg height="24" viewBox="0 0 24 24" fill="currentColor"
                                                            width="24" aria-hidden="true" role="presentation"
                                                            focusable="false"
                                                            class="ext-navigation-top-item__dropdown-icon--mobile bk-icon -streamline-arrow_nav_down">
                                                            <path
                                                                d="M18 9.45c0 .2-.078.39-.22.53l-5 5a1.08 1.08 0 0 1-.78.32 1.1 1.1 0 0 1-.78-.32l-5-5a.75.75 0 0 1 0-1.06.74.74 0 0 1 1.06 0L12 13.64l4.72-4.72a.74.74 0 0 1 1.06 0 .73.73 0 0 1 .22.53zm-5.72 4.47zm-.57 0z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <!-- /toggle botton -->
                                                <!-- Sub Menu -->
                                                <div class="ext-navigation-top-item__submenu dropdown-menu">
                                                    <ul class="ext-navigation-submenu-item__list">
                                                        <li data-nav-tag="finance_invoices" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("invoices.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">Invoices</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="finance_reservations" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("reservation-statements.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon"></span>
                                                                <span class="ext-navigation-submenu-item__title">Reservation
                                                                    statements</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="finance_overview" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("financial-overview.html") }}" class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">Financial
                                                                    overview</span>

                                                            </a>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /Sub Menu -->
                                            </li>
                                            <!-- /Menu Item -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ext-navigation__mobile-overlay"></div>
                            </nav>
                        </div>
                        <!-- /Header Bottom -->

                    </header>
                    <!-- /Header -->




                    <main id="content" class="main">
                        <div class=" bui-container bui-container--center">

                            <svg class="bk-icon -iconset-info_sign" height="128" style="display:none;" width="128" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false">
                                <path
                                    d="M49.4 85l4.2-17.2c.7-2.7.8-3.8 0-3.8a29 29 0 0 0-8.8 3.8l-1.8-3A48 48 0 0 1 66.7 53c3.7 0 4.3 4.3 2.5 11l-5 18c-.7 3.3-.3 4.3.5 4.3a19 19 0 0 0 8.2-4L75 85c-8.6 8.7-18.2 12-21.8 12s-6.4-2.3-3.8-12zM75 36a9.2 9.2 0 0 1-9.2 9c-4.4 0-7-2.7-6.8-7a9 9 0 0 1 9.1-9c4.6 0 6.9 3.2 6.9 7z">
                                </path>
                                <path
                                    d="M62 16a48 48 0 1 1-48 48 48 48 0 0 1 48-48m0-8a56 56 0 1 0 56 56A56 56 0 0 0 62 8z">
                                </path>
                            </svg>
                            <svg class="bk-icon -streamline-info_sign" height="24" style="display:none;" width="24" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false">
                                <path
                                    d="M14.25 15.75h-.75a.75.75 0 0 1-.75-.75v-3.75a1.5 1.5 0 0 0-1.5-1.5h-.75a.75.75 0 0 0 0 1.5h.75V15a2.25 2.25 0 0 0 2.25 2.25h.75a.75.75 0 0 0 0-1.5zM11.625 6a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
                                </path>
                            </svg>


                            <div>

                                <div id="ratePlansContainer" class="rp--mobile-friendly">


                                    <div class="margin-bottom">
                                        <div class="bui-grid">
                                            <div class="bui-grid__column-full bui-spacer--medium">
                                                <h1>Rate plans</h1>
                                                <p>
                                                    Create and review different types of rate plans for your customers. You can manage availability and pricing in your
                                                    <a href="{{ url("#") }}">Calendar</a>.

                                                    <template id="delete_rate_plan">
                                                        <header class="bui-modal__header">
                                                            <h1 class="bui-modal__title" id="myModal-title"
                                                                data-bui-ref="modal-title">Are you sure?</h1>
                                                            <p class="bui-modal__paragraph" id="myModal-subtitle"
                                                                data-bui-ref="modal-subtitle">

                                                                Once you delete this rate plan it will be permanently
                                                                erased. If you'd rather switch it off,
                                                                <a href="{{ url("#") }}">you can do that in your Calendar</a>.

                                                            </p>
                                                        </header>
                                                        <footer class="bui-modal__footer">
                                                            <div class="bui-inline-container">

                                                                <button class="bui-button bui-button--destructive "
                                                                    type="button" id="deleteRP"
                                                                    data-bui-ref="modal-close"
                                                                    data-track-ga="Rate Plans,List page,Confirm delete rate plan">
                                                                    <span class="bui-button__text">Delete forever</span>
                                                                </button>

                                                                <button class="bui-button bui-button--secondary "
                                                                    type="button" data-bui-ref="modal-close">
                                                                    <span class="bui-button__text">Cancel</span>
                                                                </button>

                                                            </div>
                                                        </footer>
                                                    </template>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bui-container bg-container@medium">
                                        <div class="bui-grid bui-grid--align-center">
                                            <div class="bui-grid__column-full bui-grid__column-half@medium">

                                                <span class="margin-bottom">

                                                    <a href="{{ url("add-new-rate-plan.html") }}" class="bui-button bui-button--primary bui-button--wide "
                                                        
                                                        >
                                                        <span class="bui-button__text">Add new rate plan</span>
                                                </a>

                                                </span>

                                            </div>

                                            <div style="text-align: right;" class="bui-grid__column-half">

                                                <div class="bui-segmented-control bui-segmented-control--secondary" aria-label="Sort results by" data-bui-component="SegmentedControl">
                                                    <label class="bui-segmented-control__label">Show cancellations and
                                                        net revenue for last:</label>
                                                    <ul class="bui-segmented-control__list">
                                                        <li class="bui-segmented-control__item">
                                                            <input id="sortbutton_0" class="bui-segmented-control__trigger" type="radio" name="sort1" value="1" data-on-click="getRatePlansStats(30)" checked="">
                                                            <label for="sortbutton_0" class="bui-segmented-control__button" data-track-ga="Rate Plans,List page,Date selector - 30 days">30
                                                                days</label>
                                                        </li>
                                                        <li class="bui-segmented-control__item">
                                                            <input id="sortbutton_1" class="bui-segmented-control__trigger" type="radio" name="sort1" value="2" data-on-click="getRatePlansStats(91)">
                                                            <label for="sortbutton_1" class="bui-segmented-control__button" data-track-ga="Rate Plans,List page,Date selector - 3 months">3
                                                                months</label>
                                                        </li>
                                                        <li class="bui-segmented-control__item">
                                                            <input id="sortbutton_2" class="bui-segmented-control__trigger" type="radio" name="sort1" value="3" data-on-click="getRatePlansStats(182)">
                                                            <label for="sortbutton_2" class="bui-segmented-control__button" data-track-ga="Rate Plans,List page,Date selector - 6 months">6
                                                                months</label>
                                                        </li>
                                                        <li class="bui-segmented-control__item">
                                                            <input id="sortbutton_3" class="bui-segmented-control__trigger" type="radio" name="sort1" value="4" data-on-click="getRatePlansStats(365)">
                                                            <label for="sortbutton_3" class="bui-segmented-control__button" data-track-ga="Rate Plans,List page,Date selector - 12 months">12
                                                                months</label>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                    <div class="">
                                        <table class="bui-table bui-table--interactive bui-table--expandable">
                                            <thead class="bui-table__head">
                                                <tr class="bui-table__row">
                                                    <th class="bui-table__cell bui-table__cell--head">
                                                        <!--INTENTIONALLY BLANK HEADER-->
                                                    </th>
                                                    <th class="bui-table__cell bui-table__cell--head">Rate plan name
                                                    </th>
                                                    <th class="bui-table__cell bui-table__cell--head">Cancellation policy
                                                    </th>
                                                    <th class="bui-table__cell bui-table__cell--head">Price</th>
                                                    <th class="bui-table__cell bui-table__cell--head">Cancellation rate
                                                    </th>
                                                    <th class="bui-table__cell bui-table__cell--head bui-table__cell bui-table__cell--last">
                                                        Net revenue
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody class="bui-table__body">

                                                <tr id="bui-table__row1" class="bui-table__row bui-table__row--expandable">
                                                    <td id="rp-chevron-cell" class="bui-table__cell">
                                                        <svg class="bui-table__expand-icon" data-icon-name="navarrow_down" viewBox="0 0 128 128">
                                                            <path
                                                                d="M64 88L33.2 57.2a4 4 0 0 1 5.6-5.7L64 76.7l25.2-25.2a4 4 0 0 1 5.6 5.7z">
                                                            </path>
                                                        </svg>
                                                    </td>
                                                    <td class="bui-table__cell">
                                                        <span id="rp-rate-plan-name" class="bui-table__expand-icon-label">Standard Rate</span>
                                                        <span id="rp-rate-plan-id" class="bui-table__expand-icon-label rate-id">ID
                                                            24636577</span>
                                                    </td>
                                                    <td class="bui-table__cell bui-table__cell" data-heading="Cancellation policy">Flexible - 18:00 on arrival day
                                                    </td>
                                                    <td class="bui-table__cell bui-table__cell" data-heading="Price">

                                                        <p>

                                                            Managed by your Calendar

                                                        </p>


                                                    </td>
                                                    <td class="bui-table__cell bui-table__cell rp-stats" data-heading="Cancellation rate">
                                                        Not enough data
                                                    </td>
                                                    <td class="bui-table__cell bui-table__cell bui-table__cell--last rp-stats" data-heading="Net revenue">
                                                        Not enough data
                                                    </td>
                                                </tr>
                                                <tr id="bui-table__row-expansion1" class="bui-table__row-expansion">
                                                    <td colspan="6" class="bui-u-full-width@small">
                                                        <div class="bui-table__row-expansion-content rp-table-expanded">


                                                            <table class="bui-table">
                                                                <thead class="bui-table__head">
                                                                    <tr class="bui-table__row">
                                                                        <th class="bui-table__cell bui-table__cell--head">
                                                                            Room types</th>
                                                                        <th class="bui-table__cell bui-table__cell--head">
                                                                            Meal plan</th>
                                                                        <th class="bui-table__cell bui-table__cell--head">
                                                                            Minimum stay</th>
                                                                        <th class="bui-table__cell bui-table__cell--head">
                                                                            Bookable</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="bui-table__body">
                                                                    <tr class="bui-table__row">
                                                                        <td class="bui-table__cell" data-heading="Room types">
                                                                            <ul class="bui-list bui-list--unordered bui-u-inline rp-detail__room-types">

                                                                                <li class="bui-list__item rpat-list-item" data-room-id="796270001">Deluxe Double Room</li>

                                                                            </ul>
                                                                        </td>
                                                                        <td class="bui-table__cell" data-heading="Meal plan">

                                                                            No meals

                                                                        </td>
                                                                        <td class="bui-table__cell" data-heading="Minimum stay">
                                                                            No minimum length of stay
                                                                        </td>
                                                                        <td class="bui-table__cell" data-heading="Bookable">
                                                                            Any time
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <div class="bui-grid rp-list__detail-footer">
                                                                <div class="bui-grid__column-9@large"></div>
                                                                <div class="bui-grid__column-3@large bui-u-text-right">

                                                                    <a href="{{ url("review-edit-reat-plan.html") }}" class="bui-button bui-button--secondary bui-button--wide " type="button"><span
                                                                            class="bui-button__text">Edit</span></a>

                                                                    <button class="bui-button bui-button--destructive bui-button--wide " type="button"><span
                                                                            class="bui-button__text">Delete</span></button>


                                                                </div>
                                                            </div>


                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr id="bui-table__row2" class="bui-table__row bui-table__row--expandable">
                                                    <td id="rp-chevron-cell" class="bui-table__cell">
                                                        <svg class="bui-table__expand-icon" data-icon-name="navarrow_down" viewBox="0 0 128 128">
                                                            <path
                                                                d="M64 88L33.2 57.2a4 4 0 0 1 5.6-5.7L64 76.7l25.2-25.2a4 4 0 0 1 5.6 5.7z">
                                                            </path>
                                                        </svg>
                                                    </td>
                                                    <td class="bui-table__cell">
                                                        <span id="rp-rate-plan-name" class="bui-table__expand-icon-label">Non-refundable
                                                            Rate</span>
                                                        <span id="rp-rate-plan-id" class="bui-table__expand-icon-label rate-id">ID
                                                            24636578</span>
                                                    </td>
                                                    <td class="bui-table__cell bui-table__cell" data-heading="Cancellation policy">Non-refundable</td>
                                                    <td class="bui-table__cell bui-table__cell" data-heading="Price">

                                                        <p>





                                                            10% cheaper than Standard Rate




                                                        </p>


                                                    </td>
                                                    <td class="bui-table__cell bui-table__cell rp-stats" data-heading="Cancellation rate">



                                                        Not enough data



                                                    </td>
                                                    <td class="bui-table__cell bui-table__cell bui-table__cell--last rp-stats" data-heading="Net revenue">



                                                        Not enough data



                                                    </td>
                                                </tr>

                                                <tr id="bui-table__row-expansion2" class="bui-table__row-expansion">
                                                    <td colspan="6" class="bui-u-full-width@small">
                                                        <div class="bui-table__row-expansion-content rp-table-expanded">


                                                            <table class="bui-table">
                                                                <thead class="bui-table__head">
                                                                    <tr class="bui-table__row">
                                                                        <th class="bui-table__cell bui-table__cell--head">
                                                                            Room types</th>
                                                                        <th class="bui-table__cell bui-table__cell--head">
                                                                            Meal plan</th>
                                                                        <th class="bui-table__cell bui-table__cell--head">
                                                                            Minimum stay</th>
                                                                        <th class="bui-table__cell bui-table__cell--head">
                                                                            Bookable</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="bui-table__body">
                                                                    <tr class="bui-table__row">
                                                                        <td class="bui-table__cell" data-heading="Room types">
                                                                            <ul class="bui-list bui-list--unordered bui-u-inline rp-detail__room-types">

                                                                                <li class="bui-list__item rpat-list-item" data-room-id="796270001">Deluxe Double Room</li>

                                                                            </ul>
                                                                        </td>
                                                                        <td class="bui-table__cell" data-heading="Meal plan">

                                                                            No meals

                                                                        </td>
                                                                        <td class="bui-table__cell" data-heading="Minimum stay">

                                                                            No minimum length of stay

                                                                        </td>
                                                                        <td class="bui-table__cell" data-heading="Bookable">

                                                                            Any time

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <div class="bui-grid rp-list__detail-footer">
                                                                <div class="bui-grid__column-9@large"></div>
                                                                <div class="bui-grid__column-3@large bui-u-text-right">





                                                                    <a href="{{ url("review-edit-reat-plan.html") }}" class="bui-button bui-button--secondary bui-button--wide " type="button"><span
                                                                        class="bui-button__text">Edit</span></a>



                                                                    <button class="bui-button bui-button--destructive bui-button--wide " type="button" data-on-click="loadDeleteStep(event)" data-rid="24636578" data-bid="24636578_0_0_339767567_0_0c5283f6355369b71d05e07d10108052" aria-label="Open Delete Rate Plan Modal"
                                                                        data-modal-id="delete_rate_plan" data-bui-component="Modal" data-track-ga="Rate Plans,List page,Delete rate plan"><span
                                                                            class="bui-button__text">Delete</span></button>


                                                                </div>
                                                            </div>


                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>




                                    <div data-et-view="NVNZYeJKTYFGFfPfIVXBPKAC:5"></div>



                                </div>
                            </div>

                        </div>
                    </main>

                    <!-- Footer -->
                    <footer class="ext-footer bui-u-hidden-print">
                        <div class="ext-footer__top-content">
                            <div class="bui-container bui-container--center">
                                <div class="ext-footer__top-content__inner">
                                    <div class="ext-footer__top-content__first">
                                        <div class="ext-footer__links">
                                            <a href="{{ url("#") }}" class="ext-footer__link bui-link bui-link--primary">
                                                <span>About
                                                    Us</span>
                                            </a>
                                            <a href="{{ url("#") }}" class="ext-footer__link bui-link bui-link--primary">
                                                <span>Privacy and
                                                    Cookie Statement</span>
                                            </a>
                                            <a href="{{ url("#") }}" class="ext-footer__link bui-link bui-link--primary">
                                                <span>FAQs</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ext-footer__top-content__second">
                                        <div class="ext-footer__ctas">
                                            <a href="{{ url("#") }}" data-test-id="ext-footer-add-property-link" class="ext-footer__cta bui-button bui-button--primary">
                                                <span class="bui-button__text">
                                                    <span>Add new
                                                        property</span>
                                                </span>
                                            </a>
                                            <div class="ext-feedback-cta ext-footer__cta">
                                                <button type="button" class="bui-button bui-button--primary">
                                                    <span class="bui-button__text">
                                                        <span
                                                            possible-tags="ext_footer_feedback_share_feedback_cta">Share
                                                            your feedback</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ext-footer__bottom-content">
                            <div class="bui-container bui-container--center">
                                <div class="ext-footer__bottom-content__inner">
                                    <div class="ext-footer__bottom-content__first">
                                        <span>© Copyright
                                            <a href="{{ url("#") }}"
                                                class="bui-link bui-link--primary ext-footer__link">Obocas.com</a>
                                            2022
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </footer>
                    <!-- /Footer -->

                </div>

            </div>
        </main>

    </div>
    <!-- close div#main-container -->


    <div class="bui-modal delete-model" id="delete_rate_plan">
        <div class="bui-modal__wrapper">
            <div class="bui-modal__align">
                <aside class="bui-modal__content bui_depth_1">

                    <div class="bui-modal__slot">
                        <header class="bui-modal__header">
                            <h1 class="bui-modal__title" id="myModal-title">Are you sure?
                            </h1>
                            <p class="bui-modal__paragraph" id="myModal-subtitle">


                                Once you delete this rate plan it will be permanently erased. If you'd rather switch it off, <a href="{{ url("#") }}" target="_blank">you can do that in your Calendar</a>.


                            </p>
                        </header>
                        <footer class="bui-modal__footer">
                            <div class="bui-inline-container">


                                <button class="bui-button bui-button--destructive " type="button" id="deleteRP"><span
                                        class="bui-button__text">Delete forever</span></button>



                                <button class="bui-button bui-button--secondary modal-close" type="button"><span class="bui-button__text">Cancel</span></button>

                            </div>
                        </footer>
                    </div>

                    <button type="button" class="bui-modal__close no-outline-focus modal-close">
                        <svg viewBox="0 0 128 128" height="16" width="16" role="presentation">
                            <path
                                d="M75.31,64l42.35-42.34a8,8,0,1,0-11.32-11.32L64,52.69,21.66,10.34A8,8,0,0,0,10.34,21.66L52.69,64,10.34,106.34a8,8,0,0,0,11.32,11.32L64,75.31l42.34,42.35a8,8,0,0,0,11.32-11.32Z">
                            </path>
                        </svg>
                    </button>
                </aside>
            </div>
            <div class="bui-modal__overlay modal-close"></div>
        </div>
    </div>


 
	<!-- ===================== Required Js File Links ===================== -->
	<!-- jquery js  -->
	<script src="{{ asset("/hotel-admin/assets/js/jquery-1.12.4.min.js") }}"></script>
	<!-- bootstrap js  -->
	<script src="{{ asset("/hotel-admin/assets/js/bootstrap.bundle.min.js") }}"></script>
	<!-- custom Js  -->
	<script src="{{ asset("/hotel-admin/assets/js/script.js") }}"></script>


</body>

</html>