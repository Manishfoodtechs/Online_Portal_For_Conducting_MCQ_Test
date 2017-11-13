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
    <h1 align="center">MODIFY QUESTION</h1><br><br><br>
        <?php  
        // put your code here
            $id1=$_REQUEST["id1"];
            echo "<form align='center'>";
            echo "<input type='hidden' name='id1' value='$id1' />";
            echo "<input type='submit' value='UPDATE QUESTION' name='b1' style='background:url(/images/update_question_1.png); width:246px; height:49px' /><br><br>";
            echo "<input type='submit' value='DELETE QUESTION' name='b2' style='background:url(/images/delete_question_1.png); width:246px; height:49px' /><br><br>";
            echo "</form>";
            if(isset($_REQUEST["b1"]))
            {
                 $id1=$_REQUEST["id1"];
                header('Location:teacher_update_question.php?id1='.$id1);
            }           
            if(isset($_REQUEST["b2"]))
            {
                $id1=$_REQUEST["id1"];
                $db=mysql_connect("localhost","root","");
                mysql_select_db("mcqtest",$db);
                $q="delete from tbmcq where qid=$id1";
                mysql_query($q);
                ?>
        <script>
            alert("Question Deleted Successfully");
            
            </script>
            <?php

            }
        ?>
         <?php
        include "teacher_footer.php";
        ?>
    </body>
</html>
