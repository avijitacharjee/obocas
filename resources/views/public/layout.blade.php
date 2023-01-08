<!DOCTYPE html>
<html>
  <head>
    <!--====== Required meta tags =======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=on" />
    <!--====== Title =======-->
    <title>Obocas</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <!-- FrontAwesome -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bui-react.min.css') }}">
    <!-- Project Css-->
    <!-- CloudFront Css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/cloudfront.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/index-cloudfront.css') }}" />
    <!-- Bstatic -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bstatic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/avijit.css') }}">
    @yield('css')

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/admin/assets/img/favicon.png') }}">

  </head>
  <body>
  @include('public.header')
  @yield('content')
  @include('public.footer1')
    <!-- Bootstrap & Jquery -->
  <script src="{{ asset('frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Slick Slider -->
  <script src="{{ asset('frontend/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
  <!-- Search Box -->
  <script src="{{ asset('frontend/assets/js/search.min.js') }}"></script>
  <!-- Custom -->
  <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
  @yield('js')
  <script type="module">
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
  </body>
</html>
