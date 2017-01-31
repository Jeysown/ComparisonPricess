<?php include 'wholedayQueries.php';?>

    <div id="chartContainer" style="height:450px; width: 100%;"></div>
    <center><h1><span class="count" style="font-weight:bold;">296</span> Resorts listed on different websites.</h1>  </center>
<script type="text/javascript">
$('.count').each(function () {
  $(this).prop('Counter',0).animate({
      Counter: $(this).text()
  }, {
      duration: 4000,
      easing: 'swing',
      step: function (now) {
          $(this).text(Math.ceil(now));
      }
  });
});
</script>
<script type="text/javascript">
  var listOfWebsite = <?php echo json_encode($Websites)?>;
  var numberOfResorts = <?php echo json_encode($ResortsNumber)?>;
  var twoOrMoreResortsVariables = <?php echo json_encode($totalResorts2Array)?>;
  var percentagesResults = <?php echo json_encode($percentages)?>;

</script>
