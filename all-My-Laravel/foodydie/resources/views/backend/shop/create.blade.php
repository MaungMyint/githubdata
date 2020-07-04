@extends('backendtemplate')
@section('content')

<form action="{{route('admin.shop.store')}}" method="post" enctype="multipart/form-data">
  <h1>Shops Lists</h1>
  @csrf

      <div class="form-group">
        <label>Photo</label>
        <input type="file" name="image">
      </div>

  <div class="form-group">
        <label>Name</label>
        <input type="text" name="oname" class="form-control">
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
        <label>PhoneNo</label>
        <input type="text" name="ophoneno" class="form-control">
      </div>
      <div class="form-group">
        <label>Open Time</label>
        <select name="otime" id="typename" class="form-control" lable="choose file">
          <option selected="selected" value="24 ">24 services</option>
          <option value="From 4:00 AM">4:00 AM</option>
          <option value="From 5:00 AM">5:00 AM</option>
          <option value="From 6:00 AM">6:00 AM</option>
          <option value="From 7:00 AM">7:00 AM</option>
          <option value="From 8:00 AM">8:00 AM</option>
          <option value="From 9:00 AM">9:00 AM</option>
          <option value="From 10:00 AM">10:00 AM</option>
          <option value="From 11:00 AM">11:00 AM</option>
          <option value="From 12:00 AM">12:00 AM</option>
          <option value="To 1:00 PM">1:00 PM</option>
          <option value="To 2:00 PM">2:00 PM</option>
          <option value="To 3:00 PM">3:00 PM</option>
          <option value="To 4:00 PM">4:00 PM</option>
          <option value="To 5:00 PM">5:00 PM</option>
          <option value="To 6:00 PM">6:00 PM</option>
          <option value="To 7:00 PM">7:00 PM</option>
          <option value="To 8:00 PM">8:00 PM</option>
        </select>
      </div>
      <div class="form-group">
        <label>Close Time</label>
        <select name="close" id="typename" class="form-control" lable="choose file">
          <option selected="selected" value="Services">24 services</option>
          <option value="From 4:00 AM">4:00 AM</option>
          <option value="From 5:00 AM">5:00 AM</option>
          <option value="From 6:00 AM">6:00 AM</option>
          <option value="From 7:00 AM">7:00 AM</option>
          <option value="From 8:00 AM">8:00 AM</option>
          <option value="From 9:00 AM">9:00 AM</option>
          <option value="From 10:00 AM">10:00 AM</option>
          <option value="From 11:00 AM">11:00 AM</option>
          <option value="From 12:00 AM">12:00 AM</option>
          <option value="To 1:00 PM">1:00 PM</option>
          <option value="To 2:00 PM">2:00 PM</option>
          <option value="To 3:00 PM">3:00 PM</option>
          <option value="To 4:00 PM">4:00 PM</option>
          <option value="To 5:00 PM">5:00 PM</option>
          <option value="To 6:00 PM">6:00 PM</option>
          <option value="To 7:00 PM">7:00 PM</option>
          <option value="To 8:00 PM">8:00 PM</option>
        </select>
      </div>
      <div class="form-group">
        <label>Open Date</label>
        <input type="date" name="odate" class="form-control">
      </div>
      
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success" value="save">
      </div>
  
</form>

    
  
@endsection