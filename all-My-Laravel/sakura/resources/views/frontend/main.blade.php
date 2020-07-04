@extends('frontendtemplate')
@section('contents')
<body style="background-color:pink;">
  
    <!-- slide area -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/slide1.jpg" class="d-block w-100" height="700" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../images/slide2.jpg" class="d-block w-100" height="700" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../images/slide3.jpg" class="d-block w-100" height="700" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>      
    </section>
    <!-- end of slide --> 
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card my-lg-5">
                    <h5 class="card-title mt-1" style="font-size: 25px;text-align: center;">Lotion</h5>
                    <img  height="200" class="card-img-top" src="{{asset('images/s1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" data-toggle="modal" data-target="#order"  id="addbtn" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-lg-5">
                    <h5 class="card-title m-1" style="font-size: 25px;text-align: center;">Mask</h5>
                    <img height="200" class="card-img-top" src="{{asset('images/s2.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" data-toggle="modal" data-target="#order"  id="addbtn" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-lg-5">
                    <h5 class="card-title m-1" style="font-size: 25px;text-align: center;">Collagen</h5>
                    <img height="200" class="card-img-top" src="{{asset('images/s3.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" data-toggle="modal" data-target="#order"  id="addbtn" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-lg-5 m-1">
                    <h5 class="card-title" style="font-size: 25px;text-align: center;">Scrub</h5>
                    <img height="200" class="card-img-top"src="{{asset('images/s5.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" data-toggle="modal" data-target="#order"  id="addbtn" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-lg-5 m-1">
                    <h5 class="card-title" style="font-size: 25px;text-align: center;">Serum</h5>
                    <img height="200" class="card-img-top" height="180" src="{{asset('images/s7.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" data-toggle="modal" data-target="#order"  id="addbtn" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-lg-5 m-1">
                    <h5 class="card-title" style="font-size: 25px;text-align: center;">Soap</h5>
                    <img height="200" class="card-img-top" height="180" src="{{asset('images/s1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" data-toggle="modal" data-target="#order" id="addbtn" class="btn btn-primary">Add To Card</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
   s

   <!--  <script type="text/javascript">
        
        $(document).ready(function() {
            $(document).on("change keyup","#qty",function () {
                var qty=$('#qty').val();
                if(1<=qty && qty<=10){
                    var price=4200;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                }
                else if(10<qty && qty<=30){

                    var price=4000;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                }
                else if(30<qty && qty<=50){
                    var price=3800;
                    $('#price').val(price);
                    $('#total').val(price*qty);
                } 
            })
        })
    </script> -->
    @include('frontend/modal')

</body>

@endsection

