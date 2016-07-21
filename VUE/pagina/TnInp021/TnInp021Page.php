<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp021Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp021/TnInp021AnlsPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnNtfc/TnNtfcPage.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_021($req_no,$process,$activity,$cedula,$username){    
    $tninp021= consulta_datos_formulario_021($req_no);
    $solicitud=$tninp021->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }
    else{
        $analisis= cargar_lista_analisis_021($req_no);
        $adjunto= cargar_lista_adjuntos($req_no);
        $notificacion= cargar_lista_notificaciones($req_no);
        $retval=' 
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
                </script>
               	<div class="display-2">
                    <h2 align="center">'.substr($tninp021->getDcm_no(), 0, -4).'  '.$tninp021->getDcm_nm().'</h2>
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
                                <input type="text" class="form-control"  id="rol" readonly value="rol" /> 
                            </div>

                            <div class="col-xs-5 form-group">                                     
                                <input type="text" class="form-control"  id="username" readonly value="'.$username.'"  />
                            </div>
                         </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_no" readonly value="'.$tninp021->getReq_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Solicitud</label>                                        
                                <input type="text" class="form-control" name="mdf_dt" readonly value="'.$tninp021->getMdf_dt().'"  />
                            </div>
                        </div>                                             
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_city_nm" readonly value="'.$tninp021->getReq_city_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Tipo de Documento</label>                                        
                                <input type="text" class="form-control" name="dcm_type_nm" readonly value="'.$tninp021->getDcm_type_nm().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Certificado Anterior</label>                                      
                                <input type="text" class="form-control" name="prev_ctft_no" readonly value="'.$tninp021->getPrev_ctft_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Emisión de Certificado Anterior</label>                                        
                                <input type="text" class="form-control" name="prev_ctft_iss_de" readonly value="'.$tninp021->getPrev_ctft_iss_de().'"  />
                            </div>
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
                                <input type="text" class="form-control" name="dclr_cl_cd" readonly value="'.$tninp021->getDclr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_idt_no" readonly value="'.$tninp021->getDclr_idt_no().'"  />
                            </div>
                        </div>
						<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Razón Social del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_nole" readonly value="'.$tninp021->getDclr_nole().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Representante Legal del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_rpgp_nm" readonly value="'.$tninp021->getDclr_rpgp_nm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia de la Empresa Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_prvhc_nm" readonly value="'.$tninp021->getDclr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_cuty_nm" readonly value="'.$tninp021->getDclr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_prqi_nm" readonly value="'.$tninp021->getDclr_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_ad" readonly value="'.$tninp021->getDclr_ad().'"  />
                        </div>                        
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                    <label>Nombre de Solicitante</label>                                        
                                    <input type="text" class="form-control" name="dclr_nm" readonly value="'.$tninp021->getDclr_nm().'"  />
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>
							
                            <div class="col-xs-5 form-group">
                                <label>Cargo del Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_odty_nm" readonly value="'.$tninp021->getDclr_odty_nm().'" />                                    
                            </div>                            
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_tel_no" readonly value="'.$tninp021->getDclr_tel_no().'"  />
                            </div>                            

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>
							
                            <div class="col-xs-5 form-group">
                                <label>Fax del Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_fax_no" readonly value="'.$tninp021->getDclr_fax_no().'" />                                    
                            </div>                            
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_em" readonly value="'.$tninp021->getDclr_em().'"  />
                        </div>						
                    </div>
		</div>';				            
				
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Importador</h3>
                    </div>
                    <div class="panel-body">						
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Clasificación del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_cl_cd" readonly value="'.$tninp021->getImpr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación del Importador</label>                                        
                                <input type="text" class="form-control" name="impr_idt_no" readonly value="'.$tninp021->getImpr_idt_no().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Nombre del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_nm" readonly value="'.$tninp021->getImpr_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Representante Importador</label>                                        
                                <input type="text" class="form-control" name="impr_rpst_nm" readonly value="'.$tninp021->getImpr_rpst_nm().'"  />
                            </div>
                        </div> 
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="impr_prvhc_nm" readonly value="'.$tninp021->getImpr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="impr_cuty_nm" readonly value="'.$tninp021->getImpr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                                <div class="col-xs-5 form-group">
                                        <label>Parroquia</label>                                        
                                        <input type="text" class="form-control" name="impr_prqi_nm" readonly value="'.$tninp021->getImpr_prqi_nm().'"  />
                                </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                                <div class="col-xs-11 form-group">
                                        <label>Dirección</label>                                        
                                        <input type="text" class="form-control" name="impr_ad" readonly value="'.$tninp021->getImpr_ad().'"  />
                                </div>
                        </div>						
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp021->getImpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Importador</label>                                        
                                <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp021->getImpr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_em" readonly value="'.$tninp021->getImpr_em().'"  />
                        </div>				
                    </div>
		</div>';					
				
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Producto</h3>
                    </div>
                    <div class="panel-body">                       
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Subpartida Arancelaria</label>                                      
                                <input type="text" class="form-control" name="hc" readonly value="'.$tninp021->getHc().'" />                                    
                            </div>					
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Nombre de Producto</label>                                      
                                <input type="text" class="form-control" name="prdt_nm" readonly value="'.$tninp021->getPrdt_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Arribo de Producto</label>                                        
                                <input type="text" class="form-control" name="prdt_arv_de" readonly value="'.$tninp021->getPrdt_arv_de().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Tipo de Producto</label>                                      
                            <input type="text" class="form-control" name="prdt_type_nm" readonly value="'.$tninp021->getPrdt_type_nm().'" />                                    
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Forma de Presentación</label>                                      
                                <input type="text" class="form-control" name="smt_frm_inf" readonly value="'.$tninp021->getSmt_frm_inf().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Nombre de Laboratorio Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_lbty_nm" readonly value="'.$tninp021->getExpr_lbty_nm().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>País de Procedencia</label>                                      
                                <input type="text" class="form-control" name="pdc_ntn_nm" readonly value="'.$tninp021->getPdc_ntn_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Factura Comercial</label>                                        
                                <input type="text" class="form-control" name="inv_no" readonly value="'.$tninp021->getInv_no().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Cantidad de Producto</label>                                      
                                <input type="text" class="form-control" name="prdt_qt" readonly value="'.$tninp021->getPrdt_qt().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Peso Neto de Producto</label>                                        
                                <input type="text" class="form-control" name="prdt_nwt" readonly value="'.$tninp021->getPrdt_nwt().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Total Precio FOB</label>                                      
                                <input type="text" class="form-control" name="fobv_val_tot" readonly value="'.$tninp021->getFobv_val_tot().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Vía  de Embarque</label>                                        
                                <input type="text" class="form-control" name="spm_mtdrt_desc" readonly value="'.$tninp021->getSpm_mtdrt_desc().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Número de Guía</label>                                        
                            <input type="text" class="form-control" name="gud_no" readonly value="'.$tninp021->getGud_no().'"  />
                        </div>
                    </div>
		</div>';
				
	$retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Análisis</h3>
                    </div>
                    <div class="panel-body">
                       '.$analisis.'
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
                            <textarea class="form-control" rows="5" readonly name="dclr_rmk">'.$tninp021->getDclr_rmk().'</textarea>
                        </div>
                        <div class="col-xs-11 form-group">
                            <label>Observaciones del Aprobador</label>
                            <textarea class="form-control" rows="5" name="aprb_rmk" id="aprb_rmk"></textarea>
                        </div>
                    </div>
		</div>';
            
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