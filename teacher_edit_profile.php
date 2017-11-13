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

        include "teacher_header.php";
        ?>
        <h1 align="center">EDIT PROFILE</h1><br><br><br>
     <?php
        if(isset($_SESSION["name"]))
{
            $n=$_SESSION["name"];
        
   $db= mysql_connect("localhost","root","");
            mysql_select_db("mcqtest",$db);
            $q="select * from tbteacher where name='$n'";
            $result=mysql_query($q);
            if(mysql_num_rows($result)>0)
            {
                $row=mysql_fetch_array($result);
                extract($row);
               echo "<form><table align='center' width='30%'><tr><td><label>ENTER NEW EMAIL</label><td><input type='email' name='t1' value='$email' required /><br/></tr>";
                   echo "<tr><td><label>ENTER NEW PHONE NUMBER</label><td><input type='number' name='t2' value='$phone' pattern='[1-9]{1}[0-9]{9}' required /><br/></tr>";
                   echo "<tr><td colspan='2'><input type='submit' value='' name='b1' style='background: url(images/img].png); width:200px; height:65px' onclick='f()' /></tr></table></form>";
            }
if(isset($_REQUEST["b1"]))
{
    $n=$_SESSION["name"];

    $e=$_REQUEST["t1"];
    $m=$_REQUEST["t2"];
    $q="update tbteacher set email='$e',phone=$m where name='$n'";
    mysql_query($q);
    ?>
    <script>
        alert("Profile Successfully Changed");
    </script>
    <?php
}
}
 else 
 {
  ?>
        <script>
            alert("Please LOGIN!");
            location.href = "teacher_login.php";;
            </script>
        
        <?php
        
 }
 ?>
        
    </body>
</html>
