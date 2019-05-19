<?php 

session_start();

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/OAuth.php';
require 'PHPMailer-master/src/POP3.php';



$email = 'isomdul@gmail.com';
$password = '024665068';
$subject = 'Testing PHP Mailer on PHP Version 5.6';
$strMessage = 'PHP Version 5.6, SMTP Gmail ';
$strTo = 'psomdul@gmail.com';

?>

<?php
header("Content-type:application/json");
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
    $mail->SMTPDebug = 2;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->SetFrom($email);
    $mail->Subject = $subject;
    $mail->Body = $strMessage;
    $mail->AddAddress($strTo);
    $mail->send();
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>
<html>
<head>
<title>PHPMailer Sending Email</title>
</head>
<body>
</body>
</html>