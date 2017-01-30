<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript">


  var markerOptions = {gridSize: 15, maxZoom: 18, imagePath:  'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'};

  function initialize() {
    var markerCluster;
    var markerss =[];
    var marker;
    var mapOptions = {
      center: new google.maps.LatLng(14.1757058,121.1807974),
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    var infowindow = new google.maps.InfoWindow();

    var getLabel = function(data){
      var label = "A"
      if(data=="lagunaprivateresort.com"){
        label = "A";
      }else if(data == "pansolresorts.com.ph"){
        label = "A";
      }else if(data == "lagunaspringresorts.com "){
        label = "A";
      }else if(data == "lagunaprivatepools.com"){
        label = "A";
      }else if(data == "calambaresorts.com.ph"){
        label = "A";
      }else if(data == "pansolresorts.ph"){
        label = "A";
      }else if(data == "lagunaresorts.com.ph"){
        label = "A";
      }
      return label;
    }


    $.getJSON('data.json', function(data) {
      $.each( data, function(i, value) {
        var myLatlng = new google.maps.LatLng(value.lat, value.long);
        var content = value.website +"\n"+value.resort+"\n"+value.address;

        marker = new google.maps.Marker({
          position: myLatlng,
          //icon: getCustomIcons(value.website),
          label: getLabel(value.website),
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
</head>
<body onload="initialize()">
  <form id="form1" runat="server">
    <div id="map_canvas" style="width: 500px; height: 400px"></div>
  </form>
</body>
</html>
