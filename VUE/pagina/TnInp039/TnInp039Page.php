<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp039Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp039/TnInp039PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_039($req_no,$rol){    
    $tninp039= consulta_datos_formulario_039($req_no);   
    $solicitud=$tninp039->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{    
    $producto= cargar_lista_productos_039($req_no);
    $adjunto= cargar_lista_adjuntos($req_no);
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval='    
                 <script type="text/javascript"> 
                    $("#aprobar").change(function(){ 
                        alert("escod")
                    });

                   $("#btn_enviar").click(function(){                       
                        alert("solicitud enviada");
                    });
                    
                </script>
                 <script type="text/javascript">
                    // When the document is ready
                    $(document).ready(function () {                      
                        $("#muestreo").datepicker({
                             format: "yyyy/mm/dd"
                        });

                        $("#fin").datepicker({                                        
                            format: "yyyy/mm/dd"
                        });
                    });
                </script>
            	<div class="display-2">
                    <h2 align="center">'.substr($tninp039->getDcm_no(), 0, -4).'  '.$tninp039->getDcm_nm().'</h2>
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
                         <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Número de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_no" readonly value="'.$tninp039->getReq_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fecha de Solicitud</label>                                        
                                <input type="text" class="form-control" name="mdf_dt" readonly value="'.$tninp039->getMdf_dt().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Ciudad de Solicitud</label>                                      
                                <input type="text" class="form-control" name="req_city_nm" readonly value="'.$tninp039->getReq_no().'" />                                    
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
                                <input type="text" class="form-control" name="dclr_cl_cd" readonly value="'.$tninp039->getDclr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_idt_no" readonly value="'.$tninp039->getDclr_idt_no().'"  />
                            </div>
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                    <label>Razón Social del Solicitante</label>                                        
                                    <input type="text" class="form-control" name="dclr_nole" readonly value="'.$tninp039->getDclr_nole().'"  />
                            </div>					
                        </div>												
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia de la Empresa Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_prvhc_nm" readonly value="'.$tninp039->getDclr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad de la Empresa Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_cuty_nm" readonly value="'.$tninp039->getDclr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Parroquia de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_prqi_nm" readonly value="'.$tninp039->getDclr_prqi_nm().'"  />
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Dirección de la Empresa Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_ad" readonly value="'.$tninp039->getDclr_ad().'"  />
                        </div>
                        <div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Solicitante</label>                                        
                            <input type="text" class="form-control" name="dclr_nm" readonly value="'.$tninp039->getDclr_nm().'"  />
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                                <div class="col-xs-5 form-group">
                                <label>Teléfono del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_tel_no" readonly value="'.$tninp039->getDclr_tel_no().'"  />
                            </div>
			
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>
							
                            <div class="col-xs-5 form-group">
                                <label>Fax del Solicitante</label>                                      
                                <input type="text" class="form-control" name="dclr_fax_no" readonly value="'.$tninp039->getDclr_fax_no().'" />                                    
                            </div>                            
                        </div>
			<div class="row" style="padding:5px 0 0 30px;">                          
                            <div class="col-xs-5 form-group">
                                <label>Correo Electrónico del Solicitante</label>                                        
                                <input type="text" class="form-control" name="dclr_em" readonly value="'.$tninp039->getDclr_em().'"  />
                            </div>
                        </div>									
                    </div>
		</div>';				            
				        
	$retval.='
		<div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos de Fabricante/Procesador</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Clasificación del Fabricante/Procesador</label>                                      
                                <input type="text" class="form-control" name="epxr_cl_cd" readonly value="'.$tninp039->getExpr_cl_cd().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Número de Identificación del Fabricante/Procesador</label>                                        
                                <input type="text" class="form-control" name="expr_idt_no" readonly value="'.$tninp039->getExpr_idt_no().'"  />
                            </div>
                        </div>
			<div class="col-xs-11 form-group" style="padding:5px 0 0 30px;">
                            <label>Nombre de Fabricante/Procesador</label>                                        
                            <input type="text" class="form-control" name="expr_nm" readonly value="'.$tninp039->getExpr_nm().'"  />
                        </div>						
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Provincia</label>                                      
                                <input type="text" class="form-control" name="expr_prvhc_nm" readonly value="'.$tninp039->getExpr_prvhc_nm().'" />                                    
                            </div>
					
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Cantón/Ciudad</label>                                        
                                <input type="text" class="form-control" name="expr_cuty_nm" readonly value="'.$tninp039->getExpr_cuty_nm().'"  />
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Parroquia</label>                                      
                                <input type="text" class="form-control" name="expr_prqi_nm" readonly value="'.$tninp039->getExpr_prqi_nm().'" />                                    
                            </div>
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">						
                            <div class="col-xs-11 form-group">
                                    <label>Dirección del Fabricante/Procesador</label>                                        
                                    <input type="text" class="form-control" name="expr_ad" readonly value="'.$tninp039->getExpr_ad().'"  />
                            </div>                                             
                        </div>
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Teléfono del Fabricante/Procesador</label>                                      
                                <input type="text" class="form-control" name="expr_tel_no" readonly value="'.$tninp039->getExpr_tel_no().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Fax del Fabricante/Procesador</label>                                        
                                <input type="text" class="form-control" name="expr_fax_no" readonly value="'.$tninp039->getExpr_fax_no().'"  />
                            </div>
                        </div>
                        <div class="col-xs-5 form-group" style="padding:5px 0 0 30px;">
                            <label>Correo Electrónico del Fabricante/Procesador</label>                                        
                            <input type="text" class="form-control" name="expr_em" readonly value="'.$tninp039->getExpr_em().'"  />
                        </div>				
                    </div>
                </div>';
        
		
        $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos Generales</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-5 form-group">
                            <label>Producto Certificado para Consumo</label>
                            <input type="text" class="form-control" name="prdt_cl" readonly value="'.$tninp039->getPrdt_cl().'"  />
                        </div>                       
                    </div>
		</div>';
				
	$retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos Producto</h3>
                    </div>
                    <div class="panel-body">
			'.$producto.'
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Cantidad Total de Paquetes de Producto</label>                                      
                                <input type="text" class="form-control" name="prdt_tot_qt" readonly value="'.$tninp039->getPrdt_tot_qt().'" />                                    
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>

                            <div class="col-xs-5 form-group">
                                <label>Peso Neto Total de Producto</label>                                        
                                <input type="text" class="form-control" name="prdt_tot_nwt" readonly value="'.$tninp039->getPrdt_tot_nwt().'"  />
                            </div>
                        </div>                  
                    </div>
		</div>';
        
        $retval.='
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Datos Adicionales</h3>
                    </div>
                    <div class="panel-body">                     
                        <div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Fecha de Muestreo</label>
                                <input type="text" class="form-control" name="muestreo" id="muestreo" placeholder="Escoga fecha de muestreo"/>                               
                            </div>

                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>
                            
                            <div class="col-xs-5 form-group">
                                <label>Fecha Fin  de Análisis</label>
                                <input type="text" class="form-control" name="muestreo" id="fin" placeholder="Escoga fecha de fin análisis"/>
                            </div>                            
                        </div> 
			<div class="row" style="padding:5px 0 0 30px;">
                            <div class="col-xs-5 form-group">
                                <label>Nombre de Realizador</label>                                      
                                <input type="text" class="form-control" name="realizador"  />                                    
                            </div>
                            <div class="col-xs-1 form-group">
                                <!-- espacio entre columnas-->
                            </div>
                            <div class="col-xs-5 form-group">
                                <label>Código Único/Factura Comercial</label>                                      
                                <input type="text" class="form-control" name="dclr_rmk" readonly value="'.$tninp039->getDclr_rmk().'"   />                                    
                            </div>
                        </div>';     						
                    
        
	 if($rol=='4'){        
                $retval.='
                        <div class="row" style="padding:5px 0 0 30px;">                                                        
                            <div class="col-xs-5 form-group">
                                 <label>Apto para Consumo</label>                                   
                                    <div class="funkyradio">
                                        <div class="funkyradio-success">
                                           <input type="radio" name="apto" id="certifica"/>
                                           <label for="certifica" style="margin-left:auto;">Certifica</label>
                                       </div>                                                  
                                       <div class="funkyradio-danger">
                                           <input type="radio" name="apto" id="nocertifica"/>
                                           <label for="nocertifica" style="margin-left:auto;">No Certifica</label>
                                       </div>
                                    </div>
                            </div> 
                        </div>';                
                    }
       
        $retval.='
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
                            <textarea class="form-control" rows="5" readonly name="dclr_rmk">'.$tninp039->getDclr_rmk().'</textarea>
                        </div>
                        <div class="col-xs-11 form-group">
                            <label>Observaciones del Aprobador</label>
                            <textarea class="form-control" rows="5" name="aprb_rmk"></textarea>
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
                                <input type="radio" name="radio" id="aprobar"/>
                                <label for="aprobar">Aprobar</label>
                            </div>
                           <div class="funkyradio-warning">
                                <input type="radio" name="radio" id="subsanar" />
                                <label for="subsanar">Subsanar</label>
                            </div>
                            <div class="funkyradio-danger">
                                <input type="radio" name="radio" id="rechazar" />
                                <label for="rechazar">Rechazar</label>
                            </div>
                        <button type="button" class="btn btn-default" id="btn_enviar">Enviar</button>
                        </div>
                    </div>
                 </div>';
    }
    return $retval;
    
}