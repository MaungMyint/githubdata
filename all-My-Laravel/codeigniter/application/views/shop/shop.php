<div class="container mt-5">

		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-10">
				<h1 class="text-primary"> Create New Category </h1>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2">
				<a href="<?php base_url(); ?>category" class="btn btn-outline-primary float-right"> << Go Back </a>
			</div>

		</div>

		<div class="row mt-5">
			
			<div class="col-lg-12 col-md-12 col-sm-12">
				<form method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>category/save">  
  				
	  				<div class="form-group row">
	    				<label for="name" class="col-sm-2 col-form-label"> Name </label>
	    				<div class="col-sm-10">
	      					<input type="text" class="form-control" id="name" placeholder="Type Category Name" name="categoryname" value="<?php echo set_value('categoryname');?>">
	      					<span class="text-danger"><?php echo form_error('categoryname');?></span>
	    				</div>
	  				</div>
	  				
	  				<div class="form-group row">
	    				
	    				<label for="image" class="col-sm-2 col-form-label"> Image </label>
	    				
	    				<div class="col-sm-10">
	      					<input type="file" class=" form-control-file" id="image" name="photo">
	    				</div>
	  				</div>

	  				<div class="form-group row">
			    		<div class="offset-sm-2 col-sm-10">
			      			<button type="submit" class="btn btn-primary">
			      				<i class="fas fa-save"></i>
			      				Save
			      			</button>
			    		</div>
			  		</div>

				</form>
			</div>
			
		</div>
	</div>