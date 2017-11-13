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
        <h1 align="center">RESULT</h1><br><br>
        <?php
        if(isset($_SESSION["name"]))
        {
        echo "<table border='1' width='50%' align='center' >";
        echo "<tr align='center'><td><b>STUDENT NAME</b><td><b>SCORE</b></tr>";
        $n=$_SESSION["name"];
        $db=mysql_connect("localhost","root","");
        mysql_select_db("mcqtest",$db);
        $q="select subcode from tbteacher where name='$n' ";
        $result=mysql_query($q);
        if(mysql_num_rows($result)>0)
        {
            $row=mysql_fetch_array($result);
            extract($row);
            $q="select * from tbresult where subcode='$subcode' ";
            $result=mysql_query($q);
            while($row=mysql_fetch_array($result))
            {
                extract($row);
                echo "<tr align='center'><td>$name<td>$score</tr>";
            }
        }
        echo "</table>";
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
        ?>
        <?php
        include "teacher_footer.php";
        ?>
    </body>
</html>
