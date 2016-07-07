<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp044/TnInp044AnlsVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp044/TnInp044VO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function consulta_datos_formulario_044($req_no) {                           
    $sql="   SELECT  
                 COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
                ,COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
                ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm				
                ,COALESCE(NULLIF(a.req_city_nm,'')::TEXT,'No Aplica') AS req_city_nm
                ,COALESCE(nullif(a.rfr_dcm_no,'')::TEXT,'No Aplica') AS rfr_dcm_no
                ,case 
                when dclr_cl_cd='001' 
                        then 'Persona Jurídica'::TEXT
                WHEN dclr_cl_cd='002'
                        then 'Persona Natural'::TEXT
                else
                        'No Aplica'
                end AS dclr_cl_cd					
                ,COALESCE(a.dclr_idt_no::TEXT,'No Aplica') AS dclr_idt_no
                ,COALESCE(a.dclr_nm::TEXT,'No Aplica') AS dclr_nm
                ,COALESCE(nullif(a.dclr_nole,'')::TEXT,'No Aplica') AS dclr_nole
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
                ,COALESCE(a.impr_city_nm::TEXT,'No Aplica') AS impr_city_nm
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
                ,COALESCE(a.expr_prvhc_nm::TEXT,'No Aplica') AS expr_prvhc_nm				
                ,COALESCE(a.expr_cuty_nm::TEXT,'No Aplica') AS expr_cuty_nm				
                ,COALESCE(a.expr_prqi_nm::TEXT,'No Aplica') AS expr_prqi_nm
                ,COALESCE(a.expr_ad::TEXT,'No Aplica') AS expr_ad
                ,COALESCE(a.expr_tel_no::TEXT,'No Aplica') AS expr_tel_no
                ,COALESCE(nullif(a.expr_fax_no,'')::TEXT,'No Aplica') AS expr_fax_no
                ,COALESCE(nullif(a.expr_em,'')::TEXT,'No Aplica') AS expr_em
                ,COALESCE(a.inv_no::TEXT,'No Aplica') AS inv_no
                ,COALESCE(nullif(a.lbty_zne_nm,'')::TEXT,'No Aplica') AS lbty_zne_nm
                ,COALESCE(nullif(a.lbty_ad,'')::TEXT,'No Aplica') AS lbty_ad
                ,COALESCE(nullif(a.lbty_cd,'')::TEXT,'No Aplica') AS lbty_cd							
                ,COALESCE(nullif(a.hc,'')::TEXT,'No Aplica') AS hc
                ,COALESCE(nullif(a.tnk_cd,'')::TEXT,'No Aplica') AS tnk_cd
                ,COALESCE(nullif(a.lot_cd,'')::TEXT,'No Aplica') AS lot_cd
                ,COALESCE(nullif(a.cltr_ut_nm,'')::TEXT,'No Aplica') AS cltr_ut_nm
                ,COALESCE(nullif(a.smt_frm_nm,'')::TEXT,'No Aplica') AS smt_frm_nm
                ,COALESCE(nullif(a.spc_nm,'')::TEXT,'No Aplica') AS spc_nm
                ,COALESCE(nullif(a.rpdt_rgm_nm,'')::TEXT,'No Aplica') AS rpdt_rgm_nm				
                ,COALESCE(nullif(a.dst_ntn_nm,'')::TEXT,'No Aplica') AS dst_ntn_nm				
                ,COALESCE(CAST(round(a.prdt_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_nwt
                ,COALESCE(nullif(a.nwt_ut,'')::TEXT,'No Aplica') AS nwt_ut
                ,COALESCE(a.pck_qt::TEXT,'No Aplica') AS pck_qt
                ,COALESCE(nullif(a.pck_ut,'')::TEXT,'No Aplica') AS pck_ut				
                ,COALESCE(CAST(round(a.exp_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS exp_qt
                ,COALESCE(nullif(a.prdt_qt_ut,'')::TEXT,'No Aplica') AS prdt_qt_ut								
                ,COALESCE(nullif(a.dclr_rmk,'')::TEXT,'No Aplica') AS dclr_rmk								
                ,COALESCE(to_char(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt
                ,COALESCE(to_char(a.samp_rcv_de,'DD/MM/YYYY')::TEXT,'No Aplica') AS samp_rcv_de
                FROM  vue_gateway.tn_inp_044 as a 
                where a.req_no='".$req_no."'";
        $conexion=new DB();
        $row = $conexion->consultar($sql,1);                
        $TnInp044=new TnInp044VO($row);  
        return $TnInp044;
}

function consulta_datos_analisis_044($req_no) {     
        $sql="	SELECT  						
                    COALESCE(a.prdt_sn::TEXT,'No Aplica') AS prdt_sn
                    ,COALESCE(a.anls_type_nm::TEXT,'No Aplica') AS anls_type_nm						
                    ,COALESCE(CAST(round(a.anls_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS anls_qt
                    ,COALESCE(a.anls_qt_ut::TEXT,'No Aplica') AS anls_qt_ut						
                    FROM  vue_gateway.tn_inp_044_anls as a 
                    where a.req_no='".$req_no."'";   
        $conexion=new DB();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp044AnlsVO();        
        $lista=$objeto->getAnalisis044($result);                   
        return $lista; 
}