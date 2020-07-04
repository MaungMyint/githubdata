<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered">
          <a href="profile.html">
            <img src="{{asset('template/img/ui-sam.jpg')}}" class="img-circle" width="80">
          </a>
        </p> 
        <h5 class="centered">Sam Soffes</h5>
        <li class="mt">
            <a href="{{route('admin.category.index')}}">
              <i class="fa fa-dashboard"></i>
              <span>Category</span>
              </a>
        </li> 
        <li class="sub-menu">
            <a href="{{route('admin.item.index')}}">
              <i class="fa fa-desktop"></i>
              <span>Items</span>
              </a>
        </li>
        <li class="sub-menu">
            <a href="{{asset('sale')}}">
            <i class="fa fa-cogs"></i>
            <span>Sale</span>
            </a>
        </li>
        <li class="sub-menu">
            <a href="{{route('report.index')}}">
              <i class="fa fa-cogs"></i>
              <span>Report</span>
              </a>
        </li>
      </ul>   
    </div>
</aside>