<?php /* C:\xampp\htdocs\job_hunt\resources\views/confirmjob.blade.php */ ?>
<?php $__env->startSection('middle'); ?>

	<section class="pricind">
		<div class="container">
		  <div class="row heading">
					<h2 class="fas fa-3x text-primary">Apply Jobs In Your Co.ltd</h2>
					
				</div>
		  <div class="row">
			<?php $__currentLoopData = $application; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-4 col-sm-4">
					
					<div class="package-box">
						<div class="package-header">
							<i class="fa fa-cog" aria-hidden="true"></i>
							<h3>Apply List</h3>
						</div>
						<div class="package-info">
							<ul>
							<li>Seeker Name: <?php echo e($app->user->name); ?></li>
							<li>Job Name: <?php echo e($app->job->name); ?></li>
							<li>Status: <?php echo e($app->status); ?></li>					
							</ul>

						</div>
						<a href="<?php echo e($app->seeker->seekerinfo->cvform); ?>" class="btn btn-info">View CV</a>
					</div>
					
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		   </div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>