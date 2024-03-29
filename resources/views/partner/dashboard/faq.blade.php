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
            <!-- Faq Page -->
            <div class="page-component-content">
                    <div class="invoice-page">
                        <div class="invoice-table-container white-card">
                            <h3 class="title">Invoice</h3>
                            <div class="content-container ">
                                <div class="datatable-container">
                                    <div id="invoice-table_wrapper" class="dataTables_wrapper no-footer">
                                        <div class="dataTables_scroll">
                                            <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1138px; padding-right: 0px;">
                                                    <table class="display dataTable no-footer" role="grid" style="margin-left: 0px; width: 1138px;">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 326px;">
                                                                    <div>Invoice ID</div>
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 439px;">
                                                                    <div>
                                                                        <span>Invoice Year/Month</span>
                                                                        <div id="invoice-tooltips" class="icon-tool-tip">
                                                                            <button>
                                                                                <i class="fa-solid fa-circle-question"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 326px;">
                                                                    <div></div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                <table id="invoice-table" class="display dataTable no-footer" role="grid" style="width: 1123px;">
                                                    <thead>
                                                        <tr role="row" style="height: 0px;">
                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 326px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                <div class="dataTables_sizing" style="height:0;overflow:hidden;">
                                                                    <div>Invoice ID</div>
                                                                </div>
                                                            </th>
                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 439px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                <div class="dataTables_sizing" style="height:0;overflow:hidden;">
                                                                    <div>
                                                                        <span>Invoice Year/Month</span>
                                                                        <div id="invoice-tooltips" class="icon-tool-tip">
                                                                            <button>
                                                                                <i class="fa-solid fa-circle-question"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 326px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                <div class="dataTables_sizing" style="height:0;overflow:hidden;">
                                                                    <div></div>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td valign="top" colspan="3" class="dataTables_empty">
                                                                No data available in table
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="dataTables_paginate paging_simple_numbers" id="invoice-table_paginate">
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
            <!-- Faq Page -->



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