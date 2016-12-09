<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header("content-type:text/html;charset=utf-8");
echo"<table>";
       $days=31;
      echo"<tr>";
        for($i=1;$i<=$days;){
           
            for($j=0;$j<7;$j++){
               $i++;
            }
        }
   echo"</tr>";
  echo"</table>";
       ?>