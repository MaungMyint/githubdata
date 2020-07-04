@extends('index')

@section('middle')

		<!-- <section class="jobs">
			<div class="container">
				<div class="row heading">
					<h2>Admin view for check Employee</h2>
					<p></p>
				</div>
				<div class="companies">
					<div class="company-list">
						<div class="row">
							@foreach($employeeinfo as $viewemployee)
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="{{asset($viewemployee->image)}}">
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3 href="{{ route('employeeinfo.show',$viewemployee->id)}}">{{ $viewemployee->user->name}}
									</h3>

									<p>
										<span class="company-name">
											<i class="fa fa-briefcase"></i>
											{{ $viewemployee->user->email}}
										</span>
										<span class="company-location">
											<i class="fa fa-map-marker"></i> 
											{{ $viewemployee->address }}
										</span>
										<span class="package">
											<i class="fa fa-money"></i>
											{{ $viewemployee->phoneno }}
										</span>
									</p>
								</div>
							</div>
							@endforeach

						</div>
					</div>
								
				</div>
				<div class="row">
					<input type="button" class="btn brows-btn" value="Brows All Jobs" />
				</div>
			</div>
		</section> -->
		<section class="membercard bg-info">
			<div class="container">
				<div class="row">
					@foreach($employeeinfo as $viewemployee)
					<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover bg-info" style="background-size:cover;"><i class="fas fa-2x">Information</i><br><i class="fas fa-2x">For</i><br><i class="fas fa-2x">Employee</i></div>
								<div class="u-content">
									<div class="avatar box-80">
										<img width="100" height="100" class="img-circle img-100 shadow-white" src="{{asset($viewemployee->image)}}">
										
									</div>
									<h5 href="{{ route('employeeinfo.show',$viewemployee->id)}}">{{ $viewemployee->user->name}}</h5>
									<p class="text-muted">
										<span class="company-name">
											<i class="fa fa-briefcase"></i>
											{{ $viewemployee->user->email}}
										</span><hr>
										<span class="company-location">
											<i class="fa fa-map-marker"></i> 
											{{ $viewemployee->address }}
										</span><hr>
										<span class="package">
											<i class="fa fa-money"></i>
											{{ $viewemployee->phoneno }}
										</span>
									</p>
								</div>
								
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		@endsection