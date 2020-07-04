<!DOCTYPE html>
<html>
<head>
	<title>MAin</title>
	<!-- <?php echo base_url(); ?> for all call -->
	<base href="<?php echo base_url(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<h1 class="text-success text-center">Category List</h1>
		<div class="container">
			<form method="post" action="#">
				<a href="#" class="btn btn-info my-3 float-right">ADD</a>
			<table class="table">
				<thead>
					<th>No.</th>
					<th>Name</th>
					<th>Action</th>
			    </thead>
			    <tbody>
					<td>1</td>
					<td>Beauty</td>
					<td>
						<a href="#" class="btn btn-sm btn-info">Detail</a>
						<a hryef="#" class="btn btn-sm btn-warning">Edit</a>
						<a href="#" class="btn btn-sm btn-danger">Delete</a>
					</td>
			    </tbody>	
			</table>
			</form>
		</div>	

</body>

</html>