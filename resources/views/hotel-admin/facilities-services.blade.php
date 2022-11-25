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
    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/bootstrap-v3.min.css') }}">
    <!-- Bootstrap v5.0.0-beta3 -->
    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/bootstrap.min.css') }}">
    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/all.min.css') }}">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/style.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/hotel-admin/assets/css/pages/facilities-services.min.css') }}">


</head>

<body>


    <div id="main-container" class="container-fluid tfa_phone_alt container-fluid--color">

        <main id="content" class="main">
            <div class="page-body">
                <div class="">
                    <div class="bui-container bui-container--center">
                        <div class="page-header-component-title th__page-header">
                            <div class="row">
                                <div class="th__page-header__content col-md-12">
                                    <h1 class="th__page-header__title">
                                        Facilities &amp; services
                                    </h1>
                                </div>
                            </div>

                            <div class="row">
                                <div class="clearfix col-md-12">
                                    <p class="th__page-header__description">
                                        Listing your facilities can really help influence guests to book! Update the
                                        ones available at your property or on-site below.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="alert bui-alert bui-alert--info bui-alert--large bui-u-bleed@small" role="alert">
                            <div class="bui-alert__description">
                                <span class="bui-alert__title">What's missing:</span>
                                <ul>
                                    <li>
                                        <a href="{{ url('#container_301') }}">
                                            Swimming pool details
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('#container_3') }}">
                                            Restaurant Information
                                        </a>
                                    </li>
                                    <li>
                                        We noticed that some questions about your Top Facilities are still unanswered.
                                        Please double-check the following:
                                        <ul>
                                            <li>
                                                <a href="{{ url('#container_54') }}">
                                                    Spa and wellness centre
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_10') }}">
                                                    Sauna
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_17') }}">
                                                    Airport shuttle
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_63') }}">
                                                    Hot tub/Jacuzzi
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_15') }}">
                                                    Terrace
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_7') }}">
                                                    Bar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_148') }}">
                                                    Water park
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#container_144') }}">
                                                    Kids&#39; club
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12 main-content">
                                <form id="facilities_form" method="POST" role="form">

                                    <!-- Top Facilities -->
                                    <div class="facilities_section">
                                        <fieldset id="most_popular" class="facility-section--incomplete">
                                            <legend>
                                                Top Facilities
                                            </legend>

                                            <p>
                                                These are the facilities that guests look for the most! Tell them which
                                                you have by answering
                                                <strong>yes</strong> or <strong>no</strong> to each question and click
                                                <strong>save
                                                </strong>.
                                            </p>

                                            <div class="row">

                                                <ul class="col-sm-6">
                                                    <li id="container_3"
                                                        class="facility_items facility_item facility_items_active">

                                                        <div class="facility_items_body clearfix">
                                                            <div class="col-sm-8">
                                                                <span class="facility-item__name">
                                                                    Restaurant
                                                                </span>
                                                                <a href="{{ url('#') }}"
                                                                    class="photo_uploader btn-default">
                                                                    <i class="fa-solid fa-camera"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-4 facility-item__radio-buttons">
                                                                <div class="bui-inline-container">
                                                                    <label class="bui-radio">
                                                                        <input class="bui-radio__input" type="radio"
                                                                            value="1" name="facility_3" checked />
                                                                        <span class="bui-radio__label">
                                                                            Yes
                                                                        </span>
                                                                    </label>
                                                                    <label class="bui-radio">
                                                                        <input class="bui-radio__input" type="radio"
                                                                            value="0" name="facility_3" />
                                                                        <span class="bui-radio__label">
                                                                            No
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="col-sm-6">
                                                    <li id="container_17"
                                                        class="facility_items facility_item facility_items_active  facility_items_expanded">
                                                        <div class="facility_items_body clearfix">
                                                            <div class="col-sm-8">
                                                                <span class="facility-item__name">
                                                                    Airport shuttle
                                                                </span>
                                                                <a href="{{ url('#') }}"
                                                                    class="photo_uploader  btn-default">
                                                                    <i class="fa-solid fa-camera"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-4 facility-item__radio-buttons">
                                                                <div class="bui-inline-container">
                                                                    <label class="bui-radio">
                                                                        <input class="bui-radio__input" type="radio"
                                                                            value="1" name="facility_17"
                                                                            checked />
                                                                        <span class="bui-radio__label">
                                                                            Yes
                                                                        </span>
                                                                    </label>
                                                                    <label class="bui-radio">
                                                                        <input class="bui-radio__input" type="radio"
                                                                            value="0" name="facility_17" />
                                                                        <span class="bui-radio__label">
                                                                            No
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <!-- Top Facilities -->
                                    <input type="submit" name="save" id="save" value="Save"
                                        class="btn btn-primary btn-block btn-lg btn-save-bottom">

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>


    </div>
    <!-- close div#main-container -->

    <!-- Footer -->


    <!-- ===================== Required Js File Links ===================== -->
    <!-- jquery js  -->
    <script src="{{ asset('/hotel-admin/assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap js  -->
    <script src="{{ asset('/hotel-admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- custom Js  -->
    <script src="{{ asset('/hotel-admin/assets/js/script.js') }}"></script>


</body>

</html>
