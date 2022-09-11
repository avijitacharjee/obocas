<!DOCTYPE html>
<html>
  <head>
    <!--====== Required meta tags =======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=on" />
    <!--====== Title =======-->
    <title>Booking Index</title>
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
  </head>
  <body">
  @include('public.header')
  @yield('content')
  @include('public.footer')
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
  </body>
</html>