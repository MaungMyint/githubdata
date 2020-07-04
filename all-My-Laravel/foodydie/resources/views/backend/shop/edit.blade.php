@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<div class="card shadow mb-4">
		<div class="card-header">
			<h4 class="card-title">Edit Category</h4>
			
		</div>
		<div class="card-body">
			<form action="{{route('admin.shop.update',$shops->id)}}" method="post">
			<h1>Shops Form</h1>
				@csrf
				@method('PATCH')

		<div class="form-group">
        <label>Photo</label>
        <input type="file" name="image">
        <img src="{{$shops->image}}" width="100px" height="100px">
				<input type="hidden" name="oldimage" value="{{$shops->image}}">
      </div>

  <div class="form-group">
        <label>Name</label><input type="text" name="ename" class="form-control" value="{{$shops->name}}">
      </div>  
      <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="ecategory">
               @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}
                </option>
                @endforeach
            </select>
          </div>
      <div class="form-group">
        <label>PhoneNo</label>
        <input type="text" name="ephone" value="{{$shops->phone}}" class="form-control">
      </div>
      <div class="form-group">
        <label>Open Time</label>
        Time : <input class="em-time-input em-time-start form-control" type="text" name="eopen" value="{{$shops->open}}" />
      </div>
      <div class="form-group">
        <label>Close Time</label>
        Time : <input class="em-time-input em-time-start form-control" type="text" name="eclose" value="{{$shops->close}}" />
      </div>
      <div class="form-group">
        <label>Open Date</label>
        <input type="date" name="edate" value="{{$shops->odate}}" class="form-control">
      </div>

			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-success" value="update">
			</div>
		
	</form>
		</div>
		</div>
		
	</div>


@endsection