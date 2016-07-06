<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp008Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function cargar_lista_producto_008($req_no,$dcm_cd){   
    $listaProducto= consulta_datos_producto_008($req_no);
    $retval='<table class="tabla"> <tr>
    <th>No</th>
    <th>Subpartida Arancelaria</th>
    <th>Nombre de Producto</th>';
    if($dcm_cd=='130-008-REQ'){
        $retval.='<th>Nombre de Especie de Producto</th>';
    }
    $retval.=    
    '<th>Fecha de Producción</th>        
    <th>Cantidad de Paquetes de Producto y Tipo de Embalaje</th>
    <th>Peso Neto</th>  
    <th>Número de Lote</th>
    <th>Marca de Identificación</th> 
    <th>Condiciones de Almacenamiento y Transporte</th>';
     if($dcm_cd=='130-008-REQ'){
        $retval.=' <th>Unidad de la Temperatura</th>';
    }
    $retval.='</tr>';    
    if(count($listaProducto)<1){
        $retval.='<td></td><td></td><td></td><td></td><td></td><td>No hay Productos ingresados</td><td></td><td></td><td></td><td></td><td></td>';
    }else{
        foreach($listaProducto as $producto){            
            $lote=wordwrap($producto->getLot_no(), 17, "<br />",true);
            $retval.=' <tr><td>'.$producto->getPrdt_sn().'</td>'
                    . '<td>'.$producto->getHc().'</td>'
                    . '<td>'.$producto->getPrdt_nm().'</td>';
                     if($dcm_cd=='130-008-REQ'){
                         $retval.= '<td>'.$producto->getPrdt_spc_nm().'</td>';
                     }
                    $retval.='<td>'.$producto->getPdtn_de().'</td>'
                    . '<td>'.$producto->getPkgs_qt().'</td>'
                    . '<td>'.$producto->getPrdt_nwt().'</td>' 
                    . '<td>'.$lote.'</td>'
                    . '<td>'.$producto->getBdnm().'</td>'
                    . '<td>'.$producto->getTrsp_whos_cdt_det().'</td>';
                    if($dcm_cd=='130-008-REQ'){
                        $retval.= '<td>'.$producto->getDfct_slz_prcg_tp_ut().'</td></tr>';
                    }
                    $retval.='</tr>';                                                                                                             
        }            
    }
    $retval.='</table>';
    return $retval;
}
