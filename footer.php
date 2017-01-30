<footer>
  <div class="container">
    <div class="row">

      <div class="col-xs-12" style="padding:10px;">
        <div class="col-sm-6 col-xs-6" style="text-align:left;font-style:italic;padding:0px;">
          All Rights Reserved Copyright © 2017
        </div>
        <div class="col-sm-6 col-xs-6" style="text-align:right;padding:0px;">
          A Product by NiceSwan!
        </div>
      </div>
    </div>

      </div>
</footer>
</body>
</html>
	<script src="assets/js/canvasjs.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/charts.js"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/ease.js"></script>

    <script type="text/javascript">
     $("#sidebar-content").load("listofresort.php");
     $('#Overview').click(function(){
        $("#sidebar-content").load("listofresort.php");
        return false;
     });

$('#twoormore').click(function(){
   $("#sidebar-content").load("twoormore.php");
   return false;
});
    $('#priceday').click(function(){
       $("#sidebar-content").load("priceday.php");
       return false;
    });
    $('#pricewhole').click(function(){
       $("#sidebar-content").load("pricewhole.php");
       return false;
    });
    $('#average').click(function(){
       $("#sidebar-content").load("averageprice.php");
       return false;
    });
    $('#averagepricewhole').click(function(){
       $("#sidebar-content").load("averagepricewhole.php");
       return false;
    });
    $('#difference').click(function(){
       $("#sidebar-content").load("difference.php");
       return false;
    });
    $('#discrepancy').click(function(){
       $("#sidebar-content").load("discrepancy.php");
       return false;
    });
    $('#discrepancy2').click(function(){
       $("#sidebar-content").load("discrepancy2.php");
       return false;
    });
    $('#day').click(function(){
       $("#sidebar-content").load("day.php");
       return false;
    });
    $('#wholeday').click(function(){
       $("#sidebar-content").load("wholeday.php");
       return false;
    });
    </script>
    <script type="text/javascript">
    var selector = '.nav1 li';

      $(selector).on('click', function(){
        $(selector).removeClass('active');
        $(this).addClass('active');
      });
    </script>
