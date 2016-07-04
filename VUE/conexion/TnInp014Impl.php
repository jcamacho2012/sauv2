<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp014/TnInp014CtnrVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp014/TnInp014VO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function consulta_datos_formulario_014($req_no) {                           
    $sql=" SELECT  
             COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
            ,COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
            ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm				
            ,COALESCE(a.dcm_type_nm::TEXT,'No Aplica') AS dcm_type_nm				
            ,COALESCE(a.req_city_nm::TEXT,'No Aplica') AS req_city_nm
            ,coalesce(nullif(a.prev_ctft_no,'')::TEXT,'No Aplica') AS prev_ctft_no
            ,COALESCE(to_char(a.prev_ctft_iss_de,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS prev_ctft_iss_de
            ,COALESCE(a.rfr_dcm_no::TEXT,'No Aplica') AS rfr_dcm_no
            ,COALESCE(nullif(a.qlt_ctft_no,'')::TEXT,'No Aplica') AS qlt_ctft_no
            ,case 
            when dclr_cl_cd='001' 
                    then 'Persona Jurídica'::TEXT
            WHEN dclr_cl_cd='002'
                    then 'Persona Natural'::TEXT
            else
                    'No Aplica'
            end AS dclr_cl_cd									
            ,COALESCE(a.dclr_idt_no::TEXT,'No Aplica') AS dclr_idt_no
            ,COALESCE(nullif(a.dclr_nole,'')::TEXT,'No Aplica') AS dclr_nole
            ,COALESCE(a.dclr_nm::TEXT,'No Aplica') AS dclr_nm
            ,COALESCE(a.dclr_rpgp_nm::TEXT,'No Aplica') AS dclr_rpgp_nm				
            ,COALESCE(a.dclr_prvhc_nm::TEXT,'No Aplica') AS dclr_prvhc_nm				
            ,COALESCE(a.dclr_cuty_nm::TEXT,'No Aplica') AS dclr_cuty_nm				
            ,COALESCE(a.dclr_prqi_nm::TEXT,'No Aplica') AS dclr_prqi_nm
            ,COALESCE(a.dclr_ad::TEXT,'No Aplica') AS dclr_ad
            ,COALESCE(a.dclr_tel_no::TEXT,'No Aplica') AS dclr_tel_no
            ,COALESCE(nullif(a.dclr_fax_no,'')::TEXT,'No Aplica') AS dclr_fax_no
            ,COALESCE(nullif(a.dclr_em,'')::TEXT,'No Aplica') AS dclr_em
            ,COALESCE(a.impr_nm::TEXT,'No Aplica') AS impr_nm				
            ,COALESCE(a.impr_ntn_nm::TEXT,'No Aplica') AS impr_ntn_nm				
            ,COALESCE(nullif(a.impr_city_nm,'')::TEXT,'No Aplica') AS impr_city_nm
            ,COALESCE(a.impr_ad::TEXT,'No Aplica') AS impr_ad
            ,COALESCE(nullif(a.impr_tel_no,'')::TEXT,'No Aplica') AS impr_tel_no
            ,COALESCE(nullif(a.impr_fax_no,'')::TEXT,'No Aplica') AS impr_fax_no
            ,COALESCE(nullif(a.impr_em,'')::TEXT,'No Aplica') AS impr_em
            ,case 
            when expr_cl_cd='001' 
                    then 'Persona Jurídica'::TEXT
            WHEN expr_cl_cd='002'
                    then 'Persona Natural'::TEXT
            else
                    'No Aplica'
            end AS expr_cl_cd					
            ,COALESCE(a.expr_idt_no::TEXT,'No Aplica') AS expr_idt_no
            ,COALESCE(a.expr_nm::TEXT,'No Aplica') AS expr_nm
            ,COALESCE(a.expr_atr_no::TEXT,'No Aplica') AS expr_atr_no				
            ,COALESCE(a.expr_ntn_nm::TEXT,'No Aplica') AS expr_ntn_nm				
            ,COALESCE(nullif(a.expr_city_nm,'')::TEXT,'No Aplica') AS expr_city_nm				
            ,COALESCE(a.expr_prvhc_nm::TEXT,'No Aplica') AS expr_prvhc_nm				
            ,COALESCE(a.expr_cuty_nm::TEXT,'No Aplica') AS expr_cuty_nm				
            ,COALESCE(a.expr_prqi_nm::TEXT,'No Aplica') AS expr_prqi_nm
            ,COALESCE(a.expr_ad::TEXT,'No Aplica') AS expr_ad
            ,COALESCE(a.expr_tel_no::TEXT,'No Aplica') AS expr_tel_no
            ,COALESCE(nullif(a.expr_fax_no,'')::TEXT,'No Aplica') AS expr_fax_no
            ,COALESCE(nullif(a.expr_em,'')::TEXT,'No Aplica') AS expr_em				
            ,COALESCE(nullif(a.prdr_ntn_nm,'')::TEXT,'No Aplica') AS prdr_ntn_nm
            ,case 
            when pcs_cl_cd='001' 
                    then 'Persona Jurídica'::TEXT
            WHEN pcs_cl_cd='002'
                    then 'Persona Natural'::TEXT
            else
                    'No Aplica'
            end AS pcs_cl_cd				
            ,COALESCE(nullif(a.pcs_idt_no,'')::TEXT,'No Aplica') AS pcs_idt_no
            ,COALESCE(nullif(a.pcs_nm,'')::TEXT,'No Aplica') AS pcs_nm
            ,COALESCE(nullif(a.pcs_atr_no,'')::TEXT,'No Aplica') AS pcs_atr_no
            ,COALESCE(nullif(a.pcs_rpgp_nm,'')::TEXT,'No Aplica') AS pcs_rpgp_nm				
            ,COALESCE(nullif(a.pcs_prvhc_nm,'')::TEXT,'No Aplica') AS pcs_prvhc_nm				
            ,COALESCE(nullif(a.pcs_cuty_nm,'')::TEXT,'No Aplica') AS pcs_cuty_nm				
            ,COALESCE(nullif(a.pcs_prqi_nm,'')::TEXT,'No Aplica') AS pcs_prqi_nm
            ,COALESCE(nullif(a.pcs_ad,'')::TEXT,'No Aplica') AS pcs_ad
            ,COALESCE(nullif(a.pcs_tel_no,'')::TEXT,'No Aplica') AS pcs_tel_no
            ,COALESCE(nullif(a.pcs_fax_no,'')::TEXT,'No Aplica') AS pcs_fax_no
            ,COALESCE(nullif(a.pcs_em,'')::TEXT,'No Aplica') AS pcs_em				
            ,COALESCE(a.org_ntn_nm::TEXT,'No Aplica') AS org_ntn_nm
            ,COALESCE(a.ctft_iss_orgz_nm::TEXT,'No Aplica') AS ctft_iss_orgz_nm
            ,COALESCE(a.hc::TEXT,'No Aplica') AS hc
            ,COALESCE(a.prdt_pck_type_inf::TEXT,'No Aplica') AS prdt_pck_type_inf				
            ,COALESCE(CAST(round(a.prdt_pck_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_pck_qt								
            ,COALESCE(a.prdt_pck_ut::TEXT,'No Aplica') AS prdt_pck_ut
            ,COALESCE(CAST(round(a.prdt_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_nwt								
            ,COALESCE(a.prdt_nwt_ut::TEXT,'No Aplica') AS prdt_nwt_ut				
            ,COALESCE(a.send_ntn_nm::TEXT,'No Aplica') AS send_ntn_nm				
            ,COALESCE(a.send_city_nm::TEXT,'No Aplica') AS send_city_nm				
            ,COALESCE(a.dst_ntn_nm::TEXT,'No Aplica') AS dst_ntn_nm				
            ,COALESCE(a.dst_city_nm::TEXT,'No Aplica') AS dst_city_nm				
            ,COALESCE(a.trsp_way_nm::TEXT,'No Aplica') AS trsp_way_nm
            ,COALESCE(nullif(a.vsl_nm,'')::TEXT,'No Aplica') AS vsl_nm
            ,COALESCE(nullif(a.fghnb,'')::TEXT,'No Aplica') AS fghnb
            ,COALESCE(nullif(a.oter_trsp_way_nm,'')::TEXT,'No Aplica') AS oter_trsp_way_nm
            ,COALESCE(nullif(a.ctnr_no,'')::TEXT,'No Aplica') AS ctnr_no
            ,COALESCE(nullif(a.seal_no,'')::TEXT,'No Aplica') AS seal_no
            ,COALESCE(a.prdt_nm::TEXT,'No Aplica') AS prdt_nm
            ,COALESCE(a.inv_no::TEXT,'No Aplica') AS inv_no
            ,COALESCE(nullif(a.lot_cd,'')::TEXT,'No Aplica') AS lot_cd
            ,COALESCE(nullif(a.dclr_rmk,'')::TEXT,'No Aplica') AS dclr_rmk								
            ,COALESCE(to_char(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt				
            FROM  vue_gateway.tn_inp_014 as a
            where a.req_no='".$req_no."'";               
        $conexion=new conexion();
        $row = $conexion->consultar($sql,1);                
        $TnInp014=new TnInp014VO($row);         
        return $TnInp014; 
}

function consulta_datos_contenedor_014($req_no) {      
        $sql=" SELECT  					 					 
                    COALESCE(a.ctnr_sn::TEXT,'No Aplica') AS ctnr_sn
                    ,COALESCE(a.ctnr_no::TEXT,'No Aplica') AS ctnr_no
                    ,COALESCE(a.seal_no::TEXT,'No Aplica') AS seal_no					
                    FROM  vue_gateway.tn_inp_014_cntr as a 
                    where a.req_no='".$req_no."'";			  				                 					
        $conexion=new conexion();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp014CtnrVO();        
        $lista=$objeto->getContenedor014($result);                   
        return $lista;         
}

