<?php /* C:\xampp\htdocs\job_hunt\resources\views/seekerinfo.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome <?php echo e(Auth::user()->name); ?>  Fill your detail information</div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('seekerinfo.index')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>                
                        
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Image')); ?></label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control<?php echo e($errors->has('image') ? ' is-invalid' : ''); ?>" name="image" required>

                                <?php if($errors->has('image')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('image')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>                       

                        <div class="form-group row">
                            <label for="phoneno" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Phoneno')); ?></label>

                            <div class="col-md-6">
                                <input id="phoneno" type="text" class="form-control<?php echo e($errors->has('phoneno') ? ' is-invalid' : ''); ?>" name="phoneno" value="<?php echo e(old('phoneno')); ?>" required>

                                <?php if($errors->has('phoneno')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('phoneno')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                       

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" name="address" required>

                                <?php if($errors->has('address')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="detail" class="col-md-4 col-form-label text-md-right"><?php echo e(__('User Detail')); ?></label>

                            <div class="col-md-6">
                                <input id="detail" type="text" class="form-control<?php echo e($errors->has('detail') ? ' is-invalid' : ''); ?>" name="detail" required>

                                <?php if($errors->has('detail')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('detail')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cvform" class="col-md-4 col-form-label text-md-right"><?php echo e(__('CV Form')); ?></label>

                            <div class="col-md-6">
                                <input id="cvform" type="file" class="form-control<?php echo e($errors->has('cvform') ? ' is-invalid' : ''); ?>" name="cvform" required>

                                <?php if($errors->has('cvform')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('cvform')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Save')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>