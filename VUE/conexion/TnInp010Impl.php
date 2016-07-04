<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp010/TnInp010PdVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp010/TnInp010CtnrVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp010/TnInp010LotVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp010/TnInp010VO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function consulta_datos_formulario_010($req_no) {                           
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
                ,COALESCE(a.expr_ntn_nm::TEXT,'No Aplica') AS expr_ntn_nm					
                ,COALESCE(a.expr_prvhc_nm::TEXT,'No Aplica') AS expr_prvhc_nm					
                ,COALESCE(a.expr_cuty_nm::TEXT,'No Aplica') AS expr_cuty_nm					
                ,COALESCE(a.expr_prqi_nm::TEXT,'No Aplica') AS expr_prqi_nm
                ,COALESCE(a.expr_ad::TEXT,'No Aplica') AS expr_ad
                ,COALESCE(a.expr_tel_no::TEXT,'No Aplica') AS expr_tel_no
                ,COALESCE(nullif(a.expr_fax_no,'')::TEXT,'No Aplica') AS expr_fax_no
                ,COALESCE(nullif(a.expr_em,'')::TEXT,'No Aplica') AS expr_em
                ,COALESCE(nullif(a.pcs_nm,'')::TEXT,'No Aplica') AS pcs_nm
                ,COALESCE(nullif(a.pcs_ad,'')::TEXT,'No Aplica') AS pcs_ad					
                ,COALESCE(nullif(a.pcs_city_nm,'')::TEXT,'No Aplica') AS pcs_city_nm
                ,COALESCE(nullif(a.pcs_atr_no,'')::TEXT,'No Aplica') AS pcs_atr_no
                ,COALESCE(nullif(a.prdr_nm,'')::TEXT,'No Aplica') AS prdr_nm
                ,COALESCE(nullif(a.prdr_ad,'')::TEXT,'No Aplica') AS prdr_ad					
                ,COALESCE(nullif(a.prdr_city_nm,'')::TEXT,'No Aplica') AS prdr_city_nm
                ,COALESCE(nullif(a.prdr_atr_no,'')::TEXT,'No Aplica') AS prdr_atr_no
                ,COALESCE(nullif(a.capt_hour_desc,'')::TEXT,'No Aplica') AS capt_hour_desc
                ,COALESCE(nullif(a.capt_estbl_ad,'')::TEXT,'No Aplica') AS capt_estbl_ad					
                ,COALESCE(nullif(a.capt_estbl_city_nm,'')::TEXT,'No Aplica') AS capt_estbl_city_nm
                ,COALESCE(nullif(a.capt_estbl_atr_no,'')::TEXT,'No Aplica') AS capt_estbl_atr_no					
                ,COALESCE(nullif(a.vdt_piod,'')::TEXT,'No Aplica') AS vdt_piod
                ,COALESCE(nullif(a.ctft_iss_orgz_nm,'')::TEXT,'No Aplica') AS ctft_iss_orgz_nm
                ,COALESCE(CAST(round(a.prdt_tot_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_tot_nwt
                ,COALESCE(a.prdt_tot_nwt_ut::TEXT,'No Aplica') AS prdt_tot_nwt_ut
                ,COALESCE(a.prdt_iss_plc::TEXT,'No Aplica') AS prdt_iss_plc					
                ,COALESCE(a.dst_ntn_nm::TEXT,'No Aplica') AS dst_ntn_nm					
                ,COALESCE(a.dst_city_nm::TEXT,'No Aplica') AS dst_city_nm					
                ,COALESCE(nullif(a.trst_ntn_nm,'')::TEXT,'No Aplica') AS trst_ntn_nm					
                ,COALESCE(nullif(a.trst_city_nm,'')::TEXT,'No Aplica') AS trst_city_nm					
                ,COALESCE(a.trsp_way_nm::TEXT,'No Aplica') AS trsp_way_nm
                ,COALESCE(nullif(a.carr_nm,'')::TEXT,'No Aplica') AS carr_nm
                ,COALESCE(a.pck_ut_piec_no::TEXT,'No Aplica') AS pck_ut_piec_no
                ,COALESCE(a.pck_ut_piec_no_ut::TEXT,'No Aplica') AS pck_ut_piec_no_ut
                ,COALESCE(nullif(a.trsp_csbt_thml_rank,'')::TEXT,'No Aplica') AS trsp_csbt_thml_rank
                ,COALESCE(CAST(round(a.strt_tp,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS strt_tp
                ,COALESCE(CAST(round(a.finl_tp,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS finl_tp
                ,COALESCE(a.bdnm::TEXT,'No Aplica') AS bdnm
                ,COALESCE(a.cmca_bill_no::TEXT,'No Aplica') AS cmca_bill_no
                ,COALESCE(nullif(a.rmk,'')::TEXT,'No Aplica') AS rmk
                ,COALESCE(nullif(a.dclr_rmk,'')::TEXT,'No Aplica') AS dclr_rmk                									
                ,COALESCE(to_char(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt																				
                FROM  vue_gateway.tn_inp_010 as a 
                where a.req_no='".$req_no."'";               
        $conexion=new conexion();
        $row = $conexion->consultar($sql,1);                
        $TnInp010=new TnInp010VO($row);         
        return $TnInp010; 
}

function consulta_datos_producto_010($req_no) {      
        $sql="  SELECT  
                    COALESCE(a.prdt_sn::TEXT,'No Aplica') AS prdt_sn
                    ,COALESCE(a.hc::TEXT,'No Aplica') AS hc
                    ,COALESCE(a.anml_spc_nm::TEXT,'No Aplica') AS anml_spc_nm
                    ,COALESCE(a.prdt_desc::TEXT,'No Aplica') AS prdt_desc					
                    ,COALESCE(CAST(round(a.prdt_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_nwt
                    ,COALESCE(a.prdt_nwt_ut::TEXT,'No Aplica') AS prdt_nwt_ut					
                    FROM  vue_gateway.tn_inp_010_pd as a 
                    where a.req_no='".$req_no."'";			  				                 					
        $conexion=new conexion();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp010PdVO();        
        $lista=$objeto->getProducto010($result);                   
        return $lista;         
}

function consulta_datos_lote_010($req_no) {      
        $sql="  SELECT  					 
                    COALESCE(a.lot_sn::TEXT,'No Aplica') AS lot_sn
                    ,COALESCE(a.lot_nm::TEXT,'No Aplica') AS lot_nm					
                    ,COALESCE(to_char(a.pdtn_de,'DD/MM/YYYY')::TEXT,'No Aplica') AS pdtn_de				
                    ,COALESCE(to_char(a.csbt_lim_de,'DD/MM/YYYY')::TEXT,'No Aplica') AS csbt_lim_de					
                    FROM  vue_gateway.tn_inp_010_lot as a 
                    where a.req_no='".$req_no."'";			  				                 					
        $conexion=new conexion();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp010LotVO();        
        $lista=$objeto->getLote010($result);                   
        return $lista;         
}

function consulta_datos_contenedor_010($req_no) {      
        $sql=" SELECT  					 					 
                    COALESCE(a.ctnr_sn::TEXT,'No Aplica') AS ctnr_sn
                    ,COALESCE(a.ctnr_no::TEXT,'No Aplica') AS ctnr_no
                    ,COALESCE(a.seal_no::TEXT,'No Aplica') AS seal_no					
                    FROM  vue_gateway.tn_inp_010_cntr as a 
                    where a.req_no='".$req_no."'";			  				                 					
        $conexion=new conexion();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp010CtnrVO();        
        $lista=$objeto->getContenedor010($result);                   
        return $lista;         
}

