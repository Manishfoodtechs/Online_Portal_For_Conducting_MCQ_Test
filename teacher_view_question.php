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
        <h1 align="center">QUESTIONS</h1>
        <?php
        // put your code here
            $sc=$_REQUEST["id"];
            $db=mysql_connect("localhost","root","");
            mysql_select_db("mcqtest",$db);
            $q="select * from tbmcq where subcode=$sc";
            $result=mysql_query($q);
            while($row=mysql_fetch_array($result)) 
            {
                extract($row);
                echo "Ques)";
                echo "<a href='teacher_modify_question.php?id1=$qid'>$qname</a><br>";
                echo "A)$o1<br>";
                echo "B)$o2<br>";
                echo "C)$o3<br>";
                echo "D)$o4<br>";
            }
        ?>
         <?php
        include "teacher_footer.php";
        ?>
    </body>
</html>
