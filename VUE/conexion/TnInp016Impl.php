<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp016/TnInp016VO.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_datos_formulario_016($req_no) {                           
    $sql=" SELECT  
                COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
                ,COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
                ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm										
                ,COALESCE(a.dcm_type_nm::TEXT,'No Aplica') AS dcm_type_nm					
                ,COALESCE(nullif(a.req_city_nm,'')::TEXT,'No Aplica') AS req_city_nm
                ,COALESCE(nullif(a.prev_ctft_no,'')::TEXT,'No Aplica') AS prev_ctft_no
                ,COALESCE(TO_CHAR(a.prev_ctft_iss_de,'DD/MM/YYYY')::TEXT,'No Aplica') AS prev_ctft_iss_de																									
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
                ,COALESCE(a.dclr_odty_nm::TEXT,'No Aplica') AS dclr_odty_nm
                ,COALESCE(a.dclr_rpgp_nm::TEXT,'No Aplica') AS dclr_rpgp_nm					
                ,COALESCE(a.dclr_prvhc_nm::TEXT,'No Aplica') AS dclr_prvhc_nm					
                ,COALESCE(a.dclr_cuty_nm::TEXT,'No Aplica') AS dclr_cuty_nm					
                ,COALESCE(a.dclr_prqi_nm::TEXT,'No Aplica') AS dclr_prqi_nm
                ,COALESCE(a.dclr_ad::TEXT,'No Aplica') AS dclr_ad
                ,COALESCE(a.dclr_tel_no::TEXT,'No Aplica') AS dclr_tel_no
                ,COALESCE(nullif(a.dclr_fax_no,'')::TEXT,'No Aplica') AS dclr_fax_no
                ,COALESCE(nullif(a.dclr_em,'')::TEXT,'No Aplica') AS dclr_em					
                ,case 
                    when impr_cl_cd='001' 
                            then 'Persona Jurídica'::TEXT
                    WHEN impr_cl_cd='002'
                            then 'Persona Natural'::TEXT
                    else
                            'No Aplica'
                    end AS impr_cl_cd										
                ,COALESCE(a.impr_idt_no::TEXT,'No Aplica') AS impr_idt_no
                ,COALESCE(a.impr_nm::TEXT,'No Aplica') AS impr_nm					
                ,COALESCE(a.impr_prvhc_nm::TEXT,'No Aplica') AS impr_prvhc_nm					
                ,COALESCE(a.impr_cuty_nm::TEXT,'No Aplica') AS impr_cuty_nm					
                ,COALESCE(a.impr_prqi_nm::TEXT,'No Aplica') AS impr_prqi_nm
                ,COALESCE(a.impr_ad::TEXT,'No Aplica') AS impr_ad
                ,COALESCE(nullif(a.impr_tel_no,'')::TEXT,'No Aplica') AS impr_tel_no
                ,COALESCE(nullif(a.impr_fax_no,'')::TEXT,'No Aplica') AS impr_fax_no
                ,COALESCE(nullif(a.impr_em,'')::TEXT,'No Aplica') AS impr_em
                ,case 
                    when mfr_cl_cd='001' 
                            then 'Persona Jurídica'::TEXT
                    WHEN mfr_cl_cd='002'
                            then 'Persona Natural'::TEXT
                    else
                            'No Aplica'
                    end AS mfr_cl_cd																
                ,COALESCE(a.mfr_idt_no::TEXT,'No Aplica') AS mfr_idt_no
                ,COALESCE(a.mfr_nm::TEXT,'No Aplica') AS mfr_nm
                ,COALESCE(a.mfr_rpgp_nm::TEXT,'No Aplica') AS mfr_rpgp_nm					
                ,COALESCE(a.mfr_ntn_nm::TEXT,'No Aplica') AS mfr_ntn_nm					
                ,COALESCE(a.mfr_city_nm::TEXT,'No Aplica') AS mfr_city_nm					
                ,COALESCE(a.mfr_ad::TEXT,'No Aplica') AS mfr_ad
                ,COALESCE(nullif(a.mfr_tel_no,'')::TEXT,'No Aplica') AS mfr_tel_no
                ,COALESCE(nullif(a.mfr_fax_no,'')::TEXT,'No Aplica') AS mfr_fax_no
                ,COALESCE(nullif(a.mfr_em,'')::TEXT,'No Aplica') AS mfr_em	
                ,COALESCE(nullif(a.hc,'')::TEXT,'No Aplica') AS hc						
                ,COALESCE(nullif(a.natn_prdt_nm,'')::TEXT,'No Aplica') AS natn_prdt_nm	
                ,COALESCE(nullif(a.prdt_nm,'')::TEXT,'No Aplica') AS prdt_nm	
                ,COALESCE(CAST(round(a.samp_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS samp_qt --UNO
                ,COALESCE(nullif(a.samp_qt_ut,'')::TEXT,'No Aplica') AS samp_qt_ut	
                ,COALESCE(nullif(a.igdt_con,'')::TEXT,'No Aplica') AS igdt_con	
                ,COALESCE(nullif(a.prdt_smt_frm_inf,'')::TEXT,'No Aplica') AS prdt_smt_frm_inf	
                ,COALESCE(CAST(round(a.prdt_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_qt --UNO
                ,COALESCE(nullif(a.prdt_qt_ut,'')::TEXT,'No Aplica') AS prdt_qt_ut	
                ,COALESCE(nullif(a.lot_no,'')::TEXT,'No Aplica') AS lot_no	
                ,COALESCE(nullif(a.atvi_con,'')::TEXT,'No Aplica') AS atvi_con	
                ,COALESCE(nullif(a.dcd_cps_inf,'')::TEXT,'No Aplica') AS dcd_cps_inf						
                ,COALESCE(nullif(a.prdt_vdt_term,'')::TEXT,'No Aplica')  AS prdt_vdt_term
                ,COALESCE(a.org_ntn_nm::TEXT,'No Aplica') AS org_ntn_nm
                ,case 
                    when prdt_vdt_term_ut='003' 
                            then 'Mes'::TEXT					   
                    else
                            'No Aplica'
                    end AS prdt_vdt_term_ut						
                ,COALESCE(nullif(a.org_sale_free_sty_no,'')::TEXT,'No Aplica')  AS org_sale_free_sty_no
                ,COALESCE(a.prdt_cl_nm::TEXT,'No Aplica') AS prdt_cl_nm
                ,COALESCE(a.cmca_nm::TEXT,'No Aplica') AS cmca_nm
                ,COALESCE(a.admt_mtdrt_desc::TEXT,'No Aplica') AS admt_mtdrt_desc
                ,COALESCE(a.atzd_use::TEXT,'No Aplica') AS atzd_use
                ,COALESCE(a.fml_type_inf::TEXT,'No Aplica') AS fml_type_inf
                ,COALESCE(a.pam_frm_desc::TEXT,'No Aplica') AS pam_frm_desc
                ,COALESCE(a.toxi_lvl_det::TEXT,'No Aplica') AS toxi_lvl_det										
                ,COALESCE(nullif(a.dclr_rmk,'')::TEXT,'No Aplica') AS dclr_rmk										
                ,COALESCE(TO_CHAR(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt					
                FROM  vue_gateway.tn_inp_016 as a 
                where a.req_no='".$req_no."'";               
        $conexion=new conexion();
        $row = $conexion->consultar($sql,1);                
        $TnInp016=new TnInp016VO($row);        
    return $TnInp016;     
}
