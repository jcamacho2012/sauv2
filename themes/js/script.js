/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
     $(document).ready(function() {
            (function($) {
                $('#filter').keyup(function() {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.searchable tr').hide();
                    $('.searchable tr').filter(function() {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));  
   
        	var td,campo,valor,id;
		$(document).on("click","td.editable span",function(e)
		{
			anls="";
			e.preventDefault();
			$("td:not(.id)").removeClass("editable");
			td=$(this).closest("td");
			valor=$(this).text();
                        valor=valor.replace('Cancel','');
                        cadena=valor.split(',');
                        $.each(cadena, function(index, value) {
                            anls+=$.trim(value)+"\n";
                        });
			id=$(this).closest("tr").find("#prdt_sn").text();
                        td.text("").html("<textarea class='caja' id='analisis_text'>"+anls+"</textarea><a class='enlace guardar' href='#'>Guardar</a><a class='enlace cancelar' href='#'>Cancelar</a>");
		});
		
		$(document).on("click",".cancelar",function(e)
		{
			e.preventDefault();                        
			td.html("<span>"+anls+"</span>");
			$("td:not(.id)").addClass("editable");
		});
		
		$(document).on("click",".guardar",function(e)
		{
			$(".mensaje").html("<img src='themes/images/loading.gif'>");
			e.preventDefault();
			nuevovalor=$(this).closest("td").find("textarea").val();
			if(nuevovalor.trim()!="")
			{
                                var num = $("#req_no").val();
				$.ajax({
					type: "POST",
					url: "includes/editinplace.php",
                                        data: { numero:num,valor: nuevovalor, id:id }					
				})
				.done(function( msg ) {
					$(".mensaje").html(msg);
					td.html("<span>"+nuevovalor+"</span>");
					$("td:not(.id)").addClass("editable");
					setTimeout(function() {$('.ok,.ko').fadeOut('fast');}, 3000);
				});
			}
			else $(".mensaje").html("<p class='ko'>Debes ingresar un valor</p>");
		});
        });
       
        function validateNumber(event) {
            var key = window.event ? event.keyCode : event.which;
            if (event.keyCode === 8 || event.keyCode === 46
                || event.keyCode === 37 || event.keyCode === 39) {
                return true;
            }
            else if ( key < 48 || key > 57 ) {
                return false;
            }
            else return true;
        };
            
        
        $('.hacer').on('click', function() {
            // Get the record's ID via attribute
            var req_no = $(this).attr('data-id');
            var id= $("input[name=id]").val();
            var rank= $("input[name=rank]").val();
            var identity_card= $("input[name=identity_card]").val();
            var username= $("input[name=username]").val();
            var activity=$(this).closest("tr").find("#activity").text();
            var process=$(this).closest("tr").find("#process").text();
            var opcion='hacer';

            $("#contenido").empty();
            $('.greyBox').after("<div class='redBox'>Iron man</div>");
            $("#contenido").append("<div id='fountainG'>\n\
                                        <div id='fountainG_1' class='fountainG'></div>\n\
                                        <div id='fountainG_2' class='fountainG'></div>\n\
                                        <div id='fountainG_3' class='fountainG'></div>\n\
                                        <div id='fountainG_4' class='fountainG'></div>\n\
                                        <div id='fountainG_5' class='fountainG'></div>\n\
                                        <div id='fountainG_6' class='fountainG'></div>\n\
                                        <div id='fountainG_7' class='fountainG'></div>\n\
                                        <div id='fountainG_8' class='fountainG'></div>\n\
                                    </div>");
        
            $.ajax({
                url: 'acciones.php',
                method: 'POST',           
                data: { reqno: req_no,opcion:opcion,id:id,rank:rank,activity:activity,process:process,username:username,identity_card:identity_card}
            }).success(function(response) {
                // Populate the form fields with the data returned from server
                    switch (response) {
                            case "8":
                                alert("SOLICITUD "+req_no+" FUE DESISTIDA POR EL USUARIO");
                                var pathname = window.location.pathname;
                                window.location.replace(pathname);
                                break;
                            case "9":
                                alert("SOLICITUD "+req_no+" FUE DESISTIDA POR EL USUARIO...ERROR AL FINALIZAR PROCESO");
                                var pathname = window.location.pathname;
                                window.location.replace(pathname);
                                break;
                            default:
                                 $('#fountainG').remove();
                                 $('#contenido').append(response); 
                                break;                                
                        }                              
                 })
                .fail(function(response){
                    $('#userForm').append('<h1>No existe conexion con ecuapass</h1>');
                });
        });
        
         $('.ver').on('click', function() {
            // Get the record's ID via attribute
            var req_no = $(this).attr('data-id');
            var opcion='ver';

            $("#contenido").empty();
            $('.greyBox').after("<div class='redBox'>Iron man</div>");
            $("#contenido").append("<div id='fountainG'>\n\
                                        <div id='fountainG_1' class='fountainG'></div>\n\
                                        <div id='fountainG_2' class='fountainG'></div>\n\
                                        <div id='fountainG_3' class='fountainG'></div>\n\
                                        <div id='fountainG_4' class='fountainG'></div>\n\
                                        <div id='fountainG_5' class='fountainG'></div>\n\
                                        <div id='fountainG_6' class='fountainG'></div>\n\
                                        <div id='fountainG_7' class='fountainG'></div>\n\
                                        <div id='fountainG_8' class='fountainG'></div>\n\
                                    </div>");
        
            $.ajax({
                url: 'acciones.php',
                method: 'POST',           
                data: { reqno: req_no,opcion:opcion}
            }).success(function(response) {
                // Populate the form fields with the data returned from server
                     $('#fountainG').remove();
                     $('#contenido').append(response);
                     
                     $(':input').prop('readonly', true);

                 })
                .fail(function(response){
                    $('#userForm').append('<h1>No existe conexion con ecuapass</h1>');
                });
        });
         
    
        $('.liberar').on('click', function() {
        // Get the record's ID via attribute
            var activity=$(this).closest("tr").find("#activity").text();
            var process=$(this).closest("tr").find("#process").text();       
            var opcion='liberar';

            $.ajax({
                url: 'acciones.php',
                method: 'POST',           
                data: { activity:activity,process:process,opcion:opcion}
            }).success(function(response) {
                // Populate the form fields with the data returned from server
                alert('Solicitud fue liberada');
                var pathname = window.location.pathname;
                window.location.replace(pathname);
                
            });
        });
       

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
                $.ajax({
                        url: "acciones.php",
                        method: "POST",           
                        data: { reqno: num,estado:estado,rank:rank,process:process,activity:activity,cedula:cedula,username:username}
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