<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/css/mycss.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>

<body id="page-top">

    <h1 class="text-center"><strong>Student Account</strong></h1>


<section class="login-wrapper features">
	<div class="container">
        <div class="container">
            <div class="container">
    	<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2 features-content">
        	
        		
        		<form method="post" action="#" enctype="multipart/form-data">
				<input name="_method" type="hidden" value="PUT">
				<i class="fas fa-3x text-info">Profile Upload</i><hr>
					@csrf


				<div class="form-group">
					<div class="form-file">
						<label class="fas text-info">Choose Your Profile</label>
	                    <input type="file" class="btn-info inputfile" name="your_picture" id="your_picture"  onchange="readURL(this);" data-multiple-caption="{count} files selected" multiple />
	                    <label for="your_picture">
	                    </label>
	                </div>
                </div>
                
                



                <div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Name</label>
                    <input type="text" class="fas form-control" name="name" id="formGroupExampleInput2" 
                     placeholder="Student Name" value="Nane">

					@if ($errors->has('name'))
					    <span class="invalid-feedback" role="alert">
					        <strong>name</strong>
					    </span>
					@endif
                </div>
                  


                <div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Major</label>
					<input type="text" class="fas form-control " name="major" id="formGroupExampleInput2" 
					placeholder="Major" value="major">

					    <span class="invalid-feedback" role="alert">
					        <strong>major</strong>
					    </span>
				
                </div>

                <div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Training</label>
                    <input type="text" class="fas form-control " name="training" id="formGroupExampleInput2" 
					 placeholder="Training" value="training">

					@if ($errors->has('training'))
					    <span class="invalid-feedback" role="alert">
					        <strong>training</strong>
					    </span>
					@endif
                </div>


{{-- 
			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Detail</label>
			    	<input type="text" class="fas form-control " name="detail" id="formGroupExampleInput2" placeholder="Post Title" value="">

			  	</div> --}}

			  	<div class="form-group">
			  		
			    	<input type="#" class="btn btn-outline-primary btn-sm" value="Update">
			    	
			  	</div>

				</form>
			
		</div>
    </div>
        </div>
	</div>
</section>

<script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  @yield('script')

</body>

</html>
</body>
</html>