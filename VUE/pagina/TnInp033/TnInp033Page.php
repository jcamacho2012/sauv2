<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp033Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp033/TnInp033PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_033($req_no){    
    $tninp033= consulta_datos_formulario_033($req_no); 
    $solicitud=$tninp033->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{
    $producto= cargar_lista_productos_033($req_no);
    $adjunto= cargar_lista_adjuntos($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval='
           <div class="header">
                <h1>'.substr($tninp033->getDcm_no(), 0, -4).'  '.$tninp033->getDcm_nm().'</h1> 
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
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getReq_no().'">                       
                </div>                
                <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getReq_city_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getMdf_dt().'">                       
                </div>                
                <div>
                    <label>Número de Solicitud de Certificado Sanitario de Exportación</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExp_sty_ctft_req_no().'">                       
                </div>     
			</div>
			<div>
                    <label>Número de Certificado de Calidad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getQlt_ctft_no().'">                       
            </div>   
			</div>
			<div class="solicitante">
            <h1>Datos de Solicitante</h1>
			<div class="col1">
				<div>
                    <label>Clasificacion del Solicitante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_cl_cd().'">                       
                </div>
			</div>
			<div class="col2">
			<div>
                    <label>Número de Identificación de la Empresa Solicitante</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_idt_no().'">                       
             </div>  
			</div>
                        <div class="foo">
			<div>
                    <label>Razon Social del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_nole().'">                       
            </div></div>
			<div class="col1">
			<div>
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_prvhc_nm().'">                       
            </div>
			</div>
			<div class="col2">
			<div>
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_cuty_nm().'">                       
            </div>
			</div>
			<div>
                    <label>Parroquia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_prqi_nm().'">                       
            </div>
			<div class="foo">
				<div>
                    <label>Direccion de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_ad().'">                       
                </div>
                <div>
                    <label>Nombre de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_nm().'">                                            
                </div>
                <div>
                    <label>Representante Legal de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_rpgp_nm().'">                                            
                </div>
			</div>
			<div class="col1">
			 <div>
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_tel_no().'">                       
             </div>
			</div>
			<div class="col2">
			 <div>
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_fax_no().'">                       
             </div>     
			</div>
			<div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDclr_em().'">                       
            </div>
			</div>
			<div class="exportador">
            <h1>Datos de Exportador</h1>
			<div class="col1">
			<div>
                    <label>Clasificacion del Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_cl_cd().'">                       
            </div>  
			</div>
			<div class="col2">
			 <div>
                    <label>Número de Identificación de la Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_idt_no().'">                                             
             </div>
			</div>
			<div class="foo">
			 <div>
                    <label>Nombre de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_nm().'">                                            
             </div>
			</div>
			<div class="col1">
			<div>
                    <label>Número de Autorización de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_atr_no().'">                                            
             </div>
			 <div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_prvhc_nm().'">                       
             </div>
			</div>
			<div class="col2">
				<div>
                    <label>País del Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_ntn_nm().'">                       
                </div>                
                <div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_cuty_nm().'">                       
                </div>
			</div>
			 <div>
                    <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_prqi_nm().'">                       
             </div>
			<div class="foo">
			 <div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_ad().'">                                           
             </div> 
			</div>
			<div class="col1">
			<div>
                    <label>Teléfono de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_tel_no().'">                       
            </div>
			</div>
			<div class="col2">
			<div>
                    <label>Fax de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_fax_no().'">                       
            </div> 
			</div>
			<div>
                    <label>Correo Electrónico de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getExpr_em().'">                       
            </div>
			</div>
			<div class="importador">
            <h1>Datos de Importador</h1>
			<div class="foo">
			<div>
                    <label>Nombre del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getImpr_nm().'">                       
             </div>    
			</div>
			<div class="col1">
			 <div>
                    <label>País del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getImpr_ntn_nm().'">                       
                </div>
			</div>
			<div class="col2">
			<div>
                    <label>Ciudad Importador</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getImpr_city_nm().'">                       
                </div> 
			</div>
			<div class="foo">
			 <div>
                    <label>Dirección del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getImpr_ad().'">                                           
                </div>
			</div>
			<div class="col1">
			<div>
                    <label>Teléfono del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getImpr_tel_no().'">                       
                </div> 
			</div>
			<div class="col2">
			<div>
                    <label>Fax de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getImpr_fax_no().'">                       
                </div>  
			</div>
			 <div>
                    <label>Correo Electrónico de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getImpr_em().'">                       
             </div>
			</div>			
           <div class="procesador">
            <h1>Datos de Procesador</h1>
			<div class="col1">
			 <div>
                    <label>Clasificacion de Procesador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_cl_cd().'">                       
                </div>   
			</div>
			<div class="col2">
			<div>
                    <label>Número de Identificación de Procesador</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_idt_no().'">                       
                </div>  
			</div>
			<div class="foo">
			<div>
                    <label>Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_nm().'">                                            
                </div>
			</div>
			<div class="col1">
			<div>
                    <label>Número de Autorización de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_atr_no().'">                                            
                </div>
			</div>
			<div class="col2">
			<div>
                    <label>País de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_ntn_nm().'">                       
                </div>  
			</div>
			<div class="foo">
			<div> 
                    <label>Representante Legal de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_rpgp_nm().'">                       
                </div>
			</div>
			<div class="col1">
			<div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
			<div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_cuty_nm().'">                       
                </div>
			</div>
			  <div>
                    <label>Parroquia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_prqi_nm().'">                       
                </div>
			<div class="foo">
			<div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_ad().'">                       
                </div>  
			</div>
			<div class="col1">
			<div>
                    <label>Teléfono de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
			  <div>
                    <label>Fax de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_fax_no().'">                       
                </div>  
			</div>
			<div>
                    <label>Correo Electrónico de Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPcs_em().'">                       
                </div>
			</div>
			<div class="destino">
			<h1>Datos de Destino</h1>
			<div class="foo">			
			 <div>
                    <label>Nombre de País de Destino</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDst_ntn_nm().'">                       
                </div>
			</div>
			<div class="col1">
			 <div>
                    <label>Ciudad de Destino</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDst_city_nm().'">                       
                </div> 
			</div>
			<div class="col2">
			  <div>
                    <label>Puerto de Destino</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getDst_port_nm().'">                       
                </div> 
			</div>
			</div>
            <div class="producto">
			 <h1>Datos de Producto</h1>
			 '.$producto.'
			 <div class="col1">
			  <div>
                    <label>Cantidad Total de Paquetes de Producto</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPrdt_tot_qt().'">                       
                </div>  
			</div>
			<div class="col2">
			 <div>
                    <label>Peso Neto Total de Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getPrdt_tot_nwt().'">                       
                </div>   
			</div>                         
			</div>	
			<div class="generales">	
			<h1>Datos Generales</h1>
			<div class="col1">
			 <div>
                    <label>Medio de Transporte</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getTrsp_way_nm().'">                       
                </div>
			</div>
			<div class="col2">
			<div>
                    <label>Número de Factura Comercial</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getInv_no().'">                       
                </div>  
			</div>	
			<div class="foo">
				<div>
                    <label>Nombre de Empresa de Transporte</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getCarr_nm().'">                       
                </div>                               
                <div>
                    <label>Nombre de Buque</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getVsl_nm().'">                       
                </div>                                                
                <div>
                    <label>Nombre/Numero de Vuelo</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getFghnb().'">                       
                </div>
                <div>
                    <label>Otro Medio de Transporte</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getOter_trsp_way_nm().'">                       
                </div>
                <div>
                    <label>Número de Contenedor</label>
                    <textarea readonly name="descripcion" class="textarea" >'.$tninp033->getCtnr_no().'</textarea>                           
                </div>
                <div>
                    <label>Número de Sello</label>
                    <textarea readonly name="descripcion" class="textarea" >'.$tninp033->getSeal_no().'</textarea>                           
                </div>			
			</div>
			<div class="col1">
			<div>
                    <label>País Puerto de Embarque</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getSpm_port_ntn_nm().'">                       
                </div>
			</div>
			<div class="col2">
			 <div>
                    <label>Ciudad Puerto de Embarque</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp033->getSpm_port_city_nm().'">                       
                </div> 
			</div>	
			</div>
           <div class="observaciones">
		    <h1>Observaciones</h1>
			 <div>
                    <label>Observaciones de Solicitante</label>                            
                     <textarea readonly name="descripcion" class="textarea" >'.$tninp033->getDclr_rmk().'</textarea>      
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