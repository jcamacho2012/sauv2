<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp032/TnInp032VO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_datos_formulario_032($req_no) {                           
    $sql="  SELECT  
                 COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
                ,COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
                ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm															
                ,COALESCE(a.req_city_nm::TEXT,'No Aplica') AS req_city_nm
                ,COALESCE(nullif(a.exp_sty_ctft_req_no,'')::TEXT,'No Aplica') AS exp_sty_ctft_req_no
                ,case 
                when dclr_cl_cd='001' 
                        then 'Persona Jurídica'::TEXT
                WHEN dclr_cl_cd='002'
                        then 'Persona Natural'::TEXT
                else
                        'No Aplica'
                end AS dclr_cl_cd	                
                ,COALESCE(a.dclr_idt_no::TEXT,'No Aplica') AS dclr_idt_no
                ,COALESCE(a.dclr_nole::TEXT,'No Aplica') AS dclr_nole
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
                ,COALESCE(a.impr_city_nm::TEXT,'No Aplica') AS impr_city_nm
                ,COALESCE(a.impr_ad::TEXT,'No Aplica') AS impr_ad
                ,COALESCE(a.impr_tel_no::TEXT,'No Aplica') AS impr_tel_no
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
                ,case 
                when pcs_cl_cd='001' 
                        then 'Persona Jurídica'::TEXT
                WHEN pcs_cl_cd='002'
                        then 'Persona Natural'::TEXT
                else
                        'No Aplica'
                end AS pcs_cl_cd						
                ,COALESCE(a.pcs_idt_no::TEXT,'No Aplica') AS pcs_idt_no
                ,COALESCE(a.pcs_nm::TEXT,'No Aplica') AS pcs_nm
                ,COALESCE(a.pcs_atr_no::TEXT,'No Aplica') AS pcs_atr_no
                ,COALESCE(a.pcs_rpgp_nm::TEXT,'No Aplica') AS pcs_rpgp_nm					
                ,COALESCE(a.pcs_prvhc_nm::TEXT,'No Aplica') AS pcs_prvhc_nm					
                ,COALESCE(a.pcs_cuty_nm::TEXT,'No Aplica') AS pcs_cuty_nm					
                ,COALESCE(a.pcs_prqi_nm::TEXT,'No Aplica') AS pcs_prqi_nm
                ,COALESCE(a.pcs_ad::TEXT,'No Aplica') AS pcs_ad
                ,COALESCE(a.pcs_tel_no::TEXT,'No Aplica') AS pcs_tel_no
                ,COALESCE(nullif(a.pcs_fax_no,'')::TEXT,'No Aplica') AS pcs_fax_no
                ,COALESCE(nullif(a.pcs_em,'')::TEXT,'No Aplica') AS pcs_em
                ,COALESCE(a.qlt_ctft_no::TEXT,'No Aplica') AS qlt_ctft_no
                ,COALESCE(a.fht_crtfc_no::TEXT,'No Aplica') AS fht_crtfc_no
                ,COALESCE(a.inv_no::TEXT,'No Aplica') AS inv_no
                ,COALESCE(a.ctft_det::TEXT,'No Aplica') AS ctft_det
                ,COALESCE(nullif(a.atxd_stdy_rst_nm,'')::TEXT,'No Aplica') AS atxd_stdy_rst_nm
                ,COALESCE(nullif(a.atxd_stdy_rst_ut,'')::TEXT,'No Aplica') AS atxd_stdy_rst_ut
                ,COALESCE(a.prdt_type_nm::TEXT,'No Aplica') AS prdt_type_nm
                ,COALESCE(a.prdt_bdmn::TEXT,'No Aplica') AS prdt_bdmn
                ,COALESCE(nullif(a.prdt_acido,'')::TEXT,'No Aplica') AS prdt_acido
                ,COALESCE(nullif(a.prdt_acidez,'')::TEXT,'No Aplica') AS prdt_acidez
                ,COALESCE(nullif(a.prdt_perox_index,'')::TEXT,'No Aplica') AS prdt_perox_index
                ,COALESCE(nullif(a.prdt_humedad,'')::TEXT,'No Aplica') AS prdt_humedad
                ,COALESCE(nullif(a.prdt_type_cd_03,'')::TEXT,'No Aplica') AS prdt_type_cd_03
                ,COALESCE(nullif(a.prdt_type_cd_04,'')::TEXT,'No Aplica') AS prdt_type_cd_04
                ,COALESCE(a.anls_type_cd_01::TEXT,'No Aplica') AS anls_type_cd_01
                ,COALESCE(a.anls_type_cd_02::TEXT,'No Aplica') AS anls_type_cd_02
                ,COALESCE(a.anls_type_cd_03::TEXT,'No Aplica') AS anls_type_cd_03
                ,COALESCE(a.anls_type_cd_04::TEXT,'No Aplica') AS anls_type_cd_04
                ,COALESCE(a.anls_type_cd_05::TEXT,'No Aplica') AS anls_type_cd_05
                ,COALESCE(a.anls_type_cd_06::TEXT,'No Aplica') AS anls_type_cd_06					
                ,COALESCE(a.ncdt_type_cd_01::TEXT,'No Aplica') AS ncdt_type_cd_01
                ,COALESCE(a.ncdt_type_cd_02::TEXT,'No Aplica') AS ncdt_type_cd_02
                ,COALESCE(a.ncdt_type_cd_03::TEXT,'No Aplica') AS ncdt_type_cd_03
                ,COALESCE(a.ncdt_type_cd_04::TEXT,'No Aplica') AS ncdt_type_cd_04
                ,COALESCE(a.ncdt_type_cd_05::TEXT,'No Aplica') AS ncdt_type_cd_05
                ,COALESCE(a.ncdt_type_cd_06::TEXT,'No Aplica') AS ncdt_type_cd_06
                ,COALESCE(a.ncdt_type_cd_07::TEXT,'No Aplica') AS ncdt_type_cd_07
                ,COALESCE(a.ncdt_type_cd_08::TEXT,'No Aplica') AS ncdt_type_cd_08
                ,COALESCE(a.ncdt_type_cd_09::TEXT,'No Aplica') AS ncdt_type_cd_09
                ,COALESCE(a.ncdt_type_cd_10::TEXT,'No Aplica') AS ncdt_type_cd_10
                ,COALESCE(a.ncdt_type_cd_11::TEXT,'No Aplica') AS ncdt_type_cd_11
                ,COALESCE(a.ncdt_type_cd_12::TEXT,'No Aplica') AS ncdt_type_cd_12
                ,COALESCE(a.ncdt_type_cd_13::TEXT,'No Aplica') AS ncdt_type_cd_13
                ,COALESCE(a.ncdt_type_cd_14::TEXT,'No Aplica') AS ncdt_type_cd_14
                ,COALESCE(a.ncdt_type_cd_15::TEXT,'No Aplica') AS ncdt_type_cd_15
                ,COALESCE(a.ncdt_type_cd_16::TEXT,'No Aplica') AS ncdt_type_cd_16
                ,COALESCE(a.ncdt_type_cd_17::TEXT,'No Aplica') AS ncdt_type_cd_17
                ,COALESCE(a.ncdt_type_nm_01::TEXT,'No Aplica') AS ncdt_type_nm_01
                ,COALESCE(a.ncdt_type_nm_02::TEXT,'No Aplica') AS ncdt_type_nm_02
                ,COALESCE(a.ncdt_type_nm_03::TEXT,'No Aplica') AS ncdt_type_nm_03
                ,COALESCE(a.ncdt_type_nm_04::TEXT,'No Aplica') AS ncdt_type_nm_04
                ,COALESCE(a.ncdt_type_nm_05::TEXT,'No Aplica') AS ncdt_type_nm_05
                ,COALESCE(a.ncdt_type_nm_06::TEXT,'No Aplica') AS ncdt_type_nm_06
                ,COALESCE(a.ncdt_type_nm_07::TEXT,'No Aplica') AS ncdt_type_nm_07
                ,COALESCE(a.ncdt_type_nm_08::TEXT,'No Aplica') AS ncdt_type_nm_08
                ,COALESCE(a.ncdt_type_nm_09::TEXT,'No Aplica') AS ncdt_type_nm_09
                ,COALESCE(a.ncdt_type_nm_10::TEXT,'No Aplica') AS ncdt_type_nm_10
                ,COALESCE(a.ncdt_type_nm_11::TEXT,'No Aplica') AS ncdt_type_nm_11
                ,COALESCE(a.ncdt_type_nm_12::TEXT,'No Aplica') AS ncdt_type_nm_12
                ,COALESCE(a.ncdt_type_nm_13::TEXT,'No Aplica') AS ncdt_type_nm_13
                ,COALESCE(a.ncdt_type_nm_14::TEXT,'No Aplica') AS ncdt_type_nm_14
                ,COALESCE(a.ncdt_type_nm_15::TEXT,'No Aplica') AS ncdt_type_nm_15
                ,COALESCE(a.ncdt_type_nm_16::TEXT,'No Aplica') AS ncdt_type_nm_16
                ,COALESCE(a.ncdt_type_nm_17::TEXT,'No Aplica') AS ncdt_type_nm_17
                ,COALESCE(a.dclr_rmk::TEXT,'No Aplica') AS dclr_rmk										
                ,COALESCE(to_char(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt
                FROM  vue_gateway.tn_inp_032 as a
                where a.req_no='".$req_no."'";               
        $conexion=new conexion();
        $row = $conexion->consultar($sql,1);                
        $TnInp032=new TnInp032VO($row);         
        return $TnInp032; 
}