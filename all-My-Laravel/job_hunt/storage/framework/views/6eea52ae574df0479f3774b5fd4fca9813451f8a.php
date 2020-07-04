<?php /* C:\xampp\htdocs\job_hunt\resources\views/adminviewseeker.blade.php */ ?>
<?php $__env->startSection('middle'); ?>

		<!-- Navigation Start  -->
		
		<!-- Navigation End  -->
		
		<!-- Main jumbotron for a primary marketing message or call to action -->
		
		
		
		<section class="membercard bg-info">
			<div class="container">
				<div class="row">
	    	<?php $__currentLoopData = $seekerinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seeker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    	<!-- <div class="col-md-4 col-sm-4">
    			<div class="features-content">
    				<a href="<?php echo e(route('seekerinfo.show',$seeker->id)); ?>" class="mb-2 d-block" style="cursor: pointer !important;text-decoration: none;">


					    <img class="img-circle img-50 shadow-white" width="200" src="<?php echo e(asset($seeker->image)); ?>" alt="Card image cap">
					  	
							<h3><b>Name: </b><?php echo e($seeker->user->name); ?></h3>
						
					    
					    	<p><b>Email: </b><?php echo e($seeker->user->email); ?></p>
					    	<p><b>PhoneNo: </b><?php echo e($seeker->phoneno); ?></p>
						  	<p><b>Address: </b><?php echo e($seeker->address); ?></p>
							<p><b>Detail: </b><?php echo e($seeker->detail); ?></p>
				
		    				<form method="post" action="<?php echo e(route('seekerinfo.destroy',$seeker->id)); ?>" class="d-inline-block ml-3">
		    					<input type="hidden" name="_method" value="DELETE">
		    					<?php echo csrf_field(); ?>
		    					<input type="submit" class="btn btn-danger" value="Delete" name="">
		    				</form>
					</a>
				</div>
    		</div> -->
    		
    				<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover bg-info" style="background-size:cover;"><i class="fas fa-2x">Information</i><br><i class="fas fa-2x">For</i><br><i class="fas fa-2x">Seeker</i></div>
								<a href="<?php echo e(route('seekerinfo.show',$seeker->id)); ?>">
								<div class="u-content">
									<div class="avatar box-80">
										<img width="100" height="100" class="img-circle img-100 shadow-white" src="<?php echo e(asset($seeker->image)); ?>">
										
									</div>
									<h5><?php echo e($seeker->user->name); ?></h5>
									<p class="text-muted">
										
										<span class="company-location">
											<i class="fa fa-map-marker"></i> 
											<?php echo e($seeker->phoneno); ?>

										</span><hr>
										<span class="package">
											<i class="fa fa-money"></i>
											<?php echo e($seeker->address); ?>

										</span><hr>
										<span class="package">
											<i class="fa fa-money"></i>
											<?php echo e($seeker->detail); ?>

										</span><hr>
										<form method="post" action="				<?php echo e(route('seekerinfo.destroy',$seeker->id)); ?>" class="d-inline-block ml-3">
					    					<input type="hidden" name="_method" value="DELETE">
					    					<?php echo csrf_field(); ?>
					    					<input type="submit" class="btn btn-primary" value="Delete" name="">
					    				</form>
									</p>
								</div>
								</a>
							</div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    </div>
	  </div>
	</section>
		
		
<?php $__env->stopSection(); ?>
			
		<!-- footer start -->
		
		 
		

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>