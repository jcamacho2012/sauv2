<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnCmmFlAtch/TnCmmFlAtchVO.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_datos_adjuntos($req_no) {      
    $sql="  SELECT 	
            A.ATCH_DCM_CTG_NM::TEXT as ATCH_DCM_CTG_NM								
            ,'ftp://ftpinp:ftpinp@192.168.169.88/INPDEV'||substring (FL.fl_path, 10)  as fl_path						
            FROM 
            vue_gateway.TA_IPT_EDOC_PRCS_INF B
            ,vue_gateway.TA_IPT_DOCB_FL_INF A
            ,vue_gateway.ta_cmm_fl FL
             WHERE 	1=1
                 and 	A.PRCS_SN = B.PRCS_SN 
                 AND 	A.ORGZ_CD = B.ORGZ_CD     
                 and 	fl.fl_id = a.fl_id
                 AND 	A.FL_TYPE_CD = '003'       
                 AND 	B.RCSD_EDOC_AFR_ID = '".$req_no."'
                 AND 	A.PRCS_SN = 	( 
                                            SELECT	PRCS_SN
                                                    FROM 	vue_gateway.TA_IPT_EDOC_PRCS_INF 
                                             WHERE 	RCSD_EDOC_AFR_ID = '".$req_no."'
                                                     and 	rcsd_edoc_afr_cd in ('110','140','150','420')
                                            order by rgs_dt desc
                                            limit 1
                                         );";       
        $conexion=new DB();        
        $result = $conexion->consultar($sql, 2);
        $objeto=new TnCmmFlAtchVO();        
        $lista=$objeto->getAdjuntos($result);                             
        return $lista; 
}

