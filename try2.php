<?php
set_time_limit(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comparison";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$data = array();


$sql = "SELECT website, resort,address FROM maps";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    array_push($data,array("website" =>$row['website'],
    "resort"=>$row['resort'],
    "address"=>$row['address'],
    "lat"=>0,"long"=>0));
  }

} else {
  echo "0 results";
}


writeNewData($data);
////GET THE LAT AND LONG
function writeNewData($data) {

  for ($row = 0; $row < count($data); $row++) {
    $cols = count($data[$row]);
    for($col = 0; $col < $cols; $col++) {
      // echo $data[$row][2].'<br>';\
      if( $col == 2 ){
        // $address = $data[$row][$col];
        // $resort_name =$data[$row][1];
        // $website = $data[$row][0];
         $data = getLatLng($row,$data);
      }
    }
  }
  echo json_encode($data);
}
  $newData = array();
function getLatLng($row,$data) {

  $url = "https://maps.google.com/maps/api/geocode/json?key=AIzaSyAMb9UaI9vwdnAHWo6gd9w4g620KdcZGOQ&address=".urlencode($data[$row]['address'])."&sensor=false&region=CALABARZON";
  $resp_json = file_get_contents($url);
  $resp = json_decode($resp_json, true);


  $geometry = $resp['results'][0]['geometry'];

  $lat = $geometry['location']['lat'];
  $long = $geometry['location']['lng'];

  $data[$row]['lat'] = $geometry['location']['lat'];
  $data[$row]['long'] = $geometry['location']['lng'];

  return $data;
  }




  ?>
