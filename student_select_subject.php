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
        <h1 align="center">SELECT SUBJECT</h1>
        <br><br>
        <?php
    
        if(isset($_SESSION["name"]))
        {
            if(!isset($_SESSION["scode"]))
            {
            echo "<form ><table align='center' width='30%'>";
            echo "<tr><td><label>Select Subject</label>";
            $db=mysql_connect("localhost","root","");
            mysql_select_db("mcqtest",$db);
            $q="select * from tbsubject";
            $result=mysql_query($q);
            echo "<td><select name='s1'>";
            while($row=mysql_fetch_array($result))
            {
                extract($row);
                echo "<option>$subjname</option>";
            }
            echo "</select></tr>";
            echo "<tr><td><input type='submit' value='' name='b1' style='background: url(images/img].png); width:200px; height:65px' /></tr>";
            echo "</table></form>";
            if(isset($_REQUEST["b1"]))
            {
                $s=$_REQUEST["s1"];
                $db=mysql_connect("localhost","root","");
                mysql_select_db("mcqtest",$db);
                $q="select id from tbsubject where subjname='$s' ";
                $result=mysql_query($q);
                if(mysql_num_rows($result)>0)
                {
                    $row=mysql_fetch_array($result);
                    extract($row);
                    $_SESSION["scode"]=$id;
                    
                    header('Location:student_test.php');
                }
            }
            
            }
 else {
     
                echo 'You are giving test  ....in another tab';
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
