<?php 
include("connectdb.php");

$sql = "UPDATE reservation SET status_seen_noti = '1' WHERE IdUser IS NOT NULL";
$rs = $conn->query($sql);

// echo json_encode({
//     "data": $rs
// })

echo 1;

?>