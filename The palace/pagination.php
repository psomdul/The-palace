<?php 
include('connectdb.php');

$sql = "SELECT * FROM   reservation ";
// $count=mysql_query($sql);


$rs = $conn->query($sql);
$nr = mysqli_num_rows($rs);
// echo $nr;
$itemperpage = 5;
$totalpage = ceil($nr/$itemperpage);
if(isset($_GET['page']) && !empty($_GET['page'])){
    $page=$_GET['page'];
}else 
    $page=1;
    $offset = ($page-1) * $itemperpage;
    $sql1 = "SELECT * FROM   reservation LIMIT  $itemperpage OFFSET $offset";
    $rs1 = $conn->query($sql1);
    $nr1 = mysqli_num_rows($rs1);

if ($rs1->num_rows > 0) {
    while($row = $rs1->fetch_assoc()) {
        echo "id: " . $row["IdRe"]. " - Name: " . $row["Idroom"]. " " . $row["IdUser"]. "<br>";
        
    }
}
echo "<div class='pagination'>";
        for($i=1; $i<=$totalpage;$i++){
            if($i==$page){
            echo "<a class=\"active\"> $i </a>";
            }
            else {
            echo "<a href=\"http://localhost/project/luxuryhotel/pagination.php?page=$i\"> $i </a>";
        }}
        echo "</div>";


?>