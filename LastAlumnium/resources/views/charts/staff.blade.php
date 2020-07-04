@extends('admin.backendtemplate')
@section('content')

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

    var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Goverment Staff/Student at Different Levels"
	},
	axisY: {
		title: "population",
		suffix: " ",
		reversed: false
	},
	axisX2: {
		tickThickness: 0,
		labelAngle: 0
        
	},
	data: [{
		type: "column",
		axisXType: "secondary",
      	indexLabelFontSize: 16,
		dataPoints: [
			{ y:{{$staff}}, label: "Goverment Staff" },
			{ y: {{$student}}, label: "Student" },
			{ y:{{$ot}}, label: "Other" },
			
		]
	}]
});


var chart2 = new CanvasJS.Chart("chartContainer2", {
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "Goverment Staff/Student Pie Chart"
        },
        data: [{
            type: "pie",
            startAngle: 25,
            toolTipContent: "<b>{label}</b>: {y}%",
            showInLegend: "true",
            legendText: "{label}",
            indexLabelFontSize: 16,
            indexLabel: "{label} - {y}%",
            dataPoints: [
           
                { y:{{$staff}}, label: "Goverment Staff" },
				{ y: {{$student}}, label: "Student" },
				{ y:{{$ot}}, label: "Other" },

               
            ]
        }]
    });
chart1.render();
chart2.render();
    

}
</script>




</head>
<body>

<div id="chartContainer1" style="height: 370px; width: 100%;"></div><br><br>


<div id="chartContainer2" style="height: 370px; width: 100%;"></div>



<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>

@endsection