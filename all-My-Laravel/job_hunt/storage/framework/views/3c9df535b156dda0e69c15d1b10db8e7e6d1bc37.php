<?php /* /home/maungmyint/Code/web/job_hunt/resources/views/job.blade.php */ ?>


<?php $__env->startSection('middle'); ?>
	
		
    <section class="login-wrapper features">    
                    <!-- form user info -->
        <div class="container">
            <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2 features-content">
                        
                        
                            <form method="post" action="<?php echo e(route('job.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                                <i class="fas fa-3x text-info">Jobs Insert Form</i><hr>
                            
                                <div class="form-group row">
                                    <label class="fas col-lg-3 col-form-label form-control-label"><h5>Job Name</h5></label>
                                    <div class="col-lg-9">
                                        <input class="form-control fas" placeholder="Enter Job Name" type="text" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="fas col-lg-3 col-form-label form-control-label"><h5>Vacancy</h5></label>
                                    <div class="col-lg-9">
                                        <input class="form-control fas" placeholder="Enter Vacancy" type="text" name="vacancy" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="fas col-lg-3 col-form-label form-control-label"><h5>Salary</h5></label>
                                    <div class="col-lg-9">
                                        <input class="form-control fas" placeholder="Enter Salary" name="salary" type="text" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="fas col-lg-3 col-form-label form-control-label"><h5>Experience</h5></label>
                                    <div class="col-lg-9">
                                        <select class="form-control fas" id="sel1"  name="experience">
                                        <option selected>Choose Experienced Year</option>
                                        <option>no experience</option>
								        <option>1 year</option>
								        <option>2 years</option>
								        <option>3 years</option>
								        <option>4 years</option>
								        <option>4 year above</option>
								        
								      </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="fas col-lg-3 col-form-label form-control-label"><h5>Detail</h5></label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control fas" placeholder="Enter Job Detail" type="url" value="" name="detail"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="fas col-lg-3 col-form-label form-control-label"><h5>Qualification</h5></label>
                                    <div class="col-lg-9">
                                        <input class="form-control fas" placeholder="Enter Qualification" name="qualification" type="text" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="fas col-lg-3 col-form-label form-control-label"><h5>Location</h5></label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control fas" placeholder="Enter Your Location" name="location" type="text" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="fas col-lg-3 col-form-label form-control-label"><h5>Categories</h5></label>
                                    <div class="col-lg-9">
                                        <select class="form-control fas" name="category" >
                                            <option selected>Choose Job Type</option>
            							<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>                    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            							</select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="fas col-lg-3 col-form-label form-control-label"><h5>End date</h5></label>
                                    <div class="col-lg-9">
                                        <input class="form-control fas" name="enddate" type="date" >
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">    
                                        <input type="submit" name="bntsubmit" class="btn btn-info btn-lg fas" value="Save">
                                    </div>
                                </div>

                            </form>
                        
            </div>
                    <!-- /form user info -->
        </div>
    </section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>