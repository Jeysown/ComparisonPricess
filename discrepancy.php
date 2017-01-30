<center><h1 style="font-weight:bold">Equal Price on Listing Sites and Website</h1></center>
<div class="col-lg-6">
<center class="yey2"><h1><span id="minreg"></span>%</h1>of the Resorts have an Equal Price. <br>- Half Day</center>
</div>

<div class="col-lg-6">
<center class="yey2"><h1> <span id="maxreg"></span>%</h1>of the Resorts have an Equal Price.<br> - Whole Day</center>
</div>


<script type="text/javascript">
  $({someValue: 0}).animate({someValue: 14}, {
      duration: 2000,
      easing:'swing',
      step: function() {
          $('#minreg').text(commaSeparateNumber(Math.round(this.someValue)));
      }
  });
  $({someValue: 0}).animate({someValue: 4}, {
      duration: 2000,
      easing:'swing',
      step: function() {
          $('#maxreg').text(commaSeparateNumber(Math.round(this.someValue)));
      }
  });
 function commaSeparateNumber(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return val;
  }
</script>
