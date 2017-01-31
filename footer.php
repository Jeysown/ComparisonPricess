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
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">


var markerOptions = {gridSize: 20, maxZoom: 20, imagePath:  'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'};

function initialize() {
  var markerCluster;
  var markerss =[];
  var marker;
  var mapOptions = {
    center: new google.maps.LatLng(14.181979,121.191378),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
  var infowindow = new google.maps.InfoWindow();

  var getLabel = function(data){
    var iconPath={};
    if(data=="lagunaprivateresort.com"){
      iconPath = {
        url:'assets/images/map1.png',
        scaledSize: new google.maps.Size(40, 40), // size

      };
    }else if(data == "pansolresorts.com.ph"){
      iconPath = {
        url:'assets/images/map2.png',
        scaledSize: new google.maps.Size(40, 40), // size

      };
    }else if(data == "lagunaspringresorts.com "){
      iconPath = {
        url:'assets/images/map3.png',
        scaledSize: new google.maps.Size(40, 40), // size

      };
    }else if(data == "lagunaprivatepools.com"){
      iconPath = {
        url:'assets/images/map4.png',
        scaledSize: new google.maps.Size(40, 40), // size

      };
    }else if(data == "calambaresorts.com.ph"){
      iconPath = {
        url:'assets/images/map5.png',
        scaledSize: new google.maps.Size(40, 40), // size

      };
    }else if(data == "pansolresorts.ph"){
      iconPath = {
        url:'assets/images/map6.png',
        scaledSize: new google.maps.Size(40, 40), // size

      };
    }else if(data == "lagunaresorts.com.ph"){
      iconPath = {
        url:'assets/images/map7.png',
        scaledSize: new google.maps.Size(40, 40), // size

      };
    }
    return iconPath;
  }


  $.getJSON('data.json', function(data) {
    $.each( data, function(i, value) {
      var myLatlng = new google.maps.LatLng(value.lat, value.long);
      var content = "<p>"+"Website: ".bold() + value.website+"<br />"+"Resort Name: ".bold()+value.resort+"<br />"+"Address: ".bold()+value.address +"<p>";

      marker = new google.maps.Marker({
        position: myLatlng,
        //icon: getCustomIcons(value.website),
        icon: getLabel(value.website),
        title: value.website,
        map: map
      });
      markerss.push(marker);
      bindInfoWindow(marker, map, infowindow, content);

    });

    markerCluster = new MarkerClusterer(map,markerss,markerOptions);

  });

}


function bindInfoWindow(marker, map, infowindow, content) {
  google.maps.event.addListener(marker, 'click', function () {
    infowindow.setContent(content);
    infowindow.open(map, marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlbfgiXejCsBBpDWR3WedpCkdSNbS6ZXc&callback=initMap">
</script>
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
