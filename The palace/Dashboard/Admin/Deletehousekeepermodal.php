<?php 
$idhouse = $_POST["idhouse"];
include("connectdb.php");

$sql = "DELETE FROM login WHERE Priority = '3' AND Id = '$idhouse'";
$result = $conn->query($sql);
$respond = [];
$respond["status"]= $result;
header('Content-type: application/json');
echo json_encode($respond);
?>