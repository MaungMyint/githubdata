	<div class="container mt-5">

		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-10">
				<h1 class="text-primary"> Create New Category </h1>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2">
				<a href="" class="btn btn-outline-primary float-right"> << Go Back </a>
			</div>

		</div>

		<div class="row mt-5">
			
			<div class="col-lg-12 col-md-12 col-sm-12">
				<form action="<?php echo base_url()?>category/update" method="POST" enctype="multipart/form-data">
  				
  					<input type="hidden" name="id" value="<?php echo $categorylist['catagories_id']?>">
	  				<div class="form-group row">
	    				<label for="name" class="col-sm-2 col-form-label"> Name </label>
	    				<div class="col-sm-10">
	      					<input type="text" class="form-control" id="name" placeholder="Type Category Name" name="categoryname" value="<?php echo $categorylist['catagories_name']?>">
	    				</div>
	  				</div>
	  				
	  				<div class="form-group row">
	    				<label for="image" class="col-sm-2 col-form-label"> Image </label>

	    				<div class="col-sm-10">
	    					<nav>
					 			<div class="nav nav-tabs" id="nav-tab" role="tablist">
					    		
					    			<a class="nav-item nav-link active" id="oldImage_tab" data-toggle="tab" href="#oldImage" role="tab" aria-controls="oldImage" aria-selected="true"> Old Image </a>
					    			
					    			<a class="nav-item nav-link" id="newImage_tab" data-toggle="tab" href="#newImage" role="tab" aria-controls="newImage" aria-selected="false"> New Image </a>
					  			</div>
							</nav>

							<div class="tab-content mt-2" id="nav-tabContent">
	  							<div class="tab-pane fade show active" id="oldImage" role="tabpanel" aria-labelledby="oldImage_tab">
	  								<img src="<?php echo base_url().$categorylist['catagories_logo']?>" class="img-fluid" style="width: 100px; height: 100px">
	  							<input type="hidden" name="oldphoto" value="<?php echo $categorylist['catagories_logo']?>">


	  								
	  							</div>
	  							
	  							<div class="tab-pane fade" id="newImage" role="tabpanel" aria-labelledby="newImage_tab">
	  								<input type="file" class=" form-control-file" id="image" name="newphoto" >
	  							</div>
							</div>
	    				</div>
	  				</div>

	  				<div class="form-group row">
			    		<div class="offset-sm-2 col-sm-10">
			      			<button type="submit" class="btn btn-primary">
			      				<i class="fas fa-sync-alt"></i>
			      				Update
			      			</button>
			    		</div>
			  		</div>

				</form>
			</div>
			
		</div>
	</div>
