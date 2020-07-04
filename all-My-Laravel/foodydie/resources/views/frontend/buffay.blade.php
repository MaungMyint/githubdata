@extends('maintemplate')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('frontend/images/flo4.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Floral</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="/#home-section">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Buffay <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
          <div class="container">
          <div class="container">
          <div class="container">
            <div class="row">
              

              <div class="col-md-12 col-lg-12 pr-lg-4">
                <div class="row">
                  @foreach($shops as $shop)
                  <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="project">
                      <div class="img">
                        <!-- <div class="vr"><span>Sale</span></div> -->
                        <a href="#"><img src="{{$shop->image}}" height="350px" width="350px" alt="Colorlib Template"></a>
                      </div>
                      <div class="text">
                        <h4 class="price"><!-- <span class="old-price mr-2">$500</span> -->15% Discount</h4>
                       <!--  <span>3 nights</span> -->
                        <h3 class="my-1">
                        <label>Name:</label>  
                        <a href="#">{{$shop->name}}</a></h3>
                        <h3 class="my-1">
                        <label>Category:</label>  
                        <a href="hotel-single.html">{{$shop->category->name}}</a></h3>
                        <h3 class="my-1">
                        <label>Phone No.:</label>  
                        <a href="hotel-single.html">{{$shop->phone}}</a></h3>
                        <h3 class="my-1">
                        <label style="font-size:bold;color:green;">FROM:&nbsp;</label>
                        <a href="hotel-single.html">{{$shop->open}}</a>
                        <label style="font-size:bold;color:red;">TO:&nbsp;</label>
                        <a href="hotel-single.html">{{$shop->open}}</a>
                        <h3 class="my-1">
                        <label>Open Date:</label>
                        <a href="hotel-single.html">{{$shop->odate}}</a></h3>
                       

                        </div>
                      <a href="{{$shop->image}}" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                      </a>
                    </div>
                  </div>
                    @endforeach     
                </div>         
              </div>          
            </div>
          </div>
          </div>
          </div>
    </section>

@endsection