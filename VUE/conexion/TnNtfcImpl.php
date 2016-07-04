<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnNtfc/TnNtfcVO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_datos_notificacion($req_no) {      
    $sql=" SELECT 
	COALESCE(ntcp_nm::TEXT,'No Aplica') AS ntcp_nm
	,COALESCE(ntfc_ctxt::TEXT,'No Aplica') AS ntfc_ctxt
	from vue_gateway.tn_eld_ntfc 
        where req_no='".$req_no."'";     
        $conexion=new conexion();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnNtfcVO();        
        $lista=$objeto->getNotificacion($result);                   
        return $lista;  
}




