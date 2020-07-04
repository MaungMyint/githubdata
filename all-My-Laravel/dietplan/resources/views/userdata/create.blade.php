@extends('maintemplate')
@section('content')
    <section class="welcome-area section-padding2 my-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="bd-example">
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="{{asset('template/assets/images/welcome-bg.png')}}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>First slide label</h5>
                                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="{{asset('template/assets/images/welcome-bg.png')}}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Second slide label</h5>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="{{asset('template/assets/images/welcome-bg.png')}}" class="d-block w-100')}}" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Third slide label</h5>
                                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                    </div>
                            <!-- 
                        <div class="welcome-img">
                        <img src="assets/images/welcome-bg.png" class="img-fluid" alt="">
                    </div> -->
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">welcome</span> <br>to food fun</h3>
                        <p class="pt-3">Created god gathered don't you yielding herb you had. And isn't, god was saw. Dominion. Great sixth for in unto was. Open can't tree am waters brought. Divide after there. Was.</p>
                        <p>Created god gathered don't you yielding herb you had. And isn't, god was saw. Dominion. Great sixth for in unto was. Open can't tree waters brought. Divide after there. Was. Created god gathered don't you yielding herb you had. And isn't god.</p>
                        <a href="#mydata" class="template-btn mt-3">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="table-area section-padding" id="mydata">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h2 class="my-4">Put your <span> diet </span> on autopilot</h2>
                        <p><i class="my-2">
                            Eat This Much creates personalized meal plans based on your food preferences, budget, and schedule.<br><br><span class="my-4"> Reach your diet and nutritional goals with our calorie calculator,</span><br> weekly meal plans, grocery lists.
                        </i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                                <form method="post" action="myeat.php" enctype="multipart/form-data">
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <p style="font-weight: white;font-size: 0.5cm;color: white">I want to eat</p>
                                      <input type="number" class="form-control" name="myeats" placeholder="Enter Calories per day"  min=100 max=3000 step=100 required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <p style="font-weight: white;font-size: 0.5cm;color: white">In</p>
                                      <input type="text" class="form-control" name="meal" required="required" placeholder="Enter Meal Time">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="gridCheck">
                                      <label class="form-check-label" for="gridCheck" style="color: white">
                                         I'm living with diabetes
                                      </label>
                                    </div>
                                  </div>

                            <!-- <a href="food.php" class="template-btn template-btn2 mt-4">Generate </a> -->
                            <input type="submit" name="" class="template-btn template-btn2 mt-4" value="Generate">
                            <a href="#addmydata" id="notsure" class="calcu template-btn template-btn2 mt-4" data-toggle="modal">I'm Not Sure</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="update-area section-padding" id="mydataplan">
        <?php

                            $paymentDate = date('Y-m-d');
                            $paymentDate=date('Y-m-d', strtotime($paymentDate));
                                ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Choice<span>Your</span> Plans</h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="{{asset('template/assets/images/update1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="post-admin d-lg-flex mb-3">
                                <span class="mr-5 d-block mb-2 mb-lg-0"><i class="fa fa-user-o mr-2"></i>Admin</span>
                                
                                <span><i class="fa fa-calendar-o mr-2"></i><?php echo $paymentDate;?></span>
                            </div>
                            <h5>Sliver Plan</h5>
                            <p>nancy boy off his nut so I said chimney pot be James Bond aking cakes he.</p>
                            <a href="#" class="template-btn3 mt-2">read more <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-food my-5 my-md-0">
                        <div class="food-img">
                            <img src="{{asset('template/assets/images/update2.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="post-admin d-lg-flex mb-3">
                                <span class="mr-5 d-block mb-2 mb-lg-0"><i class="fa fa-user-o mr-2"></i>Admin</span>
                                <span><i class="fa fa-calendar-o mr-2"></i><?php echo $paymentDate;?></span>
                            </div>
                            <h5>Gold Plan</h5>
                            <p>nancy boy off his nut so I said chimney pot be James Bond aking cakes he.</p>
                            <a href="#" class="template-btn3 mt-2">read more <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="{{asset('template/assets/images/update3.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="post-admin d-lg-flex mb-3">
                                <span class="mr-5 d-block mb-2 mb-lg-0"><i class="fa fa-user-o mr-2"></i>Admin</span>
                                <span><i class="fa fa-calendar-o mr-2"></i><?php echo $paymentDate;?></span>
                            </div>
                            <h5>Platinum Plan</h5>
                            <p>nancy boy off his nut so I said chimney pot be James Bond aking cakes he.</p>
                            <a href="food.php" class="template-btn3 mt-2">read more <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Customer <span>says</span></h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel">
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{asset('template/assets/images/g2.jpg')}}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>adame nesane</h5>
                                <span><i>Chief Customer</i></span>
                                <p class="pt-3">You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{asset('template/assets/images/g1.jpg')}}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>adam nahan</h5>
                                <span><i>Chief Customer</i></span>
                                <p class="pt-3">You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{asset('template/assets/images/g3.jpg')}}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>adame nesane</h5>
                                <span><i>Chief Customer</i></span>
                                <p class="pt-3">You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="table-area section-padding" id="conatct">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Contact <span>Now</span></h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="#">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-facebook"></i></span>
                            </div>
                            <input type="text" id="">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <input type="text" id="">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                            </div>
                            <input type="text">
                        </div>
                        <div class="table-btn text-center">
                            <a href="#" class="template-btn template-btn2 mt-4">Send</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="col-12 my-5">
            <div class="modal fade mymodal1" id="addmydata" tabindex="-1" role="dialog"aria-labelledby="exampleModalLabel"aria-hidden="true">
            <div class="modal-dialog modal-mt" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add your Information</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
            <form class="form-group" action="{{route('userdata.store')}}" method="post">
               @csrf
                                <div class="modal-body">
                                  <div class="container-fluid">
                                    <div class="row">
                                      <div class="col-md-4 my-1">Current Dite Type</div>
                                      <div class="col-md-4 my-1">Your Data</div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4 my-1">Age</div>
                                      <div class="col-md-4 my-1"><input type="text" name="age" id="age" required="required" class="form-control"></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4 my-1">Height</div>
                                      <div class="col-md-4 my-1"><input type="number" name="height" required="require" placeholder="Feet" class="form-control" min=4 max=7 ><input type="number" required="required" name="iheight" min="0" max="11" placeholder="inches" class="form-control"></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4 my-1">Weight</div>
                                      <div class="col-md-4 my-1"><input type="number" min="80"  placeholder="pounds" name="weight" max="500" required="" class="form-control"></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4 my-1">Gender</div>
                                      <div class="col-md-4 my-1">
                                                <label for="opt-1"><input type="radio" value="Female" name="unit" id="opt-1" checked="checked">Female</label>
                                                <label for="opt-0"><input type="radio" value="Male" name="unit" id="opt-0" >Male</label>
                                                </div>
                                    </div> 
                                    <div class="row">
                                      <div class="col-md-4 my-1">I Want to </div>
                                      <div class="col-md-8 my-1">
                                        <label for="opt-1">
                                            <input type="radio" value="Maintain Body" name="userlossweight" id="noCheck" checked="checked" onclick="javascript:yesnoCheck();">Maintain Body
                                        </label>
                                        <label for="opt-0">
                                            <input type="radio" value="Weight Loss" name="userlossweight" onclick="javascript:yesnoCheck();" id="yesCheck" class="setting" >Lose Weight
                                        </label>
                                    </div>
                                   </div>
                                <div id="ifYes" style="display:none">  
                                    <div class="row">
                                      <div class="col-md-4 my-1">Enter Your Goal</div>
                                      <div class="col-md-4 my-1"><input type="text" name="mygoal" placeholder="Pounds" class="form-control"></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4 my-1">Weight Change Rate</div>
                                      <div class="col-md-4 my-1">Lose<input type="text" name="myweek" placeholder="Pounds per week" class="form-control">Per Week</div>
                                    </div>
                                        <?php
                                        $paymentDate = date('Y-m-d');
                                        $paymentDate=date('Y-m-d', strtotime($paymentDate));
                                        ?>
                                    <div class="row">
                                      <div class="col-md-4 my-1"><input type="hidden" name="mydate" value="<?php echo $paymentDate;?>"></div>

                                      <div class="col-md-4 my-1"></div>
                                    </div> 
                                </div>  
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-md-right">
                                        <input type="submit" name="givems" id="notsure" class="btn btn-primary" value="Calculate Your Result"/>                                    
                                    </div>

                                </div>
                                
                                
                        <div class="modal-footer">
                          <button class="btn btn-secondary text-center"  type="button" data-dismiss="modal">Close</button></center>
                          <!-- <input type="submit" name="types" value="Save" class="btn btn-primary"> -->
                        </div>
                    </form>
                </div>
                </div>
            </div>
    </div>
    <script type="text/javascript">
        $("#notsure").click(function(){
        var myage=document.getElementById('age');
        alert(myage);
    }
    </script>
@endsection
