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
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


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
            <!-- Tools -->
            <div class="page-component-content tools">
                <div class="tools-page-content">
                    <div class="items-container">
                        <div class="items">
                            <div class="tool-item-container">
                                <a class="destination-container traffic-tracking" href="{{ url("#") }}">
                                    <div class="tool-item-content">
                                        <div class="main-content">
                                            <div class="tool-item-title">Text Links</div>
                                            <div class="icon-container">
                                                <i class="ficon ficon ficon-text-links"></i>
                                            </div>
                                            <div class="tool-item-description">Place deep links right inside your
                                                content.
                                            </div>
                                        </div>
                                        <div class="tool-item-extra">
                                            <div class="percentage-container">
                                                <span>
                                                    <span class="percentage">
                                                        71
                                                    </span> % of our top partners implemented this tool
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="tool-item-container ">
                                <a class="destination-container traffic-tracking" href="{{ url("#") }}">
                                    <div class="tool-item-content">
                                        <div class="main-content">
                                            <div class="tool-item-title">Image Link</div>
                                            <div class="icon-container">
                                                <i class="ficon ficon ficon-map-attraction"></i>
                                            </div>
                                            <div class="tool-item-description">
                                                Get our special hotel/city images and link them instantly
                                            </div>
                                        </div>
                                        <div class="tool-item-extra">
                                            <div class="percentage-container">
                                                <span>NEW !!</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="tool-item-container ">
                                <a href="{{ url("#") }}" class="destination-container traffic-tracking">
                                    <div class="tool-item-content">
                                        <div class="main-content">
                                            <div class="tool-item-title">Search Box</div>
                                            <div class="icon-container">
                                                <i class="ficon ficon ficon-search-box"></i>
                                            </div>
                                            <div class="tool-item-description">Let Users search properties within your
                                                site.</div>
                                        </div>
                                        <div class="tool-item-extra">
                                            <div class="percentage-container">
                                                <span>
                                                    <span class="percentage">
                                                        69
                                                    </span>% of our top partners implemented this tool
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="tool-item-container">
                                <a href="{{ url("#") }}" class="destination-container traffic-tracking">
                                    <div class="tool-item-content">
                                        <div class="main-content">
                                            <div class="tool-item-title">Banners</div>
                                            <div class="icon-container">
                                                <i class="ficon ficon ficon-dynamic-banner"></i>
                                            </div>
                                            <div class="tool-item-description">Build beautiful image banners that look
                                                great on your site.</div>
                                        </div>
                                        <div class="tool-item-extra">
                                            <div class="percentage-container">
                                                <span>
                                                    <span class="percentage">66
                                                    </span>% of our top partners implemented this tool
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="items stats">
                            <div class="tools-button-link">
                                <a class="button-link-url traffic-tracking" href="{{ url("#") }}">
                                    <div class="percentage-container">
                                        <span>
                                            <span class="percentage">71

                                            </span>% of our top partners implemented this tool
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="tools-button-link">
                                <a class="button-link-url traffic-tracking" href="{{ url("#") }}">
                                    <div class="percentage-container">
                                        <span>NEW !!</span>
                                    </div>
                                </a>
                            </div>
                            <div class="tools-button-link">
                                <a class="button-link-url traffic-tracking" href="{{ url("#") }}">
                                    <div class="percentage-container">
                                        <span>
                                            <span class="percentage">69
                                            </span>% of our top partners implemented this tool
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="tools-button-link">
                                <a class="button-link-url traffic-tracking" href="{{ url("#") }}">
                                    <div class="percentage-container">
                                        <span>
                                            <span class="percentage">
                                                66
                                            </span>% of our top partners implemented this tool
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row-spacing"></div>
                        <div class="items">
                            <div class="tool-item-container ">
                                <a target="" class="destination-container traffic-tracking"
                                    data-trackingelement="HotelDataBannerMenu" data-trackingpage="Tools" id="hotel-data"
                                    href="{{ url("/Tools/HotelData") }}">
                                    <div class="tool-item-content">
                                        <div class="main-content">
                                            <div class="tool-item-title">Hotel Data File</div>
                                            <div class="icon-container"><i class="ficon ficon ficon-hotel-data"></i>
                                            </div>
                                            <div class="tool-item-description">Design the experience ideal for your
                                                users
                                            </div>
                                        </div>
                                        <div class="tool-item-extra">
                                            <div class="percentage-container"><span><span class="percentage">56</span>%
                                                    of our top partners implemented this tool</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="items stats">
                            <div class="tools-button-link  ">
                                <a class="button-link-url traffic-tracking" data-trackingelement="HotelDataBannerMenu"
                                    data-trackingpage="Tools" target="" href="{{ url("/Tools/HotelData") }}">
                                    <div class="percentage-container"><span><span class="percentage">56</span>% of our
                                            top partners implemented this tool</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row-spacing"></div>
                    </div>
                </div>
            </div>
            <!-- /Tools -->

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
                            Copyright © 2022 <a href="{{ url("index.html") }}">Obocos</a> Company Ltd. All Rights Reserved
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset("/partner-dashboard/assets/js/script.js") }}"></script>

</body>

</html>