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
        // put your code here
    include "teacher_header.php";
        if(isset($_SESSION["name"]))
        {
            session_destroy();
            header('Location:home.php');
        }
        ?>
    </body>
</html>
