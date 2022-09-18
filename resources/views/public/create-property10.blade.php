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
                <a href="{{ url('/') }}">
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
              <div class="nav-steps">
                <div>
                  <div>
                    <div>
                      <ul id="js-main-nav" class="nav nav__int main-nav account-menu_mobile">
                        <li class="completed">
                          <a href="{{ url('#') }}" class="completed">
                          Basic info
                          </a>
                        </li>
                        <li class="completed">
                          <a href="{{ url('#') }}" class="completed">
                          Layout and pricing
                          </a>
                        </li>
                        <li class="completed">
                          <a href="{{ url('') }}" class="completed">
                          Facilities &amp; services
                          </a>
                        </li>
                        <li class="completed">
                          <a href="{{ url('#') }}" class="completed" tabindex="-1">
                          Amenities
                          </a>
                        </li>
                        <li class="completed">
                          <a href="{{ url('#') }}" class="completed">
                          Photos
                          </a>
                        </li>
                        <li class="completed">
                          <a href="{{ url('#') }}" class="completed">
                          Policies
                          </a>
                        </li>
                        <li class="active active selected">
                          <a href="{{ url('#') }}" class="active active selected">
                          Payments
                          </a>
                        </li>
                      </ul>
                    </div>
                    <ul class="nav actions">
                      <li class="actions_logout">
                        <i class="glyphicon glyphicon-log-out"></i>
                        <a href="{{ url('#') }}">Log out</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
            <div id="" class="">
              <div class="row">
                <div class="">
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <h1 class=" alignment_header_main">
                      Payments
                    </h1>
                  </div>
                </div>
                <div class="">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page_description">
                      <p>
                        Specify the payment types you accept, tax details, and other options like
                        additional charges.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="desktop-hnav-clear-line"></div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xm-12">
                  <form action="/property10" role="form" class="show-when-ready js-main-form" id="add_property_details" method="POST">
                    @csrf
                    <div class="update-later-message col-xs-12 update-later-message--block alignment_header_message"
                      style="display: none">
                      <p>
                        After you complete registration you'll be able to make changes to your
                        listing before it goes live.
                      </p>
                    </div>
                    <div class="row">
                      <div class="col-md-9">
                        <fieldset class="cc_acceptance">
                          <legend>Guest Payment Options</legend>
                          <div class="row cc_accepted" id="cc_accepted">
                            <div class="col-xs-12">
                              <div class="form-group">
                                <label>Can you charge credit cards at the property?
                                </label>
                                <div class="radio-block" id="cc_accepted">
                                  <div class="radio">
                                    <label class="p-0 charge_credit_card_yes">
                                    <input type="radio" name="cc_accepted"
                                      value="yes">
                                    <span>Yes</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label class="p-0 charge_credit_card_no">
                                    <input type="radio" name="cc_accepted"
                                      value="no" checked="">
                                    <span>No</span>
                                    </label>
                                  </div>
                                </div>
                                <span id="cash_section"
                                  class="cc_desc cc_desc_new help-block hidden">
                                We will inform guests that you only accept cash.
                                </span>
                              </div>
                            </div>
                          </div>
                          <div id="creditcard_section"
                            class="row creditcard_section form-group hidden">
                            <div class="col-xs-12">
                            </div>
                            <div class="col-xs-12">
                              <div class="row">
                                <div class="col-xs-12">
                                  <div class="col-sm-6">
                                    <label
                                      class="checkbox creditcard americanexpress cc_break"
                                      for="cc_id_1">
                                    <input type="checkbox" name="cc_id" id="cc_id_1"
                                      value="1">
                                    American Express
                                    </label>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="col-sm-6">
                                    <label class="checkbox creditcard visa "
                                      for="cc_id_2">
                                    <input type="checkbox" name="cc_id" id="cc_id_2"
                                      value="2">
                                    Visa
                                    </label>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="col-sm-6">
                                    <label class="checkbox creditcard euromastercard "
                                      for="cc_id_3">
                                    <input type="checkbox" name="cc_id" id="cc_id_3"
                                      value="3">
                                    Euro/Mastercard
                                    </label>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="col-sm-6">
                                    <label class="checkbox creditcard dinersclub "
                                      for="cc_id_5">
                                    <input type="checkbox" name="cc_id" id="cc_id_5"
                                      value="5">
                                    Diners Club
                                    </label>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="col-sm-6">
                                    <label class="checkbox creditcard jcb "
                                      for="cc_id_7">
                                    <input type="checkbox" name="cc_id" id="cc_id_7"
                                      value="7">
                                    JCB
                                    </label>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="col-sm-6">
                                    <label class="checkbox creditcard maestro cc_break"
                                      for="cc_id_10">
                                    <input type="checkbox" name="cc_id"
                                      id="cc_id_10" value="10">
                                    Maestro
                                    </label>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="col-sm-6">
                                    <label class="checkbox creditcard discover "
                                      for="cc_id_11">
                                    <input type="checkbox" name="cc_id"
                                      id="cc_id_11" value="11">
                                    Discover
                                    </label>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="col-sm-6">
                                    <label
                                      class="checkbox creditcard unionpaydebitcard "
                                      for="cc_id_35">
                                    <input type="checkbox" name="cc_id"
                                      id="cc_id_35" value="35">
                                    UnionPay debit card
                                    </label>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="col-sm-6">
                                    <label
                                      class="checkbox creditcard unionpaycreditcard "
                                      for="cc_id_44">
                                    <input type="checkbox" name="cc_id"
                                      id="cc_id_44" value="44">
                                    UnionPay credit card
                                    </label>
                                    <div class="clearfix"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                      <div class="col-md-3">
                        <div class="side-help-block">
                          <span class="side-help-block_title">How do guests book and how do they
                          pay?</span>
                          <p>To initially secure a reservation, we let guests use all major credit
                            cards. However, when it comes to collecting payment, you can specify
                            the payment methods you accept at your property.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-9">
                        <fieldset class="">
                          <legend>Commission Payments</legend>
                          <div class="row">
                            <div class="col-sm-6 col-md-8">
                              <p id="commission_explain">
                                At the beginning of each month, we'll send you an invoice
                                for all complete bookings in the previous month.
                              </p>
                            </div>
                            <div class="col-sm-6 col-md-4">
                              <div class="commission-number-section">
                                <h4>Commission percentage:</h4>
                                <span class="commission-number">12%</span>
                              </div>
                            </div>
                          </div>
                          <div class="row invoice_recipient_row">
                            <div class="form-group col-sm-6 col-xs-12">
                              <label class="" for="invoice_recipient">What name should be
                              placed on the invoice (e.g. legal/company name)?</label>
                              <select id="invoice_recipient" name="invoice_recipient"
                                class="form-control " style="">
                                <option value="property_name">hello</option>
                                <option value="company_name_create">Legal company name
                                  (please specify)
                                </option>
                                <option value="contact_person" selected="">Melon Mia
                                </option>
                              </select>
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-sm-6 col-xs-12 hidden">
                              <label for="company_name">Legal company name</label>
                              <input type="text" id="company_name" name="company_name"
                                value="" class="form-control">
                            </div>
                          </div>
                          <div id="invoice_address">
                            <div class="row invoice_address_row">
                              <div class="form-group col-sm-6 col-xs-12">
                                <label>Does this recipient have the same address as your
                                property?
                                </label>
                                <div class="radio-block" id="invoice_same_address">
                                  <div class="radio">
                                    <label class="p-0 invoice_address_yes">
                                    <input type="radio" name="invoice_same_address"
                                      value="yes" checked="">
                                    <span>Yes</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label class="p-0 invoice_address_no">
                                    <input type="radio" name="invoice_same_address"
                                      value="no">
                                    <span>No</span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="recipient_address" class="hidden">
                            <div class="row">
                              <div class="form-group col-sm-6 col-xs-12">
                                <label>Select the country/region where the invoice recipient
                                is located</label>
                                <select class="form-control" id="invoice_cc1"
                                  name="invoice_cc1" value="">
                                  -- Select
                                  country/region --
                                  <option value="xa">Abkhazia</option>
                                  <option value="af">Afghanistan</option>
                                </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-sm-6 col-xs-12">
                                <label for="invoice_city_name">City</label>
                                <input type="text" id="invoice_city_name"
                                  name="invoice_city_name" value="Dhaka"
                                  class="form-control">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-sm-6 col-xs-12">
                                <label for="invoice_address">Address</label>
                                <input type="text" id="invoice_address"
                                  name="invoice_address" value="123" class="form-control">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-sm-4 col-xs-12">
                                <label for="invoice_zipcode">Postal code</label>
                                <input type="text" id="invoice_zipcode"
                                  name="invoice_zipcode" value="1650"
                                  class="form-control">
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                      <div class="col-md-3">
                        <div class="side-help-block commission-usps-section_wrap">
                          <div class="commission-usps-section">
                            <h4>How your commission works for you!</h4>
                            <ul class="commission-usps-list">
                              <li>No hidden fees – one flat commission rate </li>
                              <li>Pay only for bookings that stay</li>
                              <li>24/7 personal support by phone or email</li>
                              <li>Strong search engine presence for more bookings</li>
                              <li>Property advice and analytics to increase performance</li>
                              <li>Instant confirmations to save you time</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-9">
                        <fieldset class="active">
                          <h4 class="preload-availability-header"> You’re almost done – just a
                            couple last things to consider
                          </h4>
                          <legend>
                            Your availability to guests
                          </legend>
                          <div class="row preload-availability-notice">
                            <div class="col-md-12">To help you start earning, we automatically
                              open your property for bookings for the next 18 months. To make
                              changes to your availability before opening, select "Complete
                              registration and open later." Your availability can also be
                              adjusted after you open for bookings.
                            </div>
                          </div>
                          <legend>
                            To complete your registration, check the boxes below:
                          </legend>
                          <div class="row ml-10">
                            <div class="col-md-12 updated_checkbox">
                              <div class="form-group checkbox">
                                <label>
                                <input type="checkbox" id="certified_legality"
                                  name="certified_legality" checked="" value="1">
                                I certify that this is a legitimate accommodation
                                business with all necessary licenses and permits, which
                                can be shown upon first request. Booking.com B.V.
                                reserves the right to verify and investigate any details
                                provided in this registration.
                                </label>
                              </div>
                              <div class="form-group checkbox">
                                <label>
                                <input type="checkbox" id="accept_box" name="accept_box"
                                  checked="" value="1">
                                I have read, accepted, and agreed to the <a
                                  id="show_gdt_link" target="_blank"
                                  href="https://admin.booking.com/hotelreg/terms-and-conditions.html?language=en-us;cc1=bd"><span>General
                                Delivery Terms</span></a> and <a
                                  id="show_privacy_link" target="_blank"
                                  href="https://admin.booking.com/hotel/hoteladmin/privacy.html?language=en-us;cc1=bd"><span>Privacy
                                Statement.</span></a>
                                </label>
                                <div class="describe-block-below">
                                  Booking.com enables accommodations and guests to
                                  communicate through Booking.com, which receives and
                                  processes communications in accordance with the
                                  Booking.com Privacy Statement and General Delivery
                                  Terms.
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <input type="submit" id="proceed-open-button" name="proceed-open"
                          value="Complete registration and open for bookings"
                          class="btn btn-block btn-primary btn-lg save_and_proceed">
                        <input type="submit" id="proceed-button" name="proceed"
                          value="Complete registration and open later"
                          class="btn btn-block btn-link btn-lg save_and_proceed bui_font_body">
                        <p class="submit_persuasion">
                          Almost done! You can always change the info even after you complete the
                          registration.
                        </p>
                      </div>
                    </div>
                    <div>
                    </div>
                  </form>
                </div>
                <div class="col-md-3 js-sticky-col">
                  <div class="update-later-message update-later-message--floated js-sticky-update-later-message alignment_header_message"
                    style="display: none">
                    <p style="left: 0px;">
                      After you complete registration you'll be able to make changes to your listing
                      before it goes live.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /row -->
          <div class="clearfix"></div>
          <div class="row join_thankyou__footer" id="footer_wrapper">
            <footer>
              <ul class="list-unstyled list-inline clearfix">
                <li id="footer-booking" class="pull-right" data-ga-track="sb_footer_bookingindex_click">
                  © Copyright <a href="https://booking.com/?lang=en" target="_blank">Booking.com</a> 2022
                </li>
                <li class="pull-left" id="footer-about-us" data-ga-track="sb_footer_about_us_click">
                  <a href="https://booking.com/content/about.html?lang=en" target="_blank">
                  About Us
                  </a>
                </li>
                <li class="pull-left" id="footer-privacy" data-ga-track="sb_footer_privacy_click">
                  <a href="https://admin.booking.com/hotel/hoteladmin/privacy.html?lang=en"
                    target="_blank">
                  Privacy and Cookie Statement
                  </a>
                </li>
                <li id="footer-faq" class="pull-left">
                  <a href="/faq.html?aid=304142&amp;token=f63dae3dd0bc4bafea1227e4b9fa86c81d271736&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AvDzxpIGwAIB0gIkNjFhZjc0YTMtMzlmZi00NGZiLThjNjItMTRmMTc3Y2ZhZWJj2AIG4AIB"
                    data-ga-track="sb_footer_bookingindex_faq_click" target="_blank">FAQs</a>
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