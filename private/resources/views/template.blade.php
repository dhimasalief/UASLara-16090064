<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title -->
    <title>Ma Al-Hikmah 2</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="icon"  href="{{asset('public/LandingPage/img/core-img/favicon.ico')}}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('public/LandingPage/style.css')}}">

</head>
<body >
{{--include file header.blade.php--}}
    @include('header')
    <div class="contrainer">
    @yield('main')
    </div>
    @yield('footer')
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('public/LandingPage/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('public/LandingPage/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('public/LandingPage/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('public/LandingPage/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('public/LandingPage/js/active.js')}}"></script>
</body>
</html>