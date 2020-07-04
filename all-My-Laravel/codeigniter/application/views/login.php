<!DOCTYPE html>
<html>
<head>
	<title> Listing </title>

	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/css/bootstrap.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/css/style.css">
	
	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/fontawesome/css/all.min.css">
	
	<!-- Data Table CSS -->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/datatables/dataTables.bootstrap4.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/datatables/buttons.bootstrap4.min.css">
	
	<!-- TagsInput CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/tagsinput/tagsinput.css">

	<!-- Summernote CSS -->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/summernote/summernote-lite.css">    


	<!-- JQ -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/template/js/jquery.min.js"></script>
	
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/template/js/bootstrap.bundle.min.js"></script>
	
	<!-- Data Table JS -->
  	<script type="text/javascript" src="<?php echo base_url(); ?>/template/datatables/jquery.dataTables.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url(); ?>/template/datatables/dataTables.bootstrap4.min.js"></script>
	
	<!-- TagsInput JS -->
  	<script type="text/javascript" src="tagsinput/tagsinput.js"></script>

  	<!-- Summernote JS -->
  	<script src="summernote/summernote-lite.js"></script>


	<script type="text/javascript">
		$(document).ready(function() 
		{
			$('#example').DataTable();
		});

		$('#summernote').summernote({
	        placeholder: 'Descripe your summary or profile',
	        tabsize: 2,
	        height: 100
	    });
	</script>
	

</head>
<body>
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3 mt-5 pt-5">
				
				<div class="row">
					<div class="offset-md-4 col-md-3 offset-md-4">
						<i class="fas fa-street-view fa-2x mr-3 text-center ml-5"></i>
						<h1 class="text-center"> Listing </h1>
					</div>
				</div>

				<form method="POST" action="<?php echo base_url(); ?>authentication"  class="mt-5 pt-5">
		
					<div class="form-group row">
				    	<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
				    		<div class="col-sm-10">
				      			<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
				    		</div>
				  	</div>
			  		
			  		<div class="form-group row">
			    		<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
			    			<div class="col-sm-10">
			      				<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
			    			</div>
			  		</div>

			  		<div class="form-group row">
			    		<div class="offset-sm-2 col-sm-10">
			      			<button type="submit" class="btn btn-primary btn-block">Sign in</button>
			    		</div>
			  		</div>
				</form>
			</div>
		</div>
	</div>
	
</body>



</html>