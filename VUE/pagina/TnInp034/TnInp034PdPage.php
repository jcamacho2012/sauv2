<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp034Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_productos_034($req_no){    
    $listaProductos= consulta_datos_producto_034($req_no);
    $retval='<table class="table table-striped"> <tr>
    <th>No</th>
    <th>Subpartida Arancelaria</th>
    <th>Marca de Producto</th>
    <th>Descripción de Producto</th>    
    <th>Número de Lote</th>
    <th>Cantidad de Producto</th>    
    <th>Peso Neto de Producto</th>
    </tr>';    
    if(count($listaProductos)<1){
        $retval.='<td></td><td></td><td></td><td>No hay Productos ingresados</td><td></td><td></td><td></td>';
    }else{
        foreach($listaProductos as $producto){
            //$lote=wordwrap($producto->getLot_no(), 17, "<br />",true);
            $retval.=' <tr><td>'.$producto->getPrdt_sn().'</td>'
                    . '<td>'.$producto->getHc().'</td>'
                    . '<td>'.$producto->getPrdt_bdnm().'</td>'
                    . '<td>'.$producto->getPrdt_desc().'</td>'                    
                    . '<td>'.$producto->getLot_no().'</td>'
                    . '<td>'.$producto->getPrdt_qt().'</td>'                    
                    . '<td>'.$producto->getPrdt_nwt().'</td></tr>';                                                                   
        }
    }
    $retval.='</table>';
    return $retval;
}