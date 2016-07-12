<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/Conexion.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_secuencial($secuencial){    
    $sql="select afr_prst_cd from vue_gateway.tn_eld_edoc_last_stat where req_no=
          (select req_no as valor from vue_gateway.tn_inp_016 where ctft_no='".$secuencial."')";                 
    $conexion=new DB();
    $row = $conexion->consultar($sql,1);       
    return $row; 
}
