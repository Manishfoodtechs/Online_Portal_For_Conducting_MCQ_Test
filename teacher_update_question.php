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
    <h1 align="center">UPDATE QUESTION</h1><br><br><br>
        <?php
        // put your code here
        $id1=$_REQUEST["id1"];
            $db=mysql_connect("localhost","root","");
            mysql_select_db("mcqtest",$db);
            $q="select * from tbmcq where qid=$id1";
            $result=mysql_query($q);
            if(mysql_num_rows($result)>0) 
            {
                $row=mysql_fetch_array($result);
                extract($row);
                echo "<form><table align='center' width='30%'>";
                echo "<tr><td><label>ENTER QUESTION</label><td><input type='text' name='t1' value='$qname' /></br></tr>";
                echo "<tr><td><label>ENTER 1ST OPTION</label><td><input type='text' name='t2' value='$o1' /></br></tr>";
                echo "<tr><td><label>ENTER 2ND OPTION</label><td><input type='text' name='t3' value='$o2' /></br></tr>";
                echo "<tr><td><label>ENTER 3RD OPTION</label><td><input type='text' name='t4' value='$o3' /></br></tr>";
                echo "<tr><td><label>ENTER 4TH OPTION</label><td><input type='text' name='t5' value='$o4' /></br></tr>";
                echo "<tr><td><label>ENTER ANSWER</label><td><input type='text' name='t6' value='$ans' /></br></tr>";
                echo "<tr align='center'><td colspan='2'><input type='submit' value='UPDATE QUESTION' name='b3' style='background:url(/images/update_question_1.png); width:246px; height:49px' /></br></tr>";
                echo "<tr><td><input type='hidden' name='id1' value='$id1' /></br></tr>";
                echo "</table></form>";
            }
            if(isset($_REQUEST["b3"]))
                {
                    $id=$_REQUEST["id1"];
                    $qn=$_REQUEST["t1"];
                    $o1=$_REQUEST["t2"];
                    $o2=$_REQUEST["t3"];
                    $o3=$_REQUEST["t4"];
                    $o4=$_REQUEST["t5"];
                    $ans=$_REQUEST["t6"];
                    $db=mysql_connect("localhost","root","");
                    mysql_select_db("mcqtest",$db);
                    $q="update tbmcq set qname='$qn',o1='$o1',o2='$o2',o3='$o3',o4='$o4',ans='$ans' where qid=$id";
                  
                    mysql_query($q);
                    ?>
        <script>
            alert("Question updated Successfully"); 
            </script>
            <?php
                }
        ?>
    <?php
        include "teacher_footer.php";
        ?>
    </body>
</html>
