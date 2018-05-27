/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
     $(document).ready(function() {
         
             $("#migracion").change(function(){ 
                $("#vigencia").prop("disabled", false);
                $("#secuencial_migracion").prop("disabled", false);
                $("#verificar").prop("disabled", false); 
            });
                        
            $("#vigencia").datepicker({
                format: "yyyy/mm/dd",
                language: "es",
                autoclose: true
            });
            
            $("#verificar").click(function(){
                var secuencial= $("#secuencial_migracion").val();
                if(secuencial.length != 0){
                       $.ajax({
                            url: "ajax.php",
                            method: "POST",
                            data: { secuencial: secuencial}
                                }).success(function(response) {                   
                                    alert(response);
                                });
                }else{
                    alert("no hay valor del secuencial");
                }                                            
            });                 
                    
            // filtro para la busqueda de solicitudes en tareas pendientes
            (function($) {
                $('#filter').keyup(function() {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.searchable tr').hide();
                    $('.searchable tr').filter(function() {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery)); 
                
                //evento checkbox para seleccionar/deseleccionar las tareas pendientes
                $("#selecctall").change(function(){
                    $(".case:visible").prop('checked', $(this).prop("checked"));
                });
                
                //evento de los checkbox de cada tarea para habilitar/deshabilitar los botones de asignación
                var checkBoxes = $('.case, .primary');
                checkBoxes.change(function () {
                    $('#asignar').prop('disabled', checkBoxes.filter(':checked').length < 1);
                    $('#no_asignar').prop('disabled', checkBoxes.filter(':checked').length < 1);
                    $('#usuarios').prop('disabled', checkBoxes.filter(':checked').length < 1);
                });
                $('tbody .case').change();
                
                
                //evento para asignar solicitudes a otros usuarios (Admin)
                $("#asignar").click(function(){
                    var val = [];
                    $(':checkbox:checked:not(.primary):visible').each(function(i){
                      val[i] = $(this).val();
                    });
                    
                    alert("val");
                    var opcion='asignar';
                    var usuario=$("#usuarios").val();
                    var nombre=$( "#usuarios option:selected" ).text();
                    $('#myModal').modal('show'); 
                    if(usuario){
                        $.ajax({
                        url: 'acciones.php',
                        method: 'POST',           
                        data: { lista: val,opcion:opcion,usuario:usuario}
                        }).success(function(response) {
                            // Populate the form fields with the data returned from server
                            switch (response) {
                                case "1":
                                    $('.modal-header').empty();    
                                    $('.modal-footer').remove();
                                    $('.modal-header').removeClass('modal-header-info');
                                    $('.modal-header').addClass('modal-header-success');
                                    $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO..</h4>');                                    
                                    $('.modal-body').empty();
                                    $('.modal-body').append('<h2 class="text-center">SOLICITUD(ES) ASIGNADA(S) A '+nombre+'</h2>');
                                    setTimeout(function() {
                                        var pathname = window.location.pathname;
                                        window.location.replace(pathname);
                                    }, 2000);  

                                    break;
                                case "2":
                                    $('.modal-header').empty();    
                                    $('.modal-footer').remove();
                                    $('.modal-header').removeClass('modal-header-info');
                                    $('.modal-header').addClass('modal-header-danger');
                                    $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO..</h4>');                                    
                                    $('.modal-body').empty();
                                    $('.modal-body').append('<h2 class="text-center">ERROR AL ASIGNAR SOLICITUD(ES)</h2>');
                                    $('.modal-content').append("<div class='modal-footer'>\n\
                                                                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Cerrar</button>\n\
                                                                </div>");
                                    break;                                                                
                            }           
                        })
                        .fail(function(response){
                            $('#userForm').append('<h1>No existe conexion con ecuapass</h1>');
                        });
                    }else{                        
                        $('.modal-header').empty();    
                        $('.modal-footer').remove();
                        $('.modal-header').removeClass('modal-header-info');
                        $('.modal-header').addClass('modal-header-danger');
                        $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO..</h4>');                                    
                        $('.modal-body').empty();
                        $('.modal-body').append('<h2 class="text-center">SELECCIONAR USUARIO</h2>');
                        $('.modal-content').append("<div class='modal-footer'>\n\
                                                        <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Cerrar</button>\n\
                                                    </div>");
                    }
                    
                });     
                
                    
                //tabla editable (formulario calidad 130-039)
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
               
        //ecvento hacer para visualizar los datos de la solicitud
        $('.hacer').on('click', function() {
            // Get the record's ID via attribute
            var req_no = $(this).attr('data-id');
            alert('verHACER');
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
                                $('.modal-header').empty();                                    
                                $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                $('.modal-body').empty();
                                $('.modal-body').append('<h2 class="text-center">SOLICITUD '+req_no.substring(14, 21)+' FUE DESISTIDA POR EL USUARIO</h2>');
                                setTimeout(function() {
                                    var pathname = window.location.pathname;
                                    window.location.replace(pathname);
                                }, 3000);
                                break;
                            case "9":                                
                                $('.modal-header').empty();                                    
                                $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                $('.modal-body').empty();
                                $('.modal-body').append('<h2 class="text-center">SOLICITUD '+req_no.substring(14, 21)+' FUE DESISTIDA POR EL USUARIO...ERROR AL FINALIZAR PROCESO</h2>');
                                setTimeout(function() {
                                    var pathname = window.location.pathname;
                                    window.location.replace(pathname);
                                }, 3000);
                                break;
                            case "7":
                                $('.modal-header').empty();                                    
                                $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');                                    
                                $('.modal-body').empty();
                                $('.modal-body').append('<h2 class="text-center">SOLICITUD '+req_no.substring(14, 21)+' ESTA SIENDO O FUE PROCESADA POR OTRO USUARIO</h2>');
                                setTimeout(function() {
                                    var pathname = window.location.pathname;
                                    window.location.replace(pathname);
                                }, 3000);
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
        
        
         $('.tomar').on('click', function() {
        // Get the record's ID via attribute
            var id= $("input[name=id]").val();
            var activity=$(this).closest("tr").find("#activity").text();
            var process=$(this).closest("tr").find("#process").text();
            var opcion='tomar';

            $.ajax({
                url: 'acciones.php',
                method: 'POST',           
                data: { id: id,opcion:opcion,activity:activity,process:process}
            }).success(function(response) {
                // Populate the form fields with the data returned from server
                switch (response) {
                            case "1":
                                $('.modal-header').empty();
                                $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');
                                $('.modal-body').empty();
                                $('.modal-body').append('<h2 class="text-center">SOLICITUD '+req_no.substring(14, 21)+' FUE TOMADA</h2>');
                                setTimeout(function() {
                                    var pathname = window.location.pathname;
                                    var res = pathname.replace("unAssig", "task");
                                    window.location.replace(res);
                                }, 3000);
                                break;
                            case "2":
                                $('.modal-header').empty();
                                $('.modal-header').append('<h4 class="modal-title" id="titulo">ESTADO DE PROCESAMIENTO..</h4>');
                                $('.modal-body').empty();
                                $('.modal-body').append('<h2 class="text-center">SOLICITUD FUE TOMADA POR OTRO USUARIO</h2>');
                                setTimeout(function() {
                                    var pathname = window.location.pathname;
                                    window.location.replace(pathname);
                                }, 3000);
                                break;
                            default:
                                break;
                        }
            });
        });
        

        $(function () {
            $('.list-group-item').each(function () {
                // Settings
                var widget = $(this),
                    checkbox = $('<input type="checkbox" class="hidden" />'),
                    color = (widget.data('color') ? widget.data('color') : "primary"),
                    style = (widget.data('style') == "button" ? "btn-" : "list-group-item-"),
                    settings = {
                        on: {
                            icon: 'glyphicon glyphicon-check'
                        },
                        off: {
                            icon: 'glyphicon glyphicon-unchecked'
                        }
                    };
            
                widget.css('cursor', 'pointer')
                widget.append(checkbox);

                // Event Handlers
                widget.on('click', function () {
                    checkbox.prop('checked', !checkbox.is(':checked'));
                    checkbox.triggerHandler('change');
                    updateDisplay();
                });
                checkbox.on('change', function () {
                    updateDisplay();
                });
          

                // Actions
                function updateDisplay() {
                    var isChecked = checkbox.is(':checked');

                    // Set the button's state
                    widget.data('state', (isChecked) ? "on" : "off");

                    // Set the button's icon
                    widget.find('.state-icon')
                        .removeClass()
                        .addClass('state-icon ' + settings[widget.data('state')].icon);

                    // Update the button's color
                    if (isChecked) {
                        widget.addClass(style + color + ' active');
                    } else {
                        widget.removeClass(style + color + ' active');
                    }
                }

                // Initialization
                function init() {

                    if (widget.data('checked') == true) {
                        checkbox.prop('checked', !checkbox.is(':checked'));
                    }

                    updateDisplay();

                    // Inject the icon if applicable
                    if (widget.find('.state-icon').length == 0) {
                        widget.prepend('<span class="state-icon ' + settings[widget.data('state')].icon + '"></span>');
                    }
                }
                init();
            }); 
        });