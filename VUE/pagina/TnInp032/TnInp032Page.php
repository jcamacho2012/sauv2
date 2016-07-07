<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp032Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
//require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_032($req_no){    
    $tninp032= consulta_datos_formulario_032($req_no);  
    $solicitud= $tninp032->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{    
    $adjunto= cargar_lista_adjuntos($req_no);
    //$notificacion= cargar_lista_notificaciones($req_no);
    $retval='  <div class="header">
                <h1>'.substr($tninp032->getDcm_no(), 0, -4).'  '.$tninp032->getDcm_nm().'</h1> 
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
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getReq_no().'">                       
                </div>                
                <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getReq_city_nm().'">                       
                </div>                
			</div>
			<div class="col2">
				<div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getMdf_dt().'">                       
                </div>                
                <div>
                    <label>Número de Solicitud de Certificado Sanitario de Exportación</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getExp_sty_ctft_req_no().'">                       
                </div>                
			</div>
			</div>
			<div class="solicitante">
               <h1>Datos de Solicitante</h1>
			   <div class="col1">
				<div>
                    <label>Clasificacion del Solicitante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_cl_cd().'">                       
                </div>                
			   </div>
			   <div class="col2">
				<div>
                    <label>Número de Identificación de la Empresa Solicitante</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_idt_no().'">                       
                </div> 
			   </div>
			   <div>
                    <label>Razon Social del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_nole().'">                       
               </div>
			   <div class="col1">
			    <div>
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_prvhc_nm().'">                       
                </div>
			   </div>
			   <div class="col2">
			    <div>
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_cuty_nm().'">                       
                </div>
			   </div>
			   <div>
                    <label>Parroquia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_prqi_nm().'">                       
                </div>
			   <div class="foo">
			   <div>
                    <label>Direccion de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_ad().'">                                          
                </div>
                <div>
                    <label>Nombre de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_nm().'">                                            
                </div>
                <div>
                    <label>Representante Legal de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_rpgp_nm().'">                                            
                </div>
			   </div>
			   <div class="col1">
			   <div>
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_tel_no().'">                       
                </div>
			   </div>
			   <div class="col2">
			   <div>
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_fax_no().'">                       
                </div>  
			   </div>
			   <div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getDclr_em().'">                       
                </div>
			</div>
			<div class="exportador">
               <h1>Datos de Exportador</h1>
			    <div class="col1">
				 <div>
                    <label>Clasificacion del Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getExpr_cl_cd().'">                       
                </div> 
				</div>
				<div class="col2">
				<div>
                    <label>Número de Identificación de la Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getExpr_idt_no().'">                                             
                </div>
				</div>
				<div class="foo">
				<div>
                    <label>Nombre de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getExpr_nm().'">                                            
                </div>  
				</div>
				<div class="col1">
				<div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getExpr_prvhc_nm().'">                       
                </div>
				</div>
				<div class="col2">
				 <div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getExpr_cuty_nm().'">                       
                </div>
				</div>
				<div>
                    <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getExpr_prqi_nm().'">                       
                </div>
				<div class="foo">
				 <div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getExpr_ad().'">                                           
                </div> 
				</div>
			   <div class="col1">
			    <div>
                    <label>Teléfono de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getExpr_tel_no().'">                       
                </div>
				</div>
				<div class="col2">
				<div>
                    <label>Fax de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getExpr_fax_no().'">                       
                </div>  
				</div>
				 <div>
                    <label>Correo Electrónico de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getExpr_em().'">                       
                </div>
			</div>
			<div class="importador">
               <h1>Datos de Importador</h1>
			    <div class="foo">
				<div>
                    <label>Nombre del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getImpr_nm().'">                       
                </div>
				</div>
				<div class="col1">
				 <div>
                    <label>País del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getImpr_ntn_nm().'">                       
                </div>
				</div>
				<div class="col2">
				<div>
                    <label>Ciudad Importador</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getImpr_city_nm().'">                       
                </div>  
				</div>
				<div class="foo">
				<div>
                    <label>Dirección del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getImpr_ad().'">                                           
                </div>
				</div>
				<div class="col1">
				  <div>
                    <label>Teléfono del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getImpr_tel_no().'">                       
                </div>    
				</div>
				<div class="col2">
				<div>
                    <label>Fax de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getImpr_fax_no().'">                       
                </div>    
				</div>
				<div>
                    <label>Correo Electrónico de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getImpr_em().'">                       
                </div>
			</div>
           <div class="fabricante">
               <h1>Datos de Fabricante</h1>
			   <div class="col1">
			    <div>
                    <label>Clasificacion del Fabricante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_cl_cd().'">                       
                </div>   
			   </div>
			   <div class="col2">
			   <div>
                    <label>Número de Identificación de Fabricante</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_idt_no().'">                       
                </div> 
			   </div>
			   <div class="foo">
			    <div>
                    <label>Nombre de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_nm().'">                                            
                </div>
			   </div>
			     <div>
                    <label>Número de Autorización de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_atr_no().'">                                            
                </div>
			   <div class="foo">
			    <div> 
                    <label>Representante Legal de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_rpgp_nm().'">                       
                </div>
			   </div>
			   <div class="col1">
			    <div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_prvhc_nm().'">                       
                </div>
			   </div>
			   <div class="col2">
			    <div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_cuty_nm().'">                       
                </div>
			   </div>
			    <div>
                    <label>Parroquia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_prqi_nm().'">                       
                </div>
			   <div class="foo">
			    <div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_ad().'">                                           
                </div>  
			   </div>
			   <div class="col1">
			    <div>
                    <label>Teléfono</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_tel_no().'">                       
                </div>
			   </div>
			   <div class="col2">
			   <div>
                    <label>Fax de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_fax_no().'">                       
                </div>   
			   </div>
			   <div>
                    <label>Correo Electrónico de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPcs_em().'">                       
                </div>
			</div>
			<div class="generales">
               <h1>Datos Generales</h1>
			   <div>
                    <label>Número de Certificado de Calidad</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getQlt_ctft_no().'">                       
                </div>
				 <div class="col1">
				 <div>
                    <label>Número de Certificado Sanitario</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getFht_crtfc_no().'">                       
                </div>
				 </div>
				 <div class="col2">
				  <div>
                    <label>Número de Factura Comercial</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getInv_no().'">                       
                </div>  
				 </div>
				 <div class="foo">
				  <div>
                    <label>Detalle del Certificado</label>
                    <textarea readonly name="descripcion" class="textarea" >'.$tninp032->getCtft_det().'</textarea>                           
                </div>  
				 </div>
				  <div>
                    <label>Resultado del Analisis de Antioxidante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getAtxd_stdy_rst_nm().'">                       
                </div> 
                <div>
                    <label>Tipo de Producto</label>                
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPrdt_type_nm().'">                       
                </div>
				 <div class="foo">
				  <div>
                    <label>Marca de Producto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPrdt_bdmn().'">                       
                </div>  
				 </div>
				 <div class="col1">
				 <div>
                    <label>Acido tiobarbiturico (TBA) expresado en mg/Kg. max 5%</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPrdt_acido().'">                       
                </div>
                <div>
                    <label>Indice de Peróxido meq de Oxígeno /Kg. max 10%</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPrdt_acidez().'">                       
                </div>
				 </div>
				 <div class="col2">
				 <div>
                    <label>Acidez expresado como ácido Oleico mg/Kg. max 5%</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPrdt_perox_index().'">                       
                </div>
                <div>
                    <label>Humedad max 1%</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp032->getPrdt_humedad().'">                       
                </div> 
				 </div>
                                 <div class="foo">
                                 <label>Tipo de Análisis</label><br>                                                                 
                                 ';
                    if($tninp032->getAnls_type_cd_01()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checklabel">Aspergillus sp</p>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checklabel">Aspergillus</p>';}
                    if($tninp032->getAnls_type_cd_02()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checklabel">Salmonella</p>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checklabel">Salmonella</p>';}
                    if($tninp032->getAnls_type_cd_03()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checklabel">Shiguella</p>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checklabel">Shiguella</p>';}
                    if($tninp032->getAnls_type_cd_04()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checklabel">Coliformes</p>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checklabel">Coliformes</p>';}
                    if($tninp032->getAnls_type_cd_05()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checklabel">Parasitos</p>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checklabel">Parasitos</p>';}
                    if($tninp032->getAnls_type_cd_06()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checklabel">Clostridios</p>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checklabel">Clostridios</p>';}
            $retval.='
                                 </div>
			</div>
                        <div class="foo">
                         <label>Tipo de Requisito</label><br> 
                         <div id="producto">
                         <div style="width:1300px;">
                        ';
                    if($tninp032->getNcdt_type_cd_01()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_01().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_01().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_02()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_02().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_02().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_03()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_03().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_03().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_04()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_04().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_04().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_05()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_05().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_05().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_06()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_06().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_06().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_07()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_07().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_07().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_08()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_08().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_08().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_09()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_09().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_09().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_10()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_10().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_10().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_11()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_11().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_11().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_12()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_12().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_12().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_13()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_13().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_13().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_14()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_14().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_14().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_15()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_15().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_15().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_16()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_16().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_16().'</p><br>';}
                    if($tninp032->getNcdt_type_cd_17()=="true"){$retval.='<input type="checkbox" onclick="return false" checked /><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_17().'</p><br>';}
                    else{$retval.='<input type="checkbox" onclick="return false"/><p class="checkrequisito">'.$tninp032->getNcdt_type_nm_17().'</p><br>';}
                    
            $retval.='
                        </div></div>
                        </div>
            <div class="observaciones">
               <h1>Observaciones</h1>
			    <div>
                    <label>Observaciones de Solicitante</label>                            
                     <textarea readonly name="descripcion" class="textarea" >'.$tninp032->getDclr_rmk().'</textarea>      
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