<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp010Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp010/TnInp010CtnrPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp010/TnInp010PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp010/TnInp010LotPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnNtfc/TnNtfcPage.php';

/*  
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_010($req_no){      
    $tninp010= consulta_datos_formulario_010($req_no);
    $solicitud=$tninp010->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{                
    $contenedor= cargar_lista_contenedor_010($req_no);
    $producto= cargar_lista_producto_010($req_no);
    $lote=cargar_lista_lote_010($req_no);
    $adjunto= cargar_lista_adjuntos($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval='
                 <script type="text/javascript"> 
                    $("#aprobar").change(function(){ 
                        alert("escod")
                    });

                   $("#btn_enviar").click(function(){                       
                        alert("solicitud enviada");
                    });
                    
                </script>
        	<div class="display-2">
                    <h2 align="center">'.substr($tninp010->getDcm_no(), 0, -4).'  '.$tninp010->getDcm_nm().'</h2>
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
                                <input type="text" class="form-control" name="req_no" readonly value="'.$tninp010->getReq_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Solicitud</label>                                        
                                <input type="text" class="form-control" name="mdf_dt" readonly value="'.$tninp010->getMdf_dt().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_city_nm" readonly value="'.$tninp010->getReq_city_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Tipo de Documento</label>                                        
                                <input type="text" class="form-control" name="dcm_type_nm" readonly value="'.$tninp010->getDcm_type_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Certificado Anterior</label>                                      
                                <input type="text" class="form-control" name="prev_ctft_no" readonly value="'.$tninp010->getPrev_ctft_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Emisión de Certificado Anterior</label>                                        
                                <input type="text" class="form-control" name="prev_ctft_iss_de" readonly value="'.$tninp010->getPrev_ctft_iss_de().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Número de Certificado de Calidad</label>                                        
                            <input type="text" class="form-control" name="qlt_ctft_no" readonly value="'.$tninp010->getQlt_ctft_no().'"  />
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
                                <input type="text" class="form-control" name="dclr_cl_cd" readonly value="'.$tninp010->getDclr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_idt_no" readonly value="'.$tninp010->getDclr_idt_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Razón Social del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_nole" readonly value="'.$tninp010->getDclr_nole().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia de la Empresa Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_prvhc_nm" readonly value="'.$tninp010->getDclr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_cuty_nm" readonly value="'.$tninp010->getDclr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_prqi_nm" readonly value="'.$tninp010->getDclr_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_ad" readonly value="'.$tninp010->getDclr_ad().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_nm" readonly value="'.$tninp010->getDclr_nm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_tel_no" readonly value="'.$tninp010->getDclr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_fax_no" readonly value="'.$tninp010->getDclr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_em" readonly value="'.$tninp010->getDclr_em().'"  />
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
                                <input type="text" class="form-control" name="expr_cl_cd" readonly value="'.$tninp010->getExpr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_idt_no" readonly value="'.$tninp010->getExpr_idt_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_nm" readonly value="'.$tninp010->getExpr_ad().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>País Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_ntn_nm" readonly value="'.$tninp010->getExpr_ntn_nm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="expr_prvhc_nm" readonly value="'.$tninp010->getExpr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="expr_cuty_nm" readonly value="'.$tninp010->getExpr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia</label>                                        
                            <input type="text" class="form-control" name="expr_prqi_nm" readonly value="'.$tninp010->getExpr_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección</label>                                        
                            <input type="text" class="form-control" name="expr_ad" readonly value="'.$tninp010->getExpr_ad().'"  />
                        </div>                        
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Exportador</label>                                      
                                <input type="text" class="form-control" name="expr_tel_no" readonly value="'.$tninp010->getExpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Exportador</label>                                        
                                <input type="text" class="form-control" name="expr_fax_no" readonly value="'.$tninp010->getExpr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_em" readonly value="'.$tninp010->getExpr_em().'"  />
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
                            <input type="text" class="form-control" name="impr_nm" readonly value="'.$tninp010->getImpr_ad().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>País del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_ntn_nm" readonly value="'.$tninp010->getImpr_ntn_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Ciudad Importador</label>                                        
                                <input type="text" class="form-control" name="impr_city_nm" readonly value="'.$tninp010->getImpr_city_nm().'"  />
                            </div>
                        </div>                        
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_ad" readonly value="'.$tninp010->getImpr_ad().'"  />
                        </div>                        
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Importador</label>                                      
                                <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp010->getImpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Importador</label>                                        
                                <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp010->getImpr_fax_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_em" readonly value="'.$tninp010->getImpr_em().'"  />
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
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Peso Neto Total de Producto</label>                                        
                            <input type="text" class="form-control" name="prdt_tot_nwt" readonly value="'.$tninp010->getPrdt_tot_nwt().'"  />
                        </div>							
                    </div>
		</div>';
		
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Identificación de Mercaderia</h3>
                    </div>
                    <div class="panel-body">						
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Marca o Contramarca</label>                                        
                            <input type="text" class="form-control" name="bdnm" readonly value="'.$tninp010->getBdnm().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número Piezas o Unidades de Embalaje</label>                                      
                                <input type="text" class="form-control" name="pck_ut_piec_no" readonly value="'.$tninp010->getPck_ut_piec_no().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Rango Térmico de Conservación y Transporte</label>                                        
                                <input type="text" class="form-control" name="trsp_csbt_thml" readonly value="'.$tninp010->getTrsp_csbt_thml_rank().'"  />
                            </div>
                        </div> 
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Entre (°c)</label>                                      
                                <input type="text" class="form-control" name="strt_tp" readonly value="'.$tninp010->getStrt_tp().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Y (°c)</label>                                        
                                <input type="text" class="form-control" name="finl_tp" readonly value="'.$tninp010->getFinl_tp().'"  />
                            </div>
                        </div>   						
                    </div>
		</div>';
			 
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Lote</h3>
                    </div>
                    <div class="panel-body">						
			'.$lote.'													
                    </div>
				</div>';
				
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Establecimiento de Captura</h3>
                    </div>
                    <div class="panel-body">						
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre</label>                                        
                            <input type="text" class="form-control" name="capt_hour_desc" readonly value="'.$tninp010->getCapt_hour_desc().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección</label>                                        
                            <input type="text" class="form-control" name="capt_estbl_ad" readonly value="'.$tninp010->getCapt_estbl_ad().'"  />
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad</label>                                      
                                <input type="text" class="form-control" name="capt_estbl_city_nm" readonly value="'.$tninp010->getCapt_estbl_city_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>No. Odixil (Número de Autorización de Establecimiento Captura)</label>                                        
                                <input type="text" class="form-control" name="capt_estbl_atr_no" readonly value="'.$tninp010->getCapt_estbl_atr_no().'"  />
                            </div>
                        </div> 
                    </div>
		</div>';
				
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Establecimiento Productor</h3>
                    </div>
                    <div class="panel-body">						
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre</label>                                        
                            <input type="text" class="form-control" name="prdr_nm" readonly value="'.$tninp010->getPrdr_nm().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección</label>                                        
                            <input type="text" class="form-control" name="prdtr_ad" readonly value="'.$tninp010->getPrdr_ad().'"  />
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad</label>                                      
                                <input type="text" class="form-control" name="prdr_city_nm" readonly value="'.$tninp010->getPrdr_city_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>No. Odixil (Número de Autorización de Establecimiento Productor)</label>                                        
                                <input type="text" class="form-control" name="prdr_atr_no" readonly value="'.$tninp010->getPrdr_atr_no().'"  />
                            </div>
                        </div> 
                    </div>
		</div>';
				
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Establecimiento de Deposito</h3>
                    </div>
                    <div class="panel-body">						
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre</label>                                        
                            <input type="text" class="form-control" name="pcs_nm" readonly value="'.$tninp010->getPcs_nm().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección</label>                                        
                            <input type="text" class="form-control" name="pcs_ad" readonly value="'.$tninp010->getPcs_ad().'"  />
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad</label>                                      
                                <input type="text" class="form-control" name="pcs_city_nm" readonly value="'.$tninp010->getPcs_city_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>No. Odixil (Número de Autorización de Establecimiento Deposito)</label>                                        
                                <input type="text" class="form-control" name="pcs_atr_no" readonly value="'.$tninp010->getPcs_atr_no().'"  />
                            </div>
                        </div> 
                    </div>
		</div>';
				
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Destino de Mercaderia</h3>
                    </div>
                    <div class="panel-body">
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Medio de Transporte</label>                                      
                                <input type="text" class="form-control" name="trsp_way_nm" readonly value="'.$tninp010->getTrsp_way_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Nombre de Empresa de Transporte</label>                                        
                                <input type="text" class="form-control" name="carr_nm" readonly value="'.$tninp010->getCarr_nm().'"  />
                            </div>
                        </div> 
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Mercaderia se envía desde</label>                                        
                            <input type="text" class="form-control" name="prdt_iss_plc" readonly value="'.$tninp010->getPrdt_iss_plc().'"  />
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Nombre de País de Destino</label>                                      
                                <input type="text" class="form-control" name="dst_ntn_nm" readonly value="'.$tninp010->getDst_ntn_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Mercaderia se envia hacia</label>                                        
                                <input type="text" class="form-control" name="dst_city_nm" readonly value="'.$tninp010->getDst_city_nm().'"  />
                            </div>
                        </div> 
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Paises de Transito</label>                                      
                                <input type="text" class="form-control" name="trst_ntn_nm" readonly value="'.$tninp010->getTrst_ntn_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Transito</label>                                        
                                <input type="text" class="form-control" name="trst_city_nm" readonly value="'.$tninp010->getTrst_city_nm().'"  />
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
                        <h3>Datos de Referencia</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Factura Comercial</label>                                      
                                <input type="text" class="form-control" name="cmca_bill_no" readonly value="'.$tninp010->getCmca_bill_no().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Observaciones</label>                                        
                                <input type="text" class="form-control" name="rmk" readonly value="'.$tninp010->getRmk().'"  />
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
                            <textarea class="form-control" rows="5" readonly name="dclr_rmk">'.$tninp010->getDclr_rmk().'</textarea>
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