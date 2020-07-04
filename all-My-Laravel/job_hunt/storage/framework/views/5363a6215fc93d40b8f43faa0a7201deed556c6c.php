<?php /* C:\xampp\htdocs\job_hunt\resources\views/categoryedit.blade.php */ ?>
<?php $__env->startSection('middle'); ?>


	<div id="category" class="container-fluid bg-grey ">
		
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
					<h3>Create Category/Job Type</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
				<form action="<?php echo e(route('category.update',$categories->id)); ?>" method="post" enctype="multipart/form-data">
				
        		<input type="hidden" name="_method" value="PUT">

				<?php echo csrf_field(); ?>	
				<div class="col-sm-6 form-group">
					
					<input type="text" name="name" class="form-control" value="<?php echo e($categories->name); ?>">
					<input type="submit" class="btn btn-lg btn-info" value="Update">				

				</div>
				</form>
			</div>
		</div>	
		
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>