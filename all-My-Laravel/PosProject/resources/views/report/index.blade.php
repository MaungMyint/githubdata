@extends('main')
@section('content')
	<h2 class="text-center">Report</h2>
	<hr>
	
  <div class="form-row myform">
  	
  		<div class="form-group col-md-6">
		<label>Start Date</label>
		<input type="date" name="startdate" id="start" class="form-control my-5" placeholder=" Enter startdate">
		</div>
		<div class="form-group col-md-6">	
		<label>End Date</label>
		<input type="date" name="enddate" id="end" class="form-control" placeholder="Enter enddate">
		</div>
		<input type="submit" value="Calculate" class="btn click" />
	

	</div>		
<table class="table mytable" >
		<tbody>			
              <div id="ProfitContent">  	
              </div>
		</tbody>
	</table>
@endsection
@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
     $('.mytable').hide();
    	$('.click').click(function(){
    	 $('.mytable').show();
    	 $('.myform').hide();	

    	 var startdate=$('#start').val();
			var enddate=$('#end').val();

			  $.ajaxSetup({
                  headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }

                 });
			   $.post('/getprofit',{startdate:startdate, enddate:enddate},function(reponse)
			   {
			   	$('#ProfitContent').html(reponse.profitsuccess);
					//console.log(response);profitsuccess
			   });
    	})
})


</script>
@endsection