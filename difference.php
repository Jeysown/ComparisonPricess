<center><h1 style="font-weight:bold">Difference between Price</h1></center>
<div class="col-lg-12">
<center class="yey2"><h1><span id="minreg"></span>%</h1>Difference between Peak season and regular season</center>
</div>





<script type="text/javascript">
  $({someValue: 0}).animate({someValue: 22}, {
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
