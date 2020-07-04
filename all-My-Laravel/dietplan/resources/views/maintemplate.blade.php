<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Foodfun</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('template/assets/images/logo/favicon.png')}}" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('template/assets/css/animate-3.7.0.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/style.css')}}">
</head>
@include('header')
@yield('content')
@include('footer')
    <script src="{{asset('template/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('template/assets/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
    <script src="{{asset('template/assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('template/assets/js/vendor/owl-carousel.min.js')}}"></script>
    <script src="{{asset('template/assets/js/vendor/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{asset('template/assets/js/vendor/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('template/assets/js/main.js')}}"></script>
    <script type="text/javascript">

    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
        }
        else document.getElementById('ifYes').style.display = 'none';
    }
    </script>
<body>        
</body>
</html>
