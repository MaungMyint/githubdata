@extends('index')

@section('middle')
<section class="login-wrapper features">
	<div class="container">
    	<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2 features-content">
        	
        		
        		<form method="post" action="{{route('seekerprofile.update',$user->seekerinfo->id)}}" enctype="multipart/form-data">
				<input name="_method" type="hidden" value="PUT">
				<i class="fas fa-3x text-info">Edit Seeker Profile Form</i><hr>
					@csrf


				<div class="form-group">
					<div class="form-file">
						<label class="file-button fas"><h5>choose profile</h5></label>
	                    <input type="file" class="inputfile" name="your_picture" id="your_picture"  onchange="readURL(this);" data-multiple-caption="{count} files selected" multiple />

	                    <label for="your_picture">
	                        <figure>
	                        	@if($user->seekerinfo->image == 'profilepic')
	                            <img width="100" src="{{ asset('storage/image/profile.jpg') }}" alt="" class="img-auto">
	                            @else
	                            <img width="100" src="{{ asset($user->seekerinfo->image) }}" alt="" class="img-thumbnail">
	                            @endif
	                            <input type="hidden" name="oldprofile" value="{{$user->seekerinfo->image}}" class="img-thumbnail">
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
			    	<input type="text" class="form-control fas{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="formGroupExampleInput2" placeholder="Post Title" value="{{$user->name}}">

					@if ($errors->has('name'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('name') }}</strong>
					    </span>
					@endif
			  	</div>
				
			  	

			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Email</label>
			    	<input type="email" class="form-control fas{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="formGroupExampleInput2" placeholder="Email" value="{{$user->email}}">

					@if ($errors->has('email'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('email') }}</strong>
					    </span>
					@endif
			  	</div>

			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Phone</label>
			    	<input type="text" class="form-control fas{{ $errors->has('phoneno') ? ' is-invalid' : '' }}" name="phoneno" id="formGroupExampleInput2" placeholder="Post Title" value="{{$user->seekerinfo->phoneno}}">

					@if ($errors->has('phoneno'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('phoneno') }}</strong>
					    </span>
					@endif
			  	</div>

			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Address</label>
			    	<input type="text" class="form-control fas{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="formGroupExampleInput2" placeholder="Post Title" value="{{$user->seekerinfo->address}}">

					@if ($errors->has('address'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('address') }}</strong>
					    </span>
					@endif
			  	</div>


			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Detail</label>
			    	<input type="text" class="form-control fas{{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail" id="formGroupExampleInput2" placeholder="Post Title" value="{{$user->seekerinfo->detail}}">

					@if ($errors->has('detail'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('detail') }}</strong>
					    </span>
					@endif
			  	</div>

			  	<div class="form-group">
					<div class="form-file">
	                    
	                    <label for="your_cv">
	                        <figure>
	                        	<label class="file-button fas">Old Cv Form
	                            <a class="btn btn-info fas" href="{{asset($user->seekerinfo->cvform) }}" alt="" target="_blank">View your old cv</a>
	                        </label>

	                            <input type="hidden" name="oldcv" value="{{$user->seekerinfo->cvform}}">
	                        </figure>
	                        <label class="file-button fas">Choose New CV Form
	                        	<input type="file" class="inputfile" name="your_cv" id="your_picture"  multiple />
	                        </label>
	                    </label>
	                </div>
	                @if ($errors->has('your_cv'))
    					<span class="invalid-feedback" role="alert" style="display: block;">
      			  		<strong>{{ $errors->first('your_cv') }}</strong>
   				 		</span>
					@endif
				</div>

			  	<div class="form-group">
			    	<input type="submit" class="btn btn-primary" value="Update">
			  	</div>

				</form>
			
		</div>
	</div>
</section>
@endsection