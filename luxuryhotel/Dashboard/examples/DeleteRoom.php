<?php
$idroom = $_POST["idroom"];

include("connectdb.php");
$sql = "DELETE FROM room WHERE Idroom = '$idroom'";

$result = $conn->query($sql);
$respond = [];
$respond["status"]= $result;
header('Content-type: application/json');
echo json_encode($respond);
?>