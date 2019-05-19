<?php 
$idhouse = NULL;
$fnamehouse = $_POST["fname"];
$lnamehouse = $_POST["lname"];
$idcard = $_POST["idcard"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$User = $_POST["User"];
$Password = $_POST["Password"];
// $img = $_POST["img"];
// $file = addslashes(file_get_contents($_FILES["img"]["img"]));
$img = $_FILES['img']['name'];


$target = "../assets/img/".basename($img);
if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
    header('Content-type: application/json');
    include("connectdb.php");
    
    $sql = "INSERT INTO login (`Id`,`fname`,`lname`,`IDcard`,`tel`,`address`,`Priority`,`User`,`Password` ,`img` ) VALUES ('$idhouse','$fnamehouse','$lnamehouse','$idcard','$phone','$address','3','$User','$Password','$img')";
    $result = $conn->query($sql);
    $respond = [];
    $respond["status"]= $result;
    header('Content-type: application/json');
    echo json_encode($respond);
}

?>