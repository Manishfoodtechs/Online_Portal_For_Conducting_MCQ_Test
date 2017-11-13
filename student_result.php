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
        include "student_header.php";
        ?>
	<form>
            <h1 align="center">RESULT</h1>
        <?php
        
        if(isset($_SESSION["name"]))
        {   
        $n=$_SESSION["name"];
        $tot=$_SESSION["tot"];
$db=mysql_connect("localhost","root","");
mysql_select_db("mcqtest",$db);
$scode=$_SESSION["scode"];
$q="select * from tbstudent where name='$n'";
$result=mysql_query($q);   
if(mysql_num_rows($result)>0)
{
    $row=mysql_fetch_array($result);
    extract($row);
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
$mail->Subject = " MCQ Test";
$mail->AddAddress($email);
$q="select * from tbresult where name='$n' and subcode=$scode";
$result=mysql_query($q);
if(mysql_num_rows($result)>0)
{
    $row=mysql_fetch_array($result);
    extract($row);
    $m = "<div style='border:1px solid #aabbff;padding:20px;font-size:40px;background-
        color:#aabbff;color:white'><center><b>EDUCATION FIRST<b></center></div>


<div style='border:1px solid #edeff2;padding:20px;font-size:20px'>Hi <b>$n</b>,<br><br>You have recently 
given a test on our mcq conducting online portal.<br><br>Your score is <b>$score</b>/<b>$tot</b>.<br><br></div>

<div style='border:1px solid #aabbff;padding:10px;font-size:20px;background-color:#aabbff;color:white'>
<a href='https://www.facebook.com/Education-First-178223346033209/'><i><font style='font-family:arial;font-
size:15px'>EDUCATION FIRST</i></a><br>
Call Us: +91-9569021275</font></div>
";
    $mail->Body =$m;



 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else 
     {
    echo "<p>Thanks for giving the test.</p>";
    echo "<p>Your result has been mailed to you.</p>";
 }
        }
        }
        }
        ?>
         <?php
        include "student_footer.php";
        ?> 
        </form>
    </body>
</html>