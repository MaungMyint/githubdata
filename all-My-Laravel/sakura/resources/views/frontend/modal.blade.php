<!-- Modal -->
<div class="modal" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-color:skyblue">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> IN</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <!--Body-->
        <div class="modal-body">
          <form method="POST" action="{{ route('login') }}">
       
        @csrf
          <!--Body-->
          <div class="md-form mb-5">
             <label data-error="wrong" data-success="right" for="Form-email5">Your email</label>
            <input type="email" id="Form-email5" class="form-control validate white-text">
          </div>

          <div class="md-form pb-3">
            <label data-error="wrong" data-success="right" for="Form-pass5">Your password</label>
            <input type="password" id="Form-pass5" class="form-control validate white-text">            
          </div>

          <!--Grid row-->
          <div class="row d-flex align-items-center my-lg-5 mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <input  type="submit" class="btn btn-success btn-block btn-rounded" value="Log in">
            </div>
            <!--Grid column-->

          </div>
           </form>
          <!--Grid row-->
        </div>
     
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->


<!-- for add to order -->
<div class="modal" id="order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-color:skyblue">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Order</strong> <a
              class="green-text font-weight-bold"><strong> Form</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <div class="md-form mb-5">
             <label data-error="wrong" data-success="right">Name</label>
            <input type="text" class="form-control validate white-text">
          </div>

          <div class="md-form pb-3">
            <label data-error="wrong" data-success="right">Qty</label>
            <input type="number" name="quantity" min="1" id="qty" class="form-control validate white-text">            
          </div>
          <!-- Price Per One -->
           <div class="md-form pb-3">
            <label data-error="wrong" data-success="right">Price</label>
            <input type="text" id="price" class="form-control validate">         
          </div>
          <!-- Total Cost -->
          <div class="md-form pb-3">
            <label data-error="wrong" data-success="right">Total Cost</label>
            <input type="number" id="total" class="form-control validate white-text">            
          </div>

          <!--Grid row-->
          <div class="row d-flex align-items-center my-lg-5 mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="button" class="btn btn-success btn-block btn-rounded" id="orderbtn">Order</button>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
