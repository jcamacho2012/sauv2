<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp006Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_productos_006_040($req_no){   
    $listaProducto= consulta_datos_producto_006_040($req_no);
    $retval='<table class="table table-striped"> <tr>
    <th>No</th>
    <th>Subpartida Arancelaria</th>
    <th>Nombre de Producto</th>
    <th>Nombre Científico de Producto</th>
    <th>Cantidad de Paquetes de Producto y Tipo de Embalaje</th>
    <th>Peso Neto de Producto</th>    
    <th>Código de Lote</th>
    <th>Fecha de producción</th>
    </tr>';    
    if(count($listaProducto)<1){
        $retval.='<td></td><td></td><td></td><td>No hay Productos ingresados</td><td></td><td></td><td></td>';
    }else{
        foreach($listaProducto as $producto){
            $retval.=' <tr><td>'.$producto->getPrdt_sn().'</td>'
                    . '<td>'.$producto->getHc().'</td>'                    
                    . '<td>'.$producto->getPrdt_nm().'</td>'
                    . '<td>'.$producto->getStn().'</td>'
                    . '<td>'.$producto->getPkgs_qt().'</td>'
                    . '<td>'.$producto->getPrdt_nwt().'</td>'                    
                    . '<td>'.$producto->getPrdt_lote().'</td>'
                    . '<td>'.$producto->getPrdt_prodt().'</td></tr>'; 
        }            
    }
    $retval.='</table>';
    return $retval;
}
