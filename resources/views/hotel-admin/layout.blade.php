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
    <link rel="shortcut icon" href="{{ asset('/hotel-admin/assets/images/favicon.png') }}" type="image/png" />
    <!-- Bootstrap v5.0.0-beta3 -->
    @yield('css-imports')
</head>
<body>
    <div id="main-container" class="container-fluid tfa_phone_alt container-fluid--color">
        <main id="content">
            <div class="page-body">
                <div id="legacy-banners-new-hp" class="bui-u-hidden"></div>
                <div class="">
                    @include('hotel-admin/header')
                    @yield('content')
                    @include('hotel-admin/footer')
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
                            fill="currentColor" height="20"
                            class="ext-feedback__close-icon bk-icon -streamline-close">
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
                                        id="feedback-area-page" autocomplete="off" type="radio" name="rate"
                                        value="2" class="bui-radio__input"> <span
                                        class="bui-radio__label"><span>Current
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
                                for="feedback"></label>
                            <textarea id="feedback" aria-describedby="describe-feedback" autocomplete="off" rows="3"
                                class="bui-form__control bui-input-textarea"></textarea>

                        </div>
                        <div class="ext-feedback__actions"><button type="button" disabled="disabled"
                                class="ext-feedback__action bui-button bui-button--primary">
                                <span class="bui-button__text"><span>Send</span></span></button> <button
                                type="button" class="ext-feedback__action bui-button bui-button--secondary">
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
                                role="presentation" class="icon--hint bui-alert__icon"><svg
                                    data-test-id="default-icon" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 128 128">
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
                                role="presentation" class="icon--hint bui-alert__icon"><svg
                                    data-test-id="default-icon" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
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
                            fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                            role="presentation" aria-hidden="true" focusable="false"
                            class="bk-icon -streamline-close">
                            <path
                                d="M13 12l6.26-6.26a.73.73 0 0 0-1-1L12 11 5.74 4.71a.73.73 0 1 0-1 1L11 12l-6.29 6.26a.73.73 0 0 0 .52 1.24.73.73 0 0 0 .51-.21L12 13l6.26 6.26a.74.74 0 0 0 1 0 .74.74 0 0 0 0-1z">
                            </path>
                        </svg></button>
                </div>
            </div>
        </div>
    </div>



    <!-- ===================== Required Js File Links ===================== -->
    <!-- jquery js  -->
    <script src="{{ asset('/hotel-admin/assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap js  -->
    <script src="{{ asset('/hotel-admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- custom Js  -->
    <script src="{{ asset('/hotel-admin/assets/js/script.js') }}"></script>
    @yield('jquery')


</body>

</html>
