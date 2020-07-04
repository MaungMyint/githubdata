<?php /* /home/maungmyint/Code/web/job_hunt/resources/views/employeeprofile/editemployee.blade.php */ ?>


<?php $__env->startSection('middle'); ?>
<section class="login-wrapper features">
	<div class="container">
    	<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2 features-content">
        	
        		
        		<form method="post" action="<?php echo e(route('employeeprofile.update',$user->employeeinfo->id)); ?>" enctype="multipart/form-data">
				<input name="_method" type="hidden" value="PUT">
				<i class="fas fa-3x text-info">Profile Upload</i><hr>
					<?php echo csrf_field(); ?>


				<div class="form-group">
					<div class="form-file">
						<label class="fas text-info">Choose Your Profile</label>
	                    <input type="file" class="btn-info inputfile" name="your_picture" id="your_picture"  onchange="readURL(this);" data-multiple-caption="{count} files selected" multiple />
	                    <label for="your_picture">
	                        <figure>
	                        	<?php if($user->employeeinfo->image == 'profilepic'): ?>
	                            <img src="<?php echo e(asset('storage/image/profile.jpg')); ?>" alt="" width="100" class="your_picture_image">
	                            <?php else: ?>
	                            <img src="<?php echo e(asset($user->employeeinfo->image)); ?>" alt="" width="100" class="your_picture_image">
	                            <?php endif; ?>
	                            <input type="hidden" name="oldprofile" value="<?php echo e($user->employeeinfo->image); ?>">
	                        </figure>
	                        
	                    </label>
	                </div>
	                <?php if($errors->has('your_picture')): ?>
    					<span class="invalid-feedback" role="alert" style="display: block;">
      			  		<strong><?php echo e($errors->first('your_picture')); ?></strong>
   				 		</span>
					<?php endif; ?>
				</div>


				<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Name</label>
			    	<input type="text" class="fas form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" id="formGroupExampleInput2" placeholder="Post Title" value="<?php echo e($user->name); ?>">

					<?php if($errors->has('name')): ?>
					    <span class="invalid-feedback" role="alert">
					        <strong><?php echo e($errors->first('name')); ?></strong>
					    </span>
					<?php endif; ?>
			  	</div>
				
			  	

			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Email</label>
			    	<input type="email" class="fas form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" id="formGroupExampleInput2" placeholder="Email" value="<?php echo e($user->email); ?>">

					<?php if($errors->has('email')): ?>
					    <span class="invalid-feedback" role="alert">
					        <strong><?php echo e($errors->first('email')); ?></strong>
					    </span>
					<?php endif; ?>
			  	</div>

			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Phone</label>
			    	<input type="text" class="fas form-control <?php echo e($errors->has('phoneno') ? ' is-invalid' : ''); ?>" name="phoneno" id="formGroupExampleInput2" placeholder="Post Title" value="<?php echo e($user->employeeinfo->phoneno); ?>">

					<?php if($errors->has('phoneno')): ?>
					    <span class="fas invalid-feedback" role="alert">
					        <strong><?php echo e($errors->first('phoneno')); ?></strong>
					    </span>
					<?php endif; ?>
			  	</div>

			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Address</label>
			    	<input type="text" class="fas form-control <?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" name="address" id="formGroupExampleInput2" placeholder="Post Title" value="<?php echo e($user->employeeinfo->address); ?>">

					<?php if($errors->has('address')): ?>
					    <span class="fas invalid-feedback" role="alert">
					        <strong><?php echo e($errors->first('address')); ?></strong>
					    </span>
					<?php endif; ?>
			  	</div>


			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Detail</label>
			    	<input type="text" class="fas form-control <?php echo e($errors->has('detail') ? ' is-invalid' : ''); ?>" name="detail" id="formGroupExampleInput2" placeholder="Post Title" value="<?php echo e($user->employeeinfo->detail); ?>">

					<?php if($errors->has('detail')): ?>
					    <span class="fas invalid-feedback" role="alert">
					        <strong><?php echo e($errors->first('detail')); ?></strong>
					    </span>
					<?php endif; ?>
			  	</div>

			  	<div class="form-group">
			  		
			    	<input type="submit" class="btn btn-info" value="Update">
			    	
			  	</div>

				</form>
			
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>