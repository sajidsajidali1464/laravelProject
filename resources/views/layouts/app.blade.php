<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from weblizar.com/demo/html/markito/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jul 2021 19:05:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Ecommerce</title>
      <!--bootstrap.min.css-->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!--animate.css-->
      <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
      <!--fontawesome 5-->
      <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
      <!--slicknav.css-->
      <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
      <!--slickslider.css-->
      <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
      <!-- lity.css -->
      <link rel="stylesheet" href="{{ asset('css/lity.min.css') }}">
      <!-- flaticon.css -->
      <link rel="stylesheet" href="{{ asset('fonts/flaticon.css') }}">
      <!--Fav-icon-->
      <link rel="shortcut icon" href="{{ asset('images/fav-icon.png" type="image/x-icon') }}">
      <!-- Custom.css -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>

     @include('layouts.includes.header')



     @yield('homePage');



     @include('layouts.includes.footer')


    <!-- Jquery.min.js-->
    <script src="{{ asset('js/jquery.1.12.4.js') }}"></script>
    <!--bootstrap.min.js-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--slicknav.min.js-->
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <!--slickslider.min.js-->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- magnific-popup.js -->
    <script src="{{ asset('js/lity.min.js') }}"></script>
    <!-- imagesloaded.js -->
    <script src="{{ asset('js/imagesloaded.js') }}"></script>
    <!-- wow.js -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!--isotope.min.js-->
    <!--  <script src="js/isotope.min.js"></script> -->
    <!-- main.js -->
    <script src="{{ asset('js/main.js') }}"></script>
 </body>
