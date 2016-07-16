<?php

include('inc_header.php');
include('inc_poke_mysql.php');

$lat = filter_input(INPUT_POST, 'lat', FILTER_SANITIZE_STRING);
$lng = filter_input(INPUT_POST, 'lng', FILTER_SANITIZE_STRING);


    $sql6 = "Insert into locationQueue (lat,lng) Values (" . $lat . "," . $lng . ");";
    $result5 = $conn->query($sql6);

//close mysql
$conn->close();
