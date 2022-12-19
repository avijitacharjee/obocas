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
    <link rel="shortcut icon" href="{{ asset("/partner-dashboard/assets/images/favicon.png") }}" type="image/png" />
    <!-- fontawesome css (version:-5.15.3) -->
    <link rel="stylesheet" href="{{ asset("/partner-dashboard/assets/css/all.min.css") }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset("/partner-dashboard/assets/plugins/morris/morris.css") }}">

    <!-- Plugin -->
    <link rel="stylesheet" href="{{ asset("/partner-dashboard/assets/css/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("/partner-dashboard/assets/css/slick-theme.css") }}">
    <!-- ===================== Project Css File Links ===================== -->
    <link rel="stylesheet" href="{{ asset("/partner-dashboard/assets/css/default.css") }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset("/partner-dashboard/assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("/partner-dashboard/assets/webfonts/localfont/local-font-stylesheet.css") }}">

</head>


<body onload="loading()">
    <div id="loaging"></div>
    <div id="page-container">
        <div class="page-component post-login">

            @include('partner.dashboard.header')

            <!-- Dashboard -->
            <div class="page-component-content dashboard">
                <div class="dashboard">
                    <div class="content-container">
                        <div>
                            <div class="">
                                <div class="items-container">

                                    <div class="items">
                                        <div class="tool-item-container ">
                                            <a class="destination-container traffic-tracking" id="text-links" href="{{ url("#") }}">
                                                <div class="tool-item-content">
                                                    <div class="main-content">
                                                        <div class="tool-item-title">Text Links</div>
                                                        <div class="icon-container" onclick="copyText()">
                                                            <i class="ficon fa-solid fa-link"></i>
                                                        </div>
                                                        <div class="tool-item-description">Place deep links right inside
                                                            your content. </div>
                                                    </div>
                                                    <div class="tool-item-extra">
                                                        <div class="percentage-container">
                                                            <span>
                                                                <span class="percentage">71</span> % of our top partners
                                                                implemented this tool
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <script>
                                            function copyText() {
                                                /* Copy text into clipboard */
                                                navigator.clipboard.writeText
                                                    (`${window.location.origin}/signin?coupon={{auth()->user()->partner->firstname}}`);
                                                alert('Link has been copied to your clipboard');
                                            }
                                        </script>
                                        <div class="tool-item-container ">
                                            <a target="" class="destination-container traffic-tracking" id="image-links"
                                                href="{{ url("#") }}">
                                                <div class="tool-item-content">
                                                    <div class="main-content">
                                                        <div class="tool-item-title">Image Link</div>
                                                        <div class="icon-container">
                                                            <i class="ficon fa-solid fa-camera"></i>
                                                        </div>
                                                        <div class="tool-item-description">Get our special hotel/city
                                                            images and link them instantly</div>
                                                    </div>
                                                    <div class="tool-item-extra">
                                                        <div class="percentage-container">
                                                            <span>NEW !!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="items stats">

                                        <div class="tools-button-link  ">
                                            <a class="button-link-url traffic-tracking" href="{{ url("#") }}">
                                                <div class="percentage-container">
                                                    <span>
                                                        <span class="percentage">71</span>% of our top partners
                                                        implemented this tool
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tools-button-link  ">
                                            <a class="button-link-url traffic-tracking" href="{{ url("#") }}">
                                                <div class="percentage-container">
                                                    <span>NEW !!</span>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="row-spacing"></div>

                                </div>
                            </div>

                        </div>


                        <div class="profile-stats profile-container pc-row">
                            <div class="md-col-6 item-md-left info-container">
                                <div class="tier-root-container">
                                    <div class="tier-root white-card">
                                        <h3 class="title text-center">Commission Tier</h3>
                                        <div class="tier-container">
                                            <div class="pc-row tier-row">
                                                <div class="sm-col-6 tier-graph-container">
                                                    <div class="tier-graph">
                                                        <div class="graph-wrapper"><iframe class="chartjs-hidden-iframe"
                                                                tabindex="-1"
                                                                style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                            <div class="tier-level">
                                                                <div class="booking-level-wrapper">
                                                                    <div class="booking-level">
                                                                        <span class="current-booking">0</span> /0
                                                                        <br>Bookings
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm-col-6 tier-status-container">
                                                    <div class="tier-status-wrapper">
                                                        <div class="current-tier-section">
                                                            <p class="tier-status-title">Your Status:</p>
                                                            <h4 class="current-tier">Tier 0</h4>
                                                            <p class="booking-commission current">
                                                                0 Bookings
                                                                <i class="fa-solid fa-caret-right"></i> 0% commission
                                                            </p>
                                                        </div>
                                                        <div class="next-tier-section">
                                                            <p class="next-tier">Next tier:</p>
                                                            <p class="booking-commission">
                                                                1 Bookings
                                                                <i class="fa-solid fa-caret-right"></i> 0% commission
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="learn-more learn-more-content">
                                            <div tabindex="0" class="learn-more-text">
                                                <i class="fa-solid fa-circle-exclamation"></i>L earn More
                                            </div>
                                            <div class="baloon-tooltip top learn-more-tooltip fade"><span>The more
                                                    bookings you bring, the more commission we pay you!
                                                    <br>
                                                    Each time you reach a higher tier within a month, all of the
                                                    bookings for that month get paid at the higher commission
                                                    rate.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="light-blue-card tier-information-root">
                                        <div class="tier-information">Another 0 departed bookings gets you to tier 0.
                                            <br> When you get there, you'll earn an extra ~0 USD for your existing
                                            bookings, and 0% commission on additional bookings.<br> Go for it!
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="half-container progress-status-container">
                                        <div class="partner-status-bar">
                                            <div class="space-taker">
                                                <span class="progress-title">
                                                    Your Profile
                                                    &nbsp; - &nbsp;
                                                </span>
                                                <span>{{$percentage}}% Complete</span>
                                            </div>
                                            <div class="status-bar status-bar-expand">
                                                <ul>
                                                    <ul>
                                                        <li id="confirm-email" class="active">
                                                            <div class="archive-container">
                                                                <div class="archive card-inner-title">
                                                                    <span class="">✓</span>
                                                                </div>
                                                            </div>
                                                            <div class="line"></div>
                                                            <div class="detail">Confirm Email</div>
                                                        </li>
                                                        <li id="implement-tool" @class(['active' => isset($partner->tool_implemented_at)])>
                                                            <div class="archive-container">
                                                                <div class="archive card-inner-title">
                                                                    <span >✓</span>
                                                                </div>
                                                            </div>
                                                            <div class="line"></div>
                                                            <div class="detail">Implement a tool</div>
                                                        </li>
                                                        <li id="profile-info" @class(['active' => isset($partner->profile_completed_at)])>
                                                            <div class="archive-container">
                                                                <div class="archive card-inner-title">
                                                                    <span class="">✓</span>
                                                                </div>
                                                            </div>
                                                            <div class="line"></div>
                                                            <div class="detail">Complete Profile Information</div>
                                                        </li>
                                                        <li id="gen-visit" @class(['active' => isset($partner->visitor_generator_at)])>
                                                            <div class="archive-container">
                                                                <div class="archive card-inner-title">
                                                                    <span class="hide">✓</span>
                                                                </div>
                                                            </div>
                                                            <div class="line"></div>
                                                            <div class="detail">Generate a Visitor</div>
                                                        </li>
                                                        <li id="gen-book" @class(['active' => isset($partner->booking_generated_at)])>
                                                            <div class="archive-container">
                                                                <div class="archive card-inner-title">
                                                                    <span class="hide">✓</span>
                                                                </div>
                                                            </div>
                                                            <div class="line"></div>
                                                            <div class="detail">Generate a Booking</div>
                                                        </li>
                                                        <li id="update-pay" @class(['active' => isset($partner->payment_info_updated_at)])>
                                                            <div class="archive-container">
                                                                <div class="archive card-inner-title">
                                                                    <span class="hide">✓</span>
                                                                </div>
                                                            </div>
                                                            <div class="line"></div>
                                                            <div class="detail">Update Payment Info</div>
                                                        </li>
                                                    </ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="md-col-6 item-md-right white-card info-container">
                                <div>
                                    <div class="stats-container">
                                        <div class="pc-row">
                                            <h3 class="title text-center">Your Statistics</h3>
                                        </div>
                                        <div class="statistics_sliders">
                                            <div class="single_slider">

                                                <div class="">
                                                    <div class="row slider-nav">
                                                        <div class="">
                                                            <p>Yesterday</p>
                                                        </div>
                                                        <div class="">
                                                            <p>Bookings vs Unique visitors</p>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="pc-row ">
                                                        <div class="col-12">
                                                            <p>Yesterday</p>
                                                        </div>
                                                        <div class="col-12">
                                                            <p>Yesterday</p>
                                                        </div>
                                                    </div> -->

                                                </div>


                                                <div class="row slider-for">

                                                    <div class="stat-layout">

                                                        <div class="sm-col-6">
                                                            <div class="stat-item">
                                                                <div class="stat-result"><b>10%</b></div>
                                                                <div class="stat-sub-item stat-bar">
                                                                    <div class="bar-progress">
                                                                        <div class="bar-percentage blue"
                                                                            style="width: 10%;"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="stat-sub-item stat-text">
                                                                    <span>Conversion Rate</span>
                                                                    <div class="stat-diff-percent-content blue-text">
                                                                        <i class="fa-solid fa-sort-up"></i>
                                                                        <span class="stat-diff-percentage">+0%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="sm-col-6">
                                                            <div class="stat-item">
                                                                <div class="stat-result">
                                                                    <b>20</b>
                                                                </div>
                                                                <div class="stat-sub-item stat-bar">
                                                                    <div class="bar-progress">
                                                                        <div class="bar-percentage blue"
                                                                            style="width: 20%;"> </div>
                                                                    </div>
                                                                </div>
                                                                <div class="stat-sub-item stat-text">
                                                                    <span>Departed Bookings</span>
                                                                    <div class="stat-diff-percent-content blue-text">
                                                                        <i class="fa-solid fa-sort-up"></i>
                                                                        <span
                                                                            class="stat-diff-percentage">+0(+0%)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="stat-layout">
                                                        <div class="sm-col-6">
                                                            <div class="slider-subtitle">
                                                                <p>Yesterday</p>
                                                                <div class="stat-item">
                                                                    <div class="stat-booking">
                                                                        <div class="number"><b>0</b></div>
                                                                        <div class="title">Bookings</div>
                                                                    </div>
                                                                    <div class="stat-fraction-line"></div>
                                                                    <div class="stat-uniquevisitors">
                                                                        <div class="number"><b>0</b></div>
                                                                        <div class="title">Unique visitors</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sm-col-6">
                                                            <div class="slider-subtitle">
                                                                <p>Month-to-Date</p>
                                                                <div class="stat-item">
                                                                    <div class="stat-booking">
                                                                        <div class="number"><b>0</b></div>
                                                                        <div class="title">Bookings</div>
                                                                    </div>
                                                                    <div class="stat-fraction-line"></div>
                                                                    <div class="stat-uniquevisitors">
                                                                        <div class="number"><b>0</b></div>
                                                                        <div class="title">Unique visitors</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>

                                        <div class="pc-row">
                                            <p class="stat-title">Month-to-Date</p>
                                        </div>
                                        <div class="pc-row">
                                            <div class="sm-col-4">
                                                <div class="stat-item">
                                                    <div class="stat-result"><b>10%</b></div>
                                                    <div class="stat-sub-item stat-bar">
                                                        <div class="bar-progress">
                                                            <div class="bar-percentage blue" style="width: 10%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stat-sub-item stat-text"><span>Conversion
                                                            Rate</span>
                                                        <div class="stat-diff-percent-content blue-text">
                                                            <i class="fa-solid fa-sort-up"></i>
                                                            <span class="stat-diff-percentage">+10%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm-col-4">
                                                <div class="stat-item">
                                                    <div class="stat-result"><b>30</b></div>
                                                    <div class="stat-sub-item stat-bar">
                                                        <div class="bar-progress">
                                                            <div class="bar-percentage blue" style="width: 30%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stat-sub-item stat-text"><span>Departed
                                                            Bookings</span>
                                                        <div class="stat-diff-percent-content blue-text">
                                                            <i class="fa-solid fa-sort-up"></i>
                                                            <span class="stat-diff-percentage">+0(+0%)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm-col-4">
                                                <div class="stat-item">
                                                    <div class="stat-result">
                                                        <b>40</b>
                                                    </div>
                                                    <div class="stat-sub-item stat-bar">
                                                        <div class="bar-progress">
                                                            <div class="bar-percentage blue" style="width: 40%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stat-sub-item stat-text">
                                                        <span>Commissions Earned</span>
                                                        <div class="stat-diff-percent-content blue-text">
                                                            <i class="fa-solid fa-sort-up"></i>
                                                            <span class="stat-diff-percentage">+0(+0%)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pc-row">
                                            <div class="sm-col-8"></div>
                                            <div class="sm-col-4">
                                                <p class="special-note">*based on departure date</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc-row">
                            <div class="graph-container">
                                <div class="white-card">
                                    <div class="controller-container">
                                        <h3 class="title text-left">Earnings Summary</h3>
                                        <div class="graph-controller">
                                            <ul class="radio-text-wrapper style-1">
                                                <li>
                                                    <label class="option option-selected one-month" for="one-month">
                                                        <input type="radio" name="period" class="" id="one-month"
                                                            value="1">
                                                        1 month
                                                    </label>
                                                    <label class="option three-month" for="three-month">
                                                        <input type="radio" name="period" class="" id="three-month">
                                                        3 months
                                                    </label>
                                                    <label class="option six-month" for="six-month">
                                                        <input type="radio" name="period" class="" id="six-month">
                                                        6 months
                                                    </label>
                                                    <label class="option one-year" for="one-year">
                                                        <input type="radio" name="period" class="" id="one-year">
                                                        1 year
                                                    </label>
                                                </li>
                                            </ul>
                                            <div>
                                                <div class="dropdown-list-container">
                                                    <span class="dropdown-select">All CIDs selected</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="graph-component booking-graph-wrapper">
                                            <div class="graph-header">
                                                <h4 class="graph-title">Bookings &amp; Unique Visitors</h4>
                                                <div class="dropdown-button dropdown">
                                                    <button class="btn btn-info dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Export

                                                    </button>
                                                    <ul class="dropdown-menu file_type"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li class="dropdown-item">Excel</li>
                                                        <li class="dropdown-item">CSV</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="graph-wrapper">
                                                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                                    style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                <div id="morrisArea">
                                                    <table></table>
                                                </div>
                                            </div>
                                            <div class="graph-footer">
                                                <div class="legend-container">
                                                    <div class="graph-legend" style="background: rgb(72, 139, 248);">
                                                        Bookings
                                                    </div>
                                                    <div class="graph-legend" style="background: rgb(247, 107, 28);">
                                                        Unique visitors
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="graph-component commission-graph-wrapper">
                                            <div class="graph-header">
                                                <h4 class="graph-title">Commissions (in USD)</h4>
                                                <div class="dropdown-button dropdown">
                                                    <button class="btn btn-info dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Export

                                                    </button>
                                                    <ul class="dropdown-menu file_type"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li class="dropdown-item">Excel</li>
                                                        <li class="dropdown-item">CSV</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="graph-wrapper">
                                                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                                    style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                <div id="morrisLine">
                                                    <table></table>
                                                </div>
                                            </div>
                                            <div class="graph-footer">
                                                <div class="legend-container">
                                                    <div class="graph-legend" style="background: rgb(45, 213, 175);">
                                                        Finalized Commission
                                                    </div>
                                                    <div class="graph-legend" style="background: rgb(121, 238, 212);">
                                                        Estimated Commission
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /Dashboard -->


            <!-- Page Footer -->
            <div class="page-component-footer">
                <div class="main-footer">
                    <div class="footer-links pc-row">
                        <div class="footer-item">
                            <h4>
                                <a class="footer-light-text footer-menu-dashboard DashboardMenu" href="{{ url("#") }}">Dashboard</a>
                            </h4>
                        </div>
                        <div class="footer-item">
                            <h4>
                                <a class="footer-light-text footer-menu-tools ToolsMenu" href="{{ url("#") }}">Tools</a>
                            </h4>
                            <ul>
                                <li>
                                    <a class="footer-light-text footer-menu-text-links TextLinkMenu" href="{{ url("#") }}">Text
                                        Links</a>
                                </li>
                                <li>
                                    <a class="footer-light-text footer-menu-image-links ImageLinkMenu" href="{{ url("#") }}">Image
                                        Link</a>
                                </li>

                            </ul>
                        </div>
                        <div class="footer-item">
                            <h4>
                                <a class="footer-light-text footer-menu-profiles personalDetailMenu"
                                    href="{{ url("#") }}">Profile</a>
                            </h4>
                            <ul>
                                <li>
                                    <a class="footer-light-text footer-menu-profiles personalDetailMenu" href="{{ url("#") }}">
                                        Personal Details
                                    </a>
                                </li>
                                <li>
                                    <a class="footer-light-text footer-menu-addsites addSiteMenu" href="{{ url("#") }}">
                                        Manage Your Sites
                                    </a>
                                </li>
                                <li>
                                    <a class="footer-light-text footer-menu-bank-info bankInfoMenu" href="{{ url("#") }}">
                                        Bank Information
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-item">
                            <h4>
                                <a class="footer-light-text footer-menu-reporting ReportingMenu" href="{{ url("#") }}">Reporting</a>
                            </h4>
                            <ul>
                                <li>
                                    <a class="footer-light-text footer-menu-reporting BookingReportMenu"
                                        href="{{ url("#") }}">Reporting</a>
                                </li>
                                <li>
                                    <a class="footer-light-text footer-menu-invoice InvoiceMenu" href="{{ url("#") }}">Invoice</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-item">
                            <h4>
                                <a class="footer-light-text footer-menu-faq faqMenu" href="{{ url("#") }}">FAQ</a>
                            </h4>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <h6 class="copyright-text footer-light-text">
                            Copyright © 2022 <a href="{{ url("index") }}">Obocos</a> Company Ltd. All Rights Reserved
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

    <script src="{{ asset("/partner-dashboard/assets/js/jquery-1.12.4.min.js") }}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <script src="{{ asset("/partner-dashboard/assets/plugins/morris/morris.min.js") }}"></script>
    <script src="{{ asset("/partner-dashboard/assets/plugins/morris/raphael.min.js") }}"></script>
    <script src="{{ asset("/partner-dashboard/assets/plugins/morris/chart.morris.js") }}"></script>


    <script src="{{ asset("/partner-dashboard/assets/js/jquery-migrate-1.2.1.min.js") }}"></script>
    <script src="{{ asset("/partner-dashboard/assets/js/slick.min.js") }}"></script>

    <script src="{{ asset("/partner-dashboard/assets/js/script.js") }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                dots: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                arrows: false,
                // centerMode: true,
                focusOnSelect: true
            });
        });
    </script>


</body>

</html>
