<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp010Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function cargar_lista_producto_010($req_no){   
    $listaProducto= consulta_datos_producto_010($req_no);
    $retval='<table class="table table-striped"> <tr>
    <th>No</th>
    <th>Subpartida Arancelaria</th>
    <th>Especie Animal</th>
    <th>Descripción de la Mercadería</th>        
    <th>Peso Neto</th>
    </tr>';    
    if(count($listaProducto)<1){
        $retval.='<td></td><td></td><td>No hay Productos ingresados</td><td></td><td></td>';
    }else{
        foreach($listaProducto as $producto){
            $retval.=' <tr><td>'.$producto->getPrdt_sn().'</td>'
                    . '<td>'.$producto->getHc().'</td>'                    
                    . '<td>'.$producto->getAnml_spc_nm().'</td>'
                    . '<td>'.$producto->getPrdt_desc().'</td>'                    
                    . '<td>'.$producto->getPrdt_nwt().'</td></tr>';                                                                                                          
        }            
    }
    $retval.='</table>';
    return $retval;
}
