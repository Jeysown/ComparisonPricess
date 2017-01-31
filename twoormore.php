<?php include 'wholedayQueries.php';?>
    <div class="row" style="margin-left:40px;margin-right:40px;">
    <div id="twoOrMoreResortsContainer" style="height:400px; width: 100%;"></div>
      <h2 style="text-align:center;font-weight:bold;padding:20px;">There are only <b style="font-size:40px;">8.45%</b> listed in two or more websites</h2>
    </div>

<script type="text/javascript">
  var listOfWebsite = <?php echo json_encode($Websites)?>;
  var numberOfResorts = <?php echo json_encode($ResortsNumber)?>;
  var twoOrMoreResortsVariables = <?php echo json_encode($totalResorts2Array)?>;
  var percentagesResults = <?php echo json_encode($percentages)?>;
</script>
