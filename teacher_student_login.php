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
        include "no_links_header.php";
        ?>
        <h1 align="center">LOGIN</h1>
        <br><br>
        <form align="center">
            <input type="submit" value="" name="b1" style="background: url(images/teacher.jpg); width:150px; height:150px" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="" name="b2" style="background: url(images/student.jpg); width:150px; height:148px" />
        </form>
        <?php
        if(isset($_REQUEST["b1"]))
        {
            header('location:teacher_login.php');
        }
        if(isset($_REQUEST["b2"]))
        {
            header('location:student_login.php');
        }
        ?>
        </br></br>
    <a href="home.php">BACK TO HOME</a>
         <?php
        include "teacher_footer.php";
        ?>
    </body>
</html>
