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
        class year_new{
            function year($a,$b){
         
             for ($i=$a;$i<=$b;$i++){
                 
               if($i%400==0||($i%4==0&&$i%100!=0))
                {
               
                  echo $i."，";
               
               
             
                }
              
 } 
             
         
        
      }
       
      function year_1($a,$b){
            for ($i=$a;$i<=$b;$i++){
                 
               if($i%400==0||($i%4==0&&$i%100!=0))
                {
               
               
               
               
             
                }else{
                       echo $i."，";
                }
       }
       
      }
        
        }
    

       $test=new year_new();
       echo '闰年有：<br>';
       $test->year(1950,2050);
         echo "<br>";
       
      $test1=new year_new();
      
       echo '平年有：<br>';
      $test1->year_1(1950, 2050);
        ?>
    </body>
</html>
