<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp012Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function cargar_lista_producto_012($req_no){   
    $listaProducto= consulta_datos_producto_012($req_no);
    $retval='<table class="tabla"> <tr>
    <th>No</th>
    <th>Subpartida Arancelaria</th>
    <th>Nombre de Producto</th>
    <th>Nombre Científico de Producto</th>        
    <th>Cantidad de Embalaje de Producto</th>        
    <th>Peso Neto de Producto</th>
    <th>Número de Lote</th>  
    <th>Fecha de Producción</th>        
    </tr>';    
    if(count($listaProducto)<1){
        $retval.='<td></td><td></td><td></td><td>No hay Productos ingresados</td><td></td><td></td><td></td><td></td>';
    }else{
        foreach($listaProducto as $producto){
            $prdt_nm=wordwrap($producto->getPrdt_nm(), 10, "<br />",true);
            $lote=wordwrap($producto->getLot_cd(), 17, "<br />",true);
            $retval.=' <tr><td>'.$producto->getPrdt_sn().'</td>'
                    . '<td>'.$producto->getHc().'</td>'                    
                    . '<td>'.$prdt_nm.'</td>'
                    . '<td>'.$producto->getPrdt_stn().'</td>' 
                    . '<td>'.$producto->getPck_qt().'</td>'
                    . '<td>'.$producto->getPrdt_nwt().'</td>' 
                    . '<td>'.$lote.'</td>' 
                    . '<td>'.$producto->getPdtn_de().'</td></tr>';                                                                                                          
        }            
    }
    $retval.='</table>';
    return $retval;
}