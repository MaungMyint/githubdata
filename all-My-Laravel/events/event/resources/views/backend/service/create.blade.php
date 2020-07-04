@extends('backendtemplate')
@section('content')

<form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
  <h1>Service Lists</h1>
  @csrf
  <div class="form-group">
        <label>Name</label>
        <input type="text" name="sname" class="form-control">
      </div>  
      <div class="form-group">
        <label>Photo</label>
        <input type="file" name="image">
      </div>
     
      <div class="form-group">
        <label>Description</label>
        <input type="text" name="sdescription" class="form-control">
      </div>
      <div class="form-group">
        <label>Price</label>
        <input type="text" name="sprice" class="form-control">
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
        <input type="submit" name="submit" class="btn btn-success" value="save">
      </div>
  
</form>

    
  
@endsection