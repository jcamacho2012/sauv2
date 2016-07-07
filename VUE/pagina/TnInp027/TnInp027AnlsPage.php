<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp027Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_analisis_027($req_no){ 
    $listaAnalisis= consulta_datos_analisis_027($req_no);
    $retval='<table class="table table-striped"> <tr>
    <th>No</th>
    <th>Nombre de Análisis</th>
    <th>Cantidad de Análisis</th>    
    </tr>';
    
    if(count($listaAnalisis)<1){
        $retval.='<td></td><td>No hay Analisis ingresados</td><td></td>';
    }else{     
       foreach($listaAnalisis as $analisis){
            $retval.=' <tr><td>'.$analisis->getAnls_sn().'</td>'
                    . '<td>'.$analisis->getAnls_type_nm().'</td>'
                    . '<td>'.$analisis->getAnls_qt().'</td></tr>';                                                                   
        }
    }
    $retval.='</table>';
    return $retval;
}