<?php include 'dayQueries.php';?>

 <div id="percentageResultsforFBorOLXorBookingSites" style="height: 400px; width: 100%;"></div>
 <script type="text/javascript">
   var listOfWebsite = <?php echo json_encode($Websites)?>;
   var numberOfResorts = <?php echo json_encode($ResortsNumber)?>;
   var twoOrMoreResortsVariables = <?php echo json_encode($totalResorts2Array)?>;
   var percentagesResults = <?php echo json_encode($percentages)?>;
 </script>
