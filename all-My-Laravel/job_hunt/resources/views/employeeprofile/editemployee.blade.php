@extends('index')

@section('middle')
<section class="login-wrapper features">
	<div class="container">
    	<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2 features-content">
        	
        		
        		<form method="post" action="{{route('employeeprofile.update',$user->employeeinfo->id)}}" enctype="multipart/form-data">
				<input name="_method" type="hidden" value="PUT">
				<i class="fas fa-3x text-info">Profile Upload</i><hr>
					@csrf


				<div class="form-group">
					<div class="form-file">
						<label class="fas text-info">Choose Your Profile</label>
	                    <input type="file" class="btn-info inputfile" name="your_picture" id="your_picture"  onchange="readURL(this);" data-multiple-caption="{count} files selected" multiple />
	                    <label for="your_picture">
	                        <figure>
	                        	@if($user->employeeinfo->image == 'profilepic')
	                            <img src="{{ asset('storage/image/profile.jpg') }}" alt="" width="100" class="your_picture_image">
	                            @else
	                            <img src="{{ asset($user->employeeinfo->image) }}" alt="" width="100" class="your_picture_image">
	                            @endif
	                            <input type="hidden" name="oldprofile" value="{{$user->employeeinfo->image}}">
	                        </figure>
	                        
	                    </label>
	                </div>
	                @if ($errors->has('your_picture'))
    					<span class="invalid-feedback" role="alert" style="display: block;">
      			  		<strong>{{ $errors->first('your_picture') }}</strong>
   				 		</span>
					@endif
				</div>


				<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Name</label>
			    	<input type="text" class="fas form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="formGroupExampleInput2" placeholder="Post Title" value="{{$user->name}}">

					@if ($errors->has('name'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('name') }}</strong>
					    </span>
					@endif
			  	</div>
				
			  	

			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Email</label>
			    	<input type="email" class="fas form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="formGroupExampleInput2" placeholder="Email" value="{{$user->email}}">

					@if ($errors->has('email'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('email') }}</strong>
					    </span>
					@endif
			  	</div>

			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Phone</label>
			    	<input type="text" class="fas form-control {{ $errors->has('phoneno') ? ' is-invalid' : '' }}" name="phoneno" id="formGroupExampleInput2" placeholder="Post Title" value="{{$user->employeeinfo->phoneno}}">

					@if ($errors->has('phoneno'))
					    <span class="fas invalid-feedback" role="alert">
					        <strong>{{ $errors->first('phoneno') }}</strong>
					    </span>
					@endif
			  	</div>

			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Address</label>
			    	<input type="text" class="fas form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="formGroupExampleInput2" placeholder="Post Title" value="{{$user->employeeinfo->address}}">

					@if ($errors->has('address'))
					    <span class="fas invalid-feedback" role="alert">
					        <strong>{{ $errors->first('address') }}</strong>
					    </span>
					@endif
			  	</div>


			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Detail</label>
			    	<input type="text" class="fas form-control {{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail" id="formGroupExampleInput2" placeholder="Post Title" value="{{$user->employeeinfo->detail}}">

					@if ($errors->has('detail'))
					    <span class="fas invalid-feedback" role="alert">
					        <strong>{{ $errors->first('detail') }}</strong>
					    </span>
					@endif
			  	</div>

			  	<div class="form-group">
			  		
			    	<input type="submit" class="btn btn-info" value="Update">
			    	
			  	</div>

				</form>
			
		</div>
	</div>
</section>
@endsection