@extends('frontendtemplate')
@section('contents')
	<br><br><br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-6 col-sm-3 col-md-6 col-lg-6">
				<h2>Contact Address</h2>
				<p class="my-3">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: N0.32, Inn Sein Road, Hlaing Tsp, Yangon</p>
				<p>Phone No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 095667337573,016537565788</p>
				<p>Website&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: www.sakura.com.mm</p>
				<p>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: sakura@gmail.com</p>
				<p>Hr&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: hr.sakura@gmail.com</p>
				<p>If you have any suggestion concered with our products, please send to your message</p>
			</div>
			<div class="col-6 col-sm-3 col-md-6 col-lg-6">
				<!-- Default form contact -->
				<form class="text-center">

					<p class="h2 mb-5">Contact us</p>

					<!-- Name -->
					<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

					<!-- Email -->
					<input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

					<!-- Subject -->
					<label>Subject</label>
					<select class="browser-default custom-select mb-4">
						<option value="" disabled>Choose option</option>
						<option value="1" selected>Feedback</option>
						<option value="2">Report a bug</option>
						<option value="3">Feature request</option>
						<option value="4">Feature request</option>
					</select>

					<!-- Message -->
					<div class="form-group">
						<textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
					</div>

					<!-- Copy -->
					<div class="custom-control custom-checkbox mb-4">
						<input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
						<label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
					</div>

					<!-- Send button -->
					<button class="btn btn-info btn-block" type="submit">Send</button>

				</form>
				<!-- Default form contact -->
			</div>

		</div>
	</div>
	

@endsection