<?php
 include("connectdb.php");
 $sql = "SELECT IdRe, currenttime FROM `reservation` WHERE  Status = '3'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $idre = $row["IdRe"];
        $date = Date('Y-m-d', strtotime("+3 days", strtotime($row["currenttime"])));
        $datenow = Date('Y-m-d');

        if($date == $datenow){
            $resetdate = Date('Y-m-d', strtotime("0000-00-00"));
            $query = "DELETE FROM reservation WHERE IdRe = $idre";
            $conn->query($query);
        }
    }
 }
?>