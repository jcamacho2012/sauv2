<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp008/TnInp008PdVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp008/TnInp008CtnrVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp008/TnInp008VO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function consulta_datos_formulario_008($req_no) {                           
    $sql=" SELECT  
             COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
            ,COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
            ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm															
            ,COALESCE(a.dcm_type_nm::TEXT,'No Aplica') AS dcm_type_nm
            ,COALESCE(nullif(a.req_city_nm,'')::TEXT,'No Aplica') AS req_city_nm
            ,COALESCE(nullif(a.prev_ctft_no,'')::TEXT,'No Aplica') AS prev_ctft_no
            ,COALESCE(to_char(a.prev_ctft_iss_de,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS prev_ctft_iss_de
            ,COALESCE(nullif(a.rfr_dcm_no,'')::TEXT,'No Aplica') AS rfr_dcm_no
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
            ,COALESCE(NULLIF(a.expr_fax_no,'')::TEXT,'No Aplica') AS expr_fax_no
            ,COALESCE(NULLIF(a.expr_em,'')::TEXT,'No Aplica') AS expr_em
            ,case 
            when mfr_cl_cd='001' 
                    then 'Persona Jurídica'::TEXT
            WHEN mfr_cl_cd='002'
                    then 'Persona Natural'::TEXT
            else
                    'No Aplica'
            end AS mfr_cl_cd						
            ,COALESCE(NULLIF(a.mfr_idt_no,'')::TEXT,'No Aplica') AS mfr_idt_no
            ,COALESCE(NULLIF(a.mfr_nm,'')::TEXT,'No Aplica') AS mfr_nm
            ,COALESCE(NULLIF(a.mfr_atr_no,'')::TEXT,'No Aplica') AS mfr_atr_no
            ,COALESCE(NULLIF(a.mfr_rpgp_nm,'')::TEXT,'No Aplica') AS mfr_rpgp_nm					
            ,COALESCE(NULLIF(a.mfr_prvhc_nm,'')::TEXT,'No Aplica') AS mfr_prvhc_nm					
            ,COALESCE(NULLIF(a.mfr_cuty_nm,'')::TEXT,'No Aplica') AS mfr_cuty_nm					
            ,COALESCE(NULLIF(a.mfr_prqi_nm,'')::TEXT,'No Aplica') AS mfr_prqi_nm
            ,COALESCE(NULLIF(a.mfr_ad,'')::TEXT,'No Aplica') AS mfr_ad
            ,COALESCE(NULLIF(a.mfr_tel_no,'')::TEXT,'No Aplica') AS mfr_tel_no
            ,COALESCE(NULLIF(a.mfr_fax_no,'')::TEXT,'No Aplica') AS mfr_fax_no
            ,COALESCE(NULLIF(a.mfr_em,'')::TEXT,'No Aplica') AS mfr_em
            ,COALESCE(NULLIF(a.vsl_plat_nm,'')::TEXT,'No Aplica') AS vsl_plat_nm
            ,COALESCE(NULLIF(a.cntr_ntn_nm,'')::TEXT,'No Aplica') AS cntr_ntn_nm
            ,COALESCE(NULLIF(a.cdrm_nm,'')::TEXT,'No Aplica') AS cdrm_nm
            ,COALESCE(NULLIF(a.ctnr_no,'')::TEXT,'No Aplica') AS ctnr_no					
            ,COALESCE(NULLIF(a.trsp_way_nm,'')::TEXT,'No Aplica') AS trsp_way_nm
            ,COALESCE(NULLIF(a.carr_nm,'')::TEXT,'No Aplica') AS carr_nm					
            ,COALESCE(NULLIF(a.trst_ntn_nm,'')::TEXT,'No Aplica') AS trst_ntn_nm					
            ,COALESCE(NULLIF(a.trst_city_nm,'')::TEXT,'No Aplica') AS trst_city_nm
            ,COALESCE(NULLIF(a.crfr_pnt_nm,'')::TEXT,'No Aplica') AS crfr_pnt_nm
            ,COALESCE(a.inv_no::TEXT,'No Aplica') AS inv_no
            ,COALESCE(nullif(a.blno,'')::TEXT,'No Aplica') AS blno					
            ,COALESCE(CAST(round(a.pkgs_tot_qt,0)AS CHARACTER VARYING)::TEXT,'No Aplica') AS pkgs_tot_qt
            ,COALESCE(a.pkgs_tot_qt_ut::TEXT,'No Aplica') AS pkgs_tot_qt_ut
            ,COALESCE(CAST(round(a.prdt_tot_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_tot_nwt
            ,COALESCE(a.prdt_tot_nwt_ut::TEXT,'No Aplica') AS prdt_tot_nwt_ut
            ,COALESCE(nullif(a.dclr_rmk,'')::TEXT,'No Aplica') AS dclr_rmk					
            ,COALESCE(to_char(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt															
            ,COALESCE(NULLIF(a.precinto_nm,'')::TEXT,'No Aplica') AS precinto_nm	
            FROM vue_gateway.tn_inp_008_it as a                 
            where a.req_no='".$req_no."'";               
        $conexion=new conexion();
        $row = $conexion->consultar($sql,1);                
        $TnInp008=new TnInp008VO($row);         
        return $TnInp008; 
}

function consulta_datos_producto_008($req_no) {      
        $sql="  SELECT  				 
                 COALESCE(a.prdt_sn::TEXT,'No Aplica') AS prdt_sn
                ,COALESCE(a.hc::TEXT,'No Aplica') AS hc
                ,COALESCE(a.prdt_nm::TEXT,'No Aplica') AS prdt_nm
                ,COALESCE(a.prdt_spc_nm::TEXT,'No Aplica') AS prdt_spc_nm								
                ,COALESCE(to_char(a.pdtn_de,'DD/MM/YYYY')::TEXT,'No Aplica') AS pdtn_de         
                ,COALESCE(a.pkgs_qt::TEXT,'No Aplica') AS pkgs_qt
                ,COALESCE(a.pkgs_qt_ut::TEXT,'No Aplica') AS pkgs_qt_ut
                ,COALESCE(CAST(round(a.prdt_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_nwt
                ,COALESCE(a.nwt_ut::TEXT,'No Aplica') AS nwt_ut
                ,COALESCE(a.lot_no::TEXT,'No Aplica') AS lot_no
                ,COALESCE(a.bdnm::TEXT,'No Aplica') AS bdnm
                ,COALESCE(a.trsp_whos_cdt_det::TEXT,'No Aplica') AS trsp_whos_cdt_det
                ,COALESCE(a.dfct_slz_prcg_tp_ut::TEXT,'No Aplica') AS dfct_slz_prcg_tp_ut								
                FROM  vue_gateway.tn_inp_008_it_pd as a 
                where a.req_no='".$req_no."'";			  				                 					
        $conexion=new conexion();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp008PdVO();        
        $lista=$objeto->getProducto008($result);                   
        return $lista;         
}

function consulta_datos_contenedor_008($req_no) {      
        $sql=" SELECT  					 					 
                    COALESCE(a.ctnr_sn::TEXT,'No Aplica') AS ctnr_sn
                    ,COALESCE(a.ctnr_no::TEXT,'No Aplica') AS ctnr_no
                    ,COALESCE(a.seal_no::TEXT,'No Aplica') AS seal_no					
                    FROM  vue_gateway.tn_inp_008_cntr as a 
                    where a.req_no='".$req_no."'";			  				                 					
        $conexion=new conexion();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp008CtnrVO();        
        $lista=$objeto->getContenedor008($result);                   
        return $lista;         
}

