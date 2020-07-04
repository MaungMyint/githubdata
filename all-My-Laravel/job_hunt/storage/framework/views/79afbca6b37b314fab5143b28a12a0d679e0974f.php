<?php /* C:\xampp\htdocs\job_hunt\resources\views/part/header.blade.php */ ?>

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
              <?php if(Auth::check() && Auth::user()->role == 'admin'): ?> 
              <li class="nav-item"><a href="<?php echo e(route('category.index')); ?>"><span>Job Types</span></a></li> 
              <li class="nav-item"><a href="<?php echo e(route('adminviewjob.index')); ?>"><span>Jobs</span></a></li> 
              <li class="nav-item"><a href="<?php echo e(route('adminviewemployee.index')); ?>"><span>Employees</span></a></li>
              <li class="nav-item"><a href="<?php echo e(route('adminviewseeker.index')); ?>"><span>Seekers</span></a></li>
              <?php endif; ?>
              <?php if(Auth::check() && Auth::user()->role == 'Employee'): ?>
              <li class="nav-item"><a href="<?php echo e(route('confirmjob.index')); ?>"><span>Apply List</span></a></li>
              <?php endif; ?>
              <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item">
              <a class="nav-link mx-2" href="<?php echo e(route('login')); ?>" tabindex="-1" aria-disabled="true"><span>Login</span></a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-success btn-sm my-2 ml-2" href="<?php echo e(route('register')); ?>" tabindex="-1" aria-disabled="true"><span>Sing Up</span></a>
            </li>
            <?php else: ?>
            <li class="dropdown">
              <?php if(Auth::check() && Auth::user()->role == 'admin'): ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo e(asset('storage/image/profile2.png')); ?>"  width="30" class="img-circle img-70 shadow-white" style="cursor: pointer;"></a>
            <?php elseif(Auth::check() && Auth::user()->role == 'Employee'): ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo e(asset(Auth::user()->employeeinfo->image)); ?>"  width="30" class=" img-circle img-70 shadow-white" style="cursor: pointer;"></a>
            <?php else: ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo e(asset(Auth::user()->seekerinfo->image)); ?>"  width="30" class=" img-circle img-70 shadow-white" style="cursor: pointer;"></a>
            <?php endif; ?>
              <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">

                <li>
                  <a href="#" class="dropdown-item"><?php echo e(Auth::user()->name); ?>

                  </a>
                </li>
                <?php if(Auth::user()->role == 'Seeker'): ?>
                <li>
                  <a href="<?php echo e(route('seekerprofile.edit',Auth::user()->id)); ?>" class="dropdown-item">Profile
                  </a>
                </li>
                <?php else: ?>
                <li>  
                  <a href="<?php echo e(route('employeeprofile.edit',Auth::user()->id)); ?>" class="dropdown-item">Profile
                  </a>
                </li>
                

                <?php endif; ?>

                <li>
                  <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                  </a>
                </li>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
              </ul>
            </li>
            <?php endif; ?>
          </ul>
          
        </div><!-- /.navbar-collapse -->
  </nav>