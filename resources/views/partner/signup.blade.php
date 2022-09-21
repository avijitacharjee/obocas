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
    <title>Project-Profile</title>

    <!-- ===================== Required Css File Links ===================== -->
    <!-- favicon Icon -->
    <link rel="shortcut icon" href="{{ asset("/partner/assets/images/favicon.png") }}" type="image/png" />
    <!-- fontawesome css (version:-5.15.3) -->
    <link rel="stylesheet" href="{{ asset("/partner/assets/css/all.min.css") }}">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- ===================== Project Css File Links ===================== -->

    <!-- default css -->
    <link rel="stylesheet" href="{{ asset("/partner/assets/css/default.css") }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset("/partner/assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("/partner/assets/webfonts/localfont/local-font-stylesheet.css") }}">

</head>

<body>

    <div class="page-content">

        <div class="header">

            <div class="header-container">
                <div class="width-limiter">
                    <a href="{{ url("partner/index") }}">
                        <img src="{{ asset("/partner/assets/images/logo.png") }}" class="obocas-logo">
                    </a>
                    <ul class="main-menu">
                        <li class="signin">
                            <div class="signin-button singin-popup-btn">
                                <span class="user_icon">
                                    <img src="{{ asset("/partner/assets/images/user.png") }}" alt="">
                                </span>
                                <span class="signin-text">Sign In</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            @include('partner.login-form')

        </div>

        <div class="signup-page">
            <div role="dialog" class="modal" id="signup-msg">
                <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center" role="document">
                        <div class="modal-content"></div>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="heading">
                    <h1>
                        Ready to get started?
                        <br> Start monetizing your traffic today!
                    </h1>
                </div>
                <div class="content">
                    <div class="col-sm-2"></div>
                    <div class="signup-form-wrapper col-sm-12 col-xs-12">
                        <div class="signup-form row">
                            <div class="create-acc-heading-wrapper create-acc row">
                                <h1>Create New Account</h1>
                            </div><br>
                            <form method="POST" action="/partner/signup">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <div class="text-input-field ">
                                                <label for="firstName"> First lastName </label>
                                                <input type="text" name="firstname" id="firstName" class="validated-input" placeholder="First name" required>
                                                <!-- <div id="firstName-error-msg" class="error-message">This is a required field.
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <div class="text-input-field ">
                                                <label for="lastName">Last name</label>
                                                <input type="text" name="lastname" id="lastName" class="validated-input " placeholder="Last name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="text-input-field ">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="validated-input" placeholder="Email">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-input-field ">
                                        <label for="password">Create Password</label>
                                        <input type="password" name="password" id="password" class="validated-input" placeholder="Create Password">
                                    </div>
                                    <div class="text-input-field ">
                                        <label for="passwordConfirm">Re-Enter Password</label>
                                        <input type="password" name="password" id="passwordConfirm" class="validated-input" placeholder="Re-Enter Password">
                                    </div>
                                </div>

                                <div class="agreement-holder">
                                    <input type="checkbox" name="" id="agree">
                                    <span class="agreement-text-holder">
                                        I agree to the terms and conditions in the
                                        <a href="{{ url("#") }}">Affiliate Agreement</a>
                                    </span>
                                </div>
                                <div class="error-message hidden">
                                    Please acknowledge that you understand and consent to our affiliate agreement.
                                </div>
                                <div class="email-subscription">
                                    <input type="checkbox" name="subscription" id="subscription">
                                    <span class="subscription-text-holder">I
                                        would like to receive updates and learn about new features and products
                                        by email. I understand I may unsubscribe at any time.
                                    </span>
                                </div>
                                <div class="submit">
                                    <button id="signup-submit-btn" class="btn btn-primary">Submit</button>
                                </div>
                                <div class="terms-of-use">
                                    <span>By signing up, you accept our
                                        <a class="traffic-tracking" href="{{ url("#") }}">
                                            Terms of Use
                                        </a>
                                        , and
                                        <a class="traffic-tracking" href="{{ url("#") }}">
                                            Privacy &amp; Cookies Statement
                                        </a>.
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>

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