<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp033Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp033/TnInp033PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_033($req_no,$process,$activity,$cedula,$rol,$username){    
    $tninp033= consulta_datos_formulario_033($req_no); 
    $solicitud=$tninp033->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{
    $producto= cargar_lista_productos_033($req_no);
    $adjunto= cargar_lista_adjuntos($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval='
                <div class="display-2">
                    <h2 align="center">'.substr($tninp033->getDcm_no(), 0, -4).'  '.$tninp033->getDcm_nm().'</h2>
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
                                <input type="text" class="form-control" name="req_no" id="req_no" readonly value="'.$tninp033->getReq_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Solicitud</label>                                        
                                <input type="text" class="form-control" name="mdf_dt" readonly value="'.$tninp033->getMdf_dt().'"  />
                            </div>
                        </div>                                             
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_city_nm" readonly value="'.$tninp033->getReq_city_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Solicitud de Certificado Sanitario de Exportación</label>                                      
                                <input type="text" class="form-control" name="exp_sty_ctft_req_no" readonly value="'.$tninp033->getExp_sty_ctft_req_no().'" />                                    
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Número de Certificado de Calidad</label>                                        
                            <input type="text" class="form-control" name="qlt_ctft_no" readonly value="'.$tninp033->getQlt_ctft_no().'"  />
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
                                <input type="text" class="form-control" name="dclr_cl_cd" readonly value="'.$tninp033->getDclr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_idt_no" readonly value="'.$tninp033->getDclr_idt_no().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Razón Social del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_nole" readonly value="'.$tninp033->getDclr_nole().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia de la Empresa Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_prvhc_nm" readonly value="'.$tninp033->getDclr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_cuty_nm" readonly value="'.$tninp033->getDclr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_prqi_nm" readonly value="'.$tninp033->getDclr_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_ad" readonly value="'.$tninp033->getDclr_ad().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                                <label>Nombre de Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_nm" readonly value="'.$tninp033->getDclr_nm().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Representante Legal del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_rpgp_nm" readonly value="'.$tninp033->getDclr_rpgp_nm().'"  />
                        </div>                        						
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_tel_no" readonly value="'.$tninp033->getDclr_tel_no().'"  />
                            </div>                            

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>
							
                            <div class="col-xs-5 form-group">
                                <label>Fax del Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_fax_no" readonly value="'.$tninp033->getDclr_fax_no().'" />                                    
                            </div>                            
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_em" readonly value="'.$tninp033->getDclr_em().'"  />
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
                                <input type="text" class="form-control" name="expr_cl_cd" readonly value="'.$tninp033->getExpr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_idt_no" readonly value="'.$tninp033->getExpr_idt_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre del Exportador</label>                                      
                            <input type="text" class="form-control" name="expr_nm" readonly value="'.$tninp033->getExpr_nm().'" />                                    
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Autorización de Exportador</label>                                      
                                <input type="text" class="form-control" name="expr_atr_no" readonly value="'.$tninp033->getExpr_atr_no().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>País del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_ntn_nm" readonly value="'.$tninp033->getExpr_ntn_nm().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="expr_prvhc_nm" readonly value="'.$tninp033->getExpr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="expr_cuty_nm" readonly value="'.$tninp033->getExpr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                            <div class="col-xs-5 form-group">
                                <label>Parroquia</label>                                        
                                <input type="text" class="form-control" name="expr_prqi_nm" readonly value="'.$tninp033->getExpr_prqi_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                            <div class="col-xs-11 form-group">
                                <label>Dirección</label>                                        
                                <input type="text" class="form-control" name="expr_ad" readonly value="'.$tninp033->getExpr_ad().'"  />
                            </div>
                        </div>						
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Exportador</label>                                      
                                <input type="text" class="form-control" name="expr_tel_no" readonly value="'.$tninp033->getExpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_fax_no" readonly value="'.$tninp033->getExpr_fax_no().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                                <label>Correo Electrónico del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_em" readonly value="'.$tninp033->getExpr_em().'"  />
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
                            <input type="text" class="form-control" name="impr_nm" readonly value="'.$tninp033->getImpr_nm().'" />                                    
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>País del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_ntn_nm" readonly value="'.$tninp033->getImpr_ntn_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Ciudad Importador</label>                                        
                                <input type="text" class="form-control" name="impr_city_nm" readonly value="'.$tninp033->getImpr_city_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                            <div class="col-xs-11 form-group">
                                <label>Dirección del Importador</label>                                        
                                <input type="text" class="form-control" name="impr_ad" readonly value="'.$tninp033->getImpr_ad().'"  />
                            </div>
                        </div>																								
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp033->getImpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Importador</label>                                        
                                <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp033->getImpr_fax_no().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_em" readonly value="'.$tninp033->getImpr_em().'"  />
                        </div>				
                    </div>
		</div>';
				
	$retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Procesador</h3>
                    </div>
                    <div class="panel-body">						
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Clasificación del Procesador</label>                                      
                                <input type="text" class="form-control" name="pcs_cl_cd" readonly value="'.$tninp033->getPcs_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación del Procesador</label>                                        
                                <input type="text" class="form-control" name="pcs_idt_no" readonly value="'.$tninp033->getPcs_idt_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Procesador</label>                                      
                            <input type="text" class="form-control" name="pcs_nm" readonly value="'.$tninp033->getPcs_nm().'" />                                    
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Autorización de Procesador</label>                                      
                                <input type="text" class="form-control" name="pcs_atr_no" readonly value="'.$tninp033->getPcs_atr_no().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>País del Procesador</label>                                        
                                <input type="text" class="form-control" name="pcs_ntn_nm" readonly value="'.$tninp033->getPcs_ntn_nm().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Representante Legal de Procesador</label>                                      
                            <input type="text" class="form-control" name="pcs_rpgp_nm" readonly value="'.$tninp033->getPcs_rpgp_nm().'" />                                    
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="pcs_prvhc_nm" readonly value="'.$tninp033->getPcs_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="pcs_cuty_nm" readonly value="'.$tninp033->getPcs_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                                <div class="col-xs-5 form-group">
                                        <label>Parroquia</label>                                        
                                        <input type="text" class="form-control" name="pcs_prqi_nm" readonly value="'.$tninp033->getPcs_prqi_nm().'"  />
                                </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                                <div class="col-xs-11 form-group">
                                        <label>Dirección</label>                                        
                                        <input type="text" class="form-control" name="pcs_ad" readonly value="'.$tninp033->getPcs_ad().'"  />
                                </div>
                        </div>						
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Exportador</label>                                      
                                <input type="text" class="form-control" name="pcs_tel_no" readonly value="'.$tninp033->getPcs_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Exportador</label>                                        
                                <input type="text" class="form-control" name="pcs_fax_no" readonly value="'.$tninp033->getPcs_fax_no().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                                <label>Correo Electrónico del Exportador</label>                                        
                                <input type="text" class="form-control" name="pcs_em" readonly value="'.$tninp033->getPcs_em().'"  />
                        </div>			
                    </div>
		</div>';	
			
	$retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Destino</h3>
                    </div>
                    <div class="panel-body">
						<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de País de Destino</label>                                      
                            <input type="text" class="form-control" name="dst_ntn_nm" readonly value="'.$tninp033->getDst_ntn_nm().'" />                                    
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Destino</label>                                      
                                <input type="text" class="form-control" name="dst_city_nm" readonly value="'.$tninp033->getDst_city_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Puerto de Destino</label>                                        
                                <input type="text" class="form-control" name="dst_port_nm" readonly value="'.$tninp033->getDst_port_nm().'"  />
                            </div>
                        </div>						
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
                                <input type="text" class="form-control" name="prdt_tot_qt" readonly value="'.$tninp033->getPrdt_tot_qt().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Peso Neto Total de Producto</label>                                        
                                <input type="text" class="form-control" name="prdt_tot_nwt" readonly value="'.$tninp033->getPrdt_tot_nwt().'"  />
                            </div>
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
                                <label>Medio de Transporte</label>                                      
                                <input type="text" class="form-control" name="trsp_way_nm" readonly value="'.$tninp033->getTrsp_way_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Factura Comercial</label>                                        
                                <input type="text" class="form-control" name="inv_no" readonly value="'.$tninp033->getInv_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Empresa de Transporte</label>                                      
                            <input type="text" class="form-control" name="carr_nm" readonly value="'.$tninp033->getCarr_nm().'" />                                    
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Buque</label>                                      
                            <input type="text" class="form-control" name="vsl_nm" readonly value="'.$tninp033->getVsl_nm().'" />                                    
                        </div>	
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre/Número de Vuelo</label>                                      
                            <input type="text" class="form-control" name="fghnb" readonly value="'.$tninp033->getFghnb().'" />                                    
                        </div>	
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Otro Medio de Transporte</label>                                      
                            <input type="text" class="form-control" name="oter_trsp_way_nm" readonly value="'.$tninp033->getOter_trsp_way_nm().'" />                                    
                        </div>	
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Número de Contenedor</label>                                                                  
                            <textarea class="form-control" rows="5" readonly name="ctnr_no">'.$tninp033->getCtnr_no().'</textarea>
                        </div>	
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Número de Sello</label>                                      
                            <textarea class="form-control" rows="5" readonly name="seal_no">'.$tninp033->getSeal_no().'</textarea>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>País Puerto de Embarque</label>                                      
                                <input type="text" class="form-control" name="spm_port_ntn_nm" readonly value="'.$tninp033->getSpm_port_ntn_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Ciudad Puerto de Embarque</label>                                        
                                <input type="text" class="form-control" name="spm_port_city_nm" readonly value="'.$tninp033->getSpm_port_city_nm().'"  />
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
                            <textarea class="form-control" rows="5" name="dclr_rmk">'.$tninp033->getDclr_rmk().'</textarea>
                        </div>
                        <div class="col-xs-11 form-group">
                            <label>Observaciones del Aprobador</label>
                            <textarea class="form-control" rows="5" name="aprb_rmk"  maxlength="500" id="aprb_rmk"></textarea>
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