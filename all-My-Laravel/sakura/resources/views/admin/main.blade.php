@extends('backtemplate')
@section('content')
   <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Type Name</th>
                    <th>Description</th>
                    
                  </tr>
                </thead>

                  @foreach ($products as $product)
                
                <tbody>
                  <tr>
                    <td>Thor Walton</td>
                    <td>Developer</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2013/08/11</td>
                    
                  </tr>

                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
       </div>
@endsection