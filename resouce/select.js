/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/*全选、取消全选、反选实现*/
window.onload=function(){
 var btn1=document.getElementById('btn1');
 var btn2=document.getElementById('btn2');
 var btn3=document.getElementById('btn3');
 var button=document.getElementById('btn');
 var select=button.getElementsByTagName('input');
 
  btn1.onclick=function(){
        for (var i=0;i<select.length;i++){
            select[i].checked=true;
        }  
 };//加上；
 
  btn2.onclick=function(){
            for (var i=0;i<select.length;i++){
            select[i].checked=false;
        }
        };//加上；
        
  btn3.onclick=function(){
        for (var i=0;i<select.length;i++){
            if(select[i].checked){
            select[i].checked=false;
        }
        else{
           select[i].checked=true; 
        }
    };
        };//加上；
}
