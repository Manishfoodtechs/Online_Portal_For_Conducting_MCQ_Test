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
        <h1 align="center">SELECT SUBJECT</h1><br><br><br>
        <?php
        if(isset($_SESSION["name"]))
        {
        // put your code here
            $n=$_SESSION["name"];
            $db=mysql_connect("localhost","root","");
            mysql_select_db("mcqtest",$db);
            $q="select * from tbteacher where name='$n'";
            $result=mysql_query($q);
            if(mysql_num_rows($result)>0)
            {
                $row=mysql_fetch_array($result);
                extract($row);
                $q="select * from tbsubject where id=$subcode";
                $result=mysql_query($q);
                if(mysql_num_rows($result)>0) 
                {
                    $row=mysql_fetch_array($result);
                    extract($row);
                    echo "<a href='teacher_view_question.php?id=$id'><p align='center' style='font-size:35px' >$subjname</p></a></br>";
                }
            }
        }
 else 
     {
     header('location:teacher_login.php');
     }
        ?>
        <?php

        include "teacher_footer.php";
        ?>
        
        
    </body>
</html>
