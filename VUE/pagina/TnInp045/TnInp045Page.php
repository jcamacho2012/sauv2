<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp045Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_045($req_no){  
    
    $tninp045=  consulta_datos_formulario_045($req_no); 
    $solicitud=$tninp045->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{    
    $adjuntos= cargar_lista_adjuntos_045($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval='             
            <div class="header">
                <h1>'.substr($tninp045->getDcm_no(), 0, -4).'  '.$tninp045->getDcm_nm().'</h1> 
            </div>
            <div>
            <h1 id="notificacion">Mostrar Notificaciones Solicitadas</h1> 
            <div id="ntfc_tabla">               
                '.$notificacion.'                                
            </div>                     
            <div class="solicitud">
            <h1>Datos de Solicitud
            </h1>
            <div class="col1">
                <div>
                    <label>Número de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getReq_no().'">                       
                </div>                
                <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getReq_city_nm().'">                       
                </div>
            </div>               
            <div class="col2">
                <div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getMdf_dt().'">                       
                </div>                
                <div>
                    <label>Número de Solicitud de Certificado Sanitario de Exportación</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getExp_sty_ctft_req_no().'">                       
                </div>                
            </div>
                <div class="foo">
                    <label>Número de Certificado de Calidad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getQlt_ctft_no().'">                       
                </div>                
            </div>                      
            <div class="solicitante">
               <h1>Datos de Solicitante
            </h1>
                <div class="col1">
                    <label>Clasificacion del Solicitante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_cl_cd().'">                       
                </div>
                <div class="col2">
                    <label>Número de Identificación de la Empresa Solicitante</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_idt_no().'">                       
                </div> 
                <div >
                    <label>Razon Social del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_nole().'">                       
                </div>
                <div>
                    <label>Representante Legal de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_rpgp_nm().'">                       
                </div>
                <div class="col1">
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_prvhc_nm().'">                       
                </div>
                <div class="col2">
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_cuty_nm().'">                       
                </div>
                <div>
                    <label>Parroquia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_prqi_nm().'">                       
                </div>
                <div class="foo">
                    <label>Direccion de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_ad().'">                    
                </div>
                <div class="foo">
                    <label>Nombre de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_nm().'">                                            
                </div>                
                <div class="col1">
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_tel_no().'">                       
                </div>
                 <div class="col2" >
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_fax_no().'">                       
                </div> 
                <div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getDclr_em().'">                       
                </div>                                                                                         
            </div>                      
            <div class="exportador">
               <h1>Datos de Exportador
            </h1>
                <div class="col1">
                    <label>Clasificacion del Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getExpr_cl_cd().'">                       
                </div>
                 <div class="col2">
                    <label>Número de Identificación de la Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getExpr_idt_no().'">                                             
                </div>  
                <div>
                    <label>Nombre de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getExpr_nm().'">                                            
                </div>                
                <div class="col1">
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getExpr_prvhc_nm().'">                       
                </div>
                <div class="col2">
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getExpr_cuty_nm().'">                       
                </div>
                <div>
                    <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getExpr_prqi_nm().'">                       
                </div>
                <div class="foo">
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getExpr_ad().'">                                           
                </div>                
                <div class="col1">
                    <label>Teléfono de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getExpr_tel_no().'">                       
                </div>
                <div class="col2">
                    <label>Fax de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getExpr_fax_no().'">                       
                </div>  
                <div>
                    <label>Correo Electrónico de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getExpr_em().'">                       
                </div>                                                                                                                                    
            </div>                      
            <div class="general">
               <h1>Datos Generales
            </h1>
                <div class="col1">
                    <label>Número de Factura Comercial</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getInv_no().'">                       
                </div>
                 <div class="col2">
                    <label>Número de Establecimiento</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp045->getEstbl_no().'">                                             
                </div>  
            </div>                         
            <div class="observaciones">
                <h1>Observaciones
                </h1>
                <div>
                    <label>Observaciones de Solicitante</label>            
                </div>
                <div class="foo">
                     <textarea readonly name="descripcion" class="textarea" >'.$tninp045->getDclr_rmk().'</textarea>      
                </div>                                
            </div>            
            <div class="adjunto">
                <h1>Documento Adjunto
                '.$adjuntos.'
                </h1> 
                
            </div>';
    }
    return $retval;
    
}