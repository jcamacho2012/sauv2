<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp021/TnInp021VO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp021/TnInp021AnlsVO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_datos_formulario_021($req_no) {                           
        $sql="  SELECT
                    COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
                    ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm
                    ,COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
                    ,COALESCE(a.dcm_type_nm::TEXT,'No Aplica') AS dcm_type_nm                    
                    ,COALESCE(a.req_city_nm::TEXT,'No Aplica') AS req_city_nm
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
                    ,COALESCE(a.dclr_nole::TEXT,'No Aplica') AS dclr_nole
                    ,COALESCE(a.dclr_nm::TEXT,'No Aplica') AS dclr_nm
                    ,COALESCE(nullif(a.dclr_odty_nm,'')::TEXT,'No Aplica') AS dclr_odty_nm
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
                    end as impr_cl_cd                    
                    ,COALESCE(a.impr_idt_no::TEXT,'No Aplica') AS impr_idt_no
                    ,COALESCE(a.impr_nm::TEXT,'No Aplica') AS impr_nm
                    ,COALESCE(a.impr_rpst_nm::TEXT,'No Aplica') AS impr_rpst_nm                    
                    ,COALESCE(nullif(a.impr_prvhc_nm,'')::TEXT,'No Aplica') AS impr_prvhc_nm                    
                    ,COALESCE(nullif(a.impr_cuty_nm,'')::TEXT,'No Aplica') AS impr_cuty_nm	                    
                    ,COALESCE(nullif(a.impr_prqi_nm,'')::TEXT,'No Aplica') AS impr_prqi_nm					
                    ,COALESCE(a.impr_ad::TEXT,'No Aplica') AS impr_ad
                    ,COALESCE(nullif(a.impr_tel_no,'')::TEXT,'No Aplica') AS impr_tel_no
                    ,COALESCE(nullif(a.impr_fax_no,'')::TEXT,'No Aplica') AS impr_fax_no					
                    ,COALESCE(nullif(a.impr_em,'')::TEXT,'No Aplica') AS impr_em					
                    ,COALESCE(a.prdt_nm::TEXT,'No Aplica') AS prdt_nm
                    ,COALESCE(TO_CHAR(a.prdt_arv_de,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS prdt_arv_de
                    ,COALESCE(a.prdt_type_nm::TEXT,'No Aplica') AS prdt_type_nm
                    ,COALESCE(a.smt_frm_inf::TEXT,'No Aplica') AS smt_frm_inf
                    ,COALESCE(a.expr_lbty_nm::TEXT,'No Aplica') AS expr_lbty_nm                    
                    ,COALESCE(a.pdc_ntn_nm::TEXT,'No Aplica') AS pdc_ntn_nm
                    ,COALESCE(a.inv_no::TEXT,'No Aplica') AS inv_no				
                    ,COALESCE(CAST(round(a.prdt_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_qt --UNO	
                    ,COALESCE(a.prdt_qt_ut::TEXT,'No Aplica') AS prdt_qt_ut							
                    ,COALESCE(CAST(round(a.prdt_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_nwt --UNO	
                    ,COALESCE(a.prdt_nwt_ut::TEXT,'No Aplica') AS prdt_nwt_ut											
                    ,COALESCE(CAST(round(a.fobv_val_tot,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS fobv_val_tot --UNO	
                    ,COALESCE(a.fobv_tot_ut::TEXT,'No Aplica') AS fobv_tot_ut	
                    ,COALESCE(a.spm_mtdrt_desc::TEXT,'No Aplica') AS spm_mtdrt_desc	
                    ,COALESCE(a.hc::TEXT,'No Aplica') AS hc	
                    ,COALESCE(a.gud_no::TEXT,'No Aplica') AS gud_no	
                    ,COALESCE(a.dclr_rmk::TEXT,'No Aplica') AS dclr_rmk	
                    ,COALESCE(TO_CHAR(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt                    					
                    FROM  vue_gateway.tn_inp_021 as a		
                    where a.req_no='".$req_no."'";               
        $conexion=new conexion();
        $row = $conexion->consultar($sql,1);                
        $TnInp021=new TnInp021VO($row);  
        return $TnInp021; 
}

function consulta_datos_analisis_021($req_no) {      
        $sql="	SELECT
		COALESCE(a.anls_sn::TEXT,'No Aplica') AS anls_sn
                ,COALESCE(a.anls_type_nm::TEXT,'No Aplica') AS anls_type_nm					                				
                ,COALESCE(CAST(round(a.anls_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS anls_qt								
                ,COALESCE(a.anls_qt_ut::TEXT,'No Aplica') AS anls_qt_ut
		from vue_gateway.tn_inp_021_anls a					
                where a.req_no='".$req_no."'";               					
        $conexion=new conexion();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp021AnlsVO();        
        $lista=$objeto->getAnalisis021($result);                   
        return $lista; 
}