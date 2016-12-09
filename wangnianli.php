<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      @$y=$_GET['y']?$_GET['y']:date('Y');//当前年
      @$m=$_GET['m']?$_GET['m']:date('m');//当前月
      echo $y;
      echo"</br>";
      echo $m;
      ?>
    </body>

