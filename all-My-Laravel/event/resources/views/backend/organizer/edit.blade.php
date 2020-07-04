@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<div class="card shadow mb-4">
		<div class="card-header">
			<h4 class="card-title">Edit Artists</h4>
			
		</div>
		<div class="card-body">
			<form action="{{route('admin.organizer.update',$organizers->id)}}" method="post" enctype="multipart/form-data">
			
				@csrf
				@method('PATCH')
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="oname" class="form-control" value="{{$organizers->name}}">
			</div>	
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="oaddress" class="form-control" value="{{$organizers->address}}">
			</div>
			<div class="form-group">
				<label>PhoneNo</label>
				<input type="text" name="ophoneno" class="form-control" value="{{$organizers->phoneno}}">
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea name="odescription" class="form-control">{{$organizers->description}}</textarea>
				
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="oemail" class="form-control" value="{{$organizers->email}}">
			</div>
			<div class="form-group">
				<label>Logo</label>
				<input type="file" name="image">
				<img src="{{$organizers->image}}"  width="100px" height="100px">
				<input type="hidden" name="oldimage" value="{{$organizers->image}}">
			</div>
			 <div class="form-group">
			 	<label>Choose Category</label>
                  <select name="category" class="form-control">
                    <option value="">Choose Category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}"
                      @php 
                      if($organizers->category_id==$category->id)
                      echo 'selected';
                      @endphp
                      >
                        {{$category->name}}
                      </option>
                    @endforeach
                  </select>
                </div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-success" value="update">
			</div>
		
	</form>
		</div>
		</div>
		
	</div>


@endsection