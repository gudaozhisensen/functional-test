<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

全选、取消选择、反选实现
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #btn input{
                display: block;margin: 20px;    
            }
        </style>
        <script src="resouce/select.js" type="text/javascript"></script>
    </head>
    <body>
        <input type="button" value="select All" id="btn1" />
        <input type="button" value="select Nothing" id="btn2" />
        <input type="button" value="opposite Select" id="btn3" />
  
        <div id="btn">
             <input type="checkbox" />
             <input type="checkbox" />
             <input type="checkbox" />
             <input type="checkbox" />
             <input type="checkbox" /> 
             <input type="checkbox" />
             <input type="checkbox" />
             <input type="checkbox" /> 
        </div>
    </body>
</html>
