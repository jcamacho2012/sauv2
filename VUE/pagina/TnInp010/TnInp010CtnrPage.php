<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnInp010Impl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_contenedor_010($req_no){    
    $listaContenedor=consulta_datos_contenedor_010($req_no);
    $retval='<table class="tabla"><tr>
    <th>No</th>
    <th>Número de Contenedor</th>
    <th>Precinto</th>
    </tr>';    
     if(count($listaContenedor)<1){
        $retval.='<td></td><td></td><td>No hay Productos ingresados</td><td></td><td></td>';
    }else{
        foreach($listaContenedor as $contenedor){
            $retval.=' <tr><td>'.$contenedor->getCtnr_sn().'</td>'
                    . '<td>'.$contenedor->getCtnr_no().'</td>'                                        
                    . '<td>'.$contenedor->getSeal_no().'</td></tr>';                                                                                                          
        }            
    }
    $retval.='</table>';
    return $retval;
}
