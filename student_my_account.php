<html>
<head>
    
</head>

<?php

        include "student_header.php";
     ?>
<body>
    <h1 align="center">MY ACCOUNT</h1>
    <?php
if(isset($_SESSION["name"]))
{
$n=$_SESSION["name"];
echo "<p align='right' style='font-size:23px'><u>welcome $n<u></p>";
echo "<form align='center'>";
echo "<input type='submit' name='b1' value='CHANGE PASSWORD' style='background:url(/images/change.png); width:246px; height:49px' /><br/></br>";
echo "</form>";
echo "<form align='center'><input type = 'submit' value = 'START TEST' name = 'b2' style='background:url(/images/test_button_en.png); width:246px; height:49px' /></form>";
echo "<form align='center'><input type='hidden' name='name' value='$n' />"
        . "<input type = 'submit' value = 'VIEW PROFILE' name = 'b3' style='background:url(/images/view_profile_button_1.png); width:246px; height:49px' /></form>";
if(isset($_REQUEST["b1"]))
{
header('Location:student_change_password.php');
}
if(isset($_REQUEST["b2"]))
{
header('Location:student_select_subject.php');
}
if(isset($_REQUEST["b3"]))
{
    echo "<table border='1' width='50%' align='center'>";
    $n=$_REQUEST["name"];
    $db=mysql_connect("localhost","root","");
    mysql_select_db("mcqtest",$db);
    $q="select * from tbstudent where name='$n' ";
    $result=mysql_query($q);
    if(mysql_num_rows($result)>0)
    {
        $row=mysql_fetch_array($result);
        extract($row);
        echo "<tr><td colspan='2' align='center'>"; ?> 
    <img height="150" width="150" src="images/<?php echo "$image"; ?> "/>
 <?php echo "</td></tr>";
        echo "<tr><td>Roll Number<td>$roll</td></tr>";
        echo "<tr><td>Department<td>$dept</td></tr>";
        echo "<tr><td>Phone Number<td>$phone</td></tr>";
        echo "<tr><td>Email Id:<td>$email</td></tr>";
        echo "<tr><td>University<td>$university</td></tr>";
    }
    echo "</table>";

}
}
else
{
header('Location:student_login.php');
}
?>
     <?php
        include "student_footer.php";
        ?>
</body>
</html>