@extends('backendtemplate')
@section('content')
<h1>Category Lists</h1>
<a href="#add" title="" class="btn btn-success" data-toggle="modal">Add New</a>

<table class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
      <th>Potential</th>
      <th>Amount Paid</th>
      <th>Extra cost</th>
      <th>Event</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
    @php $i=1;
    @endphp
@foreach($eventdetails as $eventdetail)		
<tr>
			<td>{{$i}}</td>
	     <td>{{$eventdetail->potential_cost}}</td>
       <td>{{$eventdetail->amount_paid}}</td>
       <td>{{$eventdetail->extra_paid}}</td>
       <td>{{$eventdetail->events_id}}</td>
			<td>
        <a href="#edit" data-id="{{$eventdetail->id}}" data-name="{{$eventdetail->potential_cost}}" class="btn btn-info" >Edit</a>
      </td>
      <td>
        <form action="{{route('admin.eventdetail.destroy',$eventdetail->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" name="btndelete" value="Delete" class="btn btn-danger">
        </form>
      </td>
      @php $i++;
      @endphp
		</tr>
		@endforeach

	</tbody>
</table>

<!-- Add Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{route('admin.eventdetail.store')}}" method="post" encrypt="multipart/form-data">
        	@csrf
        <div class="modal-body">
          <div class="form-group">
        	<input type="text" class="form-control" name="potential" placeholder="enter potential cost" >
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="amountpaid" placeholder="enter amount paid" >
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="extra" placeholder="enter extra cost" >
        </div>
        
       </div>
        
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
        </div>
    </form>
      </div>
    </div>
  </div>


  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit New </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="post">
          @csrf
          @method('PATCH')
        <div class="modal-body">
          <div class="form-group">
          <input type="text" class="form-control" name="potential" id="editname">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="amountpaid">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="extra" >
        </div>
        <!--  <div class="form-group">
                  <select name="event" class="form-control">
                    <option value="">Choose Event</option>
                    
                  </select>
                </div>
          </div> -->


       </div>
        
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
        </div>
    </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    
    $(document).ready(function(){
      $('.edit').click(function(){
        //alert('ok');
        var id=$(this).data('id');
        var name=$(this).data('name');

        $('#editid').val(id);
        $('#editname').val(name);
        $('#edit').modal('show');

      })
    });

  </script>

  
@endsection