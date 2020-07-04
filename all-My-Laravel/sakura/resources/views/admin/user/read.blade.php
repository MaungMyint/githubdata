@extends('backtemplate')
@section('content')
   <div class="card mb-3">
          <div class="card-header">
            
            <h3 class="d-inline-block">User List</h3>
            <div class="col-lg-2 col-md-2 col-sm-2 float-right">
              <a href="{{ route('userdetail.create')}}" class="btn btn-outline-primary "> 
              <i class="fas fa-plus"></i>
              Add New 
              </a>
            </div>
          </div>  
            
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Head Id</th>
                    <th>Nrc Number</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th colspan="2">Action</th>
                    
                  </tr>
                </thead>
                <tbody>

                  
                	@foreach ($user_details as $userdetail)

                  
	                  <tr>
	                   <td>{{$userdetail->user->name}}</td>
                     <td>{{$userdetail->user->email}}</td>
                     <td>{{$userdetail->head_id}}</td>
                     <td>{{$userdetail->nrc}}</td>
                     <td>{{$userdetail->phone}}</td>
                     <td>{{$userdetail->address}}</td>
                     <td>{{$userdetail->gender}}</td>
	                   
                     <td><a href="{{route('userdetail.edit',$userdetail->id)}}" class="btn bg-success" value="Edit">Edit</a></td>
                     <td>
                      <form action="{{route('userdetail.destroy',$userdetail->id)}}" method="post">
                        @method('Delete')
                        @csrf
                        <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                      </form>
                    </td>
       
	                  </tr>
	                   
	                </tbody>
	                @endforeach
            
              </table>
            </div>
          </div>
          
       </div>
@endsection