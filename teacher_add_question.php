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
        <h1 align="center">ADD QUESTION</h1>
              <?php
                 if(isset($_SESSION["name"]))
                 {
              $n=$_SESSION["name"];
           
            $db=mysql_connect("localhost","root","");
            mysql_select_db("mcqtest",$db);
            $q="select subcode from tbteacher where name='$n'";
            $result=mysql_query($q);
            if(mysql_num_rows($result)>0)
            {
                $row=mysql_fetch_array($result);
                extract($row);
                
                echo "<form><table align='center' width='30%'>";
                echo "<tr><td><label>SUBJECT CODE</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td><input type='text' name='t1' value='$subcode' readonly /></br></tr></table></form>";
            }
                 
              ?>
               <form><table align="center" width="30%"><tr><td><label>ENTER QUESTION</label><td><input type="text" name="t2"  required/></br></tr>
                <tr><td><label>ENTER 1ST OPTION</label><td><input type="text" name="t3" required /></br></tr>
              <tr><td><label>ENTER 2ND OPTION</label><td><input type="text"  name="t4" required /></br></tr>
              <tr><td><label>ENTER 3RD OPTION</label><td><input type="text" name="t5" required /></br></tr>
                <tr><td><label>ENTER 4TH OPTION</label><td><input type="text" name="t6" required /></br></tr>
                <tr><td><label>ENTER ANSWER</label><td><select name="t7" required ><option>1</option><option>2</option><option>3</option><option>4</option></select></br></tr>
                    
                 <tr><td><input type="submit" value="" name="b1" style="background: url(images/img].png); width:200px; height:65px" /></br></tr>
            </table></form>
            
  
       <?php
        // put your code here
                    if(isset($_REQUEST["b1"]))
        {
            $sc=$_REQUEST["t1"];
            $qn=$_REQUEST["t2"];
            $o1=$_REQUEST["t3"];
            $o2=$_REQUEST["t4"];
            $o3=$_REQUEST["t5"];
            $o4=$_REQUEST["t6"];
            $ans=$_REQUEST["t7"];
            $db=mysql_connect("localhost","root","");
            mysql_select_db("mcqtest",$db);
            $q="insert into tbmcq(subcode,qname,o1,o2,o3,o4,ans)values($sc,'$qn','$o1','$o2','$o3','$o4','$ans')";
            mysql_query($q);
            
            ?>
        
        <script>
            
            alert("Question successfully added!")
            
            </script>
        
        <?php
            
            
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
