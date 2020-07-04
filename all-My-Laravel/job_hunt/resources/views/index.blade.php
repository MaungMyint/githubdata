<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Job Hunt | job hunt.com</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- All Plugin Css --> 
    <link rel="stylesheet" href="{{asset('template/css/plugins.css')}}">
    
    <!-- Style & Common Css --> 
    <link rel="stylesheet" href="{{asset('template/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/fontawesome-free-5.6.3-web/css/all.min.css')}}">

     <script type="text/javascript" src="{{asset('template/js/jquery.min.js')}}"></script>
    
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('template/js/bootstrap.min.js')}}"></script>

    </head>

<body class="bg-info">
  @include('part.header')

  <!-- Page Content -->
  <main class="py-4">
      @yield('middle')
  </main>
 
  <!-- /.container -->

  <!-- Footer -->
  @include('part.footer')

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('template/js/jquery.min.js')}}"></script>
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/js/bootsnav.js')}}"></script>
    <script src="{{asset('template/js/main.js')}}"></script>
    @yield('script')
    </body>
</html>
