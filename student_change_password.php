<html>
<body>
    <?php
        include "student_header.php";
        ?>
    <h1 align="center">CHANGE PASSWORD</h1><br><br>
<form>
    <table align="center" width="30%">
        <tr><td><label>ENTER NEW PASSWORD</label><td><input type="password" name="t1" required /><br></tr>
        <tr><td><label>RE-ENTER NEW PASSWORD</label><td><input type="password" name="t2" required /><br><br></tr>
        <tr><td colspan="2"><input type="submit" name="b1" value="" style="background: url(images/img].png); width:200px; height:65px" /><br/></tr>
    </table>
</form>
<?php
if(isset($_REQUEST["b1"]))
{
$n=$_REQUEST["t1"];
$c=$_REQUEST["t2"];
$db=mysql_connect("localhost","root","");
mysql_select_db("mcqtest",$db);
if(isset($_SESSION["name"]))
{
if($n==$c)
{
 $u=$_SESSION["name"];   
$q="update tbstudent,tblogin2 set tbstudent.password='$n',tblogin2.password='$n' where tbstudent.name='$u' and tblogin2.name='$u'";
mysql_query($q);
?>
    <script>
        alert("Password Successfully Changed");
    </script>
    <?php
}
}
else
{
header('location:student_login.php');
}
}
?>
    <?php
        include "student_footer.php";
        ?>
</body>
</html>


