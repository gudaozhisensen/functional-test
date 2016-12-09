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

setcookie('test', time());

//在这里试着删除test的cooki
setcookie("test",'',time()-1);

var_dump($_COOKIE);
        ?>
</body>
</html>