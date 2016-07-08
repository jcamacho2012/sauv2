<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp039Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_productos_039($req_no){    
    $listaProductos= consulta_datos_producto_039($req_no);
    $retval='<table class="table table-striped">
                <tr>
                    <th>No.</th>
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
                        . '<td>'.$producto->getPrdt_sn().'</td>'
                        . '<td>'.$producto->getHc().'</td>'
                        . '<td>'.$producto->getPrdt_nm().'</td>'
                        . '<td>'.$producto->getPrdt_spc_nm().'</td>'                    
                        . '<td>'.$producto->getPrdt_smt_frm_inf().'</td>'
                        . '<td>'.$producto->getAnls_type_nm().'</td>'
                        . '<td>'.$producto->getPrdt_qt().'</td>'
                        . '<td>'.$producto->getPrdt_nwt().'</td>'
                        . '<td>'.$producto->getLot_cd().'</td></tr>'; 
        }            
    }
    $retval.='</table>';
    return $retval;
}