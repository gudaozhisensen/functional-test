<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

js实现鼠标进出（onmouseover onmouseout） 操作
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
         
            #func2{
                width: 200px;
                height: 100px;
                background:#ccc;
                border: 1px solid azure;
                display: none;/*一开始时nome为隐藏*/
                
               
            }
            
             #div1{
                    height: 500px;
                    width:100px;
                    background: #ffcccc;
                    display: none;
                }
                
                #div2{
                    height: 100px;
                    width: 100px;
                    background: #ccc;
                    
                    .div{
                        display: block;
                    }
                }
        </style>
        
        <script src="resouce/func.js" type="text/javascript">
        </script>
    </head>
    <body>
        <!--提示的显示和隐藏-->
        <div id="func1">
            <input type="checkbox" id="check"/>两内免登录
            
        </div>
        <div id="func2">
            
             为了您的信息安全，不要在网吧或者公共电脑上使用此功能哦
        </div>
        
        
        
        <!--一个按钮可以实现显示和隐藏-->
        <input type="button" value="fold" id='btn'/>
        <div id="div1"></div>
        
        <div class="div">
        <input type="button" value="wider"  onclick="setStyle('width', '200px')"  />
        <input type="button" value="heiger" onclick="setStyle('height','200px')"/> 
        <input type="button" value="green"  onclick="setStyle('background','green')"/>
        
        <input type="button" value="reset" onclick="reSet()"/>
        <div id="div2"></div>
        </div>
        <?php
       
        ?>
    </body>
</html>
