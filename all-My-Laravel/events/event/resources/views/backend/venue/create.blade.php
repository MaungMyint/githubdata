@extends('backendtemplate')
@section('content')

<form action="{{route('admin.venue.store')}}" method="post" enctype="multipart/form-data">
  <h1>Venue Lists</h1>
  @csrf
  <div class="form-group">
        <label>Name</label>
        <input type="text" name="vname" class="form-control">
      </div>  
      <div class="form-group">
        <label>Photo</label>
        <input type="file" name="image">
      </div>
     
      <div class="form-group">
        <label>Amount</label>
        <input type="text" name="vamount" class="form-control">
      </div>
      <div class="form-group">
        <label>Price</label>
        <input type="text" name="vprice" class="form-control">
      </div>
      
      
      
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success" value="save">
      </div>
  
</form>

    
  
@endsection