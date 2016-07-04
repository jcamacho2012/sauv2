<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp039Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_productos_039($req_no,$subsanacion,$rol){    
    $listaProductos= consulta_datos_producto_039($req_no);
    $listaUltimosAnalisis= consulta_ultimos_analisis_ingresados_039($req_no);
    //eliminar_analisis($req_no, $subsanacion, $rol);
    $retval="<div class='contenedor'>					
					<div class='mensaje'></div>
					<table class='editinplace' id='calidad'>
						<tr>
							<th class='id'>No.</th>
							<th>Subpartida Arancelaria</th>
							<th>Nombre de Producto</th>
							<th>Nombre de Especie de Producto</th>
							<th>Presentacion de Producto</th>
							<th class='tipo'>Tipo de Análisis</th>
							<th>Cantidad de Producto</th>
							<th>Peso Neto de Producto</th>
							<th>Código de Lote</th>									
						</tr>";
    
    if(count($listaProductos)<1){
        $retval.='<td></td><td></td><td></td><td></td><td>No hay Productos ingresados</td><td></td><td></td><td></td><td></td>';
    }else{     
       foreach($listaProductos as $producto){
           guardar_analisis($req_no, $producto,$rol,$subsanacion);          
            $retval.=' <tr><td class="id" id="prdt_sn"><span>'.$producto->getPrdt_sn().'</span></td>'
                    . '<td class="id"><span>'.$producto->getHc().'</span></td>'
                    . '<td class="id"><span>'.$producto->getPrdt_nm().'</span></td>'
                    . '<td class="id"><span>'.$producto->getPrdt_spc_nm().'</span></td>'                    
                    . '<td class="id"><span>'.$producto->getPrdt_smt_frm_inf().'</span></td>';
             if($subsanacion=="2" || $rol=="Certificador"){
                $retval.= buscar_resultados_analisis($producto->getPrdt_sn(), $listaUltimosAnalisis,$rol);
             }else {
                $retval.= '<td class="editable" data-campo="nombre" id="col_analisis"><span>'.  trim($producto->getAnls_type_nm()).'</span></td>';
             }                                               
                $retval.= '<td class="id"><span>'.$producto->getPrdt_qt().'</span></td>'
                . '<td class="id"><span>'.$producto->getPrdt_nwt().'</span></td>'
                . '<td class="id"><span>'.$producto->getLot_cd().'</span></td></tr>';    
        }
    } 
    return $retval.'</table></div>';
}

Function buscar_resultados_analisis($prdt_sn,$lista,$rol){       
    foreach($lista as $ultimo){
        if($ultimo->getPrdt_sn()==$prdt_sn){
            if($rol=="Certificador"){
                $retval= '<td class="copy" id="col_analisis"><span>'.trim($ultimo->getAnls_rst_nm()).'</span></td>';
            }else{
                $retval= '<td class="editable" data-campo="nombre" id="col_analisis"><span>'.trim($ultimo->getAnls_rst_nm()).'</span></td>';
            }
            
        }
    }    
    return $retval;
}

function cargar_ultimos_analisis_ingresados_039($req_no){
    $listaProductos= consulta_ultimos_analisis_ingresados_039($req_no);
    $retval="<table class='ultimos_resultados'>
						<tr>
							<th>No.</th>							
							<th>Nombre de Producto</th>
							<th>Nombre de Especie de Producto</th>
							<th>Presentacion de Producto</th>
							<th>Resultado Analisis</th>							
							<th>Código de Lote</th>									
						</tr>";
    
    if(count($listaProductos)<1){
        $retval.='<td></td><td></td><td>No hay resultados de analisis guardados</td><td></td><td></td><td></td>';
    }else{     
       foreach($listaProductos as $producto){          
            $retval.=' <tr><td class="id"><span>'.$producto->getPrdt_sn().'</span></td>'                    
                    . '<td class="id"><span>'.$producto->getPrdt_nm().'</span></td>'
                    . '<td class="id"><span>'.$producto->getPrdt_spc_nm().'</span></td>'                    
                    . '<td class="id"><span>'.$producto->getPrdt_smt_frm_inf().'</span></td>'
                    . '<td class="copy" id="col_res_analisis"><span>'.trim($producto->getAnls_rst_nm()).'</span></td>'                    
                    . '<td class="id"><span>'.$producto->getLot_cd().'</span></td></tr>';
    
        }
    } 
    return $retval.'</table>';
}