/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() 
 {
    $('.list-group-item').click(function(){
        var clase=$(this).attr('class');
        if (/active/i.test(clase)){
            $(this).css({'background-color': '','color': ''});
            $(this).removeClass('active');
        }else{
            $(this).css({'background-color': '#dff0d8','color': '#3c763d'});
            $(this).addClass('active');
        }

     });
     
 });        
