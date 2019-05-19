<?php

include("connectdb.php");
$query = "SELECT * FROM user u INNER JOIN room r ON r.IdUser = u.IdUser INNER JOIN type_room t ON t.IdType = r.Type INNER JOIN status_reserver s ON s.StatusId = r.Status WHERE (r.Status = '1' OR r.Status= '2') AND status_update_clean  = '1'
ORDER BY Idroom";
$rs = $conn->query($query);

$num = $rs->num_rows;

$data = array(
    'num' => $num
   );

   echo json_encode($data);
?>