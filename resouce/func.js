/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  function setStyle(name,value){
                    var div2=document.getElementById('div2');
                    div2.style[name]=value;
                   
                
                }
                
                function reSet(){
                    if (div2.style.height!=='100px'||div2.style.width!=='100px'|| div2.style.background!=='#ccc'){
                        div2.style.height='100px';
                        div2.style.width='100px';
                        div2.style.background='#ccc';
                        
                    }
                }
                
                
 window.onload=function(){
                var odiv=document.getElementById('func1');//取得id名为func1的元素赋值给odiv
                
                var odiv2=document.getElementById('func2');//取得id名为func2的元素赋值给odiv2
                odiv.onmouseover=function(){
                    odiv2.style.display='block';//当鼠标进入时 odiv 的 style 的 display 属性 变为block(就是为显示)
                }
                
                odiv.onmouseout=function(){
                    odiv2.style.display='none';//当鼠标出来时 odiv 的 style 的 display 属性 变为none(就是为隐藏)
                    //odiv2.style.width='300px';
                    //odiv2.style.height='300px';  可在这里该变属性值
                }
                
                
                var btn=document.getElementById('btn');
                var div1=document.getElementById('div1');
                btn.onclick=function(){
                    if (div1.style.display=='block'){//一个按钮可以实现显示和隐藏
                        div1.style.display='none';
                    }
                    else{
                        div1.style.display='block'
                    }
                }
                
                
              
                
            } 