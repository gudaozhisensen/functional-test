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
       $days=31;
       echo"<table width='700px' border='1px'>";
        for($i=1;$i<=$days;){
            
            echo "<tr>";
            for($j=0;$j<7;$j++){
             
               if ($i>$days) {
                 echo "<td> &nbsp;</td>"  ;
               }else{
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
