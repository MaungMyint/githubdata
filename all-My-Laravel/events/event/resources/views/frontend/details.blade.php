@extends('maintemplate')
@section('content')
<!--  -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>


<section class="hero-wrap hero-wrap-2" style="background-image: url('../frontend/images/flo4.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Best Design</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="/#home-section">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Floral <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
      <section class="ftco-section">
      <div class="container">
        <div class="row">
           
          <div class="col-md-12 room-wrap">
            <div class="row">
              <div class="col-md-7 d-flex ftco-animate">
                <div class="img align-self-stretch" style="background-image: url({{$floral->image}});"></div>
              </div>
              <div class="col-md-5 ftco-animate">
                <div class="text py-5">
                  <h3><a href="#">{{$floral->name}}</a></h3>
                  <p class="pos"><span class="price">{{$floral->price}}</span></p>
                  <p>{{$floral->description}}</p>
                  <p><a href="#" class="addtocard btn btn-secondary" data-id="{{$floral->id}}" data-name="{{$floral->name}}" data-price="{{$floral->price}}" data-image="{{$floral->image}}" data-organizerid="{{ $floral->organizer_id }}" data-serviceid="{{$floral->service_id}}", data-venuesid="{{ $floral->venues_id }}">Add To Cart</a> <a href="{{route('floral.index')}}" class="btn btn-primary">Cancel</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>   
        </div>
      </div>
      </section> 

@endsection