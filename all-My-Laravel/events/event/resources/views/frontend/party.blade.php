@extends('maintemplate')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('frontend/images/resto-3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Party</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="/#home-section">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Party <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section">
      <div class="container">
        <div class="row">
          

          <div class="col-md-12 col-lg-12 pr-lg-4">
            <h1>Floral</h1>
            <div class="row">
              @foreach($florals as $floral)
              <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="project">
                  <div class="img">
                    <!-- <div class="vr"><span>Sale</span></div> -->
                    <a href="{{route('detail.show',$floral->id)}}"><img src="{{$floral->image}}" height="350px" width="350px" alt="Colorlib Template"></a>
                  </div>
                  <div class="text">
                    <h4 class="price"><!-- <span class="old-price mr-2">$500</span> -->{{$floral->price}}</h4>
                   <!--  <span>3 nights</span> -->
                    <h3><a href="hotel-single.html">{{$floral->name}}</a></h3>
                    <!-- <div class="star d-flex clearfix">
                      <div class="mr-auto float-left">
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                      </div>
                      <div class="float-right">
                        <span class="rate"><a href="#">(120)</a></span>
                      </div>
                    </div> -->
                  </div>
                  <a href="{{$floral->image}}" class="icon image-popup d-flex justify-content-center align-items-center">
                    <span class="icon-expand"></span>
                  </a>
                </div>
              </div>
                @endforeach     
            </div>
            <h1>Food</h1>
            <div class="row">
              @foreach($partys as $party)
              <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="project">
                  <div class="img">
                    <!-- <div class="vr"><span>Sale</span></div> -->
                    <a href="{{route('detail.show',$floral->id)}}"><img src="{{$party->image}}" height="350px" width="350px" alt="Colorlib Template"></a>
                  </div>
                  <div class="text">
                    <h4 class="price"><!-- <span class="old-price mr-2">$500</span> -->{{$party->price}}</h4>
                   <!--  <span>3 nights</span> -->
                    <h3>{{$party->name}}</h3>
                    <!-- <div class="star d-flex clearfix">
                      <div class="mr-auto float-left">
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                      </div>
                      <div class="float-right">
                        <span class="rate"><a href="#">(120)</a></span>
                      </div>
                    </div> -->
                  </div>
                  <a href="{{$party->image}}" class="icon image-popup d-flex justify-content-center align-items-center">
                    <span class="icon-expand"></span>
                  </a>
                </div>
              </div>
                @endforeach     
            </div>
          </div> <!-- end -->
        <!-- end -->
      

        </div>
      </div>
    </section>



@endsection