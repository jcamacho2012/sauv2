<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp006Impl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnCmmFlAtch/TnCmmFlAtchPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp006/TnInp006PdPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnInp006/TnInp006CtnrPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/pagina/TnNtfc/TnNtfcPage.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_formulario_006_040($req_no,$dcm_cd,$rol){      
    $tninp006= consulta_datos_formulario_006_040($req_no);
    $solicitud=$tninp006->getReq_no();
    if(empty($solicitud)){
        $retval='<h1>Solicitud no existe</h1>';
    }else{                
    $contenedor= cargar_lista_contenedor_006_040($req_no);
    $producto= cargar_lista_productos_006_040($req_no);
    $adjunto= cargar_lista_adjuntos($req_no);        
    $notificacion= cargar_lista_notificaciones($req_no);
    $retval="<script>

function setCharAt(str,index,chr) {
	if(index > str.length-1) return str;
	return str.substr(0,index) + chr + str.substr(index+1);
}
$(document).ready(function() { 
			$('#cbe').change(function(){
				if (this.checked) {
					$('.txte').css('text-decoration', 'line-through');
					$('.literales input').val(setCharAt($('#cbe').val(),0,\"0\"));
				}
				else {
					$('.txte').css('text-decoration', 'none');
					$('.literales input').val(setCharAt($('#cbe').val(),0,\"1\"));
				}
            }) ;
            $('#cbf').change(function(){
                if (this.checked) {
                    $('.txtf').css('text-decoration', 'line-through');
					$('.literales input').val(setCharAt($('#cbf').val(),1,\"0\"));
                }
                else {
                    $('.txtf').css('text-decoration', 'none');
					$('.literales input').val(setCharAt($('#cbf').val(),1,\"1\"));
                }
            }) ;
            $('#cbg').change(function(){
                if (this.checked) {
                    $('.txtg').css('text-decoration', 'line-through');
					$('.literales input').val(setCharAt($('#cbg').val(),2,\"0\"));
                }
                else {
                    $('.txtg').css('text-decoration', 'none');
					$('.literales input').val(setCharAt($('#cbg').val(),2,\"1\"));
                }
            }) ;
            $('#cbh').change(function(){
                if (this.checked) {
                    $('.txth').css('text-decoration', 'line-through');
					$('.literales input').val(setCharAt($('#cbh').val(),3,\"0\"));
                }
                else {
                    $('.txth').css('text-decoration', 'none');
					$('.literales input').val(setCharAt($('#cbh').val(),3,\"1\"));
                }
            }) ;
            $('#cbi').change(function(){
                if (this.checked) {
                    $('.txti').css('text-decoration', 'line-through');
					$('.literales input').val(setCharAt($('#cbi').val(),4,\"0\"));
                }
                else {
                    $('.txti').css('text-decoration', 'none');
					$('.literales input').val(setCharAt($('#cbi').val(),4,\"1\"));
                }
            }) ;
            $('#cbj').change(function(){
                if (this.checked) {
                    $('.txtj').css('text-decoration', 'line-through');
					$('.literales input').val(setCharAt($('#cbj').val(),5,\"0\"));
                }
                else {
                    $('.txtj').css('text-decoration', 'none');
					$('.literales input').val(setCharAt($('#cbj').val(),5,\"1\"));
                }
            }) ;
			autoguardar();
        });
     
function autoguardar() {
    $(function() {
       
        $(\"input\").autosave({                       
                                url: \"autoguardar.php\",//set the php file that updates the database
                                method: \"post\",
                                grouped: true,//send data for all fields with the autosave
                               success: function(data) {//on a successful update...
                                $(\"#message\").html(\"Data updated successfully\").show();//...show a message...
                                        setTimeout('fadeMessage()',1500);//...and then fade it out after an interval                        
                            },
                                send: function(){//on a save...
                                $(\"#message\").html(\"Sending data....\");//..show a message
                                },
                                dataType: \"html\"
								
                  });	
               function fadeMessage(){
                        $('#message').fadeOut('slow');//just a function to fade out the message
                }
    });        
}; 


            </script>";
    $retval.='
         <div class="header">
                <h1>'.substr($tninp006->getDcm_no(), 0, -4).'  '.$tninp006->getDcm_nm().'</h1> 
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
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getReq_no().'">                       
                </div>                
                <div>
                    <label>Ciudad de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getReq_city_nm().'">                       
                </div>
                <div>
                    <label>Número de Certificado Anterior</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getPrev_ctft_no().'">                       
                </div>                
                </div>
                <div class="col2">
				<div>
                    <label>Fecha de Solicitud</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMdf_dt().'">                       
                </div>                
                <div>
                    <label>Tipo de Documento</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDcm_type_nm().'">                       
                </div>
                <div>
                    <label>Fecha de Emisión de Certificado Anterior</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getPrev_ctft_iss_de().'">                       
                </div>                               
		</div>
                <div class="col1">
                    <div>
                        <label>Número de Certificado de Calidad</label>
                        <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getQlt_ctft_no().'">                       
                </div> 
                </diiv>
         </div>';
	$retval.='</div>				                       
        <div class="solicitante">
            <h1>Datos de Solicitante</h1>
		<div class="col1">
		<div>
                    <label>Clasificacion del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDclr_cl_cd().'">                       
                </div>                
		</div>
		<div class="col2">
		<div>
                    <label>Número de Identificación de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDclr_idt_no().'">                       
                </div>                
		</div>			
		<div class="foo">
		<div>
                    <label>Razon Social del Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDclr_nole().'">                       
                </div>
		</div>
			<div class="col1">
				<div>
                    <label>Provincia de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDclr_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Canton/Ciudad de la Empresa Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDclr_cuty_nm().'">                       
                </div>
			</div>
			<div>
                <label>Parroquia de la Empresa Solicitante</label>
                <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDclr_prqi_nm().'">                       
            </div>
			<div class="foo">
				<div>
					<label>Direccion de la Empresa Solicitante</label>
                                        <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDclr_ad().'">                                            					
				</div>
			</div>
            <div class="foo">
				<div>
					<label>Nombre de Solicitante</label>
					<input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDclr_nm().'">                                            
				</div>
			</div>
			<div class="col1">
				 <div>
                    <label>Teléfono de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDclr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDclr_fax_no().'">                       
                </div>                
			</div>
			<div>
                    <label>Correo Electrónico de Solicitante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDclr_em().'">                       
            </div>               
        </div>
		<div class="exportador">
            <h1>Datos de Exportador</h1>
			<div class="col1">
				<div>
                    <label>Clasificacion del Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getExpr_cl_cd().'">                       
                </div>  
			</div>
			<div class="col2">
				<div>
                    <label>Número de Identificación de la Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getExpr_idt_no().'">                                             
                </div>                              
			</div>			
			<div class="foo">
				<div>
                     <label>Nombre de Exportador</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getExpr_nm().'">                                                                  
                </div>                
			</div>
                        
                        <div class="col1">
				<div>
                    <label>País del exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getExpr_ntn_nm().'">                       
                </div>
			</div>

			<div class="col1">
				<div>
                    <label>Provincia</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getExpr_prvhc_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Canton/Ciudad</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getExpr_cuty_nm().'">                       
                </div>
			</div>
                        <div class="col2">
			<div>
                    <label>Parroquia</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getExpr_prqi_nm().'">                       
            </div>
            </div>
			<div class="foo">
				<div>
                    <label>Direccion</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getExpr_ad().'">                                           
                </div>
			</div>            
			<div class="col1">
				<div>
                    <label>Teléfono de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getExpr_tel_no().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getExpr_fax_no().'">                       
                </div>                
			</div>
			<div>
                    <label>Correo Electrónico de Exportador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getExpr_em().'">                       

            </div>
        </div>
		<div class="importador">
			<h1>Datos de Importador</h1>
			<div class="foo">
				<div>
                    <label>Nombre del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getImpr_nm().'">                                                                  
                </div> 
			</div> 
			<div class="col1">
				 <div>
                    <label>País del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getImpr_ntn_nm().'">                       
                </div>
			</div>
			<div class="col2">
				<div>
                    <label>Ciudad Importador</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getImpr_city_nm().'">                       
                </div>              
			</div>
			<div class="foo">
				<div>
                    <label>Dirección del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getImpr_ad().'">                                           
                </div>
			</div>
			<div class="col1">	
				 <div>
                    <label>Teléfono del Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getImpr_tel_no().'">                       
                </div> 
			</div>
			<div class="col2">
				<div>
                    <label>Fax de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getImpr_fax_no().'">                       
                </div>             
			</div> 
			<div>
                    <label>Correo Electrónico de Importador</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getImpr_em().'">                       
            </div>			
		</div>';
        if($dcm_cd=='130-006-REQ'){
             $retval.='<div class="fabricante">
			<h1>Datos de Fabricante</h1>
			<div class="foo">
				<div>
                    <label>Nombre de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_nm().'">                                                                 
                    </div>
                </div>
                <div class="col1">	
				<div>
                    <label>País del Fabricante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_ntn_nm().'">                       
                </div>
                </div>
                <div class="col2">
				<div>
                    <label>Ciudad de Fabricante</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_city_nm().'">                       
                </div>
                </div>
                <div class="foo">
				<div>
                    <label>Dirección de fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_ad().'">                                           
                </div>
		</div>
                <div class="col1">
                <div>
                    <label>Número de Autorización de fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_prdr_estbl_atr_no().'">                       
                </div>
                </div>
                <div class="col2">	
				<div>
                    <label>Teléfono de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_tel_no().'">                       
                </div>		
			</div>
			<div class="col1">
				 <div>            
                    <label>Fax de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_fax_no().'">                                            
                </div>  			
		</div> 
                <div class="col2">
                    <div>
                    <label>Correo Electrónico de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_em().'">                       
                </div>
                </div>';
        }
        $retval.='<div class="generales">
			<h1>Datos Generales</h1>
		<div class="col1">	
				 <div>
                    <label>Nombre de Medio de Transporte/Almacenamiento</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getTrsp_way_nm().'">                       
                </div>				
			</div>
                        <div class="foo">
				<div>
                    <label>Condiciones de Transporte</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getWhos_trsp_cdt_inf().'">                                            
                </div> 							
			</div>	 
			<div class="col1">
				<div>
                    <label>Nombre de Empresa de Transporte</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getCarr_nm().'">                       
                </div>				
			</div> 	
                        <div class="col2">
				<div>
                    <label>País de Origen</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getOrg_ntn_nm().'">                       
                </div>				
			</div> 	
                        <div class="col1">
				<div>
                    <label>País de Destino</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getDst_ntn_nm().'">                       
                </div>				
			</div> 	
                        <div class="col2">
				<div>
                    <label>Fecha de Salida</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getCrt_de().'">                       
                </div>				
			</div> 	
                        <div class="foo">
				<div>
                    <label>Lugar de Carga</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getCrg_plc().'">                       
                </div>
                </div>
                <div class="col1">	
				 <div>
                    <label>País de Entrada</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getPtet_ntn_nm().'">                       
                </div>				
		</div>
                <div class="col2">	
				 <div>
                    <label>Puerto de Entrada</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getPtet_nm().'">                       
                </div>				
		</div>
         </div>
          <div >
		<h1>Datos de Contenedor</h1>                
		'.$contenedor.'                   
	</div>';
        if($dcm_cd=='130-040-REQ'){
             $retval.='<div class="fabricante">
			<h1>Datos de Fabricante</h1>
			<div class="foo">
				<div>
                    <label>Nombre de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_nm().'">                                                                 
                    </div>
                </div>
                <div class="col1">	
				<div>
                    <label>País del Fabricante</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_ntn_nm().'">                       
                </div>
                </div>
                <div class="col2">
				<div>
                    <label>Ciudad de Fabricante</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_city_nm().'">                       
                </div>
                </div>
                <div class="foo">
				<div>
                    <label>Dirección de fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_ad().'">                                           
                </div>
		</div>
                <div class="col1">
                <div>
                    <label>Número de Autorización de fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_prdr_estbl_atr_no().'">                       
                </div>
                </div>
                <div class="col2">	
				<div>
                    <label>Teléfono de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_tel_no().'">                       
                </div>		
			</div>
			<div class="col1">
				 <div>            
                    <label>Fax de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_fax_no().'">                                            
                </div>  			
		</div> 
                <div class="col2">
                    <div>
                    <label>Correo Electrónico de Fabricante</label>
                    <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getMfr_em().'">                       
                </div>
                </div>
                </div>';
        }
        $retval.='<div class="referencia">
			<h1>Datos de Referencia</h1>
                        <div class="col1">	
				<div>
                    <label>Factura</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getInv_no().'">                       
                </div>
                </div>
                <div class="col2">
				<div>
                    <label>Tratamiento de Producto</label>
                   <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getWhos_trsp_cdt_inf().'">                       
                </div>
                </div>
                	
				<div>
                    <label>Intención/Proposito</label>
                     <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getCtft_prdt_nm().'">                       
                </div>
           </div
           <div class="identificacion">
			<h1>Identificación de Producto</h1>                
			'.$producto.'
                        <div class="col1">
                            <label>Cantidad Total de Paquetes de Producto</label>
                            <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getPkgs_tot_qt().' '.$tninp006->getPkgs_tot_qt_ut().'">                                            
                        </div>
                        <div class="col2">
                            <label>Peso Total </label>
                            <input type="text" name="autorizacion"/ readonly value="'.$tninp006->getTot_wt().' '.$tninp006->getTot_wt_ut().'">                                            
                        </div>
                        
            </div>
            <div class="observacion">
		<h1>Observaciones</h1>
                <div>
                    <label>Observaciones de Solicitante</label>                       
                    <textarea  readonly name="descripcion" class="textarea">'.$tninp006->getDclr_rmk().'</textarea>      
                </div>                    
            </div>';
        if($rol=='Certificador'){
                $retval.=' <div class="foo" >
                    <div class="literales">
                        <h1 class="editarH">Literales Brasil</h1>   
                        <ul>
                            <li class="txte">
                                <input id="cbe" type="checkbox" name="bre" class="cb" value="111111"/>
                                e)  os moluscos bivalves e gastrópodes foram colhidos em áreas submetidas a controle sanitário oficial para identificação de biotoxinas marinhas, de acordo com os padrões reconhecidos internacionalmente*/ los moluscos bivalves y gastrópodos se recolectaron en zonas sometidas a control sanitario oficial para la identificación de biotoxinas marinas, de conformidad con las normas internacionalmente reconocidas*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                           <li class="txtf">
                                <input id="cbf" type="checkbox" name="brf" class="cb" value="111111"/>
                                f)  o pescado e seus produtos não foram descongelados durante a estocagem e foram despachados com temperatura no centro do músculo não superior a -18ºC* / el pescado y sus productos no se descongelaron durante el almacenamiento y fueron enviados con una temperatura central del músculo no superior a -18 º C*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                           <li class="txtg">
                                <input id="cbg" type="checkbox" name="brg" class="cb" value="111111"/>
                                g)  o pescado e seus produtos encontram-se resfriados a uma temperatura próxima a 0ºC (ponto de fusão do gelo)* / el pescado y sus productos han sido enfriados a una temperatura cercana a 0 °C (punto de fusión del hielo)*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                           <li class="txth">
                                <input id="cbh" type="checkbox" name="brh" class="cb" value="111111"/>
                                h)  o pescado e seus produtos não sofreram a adição de fosfatos ou similares antes de seu congelamento* / el pescado y sus productos no han sido objeto de la adición de fosfatos o similares antes de su congelación*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                           <li class="txti">
                                <input id="cbi" type="checkbox" name="bri" class="cb" value="111111"/>
                                i)  a declaração do peso líquido do pescado congelado na rotulagem, quando glaciado, foi obtida descontando-se o peso da embalagem e do gelo de glaciamento* / Cuando el pescado esté glaseado, en la declaración del contenido neto del pescado no se incluye el glaseado*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                           <li class="txtj">
                                <input id="cbj" type="checkbox" name="brj" class="cb" value="111111"/>
                                j)  o material utilizado na embalagem é de primeiro uso e satisfaz os requerimentos higiênico – sanitários estabelecidos pela (s) Autoridade (s) Competente (s) do país de expedição * / el material utilizado en los envases es de primer uso y cumple con los requisitos higiénico - sanitarios establecidos por la (s)Autoridad (es) Competente (s) en el país de expedición*;                        i)  a declaração do peso líquido do pescado congelado na rotulagem, quando glaciado, foi obtida descontando-se o peso da embalagem e do gelo de glaciamento* / Cuando el pescado esté glaseado, en la declaración del contenido neto del pescado no se incluye el glaseado*;                        Al marcar esta opción, certifica el(los) producto(s) apto(s) para el consumo 
                          </li>
                        </ul>
                       </div>
                    </div>';
        }
            $retval.='<div class="adjunto">
		<h1>Documento Adjunto</h1> 
                '.$adjunto.'                                   
            </div>
     </div>';
    }
    return $retval;
    
}