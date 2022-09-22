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
    <link rel="stylesheet" href="{{ asset("/hotel-admin/assets/css/pages/security.min.css") }}">
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
</head>


<body>
    <div id="main-container" class="container-fluid tfa_phone_alt container-fluid--color">
        <main id="content">
            <div class="page-body">

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
                                    Time squers - 7962700
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
                                                <input type="text" name="" placeholder="Search for reservations"
                                                    value="" class="ext-search-input">
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

                                        <button class="ext-action-menu__section" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <div class="ext-action-menu__avatar"
                                                style="background-image: url(assets/images/hotel.jfif);">
                                            </div>
                                            <div class="ext-action-menu__text">
                                                User Photo
                                            </div>
                                        </button>

                                        <div class="ext-action-dropdown__menu dropdown-menu dropdown-menu-end">
                                            <div class="ext-action-dropdown__content">
                                                <ul
                                                    class="ext-action-dropdown__content ext-action-dropdown__content--scrollable ext-action-dropdown__content--no-margin-bottom">

                                                    <li class="">
                                                        <a href="{{ url("#") }}"
                                                            class="ext-action-dropdown__item ext-action-property__wrap">
                                                            <div>
                                                                <img src="{{ asset("/hotel-admin/assets/images/hotel.jfif") }}" width="32px"
                                                                    height="32px" class="ext-action-property__avatar">
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
                                                        <a href="{{ url("#") }}"
                                                            class="ext-action-dropdown__item ext-action-property__wrap">
                                                            <div>
                                                                <img src="{{ asset("/hotel-admin/assets/images/hotel.jfif") }}" width="32px"
                                                                    height="32px" class="ext-action-property__avatar">
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
                                                    <a href="{{ url("#") }}"
                                                        class="ext-action-dropdown__item ext-action-property__wrap">
                                                        <div
                                                            class="ext-action-property__avatar ext-action-property__group-icon">
                                                            <svg width="16" height="16" fill="currentColor"
                                                                viewBox="0 0 24 24" role="presentation"
                                                                aria-hidden="true" focusable="false"
                                                                class="bk-icon -streamline-city" slot="icon">
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
                                        <button class="ext-action-menu__section" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
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
                                                        <a href="{{ url("change-password.html") }}"
                                                            class="ext-action-dropdown__item">
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
                                                        <a href="{{ url("notification-settings.html") }}"
                                                            class="ext-action-dropdown__item">
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
                                    <svg height="20" viewBox="0 0 24 24" fill="currentColor" width="20"
                                        aria-hidden="true" role="presentation" focusable="false"
                                        class="ext-navigation__mobile-trigger-icon bk-icon -streamline-lines_horizontal">
                                        <path
                                            d="M2.25 18.753h19.5a.75.75 0 0 0 0-1.5H2.25a.75.75 0 0 0 0 1.5zm0-6h19.5a.75.75 0 0 0 0-1.5H2.25a.75.75 0 0 0 0 1.5zm0-6h19.5a.75.75 0 0 0 0-1.5H2.25a.75.75 0 0 0 0 1.5z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="ext-navigation__inner">
                                    <div class="ext-navigation__inner-container">
                                        <ul class="ext-navigation-top-item__list">

                                            <!-- Menu Item -->
                                            <li class="ext-navigation-top-item ext-navigation-top-item--active">
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
                                            <li class="ext-navigation-top-item">
                                                <!-- toggle botton -->
                                                <button class="ext-navigation-top-item__link dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">

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

                                                        <li data-nav-tag="open_close_rooms"
                                                            class="ext-navigation-submenu-item">
                                                            <a href="{{ url("open-close-rooms.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span
                                                                    class="ext-navigation-submenu-item__title">Open/close
                                                                    rooms</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="rate_plans"
                                                            class="ext-navigation-submenu-item">
                                                            <a href="{{ url("rate-plans.html") }}"
                                                                class="ext-navigation-submenu-item__link">
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
                                                <button class="ext-navigation-top-item__link dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <li data-nav-tag="content_score"
                                                            class="ext-navigation-submenu-item">
                                                            <a href="{{ url("property-page-score.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span
                                                                    class="ext-navigation-submenu-item__title">Property
                                                                    page score</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="general_info"
                                                            class="ext-navigation-submenu-item">
                                                            <a href="{{ url("general-info.html") }}"
                                                                class="ext-navigation-submenu-item__link"><span
                                                                    class="ext-navigation-submenu-item__icon">
                                                                </span> <span
                                                                    class="ext-navigation-submenu-item__title">General
                                                                    info</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="vat_tax_charges"
                                                            class="ext-navigation-submenu-item">
                                                            <a href="{{ url("vat-tax-charges.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span
                                                                    class="ext-navigation-submenu-item__title">VAT/tax/charges</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="photos" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("photos.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span
                                                                    class="ext-navigation-submenu-item__title">Photos</span>
                                                                <span aria-label="3 unread items"
                                                                    class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
                                                                    3
                                                                </span>
                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="policies" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("policies.html") }}"
                                                                class="ext-navigation-submenu-item__link"><span
                                                                    class="ext-navigation-submenu-item__icon">
                                                                </span> <span
                                                                    class="ext-navigation-submenu-item__title">Policies</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="facilities"
                                                            class="ext-navigation-submenu-item">
                                                            <a href="{{ url("facilities-services.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span
                                                                    class="ext-navigation-submenu-item__title">Facilities
                                                                    &amp; services</span>
                                                                <span aria-label="3 unread items"
                                                                    class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
                                                                    3
                                                                </span>
                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="rooms" class="ext-navigation-submenu-item">
                                                            <a href="{{ url("room-details.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">Room
                                                                    details</span>

                                                            </a>

                                                        </li>

                                                        <li class="ext-navigation-submenu-item">
                                                            <a href="{{ url("get-time-squers.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">How to
                                                                    get to time squers</span>
                                                                <span aria-label="1 unread items"
                                                                    class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
                                                                    1
                                                                </span>
                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="surroundings"
                                                            class="ext-navigation-submenu-item">
                                                            <a href="{{ url("what's-nearby.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon"></span>
                                                                <span class="ext-navigation-submenu-item__title">What's
                                                                    nearby?</span>
                                                                <span aria-label="1 unread items"
                                                                    class="ext-navigation-submenu-item__label bui-bubble bui-bubble--destructive">
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
                                                <button class="ext-navigation-top-item__link dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                            <a href="{{ url("reservation-messages.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span class="ext-navigation-submenu-item__title">
                                                                    Reservation messages
                                                                </span>

                                                            </a>

                                                        </li>
                                                        <li class="ext-navigation-submenu-item">
                                                            <a href="{{ url("obacas-messages.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span
                                                                    class="ext-navigation-submenu-item__title">Booking.com
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
                                                <button class="ext-navigation-top-item__link dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                            <a href="{{ url("guest-reviews.html") }}"
                                                                class="ext-navigation-submenu-item__link"><span
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
                                                <button class="ext-navigation-top-item__link dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <li data-nav-tag="finance_invoices"
                                                            class="ext-navigation-submenu-item">
                                                            <a href="{{ url("invoices.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span
                                                                    class="ext-navigation-submenu-item__title">Invoices</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="finance_reservations"
                                                            class="ext-navigation-submenu-item">
                                                            <a href="{{ url("reservation-statements.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon"></span>
                                                                <span
                                                                    class="ext-navigation-submenu-item__title">Reservation
                                                                    statements</span>

                                                            </a>

                                                        </li>
                                                        <li data-nav-tag="finance_overview"
                                                            class="ext-navigation-submenu-item">
                                                            <a href="{{ url("financial-overview.html") }}"
                                                                class="ext-navigation-submenu-item__link">
                                                                <span class="ext-navigation-submenu-item__icon">
                                                                </span>
                                                                <span
                                                                    class="ext-navigation-submenu-item__title">Financial
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


                    <!-- Main Content -->
                    <div class="bui-container bui-container--center">
                        <main id="content" class="">
                            <div class="page-body ">










                                <div class="am_layout">


                                    <div class="am_panel am_sidebar">
                                        <div class="am_inner_panel" id="am_add_numbers">

                                            <form id="am-add-numbers-form" class="js-dont-warn-about-unsaved-changes">
                                                <div class="tfa_overlay" style="display: none">
                                                    <div class="tfa_overlay_tb">
                                                        <div class="tfa_overlay_tc">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" width="22px" height="22px" viewBox="0 0 50 50"
                                                                style="enable-background:new 0 0 50 50;"
                                                                xml:space="preserve">
                                                                <path fill="#000"
                                                                    d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
                                                                    <animateTransform attributeType="xml"
                                                                        attributeName="transform" type="rotate"
                                                                        from="0 25 25" to="360 25 25" dur="1s"
                                                                        repeatCount="indefinite"></animateTransform>
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="am_phone_mgmt section active" id="am_np_step1"
                                                    data-step="1">
                                                    <div class="am_headline"> Add phone numbers</div>
                                                    <div class="am_tagline">Here you can manage the phone numbers
                                                        connected with your extranet account.</div>
                                                    <a class="am-add-new-number-next-button">
                                                        <div class="am_phone_cta">+ Add new number</div>
                                                    </a>
                                                </div>

                                                <div class="am_add_new section" id="am_np_step2" style="display: none"
                                                    data-step="2">
                                                    <div class="am_tfa_controls">
                                                        <div class="am_tfa_control am_tfa_back">
                                                            <a class="am-add-new-number-back-button"> <span
                                                                    class="glyphicon glyphicon-menu-left"></span>
                                                                Back</a>
                                                        </div>
                                                        <div class="am_tfa_control am_tfa_close">
                                                            <a class="am-add-new-number-close-button">Close <span
                                                                    class="glyphicon glyphicon-remove"></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="am_headline">New phone number</div>
                                                    <div class="am_tagline">Please enter an additional phone number
                                                        below:</div>

                                                    <div class="am_phone_fields">
                                                        <label class="am_phone_label" for="phone_text_messages">New
                                                            phone number</label>
                                                        <div class="phone-container">


                                                            <div class="intl-tel-input"><input type="text"
                                                                    id="phone_text_messages" name="phone_text_messages"
                                                                    value="" class="form-control js_phone">
                                                                <div class="flag-dropdown">
                                                                    <div class="selected-flag"
                                                                        title="Bangladesh (বাংলাদেশ): +880">
                                                                        <div class="flag bd">
                                                                            <div class="arrow"></div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="country-list hide">
                                                                        <li class="country preferred" data-dial-code="1"
                                                                            data-country-code="us">
                                                                            <div class="flag us"></div><span
                                                                                class="country-name">United
                                                                                States</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country preferred"
                                                                            data-dial-code="44" data-country-code="gb">
                                                                            <div class="flag gb"></div><span
                                                                                class="country-name">United
                                                                                Kingdom</span><span
                                                                                class="dial-code">+44</span>
                                                                        </li>
                                                                        <li class="divider"></li>
                                                                        <li class="country" data-dial-code="93"
                                                                            data-country-code="af">
                                                                            <div class="flag af"></div><span
                                                                                class="country-name">Afghanistan
                                                                                (‫افغانستان‬‎)</span><span
                                                                                class="dial-code">+93</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="355"
                                                                            data-country-code="al">
                                                                            <div class="flag al"></div><span
                                                                                class="country-name">Albania
                                                                                (Shqipëri)</span><span
                                                                                class="dial-code">+355</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="213"
                                                                            data-country-code="dz">
                                                                            <div class="flag dz"></div><span
                                                                                class="country-name">Algeria
                                                                                (‫الجزائر‬‎)</span><span
                                                                                class="dial-code">+213</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="as">
                                                                            <div class="flag as"></div><span
                                                                                class="country-name">American
                                                                                Samoa</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="376"
                                                                            data-country-code="ad">
                                                                            <div class="flag ad"></div><span
                                                                                class="country-name">Andorra</span><span
                                                                                class="dial-code">+376</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="244"
                                                                            data-country-code="ao">
                                                                            <div class="flag ao"></div><span
                                                                                class="country-name">Angola</span><span
                                                                                class="dial-code">+244</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="ai">
                                                                            <div class="flag ai"></div><span
                                                                                class="country-name">Anguilla</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="ag">
                                                                            <div class="flag ag"></div><span
                                                                                class="country-name">Antigua and
                                                                                Barbuda</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="54"
                                                                            data-country-code="ar">
                                                                            <div class="flag ar"></div><span
                                                                                class="country-name">Argentina</span><span
                                                                                class="dial-code">+54</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="374"
                                                                            data-country-code="am">
                                                                            <div class="flag am"></div><span
                                                                                class="country-name">Armenia
                                                                                (Հայաստան)</span><span
                                                                                class="dial-code">+374</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="297"
                                                                            data-country-code="aw">
                                                                            <div class="flag aw"></div><span
                                                                                class="country-name">Aruba</span><span
                                                                                class="dial-code">+297</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="247"
                                                                            data-country-code="ac">
                                                                            <div class="flag ac"></div><span
                                                                                class="country-name">Ascension
                                                                                Island</span><span
                                                                                class="dial-code">+247</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="61"
                                                                            data-country-code="au">
                                                                            <div class="flag au"></div><span
                                                                                class="country-name">Australia</span><span
                                                                                class="dial-code">+61</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="43"
                                                                            data-country-code="at">
                                                                            <div class="flag at"></div><span
                                                                                class="country-name">Austria
                                                                                (Österreich)</span><span
                                                                                class="dial-code">+43</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="994"
                                                                            data-country-code="az">
                                                                            <div class="flag az"></div><span
                                                                                class="country-name">Azerbaijan
                                                                                (Azərbaycan)</span><span
                                                                                class="dial-code">+994</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="bs">
                                                                            <div class="flag bs"></div><span
                                                                                class="country-name">Bahamas</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="973"
                                                                            data-country-code="bh">
                                                                            <div class="flag bh"></div><span
                                                                                class="country-name">Bahrain
                                                                                (‫البحرين‬‎)</span><span
                                                                                class="dial-code">+973</span>
                                                                        </li>
                                                                        <li class="country active" data-dial-code="880"
                                                                            data-country-code="bd">
                                                                            <div class="flag bd"></div><span
                                                                                class="country-name">Bangladesh
                                                                                (বাংলাদেশ)</span><span
                                                                                class="dial-code">+880</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="bb">
                                                                            <div class="flag bb"></div><span
                                                                                class="country-name">Barbados</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="375"
                                                                            data-country-code="by">
                                                                            <div class="flag by"></div><span
                                                                                class="country-name">Belarus
                                                                                (Беларусь)</span><span
                                                                                class="dial-code">+375</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="32"
                                                                            data-country-code="be">
                                                                            <div class="flag be"></div><span
                                                                                class="country-name">Belgium
                                                                                (België)</span><span
                                                                                class="dial-code">+32</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="501"
                                                                            data-country-code="bz">
                                                                            <div class="flag bz"></div><span
                                                                                class="country-name">Belize</span><span
                                                                                class="dial-code">+501</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="229"
                                                                            data-country-code="bj">
                                                                            <div class="flag bj"></div><span
                                                                                class="country-name">Benin
                                                                                (Bénin)</span><span
                                                                                class="dial-code">+229</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="bm">
                                                                            <div class="flag bm"></div><span
                                                                                class="country-name">Bermuda</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="975"
                                                                            data-country-code="bt">
                                                                            <div class="flag bt"></div><span
                                                                                class="country-name">Bhutan
                                                                                (འབྲུག)</span><span
                                                                                class="dial-code">+975</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="591"
                                                                            data-country-code="bo">
                                                                            <div class="flag bo"></div><span
                                                                                class="country-name">Bolivia</span><span
                                                                                class="dial-code">+591</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="387"
                                                                            data-country-code="ba">
                                                                            <div class="flag ba"></div><span
                                                                                class="country-name">Bosnia and
                                                                                Herzegovina (Босна и
                                                                                Херцеговина)</span><span
                                                                                class="dial-code">+387</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="267"
                                                                            data-country-code="bw">
                                                                            <div class="flag bw"></div><span
                                                                                class="country-name">Botswana</span><span
                                                                                class="dial-code">+267</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="55"
                                                                            data-country-code="br">
                                                                            <div class="flag br"></div><span
                                                                                class="country-name">Brazil
                                                                                (Brasil)</span><span
                                                                                class="dial-code">+55</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="246"
                                                                            data-country-code="io">
                                                                            <div class="flag io"></div><span
                                                                                class="country-name">British Indian
                                                                                Ocean Territory</span><span
                                                                                class="dial-code">+246</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="vg">
                                                                            <div class="flag vg"></div><span
                                                                                class="country-name">British Virgin
                                                                                Islands</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="673"
                                                                            data-country-code="bn">
                                                                            <div class="flag bn"></div><span
                                                                                class="country-name">Brunei</span><span
                                                                                class="dial-code">+673</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="359"
                                                                            data-country-code="bg">
                                                                            <div class="flag bg"></div><span
                                                                                class="country-name">Bulgaria
                                                                                (България)</span><span
                                                                                class="dial-code">+359</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="226"
                                                                            data-country-code="bf">
                                                                            <div class="flag bf"></div><span
                                                                                class="country-name">Burkina
                                                                                Faso</span><span
                                                                                class="dial-code">+226</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="257"
                                                                            data-country-code="bi">
                                                                            <div class="flag bi"></div><span
                                                                                class="country-name">Burundi
                                                                                (Uburundi)</span><span
                                                                                class="dial-code">+257</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="855"
                                                                            data-country-code="kh">
                                                                            <div class="flag kh"></div><span
                                                                                class="country-name">Cambodia
                                                                                (កម្ពុជា)</span><span
                                                                                class="dial-code">+855</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="237"
                                                                            data-country-code="cm">
                                                                            <div class="flag cm"></div><span
                                                                                class="country-name">Cameroon
                                                                                (Cameroun)</span><span
                                                                                class="dial-code">+237</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="ca">
                                                                            <div class="flag ca"></div><span
                                                                                class="country-name">Canada</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="238"
                                                                            data-country-code="cv">
                                                                            <div class="flag cv"></div><span
                                                                                class="country-name">Cape Verde (Kabu
                                                                                Verdi)</span><span
                                                                                class="dial-code">+238</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="599"
                                                                            data-country-code="bq">
                                                                            <div class="flag bq"></div><span
                                                                                class="country-name">Caribbean
                                                                                Netherlands</span><span
                                                                                class="dial-code">+599</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="ky">
                                                                            <div class="flag ky"></div><span
                                                                                class="country-name">Cayman
                                                                                Islands</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="236"
                                                                            data-country-code="cf">
                                                                            <div class="flag cf"></div><span
                                                                                class="country-name">Central African
                                                                                Republic (République
                                                                                centrafricaine)</span><span
                                                                                class="dial-code">+236</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="235"
                                                                            data-country-code="td">
                                                                            <div class="flag td"></div><span
                                                                                class="country-name">Chad
                                                                                (Tchad)</span><span
                                                                                class="dial-code">+235</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="56"
                                                                            data-country-code="cl">
                                                                            <div class="flag cl"></div><span
                                                                                class="country-name">Chile</span><span
                                                                                class="dial-code">+56</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="86"
                                                                            data-country-code="cn">
                                                                            <div class="flag cn"></div><span
                                                                                class="country-name">China
                                                                                (中国)</span><span
                                                                                class="dial-code">+86</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="61"
                                                                            data-country-code="cx">
                                                                            <div class="flag cx"></div><span
                                                                                class="country-name">Christmas
                                                                                Island</span><span
                                                                                class="dial-code">+61</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="61"
                                                                            data-country-code="cc">
                                                                            <div class="flag cc"></div><span
                                                                                class="country-name">Cocos (Keeling)
                                                                                Islands</span><span
                                                                                class="dial-code">+61</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="57"
                                                                            data-country-code="co">
                                                                            <div class="flag co"></div><span
                                                                                class="country-name">Colombia</span><span
                                                                                class="dial-code">+57</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="269"
                                                                            data-country-code="km">
                                                                            <div class="flag km"></div><span
                                                                                class="country-name">Comoros (‫جزر
                                                                                القمر‬‎)</span><span
                                                                                class="dial-code">+269</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="243"
                                                                            data-country-code="cd">
                                                                            <div class="flag cd"></div><span
                                                                                class="country-name">Congo (DRC)
                                                                                (Jamhuri ya Kidemokrasia ya
                                                                                Kongo)</span><span
                                                                                class="dial-code">+243</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="242"
                                                                            data-country-code="cg">
                                                                            <div class="flag cg"></div><span
                                                                                class="country-name">Congo (Republic)
                                                                                (Congo-Brazzaville)</span><span
                                                                                class="dial-code">+242</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="682"
                                                                            data-country-code="ck">
                                                                            <div class="flag ck"></div><span
                                                                                class="country-name">Cook
                                                                                Islands</span><span
                                                                                class="dial-code">+682</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="506"
                                                                            data-country-code="cr">
                                                                            <div class="flag cr"></div><span
                                                                                class="country-name">Costa
                                                                                Rica</span><span
                                                                                class="dial-code">+506</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="225"
                                                                            data-country-code="ci">
                                                                            <div class="flag ci"></div><span
                                                                                class="country-name">Côte
                                                                                d’Ivoire</span><span
                                                                                class="dial-code">+225</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="385"
                                                                            data-country-code="hr">
                                                                            <div class="flag hr"></div><span
                                                                                class="country-name">Croatia
                                                                                (Hrvatska)</span><span
                                                                                class="dial-code">+385</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="53"
                                                                            data-country-code="cu">
                                                                            <div class="flag cu"></div><span
                                                                                class="country-name">Cuba</span><span
                                                                                class="dial-code">+53</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="599"
                                                                            data-country-code="cw">
                                                                            <div class="flag cw"></div><span
                                                                                class="country-name">Curaçao</span><span
                                                                                class="dial-code">+599</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="357"
                                                                            data-country-code="cy">
                                                                            <div class="flag cy"></div><span
                                                                                class="country-name">Cyprus
                                                                                (Κύπρος)</span><span
                                                                                class="dial-code">+357</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="420"
                                                                            data-country-code="cz">
                                                                            <div class="flag cz"></div><span
                                                                                class="country-name">Czech Republic
                                                                                (Česká republika)</span><span
                                                                                class="dial-code">+420</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="45"
                                                                            data-country-code="dk">
                                                                            <div class="flag dk"></div><span
                                                                                class="country-name">Denmark
                                                                                (Danmark)</span><span
                                                                                class="dial-code">+45</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="253"
                                                                            data-country-code="dj">
                                                                            <div class="flag dj"></div><span
                                                                                class="country-name">Djibouti</span><span
                                                                                class="dial-code">+253</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="dm">
                                                                            <div class="flag dm"></div><span
                                                                                class="country-name">Dominica</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="do">
                                                                            <div class="flag do"></div><span
                                                                                class="country-name">Dominican Republic
                                                                                (República Dominicana)</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="593"
                                                                            data-country-code="ec">
                                                                            <div class="flag ec"></div><span
                                                                                class="country-name">Ecuador</span><span
                                                                                class="dial-code">+593</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="20"
                                                                            data-country-code="eg">
                                                                            <div class="flag eg"></div><span
                                                                                class="country-name">Egypt
                                                                                (‫مصر‬‎)</span><span
                                                                                class="dial-code">+20</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="503"
                                                                            data-country-code="sv">
                                                                            <div class="flag sv"></div><span
                                                                                class="country-name">El
                                                                                Salvador</span><span
                                                                                class="dial-code">+503</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="240"
                                                                            data-country-code="gq">
                                                                            <div class="flag gq"></div><span
                                                                                class="country-name">Equatorial Guinea
                                                                                (Guinea Ecuatorial)</span><span
                                                                                class="dial-code">+240</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="291"
                                                                            data-country-code="er">
                                                                            <div class="flag er"></div><span
                                                                                class="country-name">Eritrea</span><span
                                                                                class="dial-code">+291</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="372"
                                                                            data-country-code="ee">
                                                                            <div class="flag ee"></div><span
                                                                                class="country-name">Estonia
                                                                                (Eesti)</span><span
                                                                                class="dial-code">+372</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="268"
                                                                            data-country-code="sz">
                                                                            <div class="flag sz"></div><span
                                                                                class="country-name">Eswatini</span><span
                                                                                class="dial-code">+268</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="251"
                                                                            data-country-code="et">
                                                                            <div class="flag et"></div><span
                                                                                class="country-name">Ethiopia</span><span
                                                                                class="dial-code">+251</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="500"
                                                                            data-country-code="fk">
                                                                            <div class="flag fk"></div><span
                                                                                class="country-name">Falkland Islands
                                                                                (Islas Malvinas)</span><span
                                                                                class="dial-code">+500</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="298"
                                                                            data-country-code="fo">
                                                                            <div class="flag fo"></div><span
                                                                                class="country-name">Faroe Islands
                                                                                (Føroyar)</span><span
                                                                                class="dial-code">+298</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="679"
                                                                            data-country-code="fj">
                                                                            <div class="flag fj"></div><span
                                                                                class="country-name">Fiji</span><span
                                                                                class="dial-code">+679</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="358"
                                                                            data-country-code="fi">
                                                                            <div class="flag fi"></div><span
                                                                                class="country-name">Finland
                                                                                (Suomi)</span><span
                                                                                class="dial-code">+358</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="33"
                                                                            data-country-code="fr">
                                                                            <div class="flag fr"></div><span
                                                                                class="country-name">France</span><span
                                                                                class="dial-code">+33</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="594"
                                                                            data-country-code="gf">
                                                                            <div class="flag gf"></div><span
                                                                                class="country-name">French Guiana
                                                                                (Guyane française)</span><span
                                                                                class="dial-code">+594</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="689"
                                                                            data-country-code="pf">
                                                                            <div class="flag pf"></div><span
                                                                                class="country-name">French Polynesia
                                                                                (Polynésie française)</span><span
                                                                                class="dial-code">+689</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="241"
                                                                            data-country-code="ga">
                                                                            <div class="flag ga"></div><span
                                                                                class="country-name">Gabon</span><span
                                                                                class="dial-code">+241</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="220"
                                                                            data-country-code="gm">
                                                                            <div class="flag gm"></div><span
                                                                                class="country-name">Gambia</span><span
                                                                                class="dial-code">+220</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="995"
                                                                            data-country-code="ge">
                                                                            <div class="flag ge"></div><span
                                                                                class="country-name">Georgia
                                                                                (საქართველო)</span><span
                                                                                class="dial-code">+995</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="49"
                                                                            data-country-code="de">
                                                                            <div class="flag de"></div><span
                                                                                class="country-name">Germany
                                                                                (Deutschland)</span><span
                                                                                class="dial-code">+49</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="233"
                                                                            data-country-code="gh">
                                                                            <div class="flag gh"></div><span
                                                                                class="country-name">Ghana
                                                                                (Gaana)</span><span
                                                                                class="dial-code">+233</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="350"
                                                                            data-country-code="gi">
                                                                            <div class="flag gi"></div><span
                                                                                class="country-name">Gibraltar</span><span
                                                                                class="dial-code">+350</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="30"
                                                                            data-country-code="gr">
                                                                            <div class="flag gr"></div><span
                                                                                class="country-name">Greece
                                                                                (Ελλάδα)</span><span
                                                                                class="dial-code">+30</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="299"
                                                                            data-country-code="gl">
                                                                            <div class="flag gl"></div><span
                                                                                class="country-name">Greenland
                                                                                (Kalaallit Nunaat)</span><span
                                                                                class="dial-code">+299</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="gd">
                                                                            <div class="flag gd"></div><span
                                                                                class="country-name">Grenada</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="590"
                                                                            data-country-code="gp">
                                                                            <div class="flag gp"></div><span
                                                                                class="country-name">Guadeloupe</span><span
                                                                                class="dial-code">+590</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="gu">
                                                                            <div class="flag gu"></div><span
                                                                                class="country-name">Guam</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="502"
                                                                            data-country-code="gt">
                                                                            <div class="flag gt"></div><span
                                                                                class="country-name">Guatemala</span><span
                                                                                class="dial-code">+502</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="44"
                                                                            data-country-code="gg">
                                                                            <div class="flag gg"></div><span
                                                                                class="country-name">Guernsey</span><span
                                                                                class="dial-code">+44</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="224"
                                                                            data-country-code="gn">
                                                                            <div class="flag gn"></div><span
                                                                                class="country-name">Guinea
                                                                                (Guinée)</span><span
                                                                                class="dial-code">+224</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="245"
                                                                            data-country-code="gw">
                                                                            <div class="flag gw"></div><span
                                                                                class="country-name">Guinea-Bissau
                                                                                (Guiné Bissau)</span><span
                                                                                class="dial-code">+245</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="592"
                                                                            data-country-code="gy">
                                                                            <div class="flag gy"></div><span
                                                                                class="country-name">Guyana</span><span
                                                                                class="dial-code">+592</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="509"
                                                                            data-country-code="ht">
                                                                            <div class="flag ht"></div><span
                                                                                class="country-name">Haiti</span><span
                                                                                class="dial-code">+509</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="504"
                                                                            data-country-code="hn">
                                                                            <div class="flag hn"></div><span
                                                                                class="country-name">Honduras</span><span
                                                                                class="dial-code">+504</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="852"
                                                                            data-country-code="hk">
                                                                            <div class="flag hk"></div><span
                                                                                class="country-name">Hong Kong
                                                                                (香港)</span><span
                                                                                class="dial-code">+852</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="36"
                                                                            data-country-code="hu">
                                                                            <div class="flag hu"></div><span
                                                                                class="country-name">Hungary
                                                                                (Magyarország)</span><span
                                                                                class="dial-code">+36</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="354"
                                                                            data-country-code="is">
                                                                            <div class="flag is"></div><span
                                                                                class="country-name">Iceland
                                                                                (Ísland)</span><span
                                                                                class="dial-code">+354</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="91"
                                                                            data-country-code="in">
                                                                            <div class="flag in"></div><span
                                                                                class="country-name">India
                                                                                (भारत)</span><span
                                                                                class="dial-code">+91</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="62"
                                                                            data-country-code="id">
                                                                            <div class="flag id"></div><span
                                                                                class="country-name">Indonesia</span><span
                                                                                class="dial-code">+62</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="98"
                                                                            data-country-code="ir">
                                                                            <div class="flag ir"></div><span
                                                                                class="country-name">Iran
                                                                                (‫ایران‬‎)</span><span
                                                                                class="dial-code">+98</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="964"
                                                                            data-country-code="iq">
                                                                            <div class="flag iq"></div><span
                                                                                class="country-name">Iraq
                                                                                (‫العراق‬‎)</span><span
                                                                                class="dial-code">+964</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="353"
                                                                            data-country-code="ie">
                                                                            <div class="flag ie"></div><span
                                                                                class="country-name">Ireland</span><span
                                                                                class="dial-code">+353</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="44"
                                                                            data-country-code="im">
                                                                            <div class="flag im"></div><span
                                                                                class="country-name">Isle of
                                                                                Man</span><span
                                                                                class="dial-code">+44</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="972"
                                                                            data-country-code="il">
                                                                            <div class="flag il"></div><span
                                                                                class="country-name">Israel
                                                                                (‫ישראל‬‎)</span><span
                                                                                class="dial-code">+972</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="39"
                                                                            data-country-code="it">
                                                                            <div class="flag it"></div><span
                                                                                class="country-name">Italy
                                                                                (Italia)</span><span
                                                                                class="dial-code">+39</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="jm">
                                                                            <div class="flag jm"></div><span
                                                                                class="country-name">Jamaica</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="81"
                                                                            data-country-code="jp">
                                                                            <div class="flag jp"></div><span
                                                                                class="country-name">Japan
                                                                                (日本)</span><span
                                                                                class="dial-code">+81</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="44"
                                                                            data-country-code="je">
                                                                            <div class="flag je"></div><span
                                                                                class="country-name">Jersey</span><span
                                                                                class="dial-code">+44</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="962"
                                                                            data-country-code="jo">
                                                                            <div class="flag jo"></div><span
                                                                                class="country-name">Jordan
                                                                                (‫الأردن‬‎)</span><span
                                                                                class="dial-code">+962</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="7"
                                                                            data-country-code="kz">
                                                                            <div class="flag kz"></div><span
                                                                                class="country-name">Kazakhstan
                                                                                (Казахстан)</span><span
                                                                                class="dial-code">+7</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="254"
                                                                            data-country-code="ke">
                                                                            <div class="flag ke"></div><span
                                                                                class="country-name">Kenya</span><span
                                                                                class="dial-code">+254</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="686"
                                                                            data-country-code="ki">
                                                                            <div class="flag ki"></div><span
                                                                                class="country-name">Kiribati</span><span
                                                                                class="dial-code">+686</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="383"
                                                                            data-country-code="xk">
                                                                            <div class="flag xk"></div><span
                                                                                class="country-name">Kosovo</span><span
                                                                                class="dial-code">+383</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="965"
                                                                            data-country-code="kw">
                                                                            <div class="flag kw"></div><span
                                                                                class="country-name">Kuwait
                                                                                (‫الكويت‬‎)</span><span
                                                                                class="dial-code">+965</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="996"
                                                                            data-country-code="kg">
                                                                            <div class="flag kg"></div><span
                                                                                class="country-name">Kyrgyzstan
                                                                                (Кыргызстан)</span><span
                                                                                class="dial-code">+996</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="856"
                                                                            data-country-code="la">
                                                                            <div class="flag la"></div><span
                                                                                class="country-name">Laos
                                                                                (ລາວ)</span><span
                                                                                class="dial-code">+856</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="371"
                                                                            data-country-code="lv">
                                                                            <div class="flag lv"></div><span
                                                                                class="country-name">Latvia
                                                                                (Latvija)</span><span
                                                                                class="dial-code">+371</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="961"
                                                                            data-country-code="lb">
                                                                            <div class="flag lb"></div><span
                                                                                class="country-name">Lebanon
                                                                                (‫لبنان‬‎)</span><span
                                                                                class="dial-code">+961</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="266"
                                                                            data-country-code="ls">
                                                                            <div class="flag ls"></div><span
                                                                                class="country-name">Lesotho</span><span
                                                                                class="dial-code">+266</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="231"
                                                                            data-country-code="lr">
                                                                            <div class="flag lr"></div><span
                                                                                class="country-name">Liberia</span><span
                                                                                class="dial-code">+231</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="218"
                                                                            data-country-code="ly">
                                                                            <div class="flag ly"></div><span
                                                                                class="country-name">Libya
                                                                                (‫ليبيا‬‎)</span><span
                                                                                class="dial-code">+218</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="423"
                                                                            data-country-code="li">
                                                                            <div class="flag li"></div><span
                                                                                class="country-name">Liechtenstein</span><span
                                                                                class="dial-code">+423</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="370"
                                                                            data-country-code="lt">
                                                                            <div class="flag lt"></div><span
                                                                                class="country-name">Lithuania
                                                                                (Lietuva)</span><span
                                                                                class="dial-code">+370</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="352"
                                                                            data-country-code="lu">
                                                                            <div class="flag lu"></div><span
                                                                                class="country-name">Luxembourg</span><span
                                                                                class="dial-code">+352</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="853"
                                                                            data-country-code="mo">
                                                                            <div class="flag mo"></div><span
                                                                                class="country-name">Macau
                                                                                (澳門)</span><span
                                                                                class="dial-code">+853</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="389"
                                                                            data-country-code="mk">
                                                                            <div class="flag mk"></div><span
                                                                                class="country-name">Macedonia (FYROM)
                                                                                (Македонија)</span><span
                                                                                class="dial-code">+389</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="261"
                                                                            data-country-code="mg">
                                                                            <div class="flag mg"></div><span
                                                                                class="country-name">Madagascar
                                                                                (Madagasikara)</span><span
                                                                                class="dial-code">+261</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="265"
                                                                            data-country-code="mw">
                                                                            <div class="flag mw"></div><span
                                                                                class="country-name">Malawi</span><span
                                                                                class="dial-code">+265</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="60"
                                                                            data-country-code="my">
                                                                            <div class="flag my"></div><span
                                                                                class="country-name">Malaysia</span><span
                                                                                class="dial-code">+60</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="960"
                                                                            data-country-code="mv">
                                                                            <div class="flag mv"></div><span
                                                                                class="country-name">Maldives</span><span
                                                                                class="dial-code">+960</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="223"
                                                                            data-country-code="ml">
                                                                            <div class="flag ml"></div><span
                                                                                class="country-name">Mali</span><span
                                                                                class="dial-code">+223</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="356"
                                                                            data-country-code="mt">
                                                                            <div class="flag mt"></div><span
                                                                                class="country-name">Malta</span><span
                                                                                class="dial-code">+356</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="692"
                                                                            data-country-code="mh">
                                                                            <div class="flag mh"></div><span
                                                                                class="country-name">Marshall
                                                                                Islands</span><span
                                                                                class="dial-code">+692</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="596"
                                                                            data-country-code="mq">
                                                                            <div class="flag mq"></div><span
                                                                                class="country-name">Martinique</span><span
                                                                                class="dial-code">+596</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="222"
                                                                            data-country-code="mr">
                                                                            <div class="flag mr"></div><span
                                                                                class="country-name">Mauritania
                                                                                (‫موريتانيا‬‎)</span><span
                                                                                class="dial-code">+222</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="230"
                                                                            data-country-code="mu">
                                                                            <div class="flag mu"></div><span
                                                                                class="country-name">Mauritius
                                                                                (Moris)</span><span
                                                                                class="dial-code">+230</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="262"
                                                                            data-country-code="yt">
                                                                            <div class="flag yt"></div><span
                                                                                class="country-name">Mayotte</span><span
                                                                                class="dial-code">+262</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="52"
                                                                            data-country-code="mx">
                                                                            <div class="flag mx"></div><span
                                                                                class="country-name">Mexico
                                                                                (México)</span><span
                                                                                class="dial-code">+52</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="691"
                                                                            data-country-code="fm">
                                                                            <div class="flag fm"></div><span
                                                                                class="country-name">Micronesia</span><span
                                                                                class="dial-code">+691</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="373"
                                                                            data-country-code="md">
                                                                            <div class="flag md"></div><span
                                                                                class="country-name">Moldova (Republica
                                                                                Moldova)</span><span
                                                                                class="dial-code">+373</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="377"
                                                                            data-country-code="mc">
                                                                            <div class="flag mc"></div><span
                                                                                class="country-name">Monaco</span><span
                                                                                class="dial-code">+377</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="976"
                                                                            data-country-code="mn">
                                                                            <div class="flag mn"></div><span
                                                                                class="country-name">Mongolia
                                                                                (Монгол)</span><span
                                                                                class="dial-code">+976</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="382"
                                                                            data-country-code="me">
                                                                            <div class="flag me"></div><span
                                                                                class="country-name">Montenegro (Crna
                                                                                Gora)</span><span
                                                                                class="dial-code">+382</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="ms">
                                                                            <div class="flag ms"></div><span
                                                                                class="country-name">Montserrat</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="212"
                                                                            data-country-code="ma">
                                                                            <div class="flag ma"></div><span
                                                                                class="country-name">Morocco
                                                                                (‫المغرب‬‎)</span><span
                                                                                class="dial-code">+212</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="258"
                                                                            data-country-code="mz">
                                                                            <div class="flag mz"></div><span
                                                                                class="country-name">Mozambique
                                                                                (Moçambique)</span><span
                                                                                class="dial-code">+258</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="95"
                                                                            data-country-code="mm">
                                                                            <div class="flag mm"></div><span
                                                                                class="country-name">Myanmar (Burma)
                                                                                (မြန်မာ)</span><span
                                                                                class="dial-code">+95</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="264"
                                                                            data-country-code="na">
                                                                            <div class="flag na"></div><span
                                                                                class="country-name">Namibia
                                                                                (Namibië)</span><span
                                                                                class="dial-code">+264</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="674"
                                                                            data-country-code="nr">
                                                                            <div class="flag nr"></div><span
                                                                                class="country-name">Nauru</span><span
                                                                                class="dial-code">+674</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="977"
                                                                            data-country-code="np">
                                                                            <div class="flag np"></div><span
                                                                                class="country-name">Nepal
                                                                                (नेपाल)</span><span
                                                                                class="dial-code">+977</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="31"
                                                                            data-country-code="nl">
                                                                            <div class="flag nl"></div><span
                                                                                class="country-name">Netherlands
                                                                                (Nederland)</span><span
                                                                                class="dial-code">+31</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="687"
                                                                            data-country-code="nc">
                                                                            <div class="flag nc"></div><span
                                                                                class="country-name">New Caledonia
                                                                                (Nouvelle-Calédonie)</span><span
                                                                                class="dial-code">+687</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="64"
                                                                            data-country-code="nz">
                                                                            <div class="flag nz"></div><span
                                                                                class="country-name">New
                                                                                Zealand</span><span
                                                                                class="dial-code">+64</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="505"
                                                                            data-country-code="ni">
                                                                            <div class="flag ni"></div><span
                                                                                class="country-name">Nicaragua</span><span
                                                                                class="dial-code">+505</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="227"
                                                                            data-country-code="ne">
                                                                            <div class="flag ne"></div><span
                                                                                class="country-name">Niger
                                                                                (Nijar)</span><span
                                                                                class="dial-code">+227</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="234"
                                                                            data-country-code="ng">
                                                                            <div class="flag ng"></div><span
                                                                                class="country-name">Nigeria</span><span
                                                                                class="dial-code">+234</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="683"
                                                                            data-country-code="nu">
                                                                            <div class="flag nu"></div><span
                                                                                class="country-name">Niue</span><span
                                                                                class="dial-code">+683</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="672"
                                                                            data-country-code="nf">
                                                                            <div class="flag nf"></div><span
                                                                                class="country-name">Norfolk
                                                                                Island</span><span
                                                                                class="dial-code">+672</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="850"
                                                                            data-country-code="kp">
                                                                            <div class="flag kp"></div><span
                                                                                class="country-name">North Korea (조선
                                                                                민주주의 인민 공화국)</span><span
                                                                                class="dial-code">+850</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="mp">
                                                                            <div class="flag mp"></div><span
                                                                                class="country-name">Northern Mariana
                                                                                Islands</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="47"
                                                                            data-country-code="no">
                                                                            <div class="flag no"></div><span
                                                                                class="country-name">Norway
                                                                                (Norge)</span><span
                                                                                class="dial-code">+47</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="968"
                                                                            data-country-code="om">
                                                                            <div class="flag om"></div><span
                                                                                class="country-name">Oman
                                                                                (‫عُمان‬‎)</span><span
                                                                                class="dial-code">+968</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="92"
                                                                            data-country-code="pk">
                                                                            <div class="flag pk"></div><span
                                                                                class="country-name">Pakistan
                                                                                (‫پاکستان‬‎)</span><span
                                                                                class="dial-code">+92</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="680"
                                                                            data-country-code="pw">
                                                                            <div class="flag pw"></div><span
                                                                                class="country-name">Palau</span><span
                                                                                class="dial-code">+680</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="970"
                                                                            data-country-code="ps">
                                                                            <div class="flag ps"></div><span
                                                                                class="country-name">Palestine
                                                                                (‫فلسطين‬‎)</span><span
                                                                                class="dial-code">+970</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="507"
                                                                            data-country-code="pa">
                                                                            <div class="flag pa"></div><span
                                                                                class="country-name">Panama
                                                                                (Panamá)</span><span
                                                                                class="dial-code">+507</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="675"
                                                                            data-country-code="pg">
                                                                            <div class="flag pg"></div><span
                                                                                class="country-name">Papua New
                                                                                Guinea</span><span
                                                                                class="dial-code">+675</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="595"
                                                                            data-country-code="py">
                                                                            <div class="flag py"></div><span
                                                                                class="country-name">Paraguay</span><span
                                                                                class="dial-code">+595</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="51"
                                                                            data-country-code="pe">
                                                                            <div class="flag pe"></div><span
                                                                                class="country-name">Peru
                                                                                (Perú)</span><span
                                                                                class="dial-code">+51</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="63"
                                                                            data-country-code="ph">
                                                                            <div class="flag ph"></div><span
                                                                                class="country-name">Philippines</span><span
                                                                                class="dial-code">+63</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="48"
                                                                            data-country-code="pl">
                                                                            <div class="flag pl"></div><span
                                                                                class="country-name">Poland
                                                                                (Polska)</span><span
                                                                                class="dial-code">+48</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="351"
                                                                            data-country-code="pt">
                                                                            <div class="flag pt"></div><span
                                                                                class="country-name">Portugal</span><span
                                                                                class="dial-code">+351</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="pr">
                                                                            <div class="flag pr"></div><span
                                                                                class="country-name">Puerto
                                                                                Rico</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="974"
                                                                            data-country-code="qa">
                                                                            <div class="flag qa"></div><span
                                                                                class="country-name">Qatar
                                                                                (‫قطر‬‎)</span><span
                                                                                class="dial-code">+974</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="262"
                                                                            data-country-code="re">
                                                                            <div class="flag re"></div><span
                                                                                class="country-name">Réunion (La
                                                                                Réunion)</span><span
                                                                                class="dial-code">+262</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="40"
                                                                            data-country-code="ro">
                                                                            <div class="flag ro"></div><span
                                                                                class="country-name">Romania
                                                                                (România)</span><span
                                                                                class="dial-code">+40</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="7"
                                                                            data-country-code="ru">
                                                                            <div class="flag ru"></div><span
                                                                                class="country-name">Russia
                                                                                (Россия)</span><span
                                                                                class="dial-code">+7</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="250"
                                                                            data-country-code="rw">
                                                                            <div class="flag rw"></div><span
                                                                                class="country-name">Rwanda</span><span
                                                                                class="dial-code">+250</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="590"
                                                                            data-country-code="bl">
                                                                            <div class="flag bl"></div><span
                                                                                class="country-name">Saint
                                                                                Barthélemy</span><span
                                                                                class="dial-code">+590</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="290"
                                                                            data-country-code="sh">
                                                                            <div class="flag sh"></div><span
                                                                                class="country-name">Saint
                                                                                Helena</span><span
                                                                                class="dial-code">+290</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="kn">
                                                                            <div class="flag kn"></div><span
                                                                                class="country-name">Saint Kitts and
                                                                                Nevis</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="lc">
                                                                            <div class="flag lc"></div><span
                                                                                class="country-name">Saint
                                                                                Lucia</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="590"
                                                                            data-country-code="mf">
                                                                            <div class="flag mf"></div><span
                                                                                class="country-name">Saint Martin
                                                                                (Saint-Martin (partie
                                                                                française))</span><span
                                                                                class="dial-code">+590</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="508"
                                                                            data-country-code="pm">
                                                                            <div class="flag pm"></div><span
                                                                                class="country-name">Saint Pierre and
                                                                                Miquelon
                                                                                (Saint-Pierre-et-Miquelon)</span><span
                                                                                class="dial-code">+508</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="vc">
                                                                            <div class="flag vc"></div><span
                                                                                class="country-name">Saint Vincent and
                                                                                the Grenadines</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="685"
                                                                            data-country-code="ws">
                                                                            <div class="flag ws"></div><span
                                                                                class="country-name">Samoa</span><span
                                                                                class="dial-code">+685</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="378"
                                                                            data-country-code="sm">
                                                                            <div class="flag sm"></div><span
                                                                                class="country-name">San
                                                                                Marino</span><span
                                                                                class="dial-code">+378</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="239"
                                                                            data-country-code="st">
                                                                            <div class="flag st"></div><span
                                                                                class="country-name">São Tomé and
                                                                                Príncipe (São Tomé e
                                                                                Príncipe)</span><span
                                                                                class="dial-code">+239</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="966"
                                                                            data-country-code="sa">
                                                                            <div class="flag sa"></div><span
                                                                                class="country-name">Saudi Arabia
                                                                                (‫المملكة العربية
                                                                                السعودية‬‎)</span><span
                                                                                class="dial-code">+966</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="221"
                                                                            data-country-code="sn">
                                                                            <div class="flag sn"></div><span
                                                                                class="country-name">Senegal
                                                                                (Sénégal)</span><span
                                                                                class="dial-code">+221</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="381"
                                                                            data-country-code="rs">
                                                                            <div class="flag rs"></div><span
                                                                                class="country-name">Serbia
                                                                                (Србија)</span><span
                                                                                class="dial-code">+381</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="248"
                                                                            data-country-code="sc">
                                                                            <div class="flag sc"></div><span
                                                                                class="country-name">Seychelles</span><span
                                                                                class="dial-code">+248</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="232"
                                                                            data-country-code="sl">
                                                                            <div class="flag sl"></div><span
                                                                                class="country-name">Sierra
                                                                                Leone</span><span
                                                                                class="dial-code">+232</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="65"
                                                                            data-country-code="sg">
                                                                            <div class="flag sg"></div><span
                                                                                class="country-name">Singapore</span><span
                                                                                class="dial-code">+65</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="sx">
                                                                            <div class="flag sx"></div><span
                                                                                class="country-name">Sint
                                                                                Maarten</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="421"
                                                                            data-country-code="sk">
                                                                            <div class="flag sk"></div><span
                                                                                class="country-name">Slovakia
                                                                                (Slovensko)</span><span
                                                                                class="dial-code">+421</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="386"
                                                                            data-country-code="si">
                                                                            <div class="flag si"></div><span
                                                                                class="country-name">Slovenia
                                                                                (Slovenija)</span><span
                                                                                class="dial-code">+386</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="677"
                                                                            data-country-code="sb">
                                                                            <div class="flag sb"></div><span
                                                                                class="country-name">Solomon
                                                                                Islands</span><span
                                                                                class="dial-code">+677</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="252"
                                                                            data-country-code="so">
                                                                            <div class="flag so"></div><span
                                                                                class="country-name">Somalia
                                                                                (Soomaaliya)</span><span
                                                                                class="dial-code">+252</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="27"
                                                                            data-country-code="za">
                                                                            <div class="flag za"></div><span
                                                                                class="country-name">South
                                                                                Africa</span><span
                                                                                class="dial-code">+27</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="82"
                                                                            data-country-code="kr">
                                                                            <div class="flag kr"></div><span
                                                                                class="country-name">South Korea
                                                                                (대한민국)</span><span
                                                                                class="dial-code">+82</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="211"
                                                                            data-country-code="ss">
                                                                            <div class="flag ss"></div><span
                                                                                class="country-name">South Sudan (‫جنوب
                                                                                السودان‬‎)</span><span
                                                                                class="dial-code">+211</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="34"
                                                                            data-country-code="es">
                                                                            <div class="flag es"></div><span
                                                                                class="country-name">Spain
                                                                                (España)</span><span
                                                                                class="dial-code">+34</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="94"
                                                                            data-country-code="lk">
                                                                            <div class="flag lk"></div><span
                                                                                class="country-name">Sri Lanka (ශ්‍රී
                                                                                ලංකාව)</span><span
                                                                                class="dial-code">+94</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="249"
                                                                            data-country-code="sd">
                                                                            <div class="flag sd"></div><span
                                                                                class="country-name">Sudan
                                                                                (‫السودان‬‎)</span><span
                                                                                class="dial-code">+249</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="597"
                                                                            data-country-code="sr">
                                                                            <div class="flag sr"></div><span
                                                                                class="country-name">Suriname</span><span
                                                                                class="dial-code">+597</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="47"
                                                                            data-country-code="sj">
                                                                            <div class="flag sj"></div><span
                                                                                class="country-name">Svalbard and Jan
                                                                                Mayen</span><span
                                                                                class="dial-code">+47</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="46"
                                                                            data-country-code="se">
                                                                            <div class="flag se"></div><span
                                                                                class="country-name">Sweden
                                                                                (Sverige)</span><span
                                                                                class="dial-code">+46</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="41"
                                                                            data-country-code="ch">
                                                                            <div class="flag ch"></div><span
                                                                                class="country-name">Switzerland
                                                                                (Schweiz)</span><span
                                                                                class="dial-code">+41</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="963"
                                                                            data-country-code="sy">
                                                                            <div class="flag sy"></div><span
                                                                                class="country-name">Syria
                                                                                (‫سوريا‬‎)</span><span
                                                                                class="dial-code">+963</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="886"
                                                                            data-country-code="tw">
                                                                            <div class="flag tw"></div><span
                                                                                class="country-name">Taiwan
                                                                                (台灣)</span><span
                                                                                class="dial-code">+886</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="992"
                                                                            data-country-code="tj">
                                                                            <div class="flag tj"></div><span
                                                                                class="country-name">Tajikistan</span><span
                                                                                class="dial-code">+992</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="255"
                                                                            data-country-code="tz">
                                                                            <div class="flag tz"></div><span
                                                                                class="country-name">Tanzania</span><span
                                                                                class="dial-code">+255</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="66"
                                                                            data-country-code="th">
                                                                            <div class="flag th"></div><span
                                                                                class="country-name">Thailand
                                                                                (ไทย)</span><span
                                                                                class="dial-code">+66</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="670"
                                                                            data-country-code="tl">
                                                                            <div class="flag tl"></div><span
                                                                                class="country-name">Timor-Leste</span><span
                                                                                class="dial-code">+670</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="228"
                                                                            data-country-code="tg">
                                                                            <div class="flag tg"></div><span
                                                                                class="country-name">Togo</span><span
                                                                                class="dial-code">+228</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="690"
                                                                            data-country-code="tk">
                                                                            <div class="flag tk"></div><span
                                                                                class="country-name">Tokelau</span><span
                                                                                class="dial-code">+690</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="676"
                                                                            data-country-code="to">
                                                                            <div class="flag to"></div><span
                                                                                class="country-name">Tonga</span><span
                                                                                class="dial-code">+676</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="tt">
                                                                            <div class="flag tt"></div><span
                                                                                class="country-name">Trinidad and
                                                                                Tobago</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="216"
                                                                            data-country-code="tn">
                                                                            <div class="flag tn"></div><span
                                                                                class="country-name">Tunisia
                                                                                (‫تونس‬‎)</span><span
                                                                                class="dial-code">+216</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="90"
                                                                            data-country-code="tr">
                                                                            <div class="flag tr"></div><span
                                                                                class="country-name">Turkey
                                                                                (Türkiye)</span><span
                                                                                class="dial-code">+90</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="993"
                                                                            data-country-code="tm">
                                                                            <div class="flag tm"></div><span
                                                                                class="country-name">Turkmenistan</span><span
                                                                                class="dial-code">+993</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="tc">
                                                                            <div class="flag tc"></div><span
                                                                                class="country-name">Turks and Caicos
                                                                                Islands</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="688"
                                                                            data-country-code="tv">
                                                                            <div class="flag tv"></div><span
                                                                                class="country-name">Tuvalu</span><span
                                                                                class="dial-code">+688</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="vi">
                                                                            <div class="flag vi"></div><span
                                                                                class="country-name">U.S. Virgin
                                                                                Islands</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="256"
                                                                            data-country-code="ug">
                                                                            <div class="flag ug"></div><span
                                                                                class="country-name">Uganda</span><span
                                                                                class="dial-code">+256</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="380"
                                                                            data-country-code="ua">
                                                                            <div class="flag ua"></div><span
                                                                                class="country-name">Ukraine
                                                                                (Україна)</span><span
                                                                                class="dial-code">+380</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="971"
                                                                            data-country-code="ae">
                                                                            <div class="flag ae"></div><span
                                                                                class="country-name">United Arab
                                                                                Emirates (‫الإمارات العربية
                                                                                المتحدة‬‎)</span><span
                                                                                class="dial-code">+971</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="44"
                                                                            data-country-code="gb">
                                                                            <div class="flag gb"></div><span
                                                                                class="country-name">United
                                                                                Kingdom</span><span
                                                                                class="dial-code">+44</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1"
                                                                            data-country-code="us">
                                                                            <div class="flag us"></div><span
                                                                                class="country-name">United
                                                                                States</span><span
                                                                                class="dial-code">+1</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="598"
                                                                            data-country-code="uy">
                                                                            <div class="flag uy"></div><span
                                                                                class="country-name">Uruguay</span><span
                                                                                class="dial-code">+598</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="998"
                                                                            data-country-code="uz">
                                                                            <div class="flag uz"></div><span
                                                                                class="country-name">Uzbekistan
                                                                                (Oʻzbekiston)</span><span
                                                                                class="dial-code">+998</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="678"
                                                                            data-country-code="vu">
                                                                            <div class="flag vu"></div><span
                                                                                class="country-name">Vanuatu</span><span
                                                                                class="dial-code">+678</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="39"
                                                                            data-country-code="va">
                                                                            <div class="flag va"></div><span
                                                                                class="country-name">Vatican City (Città
                                                                                del Vaticano)</span><span
                                                                                class="dial-code">+39</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="58"
                                                                            data-country-code="ve">
                                                                            <div class="flag ve"></div><span
                                                                                class="country-name">Venezuela</span><span
                                                                                class="dial-code">+58</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="84"
                                                                            data-country-code="vn">
                                                                            <div class="flag vn"></div><span
                                                                                class="country-name">Vietnam (Việt
                                                                                Nam)</span><span
                                                                                class="dial-code">+84</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="681"
                                                                            data-country-code="wf">
                                                                            <div class="flag wf"></div><span
                                                                                class="country-name">Wallis and Futuna
                                                                                (Wallis-et-Futuna)</span><span
                                                                                class="dial-code">+681</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="212"
                                                                            data-country-code="eh">
                                                                            <div class="flag eh"></div><span
                                                                                class="country-name">Western Sahara
                                                                                (‫الصحراء الغربية‬‎)</span><span
                                                                                class="dial-code">+212</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="967"
                                                                            data-country-code="ye">
                                                                            <div class="flag ye"></div><span
                                                                                class="country-name">Yemen
                                                                                (‫اليمن‬‎)</span><span
                                                                                class="dial-code">+967</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="260"
                                                                            data-country-code="zm">
                                                                            <div class="flag zm"></div><span
                                                                                class="country-name">Zambia</span><span
                                                                                class="dial-code">+260</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="263"
                                                                            data-country-code="zw">
                                                                            <div class="flag zw"></div><span
                                                                                class="country-name">Zimbabwe</span><span
                                                                                class="dial-code">+263</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="358"
                                                                            data-country-code="ax">
                                                                            <div class="flag ax"></div><span
                                                                                class="country-name">Åland
                                                                                Islands</span><span
                                                                                class="dial-code">+358</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <span class="help-block"></span>

                                                        </div>
                                                    </div>

                                                    <div class="am_phone_fields">
                                                        <label class="am_phone_label">This phone number can
                                                            receive:</label>
                                                        <div class="am_radio">
                                                            <input type="radio" name="new_phone" value="" id="am_sms">
                                                            <label for="am_sms">Text messages (SMS) &amp; phone
                                                                calls</label>
                                                        </div>
                                                        <div class="am_radio">
                                                            <input type="radio" name="new_phone" value="am_phone_only"
                                                                id="am_phone">
                                                            <label for="am_phone">Phone calls only</label>
                                                        </div>
                                                    </div>
                                                    <a class="am-add-new-number-next-button">
                                                        <div class="am_phone_cta">Verify number</div>
                                                    </a>
                                                </div>

                                                <div class="am_confirm_new section" style="display: none" data-step="3">
                                                    <div class="am_tfa_controls">
                                                        <div class="am_tfa_control am_tfa_back"><a
                                                                class="am-add-new-number-back-button"><span
                                                                    class="glyphicon glyphicon-menu-left"></span>
                                                                Back</a></div>
                                                    </div>
                                                    <div class="am_headline">Confirm phone number</div>
                                                    <div id="am_tagline_sent_confirmation" class="am_tagline"></div>

                                                    <div class="am_phone_fields">
                                                        <label class="am_phone_label"
                                                            for="am-add-new-number-verification-code">Verification
                                                            code</label>
                                                        <input type="text" name="new_number" class="am_new_phone_field"
                                                            placeholder="Enter verification code..."
                                                            id="am-add-new-number-verification-code">
                                                    </div>

                                                    <a class="am-add-new-number-next-button">
                                                        <div class="am_phone_cta">Confirm number</div>
                                                    </a>

                                                    <p class="am_guide_content">We can <a href="{{ url("#") }}"
                                                            class="am-resend-verification-code">resend the verification
                                                            code</a> if you didn’t receive it yet. </p>
                                                    <p class="am_guide_content">If you are still having problems
                                                        receiving the verification code, please <a href="{{ url("#") }}"
                                                            class="am-add-new-number-back-button">check if the phone
                                                            number is correct</a> and if it can receive the verification
                                                        code through text messages or phone calls only.</p>
                                                </div>

                                                <ul id="tfa-errors-list"></ul>
                                            </form>

                                        </div>



                                    </div> <!-- end am_panel am_sidebar -->

                                    <div class="am_panel am_phone">
                                        <div class="am_inner_panel">
                                            <div class="am_headline">Verified phone numbers</div>
                                            <div class="am_tagline">Manage the numbers you use for PIN verification
                                            </div>
                                            <div class="throbber tfa_init_loader" style="display: none;">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="22px" height="22px" viewBox="0 0 50 50"
                                                    style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                                    <path fill="#000"
                                                        d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
                                                        <animateTransform attributeType="xml" attributeName="transform"
                                                            type="rotate" from="0 25 25" to="360 25 25" dur="1s"
                                                            repeatCount="indefinite"></animateTransform>
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="am_master_no">
                                                <table class="am_table am_master" id="primary-phone-table"
                                                    style="display: none;">
                                                    <thead>
                                                        <tr>
                                                            <th class="am_tbl_head">Phone number used for registration
                                                            </th>
                                                            <th class="am_tbl_head">Status</th>
                                                            <th class="am_tbl_head">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div>
                                            <div class="am_master_no table-responsive">
                                                <table class="am_table" id="secondary-phone-table"
                                                    style="display: none;">
                                                    <thead>
                                                        <tr>
                                                            <th class="am_tbl_head">Additional numbers</th>
                                                            <th class="am_tbl_head">Status</th>
                                                            <th class="am_tbl_head">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="am_other"></tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> <!-- end am_panel am_phone -->

                                </div> <!-- end am_layout -->


                                <div id="tfa-modal-container">
                                    <div class="modal fade" id="tfa-modal-window" tabindex="-1" role="dialog"
                                        aria-labelledby="tfa-modal-window">
                                        <div class="modal-dialog" role="document">
                                            <form class="modal-content tfa_modal_form">

                                                <div class="tfa_modal_header">
                                                    <div class="am_headline"></div>
                                                </div>
                                                <div class="tfa_modal_body">

                                                </div>
                                                <div class="tfa_modal_footer">
                                                    <button type="submit"
                                                        class="btn btn-primary tfa_modal_btn"></button>

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>




                                <svg class="bk-icon -iconset-trash" height="128" style="display:none;" width="128"
                                    viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false">
                                    <path
                                        d="M112 37.5L109.2 27a4 4 0 0 0-3.9-3H88l-3.3-10.3A8 8 0 0 0 77 8H51a8 8 0 0 0-7.6 5.7L40 24H22.6a4 4 0 0 0-4 3l-2.5 10.5A2 2 0 0 0 18 40h92a2 2 0 0 0 2-2.5zM49 24l2-8h26l2 8zm55 26.2L97 113a8 8 0 0 1-8 7.1H39a8 8 0 0 1-8-7.1l-7-62.7a2 2 0 0 1 2-2.2h76a2 2 0 0 1 2 2.2z">
                                    </path>
                                </svg>
                                <script type="text/javascript">
                                    booking.jstmpl('entity_fields', (function () {
                                        var T = ["\n", "\n\u003cdiv class=\"js-entity-item\"\u003e\n", " ",
                                                ".", "[", "].", "children[0].",
                                                "/private/sanction_screening_form_q2_property_name/name",
                                                "/private/sanction_screening_form_q2_property_address/name",
                                                "/private/sanction_screening_placeholder_name/name",
                                                "/private/sanction_screening_form_q5_owner_name/name",
                                                "/private/sanction_screening_form_q5_owner_address/name",
                                                "/private/sanction_screening_form_q5_a_management_name/name",
                                                "/private/sanction_screening_form_q5_a_management_address/name",
                                                "/private/sanction_screening_form_q5_a_management_type_company_owner_name/name",
                                                "/private/sanction_screening_form_q5_a_management_type_company_owner_address/name",
                                                "/private/sanction_screening_form_q5_a_owner_placeholder/name",
                                                "/private/sanction_screening_form_q4_yes_name/name",
                                                "/private/sanction_screening_form_q4_yes_address/name",
                                                "/private/sanction_screening_form_q5_owner_name_2/name",
                                                "/private/sanction_screening_form_q5_owner_address_2/name",
                                                "Date of Birth", "Place of Birth", "disabled=\"disabled\"",
                                                "\n\u003ca class=\"js-remove-entity remove-entity-item\"\u003e\n",
                                                "iconset/trash", "large", "\n\u003c/a\u003e\n",
                                                "\n\u003cdiv class=\"row ss_entity_identification-line\"\u003e\n\u003cdiv class=\"col-sm-6\"\u003e\n\u003cdiv class=\"form-group\"\u003e\n\u003clabel\u003e",
                                                "\u003c/label\u003e\n\u003cinput type=\"text\" class=\"form-control\" value=\"",
                                                "\" name=\"", "name\" placeholder=\"", "\" required ",
                                                "/\u003e\n\u003c/div\u003e\n\u003c/div\u003e\n\u003cdiv class=\"col-sm-6\"\u003e\n\u003cdiv class=\"form-group\"\u003e\n\u003clabel\u003e",
                                                "\u003c/label\u003e\n\u003cinput type=\"text\" name=\"",
                                                "street\" class=\"form-control\" value=\"",
                                                "\" placeholder=\"",
                                                "/private/sanction_screening_placeholder_address/name",
                                                "/\u003e\n\u003c/div\u003e\n\u003c/div\u003e\n\u003c/div\u003e\n\u003cdiv class=\"row\"\u003e\n\u003cdiv class=\"col-sm-2\"\u003e\n\u003cdiv class=\"form-group\"\u003e\n\u003clabel\u003e",
                                                "/private/sanction_screening_addresses_zip/name",
                                                "zipcode\" class=\"form-control\" value=\"", "\" ",
                                                "/\u003e\n\u003c/div\u003e\n\u003c/div\u003e\n\u003cdiv class=\"col-sm-4\"\u003e\n\u003cdiv class=\"form-group\"\u003e\n\u003clabel\u003e",
                                                "/private/sanction_screening_addresses_city/name",
                                                "city\" class=\"form-control\" value=\"",
                                                "/private/sanction_screening_placeholder_city/name",
                                                " readonly=\"readonly\"",
                                                "/private/sanction_screening_addresses_country/name",
                                                "\u003c/label\u003e\n",
                                                "\n\u003cinput type=\"hidden\" name=\"",
                                                "cc1\" class=\"form-control\" value=\"",
                                                "\" /\u003e\n\u003cinput type=\"text\" name=\"",
                                                "cc1_aux\" class=\"form-control\" value=\"",
                                                "\" readonly=\"readonly\" disabled=\"disabled\"/\u003e\n",
                                                "\n\u003cselect name=\"",
                                                "cc1\" class=\"form-control\" required ",
                                                "\u003e\n\u003coption value=\"\" ", "selected=\"selected\"",
                                                "\u003e", "\u003c/option\u003e\n",
                                                "\n\u003coption value=\"", "\n\u003c/select\u003e\n",
                                                "\n\u003c/div\u003e\n\u003c/div\u003e\n\u003c/div\u003e\n\u003cdiv class=\"row",
                                                " hidden ",
                                                "\"\u003e\n\u003cdiv class=\"col-sm-6\"\u003e\n\u003cdiv class=\"form-group\"\u003e\n\u003clabel\u003e",
                                                "/private/sanction_screening_form_q5_a_management_type/name",
                                                "\u003c/label\u003e\n\u003cselect name=\"",
                                                "entity_type\" data-index=\"",
                                                "\" class=\"form-control js-management-role\"\u003e\n\u003coption value=\"individual\"\u003e",
                                                "/private/sanction_screening_form_q5_a_management_type_manager/name",
                                                "\u003c/option\u003e\n\u003coption ", "selected",
                                                " value=\"business\"\u003e",
                                                "/private/sanction_screening_form_q5_a_management_type_company/name",
                                                "\u003c/option\u003e\n\u003c/select\u003e\n\u003c/div\u003e\n\u003c/div\u003e\n\u003c/div\u003e\n",
                                                "\n\u003cdiv class=\"js-date-place-birth row",
                                                "date_of_birth\" class=\"form-control js-input-with-datepicker\" value=\"",
                                                "\" /\u003e\n\u003c/div\u003e\n\u003c/div\u003e\n\u003cdiv class=\"col-sm-6\"\u003e\n\u003cdiv class=\"form-group\"\u003e\n\u003clabel\u003e",
                                                "place_of_birth\" class=\"form-control\"\u003e\n\u003coption value=\"\" ",
                                                "\u003e\u003c/option\u003e\n",
                                                "\n\u003c/select\u003e\n\u003c/div\u003e\n\u003c/div\u003e\n\u003c/div\u003e\n",
                                                "\n\u003cinput type='hidden' name=\"",
                                                "entity_role\" value=\"", "\"/\u003e\n",
                                                "\n\u003c/div\u003e\n"
                                            ],
                                            V = ["fe_hide_outer_div", "fe_prepend", "fe_role", "index",
                                                "fe_is_children", "fe_name_label", "fe_address_label",
                                                "fe_name_placeholder", "fe_dob_label",
                                                "fe_place_of_birth_label", "fe_disabled",
                                                "fe_initially_disabled", "fe_currValue",
                                                "fe_is_property_address", "countries",
                                                "fe_enable_role_selection", "fe_children_role"
                                            ],
                                            WV, LV, VA;
                                        return function (VS) {
                                            var s = '',
                                                r = this.fn;

                                            function extranettmpl_inc_sanction_screening_entity_inc1(
                                            s) {
                                                s += T[2];
                                                if ((r.MJ(r.MB(V[2]) + "" !== "" + ""))) {
                                                    s += T[0];
                                                    r.MN(V[1], [r.F['entities'](r.MC(V[2])), T[3]].join(
                                                        ''));
                                                    s += T[0];
                                                    if ((r.MJ(r.MB(V[3]) + "" !== "" + ""))) {
                                                        s += T[0];
                                                        r.MN(V[1], [r.F['entities'](r.MC(V[2])), T[4], r
                                                            .F['entities'](r.MC(V[3])), T[5]
                                                        ].join(''));
                                                        s += T[0];
                                                    }
                                                    s += T[0];
                                                    if ((r.MJ(r.MB(V[4]) + "" === "" + "true"))) {
                                                        s += T[0];
                                                        r.MN(V[1], [r.F['entities'](r.MC(V[1])), T[6]]
                                                            .join(''));
                                                        s += T[0];
                                                    }
                                                    s += T[0];
                                                } else {
                                                    s += T[0];
                                                    r.MN(V[1], undefined);
                                                    s += T[0];
                                                }
                                                s += T[0];
                                                if ((r.MJ(r.MB(V[2]) + "" === "" + "property"))) {
                                                    s += T[0];
                                                    r.MN(V[5], r.ME(T[7], r.MB, r.MN, null));
                                                    s += T[0];
                                                    r.MN(V[6], r.ME(T[8], r.MB, r.MN, null));
                                                    s += T[0];
                                                    r.MN(V[7], r.ME(T[9], r.MB, r.MN, null));
                                                    s += T[0];
                                                } else if ((r.MJ(r.MB(V[2]) + "" === "" + "owner"))) {
                                                    s += T[0];
                                                    r.MN(V[5], r.ME(T[10], r.MB, r.MN, null));
                                                    s += T[0];
                                                    r.MN(V[6], r.ME(T[11], r.MB, r.MN, null));
                                                    s += T[0];
                                                    r.MN(V[7], r.ME(T[9], r.MB, r.MN, null));
                                                    s += T[0];
                                                } else if ((r.MJ(r.MB(V[2]) + "" === "" + "manager"))) {
                                                    s += T[0];
                                                    if ((r.MJ(r.MB(V[4]) + "" !== "" + "true"))) {
                                                        s += T[0];
                                                        r.MN(V[5], r.ME(T[12], r.MB, r.MN, null));
                                                        s += T[0];
                                                        r.MN(V[6], r.ME(T[13], r.MB, r.MN, null));
                                                        s += T[0];
                                                        r.MN(V[7], r.ME(T[9], r.MB, r.MN, null));
                                                        s += T[0];
                                                    } else {
                                                        s += T[0];
                                                        r.MN(V[5], r.ME(T[14], r.MB, r.MN, null));
                                                        s += T[0];
                                                        r.MN(V[6], r.ME(T[15], r.MB, r.MN, null));
                                                        s += T[0];
                                                        r.MN(V[7], r.ME(T[16], r.MB, r.MN, null));
                                                        s += T[0];
                                                    }
                                                    s += T[0];
                                                } else if ((r.MJ(r.MB(V[2]) + "" === "" +
                                                        "other_business"))) {
                                                    s += T[0];
                                                    r.MN(V[5], r.ME(T[17], r.MB, r.MN, null));
                                                    s += T[0];
                                                    r.MN(V[6], r.ME(T[18], r.MB, r.MN, null));
                                                    s += T[0];
                                                    r.MN(V[7], r.ME(T[9], r.MB, r.MN, null));
                                                    s += T[0];
                                                } else if ((r.MJ(r.MB(V[2]) + "" === "" +
                                                        "shareholder"))) {
                                                    s += T[0];
                                                    r.MN(V[5], r.ME(T[19], r.MB, r.MN, null));
                                                    s += T[0];
                                                    r.MN(V[6], r.ME(T[20], r.MB, r.MN, null));
                                                    s += T[0];
                                                    r.MN(V[7], r.ME(T[16], r.MB, r.MN, null));
                                                    s += T[0];
                                                }
                                                s += T[0];
                                                r.MN(V[8], T[21]);
                                                s += T[0];
                                                r.MN(V[9], T[22]);
                                                s += T[0];
                                                r.MN(V[10], undefined);
                                                s += T[0];
                                                if ((r.MJ(r.MB(V[11]) + "" === "" + "true"))) {
                                                    s += T[0];
                                                    r.MN(V[10], T[23]);
                                                    s += T[0];
                                                }
                                                s += T[0];
                                                if (((r.MJ(r.MB(V[3]) > 0)) && (r.MJ(r.MB(V[4]) + "" !==
                                                        "" + "true")))) {
                                                    s += [T[24], (VS.unshift({
                                                            'name': T[25],
                                                            'size': T[26]
                                                        }), (VA = r.HELPER("icon", VS[0])), VS
                                                        .shift(), VA), T[27]].join('');
                                                }
                                                s += [T[28], r.F['entities'](r.MC(V[5])), T[29], r.F[
                                                        'entities']((r.MC(V[12]) ? r.MC(V[12])[
                                                        "name"] : "")), T[30], r.F['entities'](r.MC(
                                                        V[1])), T[31], r.F['entities'](r.MC(V[7])),
                                                    T[32], r.F['entities'](r.MC(V[10])), T[33], r.F[
                                                        'entities'](r.MC(V[6])), T[34], r.F[
                                                        'entities'](r.MC(V[1])), T[35], r.F[
                                                        'entities']((r.MC(V[12]) ? (r.MC(V[12])[
                                                        "street"] || r.MC(V[12])[
                                                        "address"]) : "")), T[36], r.ME(T[37], r.MB,
                                                        r.MN, null), T[32], r.F['entities'](r.MC(V[
                                                        10])), T[38], r.ME(T[39], r.MB, r.MN, null),
                                                    T[34], r.F['entities'](r.MC(V[1])), T[40], r.F[
                                                        'entities']((r.MC(V[12]) ? (r.MC(V[12])[
                                                            "zipcode"] || r.MC(V[12])[
                                                        "zip"]) : "")), T[41], r.F['entities'](r.MC(
                                                        V[10])), T[42], r.ME(T[43], r.MB, r.MN,
                                                        null), T[34], r.F['entities'](r.MC(V[1])),
                                                    T[44], r.F['entities']((r.MC(V[12]) ? r.MC(V[
                                                        12])["city"] : "")), T[36], r.ME(T[45], r
                                                        .MB, r.MN, null), T[32], r.F['entities'](r
                                                        .MC(V[10])), T[2]
                                                ].join('');
                                                if (((r.MJ(r.MB(V[13]) + "" === "" + "true")) && r.MJ(r
                                                        .MC(V[12])["city"]))) {
                                                    s += T[46];
                                                }
                                                s += [T[33], r.ME(T[47], r.MB, r.MN, null), T[48]].join(
                                                    '');
                                                if (((r.MJ(r.MB(V[13]) + "" === "" + "true")) && r.MJ(r
                                                        .MC(V[12])["country_name"]))) {
                                                    s += [T[49], r.F['entities'](r.MC(V[1])), T[50], r
                                                        .F['entities']((r.MC(V[12]) ? r.MC(V[12])[
                                                            "cc1"] : "")), T[51], r.F['entities'](r
                                                            .MC(V[1])), T[52], r.F['entities']((r
                                                            .MC(V[12]) ? r.MC(V[12])[
                                                                "country_name"] : "")), T[53]
                                                    ].join('');
                                                } else {
                                                    s += [T[54], r.F['entities'](r.MC(V[1])), T[55], r
                                                        .F['entities'](r.MC(V[10])), T[56]
                                                    ].join('');
                                                    if ((r.MJ(r.MB(V[12])) && (r.MJ(r.MC(V[12])["cc1"] +
                                                            "" === "" + "")))) {
                                                        s += T[57];
                                                    }
                                                    s += [T[58], r.ME(T[47], r.MB, r.MN, null), T[59]]
                                                        .join(''); {
                                                        var LA = (r.MC(V[14]) || []);
                                                        VS.unshift({
                                                            'country': null
                                                        });
                                                        for (var LC = 1, LM = LA.length,
                                                            LV_country; LC <= LM; LC++) {
                                                            VS[0]['country'] = LV_country = LA[LC - 1];
                                                            s += [T[60], r.F['entities']((LV_country ||
                                                            {})["iso2"]), T[41]].join('');
                                                            if ((r.MJ(r.MB(V[12])) && (r.MJ(r.MC(V[12])[
                                                                        "cc1"] + "" === "" +
                                                                    LV_country["iso2"])))) {
                                                                s += T[57];
                                                            }
                                                            s += [T[58], r.F['entities']((LV_country ||
                                                            {})["name"]), T[59]].join('');
                                                        }
                                                        VS.shift();
                                                    }
                                                    s += T[61];
                                                }
                                                s += T[62];
                                                if ((r.MJ(r.MB(V[15]) + "" === "" + ""))) {
                                                    s += T[63];
                                                }
                                                s += [T[64], r.ME(T[65], r.MB, r.MN, null), T[66], r.F[
                                                    'entities'](r.MC(V[1])), T[67], r.F[
                                                    'entities'](r.MC(V[3])), T[68], r.ME(T[69],
                                                    r.MB, r.MN, null), T[70]].join('');
                                                if (r.MJ(r.MG((r.MC(V[12]) || {})["children"]))) {
                                                    s += T[71];
                                                }
                                                s += [T[72], r.ME(T[73], r.MB, r.MN, null), T[74]].join(
                                                    '');
                                                if ((r.MJ(r.MB(V[2]) + "" !== "" + "other_business"))) {
                                                    s += T[75];
                                                    if (((((r.MJ(r.MB(V[2]) + "" !== "" + "owner")) && (
                                                            r.MJ(r.MB(V[2]) + "" !== "" +
                                                                "manager"))) && (r.MJ(r.MB(V[
                                                                2]) + "" !== "" + "shareholder"
                                                                ))) || (((r.MJ(r.MB(V[15]) + "" !==
                                                                "" + "")) && r.MJ(r.MB(V[12]))) && r
                                                            .MJ(r.MC(V[12])["children"])))) {
                                                        s += T[63];
                                                    }
                                                    s += [T[64], r.F['entities'](r.MC(V[8])), T[34], r
                                                        .F['entities'](r.MC(V[1])), T[76], r.F[
                                                            'entities']((r.MC(V[12]) ? r.MC(V[12])[
                                                            "date_of_birth"] : "")), T[77], r.F[
                                                            'entities'](r.MC(V[9])), T[66], r.F[
                                                            'entities'](r.MC(V[1])), T[78]
                                                    ].join('');
                                                    if ((r.MJ(r.MB(V[12])) && (r.MJ(r.MC(V[12])[
                                                                "place_of_birth"] + "" === "" +
                                                            "")))) {
                                                        s += T[57];
                                                    }
                                                    s += T[79]; {
                                                        var LA = (r.MC(V[14]) || []);
                                                        VS.unshift({
                                                            'country': null
                                                        });
                                                        for (var LC = 1, LM = LA.length,
                                                            LV_country; LC <= LM; LC++) {
                                                            VS[0]['country'] = LV_country = LA[LC - 1];
                                                            s += [T[60], r.F['entities']((LV_country ||
                                                            {})["iso2"]), T[41]].join('');
                                                            if ((r.MJ(r.MB(V[12])) && (r.MJ(r.MC(V[12])[
                                                                        "place_of_birth"] +
                                                                    "" === "" + LV_country[
                                                                        "iso2"])))) {
                                                                s += T[57];
                                                            }
                                                            s += [T[58], r.F['entities']((LV_country ||
                                                            {})["name"]), T[59]].join('');
                                                        }
                                                        VS.shift();
                                                    }
                                                    s += T[80];
                                                }
                                                s += T[0];
                                                if ((r.MJ(r.MB(V[16]) + "" !== "" + ""))) {
                                                    s += [T[81], r.F['entities'](r.MC(V[1])), T[82], r
                                                        .F['entities'](r.MC(V[16])), T[83]
                                                    ].join('');
                                                }
                                                s += T[0];
                                                return s;
                                            }
                                            s += T[0];
                                            if ((r.MJ(r.MB(V[0]) + "" !== "" + "true"))) {
                                                s += T[1];
                                            }
                                            s += T[0];
                                            s = extranettmpl_inc_sanction_screening_entity_inc1(s);
                                            s += T[0];
                                            if ((r.MJ(r.MB(V[0]) + "" !== "" + "true"))) {
                                                s += T[84];
                                            }
                                            s += T[0];
                                            return s;
                                        };
                                    })());
                                </script>

                                <script type="text/javascript">
                                    booking.jstmpl('verification_summary_new', (function () {
                                        var T = [
                                                "\n\u003cdiv class=\"ss_summary_section clearfix\"\u003e\n\u003cdiv class=\"ss_summary_section clearfix\"\u003e\n\u003ch1\u003eKYP Submitted Information\u003c/h1\u003e\n\u003c/div\u003e\n",
                                                "\n\u003cdiv class=\"ss_summary_section clearfix\"\u003e\n\u003ch2\u003e",
                                                "\u003c/h2\u003e\n", "\n\u003ch3\u003e",
                                                "\u003c/h3\u003e\n", "\n\u003cb\u003e",
                                                "\u003c/b\u003e &nbsp ", "\u003cbr/\u003e\n", "\n",
                                                "\n\u003c/div\u003e\n"
                                            ],
                                            V = ["kyp_new_version_data"],
                                            WV, LV, VA;
                                        return function (VS) {
                                            var s = '',
                                                r = this.fn;
                                            s += T[0]; {
                                                var LA = (r.MC(V[0]) || []);
                                                VS.unshift({
                                                    'version_data': null
                                                });
                                                for (var LC = 1, LM = LA.length, LV_version_data; LC <=
                                                    LM; LC++) {
                                                    VS[0]['version_data'] = LV_version_data = LA[LC -
                                                    1];
                                                    s += [T[1], r.F['entities']((LV_version_data || {})[
                                                        "submit_time"]), T[2]].join(''); {
                                                        var OLC1 = LC;
                                                        var OLA1 = LA;
                                                        var OLM1 = LM;
                                                        var OLV_details_rows1 = LV_details_rows;
                                                        var LA = (LV_version_data["records"] || []);
                                                        VS.unshift({
                                                            'details_rows': null
                                                        });
                                                        for (var LC = 1, LM = LA.length,
                                                            LV_details_rows; LC <= LM; LC++) {
                                                            VS[0]['details_rows'] = LV_details_rows =
                                                                LA[LC - 1];
                                                            s += [T[3], r.F['entities']((
                                                                LV_details_rows || {})[
                                                                "title"]), T[4]].join(''); {
                                                                var OLC2 = LC;
                                                                var OLA2 = LA;
                                                                var OLM2 = LM;
                                                                var OLV_details_row2 = LV_details_row;
                                                                var LA = (LV_details_rows["record"] ||
                                                                []);
                                                                VS.unshift({
                                                                    'details_row': null
                                                                });
                                                                for (var LC = 1, LM = LA.length,
                                                                        LV_details_row; LC <=
                                                                    LM; LC++) {
                                                                    VS[0]['details_row'] =
                                                                        LV_details_row = LA[LC - 1];
                                                                    s += [T[5], r.F['entities']((
                                                                        LV_details_row || []
                                                                        )[0]), T[6], r.F[
                                                                        'entities']((
                                                                        LV_details_row || []
                                                                        )[1]), T[7]].join('');
                                                                }
                                                                VS.shift();
                                                                LC = OLC2;
                                                                LA = OLA2;
                                                                LM = OLM2;
                                                                LV_details_row = OLV_details_row2;
                                                            }
                                                            s += T[8];
                                                        }
                                                        VS.shift();
                                                        LC = OLC1;
                                                        LA = OLA1;
                                                        LM = OLM1;
                                                        LV_details_rows = OLV_details_rows1;
                                                    }
                                                    s += T[9];
                                                }
                                                VS.shift();
                                            }
                                            s += T[9];
                                            return s;
                                        };
                                    })());
                                </script>

                                <div id="account_verification" class="ss_header">Know Your Partner Form</div>
                                <form class="ss_form js-ss-form">
                                    <div class="am_panel ss_box">
                                        <div class="am_inner_panel">
                                            <div class="ss_subheader ss_row">
                                                To comply with various legal and regulatory requirements, we’re asking
                                                all accommodation partners for certain information. For more details,
                                                check out <a
                                                    href="https://partner.booking.com/en-gb/node/2141/?utm_source=extranet"
                                                    target="_blank">this article</a> in Partner Help.
                                            </div>

                                            <div>
                                                Status:
                                                We will verify the information you have submitted and inform you if
                                                there are any additional requirements.
                                            </div>


                                        </div>
                                    </div>

                                </form>


                                {{-- <script type="text/x-handlebars-template" id="tfa-modal-template">
                                    <div class="modal fade" id="tfa-modal-window" tabindex="-1" role="dialog" aria-labelledby="tfa-modal-window">
                                        <div class="modal-dialog" role="document">
                                            <form class="modal-content tfa_modal_form">
                                
                                                <div class="tfa_modal_header">
                                                    <div class="am_headline">{{title}}</div>
                                                </div>
                                                <div class="tfa_modal_body">
                                                    {{message}}
                                                </div>
                                                <div class="tfa_modal_footer">
                                                    <button type="submit" class="btn btn-primary tfa_modal_btn">{{ctaLabel}}</button>
                                                    {{#if referralUrl}}
                                                    <a href="referralUrl" class="pull-right tfa_modal_btn">Not now</a>
                                                    {{/if}}
                                                </div>
                                
                                            </form>
                                        </div>
                                    </div>
                                </script>

                                <!-- Number template -->
                                <script type="text/x-handlebars-template" id="phone-number-template">
                                    <td class="am_contents{{#if isApproved}} am_approved{{else}} am_pending{{/if}}"><span class="glyphicon glyphicon-{{#if isApproved}}ok{{else}}envelope{{/if}}"></span> <div class="u-phone">{{phoneNumber}}</div></td>
                      <td class="am_contents{{#if isApproved}} am_approved{{else}} am_pending{{/if}}">{{#if isApproved}} Approved {{else}} Pending approval {{/if}}</td>
                      {{#if isDeletable}}
                      <td class="am_contents{{#if isApproved}} am_approved{{else}} am_pending{{/if}}">
                          <a class="delete-approved-num am_remove" data-number-id="{{id}}"><span class="glyphicon glyphicon-trash"></span><span class="am_remove_txt">Remove</span></a>
                          <div class="throbber">
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              width="22px" height="22px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                  <path fill="#000" d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
                                      <animateTransform attributeType="xml"
                                      attributeName="transform"
                                      type="rotate"
                                      from="0 25 25"
                                      to="360 25 25"
                                      dur="1s"
                                      repeatCount="indefinite"/>
                                  </path>
                              </svg>
                          </div>
                      </td>
                      {{/if}}
                  </script> --}}







                            </div>
                        </main>
                    </div>
                    <!-- /Main Content -->


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
                                            <a href="{{ url("#") }}" data-test-id="ext-footer-add-property-link"
                                                class="ext-footer__cta bui-button bui-button--primary">
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


    <div class="popper-inline-block ext-feedback">
        <div data-test-id="wrapper" class="popper-wrapper" style="display:none;">
            <div class="popper-fade popper--light">

                <div class="bui-panel popper-panel">
                    <div class="ext-feedback__header">
                        <svg focusable="false" role="presentation" aria-hidden="true" width="20" viewBox="0 0 24 24"
                            fill="currentColor" height="20" class="ext-feedback__close-icon bk-icon -streamline-close">
                            <path
                                d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
                            </path>
                        </svg>
                        <h4 class="ext-feedback__title">
                            <span>Share your feedback</span>
                        </h4>
                    </div>
                    <div class="ext-feedback__body">
                        <h5 class="ext-feedback__subtitle"><span>What would you like to give feedback on? </span></h5>
                        <div class="ext-feedback__feedback-area bui-group bui-group--inline bui-group--large">
                            <div name="rate" class="bui-form__group"><label class="bui-radio"><input
                                        id="feedback-area-general" autocomplete="off" type="radio" name="rate"
                                        checked="checked" value="1" class="bui-radio__input"> <span
                                        class="bui-radio__label"><span>General feedback</span></span></label>

                            </div>
                            <div name="rate" class="bui-form__group"><label class="bui-radio"><input
                                        id="feedback-area-page" autocomplete="off" type="radio" name="rate" value="2"
                                        class="bui-radio__input"> <span class="bui-radio__label"><span>Current
                                            page</span></span></label>

                            </div>
                        </div>
                        <div class="ext-feedback__scale"><button class="ext-feedback__rating">
                                1
                            </button><button class="ext-feedback__rating">
                                2
                            </button><button class="ext-feedback__rating">
                                3
                            </button><button class="ext-feedback__rating">
                                4
                            </button><button class="ext-feedback__rating">
                                5
                            </button></div>
                        <div class="ext-feedback__legend-for-scale"><span>Poor</span> <span>Excellent</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popper-inline-block ext-feedback">
        <div data-test-id="wrapper" class="popper-wrapper" style="display:none;">
            <div class="popper-fade popper--light">

                <div class="bui-panel popper-panel">
                    <div class="ext-feedback__header"><svg height="20" fill="currentColor" viewBox="0 0 24 24"
                            role="presentation" focusable="false" width="20" aria-hidden="true"
                            class="ext-feedback__close-icon bk-icon -streamline-close">
                            <path
                                d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
                            </path>
                        </svg>
                        <div role="status" class="bui-alert bui-alert--inline bui-alert--success"><span
                                role="presentation" class="icon--hint bui-alert__icon"><svg data-test-id="default-icon"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                    <path
                                        d="M56.62 93.54a4 4 0 0 1-2.83-1.18L28.4 67a4 4 0 1 1 5.65-5.65l22.13 22.1 33-44a4 4 0 1 1 6.4 4.8L59.82 91.94a4.06 4.06 0 0 1-2.92 1.59zM128 64c0-35.346-28.654-64-64-64C28.654 0 0 28.654 0 64c0 35.346 28.654 64 64 64 35.33-.039 63.961-28.67 64-64zm-8 0c0 30.928-25.072 56-56 56S8 94.928 8 64 33.072 8 64 8c30.914.033 55.967 25.086 56 56z">
                                    </path>
                                </svg></span>
                            <div class="bui-alert__description">

                                <p class="bui-alert__text"><span>Thanks for your feedback</span></p>

                            </div>
                        </div>
                    </div>
                    <div class="ext-feedback__body">
                        <h5 class="ext-feedback__subtitle"><span>Could you give us more details?</span></h5>
                        <div rows="3" class="ext-feedback-written-feedback bui-form__group"><label
                                for="feedback"></label> <textarea id="feedback" aria-describedby="describe-feedback"
                                autocomplete="off" rows="3" class="bui-form__control bui-input-textarea"></textarea>

                        </div>
                        <div class="ext-feedback__actions"><button type="button" disabled="disabled"
                                class="ext-feedback__action bui-button bui-button--primary">
                                <span class="bui-button__text"><span>Send</span></span></button> <button type="button"
                                class="ext-feedback__action bui-button bui-button--secondary">
                                <span class="bui-button__text"><span>Skip</span></span></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popper-inline-block ext-feedback">
        <div data-test-id="wrapper" class="popper-wrapper" style="display:none;">
            <div class="popper-fade popper--light">

                <div class="bui-panel popper-panel">
                    <div class="ext-feedback__header"><svg aria-hidden="true" width="20" focusable="false"
                            role="presentation" viewBox="0 0 24 24" fill="currentColor" height="20"
                            class="ext-feedback__close-icon bk-icon -streamline-close">
                            <path
                                d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
                            </path>
                        </svg>
                        <div role="status" class="bui-alert bui-alert--inline bui-alert--success"><span
                                role="presentation" class="icon--hint bui-alert__icon"><svg data-test-id="default-icon"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                    <path
                                        d="M56.62 93.54a4 4 0 0 1-2.83-1.18L28.4 67a4 4 0 1 1 5.65-5.65l22.13 22.1 33-44a4 4 0 1 1 6.4 4.8L59.82 91.94a4.06 4.06 0 0 1-2.92 1.59zM128 64c0-35.346-28.654-64-64-64C28.654 0 0 28.654 0 64c0 35.346 28.654 64 64 64 35.33-.039 63.961-28.67 64-64zm-8 0c0 30.928-25.072 56-56 56S8 94.928 8 64 33.072 8 64 8c30.914.033 55.967 25.086 56 56z">
                                    </path>
                                </svg></span>
                            <div class="bui-alert__description">

                                <p class="bui-alert__text"><span>Thanks for your feedback</span></p>

                            </div>
                        </div>
                    </div>
                    <div class="ext-feedback__body">
                        <p class="ext-feedback__copy"><span>Your feedback helps us optimize the tools and improve your
                                experience</span></p> <button type="button" class="bui-button bui-button--primary">
                            <span class="bui-button__text"><span>Done</span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popper-inline-block ext-feedback">
        <div data-test-id="wrapper" class="popper-wrapper" style="display:none;">
            <div class="popper-fade popper--light">

                <div class="bui-panel popper-panel">
                    <div class="ext-feedback__header"><svg fill="currentColor" viewBox="0 0 24 24" height="20"
                            focusable="false" role="presentation" aria-hidden="true" width="20"
                            class="ext-feedback__close-icon bk-icon -streamline-close">
                            <path
                                d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
                            </path>
                        </svg>
                        <div role="status" class="bui-alert bui-alert--inline bui-alert--error"><span
                                role="presentation" class="icon--hint bui-alert__icon"><svg data-test-id="default-icon"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M12 15.75A1.125 1.125 0 1 0 12 18a1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm.75-2.25V5.25a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z">
                                    </path>
                                </svg></span>
                            <div class="bui-alert__description">

                                <p class="bui-alert__text"><span>We're experiencing some problems</span></p>

                            </div>
                        </div>
                    </div>
                    <div class="ext-feedback__body"><span>Please try again later</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="popper-inline-block homepage-demand-data-popover" trigger-element="[object HTMLLIElement]">
        <div data-test-id="wrapper" class="popper-wrapper" style="display: none;">
            <div class="popper-fade popper--light">
                <div data-popper-arrow="" data-test-id="arrow" class="popper-tip"></div>
                <div class="bui-panel popper-panel">
                    <h4><span>Can't keep up with a constantly changing market?</span></h4>
                    <p><span>Learn about the latest search trends in Dhaka, respond to the guest demand and capture new
                            revenues.</span></p> <button type="button" class="bui-banner__close"><svg
                            fill="currentColor" width="24" height="24" viewBox="0 0 24 24" role="presentation"
                            aria-hidden="true" focusable="false" class="bk-icon -streamline-close">
                            <path
                                d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
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