@extends('layouts.app')


<body style="background-color: aliceblue; ">
    
    <div class="container-fluid col-lg-8 col-sm-auto col-md-12 ">
    <form action="" method="post">
        
    <div class="profile-card col-lg-8 col-sm-auto col-md-10 " style="border-radius: 10px;background-color: aliceblue; background-image: url('https://www.freegreatpicture.com/files/photo101/50090-blue-sky-with-bright-purple-flowers.jpg')">

        <div class="image-container  ">
            <img src="{{ Auth::user()->image }}" alt="" srcset="" style=" border-radius: 4px;
            padding: 5px;
            border-radius: 10px;
            width: 35%;height: 280px;" class="img-rounded ">
           
            <hr>

        </div>
        <div class="main-container col-lg-12 col-sm-auto col-md-10">
            <p><i class="fa fa-user info" aria-hidden="true"></i> {{ Auth::user()->name }} </p>
        <p><i class="fa fa-id-badge info" aria-hidden="true"></i>{{Auth::user()->nrc}}</p>
            <p><i class="fa fa-phone info" aria-hidden="true"></i>{{Auth::user()->phonenumber}}</p>
            <p><i class="fa fa-envelope info" aria-hidden="true"></i>{{ Auth::user()->email }}</p>
            <p><i class="fa fa-location-arrow info" aria-hidden="true"></i>{{ Auth::user()->address }}</p>
            <p><i class="fa fa-key info" aria-hidden="true"></i>{{ Auth::user()->pass }} </p>

            <hr>


            <p><i class="fa fa-graduation-cap info" aria-hidden="true"></i>{{ Auth::user()->degree }} -degree </p>
            <p><i class="fa fa-book info" aria-hidden="true"></i>{{ Auth::user()->major}} -major</p>
            <p><i class="fa fa-university info" aria-hidden="true"></i>{{ Auth::user()->training }} -training</p>            
             <p><i class="fa fa-pencil-square-o info" aria-hidden="true"></i>{{ Auth::user()->course }} -course </p>
            <p><i class="fa fa-location-arrow info" aria-hidden="true"></i>{{ Auth::user()->state }} </p>

            <hr>
                <p><i class="fa fa-home info" aria-hidden="true"></i>{{ Auth::user()->university}} </p>
             
                <p><i class="fa fa-tasks info" aria-hidden="true"></i>{{ Auth::user()->staff }}</p>
                <p><i class="fas fa-user-cog info" aria-hidden="true"></i> {{ Auth::user()->jobposition}}</p>
                <p><i class="fa fa-location-arrow info" aria-hidden="true"></i> {{ Auth::user()->joblocation}}</p>
              
               
                <p><i class="fa fa-usd info" aria-hidden="true"></i>{{ Auth::user()->slary}}-kyats</p>
                <hr>
                
        

                <a class="dropdown-item btn" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
               
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>




                 <a class="btn  btn-danger " style="float: right" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

                <a href="{{route('seekerprofile.edit',Auth::user()->id)}}" class="btn btn-primary" style="float: left">Edit User Data
                </a>


              <br><br>
              
              <hr class="style-eight" />
             
 

        </div>




@section('content')
@endsection
