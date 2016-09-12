/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


     
    $("#btn_enviar").click(function(){
        var opcion= $("input[name=radio]:checked").val();
        var obser= $("textarea#aprb_rmk").val();
        if(opcion){                            
            if((opcion==2 || opcion==3) && !obser){
                alert("No ha ingresado alguna observacion");
            }else if(opcion==1){
                var num = $("#req_no").val();
                var process = $("#process").val();
                var activity = $("#activity").val();
                var rank = $("#rol").val();
                var cedula = $("#cedula").val();
                var username = $("#username").val();
                var estado="aprobar";

                //formularios de brasil
                var cadena='';
                $('#lista li').each(function(idx, li) {
                    var clase=$(li).attr('class');
                    if (/active/i.test(clase)){
                        cadena=cadena+'1';
                    }else{
                        cadena=cadena+'0';
                    }                               
                });
                $('#myModal').modal('show'); 
                $.ajax({
                        url: "acciones.php",
                        method: "POST",           
                        data: { reqno: num,estado:estado,rank:rank,process:process,activity:activity,cedula:cedula,username:username,cadena:cadena}
                    }).success(function(response) {
                        // Populate the form fields with the data returned from server
                            switch (response) {
                                case "1":                                   
                                    $('.modal-header').empty();                                    
                                    $('.modal-header').removeClass('modal-header-info');
                                    $('.modal-header').addClass('modal-header-success');
                                    $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                    $('.modal-body').empty();
                                    $('.modal-body').append('<h2 class="text-center">APROBADA PARA REVISION FINAL</h2>');                                    
                                    setTimeout(function() {
                                        var pathname = window.location.pathname;
                                        window.location.replace(pathname);
                                    }, 2500);                                    
                                    break;
                                case "2":
                                    $('.modal-header').empty();    
                                    $('.modal-footer').remove();
                                    $('.modal-header').removeClass('modal-header-info');
                                    $('.modal-header').addClass('modal-header-danger');
                                    $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                    $('.modal-body').empty();
                                    $('.modal-body').append('<h2 class="text-center">ERROR AL CREAR ACTIVIDAD DE APROBADOR</h2>');
                                    $('.modal-content').append("<div class='modal-footer'>\n\
                                                                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Cerrar</button>\n\
                                                                </div>");
                                    break;
                                case "3":
                                    $('.modal-header').empty();
                                    $('.modal-footer').remove();
                                    $('.modal-header').removeClass('modal-header-info');
                                    $('.modal-header').addClass('modal-header-danger');
                                    $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                    $('.modal-body').empty();
                                    $('.modal-body').append('<h2 class="text-center">ERROR AL ACTUALIZAR ACTIVIDAD DE PRIMER REVISOR</h2>');
                                    $('.modal-content').append("<div class='modal-footer'>\n\
                                                                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Cerrar</button>\n\
                                                                </div>");
                                    break;
                                case "4":
                                    $('.modal-header').empty();                                    
                                    $('.modal-header').removeClass('modal-header-info');
                                    $('.modal-header').addClass('modal-header-success');
                                    $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                    $('.modal-body').empty();
                                    $('.modal-body').append('<h2 class="text-center">SOLICITUD APROBADA</h2>');
                                    setTimeout(function() {
                                        var pathname = window.location.pathname;
                                        window.location.replace(pathname);
                                    }, 2500);                                       
                                    break;
                                case "5":
                                    $('.modal-header').empty();
                                    $('.modal-footer').remove();
                                    $('.modal-header').removeClass('modal-header-info');
                                    $('.modal-header').addClass('modal-header-danger');
                                    $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                    $('.modal-body').empty();
                                    $('.modal-body').append('<h2 class="text-center">ERROR AL IMPONER TASAS</h2>');
                                    $('.modal-content').append("<div class='modal-footer'>\n\
                                                                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Cerrar</button>\n\
                                                                </div>");
                                    break;
                                case "6":                                    
                                    $('.modal-header').empty();
                                    $('.modal-footer').remove();
                                    $('.modal-header').removeClass('modal-header-info');
                                    $('.modal-header').addClass('modal-header-danger');
                                    $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                    $('.modal-body').empty();
                                    $('.modal-body').append('<h2 class="text-center">ERROR AL ACTUALIZAR DATOS DE VALIDACION</h2>');
                                    $('.modal-content').append("<div class='modal-footer'>\n\
                                                                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Cerrar</button>\n\
                                                                </div>");
                                    break;
                                case "7":                                    
                                    $('.modal-header').empty();
                                    $('.modal-footer').remove();
                                    $('.modal-header').removeClass('modal-header-info');
                                    $('.modal-header').addClass('modal-header-danger');
                                    $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                    $('.modal-body').empty();
                                    $('.modal-body').append('<h2 class="text-center">ERROR AL TERMINAR PROCESO DE LA ACTIVIDAD</h2>');
                                    $('.modal-content').append("<div class='modal-footer'>\n\
                                                                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Cerrar</button>\n\
                                                                </div>");
                                    break;
                                case "8":
                                    $('.modal-header').empty();                                    
                                    $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                    $('.modal-body').empty();
                                    $('.modal-body').append('<h2 class="text-center">SOLICITUD '+num.substring(14, 21)+' FUE DESISTIDA POR EL USUARIO</h2>');
                                    setTimeout(function() {
                                        var pathname = window.location.pathname;
                                        window.location.replace(pathname);
                                    }, 3000);
                                    break;
                                case "9":                                    
                                    $('.modal-header').empty();
                                    $('.modal-footer').remove();
                                    $('.modal-header').removeClass('modal-header-info');
                                    $('.modal-header').addClass('modal-header-danger');
                                    $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                    $('.modal-body').empty();
                                    $('.modal-body').append('<h2 class="text-center">SOLICITUD '+num.substring(14, 21)+' FUE DESISTIDA POR EL USUARIO...ERROR AL TERMINAR PROCESO DE LA ACTIVIDAD</h2>');
                                    $('.modal-content').append("<div class='modal-footer'>\n\
                                                                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Cerrar</button>\n\
                                                                </div>");
                                    break;
                            }                             
                         })
                        .fail(function(response){
                            alert(response);
                        }); 
            }else{
                var num = $("#req_no").val();
                var process = $("#process").val();
                var activity = $("#activity").val();                
                var username = $("#username").val();                                
                var estado="subsanar";

                 $.ajax({
                            url: "acciones.php",
                            method: "POST",           
                            data: { reqno: num,estado:estado,opcion:opcion,mensaje:obser,process:process,activity:activity,username:username}
                        }).success(function(response) {
                            // Populate the form fields with the data returned from server
//                                alert(response);
                                switch (response) {
                                    case "1":                                        
                                        $('.modal-header').empty();                                    
                                        $('.modal-header').removeClass('modal-header-info');
                                        $('.modal-header').addClass('modal-header-success');
                                        $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                        $('.modal-body').empty();
                                        $('.modal-body').append('<h2 class="text-center">SUBSANACION FUE ENVIADA</h2>');
                                        setTimeout(function() {
                                            var pathname = window.location.pathname;
                                            window.location.replace(pathname);
                                        }, 2500);                                        
                                        break;
                                    case "2":                                        
                                        $('.modal-header').empty();
                                        $('.modal-header').removeClass('modal-header-info');
                                        $('.modal-header').addClass('modal-header-danger');
                                        $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                        $('.modal-body').empty();
                                        $('.modal-body').append('<h2 class="text-center">ERROR AL ENVIAR SUBSANACION</h2>');
                                        $('.modal-content').append("<div class='modal-footer'>\n\
                                                                        <button type='button' class='btn btn-default pull-left'>Cerrar</button>\n\
                                                                    </div>");
                                        break;
                                    case "3":                                        
                                        $('.modal-header').empty();
                                        $('.modal-header').removeClass('modal-header-info');
                                        $('.modal-header').addClass('modal-header-danger');
                                        $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                        $('.modal-body').empty();
                                        $('.modal-body').append('<h2 class="text-center">ERROR AL FINALIZAR PROCESOS</h2>');
                                        $('.modal-content').append("<div class='modal-footer'>\n\
                                                                        <button type='button' class='btn btn-default pull-left'>Cerrar</button>\n\
                                                                    </div>");
                                        break;  
                                    case "8":                                        
                                        $('.modal-header').empty();                                    
                                        $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                        $('.modal-body').empty();
                                        $('.modal-body').append('<h2 class="text-center">SOLICITUD '+num+' FUE DESISTIDA POR EL USUARIO</h2>');
                                        setTimeout(function() {
                                            var pathname = window.location.pathname;
                                            window.location.replace(pathname);
                                        }, 2500);
                                         break;
                                    case "9":                                        
                                        $('.modal-header').empty();
                                        $('.modal-header').removeClass('modal-header-info');
                                        $('.modal-header').addClass('modal-header-danger');
                                        $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                        $('.modal-body').empty();
                                        $('.modal-body').append('<h2 class="text-center">SOLICITUD '+num+' FUE DESISTIDA POR EL USUARIO...ERROR AL TERMINAR PROCESO DE LA ACTIVIDAD</h2>');
                                        $('.modal-content').append("<div class='modal-footer'>\n\
                                                                        <button type='button' class='btn btn-default pull-left'>Cerrar</button>\n\
                                                                    </div>");
                                        break;
                                }
                             })
                            .fail(function(response){
                                alert(response);
                            });          
            }
        }else{
            alert("no ha escogido ninguna opcion");
        }   
    }); 