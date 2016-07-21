<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp006Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp006/TnInp006PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp006/TnInp006CtnrPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_006_040($req_no,$dcm_cd,$rol,$process,$activity,$cedula,$username){      
    $tninp006= consulta_datos_formulario_006_040($req_no);
    $solicitud=$tninp006->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{                
    $contenedor= cargar_lista_contenedor_006_040($req_no);
    $producto= cargar_lista_productos_006_040($req_no);
    $adjunto= cargar_lista_adjuntos($req_no);        
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval.='
            <script type="text/javascript">                    
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
                                        }
                                     })
                                    .fail(function(response){
                                        alert(response);
                                    }); 
                        }else{
                            var num = $("#req_no").val();
                            var process = $("#process").val();
                            var activity = $("#activity").val();
                            var rank = $("#rol").val();
                            var username = $("#username").val();                                
                            var estado="subsanar";
                             $.ajax({
                                        url: "acciones.php",
                                        method: "POST",           
                                        data: { reqno: num,estado:estado,opcion:opcion,rank:rank,mensaje:obser,process:process,activity:activity,username:username}
                                    }).success(function(response) {
                                        // Populate the form fields with the data returned from server
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
            </script>';
    
    $retval.="
            <script>
                function setCharAt(str,index,chr) {
                        if(index > str.length-1) return str;
                        return str.substr(0,index) + chr + str.substr(index+1);
                }
                $(document).ready(function() { 
                    $('#cbe').change(function(){
                        if (this.checked) {
                            $('.txte').css('text-decoration', 'line-through');
                            $('.literales input').val(setCharAt($('#cbe').val(),0,\"0\"));
                        }
                        else {
                            $('.txte').css('text-decoration', 'none');
                            $('.literales input').val(setCharAt($('#cbe').val(),0,\"1\"));
                        }
                    });
                    $('#cbf').change(function(){
                        if (this.checked) {
                            $('.txtf').css('text-decoration', 'line-through');
                            $('.literales input').val(setCharAt($('#cbf').val(),1,\"0\"));
                        }
                        else {
                            $('.txtf').css('text-decoration', 'none');
                            $('.literales input').val(setCharAt($('#cbf').val(),1,\"1\"));
                        }
                    });
                    $('#cbg').change(function(){
                        if (this.checked) {
                            $('.txtg').css('text-decoration', 'line-through');
                            $('.literales input').val(setCharAt($('#cbg').val(),2,\"0\"));
                        }
                        else {
                            $('.txtg').css('text-decoration', 'none');
                            $('.literales input').val(setCharAt($('#cbg').val(),2,\"1\"));
                        }
                    }) ;
                    $('#cbh').change(function(){
                        if (this.checked) {
                            $('.txth').css('text-decoration', 'line-through');
                            $('.literales input').val(setCharAt($('#cbh').val(),3,\"0\"));
                        }
                        else {
                            $('.txth').css('text-decoration', 'none');
                            $('.literales input').val(setCharAt($('#cbh').val(),3,\"1\"));
                        }
                    }) ;
                    $('#cbi').change(function(){
                        if (this.checked) {
                            $('.txti').css('text-decoration', 'line-through');
                            $('.literales input').val(setCharAt($('#cbi').val(),4,\"0\"));
                        }
                        else {
                            $('.txti').css('text-decoration', 'none');
                            $('.literales input').val(setCharAt($('#cbi').val(),4,\"1\"));
                        }
                    }) ;
                    $('#cbj').change(function(){
                        if (this.checked) {
                            $('.txtj').css('text-decoration', 'line-through');
                            $('.literales input').val(setCharAt($('#cbj').val(),5,\"0\"));
                        }
                        else {
                            $('.txtj').css('text-decoration', 'none');
                            $('.literales input').val(setCharAt($('#cbj').val(),5,\"1\"));
                        }
                    }) ;
                    autoguardar();
                });

                function autoguardar() {
                    $(function() {
                        $(\"input\").autosave({                       
                            url: \"autoguardar.php\",//set the php file that updates the database
                            method: \"post\",
                            grouped: true,//send data for all fields with the autosave
                           success: function(data) {//on a successful update...
                            $(\"#message\").html(\"Data updated successfully\").show();//...show a message...
                            setTimeout('fadeMessage()',1500);//...and then fade it out after an interval                        
                        },
                            send: function(){//on a save...
                            $(\"#message\").html(\"Sending data....\");//..show a message
                            },
                            dataType: \"html\"

                    });	
                   function fadeMessage(){
                            $('#message').fadeOut('slow');//just a function to fade out the message
                    }
                    });        
                }; 
            </script>";
    
    
    $retval.='
            <div class="display-2">
                <h2 align="center">'.substr($tninp006->getDcm_no(), 0, -4).'  '.$tninp006->getDcm_nm().'</h2>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">
                      <a data-toggle="collapse" href="#collapse1">Mostrar Notificaciones Solicitadas</a>
                    </h3>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                        '.$notificacion.'
                    </div>        
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Solicitud</h3>
                </div>
                <div class="panel-body">
                    <div class="hidden" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">                                   
                            <input type="text" class="form-control"  id="process" readonly value="'.$process.'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">                                     
                            <input type="text" class="form-control"  id="activity" readonly value="'.$activity.'"  />
                        </div>
                     </div>
                      <div class="hidden" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">                                   
                            <input type="text" class="form-control"  id="cedula" readonly value="'.$cedula.'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <input type="text" class="form-control"  id="rol" readonly value="'.$rol.'" /> 
                        </div>

                        <div class="col-xs-5 form-group">                                     
                            <input type="text" class="form-control"  id="username" readonly value="'.$username.'"  />
                        </div>
                     </div>
                     <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Número de Solicitud</label>                                      
                            <input type="text" class="form-control" name="req_no" id="req_no" readonly value="'.$tninp006->getReq_no().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Fecha de Solicitud</label>                                        
                            <input type="text" class="form-control" name="mdf_dt" readonly value="'.$tninp006->getMdf_dt().'"  />
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Ciudad de Solicitud</label>                                      
                            <input type="text" class="form-control" name="req_city_nm" readonly value="'.$tninp006->getReq_city_nm().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Tipo de Documento</label>                                        
                            <input type="text" class="form-control" name="dcm_type_nm" readonly value="'.$tninp006->getDcm_type_nm().'"  />
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Número de Certificado Anterior</label>                                      
                            <input type="text" class="form-control" name="prev_ctft_no" readonly value="'.$tninp006->getPrev_ctft_no().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Fecha de Emisión de Certificado Anterior</label>                                        
                            <input type="text" class="form-control" name="prev_ctft_iss_de" readonly value="'.$tninp006->getPrev_ctft_iss_de().'"  />
                        </div>
                    </div>                                                           
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Número de Certificado de Calidad</label>                                      
                        <input type="text" class="form-control" name="qlt_ctft_no" readonly value="'.$tninp006->getQlt_ctft_no().'" />                                    
                    </div>
                </div>
            </div>';
             
    $retval.='	
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Solicitante</h3>
                </div>
                <div class="panel-body">
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Clasificación del Solicitante</label>                                      
                            <input type="text" class="form-control" name="dclr_cl_cd" readonly value="'.$tninp006->getDclr_cl_cd().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Número de Identificación de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_idt_no" readonly value="'.$tninp006->getDclr_idt_no().'"  />
                        </div>
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Razón Social del Solicitante</label>                                        
                        <input type="text" class="form-control" name="dclr_nole" readonly value="'.$tninp006->getDclr_nole().'"  />
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Provincia de la Empresa Solicitante</label>                                      
                            <input type="text" class="form-control" name="dclr_prvhc_nm" readonly value="'.$tninp006->getDclr_prvhc_nm().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Cantón/Ciudad de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_cuty_nm" readonly value="'.$tninp006->getDclr_cuty_nm().'"  />
                        </div>
                    </div>
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Parroquia de la Empresa Solicitante</label>                                        
                        <input type="text" class="form-control" name="dclr_prqi_nm" readonly value="'.$tninp006->getDclr_prqi_nm().'"  />
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Dirección de la Empresa Solicitante</label>                                        
                        <input type="text" class="form-control" name="dclr_ad" readonly value="'.$tninp006->getDclr_ad().'"  />
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Nombre de Solicitante</label>                                        
                        <input type="text" class="form-control" name="dclr_nm" readonly value="'.$tninp006->getDclr_nm().'"  />
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Teléfono del Solicitante</label>                                      
                            <input type="text" class="form-control" name="dclr_tel_no" readonly value="'.$tninp006->getDclr_tel_no().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Fax del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_fax_no" readonly value="'.$tninp006->getDclr_fax_no().'"  />
                        </div>
                    </div>
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Correo Electrónico del Solicitante</label>                                        
                        <input type="text" class="form-control" name="dclr_em" readonly value="'.$tninp006->getDclr_em().'"  />
                    </div>				
                </div>
            </div>';
            
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Exportador</h3>
                </div>
                <div class="panel-body">
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Clasificación del Exportador</label>                                      
                            <input type="text" class="form-control" name="expr_cl_cd" readonly value="'.$tninp006->getExpr_cl_cd().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Número de Identificación del Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_idt_no" readonly value="'.$tninp006->getExpr_idt_no().'"  />
                        </div>
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Nombre de Exportador</label>                                        
                        <input type="text" class="form-control" name="expr_nm" readonly value="'.$tninp006->getExpr_ad().'"  />
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>País Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_ntn_nm" readonly value="'.$tninp006->getExpr_ntn_nm().'"  />
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Provincia</label>                                      
                            <input type="text" class="form-control" name="expr_prvhc_nm" readonly value="'.$tninp006->getExpr_prvhc_nm().'" />                                    
                        </div>
                    </div>						
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Cantón/Ciudad</label>                                        
                            <input type="text" class="form-control" name="expr_cuty_nm" readonly value="'.$tninp006->getExpr_cuty_nm().'"  />
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Parroquia</label>                                        
                            <input type="text" class="form-control" name="expr_prqi_nm" readonly value="'.$tninp006->getExpr_prqi_nm().'"  />
                        </div>
                    </div>                      
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Dirección</label>                                        
                        <input type="text" class="form-control" name="expr_ad" readonly value="'.$tninp006->getExpr_ad().'"  />
                    </div>                        
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Teléfono del Exportador</label>                                      
                            <input type="text" class="form-control" name="expr_tel_no" readonly value="'.$tninp006->getExpr_tel_no().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Fax del Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_fax_no" readonly value="'.$tninp006->getExpr_fax_no().'"  />
                        </div>
                    </div>
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Correo Electrónico del Exportador</label>                                        
                        <input type="text" class="form-control" name="expr_em" readonly value="'.$tninp006->getExpr_em().'"  />
                    </div>				
                </div>
            </div> ';
            
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Importador</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Nombre de Importador</label>                                        
                        <input type="text" class="form-control" name="impr_nm" readonly value="'.$tninp006->getImpr_ad().'"  />
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>País del Importador</label>                                      
                            <input type="text" class="form-control" name="impr_ntn_nm" readonly value="'.$tninp006->getImpr_ntn_nm().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Ciudad Importador</label>                                        
                            <input type="text" class="form-control" name="impr_city_nm" readonly value="'.$tninp006->getImpr_city_nm().'"  />
                        </div>
                    </div>                        
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Dirección del Importador</label>                                        
                        <input type="text" class="form-control" name="impr_ad" readonly value="'.$tninp006->getImpr_ad().'"  />
                    </div>                        
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Teléfono del Importador</label>                                      
                            <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp006->getImpr_tel_no().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Fax del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp006->getImpr_fax_no().'"  />
                        </div>
                    </div>
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Correo Electrónico del Importador</label>                                        
                        <input type="text" class="form-control" name="impr_em" readonly value="'.$tninp006->getImpr_em().'"  />
                    </div>				
                </div>
            </div>';
    
        if($dcm_cd=='130-006'){
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Fabricante</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Nombre de Fabricante</label>                                        
                        <input type="text" class="form-control" name="mfr_nm" readonly value="'.$tninp006->getMfr_nm().'"  />
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>País del Fabricante</label>                                      
                            <input type="text" class="form-control" name="mfr_ntn_nm" readonly value="'.$tninp006->getMfr_ntn_nm().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Ciudad de Fabricante</label>                                        
                            <input type="text" class="form-control" name="mfr_city_nm" readonly value="'.$tninp006->getMfr_city_nm().'"  />
                        </div>
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Dirección de Fabricante</label>                                        
                        <input type="text" class="form-control" name="mfr_ad" readonly value="'.$tninp006->getMfr_ad().'"  />
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Número de Autorización de Fabricante</label>                                      
                            <input type="text" class="form-control" name="mfr_prdr_estbl_atr_no" readonly value="'.$tninp006->getMfr_prdr_estbl_atr_no().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Teléfono de Fabricante</label>                                      
                            <input type="text" class="form-control" name="mfr_tel_no" readonly value="'.$tninp006->getMfr_tel_no().'" />                                    
                        </div>
                    </div>                         
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Fax de Fabricante</label>                                        
                            <input type="text" class="form-control" name="mfr_fax_no" readonly value="'.$tninp006->getMfr_fax_no().'"  />
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Correo Electrónico del Fabricante</label>                                        
                            <input type="text" class="form-control" name="mfr_em" readonly value="'.$tninp006->getMfr_em().'"  />
                        </div>
                    </div>			
                </div>
            </div>';
        }
                     
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos Generales</h3>
                </div>
                <div class="panel-body">
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Nombre de Medio de Transporte/Almacenamiento</label>                                      
                            <input type="text" class="form-control" name="trsp_way_nm" readonly value="'.$tninp006->getTrsp_way_nm().'" />                                    
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-11 form-group">
                            <label>Condiciones de Transporte</label>                                      
                            <input type="text" class="form-control" name="whos_trsp_cdt_inf" readonly value="'.$tninp006->getWhos_trsp_cdt_inf().'" />                                    
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                                <label>Nombre de Empresa de Transporte</label>                                        
                                <input type="text" class="form-control" name="carr_nm" readonly value="'.$tninp006->getCarr_nm().'"  />
                        </div> 
                        <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                        </div>
                         <div class="col-xs-5 form-group">
                            <label>País de Origen</label>                                        
                            <input type="text" class="form-control" name="org_ntn_nm" readonly value="'.$tninp006->getOrg_ntn_nm().'"  />
                        </div>                                                           
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>País de Destino</label>                                        
                            <input type="text" class="form-control" name="dst_ntn_nm" readonly value="'.$tninp006->getDst_ntn_nm().'"  />
                        </div> 
                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>
                         <div class="col-xs-5 form-group">
                            <label>Fecha de Salida</label>                                        
                            <input type="text" class="form-control" name="crt_de" readonly value="'.$tninp006->getCrt_de().'"  />
                        </div>                                                           
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-11 form-group">
                            <label>Lugar de Carga</label>                                      
                            <input type="text" class="form-control" name="crg_plc" readonly value="'.$tninp006->getCrg_plc().'" />                                    
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>País de Entrada</label>                                        
                            <input type="text" class="form-control" name="ptet_ntn_nm" readonly value="'.$tninp006->getPtet_ntn_nm().'"  />
                        </div> 
                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>
                         <div class="col-xs-5 form-group">
                            <label>Puerto de Entrada</label>                                        
                            <input type="text" class="form-control" name="ptet_nm" readonly value="'.$tninp006->getPtet_nm().'"  />
                        </div>                                                           
                    </div>                       
                </div>
            </div>';
                         
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Contenedor</h3>
                </div>
                <div class="panel-body">						
                    '.$contenedor.'																												
                </div>
            </div>';
				
        if($dcm_cd=='130-040'){
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Fabricante</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Nombre de Fabricante</label>                                        
                        <input type="text" class="form-control" name="mfr_nm" readonly value="'.$tninp006->getMfr_nm().'"  />
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>País del Fabricante</label>                                      
                            <input type="text" class="form-control" name="mfr_ntn_nm" readonly value="'.$tninp006->getMfr_ntn_nm().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Ciudad de Fabricante</label>                                        
                            <input type="text" class="form-control" name="mfr_city_nm" readonly value="'.$tninp006->getMfr_city_nm().'"  />
                        </div>
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Dirección de Fabricante</label>                                        
                        <input type="text" class="form-control" name="mfr_ad" readonly value="'.$tninp006->getMfr_ad().'"  />
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Número de Autorización de Fabricante</label>                                      
                            <input type="text" class="form-control" name="mfr_atr_no" readonly value="'.$tninp006->getMfr_prdr_estbl_atr_no().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Teléfono de Fabricante</label>                                      
                            <input type="text" class="form-control" name="mfr_tel_no" readonly value="'.$tninp006->getMfr_tel_no().'" />                                    
                        </div>
                    </div>                         
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Fax de Fabricante</label>                                        
                            <input type="text" class="form-control" name="mfr_fax_no" readonly value="'.$tninp006->getMfr_fax_no().'"  />
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Correo Electrónico del Fabricante</label>                                        
                            <input type="text" class="form-control" name="mfr_em" readonly value="'.$tninp006->getMfr_em().'"  />
                        </div>
                    </div>			
                </div>
            </div>';
        }
            
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Referencia</h3>
                </div>
                <div class="panel-body">
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Factura</label>                                      
                            <input type="text" class="form-control" name="inv_no" readonly value="'.$tninp006->getInv_no().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Tratamiento de Producto</label>                                      
                            <input type="text" class="form-control" name="whos_trsp_cdt_inf" readonly value="'.$tninp006->getWhos_trsp_cdt_inf().'" />                                    
                        </div>						
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Intención/Proposito</label>                                      
                            <input type="text" class="form-control" name="ctft_prdt_nm" readonly value="'.$tninp006->getCtft_prdt_nm().'" />                                    
                        </div>
                    </div>
                </div>
            </div>';
		
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Identificación de Producto</h3>
                </div>
                <div class="panel-body">
                    '.$producto.'
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Cantidad Total de Paquetes de Producto</label>                                      
                            <input type="text" class="form-control" name="pkgs_tot_qt" readonly value="'.$tninp006->getPkgs_tot_qt().' '.$tninp006->getPkgs_tot_qt_ut().'"/>                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Peso Total</label>                                      
                            <input type="text" class="form-control" name="prdt_tot_nwt" readonly value="'.$tninp006->getTot_wt().' '.$tninp006->getTot_wt_ut().'" />                                    
                        </div>						
                    </div>
                </div>
            </div>';            
            
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Observaciones</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-11 form-group">
                        <label>Observaciones del solicitante</label>
                        <textarea class="form-control" rows="5" readonly name="dclr_rmk">'.$tninp006->getDclr_rmk().'</textarea>
                    </div>
                    <div class="col-xs-11 form-group">
                        <label>Observaciones del Aprobador</label>
                        <textarea class="form-control" rows="5" name="aprb_rmk" id="aprb_rmk"></textarea>
                    </div>
                </div>
            </div>';
		
        if($rol=='4'){
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Literales Brasil</h3>
                </div>
                <div class="panel-body">                   
                    <div class="literales">   
                        <ul>
                            <li class="txte">
                                <input id="cbe" type="checkbox" name="bre" class="cb" value="111111"/>
                                e)  os moluscos bivalves e gastrópodes foram colhidos em áreas submetidas a controle sanitário oficial para identificação de biotoxinas marinhas, de acordo com os padrões reconhecidos internacionalmente*/ los moluscos bivalves y gastrópodos se recolectaron en zonas sometidas a control sanitario oficial para la identificación de biotoxinas marinas, de conformidad con las normas internacionalmente reconocidas*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                           <li class="txtf">
                                <input id="cbf" type="checkbox" name="brf" class="cb" value="111111"/>
                                f)  o pescado e seus produtos não foram descongelados durante a estocagem e foram despachados com temperatura no centro do músculo não superior a -18ºC* / el pescado y sus productos no se descongelaron durante el almacenamiento y fueron enviados con una temperatura central del músculo no superior a -18 º C*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                           <li class="txtg">
                                <input id="cbg" type="checkbox" name="brg" class="cb" value="111111"/>
                                g)  o pescado e seus produtos encontram-se resfriados a uma temperatura próxima a 0ºC (ponto de fusão do gelo)* / el pescado y sus productos han sido enfriados a una temperatura cercana a 0 °C (punto de fusión del hielo)*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                           <li class="txth">
                                <input id="cbh" type="checkbox" name="brh" class="cb" value="111111"/>
                                h)  o pescado e seus produtos não sofreram a adição de fosfatos ou similares antes de seu congelamento* / el pescado y sus productos no han sido objeto de la adición de fosfatos o similares antes de su congelación*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                           <li class="txti">
                                <input id="cbi" type="checkbox" name="bri" class="cb" value="111111"/>
                                i)  a declaração do peso líquido do pescado congelado na rotulagem, quando glaciado, foi obtida descontando-se o peso da embalagem e do gelo de glaciamento* / Cuando el pescado esté glaseado, en la declaración del contenido neto del pescado no se incluye el glaseado*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                           <li class="txtj">
                                <input id="cbj" type="checkbox" name="brj" class="cb" value="111111"/>
                                j)  o material utilizado na embalagem é de primeiro uso e satisfaz os requerimentos higiênico – sanitários estabelecidos pela (s) Autoridade (s) Competente (s) do país de expedição * / el material utilizado en los envases es de primer uso y cumple con los requisitos higiénico - sanitarios establecidos por la (s)Autoridad (es) Competente (s) en el país de expedición*;                        i)  a declaração do peso líquido do pescado congelado na rotulagem, quando glaciado, foi obtida descontando-se o peso da embalagem e do gelo de glaciamento* / Cuando el pescado esté glaseado, en la declaración del contenido neto del pescado no se incluye el glaseado*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                        </ul>
                   </div>                    
                </div>
            </div>';
        }
            
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Documentos Adjuntos</h3>
                </div>
                <div class="panel-body">
                    '.$adjunto.'
                </div>
            </div>';
        
  $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Acciones</h3>
                </div>
                <div class="panel-body">
                    <div class="funkyradio">
                         <div class="funkyradio-success">
                            <input type="radio" name="radio" id="aprobar"/>
                            <label for="aprobar">Aprobar</label>
                        </div>
                       <div class="funkyradio-warning">
                            <input type="radio" name="radio" id="subsanar" />
                            <label for="subsanar">Subsanar</label>
                        </div>
                        <div class="funkyradio-danger">
                            <input type="radio" name="radio" id="rechazar" />
                            <label for="rechazar">Rechazar</label>
                        </div>
                    <button type="button" class="btn btn-default" id="btn_enviar">Enviar</button>
                    </div>
                </div>
             </div>';            
        
    }
    return $retval;
    
}