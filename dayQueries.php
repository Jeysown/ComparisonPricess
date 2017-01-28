<?php

$con = mysqli_connect('localhost','root','','comparison');

//Total Resorts per Website
$ResortPerWebsite = "SELECT website, SUM(yey) as number FROM (SELECT website,COUNT(*) as yey FROM wholeday GROUP BY website UNION SELECT website,COUNT(*) from `day` GROUP BY website) q GROUP BY website
";
$res=mysqli_query($con,$ResortPerWebsite);
$Websites = array();
$ResortsNumber = array();
$TotalResorts = 0;
while($row = mysqli_fetch_array($res)){
  array_push($Websites,$row[0]);
  array_push($ResortsNumber,(int)$row[1]);
  $TotalResorts += (int)$row[1];
}
//Total Resorts per Website

//Total Resorts Listed in two or more sites
$TotalResortsinTwoOrmoreWebsitesQuery = "SELECT count(*) AS Count FROM (SELECT website FROM wholeday GROUP BY Resorts_Name HAVING COUNT(Resorts_Name) > 1 )AS x";
$res2=mysqli_query($con,$TotalResortsinTwoOrmoreWebsitesQuery);
$row2 = mysqli_fetch_array($res2);
$TotalResortsinTwoOrmoreWebsites = (int)$row2[0];
$TotalResorts = $TotalResorts - (int)$TotalResortsinTwoOrmoreWebsites;
$totalResorts2Array = array($TotalResorts,$TotalResortsinTwoOrmoreWebsites);
//Total Resorts Listed in two or more sites

//Number of Resorts Listed in OLX/FB
$query = "SELECT ROUND(COUNT(*)/(SELECT count(*) from day) * 100, 0) FROM `day` WHERE O_R_Weekdays <> 0 AND O_R_Weekdays <> 1";
$res3 = mysqli_query($con,$query);
$row3 = mysqli_fetch_array($res3);
$percentageOFListedinFBorOLX = (int)$row3[0];
//Number of Resorts Listed in OLX/FB

//Number of Resorts Listed in Booking Sites
$query2 = "SELECT ROUND(COUNT(*)/(SELECT count(*) from `day`) * 100, 0) FROM `day` WHERE B_R_Weekdays <> 0 AND B_R_Weekdays <> 1";
$res4 = mysqli_query($con,$query2);
$row4 = mysqli_fetch_array($res4);
$percentageOFListedinBookingSites = (int)$row4[0];
//Number of Resorts Listed in OLX/FB

//Number of Resorts do not exist in OLX/FB
$query3 = "SELECT ROUND(COUNT(*)/(SELECT count(*) from `day`) * 100, 0) FROM `day` WHERE O_R_Weekdays = 0";
$res5 = mysqli_query($con,$query3);
$row5 = mysqli_fetch_array($res5);
$percentageOfResortsDonotExistinFBorOLX = (int)$row5[0];
//Number of Resorts Listed in OLX/FB

//Number of Resorts do not exist in Booking Sites
$query4 = "SELECT ROUND(COUNT(*)/(SELECT count(*) from `day`) * 100, 0) FROM `day` WHERE B_R_Weekdays = 0";
$res6 = mysqli_query($con,$query4);
$row6 = mysqli_fetch_array($res6);
$percentageOFResortsDoNotExistinBookingSites = (int)$row6[0];
//Number of Resorts Listed in OLX/FB

//Number of Resorts needs to contact in OLX/FB
$query5 = "SELECT ROUND(COUNT(*)/(SELECT count(*) from `day`) * 100, 0) FROM `day` WHERE O_R_Weekdays = 1";
$res7 = mysqli_query($con,$query5);
$row7 = mysqli_fetch_array($res7);
$percentageOfResortsNeedsToContactFBorOLX = (int)$row7[0];
//Number of Resorts Listed in OLX/FB

//Number of Resorts needs to contact in Booking Sites
$query6 = "SELECT ROUND(COUNT(*)/(SELECT count(*) from `day`) * 100, 0) FROM `day` WHERE B_R_Weekdays = 1";
$res8 = mysqli_query($con,$query6);
$row8 = mysqli_fetch_array($res8);
$percentageOFResortsNeedsToContactinBookingSites = (int)$row8[0];
//Number of Resorts Listed in OLX/FB

//This Array Contains the details about FB/OLX and Booking Sites
$percentages = array($percentageOFListedinFBorOLX,$percentageOFListedinBookingSites,$percentageOfResortsDonotExistinFBorOLX
,$percentageOFResortsDoNotExistinBookingSites,$percentageOfResortsNeedsToContactFBorOLX,$percentageOFResortsNeedsToContactinBookingSites);
 ?>
