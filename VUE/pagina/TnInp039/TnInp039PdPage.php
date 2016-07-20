<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp039Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_productos_039($req_no){    
    $listaProductos= consulta_datos_producto_039($req_no);
    $retval='<table class="table table-hover" class="editinplace" id="calidad">
                <tr>
                    <th class="id">No.</th>
                    <th>Subpartida Arancelaria</th>
                    <th>Nombre de Producto</th>
                    <th>Nombre de Especie de Producto</th>
                    <th>Presentacion de Producto</th>
                    <th>Tipo de Análisis</th>
                    <th>Cantidad de Producto</th>
                    <th>Peso Neto de Producto</th>
                    <th>Código de Lote</th>
                </tr>';    
     if(count($listaProductos)<1){
        $retval.='<td></td><td></td><td>No hay Productos ingresados</td><td></td><td></td>';
    }else{
        foreach($listaProductos as $producto){
            $retval.=' <tr>'
                        . '<td td class="id" id="prdt_sn"><span>'.$producto->getPrdt_sn().'</span></td>'
                        . '<td class="id"><span>'.$producto->getHc().'</span></td>'
                        . '<td class="id"><span>'.$producto->getPrdt_nm().'</span></td>'
                        . '<td class="id"><span>'.$producto->getPrdt_spc_nm().'</span></td>'                    
                        . '<td class="id"><span>'.$producto->getPrdt_smt_frm_inf().'</span></td>'
                        . '<td class="editable" data-campo="nombre" id="col_analisis"><span>'.$producto->getAnls_type_nm().'</span></td>'
                        . '<td class="id"><span>'.$producto->getPrdt_qt().'</span></td>'
                        . '<td class="id"><span>'.$producto->getPrdt_nwt().'</span></td>'
                        . '<td class="id"><span>'.$producto->getLot_cd().'</span></td></tr>';                       
        }            
    }
    $retval.='</table>';
    return $retval;
}
