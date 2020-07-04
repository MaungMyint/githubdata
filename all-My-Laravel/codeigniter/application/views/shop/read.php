<div class="container mt-5">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-10">
				<h1 class="text-primary"> Category List 
				</h1>	
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2">
				<a href="<?php echo base_url(); ?>category/create" class="btn btn-outline-primary"> 
					<i class="fas fa-plus"></i>
					Add New 
				</a>
			</div>
		</div>
		<?php if($this->session->flashdata('success')): ?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>Success!</strong><?php echo $this->session->flashdata('success');?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
<?php endif; ?>

		<div class="table-responsive mt-5">
			<table class="table" id="example">
				<thead>
		            <tr>
		                <th>No</th>
		                <th>Name</th>
		                <th>Action</th>
		                <th>Action</th>
		                <th>Action</th>
		                <th>Action</th>
		                <th>Action</th>
		                <th>Action</th>
		                <th>Action</th>
		                <th>Action</th>
		                <th>Action</th>
		                <th>Action</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php
		        	 $i= 0;
		        	foreach ($categorylist as $category ):
		        	$i++; 
		        	$id=$category->catagories_id;
		        	$name=$category->catagories_name;
		        	$logo=$category->catagories_logo;
		        	?>
		        	<tr>
		        		<td> <?php echo $i;?>.</td>
		        		<td><?php echo $name; ?> </td>
		        		<td>
		        			<a href="" class="btn btn-outline-success"> 
		        				<i class="far fa-list-alt"></i> Detail 
		        			</a>

		        			<a href="<?php echo base_url(); ?>category/edit/<?php echo $id?>" class="btn btn-outline-warning"> 
		        				<i class="far fa-edit"></i> Edit 
		        			</a>

		        			<a href="<?php echo base_url(); ?>category/delete/<?php echo $id?>" class="btn btn-outline-danger"> 
		        				<i class="fas fa-trash"></i>
		        				Delete 
		        			</a>
		        		</td>
		        	</tr>
		       <?php endforeach ;?> 
		        </tbody>

			</table>
		</div>
		
	</div>