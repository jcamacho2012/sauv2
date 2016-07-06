<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp033Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_productos_033($req_no){    
    $listaProductos= consulta_datos_producto_033($req_no);
    $retval='<table class="tabla"> <tr>
    <th>No</th>
    <th>Subpartida Arancelaria</th>
    <th>Marca de Producto</th>
    <th>Descripción de Producto</th>
    <th>Nombre Científico de Producto</th>
    <th>Número de Lote</th>
    <th>Cantidad de Paquetes de Producto y Tipo de Embalaje</th>    
    <th>Peso Neto de Producto</th>
    </tr>';    
    if(count($listaProductos)<1){
        $retval.='<td></td><td></td><td></td><td>No hay Productos ingresados</td><td></td><td></td><td></td><td></td>';
    }else{
        foreach($listaProductos as $producto){
            $lote=wordwrap($producto->getLot_no(), 17, "<br />",true);
            $retval.=' <tr><td>'.$producto->getPrdt_sn().'</td>'
                    . '<td>'.$producto->getHc().'</td>'
                    . '<td>'.$producto->getPrdt_bdnm().'</td>'
                    . '<td>'.$producto->getPrdt_desc().'</td>'
                    . '<td>'.$producto->getPrdt_stn().'</td>'
                    . '<td>'.$lote.'</td>'
                    . '<td>'.$producto->getPrdt_qt().'</td>'                    
                    . '<td>'.$producto->getPrdt_nwt().'</td></tr>';                                                                   
        }
    }
    $retval.='</table>';
    return $retval;
}