<?php

include('inc_header.php');
include('inc_poke_mysql.php');
include('inc_functions.php');

$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
$iGuid = filter_input(INPUT_POST, 'iGuid', FILTER_SANITIZE_STRING);


//$type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_STRING);
//$iGuid = filter_input(INPUT_GET, 'iGuid', FILTER_SANITIZE_STRING);


$ip = get_ip_address() ;

echo $ip." logged";

     $sql6 = "Select locType from portals where iGuid ='" .$iGuid. "'";
    $result5 = $conn->query($sql6);
    
      while ($row = mysqli_fetch_assoc($result5)) {
                $currentType = $row["locType"];
            }
           
     $sql6 = "Insert Into userEdits (userIP,startValue,endValue,iGuid) VALUES ('".$ip."',".$currentType.",".$type.",'".$iGuid."')";
    $result5 = $conn->query($sql6);        
            
    //add credits to member
    $sql6 = "Update portals set locType = ".$type .",sourceData = 1 where iGuid ='" .$iGuid. "'";
    $result5 = $conn->query($sql6);

   
//close mysql
$conn->close();
