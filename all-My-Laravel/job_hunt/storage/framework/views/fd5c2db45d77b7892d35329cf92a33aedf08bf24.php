<?php /* /home/maungmyint/Code/web/job_hunt/resources/views/auth/login.blade.php */ ?>
<?php $__env->startSection('middle'); ?>
<section class="login-wrapper features">
<div class="container">
    
        
                <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2 features-content">

                    
                    <span>JOBS HUNT</span>
                        
                   
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <i class="fas fa-2x text-primary">Log In Form</i><hr>
                        <?php echo csrf_field(); ?>
                        
                        <div class="form-group row">
                            <div class="col-md-1 col-sm-1">
                                <i class="fas fa-envelope fa-2x text-primary"></i>
                            </div>

                            <div class="col-md-11 col-sm-11">
                                <input id="email" placeholder="Enter Your Email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1 col-sm-1">
                                <i class="fas fa-lock fa-2x text-primary"></i>
                            </div>

                            <div class="col-md-11 col-sm-11">
                                <input id="password" placeholder="Ener your Password" type="password" class="form-control input-lg<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-sm-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            <i class="fa-1x text-primary" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                            </i>
                            </div>
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Login')); ?>

                            </button>
                        </div>
                            <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                            <?php endif; ?>
                        
                    </form>
                </div>
            
    
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>