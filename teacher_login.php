
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
        include "teacher_header.php";
        ?>
    
<form>
<h1 align="center">LOGIN</h1>
<br><br>
<table align="center" width="30%">
    <tr><td><label>Name</label><td><input type="text" name="t1" placeholder="enter your name" required /></br></tr>
    <tr><td><label>Password</label><td><input type="password" name="t2" placeholder="enter your password" required /></br></tr>
    <tr><td colspan="2"><a href="teacher_forgot_password.php">Forgot Password?</a></br></br></tr>
    <tr><td colspan="2"><input type="submit" name="b1" value="" style="background: url(images/img].png); width:200px; height:65px" /></br></tr>
</table>
</form>
<?php
if(isset($_REQUEST["b1"]))
{
$n=$_REQUEST["t1"];
$p=$_REQUEST["t2"];
$db=mysql_connect("localhost","root","");
mysql_select_db("mcqtest",$db);
$q="select * from tbteacher where name='$n' and password='$p'";
$result=mysql_query($q);
if(mysql_num_rows($result)>0)
{
session_start();
$_SESSION["name"]=$n;
header('Location:teacher_my_account.php');
}
else
{
echo "invalid name or password";
}
}
?>
    </br></br>
    <a href="home.php">BACK TO HOME</a>
     <?php
        include "teacher_footer.php";
        ?>
</body>
</html>