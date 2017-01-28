<footer>
  <div class="container">
    <div class="row">

      <div class="col-xs-12" style="padding:10px;">
        <div class="col-sm-6 col-xs-6" style="text-align:left;font-style:italic;padding:0px;">
          All Rights Reserved Copyright © 2016
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
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/header.js"></script>
    <script src="assets/js/ease.js"></script>
    <script type="text/javascript">
     $("#sidebar-content").load("sidebar.php");

    $('#average').click(function(){
       $("#sidebar-content").load("average.php");
       return false;
    });
    $('#Overview').click(function(){
       $("#sidebar-content").load("sidebar.php");
       return false;
    });
    $('#item1').click(function(){
       $("#sidebar-content").load("item1.php");
       return false;
    });
    $('#item2').click(function(){
       $("#sidebar-content").load("item2.php");
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
