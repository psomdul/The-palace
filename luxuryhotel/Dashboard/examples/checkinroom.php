<?php

$id_room = $_GET["id_room"];
$idRe = $_GET["idRe"];
$idUser = $_GET["idUser"];


include("connectdb.php");
$sql = "UPDATE reservation SET Status = '5' WHERE IdRe = '$idRe'";
$sql2 = "UPDATE room SET Status = '5', IdUser = '$idUser'   WHERE Idroom = '$id_room'";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$respond = [];
$respond["status"]= $result;
$respond["status2"]= $result2;
header('Content-type: application/json');
echo json_encode($respond);
?>