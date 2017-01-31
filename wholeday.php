<?php include 'wholedayQueries.php';?>
 <div class="row" style="margin-left:40px;margin-right:40px;">
 <div id="percentageResultsforFBorOLXorBookingSites" style="height: 400px; width: 100%;"></div>
   <h2 style="text-align:center;font-weight:bold;padding:20px;"><b style="font-size:40px;">93%</b> of Resorts doesn't exist on a booking site.</h2>
 </div>
 <script type="text/javascript">
   var listOfWebsite = <?php echo json_encode($Websites)?>;
   var numberOfResorts = <?php echo json_encode($ResortsNumber)?>;
   var twoOrMoreResortsVariables = <?php echo json_encode($totalResorts2Array)?>;
   var percentagesResults = <?php echo json_encode($percentages)?>;
 </script>
