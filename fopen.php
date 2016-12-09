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
       $filename='D:/download/test.txt';
    //  $fp= fopen($filename, 'rb');
    //   while (!feof($fp)){
    //       echo fgets($fp);
     //  }
      // fclose($fp);
       
       //*********判断文件是否存在的方法********
      // if(file_exists($filename)){
           
     //      echo file_get_contents($filename);
      // }
       
     // echo 'owner：'.  fileowner($filename).'<br>';
      //echo 'create time：'.  filectime($filename).'<br>';
      //echo 'change time：'. filemtime($filename).'<br>';
      //echo  'last visit time：'.fileatime($filename).'<br>';
      //$mtime=  filemtime($filename);
      
    //  if(time()-$mtime>3600){
     //  echo '缓存已过期';   
      //}  else {
      //echo file_get_contents($filename);    
      //}
       if (function_exists('mysql_connect')) {
    echo 'Mysql扩展已经安装';
}else{
    echo aaa;
}
        ?>
    </body>
</html>
