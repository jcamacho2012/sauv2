<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp001Impl.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_001_004($req_no,$dcm_cd){      
    $tninp001= consulta_datos_formulario_001_004($req_no);
    $solicitud=$tninp001->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{                
   // $contenedor= cargar_lista_contenedor_001_004($req_no);
 //   $producto= cargar_lista_productos_001_004($req_no);
  //  $adjunto= cargar_lista_adjuntos($req_no);        
  //  $notificacion= cargar_lista_notificaciones($req_no);
    $retval='
         	<div class="display-2">
			<h2>130-001 Certificado Sanitario de Exportacion Consumo Humano</h2>
		</div>           
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Solicitud</h3>
                    </div>
                    <div class="panel-body">
                         <div class="row" style="padding:5px 20px;">
                            <div class="col-xs-6 form-group">
                                <label>Número de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_no" readonly value="'.$tninp001->getReq_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-6 form-group">
                                <label>Fecha de Solicitud</label>                                        
                                <input type="text" class="form-control" name="mdf_dt" readonly value="'.$tninp001->getMdf_dt().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 20px;">
                            <div class="col-xs-6 form-group">
                                <label>Ciudad de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_city_nm" readonly value="'.$tninp001->getReq_city_nm().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-6 form-group">
                                <label>Tipo de Documento</label>                                        
                                <input type="text" class="form-control" name="dcm_type_nm" readonly value="'.$tninp001->getDcm_type_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 20px;">
                            <div class="col-xs-6 form-group">
                                <label>Número de Certificado Anterior</label>                                      
                                <input type="text" class="form-control" name="prev_ctft_no" readonly value="'.$tninp001->getPrev_ctft_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-6 form-group">
                                <label>Fecha de Emisión de Certificado Anterior</label>                                        
                                <input type="text" class="form-control" name="prev_ctft_iss_de" readonly value="'.$tninp001->getPrev_ctft_iss_de().'"  />
                            </div>
                        </div>';
                   if($dcm_cd=='130-004'){
                $retval.='
                        <div class="row" style="padding:5px 20px;">
                            <div class="col-xs-6 form-group">
                                <label>Número de Autorización Previa para Productos de Prohibida Exportación</label>                                      
                                <input type="text" class="form-control" name="prev_ctft_no" readonly value="'.$tninp001->getPrdt_cl_nm() .' - '.$tninp001->getRfr_dcm_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-6 form-group">
                                <label>Número de Certificado de Calidad</label>                                        
                                <input type="text" class="form-control" name="prev_ctft_iss_de" readonly value="'.$tninp001->getQlt_ctft_no().'"  />
                            </div>
                        </div>
                    </div>
		</div>';
        }else{
                $retval.='
                            
                        <div class="col-xs-12 form-group">
                            <label>Número de Certificado de Calidad</label>                                      
                            <input type="text" class="form-control" name="prev_ctft_no" readonly value="'.$tninp001->getQlt_ctft_no().'" />                                    
                        </div>
                    </div>
		</div>';
            }
            $retval.='
                    </div>
		</div>
                     ';
 
//            $retval.='
//			
//                <div class="panel panel-primary">
//                    <div class="panel-heading">
//                        <h3>Datos de Solicitante</h3>
//                    </div>
//                    <div class="panel-body">
//                        <div class="row" style="padding:5px 20px;">
//                            <div class="col-xs-6 form-group">
//                                <label>Clasificación del Solicitante</label>                                      
//                                <input type="text" class="form-control" name="dclr_cl_cd" readonly value="'.$tninp001->getDclr_cl_cd().'" />                                    
//                            </div>
//					
//                            <div class="col-xs-1 form-group">
//                                <!-- espacio entre columnas-->
//                            </div>
//
//                            <div class="col-xs-6 form-group">
//                                <label>Número de Identificación de la Empresa Solicitante</label>                                        
//                                <input type="text" class="form-control" name="dclr_idt_no" readonly value="'.$tninp001->getDclr_idt_no().'"  />
//                            </div>
//                        </div>
//			<div class="col-xs-12 form-group">
//                            <label>Razón Social del Solicitante</label>                                        
//                            <input type="text" class="form-control" name="dclr_nole" readonly value="'.$tninp001->getDclr_nole().'"  />
//                        </div>
//			<div class="row" style="padding:5px 20px;">
//                            <div class="col-xs-6 form-group">
//                                <label>Provincia de la Empresa Solicitante</label>                                      
//                                <input type="text" class="form-control" name="dclr_prvhc_nm" readonly value="'.$tninp001->getDclr_prvhc_nm().'" />                                    
//                            </div>
//					
//                            <div class="col-xs-1 form-group">
//                                <!-- espacio entre columnas-->
//                            </div>
//
//                            <div class="col-xs-6 form-group">
//                                <label>Cantón/Ciudad de la Empresa Solicitante</label>                                        
//                                <input type="text" class="form-control" name="dclr_cuty_nm" readonly value="'.$tninp001->getDclr_cuty_nm().'"  />
//                            </div>
//                        </div>
//			<div class="col-xs-6 form-group">
//                            <label>Parroquia de la Empresa Solicitante</label>                                        
//                            <input type="text" class="form-control" name="dclr_prqi_nm" readonly value="'.$tninp001->getDclr_prqi_nm().'"  />
//                        </div>
//			<div class="col-xs-12 form-group">
//                            <label>Dirección de la Empresa Solicitante</label>                                        
//                            <input type="text" class="form-control" name="dclr_ad" readonly value="'.$tninp001->getDclr_ad().'"  />
//                        </div>
//			<div class="col-xs-12 form-group">
//                            <label>Nombre de Solicitante</label>                                        
//                            <input type="text" class="form-control" name="dclr_nm" readonly value="'.$tninp001->getDclr_nm().'"  />
//                        </div>
//			<div class="row" style="padding:5px 20px;">
//                            <div class="col-xs-6 form-group">
//                                <label>Teléfono del Solicitante</label>                                      
//                                <input type="text" class="form-control" name="dclr_tel_no" readonly value="'.$tninp001->getDclr_tel_no().'" />                                    
//                            </div>
//
//                            <div class="col-xs-1 form-group">
//                                <!-- espacio entre columnas-->
//                            </div>
//
//                            <div class="col-xs-6 form-group">
//                                <label>Fax del Solicitante</label>                                        
//                                <input type="text" class="form-control" name="dclr_fax_no" readonly value="'.$tninp001->getDclr_fax_no().'"  />
//                            </div>
//                        </div>
//			<div class="col-xs-6 form-group">
//                            <label>Correo Electrónico del Solicitante</label>                                        
//                            <input type="text" class="form-control" name="dclr_em" readonly value="'.$tninp001->getDclr_em().'"  />
//                        </div>				
//                    </div>
//		</div>';
            $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">Título del panel con estilo normal</div>
                    <div class="panel-body">
                      Contenido del panel
                    </div>
                 </div>
                    ';
          
    }
    return $retval;
    
}