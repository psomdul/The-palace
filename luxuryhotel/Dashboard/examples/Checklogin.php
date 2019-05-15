<?php

session_start();
 if(isset($_POST['username'])){
    include("connectdb.php");   
    $username = $_POST["username"];
    $password = $_POST["password"];
     $sql = "SELECT *FROM login l
     INNER JOIN priority p ON p.IdPrio = l.Priority 
     WHERE User = '$username' AND Password = '$password'";
     $result = $conn->query($sql);
     if(mysqli_num_rows($result)==1){

        $row = $result->fetch_assoc();
       
        $_SESSION["fname"] = $row["fname"];
        $_SESSION["lname"] = $row["lname"];
        $_SESSION["ID"] = $row["Id"];
        $_SESSION["User"] = $row["User"];
        $_SESSION["img"] = $row["img"];
        $_SESSION["Userlevel"] = $row["Priority"];
        $_SESSION["NamePrio"] = $row["NamePrio"];

        if($_SESSION["Userlevel"]=="1"){ //owner
            
          Header("Location: Owner.employee.php");

        }

        if ($_SESSION["Userlevel"]=="2"){  //Admin

          Header("Location: Admin.Housekeeper.php");

        }
        if ($_SESSION["Userlevel"]=="3"){  //Housekeeper

            Header("Location: Housekeeper.php");
  
          }

    }else{
      echo "<script>";
          echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
          echo "window.history.back()";
      echo "</script>";

    }

}else{


Header("Location: room1.php"); //user & password incorrect back to login again

}


?>