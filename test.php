<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
       include 'class.smtp.php';
       include 'class.phpmailer.php';
        $mail = new   PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587 465
$mail->IsHTML(true);
$mail->Username = "manikchhabra1275@gmail.com";
$mail->Password = "9988871275";
$mail->SetFrom("manikchhabra1275@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("neh382852@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
      ?>
    </body>
</html>
