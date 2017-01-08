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
        <script>
        function btn1(){
            
           windows.location.href='rili.php';
        }
        
        function btn2(){
            
            alert("btn2");
        }
        </script>
    </head>
    <body>
        <?php
        

    
        ?>
        <form action='button_test.php' method='get'>
           
            <input type='submit' value='按钮1' onclick='btn1()' name='btn'/>
            <input type='button' value='按钮2' onclick='btn2()'name='btn' />
            
        </form>
    </body>
</html>
