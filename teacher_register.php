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
        <h1 align="center">REGISTER</h1><br><br><br>
        <form>
            <table align="center" width="30%">
                <tr><td><label>NAME</label><td><input type="text" name="t1" placeholder="enter your name" required /></br></tr>
            <tr><td><label>SUBJECT NAME</label>
           <td><select name="t2">
            <?php
            $db=mysql_connect("localhost","root","");
            mysql_select_db("mcqtest",$db);
            $q="select * from tbsubject";
            $result=mysql_query($q);
            while($row=mysql_fetch_array($result))
            {
                extract($row);
                echo "<option >$subjname</option>";
            }
            ?>
               </select></tr>
                
               <tr><td><label>EMAIL</label><td><input type="email" name="t3" placeholder="enter your email" required  /></br></tr>
               <tr><td><label>PHONE NUMBER<td><input type="number" name="t4" placeholder="enter your number" pattern="[1-9]{1}[0-9]{9}" required /></br></tr>
                    <tr><td><label>DEPARTMENT</label>
                <td><select name="t5">
                    <option>cse</option>
                    <option>ece</option>
                    <option>mechanical</option>
                   <option>pharmacy</option>

                    </select></tr>
                    <tr><td><label>PASSWORD</label><td><input type="password" name="t6" placeholder="enter your password" required /></br></tr>
                    <tr><td><label>SECURITY QUESTION</label><td><select name="t10" required>
                         <option disabled selected style="display: none">select your security question</option>
                        <option>what is your pet name?</option>
                        <option>what is your favourite sport?</option>
                        <option>what is your favourite color?</option></select><br/></tr>
            <tr><td><label>SECURITY ANSWER</label><td><input type="text" name="t11" value=""   placeholder="enter your security answer" required /><br/></tr>
      
               <tr><td colspan="2"><input type="submit" value="" name="b1" style="background: url(images/img].png); width:200px; height:65px" /></tr>
            </table>
               </form>
       <?php
        // put your code here
                    if(isset($_REQUEST["b1"]))
        {
            $n=$_REQUEST["t1"];
            $s=$_REQUEST["t2"];
            $e=$_REQUEST["t3"];
            $p=$_REQUEST["t4"];
            $d=$_REQUEST["t5"];
            $pwd=$_REQUEST["t6"];
            $db=mysql_connect("localhost","root","");
            mysql_select_db("mcqtest",$db);
            $q="select * from tbteacher where name='$n' ";
            $result=mysql_query($q);
            if(mysql_num_rows($result)>0)
            {
                $message = "user already exists";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else
            {
            $q1="select id from tbsubject where subjname='$s'";
            $result=mysql_query($q1);
            if(mysql_num_rows($result)>0)
            {
                $row=mysql_fetch_array($result);
                extract($row);
            $q="insert into tbteacher(name,subcode,email,phone,password,dept)values('$n',$id,'$e',$p,'$pwd','$d')";
            
            mysql_query($q);
            $message = "successfully registered";
            echo "<script type='text/javascript'>alert('$message');</script>";
            }
            ?>
        <script>
            location.href='teacher_login.php';;
            </script>
            <?php
        }
        }
        ?>
        
        <?php
        include "teacher_footer.php";
        ?>
    </body>
</html>
