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
                            <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <!-- /Header -->

    <div class="row" id="profile" style="margin: 5%">
        <form action="/complete-profile" method="POST">
            @csrf
            <h3 style="width: 100%; text-align:center">Complete your profile</h3>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Full name</label>
                <input name="name" type="text" id="form2Example1" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Email</label>
                <input name="email" type="email" id="form2Example2" class="form-control" />
            </div>
            <input type="hidden" name="phone" value="{{$phone}}">
            <!-- Submit button -->
            <button type="submit" style="margin:auto;" class="btn btn-primary btn-block mb-4">Sign in</button>
        </form>
        <!-- Register buttons -->
        {{-- <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
        <p>or sign up with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
        </button>
        </div> --}}
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
            // window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
            // recaptchaVerifier.render();
        }

        // function sendOTP() {
        //     var number = $("#number").val();
        //     firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        //         window.confirmationResult = confirmationResult;
        //         coderesult = confirmationResult;
        //         console.log(coderesult);
        //         $("#successAuth").text("Message sent");
        //         $("#successAuth").show();
        //     }).catch(function(error) {
        //         $("#error").text(error.message);
        //         $("#error").show();
        //     });
        // }

        // function verify() {
        //     var code = $("#verification").val();
        //     coderesult.confirm(code).then(function(result) {
        //         var user = result.user;
        //         console.log(user);
        //         if(user.displayName=='' || user.displayName==null){
        //             document.getElementById('profile').style.visibility = 'visible';
        //         }
        //         // user.updateProfile({
        //         //     displayName: 'Avijit Acharjee',
        //         // }).then(function(response){console.log('updated');}).catch(function(error){console.log(error);});
        //         $("#successOtpAuth").text("Auth is successful. Redirecting....");
        //         $("#successOtpAuth").show();
        //         setTimeout(() => {
        //             //window.location.replace('/');
        //         }, 1000);
        //     }).catch(function(error) {
        //         $("#error").text(error.message);
        //         $("#error").show();
        //     });
        // }
        function sendOTP() {
            var number = $("#number").val();
            $.get("http://localhost:8000/api/check-user-by-phone?phone=" + number, function(data, status) {
                if (data.success) {
                    console.log(data.user);
                } else {
                    document.getElementById('profile').style.visibility = 'visible';
                }
            });
        }
    </script>
    </body>

</html>
