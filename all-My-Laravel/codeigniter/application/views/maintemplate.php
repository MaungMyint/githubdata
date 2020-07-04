<!DOCTYPE html>
<html>
<head>
	<title> Listing </title>

	<base href="<?php echo base_url(); ?>"/>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/bootstrap.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/style.css">
	
	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/fontawesome/css/all.min.css">
	
	<!-- Data Table CSS -->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/datatables/dataTables.bootstrap4.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/datatables/buttons.bootstrap4.min.css">
	
	<!-- TagsInput CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/tagsinput/tagsinput.css">

	<!-- Summernote CSS -->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/summernote/summernote-bs4.css">    


	<!-- JQ -->
	<script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.min.js"></script>
	
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="<?php echo base_url(); ?>template/js/bootstrap.bundle.min.js"></script>
	
	<!-- Data Table JS -->
  	<script type="text/javascript" src="<?php echo base_url(); ?>template/datatables/jquery.dataTables.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url(); ?>template/datatables/dataTables.bootstrap4.min.js"></script>
	
	<!-- TagsInput JS -->
  	<script type="text/javascript" src="<?php echo base_url(); ?>template/tagsinput/tagsinput.js"></script>

  	<!-- Summernote JS -->
  	<script src="<?php echo base_url(); ?>template/summernote/summernote-bs4.js"></script>


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

	<nav class="navbar navbar-expand-lg navbar-dark bg_gradient">
  		<div class="container">
	  		<a class="navbar-brand" href="#">
	  			<i class="fas fa-street-view fa-2x mr-3"></i>
				<h3 class="float-right"> Listing </h3>
	  		</a>
	  		
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>
	  		
	  		<div class="collapse navbar-collapse ml-5" id="navbarNav">
	    		<ul class="navbar-nav">
	      			<li class="nav-item active">
	        			<a class="nav-link ml-5 mr-5 text-white" href="#">
	        				<i class="fas fa-tachometer-alt"></i> Dashboard 
	        			</a>
	      			</li>
	      			
	      			<li class="nav-item">
	        			<a class="nav-link text-white ml-5 mr-5" href="#">
	        				<i class="fas fa-th-list"></i> Category
	        			</a>
	      			</li>
	      		
	      			<li class="nav-item">
	        			<a class="nav-link text-white ml-5 mr-5" href="#">
	  						<i class="fas fa-map-marked-alt"></i>
	        				Shop
	        			</a>
	      			</li>

	      			<li class="nav-item ">
	        			<a class="nav-link text-white ml-5 mr-5" href="#">
	        				<i class="fas fa-power-off"></i>
	        				Logout
	        			</a>
	      			</li>
	      				
	      		
	    		</ul>
	  		</div>
	  	</div>
	</nav>

	<?php $this->load->view($innerdata); ?>

</body>



</html>