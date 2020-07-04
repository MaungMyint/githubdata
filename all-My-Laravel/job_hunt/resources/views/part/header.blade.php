
<nav class="navbar navbar-default navbar-sticky bootsnav" style="background:#242c36 url('') no-repeat">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="/main" style="color: #da0833">
            <i class="fas fa-2x"><div aria-hidden="true" class="icon-search"></div></i>
            <i class="fas fa-2x">Jobs</i>
            <i class="fas fa-2x">Hunt</i>
          </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="navbar-menu" class="bg-info collapse navbar-collapse" style="background:#242c36 url('') no-repeat">
          <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
              <li class="nav-item"><a href="/main"><span>Home</span></a></li>
              @if(Auth::check() && Auth::user()->role == 'admin') 
              <li class="nav-item"><a href="{{route('category.index')}}"><span>Job Types</span></a></li> 
              <li class="nav-item"><a href="{{route('adminviewjob.index')}}"><span>Jobs</span></a></li> 
              <li class="nav-item"><a href="{{route('adminviewemployee.index')}}"><span>Employees</span></a></li>
              <li class="nav-item"><a href="{{route('adminviewseeker.index')}}"><span>Seekers</span></a></li>
              @endif
              @if(Auth::check() && Auth::user()->role == 'Employee')
              <li class="nav-item"><a href="{{route('confirmjob.index')}}"><span>Apply List</span></a></li>
              @endif
              @guest
            <li class="nav-item">
              <a class="nav-link mx-2" href="{{route('login')}}" tabindex="-1" aria-disabled="true"><span>Login</span></a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-success btn-sm my-2 ml-2" href="{{route('register')}}" tabindex="-1" aria-disabled="true"><span>Sing Up</span></a>
            </li>
            @else
            <li class="dropdown">
              @if(Auth::check() && Auth::user()->role == 'admin')
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('storage/image/profile2.png')}}"  width="30" class="img-circle img-70 shadow-white" style="cursor: pointer;"></a>
            @elseif(Auth::check() && Auth::user()->role == 'Employee')
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset(Auth::user()->employeeinfo->image)}}"  width="30" class=" img-circle img-70 shadow-white" style="cursor: pointer;"></a>
            @else
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset(Auth::user()->seekerinfo->image)}}"  width="30" class=" img-circle img-70 shadow-white" style="cursor: pointer;"></a>
            @endif
              <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">

                <li>
                  <a href="#" class="dropdown-item">{{Auth::user()->name}}
                  </a>
                </li>
                @if(Auth::user()->role == 'Seeker')
                <li>
                  <a href="{{route('seekerprofile.edit',Auth::user()->id)}}" class="dropdown-item">Profile
                  </a>
                </li>
                @else
                <li>  
                  <a href="{{route('employeeprofile.edit',Auth::user()->id)}}" class="dropdown-item">Profile
                  </a>
                </li>
                

                @endif

                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </ul>
            </li>
            @endguest
          </ul>
          
        </div><!-- /.navbar-collapse -->
  </nav>