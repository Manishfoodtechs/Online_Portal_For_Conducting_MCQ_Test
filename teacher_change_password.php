<html>
<body> 
    <?php
        include "teacher_header.php";
        ?>
    <h1 align="center">CHANGE PASSWORD</h1><br><br>
<form>
    <table align="center" width="30%">
        <tr><td><label>ENTER NEW PASSWORD</label><td><input type="password" required name="t1" /><br/></tr>
        <tr><td><label>RE-ENTER NEW PASSWORD</label><td><input type="password" required name="t2" /><br/></tr>
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
$q="update tbteacher,tblogin2 set tbteacher.password='$n',tblogin2.password='$n' where tbteacher.name='$u' and tblogin2.name='$u'";
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
header('location:teacher_login.php');
}
}

        include "teacher_footer.php";
        ?>
</body>
</html>


