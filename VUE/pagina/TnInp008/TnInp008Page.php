<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp008Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp008/TnInp008PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp008/TnInp008CtnrPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_008($req_no,$dcm_cd){      
    $tninp008= consulta_datos_formulario_008($req_no); 
    $solicitud=$tninp008->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{                
    $contenedor= cargar_lista_contenedor_008($req_no);
    $producto= cargar_lista_producto_008($req_no,$dcm_cd);    
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
                                alert("tramite aprobado");
                            }else{
                                alert("envio a subsanar");
                            }
                        }else{
                            alert("no ha escogido ninguna opcion");
                        }   
                    });                    
                </script>
            	<div class="display-2">
                    <h2 align="center">'.substr($tninp008->getDcm_no(), 0, -4).'  '.$tninp008->getDcm_nm().'</h2>
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
                         <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_no" readonly value="'.$tninp008->getReq_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Solicitud</label>                                        
                                <input type="text" class="form-control" name="mdf_dt" readonly value="'.$tninp008->getMdf_dt().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_city_nm" readonly value="'.$tninp008->getReq_city_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Tipo de Documento</label>                                        
                                <input type="text" class="form-control" name="dcm_type_nm" readonly value="'.$tninp008->getDcm_type_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Certificado Anterior</label>                                      
                                <input type="text" class="form-control" name="prev_ctft_no" readonly value="'.$tninp008->getPrev_ctft_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Emisión de Certificado Anterior</label>                                        
                                <input type="text" class="form-control" name="prev_ctft_iss_de" readonly value="'.$tninp008->getPrev_ctft_iss_de().'"  />
                            </div>
                        </div>                                                           
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Número de Certificado de Calidad</label>                                      
                            <input type="text" class="form-control" name="qlt_ctft_no" readonly value="'.$tninp008->getQlt_ctft_no().'" />                                    
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
                                <input type="text" class="form-control" name="dclr_cl_cd" readonly value="'.$tninp008->getDclr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_idt_no" readonly value="'.$tninp008->getDclr_idt_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Razón Social del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_nole" readonly value="'.$tninp008->getDclr_nole().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia de la Empresa Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_prvhc_nm" readonly value="'.$tninp008->getDclr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_cuty_nm" readonly value="'.$tninp008->getDclr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_prqi_nm" readonly value="'.$tninp008->getDclr_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_ad" readonly value="'.$tninp008->getDclr_ad().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_nm" readonly value="'.$tninp008->getDclr_nm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_tel_no" readonly value="'.$tninp008->getDclr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_fax_no" readonly value="'.$tninp008->getDclr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_em" readonly value="'.$tninp008->getDclr_em().'"  />
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
                                <input type="text" class="form-control" name="expr_cl_cd" readonly value="'.$tninp008->getExpr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_idt_no" readonly value="'.$tninp008->getExpr_idt_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_nm" readonly value="'.$tninp008->getExpr_ad().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Número de Autorización de Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_atr_no" readonly value="'.$tninp008->getExpr_atr_no().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>País Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_ntn_nm" readonly value="'.$tninp008->getExpr_ntn_nm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="expr_prvhc_nm" readonly value="'.$tninp008->getExpr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="expr_cuty_nm" readonly value="'.$tninp008->getExpr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia</label>                                        
                            <input type="text" class="form-control" name="expr_prqi_nm" readonly value="'.$tninp008->getExpr_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección</label>                                        
                            <input type="text" class="form-control" name="expr_ad" readonly value="'.$tninp008->getExpr_ad().'"  />
                        </div>                        
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Exportador</label>                                      
                                <input type="text" class="form-control" name="expr_tel_no" readonly value="'.$tninp008->getExpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_fax_no" readonly value="'.$tninp008->getExpr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_em" readonly value="'.$tninp008->getExpr_em().'"  />
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
                            <input type="text" class="form-control" name="impr_nm" readonly value="'.$tninp008->getImpr_ad().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>País del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_ntn_nm" readonly value="'.$tninp008->getImpr_ntn_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Ciudad Importador</label>                                        
                                <input type="text" class="form-control" name="impr_city_nm" readonly value="'.$tninp008->getImpr_city_nm().'"  />
                            </div>
                        </div>                        
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_ad" readonly value="'.$tninp008->getImpr_ad().'"  />
                        </div>                        
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp008->getImpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Importador</label>                                        
                                <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp008->getImpr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_em" readonly value="'.$tninp008->getImpr_em().'"  />
                        </div>				
                    </div>
		</div>';
            
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Fabricante</h3>
                    </div>
                    <div class="panel-body">									
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Clasificación de Fabricante</label>                                      
                                <input type="text" class="form-control" name="mfr_cl_cd" readonly value="'.$tninp008->getMfr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación de Fabricante</label>                                        
                                <input type="text" class="form-control" name="mfr_idt_no" readonly value="'.$tninp008->getMfr_idt_no().'"  />
                            </div>
                        </div>                         
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Fabricante</label>                                        
                            <input type="text" class="form-control" name="mfr_nm" readonly value="'.$tninp008->getMfr_nm().'"  />
                        </div>			
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                                <label>Número de Autorización de Fabricante</label>                                      
                                <input type="text" class="form-control" name="mfr_atr_no" readonly value="'.$tninp008->getMfr_atr_no().'" />                                    
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Representante Legal de Fabricante</label>                                        
                            <input type="text" class="form-control" name="mfr_rpgp_nm" readonly value="'.$tninp008->getMfr_rpgp_nm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="mfr_prvhc_nm" readonly value="'.$tninp008->getMfr_prvhc_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="mfr_cuty_nm" readonly value="'.$tninp008->getMfr_cuty_nm().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                                <label>Parroquia</label>                                      
                                <input type="text" class="form-control" name="mfr_prqi_nm" readonly value="'.$tninp008->getMfr_prqi_nm().'" />                                    
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección</label>                                        
                            <input type="text" class="form-control" name="mfr_ad" readonly value="'.$tninp008->getMfr_ad().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono de Fabricante</label>                                      
                                <input type="text" class="form-control" name="mfr_tel_no" readonly value="'.$tninp008->getMfr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax de Fabricante</label>                                        
                                <input type="text" class="form-control" name="mfr_fax_no" readonly value="'.$tninp008->getMfr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Fabricante</label>                                        
                            <input type="text" class="form-control" name="mfr_em" readonly value="'.$tninp008->getMfr_em().'"  />
                        </div>				
                    </div>
		</div>';
            
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos Generales</h3>
                    </div>
                    <div class="panel-body">						
                        <div class="row" style="padding:5px 0 0 30px;">
                                <div class="col-xs-5 form-group">
                                        <label>Nombre de Medio de Transporte</label>                                        
                                        <input type="text" class="form-control" name="trsp_way_nm" readonly value="'.$tninp008->getTrsp_way_nm().'"  />
                                </div>

                                <div class="col-xs-1 form-group">
                                        <!-- espacio entre columnas-->
                                </div>

                                <div class="col-xs-5 form-group">
                                        <label>Nombre de Empresa de Transporte</label>                                        
                                        <input type="text" class="form-control" name="carr_nm" readonly value="'.$tninp008->getCarr_nm().'"  />
                                </div>                            
                        </div>
                        <div class="col-xs-5 form-group">
                                <label>Número de Factura Comercial</label>                                      
                                <input type="text" class="form-control" name="inv_no" readonly value="'.$tninp008->getInv_no().'" />                                    
                        </div>
                        <div class="col-xs-5 form-group">
                                <label>Número de Conocimiento de Embarque</label>                                      
                                <input type="text" class="form-control" name="blno" readonly value="'.$tninp008->getBlno().'" />                                    
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                                <div class="col-xs-5 form-group">
                                        <label>País de Tránsito</label>                                      
                                        <input type="text" class="form-control" name="trst_ntn_nm" readonly value="'.$tninp008->getTrst_ntn_nm().'" />                                    
                                </div>

                                <div class="col-xs-1 form-group">
                                        <!-- espacio entre columnas-->
                                </div>

                                <div class="col-xs-5 form-group">
                                        <label>Ciudad de Tránsito</label>                                      
                                        <input type="text" class="form-control" name="trst_city_nm" readonly value="'.$tninp008->getTrst_city_nm().'" />                                    
                                </div>						
                        </div>
                        <div class="col-xs-11 form-group">
                                <label>Punto de Cruce de Frontera de la Federación Rusa</label>                                      
                                <input type="text" class="form-control" name="crfr_pnt_nm" readonly value="'.$tninp008->getCrfr_pnt_nm().'" />                                    
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
            
        $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Producto</h3>
                    </div>
                    <div class="panel-body">
                        '.$producto.'
                        <div class="row" style="padding:5px 0 0 30px;">
                                <div class="col-xs-5 form-group">
                                        <label>Cantidad Total de Paquetes de Producto</label>                                      
                                        <input type="text" class="form-control" name="pkgs_tot_qt" readonly value="'.$tninp008->getPkgs_tot_qt().'" />                                    
                                </div>

                                <div class="col-xs-1 form-group">
                                        <!-- espacio entre columnas-->
                                </div>

                                <div class="col-xs-5 form-group">
                                        <label>PEso NEto Total de Producto</label>                                      
                                        <input type="text" class="form-control" name="prdt_tot_nwt" readonly value="'.$tninp008->getPrdt_tot_nwt().'" />                                    
                                </div>						
                        </div>
                    </div>
		</div>';
            
        $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Origen de Producto</h3>
                    </div>
                    <div class="panel-body"> 
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Buque Factoria</label>                                      
                            <input type="text" class="form-control" name="vsl_plat_nm" readonly value="'.$tninp008->getVsl_plat_nm().'" />                                    
                        </div>';
	if($dcm_cd=='130-008'){
			$retval.='
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Cuarto Frío</label>                                      
                            <input type="text" class="form-control" name="cdrm_nm" readonly value="'.$tninp008->getCdrm_nm().'" />                                    
                        </div>';
				}
		$retval.='
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Unidad Territorial-Administrativa</label>                                      
                            <input type="text" class="form-control" name="cntr_ntn_nm" readonly value="'.$tninp008->getCntr_ntn_nm().'" />                                    
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
                            <textarea class="form-control" rows="5" readonly name="dclr_rmk">'.$tninp008->getDclr_rmk().'</textarea>
                        </div>
                        <div class="col-xs-11 form-group">
                            <label>Observaciones del Aprobador</label>
                            <textarea class="form-control" rows="5" name="aprb_rmk"></textarea>
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