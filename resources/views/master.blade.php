<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soraesushi | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    {{-- THEME CLIENT-SIDE PAGES --}}
    <link rel="stylesheet" href="{{asset('user/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">

    {{-- favicon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin-assets/images/favicon.png')}}">

    {{-- font-awesome-cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('user/css/mystyle.css') }}">
</head>
<body>

    @include('header')

    @yield('main')

    @include('footer')

</body>
    <script src="{{asset('user/js/jquery.min.js')}}"></script>
    <script src="{{asset('user/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('user/js/popper.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('user/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('user/js/aos.js')}}"></script>
    <script src="{{asset('user/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('user/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('user/js/scrollax.min.js')}}"></script>
    <script src="{{asset('user/js/main.js')}}"></script>
</html>