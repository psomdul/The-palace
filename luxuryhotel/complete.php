<?php
    include("connectdb.php");
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/SMTP.php';
    require 'PHPMailer-master/src/OAuth.php';
    require 'PHPMailer-master/src/POP3.php';

    $Type = $_POST["Type"];
    $Nametype = $_POST["NameType"];
    $Price = $_POST["Price"];
    $imgmail = $_POST["imgmail"];
    $strarrivedate = $_POST["arrivedate"];
    $strdepartdate = $_POST["departdate"];
    $arrivedate2 = strtotime($strarrivedate);
    $departdate2 = strtotime($strdepartdate);
    $arrivedate = date('Y-m-d',$arrivedate2);
    $departdate = date('Y-m-d', $departdate2);
    $guest = $_POST["guest"];
    $strTo = $_POST["email"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $message = $_POST["message"];
    $phone = $_POST["phone"];
    $nroom = $_POST["nroom"];

    $path = $imgmail;
    
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    $sumPrice = $Price * $nroom ;
    function sendMsg($idroom,$Type,$sumPrice,$fname,$nroom,$arrivedate,$departdate,$base64,$imgmail,$Nametype,$strTo){
        $email = 'isomdul@gmail.com';
        $password = '024665068';
        $subject = 'Confirm Reservation.';
        
        $a = implode("|",$idroom);
        $strMessage = " <center>".
        "<div style=\"width: 280px;".
"height: 74px;".
"border: solid 3px #393939;".
"font-size: 43.32px;".
"font-weight: 600;".
"color: #393939;".
"line-height: 68px;".
"text-align: center;".
"margin-bottom: 50px\">".
            "The Palace".
        "</div>".
    "</center>".
    
       "
        ถึง คุณ $fname <br><br>  
        ทางโรงแรม The Palace ได้รับการจองห้องพักจากท่าน <br> 
        ห้องพักประเภท: $Nametype จำนวน: $nroom ห้อง <br> 
        เข้าพักวันที่: $arrivedate และ ออกวันที่: $departdate<br>
        รวมเงินที่ต้องชำระ: $sumPrice บาท <br> สามารถชำระเงินผ่านช่องทางต่างๆได้ที่เลขบัญชีด้านล่างดังนี้ <br> ชื่อบัญชีธนาคาร : นายปฏิภาณ สมดุลยกนก / Patiparn Somdulyakanok <br> <h3>1 ​​ธนาคารกรุงเทพ : xxx-xxxx-xxxx <br> 2.ธนาคารกรุงไท​ย : xxx-xxxx-xxxx <br> 3.​​​ธนาคารกสิกรไทย : xxx-xxxx-xxxx <br> 4.​ธนาคารไทยพาณิชย์ : xxx-xxxx-xxxx <br> 5. Promtpay : 08x-xxxx-xxxx</h3> <br> หากท่านต้องการยืนยันการจอง โปรดทำตามขั้นตอนด้านล่าง ทีละขั้นตอน <br>
       
         1.โปรดคลิกลิ้ง เพื่อนยืนยันการจองห้อง<a href=\"http://localhost/project/luxuryhotel/UpdateStatusfromCustomer.php?idroom=$a\">ยืนยันการจองห้องพัก</a><br>
        <br>2.คลิกลิ้งเพื่อทำการยืนยันการชำระเงิน<a href=\"http://localhost/project/luxuryhotel/uploadpaymentimg.php?idroom=$a\">ยืนยันการชำระเงิน</a><br>
        และลูกค้าสามารถให้คะแนนความพึงพอใจเมื่อได้เข้าพักได้ที่กดที่ลิ้งนี้ <a href=\"http://localhost/project/luxuryhotel/comment.php?email=$strTo\">ให้คะแนนความพึงพอใจ</a>
        <br><br>ขอแสดงความนับถือ <br>
        ฝ่ายจัดการห้องพัก
        <center><h3>ตัวอย่างห้องพัก</h3></center><br>
        
        
        <center><img src=\"cid:room\"></center><br>";
        $mail = new PHPMailer\PHPMailer\PHPMailer();;
        $contextOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false
            )
        );
        try{
            $mail->IsHTML(true);
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->Username = $email;
            $mail->Password = $password;
            $mail->SetFrom($email);
            $mail->Subject = $subject;
            $mail->Body = $strMessage;
            $mail->AddAddress($GLOBALS['strTo']);
            $mail->AddEmbeddedImage($imgmail,'room');
            $mail->send();
        } catch (Exception $e) {
            echo "err";
        }

        echo "thankyou";
    }

    function update_detail_user($id_user, $message, $conn) {
        $sql_u_u_d = "UPDATE user SET Detail = '{$message}' WHERE IdUser = '{$id_user}'";
        $result = $conn->query($sql_u_u_d);
    }
    
    date_default_timezone_set("Asia/Bangkok");
    $currenttime = date("Y-m-d H:i:s");
    // check room had reserve
    $sql = "SELECT DISTINCT(r.Idroom) FROM room r 
    LEFT JOIN reservation re ON re.Idroom = r.Idroom
    WHERE r.Type = '$Type' AND
    (
        r.Idroom NOT in
        (
            SELECT DISTINCT(Idroom) FROM reservation WHERE 
            ArriveDate BETWEEN '$arrivedate' AND '$departdate'
            OR
           '$arrivedate' BETWEEN ArriveDate AND DATE_ADD(DepartDate, INTERVAL -1 DAY)
        )
    )
    ORDER BY r.Idroom Limit 0, $nroom ";
    // result check reserve
    $result = $conn->query($sql);
    $numroom = $result->num_rows;
    // $row = $result->fetch_assoc();
    $a=array();
    // $idroom = $row["Idroom"];
    //ถ้ามีคนมากกว่าศูนย์แสดงว่ามีคนจอง ถ้าเป็น 0 ก็เป็นห้องว่าง
    if ($result->num_rows == 0) {
        // output data of each row
       echo "Reserved";
    }else{
        //check email ซ้ำ
        $sql = "SELECT * FROM `user` WHERE Email = '$strTo'" ;
        $result2 = $conn->query($sql);
        if($result2->num_rows == 1){ 
            // for()
            // echo "34";
            $row2 = $result2->fetch_assoc();
            $iduser = $row2["IdUser"];
            $sql4 = "UPDATE user SET phone = '$phone' WHERE IdUser = '$iduser'";
            $conn->query($sql4);
            if(isset($_POST["message"])){
                update_detail_user($iduser, $message, $conn);
            }

            for($i=0;$i<$numroom;$i++){
                $row = $result->fetch_assoc();
                $idroom = $row["Idroom"];
                // array_push($a, $idroom);
                $sql = "INSERT INTO `reservation`(`Idroom`, `IdUser`, `Status`, `ArriveDate`, `DepartDate`, `currenttime`,`Price`) VALUES ('$idroom','$iduser','3','$arrivedate','$departdate','$currenttime','$Price')";
                $conn->query($sql);

                array_push($a, $conn->insert_id);
                // sendMsg($row["Idroom"], $iduser);
            }
            // $sql = "UPDATE `room` SET Status = '2', `IdUser` = '$iduser' , `Arrive` = '$arrivedate', `text` = '$message' , `DepartDate`= '$departdate', `guestnum`= '$guest',currenttime = '$currenttime' WHERE `idroom` = '$idroom'";
            // $sql = "INSERT INTO `reservation`(`Idroom`, `IdUser`, `Status`, `ArriveDate`, `DepartDate`, `currenttime`,`Price`) VALUES ('$idroom','$iduser','2','$arrivedate','$departdate','$currenttime','$Price')";
    
            // if ($conn->query($sql) === TRUE) {
            sendMsg($a, $Type,$sumPrice,$fname , $nroom,$arrivedate,$departdate,$base64,$imgmail,$Nametype,$strTo);
            // }else{
                // echo "err db 110";
            // }
            
        } else {
            // insert ข้อมูลเข้า base
            // echo "45";
            // $row = $result->fetch_assoc();
            // $idroom = $row["Idroom"];
            $sql_user = "INSERT INTO `user`(`Name`, `Sname`, `Email`, `phone`) VALUES ('$fname', '$lname', '$strTo', '$phone')";
            
            if ($conn->query($sql_user) === TRUE) {
                $iduser = $conn->insert_id;

                if(isset($_POST["message"])){
                    update_detail_user($iduser,$message, $conn);
                }
                    // อัพเดทห้องว่ามียูซเซอร์เข้าอยู่แล้ว
                // $sql = "UPDATE `room` SET Status = '2', `IdUser` = '$iduser' , `Arrive` = '$arrivedate', `text` = '$message' , `DepartDate`= '$departdate', `guestnum`= '$guest', currenttime = '$currenttime' WHERE `idroom` = '$idroom'";
                for($i=0;$i<$numroom;$i++){
                    $row = $result->fetch_assoc();
                    $idroom = $row["Idroom"];

                    $sql = "INSERT INTO `reservation`(`Idroom`, `IdUser`, `Status`, `ArriveDate`, `DepartDate`, `currenttime`,`Price`) VALUES ('$idroom','$iduser','3','$arrivedate','$departdate','$currenttime','$Price')";
                    $conn->query($sql);

                    array_push($a, $conn->insert_id);
                }
                
                sendMsg($a, $Type,$sumPrice,$fname , $nroom,$arrivedate,$departdate,$base64,$imgmail,$Nametype,$strTo);
        
            } else {
                echo "err";
            }
        }
        //เพิ่มข้อมูลลูกค้าไปใน base
        // $sql = "INSERT INTO `user`(`Name`, `Sname`, `Email`) VALUES ('$fname', '$lname', '$email')";

        // if ($conn->query($sql) === TRUE) {
            
        //     $iduser = $conn->insert_id;
        //         // อัพเดทห้องว่ามียูซเซอร์เข้าอยู่แล้ว
        //     $sql = "UPDATE `room` SET `IdUser`= '$iduser' WHERE `idroom` = '$idroom'";
    
        //     if ($conn->query($sql) === TRUE) {
        //         echo "<h1>thank you $iduser</h1>";
        //     }
    
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }

    }
    
    
    $conn->close();
?>