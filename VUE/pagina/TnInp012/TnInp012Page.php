<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp012Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp012/TnInp012CtnrPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp012/TnInp012PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_012($req_no){      
    $tninp012= consulta_datos_formulario_012($req_no);  
    $solicitud=$tninp012->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{                
    $contenedor= cargar_lista_contenedor_012($req_no);
    $producto= cargar_lista_producto_012($req_no);    
    $adjunto= cargar_lista_adjuntos($req_no); 
    //$notificacion= cargar_lista_notificaciones($req_no);
    $retval='	 
                <div class="display-2">
                    <h2 align="center">'.substr($tninp012->getDcm_no(), 0, -4).'  '.$tninp012->getDcm_nm().'</h2>
                </div>           
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Solicitud</h3>
                    </div>
                    <div class="panel-body">
                         <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_no" readonly value="'.$tninp012->getReq_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Solicitud</label>                                        
                                <input type="text" class="form-control" name="mdf_dt" readonly value="'.$tninp012->getMdf_dt().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_city_nm" readonly value="'.$tninp012->getReq_city_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Tipo de Documento</label>                                        
                                <input type="text" class="form-control" name="dcm_type_nm" readonly value="'.$tninp012->getDcm_type_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Certificado Anterior</label>                                      
                                <input type="text" class="form-control" name="prev_ctft_no" readonly value="'.$tninp012->getPrev_ctft_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Emisión de Certificado Anterior</label>                                        
                                <input type="text" class="form-control" name="prev_ctft_iss_de" readonly value="'.$tninp012->getPrev_ctft_iss_de().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Número de Certificado de Calidad</label>                                        
                            <input type="text" class="form-control" name="qlt_ctft_no" readonly value="'.$tninp012->getQlt_ctft_no().'"  />
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
                                <input type="text" class="form-control" name="dclr_cl_cd" readonly value="'.$tninp012->getDclr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_idt_no" readonly value="'.$tninp012->getDclr_idt_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Razón Social del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_nole" readonly value="'.$tninp012->getDclr_nole().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Representante Legal del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_rpgp_nm" readonly value="'.$tninp012->getDclr_rpgp_nm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia de la Empresa Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_prvhc_nm" readonly value="'.$tninp012->getDclr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_cuty_nm" readonly value="'.$tninp012->getDclr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_prqi_nm" readonly value="'.$tninp012->getDclr_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_ad" readonly value="'.$tninp012->getDclr_ad().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_nm" readonly value="'.$tninp012->getDclr_nm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_tel_no" readonly value="'.$tninp012->getDclr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_fax_no" readonly value="'.$tninp012->getDclr_fax_no().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_em" readonly value="'.$tninp012->getDclr_em().'"  />
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
                                <input type="text" class="form-control" name="expr_cl_cd" readonly value="'.$tninp012->getExpr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_idt_no" readonly value="'.$tninp012->getExpr_idt_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_nm" readonly value="'.$tninp012->getExpr_ad().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Número de Autorización de Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_atr_no" readonly value="'.$tninp012->getExpr_atr_no().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>País Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_ntn_nm" readonly value="'.$tninp012->getExpr_ntn_nm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="expr_prvhc_nm" readonly value="'.$tninp012->getExpr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="expr_cuty_nm" readonly value="'.$tninp012->getExpr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia</label>                                        
                            <input type="text" class="form-control" name="expr_prqi_nm" readonly value="'.$tninp012->getExpr_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección</label>                                        
                            <input type="text" class="form-control" name="expr_ad" readonly value="'.$tninp012->getExpr_ad().'"  />
                        </div>                        
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Exportador</label>                                      
                                <input type="text" class="form-control" name="expr_tel_no" readonly value="'.$tninp012->getExpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_fax_no" readonly value="'.$tninp012->getExpr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_em" readonly value="'.$tninp012->getExpr_em().'"  />
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
                            <input type="text" class="form-control" name="impr_nm" readonly value="'.$tninp012->getImpr_ad().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>País del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_ntn_nm" readonly value="'.$tninp012->getImpr_ntn_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Ciudad Importador</label>                                        
                                <input type="text" class="form-control" name="impr_city_nm" readonly value="'.$tninp012->getImpr_city_nm().'"  />
                            </div>
                        </div>                        
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_ad" readonly value="'.$tninp012->getImpr_ad().'"  />
                        </div>                        
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp012->getImpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Importador</label>                                        
                                <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp012->getImpr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_em" readonly value="'.$tninp012->getImpr_em().'"  />
                        </div>				
                    </div>
		</div>';
				
	$retval.='
		<div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Procesador</h3>
                    </div>
                    <div class="panel-body">
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>País Productor</label>                                      
                            <input type="text" class="form-control" name="prdr_ntn_nm" readonly value="'.$tninp012->getPrdr_ntn_nm().'" />                                    
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Clasificación del Procesador</label>                                      
                                <input type="text" class="form-control" name="pcs_cl_cd" readonly value="'.$tninp012->getPcs_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación de Procesador</label>                                        
                                <input type="text" class="form-control" name="pcs_idt_no" readonly value="'.$tninp012->getPcs_idt_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Procesador</label>                                        
                            <input type="text" class="form-control" name="pcs_nm" readonly value="'.$tninp012->getPcs_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Representante Legal del Procesador</label>                                        
                            <input type="text" class="form-control" name="pcs_rpgp_nm" readonly value="'.$tninp012->getPcs_rpgp_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Número de Autorización de Procesador</label>                                      
                            <input type="text" class="form-control" name="pcs_atr_no" readonly value="'.$tninp012->getPcs_atr_no().'" />                                    
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="pcs_prvhc_nm" readonly value="'.$tninp012->getPcs_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="pcs_cuty_nm" readonly value="'.$tninp012->getPcs_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia</label>                                        
                            <input type="text" class="form-control" name="pcs_prqi_nm" readonly value="'.$tninp012->getPcs_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección</label>                                        
                            <input type="text" class="form-control" name="pcs_ad" readonly value="'.$tninp012->getPcs_ad().'"  />
                        </div>                        
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Procesador</label>                                      
                                <input type="text" class="form-control" name="pcs_tel_no" readonly value="'.$tninp012->getPcs_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Procesador</label>                                        
                                <input type="text" class="form-control" name="pcs_fax_no" readonly value="'.$tninp012->getPcs_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Procesador</label>                                        
                            <input type="text" class="form-control" name="pcs_em" readonly value="'.$tninp012->getPcs_em().'"  />
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
                                <label>Cantidad Total de PAquetes de Producto</label>                                      
                                <input type="text" class="form-control" name="pkgs_tot_qt" readonly value="'.$tninp012->getPkgs_tot_qt().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Peso Neto Total de Producto</label>                                        
                                <input type="text" class="form-control" name="prdt_tot_nwt" readonly value="'.$tninp012->getPrdt_tot_nwt().'"  />
                            </div>
                        </div>						
                    </div>
		</div>';
		
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Origen</h3>
                    </div>
                    <div class="panel-body">						
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Lugar de Producción</label>                                      
                                <input type="text" class="form-control" name="pdtn_plc" readonly value="'.$tninp012->getPdtn_plc().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Factura Comercial</label>                                        
                                <input type="text" class="form-control" name="inv_no" readonly value="'.$tninp012->getInv_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Tipo de Proceso</label>                                      
                            <input type="text" class="form-control" name="prcs_type_inf" readonly value="'.$tninp012->getPrcs_type_inf().'" />                                    
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Modo de Producción</label>                                      
                            <input type="text" class="form-control" name="pdtn_mthd_desc" readonly value="'.$tninp012->getPdtn_mthd_desc().'" />                                    
                        </div>	
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Producto de Acuacultura (Si o No)</label>                                      
                            <input type="text" class="form-control" name="aqctr_prdt_nm" readonly value="'.$tninp012->getAqctr_prdt_nm().'" />                                    
                        </div>						
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>País de Acuacultura</label>                                      
                                <input type="text" class="form-control" name="aqctr_ntn_nm" readonly value="'.$tninp012->getAqctr_ntn_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Acuacultura</label>                                        
                                <input type="text" class="form-control" name="aqctr_city_nm" readonly value="'.$tninp012->getAqctr_city_nm().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Producto de Captura (Si o No)</label>                                      
                            <input type="text" class="form-control" name="capt_prdt_nm" readonly value="'.$tninp012->getCapt_prdt_nm().'" />                                    
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Área de Captura</label>                                      
                            <input type="text" class="form-control" name="capt_spm_nm" readonly value="'.$tninp012->getCapt_spm_nm().'" />                                    
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Embarcación de Captura</label>                                      
                            <input type="text" class="form-control" name="capt_spm_atr_no" readonly value="'.$tninp012->getCapt_spm_atr_no().'" />                                    
                        </div>	   						
                    </div>
		</div>';
			 
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Transporte</h3>
                    </div>
                    <div class="panel-body">						
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Tipo de Medio de Transporte</label>                                      
                            <input type="text" class="form-control" name="trsp_way_type_inf" readonly value="'.$tninp012->getTrsp_way_type_inf().'" />                                    
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Buque</label>                                      
                            <input type="text" class="form-control" name="capt_spm_nm" readonly value="'.$tninp012->getCapt_spm_nm().'" />                                    
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre/Número de Vuelo</label>                                      
                            <input type="text" class="form-control" name="capt_spm_nm" readonly value="'.$tninp012->getCapt_spm_nm().'" />                                    
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Otro medio de Transporte</label>                                      
                            <input type="text" class="form-control" name="capt_spm_nm" readonly value="'.$tninp012->getCapt_spm_nm().'" />                                    
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>País de Envío</label>                                      
                                <input type="text" class="form-control" name="send_ntn_nm" readonly value="'.$tninp012->getSend_ntn_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Envío</label>                                        
                                <input type="text" class="form-control" name="send_city_nm" readonly value="'.$tninp012->getSend_city_nm().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Nombre de País de Destino</label>                                      
                                <input type="text" class="form-control" name="dst_ntn_nm" readonly value="'.$tninp012->getDst_ntn_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Destino</label>                                        
                                <input type="text" class="form-control" name="dst_city_nm" readonly value="'.$tninp012->getDst_city_nm().'"  />
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
					
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Observaciones</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-11 form-group">
                            <label>Observaciones del solicitante</label>
                            <textarea class="form-control" rows="5" name="dclr_rmk">'.$tninp012->getDclr_rmk().'</textarea>
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
    }
    return $retval;
    
}