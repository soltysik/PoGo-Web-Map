<?php

//sample URL for testing
//https://gotg.club/tools/gotg_area.php?minLat=30.396901685345366&maxLat=30.43187577168905&minLng=-87.2490406036377&maxLng=-87.1666431427002&maxAge=90&minAge=50&token=49bccb7a95e16581b109aec867cd2b24

include('inc_header.php');
include('inc_functions.php');
include('inc_globals.php');
include('inc_poke_mysql.php');


//get parameters
$minLat = floatval(filter_input(INPUT_GET, 'minLat', FILTER_SANITIZE_STRING));
$maxLat = floatval(filter_input(INPUT_GET, 'maxLat', FILTER_SANITIZE_STRING));
$minLng = floatval(filter_input(INPUT_GET, 'minLng', FILTER_SANITIZE_STRING));
$maxLng = floatval(filter_input(INPUT_GET, 'maxLng', FILTER_SANITIZE_STRING));
$type = floatval(filter_input(INPUT_GET, 'locType', FILTER_SANITIZE_STRING));

if ($minLng > $maxLng) {
   $sqlLng2 = " (lng between ". $maxLng." and 180 or lng between -180 and ".$minLng.")";
} else  {
    $sqlLng2 = " lng between ".$minLng." and ".$maxLng;
}
    


//define the sql where statements
$sqlLatLng = "lat between " . $minLat . " and " . $maxLat . " and ".$sqlLng2;


  
         
switch (true) {
     case $type == "-1": //null
         $sqlType = " and locType=-1";
        break;
     case $type == "0": //unknown
         $sqlType = " and locType=0"; //pogo
        break;
     case $type == "2":
         $sqlType = " and locType=2"; //stops
        break;
     case $type == "4": //all
         $sqlType = "";
        break;
    case $type == "1": //gym
         $sqlType = " and locType=1"; 
        break;
    case $type == "5": //pogo - unkonwn, gym, stop
         $sqlType = " and (locType=2 or locType=1 or locType=0)"; 
        break;
    default: //pogo 3
        $sqlType = " and (locType=2 or locType=1)";
        break;
}



        $sql3 = "SELECT iGuid,lat,lng,portalname, portalimage, locType from portals where " . $sqlLatLng .$sqlType . " order by locType limit 150";
 //$sql3 = "SELECT iGuid,lat,lng from Portal_All where " . $sqlLatLng . " limit 500";
        
      //  echo $sql3;
 
        $result3 = $conn->query($sql3);

        encodeJSON($result3);
       
    


//close the connection
$conn->close();
