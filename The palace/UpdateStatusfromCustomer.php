<?php

    include("connectdb.php");
    $idroom = $_GET["idroom"];

    $a = explode("|", $idroom);

    echo json_encode($a);
    // $query = "SELECT * FROM `room` WHERE Idroom = '$idroom' and IdUser = '$iduser' and Status = '2'";
    // $result = $conn->query($query);

    // if ($result->num_rows > 0) {
    //     $sql = "UPDATE `room` SET Status = '3' WHERE `idroom` = '$idroom'";

    //     if ($conn->query($sql) === TRUE) {
    //         // echo "change status is 3 success.";
    //         echo include("about1.php");
    //     }else{
    //         echo "change status is 4 error.";
    //     }
    // }else{
    //     echo "<script> alert('This link has expired')  </script>
    //     ";
        
    // }

    $count = count($a);
// echo $count;
    for ($i=0; $i < $count; $i++) { 
        # code...
        $idre = $a[$i];
        $query = "UPDATE `reservation` SET `Status`= '4' WHERE IdRe = '$idre'";

        if ($conn->query($query) != TRUE) {
            echo "change status is 4 error.";
            break;
        }
    }

    echo header("Location:confirmedsucces.php");
    
?>