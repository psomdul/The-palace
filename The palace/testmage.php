<?php

$path = '../luxuryhotel/images/img_1.jpg';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
echo "<img src=".$base64.">";
echo "<a href=".$base64.">sss</a>";
echo json_encode($base64);

?>