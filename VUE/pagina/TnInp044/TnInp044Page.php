<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp044Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp044/TnInp044AnlsPage.php';
//require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_044($req_no,$rol){    
    $tninp044= consulta_datos_formulario_044($req_no); 
    $solicitud=$tninp044->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{
    $analisis= cargar_lista_analisis_044($req_no);
    $adjunto= cargar_lista_adjuntos($req_no);
    //$notificacion= cargar_lista_notificaciones($req_no);
     $retval='<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 
<script>
         $(document).ready(function() {
    $(function() {';
            $retval.= "$.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: 'Previo',
            nextText: 'Próximo',
            monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
            monthStatus: 'Ver otro mes', yearStatus: 'Ver otro año',
            dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
            dateFormat: 'dd/mm/yy', firstDay: 0,
            initStatus: 'Selecciona la fecha', isRTL: false
        };
        $.datepicker.setDefaults($.datepicker.regional['es']); ";
            $retval.= '$( "#recepcion" ).datepicker();
    $("input").autosave({         
        
                                url: "autoguardar.php",//set the php file that updates the database
                                method: "post",
                                grouped: true,//send data for all fields with the autosave
                               success: function(data) {//on a successful update...
								alert("Guardado con Exito!!!");
                                $("#message").html("Data updated successfully").show();//...show a message...
                                        setTimeout(\'fadeMessage()\',1500);//...and then fade it out after an interval                        
                            },
                                send: function(){//on a save...
                                $("#message").html("Sending data....");//..show a message
                                },
                                dataType: "html"
                                
                             });
        function fadeMessage(){
                        $(\'#message\').fadeOut(\'slow\');//just a function to fade out the message
                }
                })
        });
 </script>
 <script>
 
</script>';
    $retval.='<div class="header">
                <h1>'.substr($tninp044->getDcm_no(), 0, -4).' '.$tninp044->getDcm_nm().'</h1> 
            </div>
            <div>
            <div id="contenido">
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
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getReq_no().'">                       
                </div>                
                <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getReq_city_nm().'">                       
                </div>
			 </div>
			 <div class="col2">
				<div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getMdf_dt().'">                       
                </div>                
                <div>
                    <label>Número de Autorización Previa para Productos de Prohibida Exportación-SA</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getRfr_dcm_no().'">                       
                </div>     
			 </div>			 
			</div>
			 <div class="solicitante">
			 <h1>Datos de Solicitante</h1>
			 <div class="col1">
				<div>
                    <label>Clasificacion del Solicitante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_cl_cd().'">                       
                </div>  
			 </div>
			 <div class="col2">
				<div>
                    <label>Número de Identificación de la Empresa Solicitante</label>
                  <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_idt_no().'">                       
                </div>  
			 </div>
			 <div>
                    <label>Razon Social del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_nole().'">                       
			 </div>
			 <div class="foo">
			 <div>
                    <label>Representante Legal de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_rpgp_nm().'">                       
			 </div>
			 </div>
			  <div class="col1">
				<div>
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_prvhc_nm().'">                       
                </div> 
			 </div>
			 <div class="col2">
				 <div>
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_cuty_nm().'">                       
                </div>
			 </div>
			 <div>
                    <label>Parroquia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_prqi_nm().'">                       
             </div>
			 <div class="foo">
				 <div>
                    <label>Direccion de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_ad().'">                                           
                </div>
                <div>
                    <label>Nombre de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_nm().'">                                            
                </div>                
			 </div>
			 <div class="col1">
				<div>
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_tel_no().'">                       
                </div>
			 </div>
			 <div class="col2">
				<div>
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_fax_no().'">                       
                </div> 
			 </div>
			 <div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDclr_em().'">                       
             </div>
			 </div>
			 <div class="exportador">
			 <h1>Datos de Exportador</h1>
			 <div class="col1">
				<div>
                    <label>Clasificacion del Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getExpr_cl_cd().'">                       
                </div> 
			 </div>
			 <div class="col2">
				<div>
                    <label>Número de Identificación de la Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getExpr_idt_no().'">                                             
                </div>  
			 </div>
			  <div class="foo">
				 <div>
                    <label>Nombre de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getExpr_nm().'">                                            
                </div>              
			 </div>
			 <div class="col1">
				 <div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getExpr_prvhc_nm().'">                       
                </div>
			 </div>
			 <div class="col2">
				<div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getExpr_cuty_nm().'">                       
                </div>
			 </div>
			 <div>
                    <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getExpr_prqi_nm().'">                       
             </div>
			  <div class="foo">
				 <div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getExpr_ad().'">                                           
                </div>             
			 </div>
			  <div class="col1">
				 <div>
                    <label>Teléfono de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getExpr_tel_no().'">                       
                </div>
			 </div>
			 <div class="col2">
				<div>
                    <label>Fax de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getExpr_fax_no().'">                       
                </div> 
			 </div>
			 <div>
                    <label>Correo Electrónico de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getExpr_em().'">                       
             </div>
			 </div>
			<div class="importador">
			 <h1>Datos de Importador</h1>
			 <div class="foo">
				<div>
                    <label>Nombre del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getImpr_nm().'">                       
				</div>
			</div>
			<div class="col1">
				 <div>
                    <label>País del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getImpr_ntn_nm().'">                       
                </div>
			 </div>
			 <div class="col2">
				<div>
                    <label>Ciudad Importador</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getImpr_city_nm().'">                       
                </div> 
			 </div>	
			<div class="foo">
				<div>
                    <label>Dirección del Importador</label>                                         
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getImpr_ad().'">                                                
                </div>		 
			 </div>
			 <div class="col1">
				 <div>
                    <label>Teléfono del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getImpr_tel_no().'">                       
                </div>   
			 </div>
			 <div class="col2">
				<div>
                    <label>Fax de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getImpr_fax_no().'">                       
                </div>   
			 </div>	
			 <div>
                    <label>Correo Electrónico de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getImpr_em().'">                       
             </div>
			 </div>
			<div class="generales">
			 <h1>Datos Generales</h1>
			 <div>
                    <label>Número de Factura Comercial</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getInv_no().'">                       
             </div>
			 <div class="foo">
				<div>
                    <label>Zona de Laboratorio</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getLbty_zne_nm().'">                       
                </div>
				<div>
                    <label>Dirección de Laboratorio</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getLbty_ad().'">                       
                </div>                
			 </div>
			 <div>
                    <label>Código de Laboratorio</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getLbty_cd().'">                       
             </div>                			  			 
			</div>
            <div class="producto">
			 <h1>Datos de Producto</h1>	
			 <div>
                    <label>Subpartida Arancelaria</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getHc().'">                       
            </div>
			 <div class="col1"><div>
                    <label>Codigo de Tanque</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getTnk_cd().'">                       
            </div></div> 
             <div class="col2"><div>
                    <label>Código de Muestra LAB-EPA</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getLot_cd().'">                       
            </div></div> 
			<div>
                    <label>Unidad de Cultivo</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getCltr_ut_nm().'">                       
            </div>
			 <div class="foo"><div>
                    <label>Forma de Presentación</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getSmt_frm_nm().'">                       
            </div>
			<div>
                    <label>Nombre de Especie</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getSpc_nm().'">                       
            </div>
			<div>
                    <label>Trazabilidad de Reproductor</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getRpdt_rgm_nm().'">                       
            </div>
			</div> 
			 <div class="col1"><div>
                    <label>Nombre de País de Destino</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getDst_ntn_nm().'">                       
            </div>
			<div>
                    <label>Cantidad de Cartones</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getPck_qt()." ".$tninp044->getPck_ut().'">                       
            </div>
			</div> 
             <div class="col2"><div>
                    <label>Peso Neto</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getPrdt_nwt()." ".$tninp044->getNwt_ut().'">                       
            </div>
			<div>
                    <label>Cantidad de Exportación</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp044->getExp_qt()." ".$tninp044->getPrdt_qt_ut().'">                       
            </div>
			</div class="col2" id="fecha1">';
                    if (($rol=='ReceptorGeneral') || ($rol=='Certificador')){
						$retval.='<div class="foo" >
						<div class="literales">
						<h1 class="editarH">Ingresar Fecha de recepción de muestra:</h1> 
                          <input type="text" name="recepcion"  id="recepcion" value="'.$tninp044->getSamp_rcv_de().'">
                             </div>
                             </div>';
                }else{
                    $retval.='<label>Fecha de recepción de muestra</label>'
                    . '<input type="text"  readonly value="'.$tninp044->getSamp_rcv_de().'">';   
                }
                    $retval.='</div>	
			</div>	
			<div class="analisis">
			 <h1>Datos de Análisis</h1> 
             '.$analisis.'   		 			
			</div>
                          
			<div class="observaciones1">
			 <h1>Observaciones</h1> 
              <div>
                    <label>Observaciones de Solicitante</label>                          
                     <textarea readonly name="descripcion" class="textarea" >'.$tninp044->getDclr_rmk().'</textarea>      
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