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
		text: "Slary  at Different Levels"
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
			{ y: {{$one}}, label: "100000-200000" },
			{ y: {{$two}}, label: "200000-300000" },
			{ y: {{$three}}, label: "300000-400000" },
			{ y: {{$four}}, label: "400000-500000"},
            { y: {{$five}}, label: "500000-600000" },
			{ y: {{$six}}, label: "600000-700000" },
			{ y: {{$seven}}, label: "700000-800000" },
			{ y: {{$eight}}, label: "800000-900000"},
            { y: {{$nine}}, label: "900000-100000"},
            { y: {{$ten}}, label: "Above 1000000"},
		]
	}]
});


var chart2 = new CanvasJS.Chart("chartContainer2", {
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "Slary Pie Chart"
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
             { y: {{$one}}, label: "100000-200000" },
			{ y: {{$two}}, label: "200000-300000" },
			{ y: {{$three}}, label: "300000-400000" },
			{ y: {{$four}}, label: "400000-500000"},
            { y: {{$five}}, label: "500000-600000" },
			{ y: {{$six}}, label: "600000-700000" },
			{ y: {{$seven}}, label: "700000-800000" },
			{ y: {{$eight}}, label: "800000-900000"},
            { y: {{$nine}}, label: "900000-100000"},
            { y: {{$ten}}, label: "Above 1000000"},
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