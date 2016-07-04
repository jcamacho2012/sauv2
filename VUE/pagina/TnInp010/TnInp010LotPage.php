<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp010Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_lote_010($req_no){    
    $listaLote=  consulta_datos_lote_010($req_no);
    $retval='<table class="tabla"><tr>
    <th>No</th>
    <th>Lote</th>
    <th>Fecha de Producción</th>
    <th>Fecha Limite de Conservación</th>
    </tr>';    
     if(count($listaLote)<1){
        $retval.='<td></td><td></td><td>No hay Productos ingresados</td><td></td>';
    }else{
        foreach($listaLote as $lote){
            $retval.=' <tr><td>'.$lote->getLot_sn().'</td>'
                    . '<td>'.$lote->getLot_nm().'</td>'
                    . '<td>'.$lote->getPdtn_de().'</td>'
                    . '<td>'.$lote->getCsbt_lim_de().'</td></tr>';                                                                                                          
        }            
    }
    $retval.='</table>';
    return $retval;
}
