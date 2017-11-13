<html>
<head>
<body>
         <?php
           include "student_header.php";
        ?>
<form>
    <h1 align="center">RECOVER PASSWORD</h1><br><br>
<table align="center" width="30%">
    <tr><td><label>NAME</label><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1" /></br></tr>
    <tr><td colspan="2"><input type="submit" name="b1" value="" style="background: url(images/img].png); width:200px; height:65px"/><br></tr></table>
<?php
if(isset($_REQUEST["b1"]))
{
$n=$_REQUEST["t1"];
$db=mysql_connect("localhost","root","");
mysql_select_db("mcqtest",$db);
$q="select * from tblogin2 where name='$n'";
$result=mysql_query($q);
if(mysql_num_rows($result)>0)
{
$row=mysql_fetch_array($result);
extract($row);
echo "<form><table align='center' width='30%'><tr>";
echo "<input type='hidden' name='t1' value='$n'/></br>";
echo "<tr><td><label>SECURITY QUESTION</label><td><input type='text' name='t2' value='$securityQuestion' readonly/></br></tr>";
echo "<tr><td><label>SECURITY ANSWER</label><td><input type='text' name='t3' required /></br></tr>";
echo "<tr align='center'><td colspan='2'><input type='submit' name='b2' value='GENERATE PASSWORD' style='background:url(/images/get-password-button3_1.png); width:246px; height:49px'/></br></tr></table>";
}
}
if(isset($_REQUEST["b2"]))
{
$n=$_REQUEST["t1"];
$sq=$_REQUEST["t2"];
$sa=$_REQUEST["t3"];
$db=mysql_connect("localhost","root","");
mysql_select_db("mcqtest",$db);
$q="select * from tblogin2 where name='$n' and securityQuestion='$sq' and securityAnswer='$sa'";
$result=mysql_query($q);
if(mysql_num_rows($result)>0)
{
$row=mysql_fetch_array($result);
extract($row);	
echo "<table align='center' width='30%'><tr><td><label>PASSWORD:</label><td><input type='text' value='$password' readonly/></br></tr></table>";	
}
}	
?>
 </br></br>
    <a href="student_login.php">BACK TO LOGIN</a>
<?php
           include "student_footer.php";
        ?>
</form>
</body>
</html>