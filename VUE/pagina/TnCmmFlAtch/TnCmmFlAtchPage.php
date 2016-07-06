<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/TnCmmFlAtchImpl.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_lista_adjuntos($req_no){
    $listaAdjuntos= consulta_datos_adjuntos($req_no);
    $retval='<table class="adjunto"><tr>    
    <th>Nombre</th>
    <th>Documento</th>
    </tr>';    
     if(count($listaAdjuntos)<1){
        $retval.='<td>No hay adjuntos en la solicitud</td>';
    }else{    
    foreach($listaAdjuntos as $adjunto){
            $retval.=' <tr><td>'.$adjunto->getAtch_dcm_ctg_nm().'</td>'                   
                   . '<td><a href='.$adjunto->getFl_path().' target="_blank">Visualizar</a></td></tr>';                        
        }            
    }
    $retval.='</table>';
    return $retval;
}

function cargar_lista_adjuntos_045($req_no){
    $listaAdjuntos= consulta_datos_adjuntos($req_no);
    $retval='<table class="form045"> <tr>    
    <th>Nombre</th>
    <th>Documento</th>
    </tr>';    
     if(count($listaAdjuntos)<1){
        $retval.='<td>No hay adjuntos en la solicitud</td>';
    }else{    
    foreach($listaAdjuntos as $adjunto){
            $retval.=' <tr><td>'.$adjunto->getAtch_dcm_ctg_nm().'</td>'                   
                   . '<td><a href='.$adjunto->getFl_path().' target="_blank">Visualizar</a></td></tr>';                        
        }            
    }
    $retval.='</table>';
    return $retval;
}

function cargar_lista_adjuntos_016($req_no){
    $listaAdjuntos= consulta_datos_adjuntos($req_no);
    $retval='<table class="form016"> <tr>    
    <th>Nombre</th>
    <th>Documento</th>
    </tr>';    
     if(count($listaAdjuntos)<1){
        $retval.='<td>No hay adjuntos en la solicitud</td>';
    }else{    
    foreach($listaAdjuntos as $adjunto){
            $retval.=' <tr><td>'.$adjunto->getAtch_dcm_ctg_nm().'</td>'                   
                   . '<td><a href='.$adjunto->getFl_path().' target="_blank">Visualizar</a></td></tr>';                        
        }            
    }
    $retval.='</table>';
    return $retval;
}
