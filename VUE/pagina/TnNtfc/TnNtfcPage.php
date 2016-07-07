<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/TnNtfcImpl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_notificaciones($req_no){   
    $listaNotificacion= consulta_datos_notificacion($req_no);
    $retval='<table class="table table-striped"><tr>
    <th>Nombre</th>
    <th>Mensaje</th>    
    </tr>';    
    if(count($listaNotificacion)<1){
        $retval.='<td></td><td>No hay Mensajes</td>';
    }else{        
        foreach($listaNotificacion as $notificacion){            
            $retval.=' <tr><td>'.$notificacion->getNombre().'</td>'                                   
                    . '<td>'.$notificacion->getMensaje().'</td></tr>';                                                                   
        }            
    }
    $retval.='</table>';
    return $retval;
}
