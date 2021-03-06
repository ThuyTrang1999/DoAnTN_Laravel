<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/client/images/4.png')}}">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/material-design-iconic-font.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/font-awesome.min.css') }}">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="{{ asset('assets/client/css/fontawesome-stars.css') }}">
    <!-- wow -->
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css”>
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/meanmenu.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/owl.carousel.min.css') }}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/slick.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/animate.css') }}">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/jquery-ui.min.css') }}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/venobox.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/nice-select.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/magnific-popup.css') }}">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap.min.css') }}">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/helper.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/responsive.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/client/css/custom.css') }}">
    
</head>

<body>
  
        @include('client.layouts.header')
        <!-- Header Area End Here -->
        @include('client.layouts.menu')
        <!-- content -->
       
             @yield('content')
       
      
        <!-- end content -->
        <!-- Begin Footer Area -->
        @include('client.layouts.footer')
</body>

<!-- index30:23-->

</html>