
@extends('index')

@section('middle')

		<!-- Navigation Start  -->
		
		<!-- Navigation End  -->
		
		<!-- Main jumbotron for a primary marketing message or call to action -->
		
		
		
		<section class="membercard bg-info">
			<div class="container">
				<div class="row">
	    	@foreach($seekerinfo as $seeker)
	    	<!-- <div class="col-md-4 col-sm-4">
    			<div class="features-content">
    				<a href="{{route('seekerinfo.show',$seeker->id)}}" class="mb-2 d-block" style="cursor: pointer !important;text-decoration: none;">


					    <img class="img-circle img-50 shadow-white" width="200" src="{{asset($seeker->image)}}" alt="Card image cap">
					  	
							<h3><b>Name: </b>{{$seeker->user->name}}</h3>
						
					    
					    	<p><b>Email: </b>{{$seeker->user->email}}</p>
					    	<p><b>PhoneNo: </b>{{$seeker->phoneno}}</p>
						  	<p><b>Address: </b>{{$seeker->address}}</p>
							<p><b>Detail: </b>{{$seeker->detail}}</p>
				
		    				<form method="post" action="{{route('seekerinfo.destroy',$seeker->id)}}" class="d-inline-block ml-3">
		    					<input type="hidden" name="_method" value="DELETE">
		    					@csrf
		    					<input type="submit" class="btn btn-danger" value="Delete" name="">
		    				</form>
					</a>
				</div>
    		</div> -->
    		
    				<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover bg-info" style="background-size:cover;"><i class="fas fa-2x">Information</i><br><i class="fas fa-2x">For</i><br><i class="fas fa-2x">Seeker</i></div>
								<a href="{{route('seekerinfo.show',$seeker->id)}}">
								<div class="u-content">
									<div class="avatar box-80">
										<img width="100" height="100" class="img-circle img-100 shadow-white" src="{{asset($seeker->image)}}">
										
									</div>
									<h5>{{$seeker->user->name}}</h5>
									<p class="text-muted">
										
										<span class="company-location">
											<i class="fa fa-map-marker"></i> 
											{{$seeker->phoneno}}
										</span><hr>
										<span class="package">
											<i class="fa fa-money"></i>
											{{$seeker->address}}
										</span><hr>
										<span class="package">
											<i class="fa fa-money"></i>
											{{$seeker->detail}}
										</span><hr>
										<form method="post" action="				{{route('seekerinfo.destroy',$seeker->id)}}" class="d-inline-block ml-3">
					    					<input type="hidden" name="_method" value="DELETE">
					    					@csrf
					    					<input type="submit" class="btn btn-primary" value="Delete" name="">
					    				</form>
									</p>
								</div>
								</a>
							</div>
						</div>
					</div>
					@endforeach
	    </div>
	  </div>
	</section>
		
		
@endsection
			
		<!-- footer start -->
		
		 
		
