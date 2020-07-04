
@extends('index')

@section('middle')
<section class="profile-detail">
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<form method="POST" action="{{ route('application.index') }}" enctype="multipart/form-data">
                        @csrf             
						<div class="basic-information">
							@foreach($jobs as $jobdetail)
							<div class="col-md-3 col-sm-3">
							 
							</div>
							<div class="col-md-9 col-sm-9">
								<div class="profile-content">
										<ul class="information">
											<li value="{{ $jobdetail->id}}" name="jobname"><span>Job Name:</span>{{ $jobdetail->name}}</li>

											<li value="{{ $jobdetail->company_id}}" name="companyname"><span>CompanyId:</span>{{ $jobdetail->company_id}}</li>

											<li name="status"><span>Status:</span><input type="text" name="status" placeholder="Enter status"></li>
																							
											<!-- <li><span>Time:</span>Monday - Friday , 9:am - 9:pm</li> -->
										</ul>								
									</div>								
								</div>				
							
							@endforeach
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3 col-sm-3"></div>
									<div class="col-md-9">
										<input type="submit" name="bntsubmit" value="sing up" class="btn btn-success block">
									</div>
								</div>
								
							</div>

						</div>
					</form>

				</div>
			</div>
		</div>
	</section>
		
@endsection
			
	
		
		 
		
