<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp032Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_032($req_no,$process,$activity,$cedula,$rol,$username){    
    $tninp032= consulta_datos_formulario_032($req_no);  
    $solicitud= $tninp032->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{    
    $adjunto= cargar_lista_adjuntos($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval='
                <script src="themes/js/eventos.js"></script>
        	<div class="display-2">
                    <h2 align="center">'.substr($tninp032->getDcm_no(), 0, -4).'  '.$tninp032->getDcm_nm().'</h2>
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
                                <input type="text" class="form-control" name="req_no" id="req_no" readonly value="'.$tninp032->getReq_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Solicitud</label>                                        
                                <input type="text" class="form-control" name="mdf_dt" readonly value="'.$tninp032->getMdf_dt().'"  />
                            </div>
                        </div>                                             
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_city_nm" readonly value="'.$tninp032->getReq_city_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Solicitud de Certificado Sanitario de Exportación</label>                                      
                                <input type="text" class="form-control" name="exp_sty_ctft_req_no" readonly value="'.$tninp032->getExp_sty_ctft_req_no().'" />                                    
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
                                <input type="text" class="form-control" name="dclr_cl_cd" readonly value="'.$tninp032->getDclr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_idt_no" readonly value="'.$tninp032->getDclr_idt_no().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Razón Social del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_nole" readonly value="'.$tninp032->getDclr_nole().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia de la Empresa Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_prvhc_nm" readonly value="'.$tninp032->getDclr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_cuty_nm" readonly value="'.$tninp032->getDclr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_prqi_nm" readonly value="'.$tninp032->getDclr_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_ad" readonly value="'.$tninp032->getDclr_ad().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_nm" readonly value="'.$tninp032->getDclr_nm().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Representante Legal del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_rpgp_nm" readonly value="'.$tninp032->getDclr_rpgp_nm().'"  />
                        </div>                        						
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_tel_no" readonly value="'.$tninp032->getDclr_tel_no().'"  />
                            </div>                            

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>
							
                            <div class="col-xs-5 form-group">
                                <label>Fax del Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_fax_no" readonly value="'.$tninp032->getDclr_fax_no().'" />                                    
                            </div>                            
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_em" readonly value="'.$tninp032->getDclr_em().'"  />
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
                                <input type="text" class="form-control" name="expr_cl_cd" readonly value="'.$tninp032->getExpr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_idt_no" readonly value="'.$tninp032->getExpr_idt_no().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-11 form-group">
                                <label>Nombre del Exportador</label>                                      
                                <input type="text" class="form-control" name="expr_nm" readonly value="'.$tninp032->getExpr_nm().'" />                                    
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="expr_prvhc_nm" readonly value="'.$tninp032->getExpr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="expr_cuty_nm" readonly value="'.$tninp032->getExpr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                                <div class="col-xs-5 form-group">
                                    <label>Parroquia</label>                                        
                                    <input type="text" class="form-control" name="expr_prqi_nm" readonly value="'.$tninp032->getExpr_prqi_nm().'"  />
                                </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                                <div class="col-xs-11 form-group">
                                    <label>Dirección</label>                                        
                                    <input type="text" class="form-control" name="expr_ad" readonly value="'.$tninp032->getExpr_ad().'"  />
                                </div>
                        </div>						
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Exportador</label>                                      
                                <input type="text" class="form-control" name="expr_tel_no" readonly value="'.$tninp032->getExpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_fax_no" readonly value="'.$tninp032->getExpr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group"  style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_em" readonly value="'.$tninp032->getExpr_em().'"  />
                        </div>															
                    </div>
		</div>';		
			
	$retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Importador</h3>
                    </div>
                    <div class="panel-body">
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre del Importador</label>                                      
                            <input type="text" class="form-control" name="impr_nm" readonly value="'.$tninp032->getImpr_nm().'" />                                    
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>País del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_ntn_nm" readonly value="'.$tninp032->getImpr_ntn_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Ciudad Importador</label>                                        
                                <input type="text" class="form-control" name="impr_city_nm" readonly value="'.$tninp032->getImpr_city_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                                <div class="col-xs-11 form-group">
                                    <label>Dirección del Importador</label>                                        
                                    <input type="text" class="form-control" name="impr_ad" readonly value="'.$tninp032->getImpr_ad().'"  />
                                </div>
                        </div>																								
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp032->getImpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Importador</label>                                        
                                <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp032->getImpr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_em" readonly value="'.$tninp032->getImpr_em().'"  />
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
                                <label>Clasificación del Fabricante</label>                                      
                                <input type="text" class="form-control" name="pcs_cl_cd" readonly value="'.$tninp032->getPcs_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación del Fabricante</label>                                        
                                <input type="text" class="form-control" name="pcs_idt_no" readonly value="'.$tninp032->getPcs_idt_no().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-11 form-group">
                                <label>Nombre de Fabricante</label>                                      
                                <input type="text" class="form-control" name="pcs_nm" readonly value="'.$tninp032->getPcs_nm().'" />                                    
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-11 form-group">
                                <label>Número de Autorización de Fabricante</label>                                      
                                <input type="text" class="form-control" name="pcs_atr_no" readonly value="'.$tninp032->getPcs_atr_no().'" />                                    
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-11 form-group">
                                <label>Representante Legal de Fabricante</label>                                      
                                <input type="text" class="form-control" name="pcs_rpgp_nm" readonly value="'.$tninp032->getPcs_rpgp_nm().'" />                                    
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="pcs_prvhc_nm" readonly value="'.$tninp032->getPcs_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="pcs_cuty_nm" readonly value="'.$tninp032->getPcs_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                                <div class="col-xs-5 form-group">
                                    <label>Parroquia</label>                                        
                                    <input type="text" class="form-control" name="pcs_prqi_nm" readonly value="'.$tninp032->getPcs_prqi_nm().'"  />
                                </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                                <div class="col-xs-11 form-group">
                                    <label>Dirección</label>                                        
                                    <input type="text" class="form-control" name="pcs_ad" readonly value="'.$tninp032->getPcs_ad().'"  />
                                </div>
                        </div>						
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Exportador</label>                                      
                                <input type="text" class="form-control" name="pcs_tel_no" readonly value="'.$tninp032->getPcs_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Exportador</label>                                        
                                <input type="text" class="form-control" name="pcs_fax_no" readonly value="'.$tninp032->getPcs_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group"  style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Exportador</label>                                        
                            <input type="text" class="form-control" name="pcs_em" readonly value="'.$tninp032->getPcs_em().'"  />
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
                                <label>Número de Certificado de Calidad</label>                                      
                                <input type="text" class="form-control" name="qlt_ctft_no" readonly value="'.$tninp032->getQlt_ctft_no().'" />                                    
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Certificado Sanitario</label>                                      
                                <input type="text" class="form-control" name="fht_crtfc_no" readonly value="'.$tninp032->getFht_crtfc_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Factura Comercial</label>                                      
                                <input type="text" class="form-control" name="inv_no" readonly value="'.$tninp032->getInv_no().'" />                                    
                            </div>	
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Detalle del Certificado</label>                                      
                            <input type="text" class="form-control" name="ctft_det" readonly value="'.$tninp032->getCtft_det().'" />                                    
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Resultado  de Análisis de Antioxidante</label>                                      
                                <input type="text" class="form-control" name="atxd_stdy_rst_nm" readonly value="'.$tninp032->getAtxd_stdy_rst_nm().'" />                                    
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Tipo de Producto</label>                                      
                                <input type="text" class="form-control" name="prdt_type_nm" readonly value="'.$tninp032->getPrdt_type_nm().'" />                                    
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Marca de Producto</label>                                      
                            <input type="text" class="form-control" name="prdt_bdmn" readonly value="'.$tninp032->getPrdt_bdmn().'" />                                    
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Acido Tiobarbiturico (TBA) expresado en mg/kg. max 5%</label>                                      
                                <input type="text" class="form-control" name="prdt_acido" readonly value="'.$tninp032->getPrdt_acido().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Acidez expresado como ácido Oleico mg/kg. max 5%</label>                                        
                                <input type="text" class="form-control" name="prdt_perox_index" readonly value="'.$tninp032->getPrdt_acidez().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Indice de Peróxido meq de Oxígeno /kg. max 10%</label>                                      
                                <input type="text" class="form-control" name="prdt_acidez" readonly value="'.$tninp032->getPrdt_perox_index().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Humedad max 1%</label>                                        
                                <input type="text" class="form-control" name="prdt_humedad" readonly value="'.$tninp032->getPrdt_humedad().'"  />
                            </div>
                        </div>						
                    </div>
		</div>';
        
        $retval.='		
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Tipo de Analisis</h3>
                    </div>
                    <div class="panel-body">
                         <div class="[ form-group ]">';
        if($tninp032->getAnls_type_cd_01()=="true"){       
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" checked/>
                          <div class="[ btn-group ]">
                            <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                <span class="[ glyphicon glyphicon-ok ]"></span>
                                <span> </span>
                            </label>
                            <label for="fancy-checkbox-info" class="[ btn btn-default active]">
                                Aspergillus
                            </label>
                         </div>';            
        }else{
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" autocomplete="off" />
                        <div class="[ btn-group ]">
                            <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                <span class="[ glyphicon glyphicon ]"></span>
                                <span> </span>
                            </label>
                            <label for="fancy-checkbox-info" class="[ btn btn-default active ]">
                                Aspergillus
                            </label>
                         </div>';            
            }
            
        if($tninp032->getAnls_type_cd_02()=="true"){       
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" checked/>
                          <div class="[ btn-group ]">
                            <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                <span class="[ glyphicon glyphicon-ok ]"></span>
                                <span> </span>
                            </label>
                            <label for="fancy-checkbox-info" class="[ btn btn-default active]">
                                Salmonella
                            </label>
                        </div>';            
        }else{
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" autocomplete="off" />
                            <div class="[ btn-group ]">
                                <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                    <span class="[ glyphicon glyphicon ]"></span>
                                    <span> </span>
                                </label>
                                <label for="fancy-checkbox-info" class="[ btn btn-default active ]">
                                    Salmonella
                                </label>
                            </div>
                        ';            
            }
        if($tninp032->getAnls_type_cd_03()=="true"){       
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" checked/>
                          <div class="[ btn-group ]">
                            <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                <span class="[ glyphicon glyphicon-ok ]"></span>
                                <span> </span>
                            </label>
                            <label for="fancy-checkbox-info" class="[ btn btn-default active]">
                                Shiguella
                            </label>
                        </div>';            
        }else{
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" autocomplete="off" />
                            <div class="[ btn-group ]">
                                <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                    <span class="[ glyphicon glyphicon ]"></span>
                                    <span> </span>
                                </label>
                                <label for="fancy-checkbox-info" class="[ btn btn-default active ]">
                                    Shiguella
                                </label>
                            </div>
                        ';            
            }
        if($tninp032->getAnls_type_cd_04()=="true"){       
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" checked/>
                          <div class="[ btn-group ]">
                            <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                <span class="[ glyphicon glyphicon-ok ]"></span>
                                <span> </span>
                            </label>
                            <label for="fancy-checkbox-info" class="[ btn btn-default active]">
                                Coliformes
                            </label>
                        </div>';            
        }else{
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" autocomplete="off" />
                            <div class="[ btn-group ]">
                                <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                    <span class="[ glyphicon glyphicon ]"></span>
                                    <span> </span>
                                </label>
                                <label for="fancy-checkbox-info" class="[ btn btn-default active ]">
                                    Coliformes
                                </label>
                            </div>
                        ';            
            }
        if($tninp032->getAnls_type_cd_05()=="true"){       
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" checked/>
                          <div class="[ btn-group ]">
                            <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                <span class="[ glyphicon glyphicon-ok ]"></span>
                                <span> </span>
                            </label>
                            <label for="fancy-checkbox-info" class="[ btn btn-default active]">
                                Parasitos
                            </label>
                        </div>';            
        }else{
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" autocomplete="off" />
                            <div class="[ btn-group ]">
                                <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                    <span class="[ glyphicon glyphicon ]"></span>
                                    <span> </span>
                                </label>
                                <label for="fancy-checkbox-info" class="[ btn btn-default active ]">
                                    Parasitos
                                </label>
                            </div>
                        ';            
            }
        if($tninp032->getAnls_type_cd_06()=="true"){       
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" checked/>
                          <div class="[ btn-group ]">
                            <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                <span class="[ glyphicon glyphicon-ok ]"></span>
                                <span> </span>
                            </label>
                            <label for="fancy-checkbox-info" class="[ btn btn-default active]">
                                Clostridios
                            </label>
                        </div>';            
        }else{
                $retval.='<input type="checkbox" onclick= "return false" name="fancy-checkbox-info" id="fancy-checkbox-info" autocomplete="off" />
                            <div class="[ btn-group ]">
                                <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                    <span class="[ glyphicon glyphicon ]"></span>
                                    <span> </span>
                                </label>
                                <label for="fancy-checkbox-info" class="[ btn btn-default active ]">
                                    Clostridios
                                </label>
                            </div>
                        ';            
            }
             
        $retval.='      </div>
                    </div>
                </div>';                    
        
        $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Tipo de Requisito</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped"> 
                            <tr>
                                <th>Casilla</th>
                                <th>Requisito</th>                               
                            </tr>
                            ';
        
                if($tninp032->getNcdt_type_cd_01()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_01().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_01().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_02()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_02().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_02().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_03()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_03().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_03().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_04()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_04().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_04().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_05()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_05().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_05().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_06()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_06().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_06().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_07()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_07().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_07().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_08()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_08().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_08().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_09()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_09().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_09().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_10()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_10().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_10().'</td>
                            </tr>';            
                            }
                if($tninp032->getNcdt_type_cd_11()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_11().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_11().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_12()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_12().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_12().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_13()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_13().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_13().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_14()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_14().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_14().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_15()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_15().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_15().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_16()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_16().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_16().'</td>
                            </tr>';            
                            }
                            
                if($tninp032->getNcdt_type_cd_17()=="true"){
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_17().'</td>
                            </tr>';
                            }else{
                    $retval.='
                            <tr>
                                <td>
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                        <span class="[ glyphicon glyphicon ]"></span>
                                        <span> </span>
                                    </label>
                                </td>
                                <td>'.$tninp032->getNcdt_type_nm_17().'</td>
                            </tr>';            
                            }
                            
               $retval.='                                               
                        </table>
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
                            <textarea class="form-control" rows="5" readonly name="dclr_rmk">'.$tninp032->getDclr_rmk().'</textarea>
                        </div>
                        <div class="col-xs-11 form-group">
                            <label>Observaciones del Aprobador</label>
                            <textarea class="form-control" rows="5" name="aprb_rmk" maxlength="500" id="aprb_rmk"></textarea>
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
                                <input type="radio" name="radio" id="aprobar" value="1"/>
                                <label for="aprobar">Aprobar</label>
                            </div>
                           <div class="funkyradio-warning">
                                <input type="radio" name="radio" id="subsanar" value="2"/>
                                <label for="subsanar">Subsanar</label>
                            </div>
                            <div class="funkyradio-danger">
                                <input type="radio" name="radio" id="rechazar" value="3"/>
                                <label for="rechazar">Rechazar</label>
                            </div>
                        <button type="button" class="btn btn-default" id="btn_enviar">Enviar</button>
                        </div>
                    </div>
                 </div>';
    }
    return $retval;
    
}