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
    <x-guest-header/>
    <!-- /Header -->
    <div class="container mt-5">
        <form action="/hotel-verify-otp" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Add verification code</div>
                        <div class="card-body">
                            <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
                            <input type="password" id="verification" class="form-control" name="otp"
                                placeholder="Verification code">
                            <input type="hidden" name="phone" value="{{session('phone')}}">
                            <input type="hidden" name="otpMain" value="{{session('otp')}}">
                            @if (session('msg'))
                                <ul>
                                    <li style="color: red">{{session('msg')}}</li>
                                </ul>
                            @endif
                            <button type="submit" class="btn btn-success mt-3">Verify code</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row" id="profile" style="visibility:hidden">
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

                <!-- Submit button -->
                <button type="submit" style="margin:auto;" class="btn btn-primary btn-block mb-4">Sign in</button>
            </div> --}}
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>

</html>
