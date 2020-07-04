<?php /* C:\xampp\htdocs\job_hunt\resources\views/adminviewjob.blade.php */ ?>
<?php $__env->startSection('middle'); ?>

		<!-- Navigation Start  -->
		
		<!-- Navigation End  -->
		
		<!-- Main jumbotron for a primary marketing message or call to action -->
		
		
		
		
		<section class="jobs">
			<div class="container">
				<div class="row heading">
					<h2 class="fas fa-3x text-primary">Checking the Job list</h2>
					<p></p>
				</div>
				<div class="companies bg-warning">
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
									<h3><?php echo e($job->name); ?></h3>

									<p><span class="company-name"><i class="fa fa-briefcase"></i><?php echo e($job->category->name); ?></span><span class="company-location"><i class="fa fa-map-marker"></i> <?php echo e($job->location); ?></span><span class="package"><i class="fa fa-money"></i><?php echo e($job->salary); ?></span><span>Date:<?php echo e($job->created_at->toFormattedDateString()); ?></span></p>

								</div>

								
							</div>
							<div class="col-md-2 col-sm-2">
							<div class="company-content">
								
									<a href="<?php echo e(route('jobdetail.show',$job->id)); ?>" class="btn-block btn view-job">Job Detail</a>
								
							</div>
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