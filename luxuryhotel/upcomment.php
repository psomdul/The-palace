<?php 
include("connectdb.php");
$email = $_POST["email"];
$score = $_POST["score"];
$commentd = $_POST["commentd"];

$sql = "INSERT INTO `comment`(`email`, `score`, `comment`) VALUES ('$email','$score','$commentd')";
        $result = $conn->query($sql);
        $respond = [];
        $respond["status"]= $result;
header('Content-type: application/json');
echo json_encode($respond);
?>