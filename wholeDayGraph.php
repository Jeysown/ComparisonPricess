<?php include 'wholedayQueries.php';?>
<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
	<script src="assets/js/canvasjs.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<title>Whole Day Interpretation</title>
</head>
<body onload="createColumnChart()">
<div>
  <div class="col-lg-5" >
    <div class="result-border">
    <div id="chartContainer" style="height: 400px; width: 100%;"></div>
    </div>
  </div>
  <div class="col-lg-5" >
    <div class="result-border">
    <div id="twoOrMoreResortsContainer" style="height: 400px; width: 100%;"></div>
    </div>
  </div>
</div>
<center>
  <div class="col-lg-6" >
    <div class="result-border">
    <div id="percentageResultsforFBorOLXorBookingSites" style="height: 400px; width: 100%;"></div>
    </div>
  </div>
</center>
</body>
</html>
<script src="assets/js/charts.js"></script>
<script type="text/javascript">
  var listOfWebsite = <?php echo json_encode($Websites)?>;
  var numberOfResorts = <?php echo json_encode($ResortsNumber)?>;
  var twoOrMoreResortsVariables = <?php echo json_encode($totalResorts2Array)?>;
  var percentagesResults = <?php echo json_encode($percentages)?>;
</script>
