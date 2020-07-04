<?php /* /home/maungmyint/Code/web/job_hunt/resources/views/auth/register.blade.php */ ?>
<?php $__env->startSection('middle'); ?>
<section class="login-wrapper features">
            <div class="container">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3 features-content">
                    
        
                    <span>JOBS</span>
                    <i><img src="<?php echo e(asset('template/img/hunt.png')); ?>" width="130" class="logo" alt=""></i>
                

                
                    <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                        <i class="fas fa-2x text-primary">Register Form</i><hr>
                        <?php echo csrf_field(); ?>
                        
                        <div class="form-group row">
                            <div class="col-md-1">
                            <i class="fas fa-user-circle fa-2x text-primary"></i>
                            </div>
                            <div class="col-md-11">
                                <input id="name" placeholder="User Name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                                <i class="fas fa-envelope fa-2x text-primary"></i>
                            </div>

                            <div class="col-md-11">
                                <input id="email" placeholder="User Email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                                <i class="fas fa-lock fa-2x text-primary"></i>
                            </div>

                            <div class="col-md-11">
                                <input id="password" placeholder="User Password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>                       

                         <div class="form-group row">
                            <div class="col-md-1">
                                <i class="fas fa-unlock-alt fa-2x text-primary"></i>
                            </div>

                            <div class="col-md-11">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                         <div class="form-group row">
                           
                            <div class="col-md-6">
                                <input  type="radio"  name="userrole" id="seeker" value="Seeker" required><i for="seeker" class="fa-1x text-primary">Seeker</i>
                            </div>
                            <div class="col-md-6">
                                <input  type="radio" id="employee"  name="userrole" value="Employee" required><i for="employee" class="fa-1x text-primary"> Employee</i>
                            </div>
                        </div>                       


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                
            
        
    </div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>