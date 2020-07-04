@extends('index')

@section('middle')

	<section class="pricind">
		<div class="container">
		  <div class="row heading">
					<h2 class="fas fa-3x text-primary">Apply Jobs In Your Co.ltd</h2>
					
				</div>
		  <div class="row">
			@foreach($application as $app)
				<div class="col-md-4 col-sm-4">
					
					<div class="package-box">
						<div class="package-header">
							<i class="fa fa-cog" aria-hidden="true"></i>
							<h3>Apply List</h3>
						</div>
						<div class="package-info">
							<ul>
							<li>Seeker Name: {{ $app->user->name}}</li>
							<li>Job Name: {{ $app->job->name}}</li>
							<li>Status: {{ $app->status}}</li>					
							</ul>

						</div>
						<a href="{{$app->seeker->seekerinfo->cvform}}" class="btn btn-info">View CV</a>
					</div>
					
				</div>
			@endforeach
		   </div>
		</div>
	</section>
@endsection