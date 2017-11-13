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
        <h1 align="center">REGISTER</h1><br>
        <form method="POST" enctype="multipart/form-data">
            <table align="center" width="30%">
                <tr><td><label>NAME</label><td><input type="text" name="t1" value=""  placeholder="enter your name" required /><br/></tr>
                <tr><td><label>ROLL NUMBER</label><td><input type="number" name="t2" value=""  placeholder="enter your roll number" required /><br/></tr>
                <tr><td><label>BRANCH</label><td><input type="text" name="t3" value=""  placeholder="enter your branch" required /><br/></tr>
                <tr><td><label>PHONE NUMBER</label><td><input type="number" name="t4" value=""  placeholder="enter your phone number" pattern="[1-9]{1}[0-9]{9}" required /><br/></tr>
                <tr><td><label>EMAIL</label><td><input type="email" name="t5" value=""  placeholder="enter your email" required /><br/></tr>
            <tr><td><label>FATHER'S NAME</label><td><input type="text" name="t6" value=""  placeholder="enter your fathers name" required /><br/></tr>
            <tr><td><label>MOTHER'S NAME</label><td><input type="text" name="t7" value=""  placeholder="enter your mothers name" required /><br/></tr>
            <tr><td><label>PASSWORD</label><td><input type="password" name="t9" value=""   placeholder="enter your password" required /><br/></tr>
            <tr><td><label>SECURITY QUESTION</label><td><select name="t10" required>
                         <option disabled selected style="display: none">select your security question</option>
                        <option>what is your pet name?</option>
                        <option>what is your favourite sport?</option>
                        <option>what is your favourite color?</option></select><br/></tr>
            <tr><td><label>SECURITY ANSWER</label><td><input type="text" name="t11" value=""   placeholder="enter your security answer" required /><br/></tr>
            <tr><td><label>IMAGE</label><td><input type="file" name="f2" value="" /><br/></tr>
            <tr><td><label>UNIVERSITY</label><td><input type="text" name="t12"  placeholder="enter your university" required /><br/></tr>
            <tr><td colspan="2"><input type="submit" value="" name="b1" style="background: url(images/img].png); width:200px; height:65px" /><br/></tr>
            </table>  
        </form>
        <?php
        
        
        if(isset($_SESSION["name"]))
        {
            header('Location:student_my_account.php');
            
        }
        
         $db= mysql_connect("localhost","root","");
            mysql_select_db("mcqtest",$db);
         
        if(isset($_REQUEST["b1"]))
        {
            $n=$_REQUEST["t1"];
            $r=$_REQUEST["t2"];
            $b=$_REQUEST["t3"];
            $m=$_REQUEST["t4"];
            $e=$_REQUEST["t5"];;
            $fn=$_REQUEST["t6"];
            $mn=$_REQUEST["t7"];
            $p=$_REQUEST["t9"];
            $sq=$_REQUEST["t10"];
            $sa=$_REQUEST["t11"];
            $u=$_REQUEST["t12"];
             $i=$_FILES["f2"]["name"];
            $q="select * from tbstudent where name='$n' and roll='$r'";
            $result=mysql_query($q);
            if(mysql_num_rows($result)>0)
            {
                $message = "user already exists";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else
            {
            $message = "successfully registered";
            echo "<script type='text/javascript'>alert('$message');</script>";
            copy($_FILES["f2"]["tmp_name"],"images/$i");
            $q="insert into tbstudent(name,roll,dept,phone,email,fname,mname,image,password,university) values('$n',$r,'$b',$m,'$e','$fn','$mn','$i','$p','$u')";
            mysql_query($q);
            $q1="insert into tblogin2(name,password,securityQuestion,securityAnswer)values('$n','$p','$sq','$sa')";
            mysql_query($q1);
            }
            ?>
        <script>
            location.href='student_login.php';
            </script>
            <?php
            
        }
        ?>
        </br></br>
    <a href="home.php">BACK TO HOME</a>
         <?php
        include "student_footer.php";
        ?>
    </body>
</html>
