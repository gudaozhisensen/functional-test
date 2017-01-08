<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
十个按钮选择完了把偶数输出
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
         <script>
           function checkAll()//全选
           {
                var elements[]=document.getElementsById("input");
                   if(type=="checkbox"){
                for (var i=0;i<elements.length;i++){
                    if(elements[i].type=="checkbox"){
                    if(elements[i].checked == false){ 
                elements[i].checked=true;
                
                    }
                }
                   }

            </script>
    </head>
    <body>
        <form name="checkBox" method="post">
        <input type="checkbox" name="select[]" value="1" />1
        <input type="checkbox" name="select[]" value="2" />2
        <input type="checkbox" name="select[]" value="3" />3
        <input type="checkbox" name="select[]" value="4" />4
        <input type="checkbox" name="select[]" value="5" />5
        <input type="checkbox" name="select[]" value="6" />6
        <input type="checkbox" name="select[]" value="7" />7
        <input type="checkbox" name="select[]" value="8" />8
        <input type="checkbox" name="select[]" value="9" />9
        <input type="checkbox" name="select[]" value="10" />10
        </br>        </br>
<input type="submit"name="sub" value="决定" onclick="select()"/>
       <!--<input type="submit"name="sub" value="决定" onclick="select()"/>
        <input type="button" name="checkAll" value="全选" onclick="checkAll()"/>
        <input type="button" name="all" value="反选" onclick=""  />
        <input type="submit" value="Submit " onclick="all()"> 
       -->
        <input type="button" value="全选" onclick="checkAll();"/>
        </form>
        
       
        <?php
      function select(){
          $values=$_POST['select'];
      
           foreach($values as $arr)
            {
                 if ($arr%2==0)
                      echo $arr." ";
             }
     select();
       }
  //      function all(){
   //        $values=$_POST['select'];
       /// $arr=  count($values);
    //    foreach($values as $arr){
  //          
    //        echo $arr;
    //    }
    //     all();     
    //    }






       
      
        ?>
    </body>
</html>
