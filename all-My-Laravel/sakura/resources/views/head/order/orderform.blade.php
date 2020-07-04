@extends('backtemplate')
@section('content')
   <div class="card mb-3">
    
            
          <div class="card-body">
            <div class="table-responsive">
              <div class="col-lg-12 col-sm-12">
                <form action="{{ route('order.store')}}" method="post" enctype="multipart/form-data">
       
                    @csrf
                    <div class="form-group">
                        
                      <label class="col-lg-4 col-sm-12">Product Name:</label>

                      <div class="col-lg-8 col-sm-12">
                        <select name="product" class="form-control" id="p_price">
                          <option value="">Select Product Name</option>
                          @foreach($products as $product)
                          <option value="{{ $product->id }}" data-price="{{$product->price}}">
                          {{$product->product_name}} </option>
                          @endforeach
                        </select>
                      </div>  
                       
                    </div>


                    <div class="form-group">
                      <div class="col-lg-8 col-sm-12">
                        <label data-error="wrong" data-success="right" class="col-lg-4 col-sm-12">Qty</label>
                        <input type="number" name="qty" min="1" id="qty" class="form-control validate white-text">
                       </div>
                    </div>

                    <div class="form-group">
                        
                      <div class="col-lg-8 col-sm-12">
                      <label data-error="wrong" data-success="right" class="col-lg-4 col-sm-12">Price</label>
                      <input type="text" name="pri" id="price" class="form-control validate"> 
                      <input type="hidden" name="unitprice" id="unitprice">        
                    </div>
                       
                    </div>
                      <div class="form-group">
                        
                      <div class="col-lg-8 col-sm-12">
                      <label data-error="wrong" data-success="right" class="col-lg-4 col-sm-12">Total Price</label>
                      <input type="text" id="total" name="total" class="form-control validate">         
                    </div>
                       
                    </div>


                    <div class="form-group">
                         <div class="col-lg-8 col-sm-12">
                            <input type="submit" value="Save" name="btnsubmit" class="btn btn-success">
                           
                        </div>
                    </div>

                </form>
              </div>
            </div>  
          </div>
    </div>
         
       

@endsection

@section('script')
<script type="text/javascript">
        
        $(document).ready(function() {
       
           
            $('#p_price').change(function () {
              $('#p_price option:selected').each(function () {
                var price = $(this).data('price');
                $('#price').val(price);
                $('#unitprice').val(price);
              })
            })



            $("#qty").keyup(function () {
                var qty=$('#qty').val();
                var unitprice = $('#unitprice').val();
                var uprice = $('#price').val();
                // alert(price);
                if(1<=qty && qty<=10){
                    var price=unitprice;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                }
                else if(10<qty && qty<=30){
                    var price=unitprice - 200;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                }
                else if(30<qty && qty<=50){
                    var price=unitprice - 400;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                } 
                else if(50<qty && qty<=100){
                    var price=unitprice - 600;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                } 
                else if(100<qty && qty<=200){
                    var price=unitprice - 700;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                }
                else if(200<qty && qty<=300){
                    var price=unitprice - 750;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                }  
                else if(300<qty && qty<=400){
                    var price=unitprice - 800;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                }  
                else if(400<qty && qty<=500){
                    var price=unitprice - 900;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                }  
                else if(500<qty && qty<=800){
                    var price=unitprice - 950;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                }  
                else if(800<qty && qty<=1000){
                    var price=unitprice - 1000;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                }  
                else if(1000<qty && qty<=2000){
                    var price=unitprice - 1050;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                }  
            })
        })
    </script>

@endsection