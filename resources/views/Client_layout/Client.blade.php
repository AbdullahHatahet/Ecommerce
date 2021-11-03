<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('FrontEnd/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('FrontEnd/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('FrontEnd/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('FrontEnd/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('FrontEnd/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('FrontEnd/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/css/style.css')}}">
  </head>
  <body class="goto-here">
		
    <!--start nav-->
        @include('client_layout.navbar')
    <!-- END nav -->

    {{--Start Content--}}
        @yield('content')
    {{--End Content--}}
    <!--start footer-->
        @include('client_layout.footer')
    <!--end footer-->
        
      
      
        <script src="{{asset('FrontEnd/js/jquery.min.js')}}"></script>
        <script src="{{asset('FrontEnd/js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('FrontEnd/js/popper.min.js')}}"></script>
        <script src="{{asset('FrontEnd/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('FrontEnd/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('FrontEnd/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('FrontEnd/js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('FrontEnd/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('FrontEnd/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('FrontEnd/js/aos.js')}}"></script>
        <script src="{{asset('FrontEnd/js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{asset('FrontEnd/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('FrontEnd/js/scrollax.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{asset('FrontEnd/js/google-map.js')}}"></script>
        <script src="{{asset('FrontEnd/js/main.js')}}"></script>
          @yield('scripts')

        </body>
      </html>