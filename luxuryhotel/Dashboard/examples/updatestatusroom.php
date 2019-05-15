<?php
$changestatusroom = $_POST["chagestatus"];
$idroom = $_POST["idroom"];
include("connectdb.php");

$sql = "UPDATE room SET status_update_clean = '$changestatusroom' WHERE Idroom = '$idroom'";
$result = $conn->query($sql);
$respond = [];
$respond["status"]= $result;
header('Content-type: application/json');
echo json_encode($respond);


?>