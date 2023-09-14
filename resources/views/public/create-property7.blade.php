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
      <x-guest-header/>
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
                    viewBox="0 0 24 24" role="presentation" focusable="false">
                    <path d="M2 15.5v2h20v-2H2zm0-5v2h20v-2H2zm0-5v2h20v-2H2z"></path>
                  </svg>
                  Menu
                  <span class="glyphicon glyphicon glyphicon-chevron-down pull-right"></span>
                  <span class="glyphicon glyphicon glyphicon-chevron-up pull-right"></span>
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
                        <li class="active active selected">
                          <a href="{{ url('#') }}" class="active active selected" tabindex="-1">
                          Amenities
                          </a>
                        </li>
                        <li class="disabled">
                          <a href="{{ url('#') }}" class="disabled">
                          Photos
                          </a>
                        </li>
                        <li data-nav-tag="policies"
                          data-nav-url="/policies.html?aid=304142&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9"
                          class="">
                          <a href="/policies.html?aid=304142&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9"
                            class=" " data-js-loader-overlay-on-click="1">
                          Policies
                          </a>
                        </li>
                        <li data-nav-tag="settings"
                          data-nav-url="/settings.html?aid=304142&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9"
                          class="">
                          <a href="/settings.html?aid=304142&amp;label=gen173nr-1FCAEoggI46AdIM1gEaBSIAQGYAQm4ARjIAQzYAQHoAQH4AQuIAgGoAgS4AougzJIGwAIB0gIkMzlkZTUzYTAtM2RjMS00NDNmLTk0ZDItNTc2MzJhN2I1MmIy2AIG4AIB&amp;token=fa6ce4aecd8372c9b2671c3970f32b27e52102a9"
                            class=" " data-js-loader-overlay-on-click="1">
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
                      Amenities
                    </h1>
                  </div>
                </div>
                <div class="">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page_description">
                      <p>These are specific features and services available in each room type.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="desktop-hnav-clear-line"></div>
              <div class="row">
                <div class="main-content col-md-9">
                  <div class="hotel-summary">
                    <form role="form" id="roomfacilities_form" method="POST"
                      class="roomfacilities_form_reset roomfacilities_form  sup-simple  small-sup-amenities "
                      action="/property7">
                      @csrf
                      <div
                        class="update-later-message col-xs-12 update-later-message--block alignment_header_message">
                        <p>
                          After you complete registration you will still be able to make changes
                          to your listing before it goes live.
                        </p>
                      </div>
                      <fieldset id="extra_beds_options" class="">
                        <legend>
                          Extra bed options
                        </legend>
                        <div class="row">
                          <div class="form-group col-lg-12">
                            <div class="row">
                              <div class="describe-block">
                                <i class="glyphicon glyphicon-hand-right"></i>
                                <p class="describe-text">These are the bed options that can
                                  be added upon request.
                                </p>
                              </div>
                            </div>
                            <label>Can you provide extra beds?
                            </label>
                            <div class="radio-block" id="extra-beds">
                              <div class="radio">
                                <label class="extra_beds_available_yes">
                                <input type="radio" name="extra_beds_available"
                                  value="yes">
                                <span>Yes</span>
                                </label>
                              </div>
                              <div class="radio">
                                <label class="extra_beds_available_no">
                                <input type="radio" name="extra_beds_available"
                                  value="no" checked="">
                                <span>No</span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="extra_beds_setup" class="hidden">
                          <div class="form-group">
                            <label for="max_extra_beds">
                            Select the number of extra beds that can
                            be added.
                            </label>
                            <div class="row">
                              <div class="col-sm-2 col-md-2">
                                <select id="max_extra_beds" name="max_extra_beds"
                                  class="form-control">
                                  <option value="1">1</option>
                                  <option value="2" selected="">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div id="extra_bed_checkboxes">
                            <strong class="">
                            Tick the box if you can accommodate the following guests in
                            extra beds.
                            </strong>
                            <div class="ml-20">
                              <div class="checkbox">
                                <label>
                                <input class="Children" type="checkbox" id="cot_allowed"
                                  name="cot_allowed">Children up to 2 years old in
                                cots
                                </label>
                              </div>
                              <div class="row extra-bed-price Children_body hidden">
                                <label class="col-md-2">Enter the price per night, per
                                child</label>
                                <div class="col-md-3">
                                  <div class="input-group ">
                                    <span class="input-group-addon">US$</span>
                                    <input type="tel" id="cot_price" name="cot_price"
                                      value="0.00" class="input-sm form-control "
                                      placeholder="">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="ml-20">
                              <div class="checkbox">
                                <label>
                                <input class="Adults" type="checkbox"
                                  id="extra_bed_adult_allowed"
                                  name="extra_bed_adult_allowed">Adults
                                </label>
                              </div>
                              <div
                                class="row extra-bed-price extra-bed-price-input-field Adults_body hidden">
                                <label class="col-md-2">Enter the price per night, per
                                adult</label>
                                <div class="col-md-3">
                                  <div class="input-group ">
                                    <span class="input-group-addon">US$</span>
                                    <input type="tel" id="extra_bed_adult_price"
                                      name="extra_bed_adult_price" value="0.00"
                                      class="input-sm form-control " placeholder="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <fieldset class="active">
                        <legend>
                          Amenities
                        </legend>
                        <div class="top-amenities-subtitle">Tell us about your amenities</div>
                        <div
                          class="amenities_accordion_wrapper_aligned amenities_accordion_wrapper">
                          <div class="top-amenities-wrapper">
                            <h3>Most requested by guests</h3>
                            <div class="top-amenities-list" id="top-amenities-list-wrapper">
                              <ul
                                class="accordion_options_wrapper accordion_options_wrapper-top-amenities">
                                <li class="accordion_row_wrapper">
                                  <div class="ac_li_wrapper ac_padding">
                                    <label class="ac_label"
                                      for="amenities_room_all_4_11">
                                    <input type="checkbox" name="top_room_all_11"
                                      id="amenities_room_all_4_11"
                                      class="select_all_rooms" value="1"
                                      checked="checked">
                                    Air conditioning
                                    </label>
                                  </div>
                                </li>
                                <li class="accordion_row_wrapper">
                                  <div class="ac_li_wrapper ac_padding">
                                    <label class="ac_label"
                                      for="amenities_room_all_5_5">
                                    <input type="checkbox" name="top_room_all_5"
                                      id="amenities_room_all_5_5"
                                      class="select_all_rooms" value="1">
                                    Bath
                                    </label>
                                  </div>
                                </li>
                                <li class="accordion_row_wrapper">
                                  <div class="ac_li_wrapper ac_padding">
                                    <label class="ac_label"
                                      for="amenities_room_all_9_81">
                                    <input type="checkbox" name="top_room_all_81"
                                      id="amenities_room_all_9_81"
                                      class="select_all_rooms" value="1">
                                    View
                                    </label>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="all-amenities-wrapper" style="display: block;">
                            <h3 class="amenities-title">All amenities by category </h3>
                            <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion_header_wrapper accordion_icon_style clearfix accordion-header accordion-button collapsed"
                                  id="headingOne" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne" aria-expanded="true"
                                  aria-controls="collapseOne">
                                  <span style="width: 50%;" class="pull-left">
                                  Room amenities</span>
                                  <span class="ac_nr_incat js-amenity-header-4 pull-left"
                                    style="width: 44%; text-align: right;">1/28
                                  selected</span>
                                  <i class="glyphicon glyphicon-chevron-right"></i>
                                </h2>
                                <div id="collapseOne"
                                  class="accordion-collapse collapse show"
                                  aria-labelledby="headingOne"
                                  data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <ul class="accordion_options_wrapper ">
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_4_138">
                                          <input type="checkbox"
                                            name="room_all_138"
                                            id="amenities_room_all_4_138"
                                            class="select_all_rooms"
                                            value="1">
                                          Clothes rack
                                          </label>
                                        </div>
                                      </li>
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_4_140">
                                          <input type="checkbox"
                                            name="room_all_140"
                                            id="amenities_room_all_4_140"
                                            class="select_all_rooms"
                                            value="1">
                                          Drying rack for clothing
                                          </label>
                                        </div>
                                      </li>
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_4_139">
                                          <input type="checkbox"
                                            name="room_all_139"
                                            id="amenities_room_all_4_139"
                                            class="select_all_rooms"
                                            value="1">
                                          Fold-up bed
                                          </label>
                                        </div>
                                      </li>
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_4_146">
                                          <input type="checkbox"
                                            name="room_all_146"
                                            id="amenities_room_all_4_146"
                                            class="select_all_rooms"
                                            value="1">
                                          Sofa bed
                                          </label>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion_header_wrapper accordion_icon_style clearfix accordion-header accordion-button collapsed"
                                  id="headingTwo" data-bs-toggle="collapse"
                                  data-bs-target="#collapseTwo"
                                  aria-controls="collapseTwo">
                                  <span style="width: 50%;" class="pull-left">
                                  Bathroom</span>
                                  <span class="ac_nr_incat js-amenity-header-4 pull-left"
                                    style="width: 44%; text-align: right;">1/28
                                  selected</span>
                                  <i class="glyphicon glyphicon-chevron-right"></i>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                  aria-labelledby="headingTwo"
                                  data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <ul class="accordion_options_wrapper"
                                      id="accordion_options_wrapper-5">
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_5_141">
                                          <input type="checkbox"
                                            name="room_all_141"
                                            id="amenities_room_all_5_141"
                                            class="select_all_rooms"
                                            value="1">
                                          Toilet paper
                                          </label>
                                        </div>
                                      </li>
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_5_5">
                                          <input type="checkbox"
                                            name="room_all_5"
                                            id="amenities_room_all_5_5"
                                            class="select_all_rooms"
                                            value="1">
                                          Bath
                                          </label>
                                        </div>
                                      </li>
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_5_100">
                                          <input type="checkbox"
                                            name="room_all_100"
                                            id="amenities_room_all_5_100"
                                            class="select_all_rooms"
                                            value="1">
                                          Bidet
                                          </label>
                                        </div>
                                      </li>
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_5_69">
                                          <input type="checkbox"
                                            name="room_all_69"
                                            id="amenities_room_all_5_69"
                                            class="select_all_rooms"
                                            value="1">
                                          Bath or shower
                                          </label>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion_header_wrapper accordion_icon_style clearfix accordion-header accordion-button collapsed"
                                  id="headingThree" data-bs-toggle="collapse"
                                  data-bs-target="#collapseThree"
                                  aria-controls="collapseThree">
                                  <span style="width: 50%;" class="pull-left">
                                  Media &amp; technology</span>
                                  <span class="ac_nr_incat js-amenity-header-4 pull-left"
                                    style="width: 44%; text-align: right;">1/28
                                  selected</span>
                                  <i class="glyphicon glyphicon-chevron-right"></i>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                  aria-labelledby="headingThree"
                                  data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <ul class="accordion_options_wrapper"
                                      id="accordion_options_wrapper-5">
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_5_141">
                                          <input type="checkbox"
                                            name="room_all_141"
                                            id="amenities_room_all_5_141"
                                            class="select_all_rooms"
                                            value="1">
                                          Toilet paper
                                          </label>
                                        </div>
                                      </li>
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_5_5">
                                          <input type="checkbox"
                                            name="room_all_5"
                                            id="amenities_room_all_5_5"
                                            class="select_all_rooms"
                                            value="1">
                                          Bath
                                          </label>
                                        </div>
                                      </li>
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_5_100">
                                          <input type="checkbox"
                                            name="room_all_100"
                                            id="amenities_room_all_5_100"
                                            class="select_all_rooms"
                                            value="1">
                                          Bidet
                                          </label>
                                        </div>
                                      </li>
                                      <li class="accordion_row_wrapper">
                                        <div class="ac_li_wrapper ac_padding">
                                          <label class="ac_label"
                                            for="amenities_room_all_5_69">
                                          <input type="checkbox"
                                            name="room_all_69"
                                            id="amenities_room_all_5_69"
                                            class="select_all_rooms"
                                            value="1">
                                          Bath or shower
                                          </label>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <div>
                        <input type="submit" name="proceed" value="Continue"
                          class="btn btn-block btn-primary btn-lg save_and_proceed">
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-3">
                  <div
                    class="update-later-message update-later-message--floated alignment_header_message">
                    <p style="left: 1025.1px;">
                      After you complete registration you will still be able to make changes to your
                      listing before it goes live.
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
