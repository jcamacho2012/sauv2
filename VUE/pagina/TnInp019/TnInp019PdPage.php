<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp019Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_productos_019($req_no){ 
    $listaProductos= consulta_datos_producto_019($req_no);
    $retval='<table class="table table-striped"> <tr>
    <th>No</th>
    <th>Subpartida Arancelaria</th>
    <th>Nombre de Producto</th>
    <th>Cantidad de Producto</th>    
    <th>Número de Lote</th>    
    <th>Número de Registro Sanitario Unificado</th>    
    </tr>';
    
    if(count($listaProductos)<1){
        $retval.='<td></td><td></td><td></td><td>No hay Productos ingresados</td><td></td><td></td>';
    }else{     
       foreach($listaProductos as $producto){
            $retval.=' <tr><td>'.$producto->getPrdt_sn().'</td>'
                    . '<td>'.$producto->getHc().'</td>'
                    . '<td>'.$producto->getPrdt_nm().'</td>'                    
                    . '<td>'.$producto->getPrdt_qt().'</td>'
                    . '<td>'.$producto->getLot_no().'</td>'                    
                    . '<td>'.$producto->getSty_rgs_no().'</td></tr>';                                                                   
        }
    }
    $retval.='</table>';
    return $retval;
}