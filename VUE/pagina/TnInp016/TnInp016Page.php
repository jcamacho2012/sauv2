<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp016Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_016($req_no,$process,$activity,$cedula,$rol,$username){    
    $tninp016= consulta_datos_formulario_016($req_no);   
    $solicitud=$tninp016->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>'." - ".  var_dump($tninp016);
    }else{        
    $adjunto= cargar_lista_adjuntos($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval='
                <script src="themes/js/eventos.js"></script>
            	<div class="display-2">
                    <h2 align="center">'.substr($tninp016->getDcm_no(), 0, -4).'  '.$tninp016->getDcm_nm().'</h2>
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
                                <input type="text" class="form-control" name="req_no" id="req_no" readonly value="'.$tninp016->getReq_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Solicitud</label>                                        
                                <input type="text" class="form-control" name="mdf_dt" readonly value="'.$tninp016->getMdf_dt().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_city_nm" readonly value="'.$tninp016->getReq_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Tipo de Documento</label>                                        
                                <input type="text" class="form-control" name="dcm_type_nm" readonly value="'.$tninp016->getMdf_dt().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Certificado Anterior</label>                                      
                                <input type="text" class="form-control" name="prev_ctft_no" readonly value="'.$tninp016->getReq_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Emisión de Certificado Anterior</label>                                        
                                <input type="text" class="form-control" name="prev_ctft_iss_de" readonly value="'.$tninp016->getMdf_dt().'"  />
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
                                <input type="text" class="form-control" name="dclr_cl_cd" readonly value="'.$tninp016->getDclr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_idt_no" readonly value="'.$tninp016->getDclr_idt_no().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Razón Social del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_nole" readonly value="'.$tninp016->getDclr_nole().'"  />
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-11 form-group">
                                <label>Representante Legal del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_rpgp_nm" readonly value="'.$tninp016->getDclr_rpgp_nm().'"  />
                            </div>
                        </div>												
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia de la Empresa Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_prvhc_nm" readonly value="'.$tninp016->getDclr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_cuty_nm" readonly value="'.$tninp016->getDclr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_prqi_nm" readonly value="'.$tninp016->getDclr_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_ad" readonly value="'.$tninp016->getDclr_ad().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_nm" readonly value="'.$tninp016->getDclr_nm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Cargo del Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_odty_nm" readonly value="'.$tninp016->getDclr_odty_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_tel_no" readonly value="'.$tninp016->getDclr_tel_no().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Fax del Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_fax_no" readonly value="'.$tninp016->getDclr_fax_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Correo Electrónico del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_em" readonly value="'.$tninp016->getDclr_em().'"  />
                            </div>
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
                                <label>Código de Clasificación del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_cl_cd" readonly value="'.$tninp016->getImpr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación del Importador</label>                                        
                                <input type="text" class="form-control" name="impr_idt_no" readonly value="'.$tninp016->getImpr_idt_no().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Nombre del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_nm" readonly value="'.$tninp016->getImpr_nm().'" />                                    
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="impr_prvhc_nm" readonly value="'.$tninp016->getImpr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="impr_cuty_nm" readonly value="'.$tninp016->getImpr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                            <div class="col-xs-5 form-group">
                                <label>Parroquia</label>                                        
                                <input type="text" class="form-control" name="impr_prqi_nm" readonly value="'.$tninp016->getImpr_prqi_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                                <div class="col-xs-11 form-group">
                                        <label>Dirección</label>                                        
                                        <input type="text" class="form-control" name="impr_ad" readonly value="'.$tninp016->getImpr_ad().'"  />
                                </div>
                        </div>						
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp016->getImpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Importador</label>                                        
                                <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp016->getImpr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_em" readonly value="'.$tninp016->getImpr_em().'"  />
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
                                <input type="text" class="form-control" name="mfr_cl_cd" readonly value="'.$tninp016->getMfr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación del Exportador</label>                                        
                                <input type="text" class="form-control" name="mfr_idt_no" readonly value="'.$tninp016->getMfr_idt_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Exportador</label>                                        
                            <input type="text" class="form-control" name="mfr_nm" readonly value="'.$tninp016->getMfr_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Representante Legal de Exportador</label>                                        
                            <input type="text" class="form-control" name="mfr_rpgp_nm" readonly value="'.$tninp016->getMfr_rpgp_nm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>País del Exportador</label>                                      
                                <input type="text" class="form-control" name="mfr_ntn_nm" readonly value="'.$tninp016->getMfr_ntn_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Ciudad del Exportador</label>                                        
                                <input type="text" class="form-control" name="mfr_city_nm" readonly value="'.$tninp016->getMfr_city_nm().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección del Exportador</label>                                        
                            <input type="text" class="form-control" name="mfr_ad" readonly value="'.$tninp016->getMfr_ad().'"  />
                        </div>                                             
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Exportador</label>                                      
                                <input type="text" class="form-control" name="mfr_tel_no" readonly value="'.$tninp016->getMfr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Exportador</label>                                        
                                <input type="text" class="form-control" name="mfr_fax_no" readonly value="'.$tninp016->getMfr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Exportador</label>                                        
                            <input type="text" class="form-control" name="mfr_em" readonly value="'.$tninp016->getMfr_em().'"  />
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
                                <label>Producto Nacional</label>                                      
                                <input type="text" class="form-control" name="natn_prdt_nm" readonly value="'.$tninp016->getNatn_prdt_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Nombre del Producto</label>                                        
                                <input type="text" class="form-control" name="prdt_nm" readonly value="'.$tninp016->getPrdt_nm().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Subpartida Arancelaria</label>                                      
                                <input type="text" class="form-control" name="hc" readonly value="'.$tninp016->getHc().'" />                                    
                            </div>					
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Cantidad de Muestra</label>                                      
                                <input type="text" class="form-control" name="samp_qt" readonly value="'.$tninp016->getSamp_qt().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Forma de Presentación de Producto</label>                                        
                                <input type="text" class="form-control" name="prdt_smt_frm_inf" readonly value="'.$tninp016->getPrdt_smt_frm_inf().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Cantidad de Producto</label>                                      
                                <input type="text" class="form-control" name="prdt_qt" readonly value="'.$tninp016->getPrdt_qt().'" />                                    
                            </div>					
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-11 form-group">
                                <label>Número de Lote</label>                                      
                                <input type="text" class="form-control" name="lot_no" readonly value="'.$tninp016->getLot_no().'" />                                    
                            </div>					
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Tiempo de Validez de Producto</label>                                      
                                <input type="text" class="form-control" name="prdt_vdt_term" readonly value="'.$tninp016->getPrdt_vdt_term().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Nombre Comercial</label>                                        
                                <input type="text" class="form-control" name="cmca_nm" readonly value="'.$tninp016->getCmca_nm().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-11 form-group">
                                <label>Nombre y Dirección de la Empresa Comercializadora</label>                                      
                                <textarea class="form-control" rows="5" readonly name="igdt_con">'.$tninp016->getIgdt_con().'</textarea>
                            </div>					
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-11 form-group">
                                <label>Nombre Común y/o Genérico de Ingredientes</label>                                      
                                <textarea class="form-control" rows="5" readonly name="atvi_con">'.$tninp016->getAtvi_con().'</textarea>
                            </div>					
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-11 form-group">
                                <label>Composición Declarada</label>                                      
                                <textarea class="form-control" rows="5" readonly name="dcd_cps_inf">'.$tninp016->getDcd_cps_inf().'</textarea>
                            </div>					
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Nombre de País de Procedencia</label>                                      
                                <input type="text" class="form-control" name="org_ntn_nm" readonly value="'.$tninp016->getOrg_ntn_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Certificado Sanitario de Libre Venta en el País de Origen</label>                                        
                                <input type="text" class="form-control" name="org_sale_free_sty_no" readonly value="'.$tninp016->getOrg_sale_free_sty_no().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Clasificación Terapéutica de Producto</label>                                      
                                <input type="text" class="form-control" name="prdt_cl_nm" readonly value="'.$tninp016->getPrdt_cl_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Vía de Administración</label>                                        
                                <input type="text" class="form-control" name="admt_mtdrt_desc" readonly value="'.$tninp016->getAdmt_mtdrt_desc().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-11 form-group">
                                <label>Usos Autorizados</label>                                      
                                <textarea class="form-control" rows="5" readonly name="atzd_use">'.$tninp016->getAtzd_use().'</textarea>
                            </div>					
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Forma Farmacéutica</label>                                      
                                <textarea class="form-control" rows="5" readonly name="pam_frm_desc">'.$tninp016->getPam_frm_desc().'</textarea>
                            </div>					
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Tipo de Formulación</label>                                      
                                <input type="text" class="form-control" name="fml_type_inf" readonly value="'.$tninp016->getFml_type_inf().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Nivel Toxicológico</label>                                        
                                <input type="text" class="form-control" name="toxi_lvl_det" readonly value="'.$tninp016->getToxi_lvl_det().'"  />
                            </div>
                        </div>
                    </div>
		</div>';
	 
     if($rol=='4'){        
          $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Aprobación</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">                                  
                                <div class="funkyradio">
                                        <div class="funkyradio-info" style="overflow:inherit;">
                                           <input type="radio" name="opcion" id="nuevo"/>
                                           <label for="nuevo" style="margin-left:5em;">Nuevo</label>
                                        </div>                                                                                       
                                </div>
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">                                                                   
                                <div class="funkyradio">                                                                                        
                                       <div class="funkyradio-info">
                                           <input type="radio" name="opcion" id="migracion"/>
                                           <label for="migracion" style="margin-left:5em;">Migración</label>
                                       </div>
                                </div>
                                <div class="col-xs-5 form-group">
                                    <label>Fecha Inicial de Vigencia</label>                                        
                                    <input type="text" class="form-control" name="muestreo" id="vigencia" placeholder="Escoga fecha de fin análisis" disabled="true" readonly="true"/>
                                </div>
                                <div class="col-xs-5 form-group">
                                    <label>Secuencial</label>                                        
                                    <input type="number" class="form-control" id="secuencial_migracion" disabled="true"/><br />
                                    <button type="button" class="btn btn-info" id="verificar" disabled="true">Verificar Secuencial</button>
                                </div>                                
                            </div>
                        </div>
                    </div>
		</div>';                
            }else{
        $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Verificar Número Registro (Migraciones)</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ingrese Secuencial</label>                                      
                                <input type="text" class="form-control" name="fml_type_inf"/> <br />
                                <button type="button" class="btn btn-info">Verificar Secuencial</button>
                            </div>
                        </div>
                    </div>
		</div>';        
            }
                    
        $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Observaciones</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-11 form-group">
                            <label>Observaciones del solicitante</label>
                            <textarea class="form-control" rows="5" readonly name="dclr_rmk">'.$tninp016->getDclr_rmk().'</textarea>
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
                                <input type="radio" name="radio" id="subsanar" value="2" />
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