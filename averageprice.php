<center><h1 style="font-weight:bold">Average Price of a Resort - Day</h1></center>
<div class="col-lg-6">
<center class="yey1"><h1>&#8369;<span id="minreg"></span></h1>Average Price in a regular season (Weekdays)</center>
</div>
<div class="col-lg-6">
<center class="yey1"><h1>&#8369;<span id="maxreg"></span></h1>Average Price in a regular season Price (Weekends)</center>
</div>
<div class="col-lg-6">
<center class="yey1"><h1>&#8369;<span id="minpeak"></span></h1>Average Price in a Peak Season (Weekdays)</center>
</div>
<div class="col-lg-6">
<center class="yey1"><h1>&#8369;<span id="maxpeak"></span></h1>Average Price in a Peak Season (Weekends)</center>
</div>




<script type="text/javascript">
  $({someValue: 0}).animate({someValue: 6152}, {
      duration: 2000,
      easing:'swing',
      step: function() {
          $('#minreg').text(commaSeparateNumber(Math.round(this.someValue)));
      }
  });
  $({someValue: 0}).animate({someValue: 6956}, {
      duration: 2000,
      easing:'swing',
      step: function() {
          $('#maxreg').text(commaSeparateNumber(Math.round(this.someValue)));
      }
  });

  $({someValue: 0}).animate({someValue: 8214}, {
      duration: 2000,
      easing:'swing',
      step: function() {
          $('#minpeak').text(commaSeparateNumber(Math.round(this.someValue)));
      }
  });
  $({someValue: 0}).animate({someValue: 8922}, {
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
