@extends('maintemplate')
@section('content')
<section class="ftco-section ftco-services-2" id="services-section">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
      <div class="row justify-content-center pb-5">
              <div class="col-md-12 heading-section text-center ftco-animate">
                
                <h2 class="mb-4">Our Services</h2>
                
              </div>
          </div>
          <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
                <a href="{{route('buffy.index')}}">
                  <div class="justify-content-center align-items-center d-flex"><img src="../frontend/images/logo8.jpg" width="300" height="300"></div>

                    <div class="media-body">
                      <h3 class="heading mb-3">BUFFAY</h3>   
                    </div>
                  </a>
                
              </div>      
            </div> <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
                <a href="{{route('buffy.index')}}">
                  <div class="justify-content-center align-items-center d-flex"><img src="../frontend/images/logo7.jpg" width="300" height="300"></div>

                    <div class="media-body">
                      <h3 class="heading mb-3">CAFE</h3>   
                    </div>
                  </a>
                
              </div>      
            </div> 
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
                <a href="{{route('buffy.index')}}">
                  <div class="justify-content-center align-items-center d-flex"><img src="../frontend/images/logo5.jpg" width="300" height="300"></div>

                    <div class="media-body">
                      <h3 class="heading mb-3">MYANMAR FOODS</h3>   
                    </div>
                  </a>
                
              </div>      
            </div> 
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
                <a href="{{route('buffy.index')}}">
                  <div class="justify-content-center align-items-center d-flex"><img src="../frontend/images/logo.jpg" width="300" height="300"></div>

                    <div class="media-body">
                      <h3 class="heading mb-3">TRDITIONAL FOODS</h3>   
                    </div>
                  </a>
                
              </div>      
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
              <a href="{{route('cafe.index')}}">
                <div class="justify-content-center align-items-center d-flex"><img src="../frontend/images/wedd.jpg" width="300" height="300"></div>
                  <div class="media-body">
                    <h3 class="heading mb-3">EURPOE FOODS</h3>
                  </div>
                </a>
              </div>      
            </div>

          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <a href="#">
                <div class="justify-content-center align-items-center d-flex"><img src="../frontend/images/logo3.jpg" width="300" height="300"></div>
             
                  <div class="media-body">
                    <h3 class="heading mb-3">HOME FOODS</h3>
                  </div>
              </a>
               
            </div>      
          </div>
          </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Me</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Address</h3>
				            <p>Yangon</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-phone2"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Contact Number</h3>
				            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email Address</h3>
				            <p><a href="mailto:informic@gmail.com">informic@gmail.com</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Website</h3>
				            <p><a href="#">Informic.com</a></p>
			            </div>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
  </section>
		
	<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div id="map" class="bg-white">
      </div>
	</section>
  @endsection