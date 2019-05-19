<?php

$id_room = $_GET["id_room"];



header('Content-type: application/json');
include("connectdb.php");
$sql = "UPDATE room SET IdUser = null, Status='1',  guestnum = null, text = null, currenttime = null ,status_update_clean = '1' WHERE Idroom = $id_room";
$result = $conn->query($sql);
$respond = [];
$respond["status"]= $result;
header('Content-type: application/json');
echo json_encode($respond);
?>