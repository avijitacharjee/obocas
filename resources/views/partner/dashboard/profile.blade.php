<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags =======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=on" />
    <meta name="keywords">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!--====== Title =======-->
    <title>Obocas</title>

    <!-- ===================== Required Css File Links ===================== -->
    <!-- favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('/partner-dashboard/assets/images/favicon.png') }}" type="image/png" />
    <!-- fontawesome css (version:-5.15.3) -->
    <link rel="stylesheet" href="{{ asset('/partner-dashboard/assets/css/all.min.css') }}">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- ===================== Project Css File Links ===================== -->
    <link rel="stylesheet" href="{{ asset('/partner-dashboard/assets/css/default.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('/partner-dashboard/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/partner-dashboard/assets/webfonts/localfont/local-font-stylesheet.css') }}">

</head>

<body onload="loading()">
    <div id="loaging"></div>
    <div id="page-container" style="position: relative">
        <div>
            <div class="page-component post-login">
                @include('partner.dashboard.header')
                <div class="page-component-content profile">
                    <form action="/partner/profile" method="POST">
                        @csrf
                        <!-- Profile -->
                        <div class="profile-content-container profile_page_tab">
                            <div class="pc-row">
                                <div class="sm-col-3 profile-cols-wrapper">
                                    <div id="make-booking" class="profile-card-container white-card ">
                                        <h4 class="title">Make Your Bookings Here</h4>
                                        <div class="profile-card-content">
                                            <img class="make-booking-photo"
                                                src="{{ asset('/partner-dashboard/assets/images/illustration-city-affiliate.png') }}">
                                            <p class="make-booking-content">
                                                Any bookings you make after clicking the link below is guaranteed to
                                                track back to your main CID, and commission will be earned.
                                            </p>
                                            <div class="profile-button-wrapper">
                                                <a class="button button-blue" href="{{ url('#') }}">Make
                                                    My Booking
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="partner-badge" class="profile-card-container white-card ">
                                        <h4 class="title">Get Verified Agoda Badge</h4>
                                        <div class="profile-card-content">
                                            <div class="badge-content">
                                                <p class="badge-text">This badge will become available as soon as your
                                                    account is approved. <br> Please check back soon.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm-col-9 profile-cols-wrapper">
                                    <div class="profile-personal-details-form">

                                        <div role="dialog" class="modal" id="profile-info-modal">
                                            <div class="vertical-alignment-helper">
                                                <div class="modal-dialog vertical-align-center" role="document">
                                                    <div class="modal-content"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-section personal-details">
                                            <div class="white-card ">
                                                <h3 class="title">
                                                    <span class="heading">Personal Details</span>
                                                    <span class="required-note">
                                                        <span class="text-danger">*</span> Required
                                                    </span>
                                                </h3>
                                                <div class="content-container">
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-6">
                                                            <div class="text-input-field ">
                                                                <label for="Firstname">
                                                                    First name (English Characters Only)
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" name="firstname" id="Firstname"
                                                                    class="validated-input "
                                                                    value="{{ $partner->firstname }}">
                                                            </div>
                                                        </div>
                                                        <div class="sm-col-6">
                                                            <div class="text-input-field second">
                                                                <label for="Lastname">Last name (English Characters
                                                                    Only)
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" name="lastname" id="Lastname"
                                                                    class="validated-input "
                                                                    value="{{ $partner->lastname }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-6">
                                                            <div>
                                                                <p class="date-of-birth__label">
                                                                    Date of Birth<span class="text-danger">*</span>
                                                                </p>

                                                                <div class="SingleDatePicker SingleDatePicker_1">
                                                                    <div>
                                                                        <div
                                                                            class="SingleDatePickerInput SingleDatePickerInput_1">
                                                                            <div class="DateInput DateInput_1">
                                                                                <input name="dob" type="date"
                                                                                    class="DateInput_input DateInput_input_1"
                                                                                    id="personal-details-date-of-birth"
                                                                                    name="personal-details-date-of-birth-error-box"
                                                                                    value="{{ $partner->dob }}"
                                                                                    placeholder="Date">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-6">
                                                            <div class="text-input-field ">
                                                                <label for="ContactNumber">
                                                                    Contact Number
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" name="phone"
                                                                    class="validated-input"
                                                                    value="{{ $partner->phone }}">
                                                            </div>
                                                        </div>
                                                        <div class="sm-col-6">
                                                            <div class="text-input-field second">
                                                                <label for="CompanyName">Company Name</label>
                                                                <input type="text" id="CompanyName"
                                                                    class="validated-input" name="company_name"
                                                                    value="{{ $partner->company_name }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="resend-verify-email success">
                                                        <div class="check-mark">✓</div>
                                                        <div class="result">Your email is verified</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-section contact-details">
                                            <div class="white-card ">
                                                <h3 id="top" class="title">
                                                    Contact Details
                                                    <span class="title-note">
                                                        Note: this information is required by financial institutions for
                                                        payments
                                                    </span>
                                                </h3>
                                                <div class="content-container">
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-6">
                                                            <div id=""
                                                                class="select-input-field addresstype-container">
                                                                <label>
                                                                    Address Type
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <div
                                                                    class="Select selector-box-wrapper Select--single is-searchable">
                                                                    <select class="Select-control" name="address_type"
                                                                        id="">
                                                                        <option value="present">Present</option>
                                                                        <option value="permanent">Permanent</option>
                                                                        <option value="both">Both</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-12">
                                                            <div class="text-input-field ">
                                                                <label for="Address1">
                                                                    Address (line1) (English Characters Only)
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" id="Address1" name="address1"
                                                                    class="validated-input"
                                                                    value="{{ auth()->user()->address?->address1 }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-12">
                                                            <div class="text-input-field ">
                                                                <label for="Address2">
                                                                    Address (line 2 - optional) (English Characters
                                                                    Only)
                                                                </label>
                                                                <input type="text" id="Address2" name="address2"
                                                                    class="validated-input "
                                                                    value="{{ auth()->user()->address?->address2 }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-6">
                                                            <div id=""
                                                                class="select-input-field country-container">
                                                                <label>
                                                                    Country
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <div
                                                                    class="Select selector-box-wrapper Select--single is-searchable has-value">
                                                                    <select class="Select-control" name="country"
                                                                        id="">
                                                                        <option selected>--Select Country--</option>
                                                                        @foreach ($countries as $country)
                                                                            <option @selected($country == auth()->user()->address?->country)
                                                                                value="{{ $country }}">
                                                                                {{ $country }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sm-col-6">
                                                            <div class="text-input-field second">
                                                                <label for="Province">Province/State/Territory</label>
                                                                <input type="text" id="Province"
                                                                    class="validated-input" name="state"
                                                                    value="{{ auth()->user()->address?->state }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="pc-row input-row">
                                                    <div class="sm-col-6">
                                                        <div data-validation="0" id=""
                                                            class="text-input-field second">
                                                            <label>
                                                                City
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="validated-input"
                                                                name="city"
                                                                value="{{ auth()->user()->address?->city }}">
                                                        </div>
                                                    </div>
                                                    <div class="sm-col-6">
                                                        <div class="text-input-field second">
                                                            <label for="PostalCode">Zip/Postal Code </label>
                                                            <input type="text" id="PostalCode"
                                                                class="validated-input" name="zip"
                                                                value="{{ auth()->user()->address?->zip }}">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="profile-section addinfo-details">
                                            <div class="white-card ">
                                                <h3 class="title">Complete additional information</h3>
                                                <div class="content-container">
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-6">
                                                            <div id=""
                                                                class="select-input-field preflang-container">
                                                                <label>Preferred communication language</label>
                                                                <div
                                                                    class="Select selector-box-wrapper Select--single is-searchable">
                                                                    <select class="Select-control" name="language"
                                                                        id="">
                                                                        <option value="Bangla">Bangla</option>
                                                                        <option value="Hindi">Hindi</option>
                                                                        <option value="English">English</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-12">
                                                            <div class="get-email-holder">
                                                                <input type="hidden" name="is_subscriber"
                                                                    value="0">
                                                                <input type="checkbox" name="is_subscriber"
                                                                    id="get-email" @checked(auth()->user()->partner->is_subscriber)
                                                                    value="1">
                                                                <div class="">
                                                                    <span>Do you want to receive a list of new bookings
                                                                        by
                                                                        daily email?</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-12">
                                                            <button type="submit" id="submit-btn"
                                                                class="button button-blue">Save</button>
                                                            <a class="button button-blue invert">Discard</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-section contact-details">
                                            <div class="white-card ">
                                                <h3 id="top" class="title">
                                                    Change password
                                                    <span class="title-note">
                                                        Note:
                                                    </span>
                                                </h3>
                                                <div class="content-container">

                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-12">
                                                            <div class="text-input-field ">
                                                                <label for="Address1">
                                                                    Current Password
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <input type="password" id="Address1"
                                                                    name="current_password" class="validated-input"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-12">
                                                            <div class="text-input-field ">
                                                                <label for="Address1">
                                                                    New Password
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <input type="password" id="password"
                                                                    name="current_password" class="validated-input"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-12">
                                                            <div class="text-input-field ">
                                                                <label for="Address1">
                                                                    Retype new Password
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <input type="password" id="confirm"
                                                                    name="current_password" class="validated-input"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pc-row input-row">
                                                        <div class="sm-col-12">
                                                            <button type="submit" id="submitPass" name="submitPass"
                                                                value="1"
                                                                class="button button-blue">Save</button>
                                                            <a class="button button-blue invert">Discard</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Profile -->


                    </form>
                </div>

                <!-- Page Footer -->
                <div class="page-component-footer">
                    <div class="main-footer">
                        <div class="footer-links pc-row">
                            <div class="footer-item">
                                <h4>
                                    <a class="footer-light-text footer-menu-dashboard DashboardMenu"
                                        href="{{ url('#') }}">Dashboard</a>
                                </h4>
                            </div>
                            <div class="footer-item">
                                <h4>
                                    <a class="footer-light-text footer-menu-tools ToolsMenu"
                                        href="{{ url('#') }}">Tools</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a class="footer-light-text footer-menu-text-links TextLinkMenu"
                                            href="{{ url('#') }}">Text
                                            Links</a>
                                    </li>
                                    <li>
                                        <a class="footer-light-text footer-menu-image-links ImageLinkMenu"
                                            href="{{ url('#') }}">Image
                                            Link</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="footer-item">
                                <h4>
                                    <a class="footer-light-text footer-menu-profiles personalDetailMenu"
                                        href="{{ url('#') }}">Profile</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a class="footer-light-text footer-menu-profiles personalDetailMenu"
                                            href="{{ url('#') }}">
                                            Personal Details
                                        </a>
                                    </li>
                                    <li>
                                        <a class="footer-light-text footer-menu-addsites addSiteMenu"
                                            href="{{ url('#') }}">
                                            Manage Your Sites
                                        </a>
                                    </li>
                                    <li>
                                        <a class="footer-light-text footer-menu-bank-info bankInfoMenu"
                                            href="{{ url('#') }}">
                                            Bank Information
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-item">
                                <h4>
                                    <a class="footer-light-text footer-menu-reporting ReportingMenu"
                                        href="{{ url('#') }}">Reporting</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a class="footer-light-text footer-menu-reporting BookingReportMenu"
                                            href="{{ url('#') }}">Reporting</a>
                                    </li>
                                    <li>
                                        <a class="footer-light-text footer-menu-invoice InvoiceMenu"
                                            href="{{ url('#') }}">Invoice</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-item">
                                <h4>
                                    <a class="footer-light-text footer-menu-faq faqMenu"
                                        href="{{ url('#') }}">FAQ</a>
                                </h4>
                            </div>
                        </div>
                        <div class="footer-copyright">
                            <h6 class="copyright-text footer-light-text">
                                Copyright © 2022 <a href="{{ url('index.html') }}">Obocos</a> Company Ltd. All Rights
                                Reserved
                            </h6>
                        </div>
                    </div>
                </div>

                <!-- Help Button -->
                <div class="help-btn-container">
                    <button class="button button-blue generate-button active help-btn">
                        <i class="fa-solid fa-circle-question"></i>
                        <span class="help-text">Help</span>
                    </button>
                </div>
                <!-- /Help Button -->

            </div>
        </div>
    </div>

    <script src="{{ asset('/partner-dashboard/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/partner-dashboard/assets/js/script.js') }}"></script>

    <script>
        $('#submitPass').onclick(function(e) {
            e.preventDefault();
            const password = document.querySelector('input[name=password]');
            const confirm = document.querySelector('input[name=confirm]');
            if (confirm.value === password.value) {
                confirm.setCustomValidity('');
                return true;
            } else {
                confirm.setCustomValidity('Passwords do not match');
            }
        });
    </script>
</body>

</html>
