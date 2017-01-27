<!DOCTYPE HTML>
<html>
<head>
  <style media="screen">
    .canvasjs-chart-credit{
      font-size: 250px;
    }
  </style>
	<script src="assets/js/canvasjs.min.js"></script>
  <script src="assets/js/charts.js"></script>
	<title>CanvasJS Example</title>
</head>
<body onload="createColumnChart()">
  <?php $results = array(10,20,30,40,50,60);?>
  <div id="chartContainer" style="height: 400px; width: 50%;"></div>
</body>
</html>
<script type="text/javascript">
  var res=<?php echo json_encode( $results ) ?>;
</script>
