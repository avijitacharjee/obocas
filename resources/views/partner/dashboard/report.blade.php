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

    <!-- Plugin -->
    <link rel="stylesheet" href="{{ asset('/partner-dashboard/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/partner-dashboard/assets/css/slick-theme.css') }}">

    <!-- ===================== Project Css File Links ===================== -->
    <link rel="stylesheet" href="{{ asset('/partner-dashboard/assets/css/default.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('/partner-dashboard/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/partner-dashboard/assets/webfonts/localfont/local-font-stylesheet.css') }}">

</head>

<body onload="loading()">
    <div id="loaging"></div>
    <div id="page-container">
        <div class="page-component post-login">
            @include('partner.dashboard.header')
            <!-- Reporting -->
            <div class="page-component-content">
                <div class="reporting-page report_page_tab">
                    <div>

                        <div id="mobile-stat-slider" class="slider-container">

                            <div class="your-class">

                                <div class="slider-stat-container">
                                    <div class="stat-duo-container white-card">
                                        <div class="simple-stat-container">
                                            <div class="color blue"></div>
                                            <div class="text-header">Accumulated Carry-forward</div>
                                            <div class="text-content">
                                                <div class="text-value">$0</div>
                                            </div>
                                            <div class="icon-tool-tip">
                                                <button>
                                                    <i class="fa-solid fa-circle-question"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-stat-container">
                                    <div class="stat-duo-container white-card">
                                        <div class="simple-stat-container">
                                            <div class="color blue"></div>
                                            <div class="text-header">Payment Threshold</div>
                                            <div class="text-content">
                                                <div class="text-value">$0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-stat-container">
                                    <div class="stat-duo-container white-card">
                                        <div class="simple-stat-container">
                                            <div class="color red"></div>
                                            <div class="text-header">Bookings This Month</div>
                                            <div class="text-content">
                                                <div class="text-value">{{$bookingsThisMonth}}</div>
                                                <div class="text-unit">Bookings</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-stat-container">
                                    <div class="stat-duo-container white-card">
                                        <div class="simple-stat-container">
                                            <div class="color purple"></div>
                                            <div class="text-header">Bookings today</div>
                                            <div class="text-content">
                                                <div class="text-value">{{$bookingsToday}}</div>
                                                <div class="text-unit">Bookings</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-stat-container">
                                    <div class="stat-duo-container white-card">
                                        <div class="simple-stat-container">
                                            <div class="color purple"></div>
                                            <div class="text-header">Checking out this month</div>
                                            <div class="text-content">
                                                <div class="text-value">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-stat-container">
                                    <div class="stat-duo-container white-card">
                                        <div class="simple-stat-container">
                                            <div class="color purple"></div>
                                            <div class="text-header">Checking out next month</div>
                                            <div class="text-content">
                                                <div class="text-value">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-stat-container">
                                    <div class="stat-duo-container white-card">
                                        <div class="simple-stat-container">
                                            <div class="color blue"></div>
                                            <div class="text-header">Accumulated Carry-forward</div>
                                            <div class="text-content">
                                                <div class="text-value">$0</div>
                                            </div>
                                            <div class="icon-tool-tip">
                                                <button>
                                                    <i class="fa-solid fa-circle-question"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-stat-container">
                                    <div class="stat-duo-container white-card">
                                        <div class="simple-stat-container">
                                            <div class="color blue"></div>
                                            <div class="text-header">Payment Threshold</div>
                                            <div class="text-content">
                                                <div class="text-value">$0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-stat-container">
                                    <div class="stat-duo-container white-card">
                                        <div class="simple-stat-container">
                                            <div class="color red"></div>
                                            <div class="text-header">Bookings This Month</div>
                                            <div class="text-content">
                                                <div class="text-value">{{$bookingsThisMonth}}</div>
                                                <div class="text-unit">Bookings</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-stat-container">
                                    <div class="stat-duo-container white-card">
                                        <div class="simple-stat-container">
                                            <div class="color purple"></div>
                                            <div class="text-header">Bookings Today</div>
                                            <div class="text-content">
                                                <div class="text-value">{{$bookingsToday}}</div>
                                                <div class="text-unit">Bookings</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="desktop-headline">
                            <div class="headline-container">
                                <div id="month-to-date" class="white-card single-statistic-container headline-items">
                                    <div class="color red"></div>
                                    <div class="text-container">
                                        <div class="text-value">
                                            <div class="text-header">Bookings This Month</div>
                                            <div class="text-content">
                                                <div class="text-number">{{$bookingsThisMonth}}</div>
                                                <div class="text-unit">Bookings</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="total-pending-departure"
                                    class="white-card single-statistic-container headline-items">
                                    <div class="color purple"></div>
                                    <div class="text-container">
                                        <div class="text-value">
                                            <div class="text-header">Bookings Today</div>
                                            <div class="text-content">
                                                <div class="text-number">{{$bookingsToday}}</div>
                                                <div class="text-unit">Bookings</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="departing-stat"
                                    class="twincontent-statistic-container white-card headline-items">
                                    <div class="color purple"></div>
                                    <div class="text-container">
                                        <div class="text-value">
                                            <div class="first">
                                                <div class="text-number">0</div>
                                                <div class="right-text-content">
                                                    <div class="text-header">Checking out this month</div>
                                                </div>
                                            </div>
                                            <div class="second">
                                                <div class="text-number">0</div>
                                                <div class="right-text-content">
                                                    <div class="text-header">Checking out next month</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="carry-fwd-threshold"
                                    class="twincontent-statistic-container white-card headline-items">
                                    <div class="color blue"></div>
                                    <div class="text-container">
                                        <div class="text-value">
                                            <div class="first">
                                                <div class="text-number">$0</div>
                                                <div class="right-text-content">
                                                    <div class="text-header">Accumulated Carry-forward</div>
                                                </div>
                                            </div>
                                            <div class="second">
                                                <div class="text-number">$0</div>
                                                <div class="right-text-content">
                                                    <div class="text-header">Payment Threshold</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-tool-tip">
                                            <button>
                                                <i class="fa-solid fa-circle-question"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="booking-report-summary">
                        <div class="reporting-date-range-form white-card">
                            <h3 class="title">Booking Report</h3>
                            <div class="content-container">
                                {{-- <div class="buttons-wrapper">
                                    <h4 class="title sub-title-dark">Date Type</h4>

                                    <button id="1"
                                        class="button button-border button-border-blue booking">Booking
                                        Date</button>
                                    <button id="2" class="button button-border departure">Departure
                                        Date</button>
                                    <button id="3" class="button last button-border payment">Payment
                                        Date</button>

                                </div> --}}
                            <form action="" method="GET">
                                <div class="date-picker-wrapper">
                                    <div class="DateRangePicker DateRangePicker_1">
                                        <div>
                                            <div
                                                class="DateRangePickerInput DateRangePickerInput_1 DateRangePickerInput__withBorder DateRangePickerInput__withBorder_2">
                                                <div class="DateInput DateInput_1">
                                                    <input type="date" class="DateInput_input DateInput_input_1"
                                                        id="startDate" name="from_date" value="03/14/2022"
                                                        placeholder="From:">
                                                </div>
                                                <div class="DateRangePickerInput_arrow DateRangePickerInput_arrow_1"
                                                    aria-hidden="true" role="presentation">
                                                    <i class="fa-solid fa-arrow-right-long"></i>
                                                </div>
                                                <div class="DateInput DateInput_1">
                                                    <input type="date" class="DateInput_input DateInput_input_1"
                                                        id="endDate" name="to_date" value="03/14/2022"
                                                        placeholder="To:">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="button button-blue generate-button active traffic-tracking">Generate</button>
                                {{-- <div class="dep-booking-note">
                                    Only departed bookings are eligible for commission payments
                                </div> --}}
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="invoice-page report_page_tab">
                    <div class="invoice-table-container white-card">
                        <h3 class="title">Invoice</h3>
                        <div class="content-container ">
                            <div class="datatable-container">
                                <div id="invoice-table_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="dataTables_scroll">
                                        <div class="dataTables_scrollHead"
                                            style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                            <div class="dataTables_scrollHeadInner"
                                                style="box-sizing: content-box; width: 1138px; padding-right: 0px;">
                                                <table class="display dataTable no-footer" role="grid"
                                                    style="margin-left: 0px; width: 1138px;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 326px;">
                                                                <div>Name</div>
                                                            </th>
                                                            <th class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 439px;">
                                                                <div>
                                                                    <span>Year/Month</span>
                                                                    <div id="invoice-tooltips" class="icon-tool-tip">
                                                                        <button>
                                                                            <i class="fa-solid fa-circle-question"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            {{-- <th class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 326px;">
                                                                <div>Phone</div>
                                                            </th> --}}
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="dataTables_scrollBody"
                                            style="position: relative; overflow: auto; width: 100%;">
                                            <table id="invoice-table" class="display dataTable no-footer"
                                                role="grid" style="width: 1123px;">
                                                <thead>
                                                    <tr role="row" style="height: 0px;">
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 326px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                            <div class="dataTables_sizing"
                                                                style="height:0;overflow:hidden;">
                                                                <div>Name</div>
                                                            </div>
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 439px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                            <div class="dataTables_sizing"
                                                                style="height:0;overflow:hidden;">
                                                                <div>
                                                                    <span>Year/Month</span>
                                                                    <div id="invoice-tooltips" class="icon-tool-tip">
                                                                        <button>
                                                                            <i class="fa-solid fa-circle-question"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                            <div class="dataTables_sizing">
                                                                <div>
                                                                    Payment
                                                                </div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($bookings as $booking)
                                                        <tr>
                                                           <td>
                                                            {{$booking->firstname}} {{$booking->lastname}}
                                                            </td>
                                                            <td>
                                                                {{date('jS M, Y',strtotime($booking->created_at))}}
                                                            </td>
                                                            {{-- <td>
                                                                {{$booking->phone}}
                                                            </td> --}}
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="invoice-table_paginate">
                                        <a class="paginate_button previous disabled" id="invoice-table_previous">
                                            <i class="fa-solid fa-caret-left"></i>
                                        </a>
                                        <a class="paginate_button next disabled" id="invoice-table_next">
                                            <i class="fa-solid fa-caret-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Reporting -->


            <!-- Invoice Page -->

            <!-- Invoice Page -->



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

    <script src="{{ asset('/partner-dashboard/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="{{ asset('/partner-dashboard/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('/partner-dashboard/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('/partner-dashboard/assets/js/script.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.your-class').slick({
                slidesToShow: 2,
                arrows: true,
                responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                }, ],
            });
        });
    </script>

</body>

</html>
