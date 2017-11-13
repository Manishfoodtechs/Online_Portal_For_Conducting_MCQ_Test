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
        <h1 align="center">RESULT</h1></br>
        <table border="1" width="50%" align="center">
            <tr align="center"><td><b>SUBJECT</b></td><td><b>SCORE</b></td></tr>
        <?php
        // put your code here
        if(isset($_SESSION["name"]))
        {
        $n=$_SESSION["name"];
        
        $db=mysql_connect("localhost","root","");
        mysql_select_db("mcqtest",$db);
        $q="select * from tbresult where name='$n'";
        $result=mysql_query($q);
        while($row=mysql_fetch_array($result))
        {
            extract($row);
            $q1="select * from tbsubject where id=$subcode";
            $result1=mysql_query($q1);
            if(mysql_num_rows($result1)>0)
            {
                $row1=mysql_fetch_array($result1);
                extract($row1);
                echo "<tr align='center'><td>$subjname</td>";
            }
            echo "<td>$score</td></tr>";
        }
        }
        else 
 {
  ?>
        <script>
            alert("Please LOGIN!");
            location.href = "student_login.php";;
            </script>
        
        <?php
        
 }
 ?>
        </table>
        <?php
        include "student_footer.php";
        ?>
    </body>
</html>
