<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
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

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>LITTLE<span>POS</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu"><br>
          <li><a class="btn btn-info" href="{{ route('login') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('login-form').submit();">
                                        {{ __('Login') }}
                                    </a>

                                    <form id="login-form" action="{{ route('login') }}" method="Get" style="display: none;">
                                        @csrf
                                    </form></li>
        </ul>
      </div>
    </header>

    <section id="main-content">
      <section class="wrapper site-min-height">
         
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <center><div class="card-header"><h4>{{ __('Register') }}</h4></div></center>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" name="photo" required autocomplete="photo">
                            </div>

                            <div class="col-md-6 offset-md-4"><br>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </div>

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

</body>
</html>
