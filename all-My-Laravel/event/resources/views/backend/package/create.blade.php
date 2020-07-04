@extends('backendtemplate')
@section('content')

<form action="{{route('admin.package.store')}}" method="post" enctype="multipart/form-data">
  <h1>Package Lists</h1>
  @csrf
  <div class="form-group">
        <label>Name</label>
        <input type="text" name="pname" class="form-control">
      </div>  
      <div class="form-group">
        <label>Photo</label>
        <input type="file" name="image">
      </div>
    
      <div class="form-group">
            <label>Organizer</label>
            <select class="form-control" name="organizer">
              <option>Choose Organizer</option>
                @foreach($organizers as $organizer)
                <option value="{{$organizer->id}}">{{$organizer->name}}
                </option>
                @endforeach
            </select>
          </div>
           <div class="form-group">
            <label>Service</label>
            <select class="form-control" name="service">
              <option>Choose Service</option>
                @foreach($services as $service)
                <option value="{{$service->id}}">{{$service->name}}
                </option>
                @endforeach
            </select>
          </div>
           <div class="form-group">
            <label>Venues</label>
            <select class="form-control" name="venues">
              <option>Choose Venues</option>
                @foreach($venues as $venue)
                <option value="{{$venue->id}}">{{$venue->name}}
                </option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category">
              <option>Choose Category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}
                </option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
        <label>Price</label>
        <input type="text" name="pprice" class="form-control">
      </div>  
      
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success" value="save">
      </div>
  
</form>

    
  
@endsection