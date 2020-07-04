
@extends('index')

@section('middle')

		<!-- Navigation Start  -->
		
		<!-- Navigation End  -->
		
		<!-- Main jumbotron for a primary marketing message or call to action -->
		
		
		
		
		<section class="jobs">
			<div class="container">
				<div class="row heading">
					<h2 class="fas fa-3x text-primary">Checking the Job list</h2>
					<p></p>
				</div>
				<div class="companies bg-warning">
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
									<h3>{{ $job->name}}</h3>

									<p><span class="company-name"><i class="fa fa-briefcase"></i>{{ $job->category->name}}</span><span class="company-location"><i class="fa fa-map-marker"></i> {{ $job->location }}</span><span class="package"><i class="fa fa-money"></i>{{ $job->salary }}</span><span>Date:{{$job->created_at->toFormattedDateString()}}</span></p>

								</div>

								
							</div>
							<div class="col-md-2 col-sm-2">
							<div class="company-content">
								
									<a href="{{ route('jobdetail.show',$job->id)}}" class="btn-block btn view-job">Job Detail</a>
								
							</div>
							</div>
						</div>
					</div>
					@endforeach		
				</div>
				
			</div>
		</section>
		
		@endsection
			
		<!-- footer start -->
		
		 
		
