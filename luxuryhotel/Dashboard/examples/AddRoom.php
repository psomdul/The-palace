<?php
$idroom = $_POST["idroom"];
$type = $_POST["type"];
$detail = $_POST["detail"];
$guest = $_POST["guest"];
$size = $_POST["size"];
$img = $_FILES['img']['name'];

$target = "../assets/img/".basename($img);
if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
    header('Content-type: application/json');
    include("connectdb.php");
    $sql = "INSERT INTO room (`Idroom`,`Type`,`Detail`,`Amountguest`,`Roomsize`,`picture`,`Status`) VALUES ('$idroom','$type','$detail','$guest','$size','$img','1')";

    $result = $conn->query($sql);
    $respond = [];
    $respond["status"]= $result;
    header('Content-type: application/json');
    echo json_encode($respond);

}
?>