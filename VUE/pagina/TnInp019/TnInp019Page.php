<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp019Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp019/TnInp019PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_019($req_no){    
    $tninp019= consulta_datos_formulario_019($req_no);    
    $solicitud=$tninp019->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{    
    $producto= cargar_lista_productos_019($req_no);
    $adjunto= cargar_lista_adjuntos($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval='
            <div class="header">
                <h1>'.substr($tninp019->getDcm_no(), 0, -4).'  '.$tninp019->getDcm_nm().'</h1> 
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
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getReq_no().'">                       
                </div>                
				</div>
				<div class="col2">
				<div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getMdf_dt().'">                       
                </div>  
				</div>
				 <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getReq_city_nm().'">                       
                </div> 
			</div>
			<div class="solicitante">
                        <h1>Datos de Solicitante</h1>
			<div class="col1">
				<div>
                    <label>Clasificacion del Solicitante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_cl_cd().'">                       
                </div>                
                <div>
                    <label>Razon Social del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_nole().'">                       
                </div>
                <div>
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_prvhc_nm().'">                       
                </div>               
				</div>
				<div class="col2">
				<div>
                    <label>Número de Identificación de la Empresa Solicitante</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_idt_no().'">                       
                </div>                
                <div>
                    <label>Representante Legal de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_rpgp_nm().'">                       
                </div>
                <div>
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_cuty_nm().'">                       
                </div> 
				</div>
				<div>
                    <label>Parroquia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_prqi_nm().'">                       
                </div>
				<div class="foo">
				 <div>
                    <label>Direccion de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_ad().'">                       
                </div>
                <div>
                    <label>Nombre de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_nm().'">                                            
                </div>
				</div>
				<div class="col1">
				 <div>
                    <label>Cargo de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_odty_nm().'">                       
                </div>
                <div>
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_fax_no().'">                       
                </div>
				</div>
				<div class="col2">
				 <div>
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_tel_no().'">                       
                </div> 
                <div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getDclr_em().'">                       
                </div>   
				</div>
			</div>
			<div class="importador">
			<h1>Datos de Importador</h1>
			<div class="col1">
			 <div>
                    <label>Clasificacion del Importador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getImpr_cl_cd().'">                       
                </div>                
                <div>
                    <label>Nombre de Importador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getImpr_nm().'">                                       
                </div>                
                <div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getImpr_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
			<div>
                    <label>Número de Identificación de la Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getImpr_idt_no().'">                                             
                </div>                
                <div>
                    <label>Representante Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getImpr_rpst_nm().'">                       
                </div>               
                <div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getImpr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                   <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getImpr_prqi_nm().'">                       
                </div>
			<div class="foo">
				<div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getImpr_ad().'">                                           
                </div>   
			</div>
			<div class="col1">
				<div>
                    <label>Teléfono de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getImpr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getImpr_fax_no().'">                       
                </div>  
			</div>
			<div>
                    <label>Correo Electrónico de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getImpr_em().'">                       
                </div>
			</div>
           <div class="factura">
			<h1>Datos de Factura Comercial</h1>
			 <div>
                    <label>Número de Factura Comercial</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getInv_no().'">                       
                </div>    
			</div>
			<div class="producto">
			<h1>Datos de Producto</h1>
			 '.$producto.'
                <div>
                    <label>Cantidad Total de Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp019->getPrdt_tot_qt().'">                       
                </div>                
			</div>
          <div class="observaciones">
			<h1>Observaciones</h1>
                <div>
                    <label>Observaciones de Solicitante</label>                                            
                     <textarea readonly name="descripcion" class="textarea" >'.$tninp019->getDclr_rmk().'</textarea>      
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