@extends('maintemplate')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('frontend/images/we1.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Wedding</h1>
             <p class="breadcrumbs"><span class="mr-2"><a>Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Wedding <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section">
      <div class="container">
        <div class="row">
          

          <div class="col-md-12 col-lg-12 pr-lg-4">
            <h1>Photographer</h1>
            <div class="row">
              
              @foreach($wed1s as $wed1)
              <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="project">
                  <div class="img">
                    <!-- <div class="vr"><span>Sale</span></div> -->
                    <a href="{{route('detail.show',$wed1->id)}}"><img src="{{$wed1->image}}" height="350px" width="350px" alt="Colorlib Template"></a>
                  </div>
                  <div class="text">
                    <h4 class="price"><!-- <span class="old-price mr-2">$500</span> -->{{$wed1->price}}</h4>
                   <!--  <span>3 nights</span> -->
                    <h3><a href="hotel-single.html">{{$wed1->name}}</a></h3>
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
                  <a href="{{$wed1->image}}" class="icon image-popup d-flex justify-content-center align-items-center">
                    <span class="icon-expand"></span>
                  </a>
                </div>
              </div>

                @endforeach   
               

            </div>
            <h1>Make Up</h1>
            <div class="row">
              
              @foreach($wed2s as $wed2)
              <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="project">
                  <div class="img">
                    <!-- <div class="vr"><span>Sale</span></div> -->
                    <a href="{{route('detail.show',$wed2->id)}}"><img src="{{$wed2->image}}" height="350px" width="350px" alt="Colorlib Template"></a>
                  </div>
                  <div class="text">
                    <h4 class="price"><!-- <span class="old-price mr-2">$500</span> -->{{$wed2->price}}</h4>
                   <!--  <span>3 nights</span> -->
                    <h3><a href="hotel-single.html">{{$wed2->name}}</a></h3>
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
                  <a href="{{$wed2->image}}" class="icon image-popup d-flex justify-content-center align-items-center">
                    <span class="icon-expand"></span>
                  </a>
                </div>
              </div>
                @endforeach     
            </div>
             <h1>Dress</h1>
            <div class="row">
             
              @foreach($wed3s as $wed3)
              <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="project">
                  <div class="img">
                    <!-- <div class="vr"><span>Sale</span></div> -->
                    <a href="{{route('detail.show',$wed3->id)}}"><img src="{{$wed3->image}}" height="350px" width="350px" alt="Colorlib Template"></a>
                  </div>
                  <div class="text">
                    <h4 class="price"><!-- <span class="old-price mr-2">$500</span> -->{{$wed3->price}}</h4>
                   <!--  <span>3 nights</span> -->
                    <h3><a href="hotel-single.html">{{$wed3->name}}</a></h3>
                  </div>
                  <a href="{{$wed3->image}}" class="icon image-popup d-flex justify-content-center align-items-center">
                    <span class="icon-expand"></span>
                  </a>
                </div>
              </div>
                @endforeach     
            </div>
            <h1>Floral</h1>
            <div class="row">
             
              @foreach($wed4s as $wed4)
              <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="project">
                  <div class="img">
                    <!-- <div class="vr"><span>Sale</span></div> -->
                    <a href="{{route('detail.show',$wed4->id)}}"><img src="{{$wed4->image}}" height="350px" width="350px" alt="Colorlib Template"></a>
                  </div>
                  <div class="text">
                    <h4 class="price"><!-- <span class="old-price mr-2">$500</span> -->{{$wed4->price}}</h4>
                   <!--  <span>3 nights</span> -->
                    <h3><a href="hotel-single.html">{{$wed4->name}}</a></h3>
                 
                  </div>
                  <a href="{{$wed4->image}}" class="icon image-popup d-flex justify-content-center align-items-center">
                    <span class="icon-expand"></span>
                  </a>
                </div>
              </div>
                @endforeach     
            </div><h1>Food</h1>
            <div class="row">
             
              @foreach($wed5s as $wed5)
              <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="project">
                  <div class="img">
                    <!-- <div class="vr"><span>Sale</span></div> -->
                    <a href="{{route('detail.show',$wed5->id)}}"><img src="{{$wed5->image}}" height="350px" width="350px" alt="Colorlib Template"></a>
                  </div>
                  <div class="text">
                    <h4 class="price"><!-- <span class="old-price mr-2">$500</span> -->{{$wed5->price}}</h4>
                   <!--  <span>3 nights</span> -->
                    <h3><a href="hotel-single.html">{{$wed5->name}}</a></h3>
                  </div>
                  <a href="{{$wed5->image}}" class="icon image-popup d-flex justify-content-center align-items-center">
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