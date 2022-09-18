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
          <div class="row top_progress" id="content_wrapper">
          <form action="/property8" method="POST" enctype="multipart/form-data">
            @csrf
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
                        <li class="active active selected">
                          <a href="{{ url('#') }}" class="active active selected">
                          Photos
                          </a>
                        </li>
                        <li class="disabled">
                          <a href="{{ url('#') }}" class=" ">
                          Policies
                          </a>
                        </li>
                        <li class="">
                          <a href="{{ url('') }}" class=" ">
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
                      Property photos
                    </h1>
                  </div>
                </div>
                <div class="">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page_description">
                      <p>
                        Great photos invite guests to get the full experience of your property, so
                        upload some high-resolution photos that represent all your property has to
                        offer.
                        We will display these photos on your property's page on the Booking.com
                        website.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="desktop-hnav-clear-line"></div>
              <div class="row">
                <div class="col-md-9 col-sm-9 col-xm-12">
                  <div
                    class="update-later-message col-xs-12 update-later-message--block alignment_header_message">
                    <p>
                      After you complete registration you will still be able to make changes to your
                      listing before it goes live.
                    </p>
                  </div>
                  <div id="photos-content">
                    <fieldset class="thumbnails-wrapper  drag-and-drop-photos active">
                      <legend
                        class="photo_landing_title photo_width_top photo_landing_title_no_extra_spacing">
                        Photo Gallery
                      </legend>
                      <div class="row">
                        <div class="photos-content property-photos_top hidden">
                          <div class="col-md-12">
                            <div
                              class="notification notification__success complete-upload-photo-message">
                              <p>
                                <span
                                  class="minnie-photo-message photo-counter hi-res-photo-counter">
                                Thanks! Now you can continue signing up. Once you're up
                                and running, make sure to add additional photos to
                                increase your chances of getting more bookings.
                                </span>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12 photo-upload">
                            <p class="upload-form-drop-instruction"
                              id="dragdrop-photos-headline">
                              Drag and drop your photos here
                            </p>
                            <div class="upload-form-button">
                              <p class="small">or</p>
                              <a href="{{ url('#') }}" class="add_photos js-upload btn btn-primary">
                                <i class="glyphicon glyphicon-picture"></i>
                                Add photos
                                <div
                                  class="upload-form" data-batch-id="3" data-type="upload"
                                  data-json-action-upload="/json/uploadphotos.json?token=94b71f6f67320aa6efd34e21c86287239e9cb007"
                                  data-json-action-replace="/json/replacephoto.json?token=94b71f6f67320aa6efd34e21c86287239e9cb007">
                                  <span class="file-wrap">
                                  <input id="fileUploadButton" type="file" name="images[]"
                                    accept="image/png,image/jpeg" class="file"
                                    multiple>
                                  </span>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-12 remove-selected-photos-section hidden">
                            <ul class="remove-selected-photos-section_items">
                              <li>
                                <span class="counter"></span>
                              </li>
                              <li>
                                <a class="select-all-photos">
                                Select all
                                </a>
                              </li>
                              <li>
                                <a class="deselect-photos">
                                Deselect all
                                </a>
                              </li>
                              <li>
                                <a class="remove-selected-photos">
                                Delete photos
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="photos-content-empty mb-4" style="display: block;">
                          <div class="col-sm-12 blank-slate-content">
                            <p class="message-empty">
                              Upload at least 1 photo
                              <span class="small">
                              You'll also be able to upload more after registration
                              </span>
                            </p>
                            <p class="upload-form-drop-instruction">
                              Drag and drop your photos here
                            </p>
                            <p class="small">or</p>
                            <a href="{{ url('#') }}" class="add_photos js-upload btn btn-primary">
                              <i class="glyphicon glyphicon-picture"></i>
                              Add photos
                                <span class="file-wrap">
                                <input id="fileUploadButton" type="file" name="images[]" class="file"
                                  multiple="" onchange="photoChange()">
                                </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="row thumbnails-listing row-margin ui-sortable hidden"
                        id="property-photos">
                        <div class="js-photo-edit thumbnail-wrapper multi_photo_remove thumbnail-dragdrop not_hi_res no_tags col-xs-6 col-sm-4 col-lg-4 not-enabled thumbnail-uploading thumbnail-batch-3 has-warnings"
                          style="display: none;">
                          <span class="handle grabbable">
                          <span class="glyphicon glyphicon-move"></span>
                          </span>
                          <span class="handle-checkbox glyphicon glyphicon-ok hidden">
                          <input type="checkbox">
                          </span>
                          <a href="{{ url('') }}"
                            class="thumbnail thumbnail-newstyle grabbable thumbnail-bigger">
                            <div class="placeholder">
                              <img src="{{ asset('/registration/static/images/loader.v2fb300dv.gif') }}"
                                style="opacity: 0.2;">
                              <p>One moment please – we're processing your photo.</p>
                            </div>
                            <img src="{{ asset('/registration/data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7') }}"
                              width="200" height="200" class="image-placeholder"
                              style="opacity: 0.2;">
                            <div class="thumbnail-inner-wrapper">
                              <canvas width="349" height="185"
                                class="thumbnail-preview"></canvas>
                            </div>
                            <div class="caption">
                              <div class="btn-toolbar">
                                <div class="btn-group take-full-width">
                                  <div
                                    class="photo-thumbnail-actions photo-thumbnail-bigger-act">
                                    <div class="js-thumbnail-edit-photo"><i
                                      class="glyphicon glyphicon-pencil photo-icon-bottom"></i>
                                      Edit
                                    </div>
                                    <div class="js-thumbnail-delete-photo"><i
                                      class="glyphicon glyphicon-trash photo-icon-bottom"></i>
                                      Delete
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <p class="error error-dark">
                            <span class="text photo-error-text">This is a duplicate photo. If
                            you're trying to replace the existing photo, just delete the
                            original first.</span>
                            <button class="btn btn-primary dismiss-error dismiss-error-btn">
                            Delete
                            </button>
                          </p>
                          <p class="has-warnings-message">
                            <span class="warnings-message">Your photos will have the greatest
                            impact with guests if they're at least 840x460 pixels.</span>
                            <a href="{{ url('#') }}"
                              class="replace-photo label label-warning js-change-photo"
                              data-replace-photo-id=""><i
                              class="glyphicon glyphicon-upload"></i> Replace photo</a>
                          </p>
                        </div>
                        <div class="js-photo-edit thumbnail-wrapper multi_photo_remove thumbnail-dragdrop             not_hi_res             no_tags              col-xs-6 col-sm-4 col-lg-4                                       thumbnail-batch-4"
                          data-id="" data-src="">
                          <span class="handle grabbable">
                          <span class="glyphicon glyphicon-move"></span>
                          </span>
                          <span class="handle-checkbox glyphicon glyphicon-ok">
                          <input type="checkbox">
                          </span>
                          <a href="/photo.html?token=d282774f5aab6dd982cbdf467b61e24aa42327bd&amp;photo_id=87722895"
                            class="thumbnail thumbnail-newstyle grabbable thumbnail-bigger">
                            <div class="placeholder">
                              <img src="{{ asset('/registration/static/images/loader.v2fb300dv.gif') }}"
                                style="opacity: 1; display: block;">
                              <p>One moment please – we're processing your photo.</p>
                            </div>
                            <img src="https://q-xx.bstatic.com/xdata/images/property/square200/87722895.jpg?k=897d01841b40c784df135d9114670f33434d91a1b73de519b408667d2d093367&amp;o="
                              style="display: block;">
                            <div class="thumbnail-inner-wrapper">
                              <canvas width="350"
                                height="233" class="thumbnail-preview"
                                style="display: none;"></canvas>
                              <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success"
                                  role="progressbar" style="width: 100%;"></div>
                              </div>
                            </div>
                            <div class="caption">
                              <div class="btn-toolbar">
                                <div class="btn-group take-full-width">
                                  <div
                                    class="photo-thumbnail-actions photo-thumbnail-bigger-act">
                                    <div class="js-thumbnail-edit-photo"><i
                                      class="glyphicon glyphicon-pencil photo-icon-bottom"></i>
                                      Edit
                                    </div>
                                    <div class="js-thumbnail-delete-photo"><i
                                      class="glyphicon glyphicon-trash photo-icon-bottom"></i>
                                      Delete
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <p class="error error-dark hidden">
                            <span class="text photo-error-text"></span>
                            <button class="btn btn-primary dismiss-error dismiss-error-btn">
                            Delete
                            </button>
                          </p>
                          <p class="has-warnings-message hidden">
                            <span class="warnings-message">Your photos will have the greatest
                            impact with guests if they're at least 840x460 pixels.</span>
                            <a href="{{ url('#') }}"
                              class="replace-photo label label-warning js-change-photo"
                              data-replace-photo-id=""><i
                              class="glyphicon glyphicon-upload"></i> Replace photo</a>
                          </p>
                          <div class="main-photo-wrapper" style="">
                            <div class="main-photo-element main-photo-label-bigger">Main photo
                            </div>
                          </div>
                        </div>
                        <div class="js-photo-edit thumbnail-wrapper multi_photo_remove thumbnail-dragdrop             not_hi_res             no_tags              col-xs-6 col-sm-4 col-lg-4                                       thumbnail-batch-2"
                          data-id="" data-src="">
                          <span class="handle grabbable">
                          <span class="glyphicon glyphicon-move"></span>
                          </span>
                          <span class="handle-checkbox glyphicon glyphicon-ok">
                          <input type="checkbox">
                          </span>
                          <a href="/photo.html?token=d282774f5aab6dd982cbdf467b61e24aa42327bd&amp;photo_id=87723001"
                            class="thumbnail thumbnail-newstyle grabbable thumbnail-bigger">
                            <div class="placeholder">
                              <img src="{{ asset('/registration/static/images/loader.v2fb300dv.gif') }}"
                                style="opacity: 1; display: block;">
                              <p>One moment please – we're processing your photo.</p>
                            </div>
                            <img src="https://q-xx.bstatic.com/xdata/images/property/square200/87723001.jpg?k=f667d85b36c22a3817912582b99819001a4f338a7cdb32145dd960cf67c313d2&amp;o="
                              style="display: block;">
                            <div class="thumbnail-inner-wrapper">
                              <canvas width="350"
                                height="233" class="thumbnail-preview"
                                style="display: none;"></canvas>
                              <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success"
                                  role="progressbar" style="width: 100%;"></div>
                              </div>
                            </div>
                            <div class="caption">
                              <div class="btn-toolbar">
                                <div class="btn-group take-full-width">
                                  <div
                                    class="photo-thumbnail-actions photo-thumbnail-bigger-act">
                                    <div class="js-thumbnail-edit-photo"><i
                                      class="glyphicon glyphicon-pencil photo-icon-bottom"></i>
                                      Edit
                                    </div>
                                    <div class="js-thumbnail-delete-photo"><i
                                      class="glyphicon glyphicon-trash photo-icon-bottom"></i>
                                      Delete
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <p class="error error-dark hidden">
                            <span class="text photo-error-text"></span>
                            <button class="btn btn-primary dismiss-error dismiss-error-btn">
                            Delete
                            </button>
                          </p>
                          <p class="has-warnings-message hidden">
                            <span class="warnings-message">Your photos will have the greatest
                            impact with guests if they're at least 840x460 pixels.</span>
                            <a href="{{ url('#') }}"
                              class="replace-photo label label-warning js-change-photo"
                              data-replace-photo-id=""><i
                              class="glyphicon glyphicon-upload"></i> Replace photo</a>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="photos-content-tips">
                          <div id="photo-tips"
                            class="col-sm-12 blank_slate_tips photo_landing_page">
                            <h4>
                              No professional photos? No problem.
                            </h4>
                            <ol>
                              <li>
                                <i class="glyphicon glyphicon-chevron-right"></i>
                                You can use:
                                <i class="icon icon-mobilephone"></i>
                                A smartphone
                                <i class="icon icon-camera"></i>
                                A digital camera
                              </li>
                              <li>
                                <i class="glyphicon glyphicon-chevron-right"></i>
                                <span>Tip!
                                <span class="modal-description modal_link_inline"
                                  data-toggle="modal"
                                  data-target="#photo-upload-suggestions">
                                <a href="{{ url('#') }}" id="photos_tips_link"
                                  data-track-ga="click_photos_donts">Guests love
                                photos! Here are some tips to help you take
                                great photos of your property:</a>
                                </span>
                                </span>
                              </li>
                              <li>
                                <i class="glyphicon glyphicon-chevron-right"></i>
                                If you don’t know who took a photo, it's best to avoid using
                                it. Only use photos which you took or own the copyright to,
                                or if it was taken by someone else, make sure you have the
                                photographer’s consent to use the photo.
                              </li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <div class="col-md-3 js-sticky-col" style="">
                  <div class="update-later-message update-later-message--floated js-sticky-update-later-message alignment_header_message"
                    style="">
                    <p style="left: 1025.1px;">
                      After you complete registration you will still be able to make changes to your
                      listing before it goes live.
                    </p>
                  </div>
                </div>
                  <div class="col-md-9 photo_width_bottom">
                    <input type="submit" class="btn btn-primary btn-lg btn-block save_and_proceed"
                      value="Continue">
                  </div>
              </div>
            </div>
          </form>
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