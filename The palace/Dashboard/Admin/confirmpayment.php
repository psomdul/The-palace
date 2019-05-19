<?php  
$idre = $_GET["IdRe"];
header('Content-type: application/json');
include("connectdb.php");

$sql = "UPDATE reservation SET status_confirmpayment = '1' WHERE IdRe = '$idre'";
$result = $conn->query($sql);
$respond = [];
$respond["status"]= $result;
header('Content-type: application/json');
echo json_encode($respond);






?>