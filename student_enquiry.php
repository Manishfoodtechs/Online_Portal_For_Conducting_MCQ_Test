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
        <p><b>For Any Enquiries ,Please Fill Out The Form Below.</b></p><br/>
        <form><label>Name:</label><input type="text" name="f1" /><br/>
        <label>Email Address:</label><input type="text" name="f2" /><br/>
        <label>Contact:</label><input type="number" name="f3" /><br/>
        <label>Message:</label><input type="text" name="f4" /><br/>
        <input type="submit" name="b1" /><br/></form>
        
        <?php
        if(isset($_REQUEST["b1"]))
        {
            
        }
        ?>
    </body>
</html>
