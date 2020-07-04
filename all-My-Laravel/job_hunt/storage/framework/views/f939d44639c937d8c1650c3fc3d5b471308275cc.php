<?php /* C:\xampp\htdocs\job_hunt\resources\views/jobdetail.blade.php */ ?>
<?php $__env->startSection('middle'); ?>
		<!-- Navigation Start  -->
	
	
    <!-- Main jumbotron for a primary marketing message or call to action -->
	<section class="inner-banner" style="backend:#242c36 url(https://via.placeholder.com/1920x600)no-repeat;">
		<div class="container">
			<div class="caption">
				<h2>Get the jobs</h2>
				<p>Get the jobs, Compare with your skill<span>202 New job</span></p>
			</div>
		</div>
	</section>


	<section class="profile-detail">
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div class="basic-information">
						<div class="col-md-3 col-sm-3">
						 <img src="<?php echo e(asset($jobdetail->employee->employeeinfo->image)); ?>" alt="" class="img-responsive">
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="profile-content">
								
									<h2><span><?php echo e($jobdetail->name); ?></span></h2>
									<p>Now Hiring</p>
									<ul class="information">
										<li><span>Vacancy:</span><?php echo e($jobdetail->vacancy); ?></li>

										<li><span>Salary:</span><?php echo e($jobdetail->salary); ?></li>

										<li><span>Experience:</span><?php echo e($jobdetail->experience); ?></li>

										
										<li><span>Qualification:</span><?php echo e($jobdetail->qualifications); ?></li>
										
										<li><span>Address:</span><?php echo e($jobdetail->location); ?></li>

										<li><span>Phone.NO:</span><?php echo e($jobdetail->employee->employeeinfo->phoneno); ?></li>
										<li><span>Enddate:</span><?php echo e($jobdetail->enddate); ?></li>


										
										<!-- <li><span>Time:</span>Monday - Friday , 9:am - 9:pm</li> -->
									</ul>								
								</div>								
							</div>
							
						<ul class="social">
							<li><a href="https://www.facebook.com/myanmaritc/" class="facebook"><i class="fas fa-facebook"></i>Facebook</a></li>

							<?php if( auth()->check() && auth()->user()->isSeeker() ){
								?>	
							<?php if( strtotime(date('Y-m-d')) < strtotime($jobdetail->enddate )){	?>	

							<?php if(isset($app) && count($app)>0): ?>
							<button class="btn btn-danger">You have already applied this job</button>
							<?php endif; ?>

							<button id="applyform" class="btn btn-info">
								Apply
							</button>
							<?php }else{ ?>
							<button class="btn btn-primary">Not availabe</button>
							<?php } ?>
							<?php } ?>
							
							
						</ul>
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-user fa-fw"></i> Job Description
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
							<p><?php echo e($jobdetail->details); ?></p>	
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-leaf fa-fw"></i> Responsibilities:
							</div>
												<!-- /.panel-heading -->
							<div class="panel-body">
							<p>Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>	
							<ul>
								<li>Someone to Write</li>
								<li>Someone to Write</li>
								<li>Someone to Write</li>
								<li>Someone to Write</li>
							</ul>
							</div>
						</div>
						
						
						

					</div>
				</div>
			</div>
		</div>
	</section>



<div class="modal fade" id="apply">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">My self</h4>
				<button class="close" data-dismiss="modal">x</button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo e(route('application.store')); ?>">
					<?php echo csrf_field(); ?>
					<input type="hidden" name="job_id" value="<?php echo e($jobdetail->id); ?>" id="jobid">
					<input type="hidden" name="company_id" value="<?php echo e($jobdetail->company_id); ?>">
					<div class="form-group">
						<label>Status For That Job!</label>
						<textarea name="status" class="form-control"></textarea>

					</div>
					<input type="submit" name="add" value="Apply" class="btn btn-success">
				</form>
			</div>
			<div class="modal-footer">
			</div>
			
		</div>
	</div>
</div>

	<?php $__env->stopSection(); ?>	<!-- footer start -->

<?php if(auth()->guard()->guest()): ?>
	<?php $__env->startSection('script'); ?>
	<script type="text/javascript">
		$(document).ready(function () {
			// body...
			$("#applyform").click(function(e){
				e.preventDefault();
				var con = confirm('you must login to apply?');

				if (con == true) {
					window.location.href = '/login/';
				}else{
					
					window.location.href = '/jobdetail/'+jobid;
					

				}
			})
		})
		
	</script>
	<?php $__env->stopSection(); ?>
	<?php else: ?>
	<?php $__env->startSection('script'); ?>
	<script type="text/javascript">
		$(document).ready(function () {
			// body...
			$("#applyform").click(function(e){
				e.preventDefault();
				var con = confirm('are you sure to apply?');

				if (con == true) {
					$('#apply').modal('show');
				}else{
					var jobid = $('#jobid').val();
					window.location.href = '/jobdetail/'+jobid;
				}
			})
		})
		
	</script>
	<?php $__env->stopSection(); ?>	
<?php endif; ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>