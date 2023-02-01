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
                        <li class="active active selected">
                          <a href="{{ url('#') }}" class="active active selected">
                          Policies
                          </a>
                        </li>
                        <li class="disabled">
                          <a href="{{ url('#') }}" class="">
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
                      Policies
                    </h1>
                  </div>
                </div>
                <div class="">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page_description">
                      <p>
                        Specify some basic policies. Do you allow children or pets? How flexible are
                        you with cancellations?
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="desktop-hnav-clear-line"></div>
              <div class="row">
                <div class="main-content col-md-9">
                  <div
                    class="update-later-message col-xs-12 update-later-message--block alignment_header_message">
                    <p>
                      After you complete registration you'll be able to make changes to your listing
                      before it goes live.
                    </p>
                  </div>
                  <form role="form" id="property_policies"
                    action="/property9"
                    method="POST" autocomplete="disabled" class="js-main-form">
                    @csrf
                    <input type="hidden" name="policy_data"
                      value="{&quot;cancel_free_days_prior&quot;:&quot;2&quot;,&quot;cancel_guest_payment&quot;:&quot;full_stay&quot;}">
                    <div id="error_header" class="alert alert-danger hidden"></div>
                    <fieldset class="">
                      <legend>Cancellations</legend>
                      <div id="policy_section" class="policy-section--bhep-join-policies">
                        <div id="direct_payment_fields">
                          <div class="row">
                            <div class="col-md-7 col-sm-12">
                              <div class="form-group">
                                <label class="" for="cancel_free_days_prior">How many days
                                in advance can guests cancel free of charge?</label>
                                <select id="cancel_free_days_prior"
                                  name="cancel_free_days_prior" class="form-control ">
                                  <option value="0">Day of arrival (6 pm)</option>
                                  <option value="1">1 day</option>
                                  <option value="2">2 days</option>
                                  <option value="3">3 days</option>
                                  <option value="7">7 days</option>
                                  <option value="14">14 days</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-7 col-sm-12">
                              <div class="form-group">
                                <label class="" for="cancel_guest_payment">or guests will
                                pay 100%</label>
                                <select id="cancel_guest_payment"
                                  name="cancel_guest_payment" class="form-control ">
                                  <option value="first_night">of the first night</option>
                                  <option value="full_stay">of the full stay</option>
                                </select>
                              </div>
                            </div>
                            <div id="cancellation_message" class="col-sm-12 col-xs-12">
                              <div class="alert alert-info">
                                <i class="glyphicon glyphicon-bell"
                                  style="float: left; margin-right: 5px;"></i>
                                <p id="cancellation_message_policy">The guest must cancel 2
                                  days in advance or pay 100% of the price of the whole
                                  stay.
                                </p>
                                <p class="help-block"> You'll be able to make changes to
                                  your policies later on – this is just to get you
                                  started.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <div class="row">
                        <div class="col-md-10 col-sm-9 col-xs-8">
                          <legend>Protect Against Accidental Bookings</legend>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4">
                          <div class="grace_switch">
                            <label class="switch">
                            <input type="checkbox" name="nr_grace_period_opt_in" value="1"
                              id="grace_period_opt_in" checked=""
                              class="grace_period_opt_in">
                            <span class="slider round"></span>
                            <span class="switch-label" id="switch_label">Yes</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 col-xs-12 grace-period-policy">
                          <p class="help-block">To save you time handling accidental bookings, we
                            automatically waive cancellation fees for guests who cancel within
                            the first 24 hours of a booking being made. You can change this
                            period of time later in your property management platform.
                          </p>
                        </div>
                      </div>
                    </fieldset>
                    <div class="row" id="reservation_section">
                      <div class="col-md-6" id="checkin">
                        <fieldset class="">
                          <legend>Check-in</legend>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="radio-block check-in-out-block"
                                id="checkin_start_block">
                                <label>from:</label>
                                <div class="js-time-options-group time-options-group">
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkin_start_preset"
                                      value="12:00" checked="">
                                    <span>12:00&nbsp;PM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkin_start_preset"
                                      value="14:00">
                                    <span>2:00&nbsp;PM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkin_start_preset"
                                      value="15:00">
                                    <span>3:00&nbsp;PM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <select class="form-control" id="checkin_start"
                                      name="checkin_start">
                                      <option disabled="disabled" value=""
                                        selected="">
                                        Other
                                      </option>
                                      <option value="07:00">
                                        7:00&nbsp;AM
                                      </option>
                                      <option value="07:30">
                                        7:30&nbsp;AM
                                      </option>
                                      <option value="08:00">
                                        8:00&nbsp;AM
                                      </option>
                                      <option value="08:30">
                                        8:30&nbsp;AM
                                      </option>
                                      <option value="09:00">
                                        9:00&nbsp;AM
                                      </option>
                                      <option value="09:30">
                                        9:30&nbsp;AM
                                      </option>
                                      <option value="10:00">
                                        10:00&nbsp;AM
                                      </option>
                                      <option value="10:30">
                                        10:30&nbsp;AM
                                      </option>
                                      <option value="11:00">
                                        11:00&nbsp;AM
                                      </option>
                                      <option value="11:30">
                                        11:30&nbsp;AM
                                      </option>
                                      <option value="12:00">
                                        12:00&nbsp;PM
                                      </option>
                                      <option value="12:30">
                                        12:30&nbsp;PM
                                      </option>
                                      <option value="13:00">
                                        1:00&nbsp;PM
                                      </option>
                                      <option value="13:30">
                                        1:30&nbsp;PM
                                      </option>
                                      <option value="14:00">
                                        2:00&nbsp;PM
                                      </option>
                                      <option value="14:30">
                                        2:30&nbsp;PM
                                      </option>
                                      <option value="15:00">
                                        3:00&nbsp;PM
                                      </option>
                                      <option value="15:30">
                                        3:30&nbsp;PM
                                      </option>
                                      <option value="16:00">
                                        4:00&nbsp;PM
                                      </option>
                                      <option value="16:30">
                                        4:30&nbsp;PM
                                      </option>
                                      <option value="17:00">
                                        5:00&nbsp;PM
                                      </option>
                                      <option value="17:30">
                                        5:30&nbsp;PM
                                      </option>
                                      <option value="18:00">
                                        6:00&nbsp;PM
                                      </option>
                                      <option value="18:30">
                                        6:30&nbsp;PM
                                      </option>
                                      <option value="19:00">
                                        7:00&nbsp;PM
                                      </option>
                                      <option value="19:30">
                                        7:30&nbsp;PM
                                      </option>
                                      <option value="20:00">
                                        8:00&nbsp;PM
                                      </option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="radio-block check-in-out-block"
                                id="checkin_end_block">
                                <label>to:</label>
                                <div
                                  class="js-time-options-group time-options-group form-group">
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkin_end_preset"
                                      value="12:00" checked="">
                                    <span>12:00&nbsp;PM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkin_end_preset"
                                      value="22:00">
                                    <span>10:00&nbsp;PM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkin_end_preset"
                                      value="00:00">
                                    <span>12:00&nbsp;AM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <select class="form-control" id="checkin_end"
                                      name="checkin_end">
                                      <option disabled="disabled" value=""
                                        selected="">
                                        Other
                                      </option>
                                      <option value="12:00">
                                        12:00&nbsp;PM
                                      </option>
                                      <option value="12:30">
                                        12:30&nbsp;PM
                                      </option>
                                      <option value="13:00">
                                        1:00&nbsp;PM
                                      </option>
                                      <option value="13:30">
                                        1:30&nbsp;PM
                                      </option>
                                      <option value="14:00">
                                        2:00&nbsp;PM
                                      </option>
                                      <option value="14:30">
                                        2:30&nbsp;PM
                                      </option>
                                      <option value="15:00">
                                        3:00&nbsp;PM
                                      </option>
                                      <option value="15:30">
                                        3:30&nbsp;PM
                                      </option>
                                      <option value="16:00">
                                        4:00&nbsp;PM
                                      </option>
                                      <option value="16:30">
                                        4:30&nbsp;PM
                                      </option>
                                      <option value="17:00">
                                        5:00&nbsp;PM
                                      </option>
                                      <option value="17:30">
                                        5:30&nbsp;PM
                                      </option>
                                      <option value="18:00">
                                        6:00&nbsp;PM
                                      </option>
                                      <option value="18:30">
                                        6:30&nbsp;PM
                                      </option>
                                      <option value="19:00">
                                        7:00&nbsp;PM
                                      </option>
                                      <option value="19:30">
                                        7:30&nbsp;PM
                                      </option>
                                      <option value="20:00">
                                        8:00&nbsp;PM
                                      </option>
                                      <option value="20:30">
                                        8:30&nbsp;PM
                                      </option>
                                      <option value="21:00">
                                        9:00&nbsp;PM
                                      </option>
                                      <option value="21:30">
                                        9:30&nbsp;PM
                                      </option>
                                      <option value="22:00">
                                        10:00&nbsp;PM
                                      </option>
                                      <option value="22:30">
                                        10:30&nbsp;PM
                                      </option>
                                      <option value="23:00">
                                        11:00&nbsp;PM
                                      </option>
                                      <option value="23:30">
                                        11:30&nbsp;PM
                                      </option>
                                      <option value="00:00">
                                        12:00&nbsp;AM
                                      </option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                      <div class="col-md-6" id="checkout">
                        <fieldset class="">
                          <legend>Check-out</legend>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="radio-block check-in-out-block"
                                id="checkout_start_block">
                                <label>from (optional):</label>
                                <div class="js-time-options-group time-options-group">
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkout_start_preset"
                                      value="00:00">
                                    <span>12:00&nbsp;AM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkout_start_preset"
                                      value="10:00">
                                    <span>10:00&nbsp;AM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkout_start_preset"
                                      value="12:00">
                                    <span>12:00&nbsp;PM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <select class="form-control" id="checkout_start"
                                      name="checkout_start">
                                      <option disabled="disabled" value=""
                                        selected="">
                                        Other
                                      </option>
                                      <option value="00:00">
                                        12:00&nbsp;AM
                                      </option>
                                      <option value="00:30">
                                        12:30&nbsp;AM
                                      </option>
                                      <option value="01:00">
                                        1:00&nbsp;AM
                                      </option>
                                      <option value="01:30">
                                        1:30&nbsp;AM
                                      </option>
                                      <option value="02:00">
                                        2:00&nbsp;AM
                                      </option>
                                      <option value="02:30">
                                        2:30&nbsp;AM
                                      </option>
                                      <option value="03:00">
                                        3:00&nbsp;AM
                                      </option>
                                      <option value="03:30">
                                        3:30&nbsp;AM
                                      </option>
                                      <option value="04:00">
                                        4:00&nbsp;AM
                                      </option>
                                      <option value="04:30">
                                        4:30&nbsp;AM
                                      </option>
                                      <option value="05:00">
                                        5:00&nbsp;AM
                                      </option>
                                      <option value="05:30">
                                        5:30&nbsp;AM
                                      </option>
                                      <option value="06:00">
                                        6:00&nbsp;AM
                                      </option>
                                      <option value="06:30">
                                        6:30&nbsp;AM
                                      </option>
                                      <option value="07:00">
                                        7:00&nbsp;AM
                                      </option>
                                      <option value="07:30">
                                        7:30&nbsp;AM
                                      </option>
                                      <option value="08:00">
                                        8:00&nbsp;AM
                                      </option>
                                      <option value="08:30">
                                        8:30&nbsp;AM
                                      </option>
                                      <option value="09:00">
                                        9:00&nbsp;AM
                                      </option>
                                      <option value="09:30">
                                        9:30&nbsp;AM
                                      </option>
                                      <option value="10:00">
                                        10:00&nbsp;AM
                                      </option>
                                      <option value="10:30">
                                        10:30&nbsp;AM
                                      </option>
                                      <option value="11:00">
                                        11:00&nbsp;AM
                                      </option>
                                      <option value="11:30">
                                        11:30&nbsp;AM
                                      </option>
                                      <option value="12:00">
                                        12:00&nbsp;PM
                                      </option>
                                      <option value="12:30">
                                        12:30&nbsp;PM
                                      </option>
                                      <option value="13:00">
                                        1:00&nbsp;PM
                                      </option>
                                      <option value="13:30">
                                        1:30&nbsp;PM
                                      </option>
                                      <option value="14:00">
                                        2:00&nbsp;PM
                                      </option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="radio-block check-in-out-block"
                                id="checkout_end_block">
                                <label>to:</label>
                                <div
                                  class="js-time-options-group time-options-group form-group">
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkout_end_preset"
                                      value="10:00" checked="">
                                    <span>10:00&nbsp;AM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkout_end_preset"
                                      value="11:00">
                                    <span>11:00&nbsp;AM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                    <input type="radio" name="checkout_end_preset"
                                      value="12:00">
                                    <span>12:00&nbsp;PM</span>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <select class="form-control" id="checkout_end"
                                      name="checkout_end">
                                      <option disabled="disabled" value=""
                                        selected="">
                                        Other
                                      </option>
                                      <option value="07:00">
                                        7:00&nbsp;AM
                                      </option>
                                      <option value="07:30">
                                        7:30&nbsp;AM
                                      </option>
                                      <option value="08:00">
                                        8:00&nbsp;AM
                                      </option>
                                      <option value="08:30">
                                        8:30&nbsp;AM
                                      </option>
                                      <option value="09:00">
                                        9:00&nbsp;AM
                                      </option>
                                      <option value="09:30">
                                        9:30&nbsp;AM
                                      </option>
                                      <option value="10:00">
                                        10:00&nbsp;AM
                                      </option>
                                      <option value="10:30">
                                        10:30&nbsp;AM
                                      </option>
                                      <option value="11:00">
                                        11:00&nbsp;AM
                                      </option>
                                      <option value="11:30">
                                        11:30&nbsp;AM
                                      </option>
                                      <option value="12:00">
                                        12:00&nbsp;PM
                                      </option>
                                      <option value="12:30">
                                        12:30&nbsp;PM
                                      </option>
                                      <option value="13:00">
                                        1:00&nbsp;PM
                                      </option>
                                      <option value="13:30">
                                        1:30&nbsp;PM
                                      </option>
                                      <option value="14:00">
                                        2:00&nbsp;PM
                                      </option>
                                      <option value="14:30">
                                        2:30&nbsp;PM
                                      </option>
                                      <option value="15:00">
                                        3:00&nbsp;PM
                                      </option>
                                      <option value="15:30">
                                        3:30&nbsp;PM
                                      </option>
                                      <option value="16:00">
                                        4:00&nbsp;PM
                                      </option>
                                      <option value="16:30">
                                        4:30&nbsp;PM
                                      </option>
                                      <option value="17:00">
                                        5:00&nbsp;PM
                                      </option>
                                      <option value="17:30">
                                        5:30&nbsp;PM
                                      </option>
                                      <option value="18:00">
                                        6:00&nbsp;PM
                                      </option>
                                      <option value="18:30">
                                        6:30&nbsp;PM
                                      </option>
                                      <option value="19:00">
                                        7:00&nbsp;PM
                                      </option>
                                      <option value="19:30">
                                        7:30&nbsp;PM
                                      </option>
                                      <option value="20:00">
                                        8:00&nbsp;PM
                                      </option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <fieldset id="children_section" class="">
                      <legend>Children</legend>
                      <div class="row">
                        <div class="form-group col-lg-12">
                          <label>Can you accommodate children? (You can specify the ages and
                          prices later)
                          </label>
                          <div class="radio-block" id="children_allowed">
                            <div class="radio">
                              <label>
                              <input type="radio" name="children_allowed" value="yes"
                                checked="">
                              <span>Yes</span>
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                              <input type="radio" name="children_allowed" value="no">
                              <span>No</span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset id="pets_section" class="active">
                      <legend>Pets</legend>
                      <div class="row">
                        <div class="describe-block">
                          <p class="describe-text">Some guests like to travel with their furry
                            friends. Indicate if you allow pets and if any charges apply.
                          </p>
                        </div>
                      </div>
                      <div id="policies_section">
                        <div class="form-group row" id="pets">
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <label class="" for="pets_allowed">Do you allow pets?</label>
                            <select id="pets_allowed" name="pets_allowed" class="form-control" onchange="petsType()">
                              <option value="no">No</option>
                              <option value="yes">Yes</option>
                              <option value="request">Upon request</option>
                            </select>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-6 pet_cost_question hidden">
                            <label class="" for="pets_fee">Are there additional charges for
                            pets?</label>
                            <select id="pets_fee" name="pets_fee" class="form-control ">
                              <option value="free">Pets can stay for free</option>
                              <option value="paid">Charges may apply</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <input type="submit" name="proceed" value="Continue"
                      class="btn btn-block btn-primary btn-lg save_and_proceed">
                  </form>
                </div>
                <div class="col-md-3 js-sticky-col">
                  <div
                    class="update-later-message update-later-message--floated js-sticky-update-later-message alignment_header_message">
                    <p style="left: 1025.1px;">
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
