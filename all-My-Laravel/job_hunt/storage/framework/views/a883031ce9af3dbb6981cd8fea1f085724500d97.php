<?php /* /home/maungmyint/Code/web/job_hunt/resources/views/viewjob.blade.php */ ?>



<?php $__env->startSection('middle'); ?>

<section class="main-banner" style="background:#242c36 url('template/img/slider-01.jpg') no-repeat">
			<!-- <img src="<?php echo e(asset('template/img/slider-01.jpg')); ?>"> -->
			<div class="container">
				<div class="caption">
					<h2 class="fas">Build Your Career</h2>
					<!-- <form> -->
						<fieldset>
						  <div class="row">
						  	<div class="col-md-3 col-sm-2">
						  		
						  	</div>

						  	<div class="col-md-3 col-sm-2">
						  		<!-- For Category Dropdown -->
							<div class="dropdown">

							  <button class="btn btn-block seub-btn dropdown-toggle" type="button" data-toggle="dropdown">
							    Select Category&raquo;
							  </button>
							  <div class="dropdown-menu alert-warning">
							    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				          				<a class="dropdown-item" href="/?category_id=<?php echo e($category->id); ?>"><?php echo e($category->name); ?></a><br>
				          		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							  </div>
							</div>
							</div>
						  	<div class="col-md-3 col-sm-2">
						  		<!-- For Salary Dropdown -->
								<div class="dropdown">
								  <button type="button" class="btn btn-block seub-btn dropdown-toggle" data-toggle="dropdown">
								    Select Salary&raquo;
								  </button>
								  <div class="dropdown-menu alert-warning">
								    <?php $__currentLoopData = $salaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					          				<a class="dropdown-item" href="/?salary=<?php echo e($salary->salary); ?>"><?php echo e($salary->salary); ?></a><br>
					          		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								  </div>
								</div>
						  	</div>
						  	<div class="col-md-3 col-sm-2"></div>

						  </div>
							

							

							
							
						</fieldset>
					
				</div>
			</div>
		</section>
		
		
		
		<section class="jobs">
			<div class="container">
				<div class="row heading">
					<h2 class="fas fa-3x text-primary">Find Jobs Here</h2>
					<p class="fas text-danger">What is the flexibility with you!</p>
				</div>
				<div class="companies bg-info">
					<?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="company-list">
						
						<div class="row">
							
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="<?php echo e(asset($job->employee->employeeinfo->image)); ?>">
								</div>
							</div>
							<div class="col-md-8 col-sm-8">
								<div class="company-content">
									<h3 class="fas fa-2x">
										<?php echo e($job->name); ?>

									</h3>

									<p>
										<span class="company-name">
											<i class="fa fa-briefcase text-danger">
												
											</i>
											<?php echo e($job->category->name); ?>

										</span>
										<span class="company-location">
											<i class="fa fa-map-marker text-danger">
												
											</i> <?php echo e($job->location); ?>

										</span>
										<span class="package">
											<i class="fa fa-money text-danger">
												
											</i><?php echo e($job->salary); ?>

										</span>
										<span class="package">
											<label class="fa text-danger">please apply before this day:
											</label><?php echo e($job->enddate); ?>

										</span>
									</p>
								</div>
							</div>
							<div class="col-md-2 col-sm-2">
								
									<a href="<?php echo e(route('jobdetail.show',$job->id)); ?>" class="btn-block btn view-job">View Job</a>
								
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