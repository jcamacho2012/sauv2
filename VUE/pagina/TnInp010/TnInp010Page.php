<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp010Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp010/TnInp010PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp010/TnInp010CtnrPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp010/TnInp010LotPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnNtfc/TnNtfcPage.php';
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
        <div class="header">
                <h1>'.substr($tninp010->getDcm_no(), 0, -4).'  '.$tninp010->getDcm_nm().'</h1> 
            </div>
            <div>
            <h1 id="notificacion">Mostrar Notificaciones Solicitadas</h1> 
            <div id="ntfc_tabla">               
                '.$notificacion.'                                
            </div>
        <div class="solicitud">
            <h1>Datos de Solicitud</h1>
                <div class="col1">
				<div>
                    <label>Número de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getReq_no().'">                       
                </div>                
                <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getReq_city_nm().'">                       
                </div>
                <div>
                    <label>Número de Certificado Anterior</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPrev_ctft_no().'">                       
                </div>                
                </div>
                <div class="col2">
				<div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getMdf_dt().'">                       
                </div>                
                <div>
                    <label>Tipo de Documento</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDcm_type_nm().'">                       
                </div>
                <div>
                    <label>Fecha de Emisión de Certificado Anterior</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPrev_ctft_iss_de().'">                       
                </div>                               
			</div>
			<div>
                    <label>Número de Certificado de Calidad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getQlt_ctft_no().'">                       
            </div>                               	
		</div>				                       
        <div class="solicitante">
            <h1>Datos de Solicitante</h1>
		<div class="col1">
		<div>
                    <label>Clasificacion del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDclr_cl_cd().'">                       
                </div>                
		</div>
		<div class="col2">
		<div>
                    <label>Número de Identificación de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDclr_idt_no().'">                       
                </div>                
		</div>			
		<div class="foo">
		<div>
                    <label>Razon Social del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDclr_nole().'">                       
                </div>
		</div>
			<div class="col1">
				<div>
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDclr_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDclr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                <label>Parroquia de la Empresa Solicitante</label>
                <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDclr_prqi_nm().'">                       
            </div>
			<div class="foo">
				<div>
					<label>Direccion de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDclr_ad().'">                                            					
				</div>
			</div>
            <div class="foo">
				<div>
					<label>Nombre de Solicitante</label>
					<input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDclr_nm().'">                                            
				</div>
			</div>
			<div class="col1">
				 <div>
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDclr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDclr_fax_no().'">                       
                </div>                
			</div>
			<div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDclr_em().'">                       
            </div>               
        </div>
		<div class="exportador">
            <h1>Datos de Exportador</h1>
			<div class="col1">
				<div>
                    <label>Clasificacion del Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getExpr_cl_cd().'">                       
                </div>  
			</div>
			<div class="col2">
				<div>
                    <label>Número de Identificación de la Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getExpr_idt_no().'">                                             
                </div>                              
			</div>			
			<div class="foo">
				<div>
                     <label>Nombre de Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getExpr_nm().'">                                                                  
                </div>                
			</div>
			<div>
                     <label>País Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getExpr_ntn_nm().'">                                                                  
            </div>                
			<div class="col1">
				<div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getExpr_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getExpr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                    <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getExpr_prqi_nm().'">                       
            </div>
			<div class="foo">
				<div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getExpr_ad().'">                                           
                </div>
			</div>            
			<div class="col1">
				<div>
                    <label>Teléfono de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getExpr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getExpr_fax_no().'">                       
                </div>                
			</div>
			<div>
                    <label>Correo Electrónico de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getExpr_em().'">                       
            </div>
        </div>
		<div class="importador">
			<h1>Datos de Importador</h1>
			<div class="foo">
				<div>
                    <label>Nombre del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getImpr_nm().'">                                                                  
                </div> 
			</div> 
			<div class="col1">
				 <div>
                    <label>País del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getImpr_ntn_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Ciudad Importador</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getImpr_city_nm().'">                       
                </div>              
			</div>
			<div class="foo">
				<div>
                    <label>Dirección del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getImpr_ad().'">                                           
                </div>
			</div>
			<div class="col1">	
				 <div>
                    <label>Teléfono del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getImpr_tel_no().'">                       
                </div> 
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getImpr_fax_no().'">                       
                </div>             
			</div> 
			<div>
                    <label>Correo Electrónico de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getImpr_em().'">                       
            </div>			
		</div>
		<div class="producto">
			<h1>Datos de Producto</h1>                
			'.$producto.'                        
                        <div class="col1">
                            <label>Peso Neto Total de Producto</label>
                            <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPrdt_tot_nwt().'">                                            
                        </div>
                        <div class="oculto">
                            <label>Peso Neto Total de Producto</label>
                            <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPrdt_tot_nwt().'">                                            
                        </div>
		</div>
                <br />                                
		<div class="mercaderia">
			<h1>Identificación de Mercadería</h1>                
			<div class="foo">
				<div>
                    <label>Marca p Contramarca</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getBdnm().'">                                            
                </div>                 
			</div>
			<div class="col1">	
				 <div>
                    <label>Número Piezas o Unidades de Embalaje</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPck_ut_piec_no().'">                       
                </div> 
				<div>
                    <label>Entre (ºc)</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getStrt_tp().'">                       
                </div> 
			</div>
			<div class="col2">
				<div>
                    <label>Rango Térmico de Conservación y Transporte</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getTrsp_csbt_thml_rank().'">                       
                </div> 
				<div>
                    <label>Y (ºc)</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getFinl_tp().'">                       
                </div> 				
			</div> 				
		</div>
		<div class="lote">
			<h1>Datos de Lote</h1>                
			'.$lote.'                   
		</div>
                 <br /> 
		<div class="captura">
			<h1>Establecimiento de Captura</h1>
			<div class="foo">
				<div>
                    <label>Nombre</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getCapt_hour_desc().'">                                            
                </div>                
				<div>
                    <label>Dirección</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getCapt_estbl_ad().'">                                            
                </div>                 				
			</div>			
			<div class="col1">	
				 <div>
                    <label>Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getCapt_estbl_city_nm().'">                       
                </div> 				
			</div>
			<div class="col2">
				<div>
                    <label>No. Odixil (Número de Autorización de Establecimiento Productor)</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getCapt_estbl_atr_no().'">                       
                </div> 				
			</div> 		                   
		</div>
		<div class="productor">
			<h1>Establecimiento Productor</h1>                
			<div class="foo">
				<div>
                    <label>Nombre</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPrdr_nm().'">                                            
                </div>                
				<div>
                    <label>Dirección</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPrdr_ad().'">                                            
                </div>                 				
			</div>			
			<div class="col1">	
				 <div>
                    <label>Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPrdr_city_nm().'">                       
                </div> 				
			</div>
			<div class="col2">
				<div>
                    <label>No. Odixil (Número de Autorización de Establecimiento Productor)</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPrdr_atr_no().'">                       
                </div> 				
			</div> 		                   
		</div>
		<div class="deposito">
			<h1>Establecimiento de Deposito</h1>                
			<div class="foo">
				<div>
                    <label>Nombre</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPcs_nm().'">                                            
                </div>                
				<div>
                    <label>Dirección</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPcs_ad().'">                                            
                </div>                 				
			</div>			
			<div class="col1">	
				 <div>
                    <label>Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPcs_city_nm().'">                       
                </div> 				
			</div>
			<div class="col2">
				<div>
                    <label>No. Odixil (Número de Autorización de Establecimiento Deposito)</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPcs_atr_no().'">                       
                </div> 				
			</div> 		                   
		</div>
		<div class="dst_mercaderia">
			<h1>Destino de Mercadería</h1>                
			<div class="col1">	
				 <div>
                    <label>Medio de Transporte</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getTrsp_way_nm().'">                       
                </div> 				
			</div>
			<div class="col2">
				<div>
                    <label>Nombre de Empresa de Transporte</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getCarr_nm().'">                       
                </div> 				
			</div> 		                                     
			<div class="foo">
				<div>
                    <label>Mercadería se Envía Desde</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getPrdt_iss_plc().'">                                            
                </div>                				
			</div>			
			<div class="col1">	
				 <div>
                    <label>Nombre de País de Destino</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDst_ntn_nm().'">                       
                </div> 			
				<div>
                    <label>Países de Tránsito</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getTrst_ntn_nm().'">                       
                </div> 								
			</div>
			<div class="col2">
				<div>
                    <label>Mercadería se Envía Hacia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getDst_city_nm().'">                       
                </div> 	
				<div>
                    <label>Ciudad de Tránsito</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getTrst_city_nm().'">                       
                </div> 								
			</div> 		                                     
		</div>
        <div class="contenedor">
			<h1>Datos de Contenedor</h1>                
			'.$contenedor.'                   
		</div>
		<div class="referencia">
			<h1>Datos de Referencia</h1>                
			<div class="col1">	
				 <div>
                    <label>Factura Comercial</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getCmca_bill_no().'">                       
                </div> 				
			</div>
			<div class="col2">
				<div>
                    <label>Observaciones</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp010->getRmk().'">                       
                </div> 				
			</div> 		
		</div>				
		<div class="observacion">
			<h1>Observaciones</h1>
            <div>
                <label>Observaciones de Solicitante</label>                       
                <textarea  readonly name="descripcion" class="textarea">'.$tninp010->getDclr_rmk().'</textarea>      
            </div>                    
		</div>	
		<div class="adjunto">
			<h1>Documento Adjunto</h1> 
                '.$adjunto.'                                   
		</div>					         		
                ';
    }
    return $retval;
    
}