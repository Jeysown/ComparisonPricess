<center><h1 style="font-weight:bold">Equal Price on Booking Sites and Website</h1></center>
<div class="col-lg-12">
<center class="yey2"><h1><span id="minreg"></span>%</h1>of the Resorts have an Equal Price</center>
</div>


<script type="text/javascript">
  $({someValue: 100}).animate({someValue: 0}, {
      duration: 2000,
      easing:'swing',
      step: function() {
          $('#minreg').text(commaSeparateNumber(Math.round(this.someValue)));
      }
  });

 function commaSeparateNumber(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return val;
  }
</script>
