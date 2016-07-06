<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp039Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp039/TnInp039PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_039($req_no,$subsanacion,$rol){    
    $tninp039= consulta_datos_formulario_039($req_no);   
    $solicitud=$tninp039->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{    
    $producto= cargar_lista_productos_039($req_no,$subsanacion,$rol);
    $adjunto= cargar_lista_adjuntos($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval='
            <div class="header">
                <h1>'.substr($tninp039->getDcm_no(), 0, -4).'  '.$tninp039->getDcm_nm().'</h1> 
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
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getReq_no().'">                       
                </div>                
				</div>
				<div class="col2">
				<div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getMdf_dt().'">                       
                </div>  
				</div>
				 <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getReq_city_nm().'">                       
                </div> 
			</div>
			<div class="solicitante">
                        <h1>Datos de Solicitante</h1>
			<div class="col1">
				<div>
                    <label>Clasificacion del Solicitante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getDclr_cl_cd().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                  <label>Número de Identificación de la Empresa Solicitante</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getDclr_idt_no().'">                       
                </div>   
			</div>
            <div>
                <label>Razon Social del Solicitante</label>
                <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getDclr_nole().'">                       
            </div>
			<div class="col1">
                <div>
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getDclr_prvhc_nm().'">                       
                </div>               
			</div>
			<div class="col2">				                            
                <div>
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getDclr_cuty_nm().'">                       
                </div> 
			</div>
				<div>
                    <label>Parroquia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getDclr_prqi_nm().'">                       
                </div>
				<div class="foo">
				 <div>
                    <label>Direccion de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getDclr_ad().'">                       
                </div>
                <div>
                    <label>Nombre de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getDclr_nm().'">                                            
                </div>
				</div>
				<div class="col1">
				 <div>
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getDclr_tel_no().'">                       
                </div>                 
				</div>
				<div class="col2">
				<div>
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getDclr_fax_no().'">                       
                </div>               
				</div>
				 <div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getDclr_em().'">                       
                </div>   
			</div>
			<div class="fabricante">
			<h1>Datos de Fabricante/Procesador</h1>
			<div class="col1">
			 <div>
                    <label>Clasificacion del Fabricante/Procesador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getExpr_cl_cd().'">                       
                </div>                              
			</div>
			<div class="col2">
			<div>
                    <label>Número de Identificación de Fabricante/Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getExpr_idt_no().'">                                             
                </div>                                                            
			</div>
			<div class="foo">
				<div>
                    <label>Nombre de Fabricante/Procesador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getExpr_nm().'">                                       
                </div>     
			</div>
			<div class="col1">
			  <div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getExpr_prvhc_nm().'">                       
                </div>                           
			</div>
			<div class="col2">
			<div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getExpr_cuty_nm().'">                       
                </div>                                                          
			</div>			                           				
			<div>
                   <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getExpr_prqi_nm().'">                       
                </div>
			<div class="foo">
				<div>
                    <label>Direccion de Fabricante/Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getExpr_ad().'">                                           
                </div>   
			</div>
			<div class="col1">
				<div>
                    <label>Teléfono de Fabricante/Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getExpr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Fabricante/Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getExpr_fax_no().'">                       
                </div>  
			</div>
			<div>
                    <label>Correo Electrónico de Fabricante/Procesador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getExpr_em().'">                       
                </div>
			</div>
           <div class="generales">
			<h1>Datos Generales</h1>
			 <div>
                    <label>Producto Certificado para Consumo</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getPrdt_cl().'">                       
                </div>    
            </div>
		<div class="producto">
						
                             '.$producto.'
		<div class="col1">
                <div>
                    <label>Cantidad Total de Paquetes de Producto</label>
                    <input type="text" name="autorizacion" readonly value="'.$tninp039->getPrdt_tot_qt().'">                       
                </div>
                </div>
                <div class="col2">
		<div>
                    <label>Peso Neto Total de Producto</label>
                    <input type="text" name="autorizacion" readonly value="'.$tninp039->getPrdt_tot_nwt().'">                       
                </div></div>                
			</div>';
              if($rol=='Receptor'){
                  $retval.='<div class="adicionales">
			<h1>Datos Adicionales</h1>
                   <div class="col1">
				<div>
                    <label>Fecha de Muestreo</label>                   
                   <input type="text" name="selected_date" id="datepicker">
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fecha Fin de Analisis</label>                    
                    <input type="text" name="fechafin">
                </div>  
			</div>
                        <div>
                    <label>Nombre de Realizador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp039->getExpr_fax_no().'">                       
                    </div>  
			</div>';
              }else if($rol=='Certificador'){
                  
              }
    $retval.='
          <div class="observaciones">
			<h1>Observaciones</h1>
                <div>
                    <label>Observaciones de Solicitante</label>                                            
                     <textarea readonly name="descripcion" class="textarea" >'.$tninp039->getDclr_rmk().'</textarea>      
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