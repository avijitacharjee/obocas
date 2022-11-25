<!DOCTYPE html>
<html lang="en">

<head>

    <!--====== Required meta tags =======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=on" />

    <!--====== Title =======-->
    <title>Booking Index</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/registration/assets/css/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('/registration/assets/css/create-romm.css') }}" />
    <link rel="stylesheet" href="{{ asset('/registration/assets/css/photos.css') }}" />
    <link rel="stylesheet" href="{{ asset('/registration/assets/css/policies.css') }}" />
</head>

<body>

    <div id="root" class="bui-u-text-left bui_font_body">

        <!-- Header -->
        <div class="guest-header">
            <header class="_37rfPfc52EXATe8n6xoWgd">
                <nav class="_2HVwqciw9DfOQFLWl2-a_I container">
                    <div class="_1pRpeQP2z_3ktRb8Urjtv6">
                        <div class="daGIlH2FHgTbq-rtCh3t">
                            <a href="{{ url('#') }}">
                                <img src="{{ asset('/registration/assets/images/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <!-- /Header -->

        <!-- Login Box -->

        <div class="app">


            <div class="container">





                <div class="row
                             top_progress

                           " id="content_wrapper">

                    <nav class="menu
                                    col-md-12 desktop-hnav
                                    col-sm-6
                                    col-xs-10
                                     compact_menu

                                    no_icons
                                    nav_account
                                    hor_nav_mobile">



                        <div class="menu_hamburguer clearfix" id="hamburger">
                            <h3>
                                <svg class="bk-icon -material-ic_dehaze" fill="#FFFFFF" height="24" width="24"
                                    viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false">
                                    <path d="M2 15.5v2h20v-2H2zm0-5v2h20v-2H2zm0-5v2h20v-2H2z"></path>
                                </svg>
                                Menu
                                <span class="glyphicon glyphicon glyphicon-chevron-down pull-right"
                                    aria-hidden="true"></span>
                                <span class="glyphicon glyphicon glyphicon-chevron-up pull-right"
                                    aria-hidden="true"></span>
                            </h3>
                        </div>


                        <div class="block_details sb clearfix">
                            <p class="progress_status">
                                Your listing - 15% complete
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
                            </div>
                        </div>


                        {{-- <div class="nav-steps">
                            <div>
                                <div>
                                    <div>


                                        <ul id="js-main-nav" class="nav nav__int main-nav account-menu_mobile">

                                            <li data-nav-tag="basic_info"
                                                data-nav-url="/about.html?token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;aid=304142"
                                                class="completed">

                                                <a href="/about.html?token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;aid=304142"
                                                    class=" completed" data-js-loader-overlay-on-click="1">


                                                    Basic info

                                                </a>

                                            </li>


                                            <li data-nav-tag="rooms"
                                                data-nav-url="/createroom.html?aid=304142&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB"
                                                class="active active selected">

                                                <a href="/createroom.html?aid=304142&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB"
                                                    class=" active active selected" data-js-loader-overlay-on-click="1"
                                                    data-js-loader-overlay-on-click-light-background="1">


                                                    Layout and pricing

                                                </a>

                                            </li>


                                            <li data-nav-tag="property_details"
                                                data-nav-url="/facilities.html?token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;aid=304142"
                                                class="">

                                                <a href="/facilities.html?token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;aid=304142"
                                                    class="" data-js-loader-overlay-on-click="1">


                                                    Facilities &amp; services

                                                </a>

                                            </li>


                                            <li data-nav-tag="amenities"
                                                data-nav-url="/amenities.html?label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9&amp;aid=304142"
                                                class="disabled nav-room-facilities">

                                                <a href="/amenities.html?label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9&amp;aid=304142"
                                                    class=" disabled nav-room-facilities" tabindex="-1">


                                                    Amenities

                                                </a>

                                            </li>


                                            <li data-nav-tag="photos"
                                                data-nav-url="/photos.html?label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9&amp;aid=304142"
                                                class="">

                                                <a href="/photos.html?label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9&amp;aid=304142"
                                                    class="" data-js-loader-overlay-on-click="1">


                                                    Photos

                                                </a>

                                            </li>


                                            <li data-nav-tag="policies"
                                                data-nav-url="/policies.html?aid=304142&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9"
                                                class="">

                                                <a href="/policies.html?aid=304142&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9"
                                                    class="" data-js-loader-overlay-on-click="1">


                                                    Policies

                                                </a>

                                            </li>


                                            <li data-nav-tag="settings"
                                                data-nav-url="/settings.html?aid=304142&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9"
                                                class="">

                                                <a href="/settings.html?aid=304142&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9"
                                                    class="" data-js-loader-overlay-on-click="1">


                                                    Payments

                                                </a>

                                            </li>

                                        </ul>

                                    </div>

                                    <ul class="nav actions">
                                        <li class="actions_logout">
                                            <i class="glyphicon glyphicon-log-out"></i>
                                            <a href="https://admin.booking.com/?logout=1&amp;lang=en&amp;ses=9631fd24c6caa19aa7fc34abfebd1138"
                                                data-track-ga="sb_account_click_logout_mobile">Log out</a>
                                        </li>
                                        <li class="lang-select lang-select_account"
                                            data-track-ga="sb_account_click_select_lang_mobile">
                                            <i class="glyphicon glyphicon-comment"></i>


                                            <form id="lang_selector" class="js-join-lang-picker-form"
                                                action="/json/setpropertylanguage.json?label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9&amp;aid=304142"
                                                method="POST">
                                                <select name="lang" id="lang" class="langDropdown rtl_fix_phone"
                                                    onchange="submit();" aria-label="Language selector popup">
                                                    <option value="" disabled="disabled">
                                                        Select language
                                                    </option>
                                                    <option value="ar">العربية</option>
                                                    <option value="bg">Български</option>
                                                    <option value="ca">Català</option>
                                                    <option value="cs">Čeština</option>
                                                    <option value="da">Dansk</option>
                                                    <option value="de">Deutsch</option>
                                                    <option value="el">Ελληνικά</option>
                                                    <option value="en" selected="selected">English (UK)</option>
                                                    <option value="xu">English (US)</option>
                                                    <option value="es">Español</option>
                                                    <option value="xa">Español (AR)</option>
                                                    <option value="et">Eesti</option>
                                                    <option value="fi">Suomi</option>
                                                    <option value="fr">Français</option>
                                                    <option value="he">עברית</option>
                                                    <option value="hr">Hrvatski</option>
                                                    <option value="hu">Magyar</option>
                                                    <option value="id">Bahasa Indonesia</option>
                                                    <option value="is">Íslenska</option>
                                                    <option value="it">Italiano</option>
                                                    <option value="ja">日本語</option>
                                                    <option value="ko">한국어</option>
                                                    <option value="lt">Lietuvių</option>
                                                    <option value="lv">Latviski</option>
                                                    <option value="ms">Bahasa Malaysia</option>
                                                    <option value="nl">Nederlands</option>
                                                    <option value="no">Norsk</option>
                                                    <option value="pl">Polski</option>
                                                    <option value="xb">Português (BR)</option>
                                                    <option value="pt">Português (PT)</option>
                                                    <option value="ro">Română</option>
                                                    <option value="ru">Русский</option>
                                                    <option value="sk">Slovenčina</option>
                                                    <option value="sl">Slovenščina</option>
                                                    <option value="sr">Srpski</option>
                                                    <option value="sv">Svenska</option>
                                                    <option value="th">ภาษาไทย</option>
                                                    <option value="tl">Filipino</option>
                                                    <option value="tr">Türkçe</option>
                                                    <option value="uk">Українська</option>
                                                    <option value="vi">Tiếng Việt</option>
                                                    <option value="zh">简体中文</option>
                                                    <option value="xt">繁體中文</option>
                                                </select>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </nav>
                    <div id="" class="">
                        <div class="row">
                            <div class="">
                                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                    <h1 class=" alignment_header_main">
                                        Add room
                                    </h1>
                                </div>
                            </div>
                            <div class="">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="page_description">
                                        {{-- <p>
                                            Tell us about your first room. Once you've entered all the necessary
                                            information, you'll be able to fill in the details of your other rooms.
                                        </p> --}}
                                    </div>
                                    <div class="seg-return-to-overview js-return-to-overview hidden">
                                        <a href="{{ url('#') }}">
                                            Go back to overview
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desktop-hnav-clear-line"></div>
                        <div class="row">
                            <div class="main-content col-md-12">
                                <div class="row">
                                    <div id="main_content_section" class="col-md-9">
                                        <div id="property-layout-empty-state" class="seg-cr-empty-state">
                                            <div class="property-layout-empty-state__body">
                                                <div
                                                    style="width: 160px; margin: auto; margin-top: 10px; margin-bottom: 30px;">
                                                    <img style="width: 100%; height: 100%;"
                                                        src="{{ asset('/registration/assets/images/empty-state-createroom.png') }}" alt="">
                                                </div>
                                                {{-- <span>
                                                    No rooms have been added to your property. Start adding rooms to
                                                    describe bed options, layout and pricing for guests.
                                                </span> --}}
                                                @if(session('message'))
                                                    Room Added Succesfully
                                                @endif
                                                <br>
                                                <a href="{{ url('#create_room') }}" id="create_room"
                                                    class="btn btn-primary btn-lg create_room">
                                                    {{session('message')?"Add another room":'Add room'}}
                                                </a>
                                                <br>
                                            </div>
                                        </div>

                                        <form id="room_form" action="/hotel-admin/add-room1" method="POST" class="hidden">
                                            @csrf
                                            <div
                                                class="update-later-message col-xs-12 update-later-message--block alignment_header_message">
                                                <p>
                                                    After you complete registration you will still be able to make
                                                    changes to your listing before it goes live.
                                                </p>
                                            </div>

                                            <fieldset id="main-room-form" class="active">

                                                <legend>
                                                    <span id="room_name_label">Please select</span>
                                                </legend>

                                                <div class="row room-type-selection-block">
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="roomtype_id">Room type</label>
                                                        <select class="form-control" name="room_type_id" id="roomtype_id"
                                                            onchange="roomType()">
                                                            <option value="">Please select</option>
                                                            <option value="10">Single</option>
                                                            <option value="9">Double</option>
                                                            <option value="8">Twin</option>
                                                        </select>
                                                    </div>


                                                </div>

                                                <div class="row hidden roomName">
                                                    {{-- <div id="room_name_div" class="form-group col-sm-6 col-xs-12">
                                                        <label for="room_name_id">Room name</label>
                                                        <select class="form-control" name="room_name_id"
                                                            id="room_name_select">
                                                            <option value="" class="">Please select</option>
                                                        </select>
                                                        <span id="please_select_room_type_msg" class="help-block">
                                                            This is the name guests will see on the Booking.com website.
                                                        </span>
                                                    </div> --}}
                                                    <div id="custom_room_name_div"
                                                        class="form-group col-sm-6 col-xs-12">
                                                        <label for="custom_room_name_id">Room name *</label>
                                                        <input type="text" name="room_name" id="room_name" name="custom_room_name"
                                                            maxlength="80" class="form-control">
                                                        <span class="help-block">
                                                            Create a name for
                                                            your reference.
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label class="" for="no_smoking">Smoking policy</label>
                                                        <select id="no_smoking" name="smoking" class="form-control">
                                                            <option value="0">Non-smoking</option>
                                                            <option value="1">Smoking</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-sm-6 col-xs-12" id="nr_rooms_wrapper">
                                                        <label for="num_rooms">Number of rooms (of this type)</label>
                                                        <input class="form-control" name="number_of_rooms" id="num_rooms"
                                                            style="width: 60px;">
                                                    </div>
                                                </div>

                                            </fieldset>


                                            <fieldset id="bedding-options" class="bedding-options">
                                                <legend>
                                                    Bed options
                                                </legend>
                                                <div class="describe-block">
                                                    <p class="describe-text">
                                                        Tell us only about the existing beds in a room. Do not include
                                                        extra beds.
                                                    </p>
                                                </div>

                                                <div id="single_room_bedding" class="bed_group">
                                                    <div id="alternative_1">
                                                        <div>
                                                            <div class="is-block">
                                                                <label
                                                                    class="section-description section-description--type">What
                                                                    kind
                                                                    of beds are available in this room?</label>

                                                                <div id="bed_line_SINGLE_1" class="bed_line">
                                                                    <div class="form-group col-xs-6">
                                                                        <select class="form-control bed_type"
                                                                            name="bed_type_id"
                                                                            id="bedtype_id_SINGLE_1">
                                                                            <option value="1">
                                                                                Single bed
                                                                                &nbsp;&nbsp;/&nbsp;&nbsp;90-130 cm wide
                                                                            </option>
                                                                            <option value="2">
                                                                                Double bed
                                                                                &nbsp;&nbsp;/&nbsp;&nbsp;131-150 cm wide
                                                                            </option>
                                                                        </select>
                                                                        <span class="span-block"></span>
                                                                    </div>
                                                                    <div class="form-group col-xs-4">
                                                                        <span class="multiplier">x</span>
                                                                        <select id="bed_number_SINGLE_1"
                                                                            name="number_of_bed"
                                                                            class="form-control bed_number">
                                                                            <option value="0" selected="">Select the
                                                                                number of beds</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                        </select>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="row">

                                                            <label
                                                                class="col-lg-12 is-block section-description--guests">
                                                                How many guests can stay in this room?
                                                            </label>

                                                            <div class="form-group col-sm-12 guests-occupancy">
                                                                <input type="tel" id="num_guests" name="number_of_guests"
                                                                    class="form-control num_guests_collective form-control-limited">
                                                                <span class="guests-occupancy_visual_ref">
                                                                    <span class="guest-icon"></span>
                                                                </span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>



                                            </fieldset>

                                            <fieldset id="room_size_section">
                                                <legend>
                                                    Room size (optional)
                                                </legend>
                                                <div class="row">
                                                    <div class="room_size_wrapper col-sm-6 col-md-6">
                                                        <div
                                                            class="room_sizes input-group form-group input-with-dropdown">
                                                            <input type="text" name="room_size" id="room_size"
                                                                class="form-control roomsize" placeholder="0">
                                                            <select name="room_measurement_unit" class="form-control">
                                                                <option value="sq_meters">
                                                                    square metres
                                                                </option>
                                                                <option value="sq_feet">
                                                                    square feet
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <fieldset id="rlo-form">
                                                <legend>Base price per night</legend>
                                                <div class="describe-block" id="describe-text_base_price">
                                                    <p class="describe-text">
                                                        This is the lowest price that we automatically apply to this
                                                        room for all dates. Before your property goes live, you can set
                                                        seasonal pricing in your property dashboard.
                                                    </p>
                                                </div>


                                                <div class="row pricing-with-summary form-group">
                                                    <div class="col-md-6">

                                                        <label for="room_price_x_persons"
                                                            id="sb_room_details_price_for_x_people" class="">Price for 6
                                                            people</label>

                                                        <div class="label_currency_explanation">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <div class="currency_tooltip_btn">
                                                                        <div class="currency_tooltip_wrapper">
                                                                            <div class="currency_tooltip">Please fill in
                                                                                the price per night in BDT.
                                                                            </div>
                                                                            <div class="currency_tooltip_arrow"></div>
                                                                        </div>
                                                                        {{-- <span
                                                                            class="flag_icon_price flag_us"></span> --}}
                                                                    </div>BDT/per night
                                                                </span>
                                                                <input type="tel" id="room_price_x_persons"
                                                                    name="room_price"
                                                                    class="form-control" placeholder="0">
                                                            </div>
                                                        </div>

                                                        <div id="pricing_div_x_persons" class="pricing_div_persons">
                                                            <label id="discount_avail_label">Do you offer a lower rate
                                                                when there are less than 6 guests?</label>
                                                            <div class="radio-block" id="discount">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="discount_avail"
                                                                            value="yes">
                                                                        <span>Yes</span>
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="discount_avail"
                                                                            value="no" checked="">
                                                                        <span>No</span>
                                                                    </label>
                                                                </div>

                                                            </div>



                                                        </div>
                                                        <div id="pricing_div_x_persons" class="pricing_div_persons">
                                                            <label id="discount_avail_label">Select an image</label>
                                                            <div class="radio-block" id="discount">
                                                                <input type="file" accept="image/png,image/jpeg" class="file"
                                                                />
                                                            </div>



                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-6 price-summary_block">

                                                        <div>
                                                            <h4>Price summary for: hello</h4>
                                                            <div class="price-summary_price_table">
                                                                <div class="row price-summary_header">
                                                                    <div class="col-xs-6">Number of guests</div>
                                                                    <div class="col-xs-6">Price</div>
                                                                </div>
                                                                <div class="row price-summary_content rlo-infograph">
                                                                    <div>
                                                                        <div
                                                                            class="col-xs-6 price-summary_item_occupancy rlo-dudes-wrap">

                                                                            <span class="guest-icon"></span>
                                                                            <span
                                                                                class="guests-occupancy_multiplier">x</span>
                                                                            <span
                                                                                class="guests-occupancy_number_ref occupancy-number">6</span>
                                                                        </div>
                                                                        <div
                                                                            class="col-xs-6 price-summary_item_price rlo_discount">
                                                                            <div class="price-summary_item_price_row">
                                                                                <span class="cash">US$123</span>
                                                                                <span
                                                                                    class="minimum-price-label hidden">(Minimum
                                                                                    price)</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="help-block">After you have access to your
                                                                Booking.com property dashboard, we will ask you to
                                                                double check your price information before your property
                                                                goes live on our website.</p>
                                                        </div>
                                                    </div> --}}


                                                </div>
                                            </fieldset>




                                            <div class="row no-return" id="room-cta">
                                                <div class="col-md-6 col-sm-6 col-xs-6 return">
                                                    <a id="return_button" href="{{ url('#') }}"
                                                        class="btn btn-default btn-block btn-lg">
                                                        Go back to overview
                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6 continue">
                                                    <input type="submit" name="proceed"
                                                        class="btn btn-primary btn-block btn-lg" id="save_button"
                                                        value="Continue">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-3">
                                        <div
                                            class="update-later-message update-later-message--floated alignment_header_message">
                                            <p style="left: 1025.1px;">
                                                After you complete registration you will still be able to make changes
                                                to your listing before it goes live.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div id="seg-overview-ctas" class="row seg-overview-ctas hidden">
                                    <div class="col-xs-12 col-md-9">
                                        <div class="seg-overview-ctas__content">
                                            <a class="btn btn-block btn-default btn-lg" href="{{ url('#create-room') }}">
                                                Add another room
                                            </a>
                                            <a class="btn btn-block btn-primary btn-lg" href="{{ url('/property4') }}">
                                                Continue
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>




                    </div>

                </div> <!-- /row -->

                <div class="clearfix"></div>

                <div class="row join_thankyou__footer" id="footer_wrapper">
                    <footer>
                        <ul class="list-unstyled list-inline clearfix">

                            <li id="footer-booking" class="pull-right">
                                © Copyright <a href="{{ url('#') }}">Booking.com</a> 2022
                            </li>

                            <li class="pull-left" id="footer-about-us">
                                <a href="{{ url('#') }}">
                                    About Us
                                </a>
                            </li>
                            <li class="pull-left" id="footer-privacy">
                                <a href="{{ url('#') }}">
                                    Privacy and Cookie Statement
                                </a>
                            </li>

                        </ul>
                    </footer>
                </div>

            </div>

        </div>
        <!-- /Login Box -->

    </div>

    <script src="{{ asset('/registration/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/registration/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/registration/assets/js/script.js') }}"></script>

</body>

</html>
