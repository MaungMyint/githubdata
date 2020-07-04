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
		text: "Job Position at Different  Levels"
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
      	indexLabelFontSize: 10,
		dataPoints: [
			    { y: {{$pjmanager}}, label: "Project Manager" },
			    { y: {{$dbmanager}}, label: "Database Manager"},
			    { y: {{$executive}}, label: "IT Executive"},
                { y: {{$itdirector}}, label: "IT Director" },
                { y: {{$itamanager}}, label: "IT Assitant Manager" },
                { y: {{$itdhead}}, label: "IT Department Head" },
                { y: {{$itaassociate}}, label: "IT Administrative Associate" },
                { y: {{$nwmanager}}, label: "Network System Manager" },
                { y: {{$itmanager}}, label: "IT Manager" },
                { y: {{$emanager}}, label: "EDP Manager" },
                { y: {{$smanager}}, label: "System Manager" },
                { y: {{$tmanager}}, label: "Training Manager" },
                { y: {{$pjleader}}, label: "Project Leader" },
                { y: {{$tleader}}, label: "Team Leader" },
                { y: {{$sexecutive}}, label: "Senior Executive" },
                { y: {{$itsacmanager}}, label: "IT Security and Compliance Manager" },
                { y: {{$dbadministrator}}, label: "Database  Administrator" },
                { y: {{$vpresident}}, label: "Vice President(IT)" },
                { y: {{$vp}}, label: "Vice President(Information Service)" },
                { y: {{$cio}}, label: "Chief Information Officer(CIO)" },
                { y: {{$cto}}, label: "Chief Technicial Officer(CTO)" },
                { y: {{$cso}}, label: "Chief Security Officer(CSO)" },
                { y: {{$td}}, label: "Technical Director" },
                { y: {{$tsd}}, label: "IT/IS Director" },
                { y: {{$ipjd}}, label: "IT Project Director" },
                { y: {{$iosd}}, label: "IOS Developer" },
                { y: {{$phpp}}, label: "PHP Programmer" },
                { y: {{$sp}}, label: "Senior Programmer" },
                { y: {{$software}}, label: "Software Developer" },
                { y: {{$ad}}, label: "Android Developer" },
                { y: {{$adeveloper}}, label: "Application Developer" },
                { y: {{$isse}}, label: "IT Software Support Enginner" },
                { y: {{$jp}}, label: "Junior Programmer" },
                { y: {{$iae}}, label: "IT Application Engineer" },
                { y: {{$mad}}, label: "Mobile Application  Developer" },
                { y: {{$programmer}}, label: "Programmer" },
                { y: {{$ap}}, label: "Analyst Programmer" },
                { y: {{$wd}}, label: "Web Developer" },
                { y: {{$networking}}, label: "Networking" },
                { y: {{$iie}}, label: "IT Infrasturcture Engieer" },
                { y: {{$nasuo}}, label: "Network Administration & Security Unit Officer" },
                { y: {{$nt}}, label: "Network Technician" },
                { y: {{$isam}}, label: "IT Sales and Marketing" },
            
               
		]
	}]
});


var chart2 = new CanvasJS.Chart("chartContainer2", {
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "Job Position Pie Chart"
        },
        data: [{
            type: "pie",
            startAngle: 25,
            toolTipContent: "<b>{label}</b>: {y}%",
            showInLegend: "true",
            legendText: "{label}",
            indexLabelFontSize: 10,
            indexLabel: "{label} - {y}%",
            dataPoints: [
                { y: {{$pjmanager}}, label: "Project Manager" },
			    { y: {{$dbmanager}}, label: "Database Manager" },
			    { y: {{$executive}}, label: "IT Executive" },
                { y: {{$itdirector}}, label: "IT Director" },
                { y: {{$itamanager}}, label: "IT Assitant Manager" },
                { y: {{$itdhead}}, label: "IT Department Head" },
                { y: {{$itaassociate}}, label: "IT Administrative Associate" },
                { y: {{$nwmanager}}, label: "Network System Manager" },
                { y: {{$itmanager}}, label: "IT Manager" },
                { y: {{$emanager}}, label: "EDP Manager" },
                { y: {{$smanager}}, label: "System Manager" },
                { y: {{$tmanager}}, label: "Training Manager" },
                { y: {{$pjleader}}, label: "Project Leader" },
                { y: {{$tleader}}, label: "Team Leader" },
                { y: {{$sexecutive}}, label: "Senior Executive" },
                { y: {{$itsacmanager}}, label: "IT Security and Compliance Manager" },
                { y: {{$dbadministrator}}, label: "Database  Administrator" },
                { y: {{$vpresident}}, label: "Vice President(IT)" },
                { y: {{$vp}}, label: "Vice President(Information Service)" },
                { y: {{$cio}}, label: "Chief Information Officer(CIO)" },
                { y: {{$cto}}, label: "Chief Technicial Officer(CTO)" },
                { y: {{$cso}}, label: "Chief Security Officer(CSO)" },
                { y: {{$td}}, label: "Technical Director" },
                { y: {{$tsd}}, label: "IT/IS Director" },
                { y: {{$ipjd}}, label: "IT Project Director" },
                { y: {{$iosd}}, label: "IOS Developer" },
                { y: {{$phpp}}, label: "PHP Programmer" },
                { y: {{$sp}}, label: "Senior Programmer" },
                { y: {{$software}}, label: "Software Developer" },
                { y: {{$ad}}, label: "Android Developer" },
                { y: {{$adeveloper}}, label: "Application Developer" },
                { y: {{$isse}}, label: "IT Software Support Enginner" },
                { y: {{$jp}}, label: "Junior Programmer" },
                { y: {{$iae}}, label: "IT Application Engineer" },
                { y: {{$mad}}, label: "Mobile Application  Developer" },
                { y: {{$programmer}}, label: "Programmer" },
                { y: {{$ap}}, label: "Analyst Programmer" },
                { y: {{$wd}}, label: "Web Developer" },
                { y: {{$networking}}, label: "Networking" },
                { y: {{$iie}}, label: "IT Infrasturcture Engieer" },
                { y: {{$nasuo}}, label: "Network Administration & Security Unit Officer" },
                { y: {{$nt}}, label: "Network Technician" },
                { y: {{$isam}}, label: "IT Sales and Marketing" },
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