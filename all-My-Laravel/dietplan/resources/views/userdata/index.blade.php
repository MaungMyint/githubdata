@extends('maintemplate')
@section('content')
<div>
    @foreach($datas as $category)
   <p>{{$category->age}}</p>
   <p>{{$category->height}}</p>
   <p>{{$category->weight}}</p>
    @endforeach
</div>    
@csrf
    	<section class="welcome-area section-padding2 md-8">
                              	<div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 align-self-center">
                                            <div class="welcome-img">
                                                <img src="{{asset('template/assets/images/welcome-bg.png')}}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 align-self-center">
                                            <div class="welcome-text mt-5 mt-md-0">
                                              <form method="post" class="form-group" action="food.php" enctype="multipart/form-data">
                                                <h3><span class="style-change">welcome to our BMI</span><br>( Body Mass Index)</h3><br>
                                                <h5>Your Height  Feets and Inches & Your Weight Pounds.</h5>
                                                <p class="pt-3">plans can help keep your BMI in the healthy range, with foods high in lean protein, plus heart-healthy fats and good carbs from fruit, veggies and whole grains</p>
                                                <p>Created god gathered don't you yielding herb you had. And isn't, god was saw. Dominion. Great sixth for in unto was. Open can't tree waters brought. Divide after there. Was. Created god gathered don't you yielding herb youhad. And isn't god.</p>
                                                <!-- <a href="index.php#mydataplan" class="template-btn mt-3">Views Palns</a> -->
                                              </form>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </section>    
@endsection