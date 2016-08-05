<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp044Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp044/TnInp044AnlsPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_044($req_no,$process,$activity,$cedula,$rol,$username){    
    $tninp044= consulta_datos_formulario_044($req_no); 
    $solicitud=$tninp044->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{
    $analisis= cargar_lista_analisis_044($req_no);
    $adjunto= cargar_lista_adjuntos($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
     $retval.= '
            <script>
            $(document).ready(function() {
                $("#recepcion").datepicker({
                    format: "yyyy/mm/dd",
                    language: "es",
                    autoclose: true
                });                                           
            });
            </script>';
            
    $retval.='
            <div class="display-2">
                <h2 align="center">'.substr($tninp044->getDcm_no(), 0, -4).'  '.$tninp044->getDcm_nm().'</h2>
            </div> 
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">
                      <a data-toggle="collapse" href="#collapse1">Mostrar Notificaciones Solicitadas</a>
                    </h3>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                        '.$notificacion.'
                    </div>        
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Solicitud</h3>
                </div>
                <div class="panel-body">
                     <div class="hidden" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">                                   
                                <input type="text" class="form-control"  id="process" readonly value="'.$process.'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">                                     
                                <input type="text" class="form-control"  id="activity" readonly value="'.$activity.'"  />
                            </div>
                         </div>
                          <div class="hidden" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">                                   
                                <input type="text" class="form-control"  id="cedula" readonly value="'.$cedula.'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <input type="text" class="form-control"  id="rol" readonly value="'.$rol.'" /> 
                            </div>

                            <div class="col-xs-5 form-group">                                     
                                <input type="text" class="form-control"  id="username" readonly value="'.$username.'"  />
                            </div>
                         </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Número de Solicitud</label>                                      
                            <input type="text" class="form-control" name="req_no" id="req_no" readonly value="'.$tninp044->getReq_no().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Fecha de Solicitud</label>                                        
                            <input type="text" class="form-control" name="mdf_dt" readonly value="'.$tninp044->getMdf_dt().'"  />
                        </div>
                    </div>                                             
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Ciudad de Solicitud</label>                                      
                            <input type="text" class="form-control" name="req_city_nm" readonly value="'.$tninp044->getReq_city_nm().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Número de Autorización Previa para Productos de Prohibida Exportación</label>                                      
                            <input type="text" class="form-control" name="rfr_dcm_no" readonly value="'.$tninp044->getRfr_dcm_no().'" />                                    
                        </div>
                    </div>							
                </div>
            </div>';
 
    $retval.='	
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Solicitante</h3>
                </div>
                <div class="panel-body">
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Clasificación del Solicitante</label>                                      
                            <input type="text" class="form-control" name="dclr_cl_cd" readonly value="'.$tninp044->getDclr_cl_cd().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Número de Identificación de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_idt_no" readonly value="'.$tninp044->getDclr_idt_no().'"  />
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Razón Social del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_nole" readonly value="'.$tninp044->getDclr_nole().'"  />
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Representante Legal de Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_rpgp_nm" readonly value="'.$tninp044->getDclr_rpgp_nm().'"  />
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Provincia de la Empresa Solicitante</label>                                      
                            <input type="text" class="form-control" name="dclr_prvhc_nm" readonly value="'.$tninp044->getDclr_prvhc_nm().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Cantón/Ciudad de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_cuty_nm" readonly value="'.$tninp044->getDclr_cuty_nm().'"  />
                        </div>
                    </div>
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Parroquia de la Empresa Solicitante</label>                                        
                        <input type="text" class="form-control" name="dclr_prqi_nm" readonly value="'.$tninp044->getDclr_prqi_nm().'"  />
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Dirección de la Empresa Solicitante</label>                                        
                        <input type="text" class="form-control" name="dclr_ad" readonly value="'.$tninp044->getDclr_ad().'"  />
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Nombre de Solicitante</label>                                        
                        <input type="text" class="form-control" name="dclr_nm" readonly value="'.$tninp044->getDclr_nm().'"  />
                    </div>						                      						
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Teléfono del Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_tel_no" readonly value="'.$tninp044->getDclr_tel_no().'"  />
                        </div>                            

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Fax del Solicitante</label>                                      
                            <input type="text" class="form-control" name="dclr_fax_no" readonly value="'.$tninp044->getDclr_fax_no().'" />                                    
                        </div>                            
                    </div>
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Correo Electrónico del Solicitante</label>                                        
                        <input type="text" class="form-control" name="dclr_em" readonly value="'.$tninp044->getDclr_em().'"  />
                    </div>						
                </div>
            </div>';				            
				
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Exportador</h3>
                </div>
                <div class="panel-body">						
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Clasificación del Exportador</label>                                      
                            <input type="text" class="form-control" name="expr_cl_cd" readonly value="'.$tninp044->getExpr_cl_cd().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Número de Identificación del Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_idt_no" readonly value="'.$tninp044->getExpr_idt_no().'"  />
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Nombre del Exportador</label>                                      
                            <input type="text" class="form-control" name="expr_nm" readonly value="'.$tninp044->getExpr_nm().'" />                                    
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Provincia</label>                                      
                            <input type="text" class="form-control" name="expr_prvhc_nm" readonly value="'.$tninp044->getExpr_prvhc_nm().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Cantón/Ciudad</label>                                        
                            <input type="text" class="form-control" name="expr_cuty_nm" readonly value="'.$tninp044->getExpr_cuty_nm().'"  />
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">						
                        <div class="col-xs-5 form-group">
                            <label>Parroquia</label>                                        
                            <input type="text" class="form-control" name="expr_prqi_nm" readonly value="'.$tninp044->getExpr_prqi_nm().'"  />
                        </div>
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">						
                        <div class="col-xs-11 form-group">
                            <label>Dirección</label>                                        
                            <input type="text" class="form-control" name="expr_ad" readonly value="'.$tninp044->getExpr_ad().'"  />
                        </div>
                    </div>						
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Teléfono del Exportador</label>                                      
                            <input type="text" class="form-control" name="expr_tel_no" readonly value="'.$tninp044->getExpr_tel_no().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Fax del Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_fax_no" readonly value="'.$tninp044->getExpr_fax_no().'"  />
                        </div>
                    </div>
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Exportador</label>                                        
                            <input type="text" class="form-control" name="expr_em" readonly value="'.$tninp044->getExpr_em().'"  />
                    </div>													
                </div>
            </div>';
				
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Importador</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Nombre de Importador</label>                                        
                        <input type="text" class="form-control" name="impr_nm" readonly value="'.$tninp044->getImpr_nm().'"  />
                                            </div>
                                            <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>País del Importador</label>                                      
                            <input type="text" class="form-control" name="impr_ntn_nm" readonly value="'.$tninp044->getImpr_ntn_nm().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Ciudad del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_city_nm" readonly value="'.$tninp044->getImpr_city_nm().'"  />
                        </div>
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Dirección del Importador</label>                                        
                        <input type="text" class="form-control" name="impr_ad" readonly value="'.$tninp044->getImpr_ad().'"  />
                                            </div>
                                            <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Teléfono del Importador</label>                                      
                            <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp044->getImpr_tel_no().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Fax del Importador</label>                                        
                            <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp044->getImpr_fax_no().'"  />
                        </div>
                    </div>
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Correo Electrónico del Importador</label>                                        
                        <input type="text" class="form-control" name="impr_em" readonly value="'.$tninp044->getImpr_em().'"  />
                    </div>
                </div>
            </div>';

	
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos Generales</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Número de Factura Comercial</label>                                        
                        <input type="text" class="form-control" name="inv_no" readonly value="'.$tninp044->getInv_no().'"  />
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Zona de Laboratorio</label>                                        
                        <input type="text" class="form-control" name="lbty_zne_nm" readonly value="'.$tninp044->getLbty_zne_nm().'"  />
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Dirección del Laboratorio</label>                                        
                        <input type="text" class="form-control" name="lbty_ad" readonly value="'.$tninp044->getLbty_ad().'"  />
                    </div>
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Código del Laboratorio</label>                                        
                        <input type="text" class="form-control" name="lbty_cd" readonly value="'.$tninp044->getLbty_cd().'"  />
                    </div>																											
                </div>
            </div>';	

    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Producto</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Subpartida Arancelaria</label>                                        
                        <input type="text" class="form-control" name="inv_no" readonly value="'.$tninp044->getHc().'"  />
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Código de Tanque</label>                                      
                            <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp044->getTnk_cd().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Código de Muestra LAB-EPA</label>                                        
                            <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp044->getLot_cd().'"  />
                        </div>
                    </div>
                    <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                        <label>Unidad de Cultivo</label>                                        
                        <input type="text" class="form-control" name="inv_no" readonly value="'.$tninp044->getCltr_ut_nm().'"  />
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Forma de Presentación</label>                                        
                        <input type="text" class="form-control" name="lbty_zne_nm" readonly value="'.$tninp044->getSmt_frm_nm().'"  />
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Nombre de Especie</label>                                        
                        <input type="text" class="form-control" name="lbty_ad" readonly value="'.$tninp044->getSpc_nm().'"  />
                    </div>
                    <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                        <label>Trazabilidad de Reproductor</label>                                        
                        <input type="text" class="form-control" name="lbty_cd" readonly value="'.$tninp044->getRpdt_rgm_nm().'"  />
                    </div>
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Nombre de País de Destino</label>                                      
                            <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp044->getDst_ntn_nm().'" />                                    
                        </div>
                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>
                        <div class="col-xs-5 form-group">
                            <label>Peso Neto</label>                                        
                            <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp044->getPrdt_nwt()." ".$tninp044->getNwt_ut().'" />
                        </div>
                    </div>	
                    <div class="row" style="padding:5px 0 0 30px;">
                        <div class="col-xs-5 form-group">
                            <label>Cantidad de Cartones</label>                                      
                            <input type="text" class="form-control" name="impr_tel_no" readonly value="'.$tninp044->getPck_qt()." ".$tninp044->getPck_ut().'" />                                    
                        </div>

                        <div class="col-xs-1 form-group">
                            <!-- espacio entre columnas-->
                        </div>

                        <div class="col-xs-5 form-group">
                            <label>Cantidad de Exportación</label>                                        
                            <input type="text" class="form-control" name="impr_fax_no" readonly value="'.$tninp044->getExp_qt()." ".$tninp044->getPrdt_qt_ut().'" />
                        </div>
                    </div>
                </div>
            </div>';						
		
    $retval.='
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3>Recepción de Muestra</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-5 form-group">
                        <label>Ingresar Fecha de recepción de muestra:</label>
                        <input type="text" class="form-control" name="recepcion"  id="recepcion" value="'.$tninp044->getSamp_rcv_de().'">
                    </div>                        
                </div>
            </div>';
				
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Datos de Análisis</h3>
                </div>
                <div class="panel-body">
                    '.$analisis.'                      
                </div>
            </div>';
		
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Observaciones</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-11 form-group">
                        <label>Observaciones del solicitante</label>
                        <textarea class="form-control" rows="5" name="dclr_rmk">'.$tninp044->getDclr_rmk().'</textarea>
                    </div>
                    <div class="col-xs-11 form-group">
                        <label>Observaciones del Aprobador</label>
                        <textarea class="form-control" rows="5" name="aprb_rmk"  maxlength="500" id="aprb_rmk"></textarea>
                    </div>
                </div>
            </div>';
            
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Documentos Adjuntos</h3>
                </div>
                <div class="panel-body">
                    '.$adjunto.'
                </div>
            </div>';
        
    $retval.='
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Acciones</h3>
                </div>
                <div class="panel-body">
                    <div class="funkyradio">
                         <div class="funkyradio-success">
                            <input type="radio" name="radio" id="aprobar" value="1"/>
                            <label for="aprobar">Aprobar</label>
                        </div>
                       <div class="funkyradio-warning">
                            <input type="radio" name="radio" id="subsanar" value="2" />
                            <label for="subsanar">Subsanar</label>
                        </div>
                        <div class="funkyradio-danger">
                            <input type="radio" name="radio" id="rechazar" value="3"/>
                            <label for="rechazar">Rechazar</label>
                        </div>
                    <button type="button" class="btn btn-default" id="btn_enviar">Enviar</button>
                    </div>
                </div>
             </div>';       		
    }
    return $retval;
    
}