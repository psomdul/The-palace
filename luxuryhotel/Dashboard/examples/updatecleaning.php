<?php 
include("connectdb.php");

$sql = "UPDATE room SET status_update_clean = '2' WHERE IdUser IS NOT NULL";
$rs = $conn->query($sql);

// echo json_encode({
//     "data": $rs
// })

echo 1;

?>