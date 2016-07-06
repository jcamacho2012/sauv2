<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnInp001Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_contenedor_001_004($req_no){    
    $listaContenedor=  consulta_datos_contenedor_001_004($req_no);
    $retval='<table class="table table-striped"> <tr>
    <th>No</th>
    <th>Identificación de Contenedor</th>
    <th>Identificación de Precinto</th>
    </tr>';    
    if(count($listaContenedor)<1){
        $retval.='<td></td><td>No hay Contenedores ingresados</td><td></td>';
    }else{
        foreach($listaContenedor as $contenedor){
            $retval.=' <tr><td>'.$contenedor->getCtnr_sn().'</td>'
                    . '<td>'.$contenedor->getCtnr_idt_desc().'</td>'                    
                    . '<td>'.$contenedor->getSeal_no().'</td></tr>';                                                                   
        }            
    }
    $retval.='</table>';
    return $retval;
}