
@extends('index')

@section('middle')

<section class="main-banner" style="background:#242c36 url('template/img/slider-01.jpg') no-repeat">
			<!-- <img src="{{ asset('template/img/slider-01.jpg')}}"> -->
			<div class="container">
				<div class="caption">
					<h2 class="fas">Build Your Career</h2>
					<!-- <form> -->
						<fieldset>
						  <div class="row">
						  	<div class="col-md-3 col-sm-2">
						  		
						  	</div>

						  	<div class="col-md-3 col-sm-2">
						  		<!-- For Category Dropdown -->
							<div class="dropdown">

							  <button class="btn btn-block seub-btn dropdown-toggle" type="button" data-toggle="dropdown">
							    Select Category&raquo;
							  </button>
							  <div class="dropdown-menu alert-warning">
							    @foreach($categories as $category)
				          				<a class="dropdown-item" href="/?category_id={{$category->id}}">{{$category->name}}</a><br>
				          		@endforeach
							  </div>
							</div>
							</div>
						  	<div class="col-md-3 col-sm-2">
						  		<!-- For Salary Dropdown -->
								<div class="dropdown">
								  <button type="button" class="btn btn-block seub-btn dropdown-toggle" data-toggle="dropdown">
								    Select Salary&raquo;
								  </button>
								  <div class="dropdown-menu alert-warning">
								    @foreach($salaries as $salary)
					          				<a class="dropdown-item" href="/?salary={{$salary->salary}}">{{$salary->salary}}</a><br>
					          		@endforeach
								  </div>
								</div>
						  	</div>
						  	<div class="col-md-3 col-sm-2"></div>

						  </div>
							

							

							
							
						</fieldset>
					
				</div>
			</div>
		</section>
		
		
		
		<section class="jobs">
			<div class="container">
				<div class="row heading">
					<h2 class="fas fa-3x text-primary">Find Jobs Here</h2>
					<p class="fas text-danger">What is the flexibility with you!</p>
				</div>
				<div class="companies bg-info">
					@foreach($jobs as $job)
					<div class="company-list">
						
						<div class="row">
							
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="{{asset($job->employee->employeeinfo->image)}}">
								</div>
							</div>
							<div class="col-md-8 col-sm-8">
								<div class="company-content">
									<h3 class="fas fa-2x">
										{{ $job->name}}
									</h3>

									<p>
										<span class="company-name">
											<i class="fa fa-briefcase text-danger">
												
											</i>
											{{ $job->category->name}}
										</span>
										<span class="company-location">
											<i class="fa fa-map-marker text-danger">
												
											</i> {{ $job->location }}
										</span>
										<span class="package">
											<i class="fa fa-money text-danger">
												
											</i>{{ $job->salary }}
										</span>
										<span class="package">
											<label class="fa text-danger">please apply before this day:
											</label>{{ $job->enddate }}
										</span>
									</p>
								</div>
							</div>
							<div class="col-md-2 col-sm-2">
								
									<a href="{{ route('jobdetail.show',$job->id)}}" class="btn-block btn view-job">View Job</a>
								
							</div>
							

						</div>

					</div>
					@endforeach		
				</div>
				
			</div>
		</section>

		
		
		@endsection
			
		<!-- footer start -->
		
		 
		
