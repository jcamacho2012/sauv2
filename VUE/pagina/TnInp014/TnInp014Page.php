<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp014Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp014/TnInp014CtnrPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_014($req_no){      
    $tninp014= consulta_datos_formulario_014($req_no);    
    $solicitud=$tninp014->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{                
    $contenedor= cargar_lista_contenedor_014($req_no);    
    $adjunto= cargar_lista_adjuntos($req_no);        
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval=' 
        <div class="header">
                <h1>'.substr($tninp014->getDcm_no(), 0, -4).'  '.$tninp014->getDcm_nm().'</h1> 
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
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getReq_no().'">                       
                </div>                
                <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getReq_city_nm().'">                       
                </div>
                <div>
                    <label>Número de Certificado Anterior</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPrev_ctft_no().'">                       
                </div>                
                </div>
                <div class="col2">
				<div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getMdf_dt().'">                       
                </div>                
                <div>
                    <label>Tipo de Documento</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDcm_type_nm().'">                       
                </div>
                <div>
                    <label>Fecha de Emisión de Certificado Anterior</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPrev_ctft_iss_de().'">                       
                </div>                               
			</div>
			<div>
                    <label>Número de Certificado de Calidad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getQlt_ctft_no().'">                       
            </div>                               	
		</div>				                       
        <div class="solicitante">
            <h1>Datos de Solicitante</h1>
		<div class="col1">
		<div>
                    <label>Clasificacion del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_cl_cd().'">                       
                </div>                
		</div>
		<div class="col2">
		<div>
                    <label>Número de Identificación de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_idt_no().'">                       
                </div>                
		</div>			
		<div class="foo">
				<div>
                    <label>Razon Social del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_nole().'">                       
                </div>
				<div>
                    <label>Representante Legal de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_rpgp_nm().'">                       
                </div>
		</div>
			<div class="col1">
				<div>
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                <label>Parroquia de la Empresa Solicitante</label>
                <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_prqi_nm().'">                       
            </div>
			<div class="foo">
				<div>
					<label>Direccion de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_ad().'">                                            					
				</div>
			</div>
            <div class="foo">
				<div>
					<label>Nombre de Solicitante</label>
					<input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_nm().'">                                            
				</div>
			</div>
			<div class="col1">
				 <div>
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_fax_no().'">                       
                </div>                
			</div>
			<div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDclr_em().'">                       
            </div>               
        </div>
		<div class="exportador">
            <h1>Datos de Exportador</h1>
			<div class="col1">
				<div>
                    <label>Clasificacion del Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_cl_cd().'">                       
                </div>  
			</div>
			<div class="col2">
				<div>
                    <label>Número de Identificación de la Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_idt_no().'">                                             
                </div>                              
			</div>			
			<div class="foo">
				<div>
                     <label>Nombre de Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_nm().'">                                                                  
                </div>                
			</div>
			<div>
                     <label>Número de Autorización de Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_atr_no().'">                                                                  
            </div>                
			<div>
                     <label>País Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_ntn_nm().'">                                                                  
            </div>                
			<div class="col1">
				<div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                    <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_prqi_nm().'">                       
            </div>
			<div class="foo">
				<div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_ad().'">                                           
                </div>
			</div>            
			<div class="col1">
				<div>
                    <label>Teléfono de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_fax_no().'">                       
                </div>                
			</div>
			<div>
                    <label>Correo Electrónico de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getExpr_em().'">                       
            </div>
        </div>
		<div class="importador">
			<h1>Datos de Importador</h1>
			<div class="foo">
				<div>
                    <label>Nombre del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getImpr_nm().'">                                                                  
                </div> 
			</div> 
			<div class="col1">
				 <div>
                    <label>País del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getImpr_ntn_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Ciudad Importador</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getImpr_city_nm().'">                       
                </div>              
			</div>
			<div class="foo">
				<div>
                    <label>Dirección del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getImpr_ad().'">                                           
                </div>
			</div>
			<div class="col1">	
				 <div>
                    <label>Teléfono del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getImpr_tel_no().'">                       
                </div> 
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getImpr_fax_no().'">                       
                </div>             
			</div> 
			<div>
                    <label>Correo Electrónico de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getImpr_em().'">                       
            </div>			
		</div>		
		<div class="origen">
		<h1>Datos de Origen</h1>
			<div>
                    <label>Nombre de País de Procedencia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getOrg_ntn_nm().'">                                            
            </div> 
			<div>
                    <label>Subpartida Arancelaria</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getHc().'">                                            
            </div>
			<div class="foo">
				<div>
                    <label>Tipo de Embalaje de Producto</label>
                    <textarea  readonly name="descripcion" class="textarea">'.$tninp014->getPrdt_pck_type_inf().'</textarea>      
                </div>
			</div>
 			<div class="col1">	
				 <div>
                    <label>Peso Neto de Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPrdt_nwt().'">                       
                </div> 
			</div>
			<div class="col2">
				<div>
                    <label>Cantidad de Embalaje de Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPrdt_pck_qt().'">                       
                </div>             
			</div> 
		</div>
		<div class="procesador">
			<h1>Datos de Procesador</h1>                
			<div>
                    <label>País Productor</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPrdr_ntn_nm().'">                                            
             </div> 
		<div class="col1">	
				 <div>
                    <label>Clasificación de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_cl_cd().'">                       
                </div> 			
			</div>
			<div class="col2">
				<div>
                    <label>Número de Identificación de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_idt_no().'">                       
                </div> 				
			</div>
		<div class="foo">	
				 <div>
                    <label>Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_nm().'">                       
                </div> 			
				<div>
                    <label>Representante Legal de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_rpgp_nm().'">                       
                </div> 			
		</div>			
		<div>
                    <label>Número de Autorización de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_atr_no().'">                       
        </div>
		<div class="col1">	
				 <div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_prvhc_nm().'">                       
                </div> 			
			</div>
			<div class="col2">
				<div>
                    <label>Cantón/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_cuty_nm().'">                       
                </div> 				
			</div>
			<div>
                    <label>Parroquia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_prqi_nm().'">                       
                </div>
		<div class="foo">
				<div>
                    <label>Dirección</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_ad().'">                       
                </div> 				
			</div>
		<div class="col1">	
				 <div>
                    <label>Teléfono de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_tel_no().'">                       
                </div> 			
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_fax_no().'">                       
                </div> 				
			</div>
			<div>
                    <label>Correo Electrónico de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPcs_em().'">                       
                </div> 				
		</div>		
		<div class="producto">
			<h1>Datos de Producto</h1> 
				<div class="foo">
					<div>
						<label>Nombre de Producto</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp014->getPrdt_nm().'">                       
					</div> 				
				</div>
					<div>
						<label>Número de Factura Comercial</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp014->getInv_no().'">                       
					</div> 
				<div class="foo">
					<div>
						<label>Código de Lote</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp014->getLot_cd().'">                       
					</div> 				
				</div>					                     
		</div>						
		<div class="transporte">
			<h1>Datos de Transporte</h1> 
				<div>
                    <label>Nombre de Medio de Transporte</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getTrsp_way_nm().'">                       
                </div>
			<div class="foo">
				<div>
                    <label>Nombre de Buque</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getVsl_nm().'">                                            
                </div> 
				<div>
                    <label>Nombre/Número de Vuelo</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getFghnb().'">                                            
                </div>
				<div>
                    <label>Otro Medio de Transporte</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getOter_trsp_way_nm().'">                                            
                </div>    				
			</div>	 				
			<div class="col1">	
				 <div>
                    <label>País de Envío</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getSend_ntn_nm().'">                       
                </div>
				<div>
                    <label>Nombre de País de Destino</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDst_ntn_nm().'">                       
                </div>  				
			</div>
			<div class="col2">
				<div>
                    <label>Ciudad de Envío</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getSend_city_nm().'">                       
                </div>
				<div>
                    <label>Ciudad de Destino</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp014->getDst_city_nm().'">                       
                </div> 				
			</div> 		                                     								                                
		</div>
        <div class="contenedor">
			<h1>Datos de Contenedor</h1>                
			'.$contenedor.'                   
		</div>		
		<div class="observacion">
			<h1>Observaciones</h1>
            <div>
                <label>Observaciones de Solicitante</label>                       
                <textarea  readonly name="descripcion" class="textarea">'.$tninp014->getDclr_rmk().'</textarea>      
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