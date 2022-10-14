<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags =======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=on" />
    <meta name="referrer" content="origin-when-cross-origin">

    <!--====== Title =======-->
    <title>Obocas SingIn</title>

    <!-- ===================== Required Css File Links ===================== -->
    <!-- favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}" type="image/png" />
    <!-- fontawesome css (version:-5.15.3) -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <!-- bootstrap css (version:-5.0.0-beta3) -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- ===================== Project Css File Links ===================== -->
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/webfonts/localfont/local-font-stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/auth/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/auth/common.css') }}">

</head>
<div id="root" class="bui-u-text-left bui_font_body">
    <!-- Header -->
    <div class="guest-header">
        <header class="_37rfPfc52EXATe8n6xoWgd">
            <nav class="_2HVwqciw9DfOQFLWl2-a_I">
                <div class="_1pRpeQP2z_3ktRb8Urjtv6">
                    <div class="daGIlH2FHgTbq-rtCh3t">
                        <a href="#">
                            <img src="{{asset('frontend/assets/images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <!-- /Header -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Add Phone Number</div>
                    <div class="card-body">
                        <div class="alert alert-danger" id="error" style="display: none;"></div>
                        <div class="alert alert-success" id="successAuth" style="display: none;"></div>
                        <form>
                            <input type="text" id="number" class="form-control" placeholder="+62 ********">
                            <div id="recaptcha-container" class="mt-2"></div>
                            <button type="button" class="btn btn-primary mt-3" onclick="sendOTP();">Send OTP</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Add verification code</div>
                    <div class="card-body">
                        <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
                        <form>
                            <input type="text" id="verification" class="form-control"
                                placeholder="Verification code">
                            <button type="button" class="btn btn-success mt-3" onclick="verify()">Verify code</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyBIRf02BZJCrKsiVghRaOMFNtr45UyxssM",
            authDomain: "obocas-42c54.firebaseapp.com",
            projectId: "obocas-42c54",
            storageBucket: "obocas-42c54.appspot.com",
            messagingSenderId: "265687564684",
            appId: "1:265687564684:web:416b6d62d1faca003556a9",
            measurementId: "G-M1L467TRJV"
        };
        firebase.initializeApp(firebaseConfig);
    </script>
    <script type="text/javascript">
        window.onload = function() {
            render();
        };

        function render() {
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }

        function sendOTP() {
            var number = $("#number").val();
            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
                window.confirmationResult = confirmationResult;
                coderesult = confirmationResult;
                console.log(coderesult);
                $("#successAuth").text("Message sent");
                $("#successAuth").show();
            }).catch(function(error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }

        function verify() {
            var code = $("#verification").val();
            coderesult.confirm(code).then(function(result) {
                var user = result.user;
                console.log(user);
                $("#successOtpAuth").text("Auth is successful. Redirecting....");
                $("#successOtpAuth").show();
                setTimeout(() => {
                    window.location.replace('/');
                }, 1000);
            }).catch(function(error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }
    </script>
    </body>

</html>
