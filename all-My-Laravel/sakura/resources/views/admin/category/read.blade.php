@extends('backtemplate')
@section('content')
 <div class="card mb-3">
          <div class="card-header">
            
            <h3 class="d-inline-block">Category List</h3>
            <div class="col-lg-2 col-md-2 col-sm-2 float-right">
              <a href="{{ route('category.create')}}" class="btn btn-outline-primary "> 
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
                    <th>id</th>
                    <th>Category Name</th>
                    <th colspan="2">Action</th>
                    
                    
                  </tr>
                </thead>

                <tbody>
                  @foreach($categories as $category)
                  <tr>
                  <td> {{$category->id}}</td>
                  <td>{{ $category->name }}</td>
                 
                    
                     <td>
                      <form action="{{route('category.destroy',$category->id)}}" method="post">
                        @method('Delete')
                        @csrf
                        <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                      </form>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>


@endsection