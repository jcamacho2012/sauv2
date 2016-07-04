<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp021Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp021/TnInp021AnlsPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_021($req_no){    
    $tninp021= consulta_datos_formulario_021($req_no);
    $solicitud=$tninp021->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }
    else{
        $analisis= cargar_lista_analisis_021($req_no);
        $adjunto= cargar_lista_adjuntos($req_no);
        $notificacion= cargar_lista_notificaciones($req_no);
        $retval=' 
                <div class="header">
                <h1>'.substr($tninp021->getDcm_no(), 0, -4).'  '.$tninp021->getDcm_nm().'</h1> 
            </div>
            <div>
            <h1 id="notificacion">Mostrar Notificaciones Solicitadas</h1> 
            <div id="ntfc_tabla">               
                '.$notificacion.'                                
            </div>
            <div id="contenido">
			<div class="solicitud">
            <h1>Datos de Solicitud</h1>
			<div class="col1">
				<div>
                    <label>Número de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getReq_no().'">                       
                </div>                
                <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getReq_city_nm().'">                       
                </div>
                <div>
                    <label>Número de Certificado Anterior</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getPrev_ctft_no().'">                       
                </div>       
			</div>
			<div class="col2">
				<div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getMdf_dt().'">                       
                </div>                
                <div>
                    <label>Tipo de Documento</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDcm_type_nm().'">                       
                </div>
                <div>
                    <label>Fecha de Emisión de Certificado Anterior</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getPrev_ctft_iss_de().'">                       
                </div>    
			</div>
			</div>
			<div class="solicitante">
            <h1>Datos de Solicitante</h1>
			<div class="col1">
				<div>
                    <label>Clasificacion del Solicitante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_cl_cd().'">                       
                </div>                
                <div>
                    <label>Razon Social del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_nole().'">                       
                </div>
                <div>
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                  <label>Número de Identificación de la Empresa Solicitante</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_idt_no().'">                       
                </div>                
                <div>
                    <label>Representante Legal de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_rpgp_nm().'">                       
                </div>
                <div>
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                    <label>Parroquia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_prqi_nm().'">                       
            </div>
			<div class="foo">
				<div>
                    <label>Direccion de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_ad().'">                    
                </div>
			</div>
			<div class="col1">
				<div>
                    <label>Nombre de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_nm().'">                                            
                </div>
                <div>
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Cargo de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_odty_nm().'">                       
                </div> 
                <div>
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_fax_no().'">                       
                </div>       
			</div>
			<div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getDclr_em().'">                       
            </div>
			</div>
            <div class="importador">
            <h1>Datos de Importador</h1>
			<div class="col1">
				<div>
                    <label>Clasificacion del Importador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getImpr_cl_cd().'">                       
                </div>                
                <div>
                    <label>Nombre de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getImpr_nm().'">                                                                 
                
                </div>                
                <div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getImpr_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Número de Identificación de la Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getImpr_idt_no().'">                                             
                </div>
                <div>
                    <label>Representante Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getImpr_rpst_nm().'">                                             
                </div>                
                <div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getImpr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                    <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getImpr_prqi_nm().'">                       
            </div>
			<div class="foo">
				<div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getImpr_ad().'">                                                                
                </div>    
			</div>
			<div class="col1">
				<div>
                    <label>Teléfono de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getImpr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getImpr_fax_no().'">                       
                </div>  
			</div>
			<div>
                    <label>Correo Electrónico de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getImpr_em().'">                       
            </div>
			</div>
			 <div class="producto">
            <h1>Datos de Producto</h1>
			<div>
                    <label>Subpartida Arancelaria</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getHc().'">                       
            </div>     
			<div class="col1">
				<div>
                    <label>Nombre del Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getPrdt_nm().'">                                                                 
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fecha de Arribo de Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getPrdt_arv_de().'">                                             
                </div> 
			</div>
			<div class="foo">
				<div>
                    <label>Tipo de Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getPrdt_type_nm().'">                                                                 
                </div> 
			</div>
			<div class="col1">
				 <div>
                    <label>Forma de Presentación</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getSmt_frm_inf().'">                                                                
                </div>
                <div>
                    <label>País de Procedencia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getPdc_ntn_nm().'">                       
                </div>
                <div>
                    <label>Cantidad de Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getPrdt_qt().'">                       
                </div>                
                <div>
                    <label>Total Precio FOB</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getFobv_val_tot().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Nombre de Laboratorio Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getExpr_lbty_nm().'">                                                               
                </div>                                
                <div>
                    <label>Número de Factura Comercial</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getInv_no().'">                       
                </div>
                <div>
                    <label>Peso Neto de Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getPrdt_nwt().'">                       
                </div>                
                <div>
                    <label>Vía de Embarque</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getSpm_mtdrt_desc().'">                       
                </div>   
			</div>
			<div>
                    <label>Número de Guía</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp021->getGud_no().'">                       
            </div>
			</div>
            <div class="analisis">
            <h1>Datos de Análisis</h1>
			'.$analisis.' 
			</div>
			<div class="observaciones">
             <h1>Observaciones</h1>
				<div>
					<label>Observaciones de Solicitante</label>                         
                    <textarea readonly name="descripcion" class="textarea" >'.$tninp021->getDclr_rmk().'</textarea>      
                </div>    
			</div>
           <div class="adjuntos">
		   <h1>Documento Adjunto</h1> 
             '.$adjunto.' 
		   </div>         
                ';
    }
    return $retval;
    
}