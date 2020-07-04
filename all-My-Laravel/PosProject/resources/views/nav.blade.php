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
          @if(Auth::check() && Auth::user()->role == 'admin')
          <li>
            <a class="btn btn-info" href="{{route('report.index')}}">
              <i class="fa fa-cogs"></i>
              <span>Report</span>
            </a> 
          </li>
          @endif
          <li><a class="btn btn-info" href="{{route('logout')}}"
           onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            {{__('Logout')}}
          </a>
          <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">
            @csrf
          </form>
          </li>

         </ul>
      </div>
</header>