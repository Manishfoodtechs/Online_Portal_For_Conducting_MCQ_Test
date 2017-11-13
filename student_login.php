<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    
    <script>
        function noBack()
        {
            window.history.forward();
        }
        </script>
</head>
<body onload="noBack();" onpageshow="if (event,persisted) noBack();" onunload="" >
     <?php
        include "student_header.php";
        
        if(isset($_SESSION["name"]))
{
            header('Location:student_my_account.php');
}
        ?>
    
    <form>
        <h1 align="center">LOGIN</h1><br><br>
<table align="center" width="30%">
<tr><td><label><b>NAME</b></label><td><input type="text" name="t1" placeholder="enter your name" required /></br></tr>

<tr><td><label><b>ROLL NUMBER</b></label><td><input type="number" name="t2" placeholder="enter your roll number" required /></br></tr>
<tr><td><label><b>PASSWORD</b></label><td><input type="password" name="t3" placeholder="enter your password" required /></br></br></tr>
<tr><td colspan="2"><a href="student_forgot_pasword.php">Forgot Password?</a></br></br></tr>
<tr><td colspan="2"><input type="submit" value="" name="b1" style="background: url(images/img].png); width:200px; height:65px"/></br></tr></table>
</form>
<?php


if(isset($_REQUEST["b1"]))
{
$r=$_REQUEST["t2"];
$p=$_REQUEST["t3"];
$n=$_REQUEST["t1"];
$db=mysql_connect("localhost","root","");
mysql_select_db("mcqtest",$db);
$q="select * from tbstudent where roll='$r' and password='$p'";
$result=mysql_query($q);
if(mysql_num_rows($result)>0)
{

$_SESSION["name"]=$n;
header('Location:student_my_account.php');
}
else
{
$message = "Invalid Roll Number or Password";
echo "<script type='text/javascript'>alert('$message');</script>";
}
}
?>
    </br></br>
    <a href="home.php">BACK TO HOME</a>
     <?php
        include "student_footer.php";
        ?>
    
</body>
</html>
