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
    <link rel="shortcut icon" href="{{ asset("/partner/assets/images/favicon.png") }}" type="image/png" />
    <!-- fontawesome css (version:-5.15.3) -->
    <link rel="stylesheet" href="{{ asset("/partner/assets/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/partner/assets/css/index.min.css") }}">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- ===================== Project Css File Links ===================== -->
    <link rel="stylesheet" href="{{ asset("/partner/assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("/partner/assets/webfonts/localfont/local-font-stylesheet.css") }}">

</head>

<body>
    <div class="page-content">
        <div class="header">

            <div class="header-container">
                <div class="width-limiter">
                    <a href="{{ url("index.html") }}">
                        <img src="{{ asset("/partner/assets/images/logo.png") }}" class="obocas-logo">
                    </a>
                    <ul class="main-menu">
                        <li class="signin">
                            <div type="button" class="signin-button singin-popup-btn">
                                <span class="user_icon">
                                    <!-- <i class="fa-solid fa-user"></i> -->
                                    <img src="{{ asset("/partner/assets/images/user.png") }}" alt="">
                                </span>
                                <span class="signin-text">Sign In</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Signin Modal -->
            <div class="signin-modal-container d-none singin-popup">
                <div class="basic-modal-container">
                    <div class="basic-modal-wrapper">
                        <div class="basic-modal-popup-container">
                            <div class="basic-modal-popup">
                                <div class="signin-section">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Sign In</h3>
                                        <i class="ficon ficon-16 ficon-x-icon"></i>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <dl class="form-group">
                                                <dt>
                                                    <label for="signin-email-input">Email</label>
                                                </dt>
                                                <dd class="email-input-container">
                                                    <input type="text" class="form-control iconable-textinput">
                                                </dd>
                                            </dl>
                                            <dl class="form-group">
                                                <dt>
                                                    <label for="signin-password-input">Password</label>
                                                </dt>
                                                <dd class="password-input-container">
                                                    <input type="password" class="form-control iconable-textinput "
                                                        id="signin-password-input">
                                                </dd>
                                                <div class="g-recapcha-c-align">
                                                    <div class="g-recaptcha" id="ReCAPTCHA" data-sitekey=""
                                                        clientid="0">
                                                        <div style="width: 304px; height: 78px;">

                                                            <div>
                                                                <iframe title="reCAPTCHA"
                                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdNADUUAAAAANGH0HMtLvII1ckb7lw9awXQ7U1m&amp;co=aHR0cHM6Ly9wYXJ0bmVycy5hZ29kYS5jb206NDQz&amp;hl=en&amp;v=85AXn53af-oJBEtL2o2WpAjZ&amp;size=normal&amp;cb=bic5etgcc360"
                                                                    width="304" height="78" role="presentation"
                                                                    frameborder="0" scrolling="no"></iframe>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="keep-signin">
                                                    <input type="checkbox" checked> Keep me signed in
                                                </div>
                                                <div class="text-right forgot-password">
                                                    <div class="forgotpassword-link">
                                                        <a href="{{ url("#") }}">Forgot your password? Click here</a>
                                                    </div>
                                                </div>
                                            </dl>
                                            <div class="form-group text-center signin-button-container">
                                                <button type="submit" id="signin-submit-btn"
                                                    class="btn btn-primary">Sign In</button>
                                                <div class="terms-of-use">
                                                    <span>By logging in, you accept our
                                                        <a class="traffic-tracking" href="{{ url("#") }}">Terms of Use</a>, and
                                                        <a class="traffic-tracking" href="{{ url("#") }}">Privacy &amp; Cookies
                                                            Statement
                                                        </a>.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <ul>
                                                    <li>No account yet?</li>
                                                    <li>
                                                        <a class="btn btn-primary create-account-button"
                                                            href="{{ url("singup.html") }}">Sign up</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="presentation-section">
                                    <img src="{{ asset("/partner/assets/images/illustration-city-affiliate.png") }}">
                                    <div class="presentation-section-text">
                                        <h3>Become an affiliate</h3>
                                        <p>We're growing fast, and so can your earnings. <br> Join our affiliate program
                                            today.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="singin-popup-close">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Signin Modal -->

        </div>

        <!-- Main Page -->
        <div class="landing-page">
            <div>
                <div class="header-section-container">
                    <div class="row width-limiter">
                        <div class="col col-md-6 static-section">
                            <div class="animated-section">
                                <h1>Each
                                    <span class="span-out cost">
                                        <span> $200</span>
                                    </span> booking
                                </h1>
                                <h1>at a commission rate of
                                    <span class="span-out perc">
                                        <span>5%</span>
                                    </span>
                                </h1>
                                <h1>earns you
                                    <span class="span-out com">
                                        <span>$10</span>
                                    </span>
                                    in commissions
                                </h1>
                            </div>
                            <div class="signup-button-container">
                                <a href="{{ url("singup.html") }}">
                                    <button class="signup-button traffic-tracking">Sign up</button>
                                </a>
                            </div>
                        </div>
                        <div class="col col-md-6 calculator-section">
                            <div class="commission-calculator">
                                <div class="calculator-header">
                                    <h2>Show me the money!</h2>
                                    <p>Plug in your expected monthly completed bookings, and an average booking value
                                        and we'll calculate your total monthly earnings!</p>
                                    <div class="calculator-icon">
                                        <img src="{{ asset("/partner/assets/images/calculator_icon.png") }}">
                                    </div>
                                </div>
                                <div class="calculator-content">
                                    <div class="calculator-wrapper">
                                        <div class="input-group">
                                            <input type="text" id="calculator-bookings" class="form-control"
                                                placeholder="No. of completed bookings">
                                            <span class="input-group-addon" id="no-departures">
                                                <i class="fa-solid fa-users"></i>
                                            </span>
                                            <span class="error-message">
                                                <i class="ficon ficon-close-popup"></i>
                                                Please input a number
                                            </span>
                                        </div>
                                        <div class="input-group">
                                            <input type="text" id="calculator-booking-value" class="form-control"
                                                placeholder="Average booking value">
                                            <span class="input-group-addon" id="no-departures">
                                                <i class="fa-solid fa-money-check-dollar"></i>
                                            </span>
                                            <span class="error-message">
                                                <i class="ficon ficon-close-popup"></i>
                                                Please input a number</span>
                                        </div>

                                       

                                        <div class="input-group dropdown">
                                            <input type="text" id="calculator-tier" class="form-control tier-dropdown"
                                                placeholder="Tier" aria-describedby="tier" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" value="Commission tier"
                                                readonly="">
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a>Tier 1: 4% Commission (&lt; 50
                                                        bookings)</a></li>
                                                <li><a>Tier 2: 4.5% Commission (50-99 bookings)</a></li>
                                                <li><a>Tier 3: 5% Commission (100-199 bookings)</a></li>
                                                <li><a>Tier 4: 6% Commission (200-999 bookings)</a></li>
                                                <li><a>Tier 5: 7% Commission (&gt; 999 bookings)</a></li>
                                            </ul>
                                            <span class="input-group-addon" id="no-departures">
                                                <i class="fa-solid fa-gifts"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="calculator-result">
                                        <div class="commission-icon">$</div>
                                        <div class="commission-value">Commission</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="white-bg"></div>
            </div>


            <div class="information-section-container">
                <div class="information-section-title">
                    <h1>Become an affiliate partner and start monetizing your traffic today!</h1>
                    <div class="information-section row" id="tab_buttons">

                        <div class="col col-md-4 info-container" id="button_one">
                            <img src="{{ asset("/partner/assets/images/illustration-city-affiliate.png") }}">
                            <h3>Become an affiliate</h3>
                        </div>
                        <div class="col col-md-4 info-container" id="button_tow">
                            <img src="{{ asset("/partner/assets/images/illustration-tools.png") }}">
                            <h3>Install our free tools</h3>
                        </div>
                        <div class="col col-md-4 info-container" id="button_three">
                            <img src="{{ asset("/partner/assets/images/illustration-earnmore.png") }}">
                            <h3>Earn more per booking</h3>
                        </div>
                    </div>

                    <!-- Arrow Style -->
                    <div class="row" id="tab_arrows">
                        <div class="col col-md-4">
                            <div class="arrow-container">
                                <div class="arrow arrow_show" id="arrow_one"></div>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="arrow-container">
                                <div class="arrow" id="arrow_tow"></div>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="arrow-container">
                                <div class="arrow" id="arrow_three"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /Arrow Style -->

                </div>
                <div class="information-section-content">
                    <div class="width-limiter" id="tabs">


                        <!-- First -->
                        <div class="row become-an-affiliate tab show_tab" id="tab_one">
                            <div class="col col-md-5 info-text">
                                <h3>Become an affiliate</h3>
                                <p>Agoda's generous commission rates get even better with more bookings. The more
                                    completed (checked-out) bookings you have each month, the higher the percentage of
                                    those bookings you get paid for that month.</p>
                            </div>
                            <div class="col col-md-7 info-graphic">
                                <div class="card-container">
                                    <div class="card-mock row card-one">
                                        <div class="col col-md-2 content-col-1-mock">
                                            <div class="icon-mock"></div>
                                        </div>
                                        <div class="col col-md-3 content-col-2-mock">
                                            <p class="first-row-mock"></p>
                                            <p class="second-row-mock"></p>
                                        </div>
                                        <div class="col col-md-7 content-col-3-mock">
                                            <p class="first-row-mock"></p>
                                            <p class="second-row-mock"></p>
                                        </div>
                                    </div>
                                    <div class="card-mock row card-two">
                                        <div class="col col-md-2 content-col-1-mock">
                                            <div class="icon-mock"></div>
                                        </div>
                                        <div class="col col-md-3 content-col-2-mock">
                                            <p class="first-row-mock"></p>
                                            <p class="second-row-mock"></p>
                                        </div>
                                        <div class="col col-md-7 content-col-3-mock">
                                            <p class="first-row-mock"></p>
                                            <p class="second-row-mock"></p>
                                        </div>
                                    </div>
                                    <div class="card-main row">
                                        <div class="col col-md-2">
                                            <i class="ficon ficon-right-tick green-tick green-tick-small"></i>
                                        </div>
                                        <div class="col col-md-3">
                                            <p class="first-row">
                                                $ 1,771.25
                                            </p>
                                            <p class="second-row">1 day ago</p>
                                        </div>
                                        <div class="col col-md-7">
                                            <p class="first-row">Shangri-La Hotel, Bangkok</p>
                                            <p class="second-row">25% Commission pay-out</p>
                                        </div>
                                    </div>
                                    <div class="card-mock row card-three">
                                        <div class="col col-md-2 content-col-1-mock">
                                            <div class="icon-mock"></div>
                                        </div>
                                        <div class="col col-md-3 content-col-2-mock">
                                            <p class="first-row-mock"></p>
                                            <p class="second-row-mock"></p>
                                        </div>
                                        <div class="col col-md-7 content-col-3-mock">
                                            <p class="first-row-mock"></p>
                                            <p class="second-row-mock"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /First -->


                        <!-- Second -->
                        <div class="row install-our-tools tab" id="tab_tow">
                            <div class="col col-md-5 info-text">
                                <h3>Install our free tools</h3>
                                <p>Once you've finished the quick sign up, start earning commission by adding these
                                    great marketing tools from Agoda to your sites. They're totally free, and they've
                                    been proven to increase traffic.</p>
                            </div>
                            <div class="col col-md-7 info-graphic">
                                <div class="tools-container">
                                    <div class="tools-row">
                                        <div class="tool-box">
                                            <h4 class="tool-header">Hotel Data File</h4>
                                            <i class="tool-icon fa-regular fa-chart-bar"></i>
                                            <p class="tool-description">
                                                Design the experience ideal for your users
                                            </p>
                                        </div>
                                        <div class="tool-box">
                                            <h4 class="tool-header">Text Links</h4>
                                            <i class="tool-icon fa-solid fa-link"></i>
                                            <p class="tool-description">
                                                Place deep links right inside your content.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tools-row">
                                        <div class="tool-box">
                                            <h4 class="tool-header">Search Box</h4>
                                            <i class="tool-icon fa-solid fa-magnifying-glass"></i>
                                            <p class="tool-description">
                                                Let Users search properties within your site.
                                            </p>
                                        </div>
                                        <div class="tool-box">
                                            <h4 class="tool-header">Banners</h4>
                                            <i class="tool-icon fa-regular fa-bookmark"></i>
                                            <p class="tool-description">
                                                Build beautiful image banners that look great on your site.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Second -->

                        <!-- Thrd -->
                        <div class="row earn-more-booking tab" id="tab_three">
                            <div class="col col-md-5 info-text">
                                <h3>Earn more per booking</h3>
                                <span>
                                    <p>The more bookings you have, the higher your commission tier! </p>
                                    <p>The calculator above can give you an idea of how much monthly commission you can
                                        make</p>
                                    <p>Enter the number of completed bookings (checked out) you expect to make every
                                        month.</p>
                                    <p>Then input an average booking value, and the calculator will add up your monthly
                                        commission based on your tier</p>
                                    <p>The more completed bookings, the higher the tier!</p>
                                </span>
                            </div>
                            <div class="col col-md-7 info-graphic">
                                <div class="table-container">
                                    <div class="table-header">
                                        <div class="row">
                                            <div class="col col-md-3">Commission Rate</div>
                                            <div class="col col-md-9">Bookings</div>
                                        </div>
                                    </div>
                                    <div class="table-content">
                                        <div class="row">
                                            <div class="col col-md-3 commission-percent">
                                                <div>4%</div>
                                            </div>
                                            <div class="col col-md-9 commission-range text-left">Less than 50 bookings
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-3 commission-percent">
                                                <div>4.5%</div>
                                            </div>
                                            <div class="col col-md-9 commission-range text-left">Between 50 and 99
                                                bookings
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-3 commission-percent">
                                                <div>5%</div>
                                            </div>
                                            <div class="col col-md-9 commission-range text-left">Between 100 and 199
                                                bookings
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-3 commission-percent">
                                                <div>6%</div>
                                            </div>
                                            <div class="col col-md-9 commission-range text-left">Between 200 and 999
                                                bookings
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-3 commission-percent">
                                                <div>7%</div>
                                            </div>
                                            <div class="col col-md-9 commission-range text-left">More than 999 bookings
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Thrd -->


                    </div>
                </div>
            </div>


            <div class="static-section-container">
                <div class="static-information-container">
                    <div class="row static-row">
                        <div class="col col-md-6 description">
                            <div class="small-icon">
                                <img src="{{ asset("/partner/assets/images/integration.svg") }}">
                            </div>
                            <h3>Easy integration</h3>
                            <p>Not a techie? No problem!<br>Our promotional tools are easy to setup and you'll be up and
                                running in minutes.</p>
                        </div>
                        <div class="col col-md-6">
                            <img src="{{ asset("/partner/assets/images/nha-bags.png") }}">
                        </div>
                    </div>
                    <div class="row static-row">
                        <div class="col col-md-6">
                            <img src="{{ asset("/partner/assets/images/illustration-globe.png") }}">
                        </div>
                        <div class="col col-md-6 description">
                            <div class="small-icon">
                                <img src="{{ asset("/partner/assets/images/multilingual.svg") }}"></div>
                            <h3>Seriously multilingual</h3>
                            <p>Agoda's web, app, and promos come in 38 languages so you can speak directly to your
                                audiences.
                            </p>
                        </div>
                    </div>
                    <div class="row static-row">
                        <div class="col col-md-6 description">
                            <div class="small-icon ">
                                <img class="totalsupport-icon" src="{{ asset("/partner/assets/images/totalsupport.svg") }}">
                            </div>
                            <h3>Total support</h3>
                            <p>Our team is ready to help you get started as an affiliate, answer questions, and be your
                                backup throughout the process.</p>
                        </div>
                        <div class="col col-md-6">
                            <img src="{{ asset("/partner/assets/images/illustration-new-message.png") }}">
                        </div>
                    </div>
                    <div class="row static-row">
                        <div class="col col-md-6">
                            <img src="{{ asset("/partner/assets/images/illustration-map.png") }}">
                        </div>
                        <div class="col col-md-6 description">
                            <div class="small-icon">
                                <img src="{{ asset("/partner/assets/images/data.svg") }}">
                            </div>
                            <h3>Data at your finger tips</h3>
                            <p>Track your performance, earnings, and more on your dashboard with free, detailed
                                reporting.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="static-signup-footer">
                    <h2>Ready to get started?</h2>
                    <p>Start monetizing your traffic today!</p>
                    <a href="{{ url("singup.html") }}">
                        <button class="signup-button traffic-tracking">Sign up</button>
                    </a>
                </div>
                <footer class="static-footer">
                    <div class="row footer">
                        <div class="col col-md-8">
                            <h4>
                                Copyright © 2022 <a href="{{ url("index.html") }}">Obocos</a> Company Ltd. All Rights Reserved
                            </h4>
                        </div>
                        <div class="col col-md-2"></div>
                        <div class="col col-md-2">
                            <h4>RESOURCES</h4>
                            <ul>
                                <li>
                                    <a href="{{ url("faq.html") }}">FAQ</a>
                                </li>
                                <li>
                                    <a href="{{ url("#") }}">Terms of Use
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url("#") }}">Privacy
                                        &amp; Cookies Statement
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url("contact-us.html") }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
        <!-- react-empty: 367 -->
    </div>



    <!-- ===================== Required Css File Links ===================== -->
    <!-- jquery js  -->
    <script src="{{ asset("/partner/assets/js/jquery-1.12.4.min.js") }}"></script>
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset("/partner/assets/js/script.js") }}"></script>

</body>


</html>