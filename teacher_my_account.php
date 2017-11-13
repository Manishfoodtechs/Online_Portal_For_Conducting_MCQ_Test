<html>
<head>
    
</head>
<body>
<?php

        include "teacher_header.php";
        ?>
<h1 align="center">MY ACCOUNT</h1>
<?php
if(isset($_SESSION["name"]))
{	
$n=$_SESSION["name"];
echo "<p align='right' style='font-size:23px'><u>welcome $n<u></p>";
echo "<form align='center'>";
echo "<input type='submit' name='b1' value='CHANGE PASSWORD' style='background:url(/images/change.png); width:246px; height:49px' /><br/></br>";
echo "</form>";
echo "<form align='center'><input type = 'submit' value = 'UPLOAD QUESTION' name = 'b2' style='background:url(/images/addquestion_button_1.png); width:246px; height:49px'  /></form>";
echo "<form align='center'><input type='hidden' name='name' value='$n' />"
        . "<input type = 'submit' value = 'VIEW PROFILE' name = 'b3' style='background:url(/images/view_profile_button_1.png); width:246px; height:49px' /></form>";
if(isset($_REQUEST["b1"]))
{
header('Location:teacher_change_password.php');
}
if(isset($_REQUEST["b2"]))
{
header('Location:teacher_add_question.php');
}
if(isset($_REQUEST["b3"]))
{
    echo "<table border='1' width='50%' align='center'>";
    $n=$_REQUEST["name"];
    $db=mysql_connect("localhost","root","");
    mysql_select_db("mcqtest",$db);
    $q="select * from tbteacher where name='$n' ";
    $result=mysql_query($q);
    if(mysql_num_rows($result)>0)
    {
        $row=mysql_fetch_array($result);
        extract($row);
        echo "<tr><td><b>DEPARTMENT</b><td>$dept</td></tr>";
        echo "<tr><td><b>PHONE NUMBER</b><td>$phone</td></tr>";
        echo "<tr><td><b>EMAIL</b><td>$email</td></tr>";
        $q="select * from tbsubject where id='$subcode' ";
        $result=mysql_query($q);
        if(mysql_num_rows($result)>0)
        {
            $row=mysql_fetch_array($result);
            extract($row);
             echo "<tr><td><b>SUBJECT</b><td>$subjname</td></tr>";
        }
    }
    echo "</table>";

}
}
else
{
header('Location:teacher_login.php');
}
?>
     <?php
        include "teacher_footer.php";
        ?>
</body>
</html>