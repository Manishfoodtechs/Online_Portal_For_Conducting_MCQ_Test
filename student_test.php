<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
        
        include "student_header.php";
        
        ?>
<html><head>
        <script>
        var tim;
       
        var min = 16;
        var sec = 00;
        
        var f = new Date();
        function f1() {
            f2();
           
            document.getElementById("starttime").innerHTML = "Your started your Exam at " + f.getHours() + 
":" + f.getMinutes();
             
          
        }
        function f2() {
          
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime").innerHTML = "Your Left Time  is :"+(min-1)+" Minutes ," + 
sec+" Seconds";
                tim = setTimeout("f2()", 1000);
            }
            else {
                if (parseInt(sec) == 0) {
                    min = parseInt(min) - 1;
                    if (min == 0) {
                        
                       clearTimeout(tim);
                       //document.getElementById("ff1").disabled=true;
                       alert("Time Is Over..Click on button to submit your test!")
                       //document.getElementById("b1").disabled=false;
                       // location.href = "quiz.php?b1=Submit";
                    }
                    else {
                        
                        
                        sec = 60;
                 document.getElementById("showtime").innerHTML = "Your Left Time  is :" + (min-1) + "Minutes ," + sec + " Seconds";
                        tim = setTimeout("f2()", 1000);
                    }
                }
               
            }
        }
    </script>
  
    </head>
    
    <body onload="f1()">
        <h1 align="center">START THE TEST</h1>
        <br>
	<br><br>
        <div>
      <table width="100%" align="center">
        <tr>
          <td colspan="2">
          <!--  <h2>This is head part for showing timer and all other details</h2>-->
          </td>
        </tr>
        <tr>
          <td>
            <div id="starttime">test</div><br />
            <div id="endtime"></div><br />
            <div id="showtime"></div>
          </td>
        </tr>
        <tr>
          <td>
             
              <br />
            
              
          </td>
         
        </tr>
      </table>
      <br />
   
 
    </div>
 
            
        <?php
        $n=$_SESSION["name"];
        $scode=$_SESSION["scode"];
        $db=mysql_connect("localhost","root","");
        mysql_select_db("mcqtest",$db);
        $q="select * from tbanswer where name='$n' and scode=$scode ";
        $result=mysql_query($q);
        if(mysql_num_rows($result)>0)
        {
            ?>
           <script>
            alert("You have already given this test");
            location.href = "student_select_subject.php";;
            </script>
            <?php
        }
 else {   
        $db=mysql_connect("localhost","root","");
        mysql_select_db("mcqtest",$db);
        $q="select * from tbmcq where subcode=$scode ORDER BY RAND() limit 20";
        $result=mysql_query($q);
        echo "<table border='1' width='100%'><form>";
$i=1;
echo "<table border='1' width='100%'>";
while($row=  mysql_fetch_array($result))
{
   
    extract($row);
     echo "<input type='hidden' name='q$i' value='$qid'/>";
     echo "<input type='hidden' name='sc' value='$subcode' />";
    echo "<tr>";
    echo "<td>". "$i.) ".$qname."</td>";
    echo "<td>a.) $o1 <input type='radio' name='opt1$i'  value='1' required/></td>";
    echo "<td>b.) $o2 <input type='radio' name='opt1$i' value='2'/></td>";
    echo "<td>c.) $o3 <input type='radio' name='opt1$i' value='3'/></td>";
    echo "<td>d.) $o4 <input type='radio' name='opt1$i'  value='4'/></td>";
    
    $i++;
    
    echo "</tr>";
}
echo "</table>";
$i=$i-1;
echo "<input type='hidden' name='tot' value='$i' /></fielset>";
echo "<input type='submit' name='b1' value='' style='background: url(images/img].png); width:200px; height:65px' />";
echo "</form>";
$score=0;

if(isset($_REQUEST["b1"]))
{
    
    $n=$_SESSION["name"];
    $sc=$_REQUEST["sc"];
    $tot=$_REQUEST["tot"];
    $_SESSION["tot"]=$tot;
    for($j=1;$j<=$tot;$j++)
    {
        if(isset($_REQUEST["opt1$j"]))
        {
        $qid=$_REQUEST["q$j"];
        $uanswer=$_REQUEST["opt1$j"];
        
        $date=date("d/m/Y");
        $q="insert into tbanswer(qid,uanswer,name,tdate,scode)values($qid,$uanswer,'$n','$date',$sc)";
        mysql_query($q);
        $q="select * from tbmcq where ans=$uanswer and qid=$qid and subcode=$sc ";
        $result=mysql_query($q);
        if(mysql_num_rows($result)>0)
        {
            $score=$score+1;
        }
        }
    }
    $q="insert into tbresult(name,subcode,score) values('$n',$sc,$score)";
    mysql_query($q);
    ?>
            <script>
                
                  location.href = "student_result.php";;
                </script>
    <?php
}
 }
?>
     
        <?php
        
        include "student_footer.php";
        
        ?>
            
    </body>
        </html>