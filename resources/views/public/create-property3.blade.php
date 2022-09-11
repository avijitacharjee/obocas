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
    <link rel="stylesheet" href="{{ asset("/registration/assets/css/about.css") }}" />
</head>

<body>

    <div id="root" class="bui-u-text-left bui_font_body">

        <!-- Header -->
        <div class="guest-header">
            <header class="_37rfPfc52EXATe8n6xoWgd">
                <nav class="_2HVwqciw9DfOQFLWl2-a_I container">
                    <div class="_1pRpeQP2z_3ktRb8Urjtv6">
                        <div class="daGIlH2FHgTbq-rtCh3t">
                            <a href="{{ url("#") }}">
                                <img src="{{ asset("/registration/assets/images/logo.png") }}" alt="">
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
                <div class="row top_progress" id="content_wrapper">
                    <nav
                        class="menu col-md-12 desktop-hnav col-sm-6 col-xs-10 compact_menu no_icons nav_account hor_nav_mobile">
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


                        <div class="nav-steps">
                            <div>
                                <div>
                                    <ul class="nav nav__int main-nav account-menu_mobile">

                                        <li class="active active selected">
                                            <a href="{{ url("#") }}" class=" active active selected">
                                                Basic info
                                            </a>
                                        </li>


                                        <li class="disabled">
                                            <a href="{{ url("#") }}" class=" disabled" tabindex="-1">
                                                Layout and pricing
                                            </a>
                                        </li>


                                        <li class="disabled">
                                            <a href="{{ url("#") }}" class=" disabled" tabindex="-1">
                                                Facilities &amp; services
                                            </a>
                                        </li>


                                        <li class="disabled nav-room-facilities">
                                            <a href="{{ url("#") }}" class=" disabled nav-room-facilities" tabindex="-1">
                                                Amenities
                                            </a>
                                        </li>


                                        <li class="disabled">
                                            <a href="{{ url("#") }}" class=" disabled" tabindex="-1">
                                                Photos
                                            </a>
                                        </li>


                                        <li class="disabled">
                                            <a href="{{ url("#") }}" class=" disabled" tabindex="-1">
                                                Policies
                                            </a>
                                        </li>


                                        <li class="disabled">
                                            <a href="{{ url("#") }}" class=" disabled" tabindex="-1">
                                                Payments
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <ul class="nav actions">
                                    <li class="actions_logout">
                                        <i class="glyphicon glyphicon-log-out"></i>
                                        <a href="{{ url("#") }}">Logout</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                    <div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h1 id="property-name" class="sticked-header alignment_header_main">
                                    Welcome Melon Mia!
                                </h1>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="page_description">
                                    Start by telling us your property's name, contact details and address.
                                </div>
                            </div>
                        </div>

                        <div class="desktop-hnav-clear-line"></div>

                        <div class="row">

                            <div class="col-md-9 compact-about-form">
                                <form id="add_property_details" action="#" method="POST">
                                    <div
                                        class="update-later-message col-xs-12 update-later-message--block alignment_header_message">
                                        <p>
                                            After you complete registration you will still be able to make changes to
                                            your listing before it goes live.
                                        </p>
                                    </div>

                                    <fieldset class="active">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <legend>
                                                    What is the name of your property?
                                                </legend>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="form-group col-xs-12 col-sm-6">
                                                <div class="input-length-counter">
                                                    <input type="text" id="property_name" name="" value=""
                                                        class="form-control form-control property-" placeholder="">
                                                    <span class="input-length-counter__label"
                                                        id="property_name_length_counter">
                                                    </span>
                                                </div>


                                                <div id="property-name-length-warning"
                                                    class="input-length-counter-warning hidden join_property_name_padding">
                                                    <strong>
                                                        Tip:
                                                    </strong>
                                                    Keeping your property name under 25 characters makes your property
                                                    easier to find and book.
                                                </div>

                                                <span class="join_property_name_text">
                                                    This name will be seen by guests when they search for a place to
                                                    stay.
                                                </span>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div id="stars_column" class="form-group col-xs-12 col-sm-4">
                                                <label>Star rating</label>
                                                <select class="col-md-12 form-control" id="stars" name="stars">
                                                    <option value="0" selected="selected">N/A</option>
                                                    <option value="1">1 ✯</option>
                                                    <option value="2">2 ✯✯</option>
                                                    <option value="3">3 ✯✯✯</option>
                                                    <option value="4">4 ✯✯✯✯</option>
                                                    <option value="5">5 ✯✯✯✯✯</option>
                                                </select>

                                            </div>
                                        </div>


                                    </fieldset>

                                    <fieldset class="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <legend>
                                                    What are the contact details for this property?
                                                </legend>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">

                                                <label for="location_contact_name">Contact name </label>

                                                <input type="text" id="location_contact_name"
                                                    name="location_contact_name" value="Melon Mia" class="form-control"
                                                    placeholder="Who will receive the letter?">


                                            </div>
                                        </div>


                                        <div class="phone-container row">
                                            <div class="col-md-12">
                                                <label>
                                                    Contact number (so we can assist with your registration when needed)
                                                </label>

                                                <div class="row">
                                                    <div class="col-md-6 about-phone about-phone-one">
                                                        <div
                                                            class="form-group about-phone__block phone-container_double">
                                                            <label>
                                                                Phone number
                                                            </label>
                                                            <div class="intl-tel-input allow-dropdown">
                                                                <div class="flag-container">
                                                                    <div class="selected-flag" tabindex="0"
                                                                        title="Bangladesh: +880">
                                                                        <div class="iti-flag bd"></div>
                                                                        <div class="iti-arrow"></div>
                                                                    </div>

                                                                </div>
                                                                <input type="tel" name="phone" id="phone"
                                                                    class="form-control" value="+8801617253586"
                                                                    placeholder="0100000000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 about-phone">
                                                        <div
                                                            class="form-group about-phone__block phone-container_double">
                                                            <label>
                                                                Alternative phone number (optional)
                                                            </label>
                                                            <div class="intl-tel-input allow-dropdown">
                                                                <div class="flag-container">
                                                                    <div class="selected-flag" tabindex="0"
                                                                        title="Bangladesh: +880">
                                                                        <div class="iti-flag bd"></div>
                                                                        <div class="iti-arrow"></div>
                                                                    </div>

                                                                </div>
                                                                <input type="tel" name="phone2" id="phone2"
                                                                    class="form-control field-optional" value=""
                                                                    placeholder="01812-345678">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label>Do you own multiple hotels, or are you part of a property
                                                    management company or group?

                                                </label>
                                                <div class="radio-block" id="part_of_chain">
                                                    <div class="radio part_of_chain_yes">
                                                        <label>
                                                            <input class="" type="radio" name="part_of_chain"
                                                                value="yes">
                                                            <span>Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="radio part_of_chain_no">
                                                        <label>
                                                            <input class="" type="radio" name="part_of_chain" value="no"
                                                                checked="">
                                                            <span>No</span>
                                                        </label>
                                                    </div>

                                                </div>



                                            </div>
                                            <div class="form-group col-sm-6 chain_name hidden" id="chain_name">
                                                <label for="chain_text">Name of company, group or chain</label>
                                                <input type="text" id="chain_text" name="chain_text" value=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </fieldset>


                                    <fieldset class="channel_manager">
                                        <legend>
                                            Do you use a channel manager?
                                        </legend>
                                        <div class="form-group">
                                            <label>A channel manager is a tool that lets you choose what you sell across
                                                all the different sites you might list your place on. You can then set
                                                your prices and open and close dates in your calendar on all of these
                                                sites in one place.<br><br>If you use a channel manager, tell us below.
                                                We’ll use this information to help you connect it to Booking.com in the
                                                future. It also helps if you tell us the brand name of your channel
                                                manager.

                                            </label>
                                            <div class="radio-block" id="is_xml_property">
                                                <div class="radio is_xml_property_yes">
                                                    <label>
                                                        <input type="radio" name="is_xml_property" value="yes">
                                                        <span>I use a channel manager</span>
                                                    </label>
                                                </div>
                                                <div class="radio is_xml_property_no">
                                                    <label>
                                                        <input type="radio" name="is_xml_property" value="no"
                                                            checked="">
                                                        <span>I don’t use a channel manager</span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group hidden" id="channel_manager_name_div">
                                            <label for="channel_manager_name">Enter name (optional)</label>
                                            <input type="text" id="channel_manager_name" name="channel_manager_name"
                                                value="" class="form-control" maxlength="100"
                                                placeholder="Channel manager's name">
                                        </div>
                                    </fieldset>




                                    <fieldset class="address-information">
                                        <legend id="address_field_legend">
                                            Where is your property located?
                                        </legend>
                                        <div class="describe-block" id="basicinfo-mpp">
                                            <p class="describe-text">
                                                You have multiple properties you want to list. Remember to fill in the
                                                information that corresponds to this property registration.
                                            </p>
                                        </div>
                                        <div class="row address-row">
                                            <div class="col-xs-12 col-sm-6 col-md-6 form-group address-form-block">
                                                <div class="row address-row">
                                                    <div class="col-lg-12 form-group">
                                                        <label for="address">Street address</label>
                                                        <input type="text" id="address" name="address" value=""
                                                            class="form-control pac-target-input"
                                                            placeholder="e.g. 123 Easy Street">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 form-group">
                                                        <label for="address_supplement">Address line 2</label>
                                                        <input type="text" id="address_supplement"
                                                            name="address_supplement" value=""
                                                            class="form-control field-optional"
                                                            placeholder="Unit number, suite, floor, building, etc. ">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 form-group">
                                                        <label>Country/region</label>
                                                        <select class="form-control" id="cc1" name="cc1" value="">
                                                            -- Select country/region --
                                                            <option value="xa">Bangladesh</option>
                                                            <option value="af">India</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 form-group">
                                                        <label for="city">City</label>
                                                        <input type="text" id="city" name="city" value=""
                                                            class="form-control" placeholder="e.g. Swalpa Pānchkāndi">

                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6 adjust-address-input-structure">
                                                    <label for="zipcode">Post Code</label>
                                                    <input type="text" id="zipcode" name="zipcode" value=""
                                                        class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 information-block">
                                                <div class="adjust-address-image-container row snailmail_smaller_block">
                                                    <div class="col-xs-3">
                                                        <img src="{{ asset("/registration/assets/images/letter-verification-icon.png") }}">
                                                    </div>
                                                    <div class="col-xs-9">
                                                        <legend>Your address matters</legend>
                                                        <p> Please make sure you enter the full address of your
                                                            property, including building name, number, etc. Based on the
                                                            information you provide, we might send a letter to verify
                                                            this address. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>

                                    <input type="submit" name="" value=""
                                        class="btn btn-block btn-primary btn-lg save_and_proceed">
                                </form>
                            </div>

                            <div class="col-md-3 js-sticky-col">
                                <div
                                    class="update-later-message update-later-message--floated  alignment_header_message">
                                    <p style="left: 1025.1px;">
                                        After you complete registration you will still be able to make changes
                                        to your listing before it goes live.
                                    </p>
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
                                © Copyright <a href="{{ url("#") }}">Booking.com</a> 2022
                            </li>

                            <li class="pull-left" id="footer-about-us">
                                <a href="{{ url("#") }}">
                                    About Us
                                </a>
                            </li>
                            <li class="pull-left" id="footer-privacy">
                                <a href="{{ url("#") }}">
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

    <script src="{{ asset("/registration/assets/js/jquery-1.12.4.min.js") }}"></script>
    <script src="{{ asset("/registration/assets/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("/registration/assets/js/script.js") }}"></script>

</body>

</html>