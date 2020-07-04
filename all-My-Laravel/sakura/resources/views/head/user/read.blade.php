@extends('backtemplate')
@section('content')
   <div class="card mb-3">
          <div class="card-header">
            
            <h3 class="d-inline-block">Member List</h3>
            <div class="col-lg-2 col-md-2 col-sm-2 float-right">
              <a href="{{ route('user.create')}}" class="btn btn-outline-primary "> 
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
                    <th>Member ID</th>                    
                    <th>Nrc Number</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th colspan="2">Action</th>
                    
                  </tr>
                </thead>
                   @foreach ($members as $member)

                  
                  
                    <tr>
                     <td>{{$member->user->name}}</td>
                     <td>{{$member->user->email}}</td>
                     <td>{{$member->head_id}}</td>
                     <td>{{$member->nrc}}</td>
                     <td>{{$member->phone}}</td>
                     <td>{{$member->address}}</td>
                     <td>{{$member->gender}}</td>
                     
                     <td><a href="{{route('user.edit',$member->id)}}" class="btn bg-success" value="Edit">Edit</a></td>
                     <td>
                      <form action="{{route('user.destroy',$member->id)}}" method="post">
                        @method('Delete')
                        @csrf
                        <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                      </form>
                    </td>
       
                    </tr>
                     
                  </tbody>
                  @endforeach
                <tbody>

                  
                	
            
              </table>
            </div>
          </div>
          
       </div>
@endsection