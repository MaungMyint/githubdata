@extends('backendtemplate')
@section('content')

<form action="{{route('admin.category.store')}}" method="post">
  <h1>Category Lists</h1>
  @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="cname" required="required" class="form-control">
  </div>
  <div class="form-group">
    <input type="submit" name="submit" class="btn btn-success" value="Save">
  </div>
  
</form>

    
  
@endsection