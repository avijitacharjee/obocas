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
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}" type="image/png" />
    <!-- fontawesome css (version:-5.15.3) -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
    <!-- bootstrap css (version:-5.0.0-beta3) -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">

    <!-- ===================== Project Css File Links ===================== -->
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/webfonts/localfont/local-font-stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/auth/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/auth/common.css')}}">

</head>

<body>

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

        <!-- Login Box -->

        <div class="app">
            <div class="access-container bui_font_body">
                <div class="access-panel-container">
                    <div class="access-panel nw-access-panel">
                        <div class="transition-container">
                            <div class="animate-height">
                                <div class="sliding-panel">
                                    <div class="transition bui-panel-body">

                                        <div class="page-header">
                                            <h1 id="6130f1bc-e99b-4fab-92a7-cc91abc80b08" class="bui_font_display_two bui_font_heading--bold bui-spacer--medium nw-step-header">
                                                Sign in or create an account</h1>
                                            <div class="bui-spacer--largest"></div>
                                        </div>

                                        <!-- LogIn Form -->
                                        <form class="nw-signin" action="/" method="POST">
                                            @csrf
                                            <!-- Form Input -->
                                            <div class="input-wrapper-email bui-spacer--large nw-login-name">
                                                <div class="_2ES5IGr9djTeBP0daYVXt0">
                                                    <label for="username" class="_1dNHizBQeaSwUQ-ZCk14WL _16qew0Y8jvEvovkAvEDWkH _2HhJNoX3XZBftDyOmYII-B">
                                                                Email address</label>
                                                    <div class="_1RdgjndMRdP2d5kWRtTS88">
                                                        <div class="k9_cZSC5ol4qgMp48vdS2">
                                                            <input type="email" name="email" class="_2XLcoGj27PmEfeIS8BIkNh" placeholder="Enter Email" id="username" value="">
                                                            <div class="_25ieFHBK1MpfsprUoKu4MW"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Form Input -->
                                            <div id="recaptcha-container">
                                            <!-- Gmial Login -->
                                            <div class="">
                                                <button id="submitButton" type="submit" class="_2emQHDWTNbBMVHK80Tj0A2 _2V1p8Jqj0mC6lhwPQD7Wm2 _3idbYJ1oAGD-sl-6gdCR2e _1Oxra6oXUcB9EXOfxAD2i2 _2b3nVYidxpTD-0_hVml1lP _2__0gVPBP36LBlyHwThlOQ">
                                                    <span class="_1jp30RWusTBQoML9GSCZ_C">Continue with email</span>
                                                </button>
                                            </div>
                                            <!-- /Gmial Login -->

                                            <!-- Social Authantication -->
                                            <div class="access-panel__social">

                                                <div class="access-panel__social-divider">
                                                    <div class="access-panel__social-divider-line"></div>
                                                    <span class="access-panel__social-divider-text">
                                                                or use one of these options
                                                            </span>
                                                    <div class="access-panel__social-divider-line"></div>
                                                </div>

                                                <div class="access-panel__social-buttons">
                                                    <!-- Log In With Facebook -->
                                                    <a href="#" class="access-panel__social-button access-panel__social-button-facebook bui-button bui-button--secondary nw-social-btn-facebook" title="Sign in with Facebook">
                                                        <div class="access-panel__social-button-content">
                                                            <div class="access-panel__social-button-image">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="img">
                                                                            <path
                                                                                d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.325V1.325C24 .593 23.407 0 22.675 0z">
                                                                            </path>
                                                                        </svg>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!-- /Log In With Facebook -->

                                                    <!-- Log In With Google -->

                                                    <a href="#" class="access-panel__social-button access-panel__social-button-google bui-button bui-button--secondary nw-social-btn-google">
                                                        <div class="access-panel__social-button-content">
                                                            <div class="access-panel__social-button-image">
                                                                <svg viewBox="0 0 262 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" aria-hidden="true" focusable="false" width="24" height="24" role="img">
                                                                            <path
                                                                                d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"
                                                                                fill="#4285F4"></path>
                                                                            <path
                                                                                d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"
                                                                                fill="#34A853"></path>
                                                                            <path
                                                                                d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"
                                                                                fill="#FBBC05"></path>
                                                                            <path
                                                                                d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"
                                                                                fill="#EB4335"></path>
                                                                        </svg>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!-- /Log In With Google -->

                                                    <!-- Log In With Phone -->
                                                    <a class="access-panel__social-button access-panel__social-button-phone bui-button bui-button--secondary nw-social-btn-phone" href="#">
                                                        <div class="access-panel__social-button-content">
                                                            <div class="access-panel__social-button-image">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" width="24" height="24" role="img">
                                                                            <path
                                                                                d="M14.25 15.75v4.768a1.982 1.982 0 0 1-1.982 1.982H5.732a1.982 1.982 0 0 1-1.983-1.981V4.983A1.985 1.985 0 0 1 5.733 3H7.5a.75.75 0 0 0 0-1.5H5.733A3.483 3.483 0 0 0 2.25 4.983v15.536A3.482 3.482 0 0 0 5.733 24h6.535a3.482 3.482 0 0 0 3.482-3.482V15.75a.75.75 0 0 0-1.5 0zM3 19.5h12a.75.75 0 0 0 0-1.5H3a.75.75 0 0 0 0 1.5zM20.25 6.75a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0zm1.5 0a6.75 6.75 0 1 0-13.5 0 6.75 6.75 0 0 0 13.5 0zm-4.676-2.194l-2.9 3.873h-.002l-1.499-1.5a.75.75 0 1 0-1.06 1.061l1.5 1.5a1.502 1.502 0 0 0 2.26-.16l2.901-3.874a.75.75 0 0 0-1.2-.9z">
                                                                            </path>
                                                                        </svg>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <!-- /Log In With Phone -->

                                                </div>
                                            </div>
                                            <!-- /Social Authantication -->
                                            
                                        </form>
                                        <!-- /LogIn Form -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
            <!-- Copy-Right Footer -->
            <div class="account-access__footer">
                <div class="u-text-center bui_font_caption portal_footer">
                    <div class="account_footer_terms footer-block">By signing in or creating an account, you agree with our
                        <a href="#" class="bui_color_action nw-terms">
                                    Terms &amp; Conditions
                                </a> and
                        <a href="#" class="bui_color_action nw-privacy">Privacy Statement</a>
                    </div>
                    <div class="access-footer-bottom bui_font_caption footer-block">
                        <div>All rights reserved. <br>Copyright 2022 – Obocas.com™ </div>
                    </div>
                </div>
            </div>
            <!-- /Copy-Right Footer -->

        </div>
        <!-- /Login Box -->

    </div>
    {{-- <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyBIRf02BZJCrKsiVghRaOMFNtr45UyxssM",
          authDomain: "obocas-42c54.firebaseapp.com",
          projectId: "obocas-42c54",
          storageBucket: "obocas-42c54.appspot.com",
          messagingSenderId: "265687564684",
          appId: "1:265687564684:web:416b6d62d1faca003556a9",
          measurementId: "G-M1L467TRJV"
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
      </script>
    <script type="module">
        import { getAuth, RecaptchaVerifier, signInWithPhoneNumber } from 'https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js';
        const auth = getAuth();
        auth.languageCode = 'it';
        window.recaptchaVerifier = new RecaptchaVerifier('recaptcha-container', {}, auth);
        const recaptchaResponse = grecaptcha.getResponse(recaptchaWidgetId);

        const phoneNumber = '+8801878362896';
        const appVerifier = window.recaptchaVerifier;

        signInWithPhoneNumber(auth, phoneNumber, appVerifier)
            .then((confirmationResult) => {
            // SMS sent. Prompt user to type the code from the message, then sign the
            // user in with confirmationResult.confirm(code).
            window.confirmationResult = confirmationResult;
            // ...
            }).catch((error) => {
            // Error; SMS not sent
            // ...
            });
        console.log(document.getElementById('submitButton'));
    </script> --}}
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
            window.onload = function () {
                render();
            };
            
            function render() {
                window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
                recaptchaVerifier.render();
            }
            
            function sendOTP() {
                var number = $("#number").val();
                firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
                    window.confirmationResult = confirmationResult;
                    coderesult = confirmationResult;
                    console.log(coderesult);
                    $("#successAuth").text("Message sent");
                    $("#successAuth").show();
                }).catch(function (error) {
                    $("#error").text(error.message);
                    $("#error").show();
                });
            }
            
            function verify() {
                var code = $("#verification").val();
                coderesult.confirm(code).then(function (result) {
                    var user = result.user;
                    console.log(user);
                    $("#successOtpAuth").text("Auth is successful");
                    $("#successOtpAuth").show();
                }).catch(function (error) {
                    $("#error").text(error.message);
                    $("#error").show();
                });
            }
        </script>
</body>

</html>