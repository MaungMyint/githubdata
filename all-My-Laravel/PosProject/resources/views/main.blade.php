<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <meta name="csrf-token" content="{{csrf_token()}}"> <!-- for ajax -->
  
  <title>POS</title>

  <!-- Favicons --><!-- 
  <link href="{{asset('template/img/favicon.png')}}" rel="icon"> -->
  <link href="{{asset('template/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('template/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('template/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('template/css/receipt.css')}}" rel="stylesheet">
  <link href="{{asset('template/css/style-responsive.css')}}" rel="stylesheet">

</head>

<body>
  <section id="container">
    @include('nav')
<!-- nav -->
	 @include('side')    

<!-- for insert data -->
     
    <section id="main-content">
      <section class="wrapper site-min-height">
         @yield('content')
      </section>
    </section>
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>LITTLE POS</strong>. All Rights Reserved
        </p>
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
  </section>
  <script src="{{asset('template/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('template/lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script src="{{asset('template/lib/jquery.ui.touch-punch.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('template/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('template/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('template/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('template/lib/common-scripts.js')}}"></script>
  <!--script for this page-->
   @yield('script')
</body>

</html>
