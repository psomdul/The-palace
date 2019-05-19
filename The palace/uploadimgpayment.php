<?php 
include("connectdb.php");
$idre = $_POST["IdRe"];
$img = $_FILES['img']['name'];
$array = explode(',', $idre);
  $count = count($array);
  
// echo json_encode($count);
$respond = [];
$target = "../luxuryhotel/Dashboard/examples/images/paymentimg/".basename($img);


if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
    for($i=0 ; $i < $count; $i++){

        $idRe = $array[$i];
        $sql = "UPDATE reservation SET img = '$img' WHERE IdRe = '$idRe'";
    
        $result = $conn->query($sql);
        $respond["status"]= $result;
        
    }
    
}

header('Content-type: application/json');
echo json_encode($respond);
?>