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

 class chengfa{
   public function chengfabiao(){
      
         for($i=1;$i<=9;$i++){  
            for($j=1;$j<=$i;$j++){   
                $arr=array(); 
                $arr[$j]=$j*$i;
                 echo $j."x".$i."=".$arr[$j]."  "; 
                 
             }
             
             echo "</br>"; 
         }
    
    } 
     
 }
  $a=new chengfa;
   $a->chengfabiao(); 


        ?>
    </body>
</html>
