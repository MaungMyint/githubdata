<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Informic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="../frontend/images/logo.jpg" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  
	 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/#home-section ">
	      	<img src="../frontend/images/logo.jpg" class="img-fluid rounded-circle" width="150px" height="50px">
	      </a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="/#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="/#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="/#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="/#contact-section" class="nav-link"><span>Contact</span></a></li>
            @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
          @else
          <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                     <a class="dropdown-item" href="">
                       
                        {{ __('BookList') }}
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
          </li>
          @endguest
         <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
         @if(Auth::check() && Auth::user()->role=='author')
          <li>
              <a href="{{route('showcart.index')}}" id="showcount">
                  <button class="btn" style="color:pink;width: 50px;">
                   <i class="fas fa-shopping-cart"></i>
                  </button>0
                     
                </a>
              </li>
           @endif
	        </ul>
	      </div>
	    </div>
	</nav>
	  
		@yield('content')
    <footer class="" style:color:red>
       Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">INFORMIC</a>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/js/aos.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('frontend/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('frontend/js/google-map.js')}}"></script>
  
  <script src="{{asset('frontend/js/main.js')}}"></script>

  <script type="text/javascript">
  $(document).ready(function(){
      showcount();
      function showcount(){
        var mycart=localStorage.getItem('mycart');
        if(mycart){
          mycartobj=JSON.parse(mycart);
          var total=0;
          $.each(mycartobj.itemlist,function(i,v){
            total+=parseInt(v.quantity);
          });
          $("#showcount").html(total);
        }
      }

      $(".addtocard").click(function(){
        var id=$(this).data('id');
        var price=$(this).data('price');
        var name=$(this).data('name');
        var image=$(this).data('image');
        var organizerid = $(this).data('organizerid');
        var serviceid = $(this).data('serviceid');
        var venuesid = $(this).data('venuesid');
        //console.log(id,name,price,photo);
        var item={
          id:id,
          price:price,
          name:name,
          image:image,
          organizerid:organizerid,
          serviceid:serviceid,
          venuesid:venuesid,
          quantity:1
        };
        var mycart=localStorage.getItem('mycart');
        if(!mycart){
          mycart='{"itemlist":[]}';
        }
        var mycartobj=JSON.parse(mycart);
        //mycartobj.itemlist.push(item);
        
        var status=false; var total=0;
        $.each(mycartobj.itemlist,function(i,v){
          
            if(v.id==id){
              status=true;
              v.quantity++;
            
          }
          //total+=parseInt(v.quantity);
        })
        //$("#showcount").html(total);
        if(!status){
          mycartobj.itemlist.push(item);
        }
        console.log(mycartobj);
        
        localStorage.setItem('mycart',JSON.stringify(mycartobj));
          
        showcount();
      })
    })
</script>
    
  </body>
</html>