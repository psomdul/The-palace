<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$testtest = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $testtest);
$conn->set_charset("utf-8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
for ($i=3011; $i <=3020 ; $i++) { 
  $sql="INSERT INTO `room` (`Idroom`, `Type`, `IdUser`, `Status`, `picture`, `Detail`, `Amountguest`, `Roomsize`, `Arrive`, `DepartDate`, `guestnum`) VALUES ('$i', '1', NULL, '2', 'img_4.jpg', '1. kingsize-bedroom  <br> 2. bath room and jacuzzi <br>4.Tea and coffee making facilities ,minibar<br> 5.LCD TV<br>6. Free breakfast, Wifi,fitness, "."Pool"." villa
  ', '3', '30', '', '', '');";
  if ($conn->query($sql) === TRUE) {
      echo "Connected successfully";
  }
}

// echo "Connected successfully";
?>