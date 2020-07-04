@extends('admin.backendtemplate')
@section('content')

<section class="login-wrapper features">
	<div class="container">
        <div class="container">
            <div class="container">
    	<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2 features-content">
        	
        		
        		<form method="post" action="{{route('admin.mystd.update',$students->id)}}" enctype="multipart/form-data">
				<input name="_method" type="hidden" value="PUT">
				<i class="fas fa-3x text-info">Profile Upload</i><hr>
					@csrf


				<div class="form-group">
					<div class="form-file">
					<label class="fas text-info">Choose Your Profile</label>
	                    <input type="file" class="btn-info inputfile" name="your_picture" id="your_picture"  onchange="readURL(this);" data-multiple-caption="{count} files selected" multiple />
	                    <label for="your_picture">
                                <figure>
                                    @if($students->image == 'profilepic')
									<img src="{{ asset('storage/image/avatar.png') }}" 
									alt="" width="100" class="your_picture_image">
                                    @else
                                    <img src="{{ asset($students->image) }}" alt="" width="100" class="your_picture_image">
                                    @endif
                                    <input type="hidden" name="oldprofile" value="{{$students->image}}">
                                </figure>
                                  	                        
	                    </label>
	                </div>
                </div>
                
                



                <div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Name</label>
                    <input type="text" class="fas form-control {{ $errors->has('name') ?
                     ' is-invalid' : '' }}" name="name" id="formGroupExampleInput2" 
                     placeholder="Student Name" value="{{$students->name}}">

					@if ($errors->has('name'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('name') }}</strong>
					    </span>
					@endif
                </div>
                  

                <div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Degree</label>
					<input type="text" class="fas form-control {{ $errors->has('degree')
					 ? ' is-invalid' : '' }}" name="degree" id="formGroupExampleInput2" 
					 placeholder="Student Degree" value="{{$students->degree}}">

					@if ($errors->has('degree'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('degree') }}</strong>
					    </span>
					@endif
			  	</div>


                <div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Major</label>
					<input type="text" class="fas form-control {{ $errors->has('major') 
					? ' is-invalid' : '' }}" name="major" id="formGroupExampleInput2" 
					placeholder="Major" value="{{$students->major}}">

					@if ($errors->has('major'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('major') }}</strong>
					    </span>
					@endif
                </div>

                <div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Training</label>
                    <input type="text" class="fas form-control {{ $errors->has('training')
					 ? ' is-invalid' : '' }}" name="training" id="formGroupExampleInput2" 
					 placeholder="Training" value="{{$students->training}}">

					@if ($errors->has('training'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('training') }}</strong>
					    </span>
					@endif
                </div>

                <div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Course</label>
                    <input type="text" class="fas form-control {{ $errors->has('course')
                     ? ' is-invalid' : '' }}" name="course" id="formGroupExampleInput2" 
                     placeholder="Course" value="{{$students->course}}">

					@if ($errors->has('course'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('course') }}</strong>
					    </span>
					@endif
                </div>

                <div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Phone Number</label>
                    <input type="text" class="fas form-control {{ $errors->has('phonenumber')
                     ? ' is-invalid' : '' }}" name="phonenumber" id="formGroupExampleInput2" 
                     placeholder="phone number" value="{{$students->phonenumber}}">

					@if ($errors->has('phonenumber'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('phonenumber') }}</strong>
					    </span>
					@endif
                </div>
                  
                <div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Email</label>
					<input type="email" class="fas form-control" name="gmail"
					 id="formGroupExampleInput2" 
                    placeholder="Email" value="{{ $students->gmail }}">

					
					@if ($errors->has('gmail'))
					    <span class="invalid-feedback" role="alert">
					        <strong>{{ $errors->first('gmail') }}</strong>
					    </span>
					@endif
				
			  	</div>

			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Address</label>
                    <input type="text" class="fas form-control " name="address" id="formGroupExampleInput2"
                     placeholder="Address" value="{{ $students->address }}">

                     @if ($errors->has('address'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('address') }}</strong>
                     </span>
                 @endif
             
			
			  	</div>

			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Password</label>
                    <input type="text" class="fas form-control" name="password"
                     id="formGroupExampleInput2" placeholder="Password" value="{{ $students->password }}">

					
					
                     @if ($errors->has('password'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('password') }}</strong>
                     </span>
                 @endif
             
			  	</div>

{{-- 
			  	<div class="form-group">
			    	<label for="formGroupExampleInput2" class="fas">Detail</label>
			    	<input type="text" class="fas form-control " name="detail" id="formGroupExampleInput2" placeholder="Post Title" value="">

			  	</div> --}}

			  	<div class="form-group">
			  		
			    	<input type="submit" class="btn btn-outline-primary btn-sm" value="Update">
			    	
			  	</div>

				</form>
			
		</div>
    </div>
        </div>
	</div>
</section>
@endsection