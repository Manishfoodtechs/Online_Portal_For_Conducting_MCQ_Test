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
        <h1 align="center">ADD SUBJECT</h1><br><br>
        <form>
            <table align="center" width="30%">
                <tr><td><label>Enter Subject:</label><td><input type="text" name="t1" placeholder="enter your subject" required /></label></br></tr>
            <tr><td colspan="2"><input type="submit" value="" name="b1" style="background: url(images/img].png); width:200px; height:65px" onclick="f()" /></tr>
            </table>
        </form>
        <?php
        // put your code here
        if(isset($_REQUEST["b1"]))
        {
            $sn=$_REQUEST["t1"];
            $db=mysql_connect("localhost","root","");
            mysql_select_db("mcqtest",$db);
            $q1="select * from tbsubject where subjname='$sn' ";
            $result=mysql_query($q1);
            if(mysql_num_rows($result)>0)
            {
               ?>
                <script>
            alert("This subject already exists");
            </script>
        <?php
            } 
            
            else
            {
            $q="insert into tbsubject(subjname)values('$sn')";
            mysql_query($q);
            ?>
              <script>
            alert("Subject Successfully Added");
            </script>
            <?php
            }
        
        }
        ?>
        <?php
        include "teacher_footer.php";
        ?>
    <
    </body>
</html>
