<?php

$id_room = $_GET["id_room"];



header('Content-type: application/json');
include("connectdb.php");
$sql = "UPDATE room SET Status = '2', status_update_clean = '0' WHERE Idroom = '$id_room'";
$result = $conn->query($sql);
$respond = [];
$respond["status"]= $result;
header('Content-type: application/json');
echo json_encode($respond);
?>