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
        $num=2;
       function sum($num){
            static $count;
          if($num>=1){
              $count+=$num;
          return sum(--$num);  
          }else{
              return $count;
          }
            
       }
       echo sum($num);
        ?>
    </body>
</html>
