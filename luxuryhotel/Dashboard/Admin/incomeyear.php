<?php 
include("connectdb.php");
$mount = $_GET["year"];
$start = $mount . "-01-01";
$end = $mount . "-12-31";
$sql = "SELECT date_format(ArriveDate, '%Y') AS mo, SUM(datediff(DepartDate, ArriveDate) * Price) AS sum_price FROM  reservation 
WHERE ArriveDate  BETWEEN '$start' AND '$end' 
GROUP BY mo
ORDER BY  ArriveDate";
$result = $conn->query($sql);
$json = mysqli_fetch_all($result);

echo json_encode($json);


?>