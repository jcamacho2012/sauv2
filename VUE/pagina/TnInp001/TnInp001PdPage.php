<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp001Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_productos_001_004($req_no){   
    $listaProducto= consulta_datos_producto_001_004($req_no);
    $retval='<table class="tabla"> <tr>
    <th>No</th>
    <th>Subpartida Arancelaria</th>
    <th>Descripción de Producto</th>
    <th>Nombre Científico de Producto</th>
    <th>Cantidad de Paquetes de Producto y Tipo de Embalaje</th>
    <th>Peso Neto de Producto</th>
    <th>Código de Lote</th>
    </tr>';    
    if(count($listaProducto)<1){
        $retval.='<td></td><td></td><td></td><td>No hay Productos ingresados</td><td></td><td></td><td></td>';
    }else{
        foreach($listaProducto as $producto){
            $lote=wordwrap($producto->getLot_cd(),15,"<br />",true);
            $retval.=' <tr><td>'.$producto->getPrdt_sn().'</td>'
                    . '<td>'.$producto->getHc().'</td>'                    
                    . '<td>'.$producto->getPrdt_desc().'</td>'
                    . '<td>'.$producto->getPrdt_stn().'</td>'
                    . '<td>'.$producto->getPkgs_qt().'</td>'
                    . '<td>'.$producto->getPrdt_nwt().'</td>'                    
                    . '<td>'.$lote.'</td></tr>';                                                                   
        }            
    }
    $retval.='</table>';
    return $retval;
}
