<?php 
include("connectdb.php");
$id = $_GET["idUser"];
$name = $_GET["name"];
$sname = $_GET["sname"];
$phone = $_GET["phone"];
$email = $_GET["email"];
$detail = $_GET["detail"];

$sql = "UPDATE `user` SET `Name`='$name',`Sname`='$sname',`phone`='$phone',`Email`='$email',`Detail`='$detail' WHERE IdUser = '$id'";
$result = $conn->query($sql);
$respond = [];
$respond["status"]= $result;
header('Content-type: application/json');
echo json_encode($respond);

?>