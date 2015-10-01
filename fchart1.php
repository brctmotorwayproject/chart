<!DOCTYPE html>

<html>
	<head>
	<title>fchart test 2</title>
	
	
	
	<script type="text/javascript" src="fusioncharts/js/fusioncharts.js"></script>
	<script type="text/javascript" src="fusioncharts/js/themes/fusioncharts.theme.fint.js"></script>
	
	<script type="text/javascript">
	FusionCharts.ready(function() {
	
	var jarChart1 = new FusionCharts({
			"type": "msline",
			"renderAt": "testContainer",
			"width": "600",
			"height": "300",
			"dataFormat": "json",
			"dataSource": {
				"chart": {
				
				"xAxisName": "Time",
				"yAxisName": "Vote count",
				"theme": "fint",
				"lineAlpha": "1"
				
				},
			
			
			"categories": [
				{
					"category": [
						{
							"label": "7am"
						},
						{
							"label": "7:30am"
						},
						{
							"label": "8am"
						},
						{
							"label": "8:30am"
						},
						{
							"label": "9am"
						},
						{
							"label": "9:30am"
						},
						{
							"label": "10am"
						},
						{
							"label": "10:30am"
						},
						{
							"label": "11am"
						},
						{
							"label": "11:30am"
						},
						{
							"label": "12pm"
						},
						{
							"label": "12:30pm"
						},
						{
							"label": "1pm"
						}
					]
				}
			],
			"dataset": [
				{	
					"seriesname": "face1",
					"data": [
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": "2",
							"anchorImageUrl": "images/hazards/small/s2_small.png"
						},
						{
							"value": "5",
							"anchorImageUrl": "images/hazards/small/s1_small.png"
						},
						{
							"value": "20",
							"anchorImageUrl": "images/hazards/small/s1_small.png"
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": "7",
							"anchorImageUrl": "images/hazards/small/s1_small.png"
						},
						{
							"value": ""
						},
						{
							"value": ""
						}
						
						
					]
				},
				{	
					"seriesname": "face2",
					"data": [
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": "1",
							"anchorImageUrl": "images/hazards/small/s2_small.png"
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						}
						
						
					]
				},
				{	
					"seriesname": "face3",
					"data": [
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": "2",
							"anchorImageUrl": "images/hazards/small/s3_small.png"
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						}
						
						
					]
				},
				{	
					"seriesname": "ice",
					"data": [
						{
							"value": "-3",
							"anchorImageUrl": "images/hazards/small/snow_small.png"
						},
						{
							"value": "-4",
							"anchorImageUrl": "images/hazards/small/snow_small.png"
						},
						{
							"value": "-3",
							"anchorImageUrl": "images/hazards/small/snow_small.png"
						},
						{
							"value": "-1",
							"anchorImageUrl": "images/hazards/small/snow_small.png"
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						}
					]
				},
				{	
					"seriesname": "Animal",
					"data": [
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						}
						
						
					]
				},
				{	
					"seriesname": "Works",
					"data": [
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						}
						
						
					]
				},
				{	
					"seriesname": "Crash",
					"data": [
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						}
						
						
					]
				},
				{	
					"seriesname": "Tree",
					"data": [
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": "-10",
							"anchorImageUrl": "images/hazards/small/crash_small.png"
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						},
						{
							"value": ""
						}
						
						
					]
				},
			
		
		]
	}	
});

jarChart1.render();
});
</script>

<script type="text/javascript">
FusionCharts['debugger'].outputTo(function (message) {
    console.log(message);
});
FusionCharts['debugger'].enable(true);
</script>	
	
	</head>
	<body>
	
	<div id="testContainer">test 2 should load here</div>
	
	</body>
	

</html>