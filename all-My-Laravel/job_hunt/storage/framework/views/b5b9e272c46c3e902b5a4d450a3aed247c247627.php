<?php /* C:\xampp\htdocs\job_hunt\resources\views/category.blade.php */ ?>
<?php $__env->startSection('middle'); ?>

<section class="newsletter">
	<div id="category" class="container">
	  <div class="row">
		<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 features-content">
		
			<a href="index.html" style="color: #cc0000">
            <i class="fas fa-3x"><div aria-hidden="true" class="icon-search"></div></i>
            <i class="fas fa-3x">Jobs</i>
            <i class="fas fa-3x">Hunt</i>
          	</a><hr>
			<i class="fas fa-2x text-primary">
				Create Category | Job Type
			</i><hr>
				
				<form action="<?php echo e(route('category.store')); ?>" method="post">
					<div class="input-group">
					<?php echo csrf_field(); ?>	
						<input type="text" name="name"
						placeholder="Enter New Category Name" class="form-control" required="required">				
						<span class="input-group-btn">
							<button type="submit" class="btn btn-default">
								Add
							</button>
						</span>
					</div>
				</form><br>
				<i class="fas fa-2x text-primary">
				Category Table
				</i><hr>
				<table class="table">
					
					<tbody>
						<tr class="bg-warning">
						    <td>Category Name</td>
						    <td>Edit</td>
					        <td>Delete</td>
						</tr>
				    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				     	<tr>					      	
						    <td class="fas"><?php echo e($category->name); ?></td>
						        
						    <td><a href="<?php echo e(route('category.edit',$category->id)); ?>" class="btn btn-info ml-3">Edit</a></td>

						    <td>
						    	<form method="post" action="<?php echo e(route('category.destroy',$category->id)); ?>" class="d-inline-block ml-3">
		    						<input type="hidden" name="_method" value="DELETE">
		    					<?php echo csrf_field(); ?>
		    						<input type="submit" class="btn btn-primary" value="Delete" name="">
		    					</form>
		    				</td>	    					
						</tr>
						      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
		</div>
	  </div>

	</div>
	
</section>
		<!-- <section class="counter">
			<div class="container">
				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-3 col-sm-3">
					<div class="counter-text">
						<h3><?php echo e($category->name); ?></h3>
						<a href="<?php echo e(route('category.edit',$category->id)); ?>" class="btn btn-info ml-3">Edit</a>
						<form method="post" action="<?php echo e(route('category.destroy',$category->id)); ?>" class="d-inline-block ml-3">
		    						<input type="hidden" name="_method" value="DELETE">
		    					<?php echo csrf_field(); ?>
		    						<input type="submit" class="btn btn-primary" value="Delete" name="">
		    			</form>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</div>
		</section> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>