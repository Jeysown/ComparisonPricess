<center><h1 style="font-weight:bold">Price in a Half Day</h1></center>
<div class="col-lg-6">
<center class="yey"><h1>&#8369;<span id="minreg"></span></h1>Minimum Price in a Regular Season</center>
</div>
<div class="col-lg-6">
<center class="yey"><h1>&#8369;<span id="maxreg"></span></h1>Maximum Price in a Regular Season</center>
</div>
<div class="col-lg-6">
<center class="yey"><h1>&#8369;<span id="minpeak"></span></h1>Minimum Price in a Peak Season</center>
</div>
<div class="col-lg-6">
<center class="yey"><h1>&#8369;<span id="maxpeak"></span></h1>Maximum Price in a Peak Season</center>
</div>




<script type="text/javascript">
  $({someValue: 0}).animate({someValue: 3000}, {
      duration: 2000,
      easing:'swing',
      step: function() {
          $('#minreg').text(commaSeparateNumber(Math.round(this.someValue)));
      }
  });
  $({someValue: 0}).animate({someValue: 18000}, {
      duration: 2000,
      easing:'swing',
      step: function() {
          $('#maxreg').text(commaSeparateNumber(Math.round(this.someValue)));
      }
  });

  $({someValue: 0}).animate({someValue: 3500}, {
      duration: 2000,
      easing:'swing',
      step: function() {
          $('#minpeak').text(commaSeparateNumber(Math.round(this.someValue)));
      }
  });
  $({someValue: 0}).animate({someValue: 18000}, {
      duration: 2000,
      easing:'swing',
      step: function() {
          $('#maxpeak').text(commaSeparateNumber(Math.round(this.someValue)));
      }
  });
 function commaSeparateNumber(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return val;
  }
</script>
