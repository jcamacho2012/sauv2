<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp008Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp008/TnInp008PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp008/TnInp008CtnrPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnNtfc/TnNtfcPage.php';
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
        <div class="header">
                <h1>'.substr($tninp008->getDcm_no(), 0, -4).'  '.$tninp008->getDcm_nm().'</h1> 
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
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getReq_no().'">                       
                </div>                
                <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getReq_city_nm().'">                       
                </div>
                <div>
                    <label>Número de Certificado Anterior</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getPrev_ctft_no().'">                       
                </div>                
                </div>
                <div class="col2">
				<div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMdf_dt().'">                       
                </div>                
                <div>
                    <label>Tipo de Documento</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDcm_type_nm().'">                       
                </div>
                <div>
                    <label>Fecha de Emisión de Certificado Anterior</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getPrev_ctft_iss_de().'">                       
                </div>                               
			</div>
			<div>
                    <label>Número de Certificado de Calidad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getQlt_ctft_no().'">                       
            </div>                               	
		</div>				                       
        <div class="solicitante">
            <h1>Datos de Solicitante</h1>
		<div class="col1">
		<div>
                    <label>Clasificacion del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDclr_cl_cd().'">                       
                </div>                
		</div>
		<div class="col2">
		<div>
                    <label>Número de Identificación de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDclr_idt_no().'">                       
                </div>                
		</div>			
		<div class="foo">
				<div>
                    <label>Razon Social del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDclr_nole().'">                       
                </div>				
		</div>
			<div class="col1">
				<div>
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDclr_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDclr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                <label>Parroquia de la Empresa Solicitante</label>
                <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDclr_prqi_nm().'">                       
            </div>
			<div class="foo">
				<div>
					<label>Direccion de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDclr_ad().'">                                            					
				</div>
			</div>
            <div class="foo">
				<div>
					<label>Nombre de Solicitante</label>
					<input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDclr_nm().'">                                            
				</div>
			</div>
			<div class="col1">
				 <div>
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDclr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDclr_fax_no().'">                       
                </div>                
			</div>
			<div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getDclr_em().'">                       
            </div>               
        </div>
		<div class="exportador">
            <h1>Datos de Exportador</h1>
			<div class="col1">
				<div>
                    <label>Clasificacion del Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_cl_cd().'">                       
                </div>  
			</div>
			<div class="col2">
				<div>
                    <label>Número de Identificación de la Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_idt_no().'">                                             
                </div>                              
			</div>			
			<div class="foo">
				<div>
                     <label>Nombre de Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_nm().'">                                                                  
                </div>                
			</div>
			<div>
                     <label>Número de Autorización de Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_atr_no().'">                                                                  
            </div>                
			<div>
                     <label>País Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_ntn_nm().'">                                                                  
            </div>                
			<div class="col1">
				<div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                    <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_prqi_nm().'">                       
            </div>
			<div class="foo">
				<div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_ad().'">                                           
                </div>
			</div>            
			<div class="col1">
				<div>
                    <label>Teléfono de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_fax_no().'">                       
                </div>                
			</div>
			<div>
                    <label>Correo Electrónico de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getExpr_em().'">                       
            </div>
        </div>
		<div class="importador">
			<h1>Datos de Importador</h1>
			<div class="foo">
				<div>
                    <label>Nombre del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getImpr_nm().'">                                                                  
                </div> 
			</div> 
			<div class="col1">
				 <div>
                    <label>País del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getImpr_ntn_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Ciudad Importador</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getImpr_city_nm().'">                       
                </div>              
			</div>
			<div class="foo">
				<div>
                    <label>Dirección del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getImpr_ad().'">                                           
                </div>
			</div>
			<div class="col1">	
				 <div>
                    <label>Teléfono del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getImpr_tel_no().'">                       
                </div> 
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getImpr_fax_no().'">                       
                </div>             
			</div> 
			<div>
                    <label>Correo Electrónico de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getImpr_em().'">                       
            </div>			
		</div>
		<div class="fabricante">
			<h1>Datos de Fabricante</h1>                			
		<div class="col1">	
				 <div>
                    <label>Clasificación de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_cl_cd().'">                       
                </div> 			
			</div>
			<div class="col2">
				<div>
                    <label>Número de Identificación de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_idt_no().'">                       
                </div> 				
			</div>
		<div class="foo">	
				 <div>
                    <label>Nombre de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_nm().'">                       
                </div> 							
		</div>			
		<div>
                    <label>Número de Autorización de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_atr_no().'">                       
        </div>
		<div class="foo">
				<div>
                    <label>Representante Legal de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_rpgp_nm().'">                       
                </div> 			
		</div> 		
		<div class="col1">	
				 <div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_prvhc_nm().'">                       
                </div> 			
			</div>
			<div class="col2">
				<div>
                    <label>Cantón/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_cuty_nm().'">                       
                </div> 				
			</div>
			<div>
                    <label>Parroquia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_prqi_nm().'">                       
                </div>
		<div class="foo">
				<div>
                    <label>Dirección</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_ad().'">                       
                </div> 				
			</div>
		<div class="col1">	
				 <div>
                    <label>Teléfono de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_tel_no().'">                       
                </div> 			
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_fax_no().'">                       
                </div> 				
			</div>
			<div>
                    <label>Correo Electrónico de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getMfr_em().'">                       
                </div> 				
		</div>
		<div class="generales">
			<h1>Datos Generales</h1>
		<div class="col1">	
				 <div>
                    <label>Nombre de Medio de Transporte</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getTrsp_way_nm().'">                       
                </div>				
			</div>
			<div class="col2">
				<div>
                    <label>Nombre de Empresa de Transporte</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getCarr_nm().'">                       
                </div>				
			</div> 					
				<div>
                    <label>Número de Factura Comercial</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getInv_no().'">                       
                </div>
				<div>
                    <label>Número de Conocimiento de Embarque</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getBlno().'">                       
                </div>
				<div class="col1">	
				 <div>
                    <label>País de Tránsito</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getTrst_ntn_nm().'">                       
                </div>				
			</div>
			<div class="col2">
				<div>
                    <label>Ciudad de Tránsito</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getTrst_city_nm().'">                       
                </div>				
			</div> 			
			<div class="foo">
				<div>
                    <label>Punto de Cruce de Frontera de la Federación Rusa</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getCrfr_pnt_nm().'">                                            
                </div> 							
			</div>	 							                                     								                               
		</div>	
		<div class="contenedor">
			<h1>Datos de Contenedor</h1>                
			'.$contenedor.'                   
		</div>	
		<div class="producto">
			<h1>Datos de Producto</h1>
			<div class="foo">
				<div id="producto">
					<div style="width:1300px;">
						'.$producto.'
					</div>
				</div>
			</div>			    
                        <div class="col1">
                            <label>Cantidad Total de Paquetes de Producto</label>
                            <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getPkgs_tot_qt().'">                                            
                        </div>
                        <div class="col2">
                            <label>Peso Neto Total de Producto</label>
                            <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getPrdt_tot_nwt().'">                                            
                        </div>
		</div>							
		<div class="origen_producto">
			<h1>Origen de Producto</h1>
			<div class="foo">
				<div>
                    <label>Buque Factoría</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getVsl_plat_nm().'">                                            
                </div>'; 
                if($dcm_cd=='130-008-REQ'){
                    $retval.='<div>
                    <label>Cuarto Frío</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getCdrm_nm().'">                                            
                    </div>'; 							
                }
		$retval.='<div>
                    <label>Unidad Territorial-Administrativa</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp008->getCntr_ntn_nm().'">                                            
                </div> 							
			</div>	 	
        </div>	
		<div class="observacion">
			<h1>Observaciones</h1>
            <div>
                <label>Observaciones de Solicitante</label>                       
                <textarea  readonly name="descripcion" class="textarea">'.$tninp008->getDclr_rmk().'</textarea>      
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