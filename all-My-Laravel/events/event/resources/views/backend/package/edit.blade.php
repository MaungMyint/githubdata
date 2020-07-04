@extends('backendtemplate')
@section('content')
  <div class="container-fluid">
    <div class="card shadow mb-4">
    <div class="card-header">
      <h4 class="card-title">Edit Package</h4>
      
    </div>
    <div class="card-body">
      <form action="{{route('admin.package.update',$packages->id)}}" method="post" enctype="multipart/form-data">
      
        @csrf
        @method('PATCH')
      <div class="form-group">
            <label>Name</label>
            <input type="text" name="pname" class="form-control" value="{{$packages->name}}">
          </div>  
          <div class="form-group">
            <label>Photo</label>
        <input type="file" name="image">
        <img src="{{$packages->image}}" width="100px" height="100px">
        <input type="hidden" name="oldimage" value="{{$packages->image}}">
      </div>
      <div class="form-group">
        <label>Choose Organizer</label>
                  <select name="organizer" class="form-control">
                    <option value="">Choose Organizer</option>
                    @foreach($organizers as $organizer)
                    <option value="{{$organizer->id}}"
                      @php 
                      if($packages->organizer_id==$organizer->id)
                      echo 'selected';
                      @endphp
                      >
                        {{$organizer->name}}
                      </option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Choose Service</label>
                  <select name="service" class="form-control">
                    <option value="">Choose Service</option>
                    @foreach($services as $service)
                    <option value="{{$service->id}}"
                      @php 
                      if($packages->service_id==$service->id)
                      echo 'selected';
                      @endphp
                      >
                        {{$service->name}}
                      </option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Choose Venue</label>
                  <select name="venue" class="form-control">
                    <option value="">Choose Venue</option>
                    @foreach($venues as $venue)
                    <option value="{{$venue->id}}"
                      @php 
                      if($packages->venues_id==$venue->id)
                      echo 'selected';
                      @endphp
                      >
                        {{$venue->name}}
                      </option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Choose Category</label>
                  <select name="category" class="form-control">
                    <option value="">Choose category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}"
                      @php 
                      if($packages->category_id==$category->id)
                      echo 'selected';
                      @endphp
                      >
                        {{$category->name}}
                      </option>
                    @endforeach
                  </select>
                </div>
     
          
          <div class="form-group">
            <label>Price</label>
            <input type="text" name="pprice" class="form-control" value="{{$packages->price}}">
            </div>
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success" value="update">
      </div>
    
  </form>
    </div>
    </div>
    
  </div>


@endsection