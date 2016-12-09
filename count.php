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
       
            $str="fklg545,43-5@lkr!$%^$.454re4";
              $subject="/\d/";
          $subject1='/[a-z A-Z]/';
          $a='/[\W ]/';
              preg_match_all($subject,$str,$matches);
              preg_match_all($subject1,$str,$matches1);
               preg_match_all($a,$str,$matches2);
              echo"数字:".count($matches[0]);
              echo "字幕：".count($matches1[0]);
                 echo "其他：".count($matches2[0]);
          //   print_r($matches) ;
           //  print_r($matches1) ;
            // print_r($matches2)
                 echo "</br>";
           echo $str;
       
 
        ?>
    </body>
</html>
