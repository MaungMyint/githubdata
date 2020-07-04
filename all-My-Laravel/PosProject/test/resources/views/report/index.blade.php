@extends('main')
@section('content')
	<h2 class="text-center">Report</h2>
	<hr>
	<div class="col-md-6">
	<form name="report">
		<label>Start Date</label>
		<input type="date" name="startdate" class="form-control my-5" placeholder=" Enter startdate"><br>
		<label>End Date</label>
		<input type="date" name="enddate" class="form-control" placeholder="Enter enddate"><br>
		<input type="button" name="submit" value="calculate" onclick="cal()" class="btn btn-success"></button><br>
		</div>
		<div class="col-md-3">
		<label></label><br>
		<p name="profit" class="font-weight-bold"></p><br>
		<label></label><br>
		<p name="loss" class="font-weight-bold"></p><br>
		</div>

	</form>
	<a href="">
@endsection
@section('script')
	<script type="text/javascript">
		function cal() {

			var startdate=(document.report.startdate.value);
			var enddate=(document.report.enddate.value);
			document.getElementsByName('profit')[0].innerHTML='Profit :'+startdate;
			document.getElementsByName('loss')[0].innerHTML='Loss :'+enddate;
			//alert('ok');
			}
	</script>
@endsection