<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- logo -->
    <link rel="icon"  href="{{asset('images/logo.png')}}">
    <!-- Title -->
    <title>Sakura </title>
    <!-- Bootstrap core CSS --> 
    <link href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/fontawesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('template/css/classy-nav.css')}}">




    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('template/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body style="background-color:pink;">
   @include('frontend/nav')
    <!-- slide area -->
    
    @yield('contents')
    
    <!-- Footer Area Start -->
    @include('frontend/footer')
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{asset('template/js/jquery.min.js')}}"></script>
    <!-- Popper -->
    <script src="{{asset('template/js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins -->
    <script src="{{asset('template/js/hami.bundle.js')}}"></script>
    <!-- Active -->
    <script src="{{asset('template/js/default-assets/active.js')}}"></script>

  
   

</body>

</html>
