<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp016Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_016($req_no){    
    $tninp016= consulta_datos_formulario_016($req_no);   
    $solicitud=$tninp016->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>'." - ".  var_dump($tninp016);
    }else{        
    $adjunto= cargar_lista_adjuntos($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval='
            <div class="header">
                <h1>'.substr($tninp016->getDcm_no(), 0, -4).'  '.$tninp016->getDcm_nm().'</h1> 
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
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getReq_no().'">                       
					</div>                
					<div>
						<label>Ciudad de Solicitud</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getReq_city_nm().'">                       
					</div>
					<div>
						<label>Número de Certificado Anterior</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getPrev_ctft_no().'">                       
					</div>      
				</div>
				<div class="col2">
					<div>
						<label>Fecha de Solicitud</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getMdf_dt().'">                       
					</div>                
					<div>
						<label>Tipo de Documento</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDcm_type_nm().'">                       
					</div>
					<div>
						<label>Fecha de Emisión de Certificado Anterior</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getPrev_ctft_iss_de().'">                       
					</div>     
				</div>
			</div>
			<div class="solicitante">
				<h1>Datos de Solicitante</h1>
				<div class="col1">
					<div>
						<label>Clasificacion del Solicitante</label>
						 <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_cl_cd().'">                       
					</div>                
					<div>
						<label>Razon Social del Solicitante</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_nole().'">                       
					</div>
					<div>
						<label>Provincia de la Empresa Solicitante</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_prvhc_nm().'">                       
					</div>
				</div>
				<div class="col2">
					<div>
						<label>Número de Identificación de la Empresa Solicitante</label>
					  <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_idt_no().'">                       
					</div>                
					<div>
						<label>Representante Legal de Solicitante</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_rpgp_nm().'">                       
					</div>
					<div>
						<label>Canton/Ciudad de la Empresa Solicitante</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_cuty_nm().'">                       
					</div>
				</div>
				<div>
                    <label>Parroquia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_prqi_nm().'">                       
                </div>
				<div class="foo">
					<div>
						<label>Direccion de la Empresa Solicitante</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_ad().'">                                            						
					</div>
					<div>
						<label>Nombre de Solicitante</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_nm().'">                                            
					</div>
				</div>
				<div class="col1">
					<div>
						<label>Cargo de Solicitante</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_odty_nm().'">                       
					</div>
					<div>
						<label>Fax de Solicitante</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_fax_no().'">                       
					</div>
				</div>
				<div class="col2">
					<div>
						<label>Teléfono de Solicitante</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_tel_no().'">                       
					</div> 
					<div>
						<label>Correo Electrónico de Solicitante</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getDclr_em().'">                       
					</div>  
				</div>
			</div>
			<div class="importador">
				<h1>Datos de Importador</h1>
				<div class="col1">
					<div>
						<label>Código de Clasificacion del Importador</label>
						 <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getImpr_cl_cd().'">                       
					</div>
				</div>
				<div class="col2">
					<div>
						<label>Número de Identificación de la Importador</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getImpr_idt_no().'">                                             
					</div>					
				</div>
				<div class="foo">
					<div>
						<label>Nombre de Importador</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getImpr_nm().'">                                             						
					</div>        				
				</div>
				<div class="col1">
					<div>
						<label>Provincia</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getImpr_prvhc_nm().'">                       
					</div>
				</div>
				<div class="col2">
					 <div>
						<label>Canton/Ciudad</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getImpr_cuty_nm().'">                       
					</div>				
				</div>
				<div>
					<label>Parroquia</label>
					<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getImpr_prqi_nm().'">                       
				</div>
				<div class="foo">
					<div>
						<label>Direccion</label>
                                                <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getImpr_ad().'">                       
					</div>      				
				</div>
				<div class="col1">
					<div>
						<label>Teléfono de Importador</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getImpr_tel_no().'">                       
					</div>
				</div>
				<div class="col2">
					<div>
						<label>Fax de Importador</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getImpr_fax_no().'">                       
					</div>                			
				</div>
				<div>
                    <label>Correo Electrónico de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getImpr_em().'">                       
                </div>
			</div>
			<div class="exportador">
				<h1>Datos de Exportador</h1>
				<div class="col1">
					<div>
						<label>Clasificacion del Exportador</label>
						 <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getMfr_cl_cd().'">                       
					</div> 
				</div>
				<div class="col2">
					<div>
						<label>Número de Identificación de la Exportador</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getMfr_idt_no().'">                                             
					</div>              			
				</div>
				<div class="foo">
					<div>
						 <label>Nombre del Exportador</label>
                                                 <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getMfr_nm().'">                       
					</div>
					<div>
						 <label>Representante Legal de Exportador</label>
                                                 <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getMfr_rpgp_nm().'">                       						 
					</div> 
				</div>
				<div class="col1">
					<div>
						<label>País del Exportador</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getMfr_ntn_nm().'">                       
					</div>
				</div>
				<div class="col2">
					<div>
						<label>Ciudad del Exportador</label>
						<input type="text" name="autorizacion"/ readonly value="'.$tninp016->getMfr_city_nm().'">                       
					</div>             			
				</div>
				<div class="foo">
					<div>
						<label>Dirección del Exportador</label>
                                                <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getMfr_ad().'">                       						
					</div>				
				</div>
				<div class="col1">
					<div>
                    <label>Teléfono del Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getMfr_tel_no().'">                       
					</div>  
				</div>
				<div class="col2">
					<div>
                    <label>Fax de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getMfr_fax_no().'">                       
                </div>  
				</div>
				 <div>
                    <label>Correo Electrónico de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getMfr_em().'">                       
                </div>
			</div>
			<div class="producto">
				<h1>Datos de Producto</h1>
				<div class="col1">
					<div>
                    <label>Producto Nacional</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getNatn_prdt_nm().'">
                </div>   
				</div>
				<div class="col2">
					<div>
                    <label>Nombre del Producto</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getPrdt_nm().'">                       
					</div> 
				</div>
				<div>
                    <label>Subpartida Arancelaria</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getHc().'">                       
                </div> 
				<div class="col1">
					 <div>
                    <label>Cantidad de Muestra</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp01661." ".$tninp016->getSamp_qt().'">                       
					</div> 
				</div>
				<div class="col2">
					 <div>
                    <label>Forma de Presentación de Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getPrdt_smt_frm_inf().'">                                           
					</div> 
				</div>
				<div>
                    <label>Cantidad de Producto</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getPrdt_qt().'">                       
                </div>
				<div class="foo">
					<div>
                    <label>Número de Lote</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getLot_no().'">                       
					</div>			
				</div>
				<div class="col1">
					 <div>
                    <label>Tiempo de Validez de Producto</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getPrdt_vdt_term().'">                       
					</div> 
				</div>
				<div class="col2">
					 <div>
                    <label>Nombre Comercial</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getCmca_nm().'">                       
					</div>  
				</div>
				<div class="foo">
					<div>
                    <label>Nombre y Dirección de la Empresa Comercializador</label>
                    <textarea readonly name="descripcion" class="textarea" >'.$tninp016->getIgdt_con().'</textarea>      
					</div>
					<div>
                    <label>Nombre Común y/o Genérico de Ingredientes</label>
                    <textarea readonly name="descripcion" class="textarea" >'.$tninp016->getAtvi_con().'</textarea>      
					</div>                
					<div>
                    <label>Composición Declarada</label>
                    <textarea readonly name="descripcion" class="textarea" >'.$tninp016->getDcd_cps_inf().'</textarea>      
					</div>		
				</div>
				<div class="col1">
					  <div>
                    <label>Nombre de País de Procedencia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getOrg_ntn_nm().'">                       
					</div>
					<div>
                    <label>Clasificación Terapéutica de Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getPrdt_cl_nm().'">                       
					</div>					
				</div>
				<div class="col2">
					<div>            
                    <label>Certificado Sanitario de Libre Venta en el País de Origen</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getOrg_sale_free_sty_no().'">                                            
					</div>         
					<div>            
                    <label>Vía de Administración</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getAdmt_mtdrt_desc().'">                                           
					</div>                					      
					</div>
                      <div class="foo">      
                        <div>
                    <label>Usos Autorizados</label>                    
                        <textarea readonly name="descripcion" class="textarea" >'.$tninp016->getAtzd_use().'</textarea>      
					</div>
                      </div>
					<div>
                    <label>Forma Farmacéutica</label>
                     <textarea readonly name="descripcion" class="textarea" >'.$tninp016->getPam_frm_desc().'</textarea>      
					</div>
                                        <div class="col1">   
                                        <div>            
                    <label>Tipo de Formulación</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getFml_type_inf().'">                                            
					</div></div>
                                        <div class="col2">   
					<div>            
                    <label>Nivel Toxicológico</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp016->getToxi_lvl_det().'">                                            
					</div></div>
			</div>
                        <div class="observaciones1">
			 <h1>Observaciones</h1> 
                         <div>
                             <label>Observaciones del solicitante</label>
                            <textarea readonly name="descripcion" class="textarea" >'.$tninp016->getDclr_rmk().'</textarea>      
                         </div>
			</div>
			<div class="adjunto1">
			 <h1>Documento Adjunto</h1> 
                 '.$adjunto.'  
			</div>                
                ';
    }
    return $retval;
    
}