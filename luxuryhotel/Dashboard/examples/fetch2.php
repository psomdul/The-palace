<?php

include("connectdb.php");
$query = "SELECT * FROM reservation re
WHERE re.Status = '5' AND re.status_seen_noti2 = '0'";
$rs = $conn->query($query);

$num = $rs->num_rows;

$data = array(
    'num' => $num
   );

   echo json_encode($data);
?>