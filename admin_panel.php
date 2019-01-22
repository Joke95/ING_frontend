<?php include 'header.php';?>
<?php
	$totalSatisfactionRate = 100;
	 
	$newVsReturningVisitorsDataPoints = array(
		array("y"=> 75, "name"=> "Satisfied", "color"=> "Green"),
		array("y"=> 25, "name"=> "Unsatisfied", "color"=> "Red")
	);
	 
	$newVisitorsDataPoints = array(
		array("x"=> 1420050600000 , "y"=> 33000),
		array("x"=> 1422729000000 , "y"=> 35960),
		array("x"=> 1425148200000 , "y"=> 42160),
		array("x"=> 1427826600000 , "y"=> 42240),
		array("x"=> 1430418600000 , "y"=> 43200),
		array("x"=> 1433097000000 , "y"=> 40600),
		array("x"=> 1435689000000 , "y"=> 42560),
		array("x"=> 1438367400000 , "y"=> 44280),
		array("x"=> 1441045800000 , "y"=> 44800),
		array("x"=> 1443637800000 , "y"=> 48720),
		array("x"=> 1446316200000 , "y"=> 50840),
		array("x"=> 1448908200000 , "y"=> 51600)
	);
	 
	$returningVisitorsDataPoints = array(
		array("x"=> 1420050600000 , "y"=> 22000),
		array("x"=> 1422729000000 , "y"=> 26040),
		array("x"=> 1425148200000 , "y"=> 25840),
		array("x"=> 1427826600000 , "y"=> 23760),
		array("x"=> 1430418600000 , "y"=> 28800),
		array("x"=> 1433097000000 , "y"=> 29400),
		array("x"=> 1435689000000 , "y"=> 33440),
		array("x"=> 1438367400000 , "y"=> 37720),
		array("x"=> 1441045800000 , "y"=> 35200),
		array("x"=> 1443637800000 , "y"=> 35280),
		array("x"=> 1446316200000 , "y"=> 31160),
		array("x"=> 1448908200000 , "y"=> 34400)
	);
?>
<script>
window.onload = function() {
	 
	var totalSatisfactionRate = <?php echo $totalSatisfactionRate ?>;
	var visitorsData = {
		"Chatbor Satisfaction rate": [{
			click: visitorsChartDrilldownHandler,
			cursor: "pointer",
			explodeOnClick: false,
			innerRadius: "75%",
			legendMarkerType: "square",
			name: "New vs Returning Visitors",
			radius: "100%",
			showInLegend: true,
			startAngle: 90,
			type: "doughnut",
			dataPoints: <?php echo json_encode($newVsReturningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
		}],
		"New Visitors": [{
			color: "#E7823A",
			name: "New Visitors",
			type: "column",
			xValueType: "dateTime",
			dataPoints: <?php echo json_encode($newVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
		}],
		"Returning Visitors": [{
			color: "#546BC1",
			name: "Returning Visitors",
			type: "column",
			xValueType: "dateTime",
			dataPoints: <?php echo json_encode($returningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
		}]
	};
	 
	var newVSReturningVisitorsOptions = {
		animationEnabled: true,
		theme: "light2",
		
		
		title: {
			text: "Chatbot Satisfaction rate"
		},
		subtitles: [{
			text: "Click on any sagement for more infomation",
			backgroundColor: "#ff6200",
			fontSize: 14,
			fontColor: "white",
			padding: 5
		}],
		legend: {
			fontFamily: "calibri",
			fontSize: 14,
			itemTextFormatter: function (e) {
				return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalSatisfactionRate * 100) + "%";  
			}
		},
		data: []
	};
	 
	var visitorsDrilldownedChartOptions = {
		animationEnabled: true,
		theme: "light2",
		axisX: {
			labelFontColor: "#717171",
			lineColor: "#a2a2a2",
			tickColor: "#a2a2a2"
		},
		axisY: {
			gridThickness: 0,
			includeZero: false,
			labelFontColor: "#717171",
			lineColor: "#a2a2a2",
			tickColor: "#a2a2a2",
			lineThickness: 1
		},
		data: []
	};
	 
	var chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
	chart.options.data = visitorsData["Chatbor Satisfaction rate"];
	chart.render();
	 
	function visitorsChartDrilldownHandler(e) {
		//click event handler
		chart = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
		chart.options.data = visitorsData[e.dataPoint.name];
		chart.options.title = { text: e.dataPoint.name }
		chart.render();
		$("#backButton").toggleClass("invisible");
	}
	 
	$("#backButton").click(function() { 
		$(this).toggleClass("invisible");
		chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
		chart.options.data = visitorsData["Chatbor Satisfaction rate"];
		chart.render();
	});
	 
}
</script>
<style>
  #backButton {
	border-radius: 4px;
	padding: 8px;
	border: none;
	font-size: 16px;
	background-color: #2eacd1;
	color: white;
	position: absolute;
	top: 10px;
	right: 10px;
	cursor: pointer;
  }
  .invisible {
    display: none;
  }
</style>
<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-5 panel twocol">
				<h2>Chatbot performance</h2>
				<div id="chartContainer" style="height: 370px; width: 100%;"></div>
				<button class="btn invisible" id="backButton">&lt; Back</button>
				<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
				<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
				
				<button data-toggle="collapse" data-target="#demo">View more</button>

				<div id="demo" class="collapse">
				Lorem ipsum dolor text....
				</div> 
				
			</div>
			
			<div class="col-md-5 panel twocol">
			  <h2>Model performance</h2>
			  <p>This is some text.</p>
			</div>
		</div>
	</div>
</section>


<?php include 'footer.php';?>
