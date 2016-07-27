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
   
                $.ajax({
                        url: "acciones.php",
                        method: "POST",           
                        data: { reqno: num,estado:estado,rank:rank,process:process,activity:activity,cedula:cedula,username:username,cadena:cadena}
                    }).success(function(response) {
                        // Populate the form fields with the data returned from server
                            switch (response) {
                                case "1":
                                    alert("APROBADA PARA REVISION FINAL");
                                    var pathname = window.location.pathname;
                                    window.location.replace(pathname);
                                    break;
                                case "2":
                                    alert("ERROR AL CREAR ACTIVIDAD DE APROBADOR");
                                    break;
                                case "3":
                                    alert("ERROR AL ACTUALIZAR ACTIVIDAD DE PRIMER REVISOR");
                                    break;
                                case "4":
                                    alert("SOLICITUD APROBADA");
                                    var pathname = window.location.pathname;
                                    window.location.replace(pathname);
                                    break;
                                case "5":
                                    alert("ERROR AL IMPONER TASAS");
                                    break;
                                case "6":
                                    alert("ERROR AL ACTUALIZAR DATOS DE VALIDACION");
                                    break;
                                case "7":
                                    alert("ERROR AL TERMINAR PROCESO DE LA ACTIVIDAD");
                                    break;
                                case "8":
                                    alert("SOLICITUD "+num+" FUE DESISTIDA POR EL USUARIO");
                                    var pathname = window.location.pathname;
                                    window.location.replace(pathname);
                                    break;
                                case "9":
                                    alert("SOLICITUD "+num+" FUE DESISTIDA POR EL USUARIO...ERROR AL TERMINAR PROCESO DE LA ACTIVIDAD");
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
                                        alert("SUBSANACION FUE ENVIADA");
                                        var pathname = window.location.pathname;
                                        window.location.replace(pathname);
                                        break;
                                    case "2":
                                        alert("ERROR AL ENVIAR SUBSANACION");
                                        break;
                                    case "3":
                                        alert("ERROR AL FINALIZAR PROCESOS");
                                        break;  
                                    case "8":
                                        alert("SOLICITUD "+num+" FUE DESISTIDA POR EL USUARIO");
                                        var pathname = window.location.pathname;
                                        window.location.replace(pathname);
                                         break;
                                    case "9":
                                        alert("SOLICITUD "+num+" FUE DESISTIDA POR EL USUARIO...ERROR AL TERMINAR PROCESO DE LA ACTIVIDAD");
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