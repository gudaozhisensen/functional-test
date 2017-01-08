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
        
      @$days=  date('t',  strtotime("{$y}-{$m}-1"));//当前月天数
      @$week=  date('w',  strtotime("{$y}-{$m}-1"));//当前1号周几 
      @$y=$_GET['Y']?$_GET['Y']:date('Y');//当前年
      @$m=$_GET['m']?$_GET['m']:date('m');//当前月
        echo" <table width='700px' border='1px' align='center'>";
         echo" <h2 align='center'> {$y}年{$m}月</h2>";
         echo "<tr>";
             echo " <th>日</th>";
             echo " <th>一</th>";
             echo " <th>二</th>";
             echo " <th>三</th>";
             echo " <th>四</th>";
             echo " <th>五</th>";
             echo " <th>六</th>";
                 
                
        echo"</tr>";
     
        for($i=1;$i<=$days;){
            
            echo "<tr>";
            for($j=0;$j<7;$j++){
             
               if ($i>$days) {
                 echo "<td> &nbsp;</td>"  ;
               }
               else{
                      echo"<td align=center>{$i}</td>";
               $i++;
               }
            }
        }
        echo"</tr>";
        echo "</table>";
       ?>
    </body>
</html>
