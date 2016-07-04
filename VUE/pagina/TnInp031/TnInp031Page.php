<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp031Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_031($req_no){    
    $tninp031= consulta_datos_formulario_031($req_no);   
    $solicitud=$tninp031->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{    
    $adjunto= cargar_lista_adjuntos($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval='
             <div class="header">
                <h1>'.substr($tninp031->getDcm_no(), 0, -4).'  '.$tninp031->getDcm_nm().'</h1> 
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
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getReq_no().'">                       
                </div>                
                <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getReq_city_nm().'">                       
                </div>   
            </div>               
            <div class="col2">
				<div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getMdf_dt().'">                       
                </div>                
                <div>
                    <label>Número de Solicitud de Certificado Sanitario de Exportación</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExp_sty_ctft_req_no().'">                       
                </div>                      
            </div>
			<div class="foo">
				<div>
                    <label>Número de Certificado de Calidad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getQlt_ctft_no().'">                       
                </div>  
			</div>
			</div>
			<div class="solicitante">
            <h1>Datos de Solicitante</h1>
			<div class="col1">
				<div>
                    <label>Clasificacion del Solicitante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_cl_cd().'">                       
                </div>   
			</div>
			<div class="col2">
				<div>
                    <label>Número de Identificación de la Empresa Solicitante</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_idt_no().'">                       
                </div> 
			</div>
			 <div>
                    <label>Razon Social del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_nole().'">                       
              </div>
			 <div class="col1">
				<div>
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_prvhc_nm().'">                       
                </div>  
			</div>
			<div class="col2">
				<div>
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                    <label>Parroquia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_prqi_nm().'">                       
            </div>
			<div class="foo">
				 <div>
                    <label>Direccion de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_ad().'">                                                                
                </div>
                <div>
                    <label>Nombre de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_nm().'">                                            
                </div>
                <div>
                    <label>Representante Legal de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_rpgp_nm().'">                                            
                </div>
			</div>
			<div class="col1">
				<div>
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_fax_no().'">                       
                </div> 
			</div>
			<div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getDclr_em().'">                       
            </div>
			</div>
			<div class="exportador">
            <h1>Datos de Exportador</h1>
			<div class="col1">
				<div>
                    <label>Clasificacion del Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExpr_cl_cd().'">                       
                </div>  
			</div>
			<div class="col2">
				<div>
                    <label>Número de Identificación de la Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExpr_idt_no().'">                                             
                </div> 
			</div>
			<div class="foo">
			 <div>
                    <label>Nombre de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExpr_nm().'">                                            
                </div>  
			</div>
			<div class="col1">
				<div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExpr_prvhc_nm().'">                       
                </div>  
			</div>
			<div class="col2">
				<div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExpr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                    <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExpr_prqi_nm().'">                       
            </div>
			<div class="foo">
			 <div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExpr_ad().'">                                                                
             </div> 
			</div>
			<div class="col1">
				 <div>
                    <label>Teléfono de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExpr_tel_no().'">                       
                </div>
                <div>
                    <label>Correo Electrónico de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExpr_em().'">                       
                </div>
			</div>
			<div class="col2">
				 <div>
                    <label>Fax de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExpr_fax_no().'">                       
                </div>
                <div>
                    <label>Número de Autorización de Establecimiento</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getExpr_autho().'">                       
                </div>  
			</div>			
			</div>
			<div class="importador">
            <h1>Datos de Importador</h1>
			<div class="foo">
				<div>
                    <label>Nombre del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getImpr_nm().'">                       
                </div> 
			</div>
			<div class="col1">
				<div>
                    <label>País del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getImpr_ntn_nm().'">                       
                </div> 
			</div>
			<div class="col2">
				<div>
                    <label>Ciudad Importador</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getImpr_city_nm().'">                       
                </div> 
			</div>
			<div class="foo">
				 <div>
                    <label>Dirección del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getImpr_ad().'">                                                                
                </div>
			</div>
			<div class="col1">
				 <div>
                    <label>Teléfono del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getImpr_tel_no().'">                       
                </div> 
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getImpr_fax_no().'">                       
                </div>  
			</div>
			<div>
                    <label>Correo Electrónico de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getImpr_em().'">                       
            </div>
			</div>
			<div class="importador">
            <h1>Datos Generales</h1>
			<div>
                    <label>Número de Factura Comercial</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp031->getInv_no().'">                       
            </div>  
			</div>
			<div class="observaciones">
            <h1>Observaciones</h1>
			<div>
                    <label>Observaciones de Solicitante</label>                          
                     <textarea readonly name="descripcion" class="textarea" >'.$tninp031->getDclr_rmk().'</textarea>      
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