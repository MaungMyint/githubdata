@extends('backendtemplate')
@section('content')
  <div class="container-fluid">
    <div class="card shadow mb-4">
    <div class="card-header">
      <h4 class="card-title">Edit Service</h4>
      
    </div>
    <div class="card-body">
      <form action="{{route('admin.service.update',$services->id)}}" method="post" enctype="multipart/form-data">
     
        @csrf
        @method('PATCH')
      <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" class="form-control" value="{{$services->name}}">
          </div>  
          <div class="form-group">
            <label>Photo</label>
        <input type="file" name="image">
        <img src="{{$services->image}}" width="100px" height="100px">
        <input type="hidden" name="oldimage" value="{{$services->image}}">
      </div>
     
          <div class="form-group">
            <label>Description</label>
            <input type="text" name="sdescription" class="form-control" value="{{$services->description}}">
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" name="sprice" class="form-control" value="{{$services->price}}">
            </div>
      
     <div class="form-group">
      <label>Choose Organizer</label>
                  <select name="organizer" class="form-control">
                    <option value="">Choose Organizer</option>
                    @foreach($organizers as $organizer)
                    <option value="{{$organizer->id}}"
                      @php 
                      if($services->organizer_id==$organizer->id)
                      echo 'selected';
                      @endphp
                      >
                        {{$organizer->name}}
                      </option>
                    @endforeach
                  </select>
                </div>
      
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success" value="save">
      </div>
    
  </form>
    </div>
    </div>
    
  </div>


@endsection