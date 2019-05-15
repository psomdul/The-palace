<?php
include("connectdb.php");

$sql = "SELECT * FROM `room`";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "idroom: " . $row["Idroom"]. "<br>".
        "type: " . $row["Type"]. "<br>".
        "Status: " . $row["Status"]. "<br>".
        "Picture: " . $row["picture"]. "<br>";
    }
}

?>