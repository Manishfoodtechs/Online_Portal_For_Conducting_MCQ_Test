

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
session_start();

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Education First</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<header>
<section>
<div id="logo">

<img src="images/Education first logo (1).jpg" alt="" /></li>

</div>

<aside>
    <a href="https://www.facebook.com/Education-First-178223346033209/"><img src="images/facebook.png" alt="" /></a>
</aside>

<aside>
<p>Call Us: +91-9569021275</p>
</aside>
</section>
<nav>
<section>
<ul>
    
<li>  <?php if(isset($_SESSION["name"]))
                {
                    ?>
                
    <a href="student_my_account.php"><b><u>MYACCOUNT
                <?php
                } else {
                    
                    ?>
                  <a href="student_register.php"><b><u>REGISTER
               <?php
                }
                ?></u></b></a></li>
<li>
                
                <?php if(isset($_SESSION["name"]))
                {
                    ?>
                
    <a href="logout.php"><b><u>      LOGOUT</u>
                <?php
                } else {
                    
                    ?>
            <a href="student_login.php"><b><u>         LOGIN</u>
               <?php
                }
                ?>
                </u></b></a></li>
    <li><a href="student_select_subject.php"><b><u>TAKE TEST</u></b></a></li>
<li><a href="student_edit_profile.php"><b><u>EDIT PROFILE</b></u></a></li>
     <li><a href="student_view_result.php"><b><u>VIEW RESULT</b></u></a></li>
    
        


</ul>
</section>
</nav>


</section>
<div id="banner">
    <img src="" style="width:30%" />
</div>

</header>