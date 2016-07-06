<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp001/TnInp001VO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp001/TnInp001PdVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp001/TnInp001CtnrVO.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_datos_formulario_001_004($req_no) {                           
        $sql="SELECT  
                COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
                ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm					
                ,COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
                ,COALESCE(NULLIF(a.prev_ctft_no,'')::TEXT,'No Aplica') AS prev_ctft_no
                ,COALESCE(TO_CHAR(a.prev_ctft_iss_de,'DD/MM/YYYY')::TEXT,'No Aplica') AS prev_ctft_iss_de                
                ,COALESCE(a.dcm_type_nm::TEXT,'No Aplica') AS dcm_type_nm
                ,COALESCE(nullif(a.req_city_nm,'')::TEXT,'No Aplica') AS req_city_nm					
                ,case 
                when prdt_cl_nm='1' 
                        then 'Larvas de Camarón'::TEXT
                WHEN prdt_cl_nm='2'
                        then 'Otros'::TEXT
                else
                        'No Aplica'
                end AS prdt_cl_nm						
                ,COALESCE(NULLIF(a.rfr_dcm_no,'')::TEXT,'No Aplica') AS rfr_dcm_no
                ,COALESCE(NULLIF(a.qlt_ctft_no,'')::TEXT,'No Aplica') AS qlt_ctft_no					
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
                ,COALESCE(a.expr_prvhc_nm::TEXT,'No Aplica') AS expr_prvhc_nm					
                ,COALESCE(a.expr_cuty_nm::TEXT,'No Aplica') AS expr_cuty_nm					
                ,COALESCE(a.expr_prqi_nm::TEXT,'No Aplica') AS expr_prqi_nm
                ,COALESCE(a.expr_ad::TEXT,'No Aplica') AS expr_ad
                ,COALESCE(a.expr_tel_no::TEXT,'No Aplica') AS expr_tel_no
                ,COALESCE(nullif(a.expr_fax_no,'')::TEXT,'No Aplica') AS expr_fax_no
                ,COALESCE(nullif(a.expr_em,'')::TEXT,'No Aplica') AS expr_em
                ,case 
                when mfr_cl_cd='001' 
                        then 'Persona Jurídica'::TEXT
                WHEN mfr_cl_cd='002'
                        then 'Persona Natural'::TEXT
                else
                        'No Aplica'
                end AS mfr_cl_cd										
                ,COALESCE(a.mfr_idt_no::TEXT,'No Aplica') AS mfr_idt_no
                ,COALESCE(nullif(a.mfr_nm,'')::TEXT,'No Aplica') AS mfr_nm
                ,COALESCE(nullif(a.mfr_rpgp_nm,'')::TEXT,'No Aplica') AS mfr_rpgp_nm										
                ,COALESCE(nullif(a.mfr_ntn_nm,'')::TEXT,'No Aplica') AS mfr_ntn_nm					
                ,COALESCE(nullif(a.mfr_city_nm,'')::TEXT,'No Aplica') AS mfr_city_nm					
                ,COALESCE(a.mfr_prvhc_nm::TEXT,'No Aplica') AS mfr_prvhc_nm					
                ,COALESCE(a.mfr_cuty_nm::TEXT,'No Aplica') AS mfr_cuty_nm				
                ,COALESCE(a.mfr_prqi_nm::TEXT,'No Aplica') AS mfr_prqi_nm									
                ,COALESCE(nullif(a.mfr_ad,'')::TEXT,'No Aplica') AS mfr_ad					
                ,COALESCE(nullif(a.mfr_tel_no,'')::TEXT,'No Aplica') AS mfr_tel_no
                ,COALESCE(nullif(a.mfr_em,'')::TEXT,'No Aplica') AS mfr_em---AQ
                ,COALESCE(nullif(a.mfr_fax_no,'')::TEXT,'No Aplica') AS mfr_fax_no															
                ,COALESCE(a.org_ntn_nm::TEXT,'No Aplica') AS org_ntn_nm					
                ,COALESCE(a.dst_ntn_nm::TEXT,'No Aplica') AS dst_ntn_nm					
                ,COALESCE(a.prdt_cl::TEXT,'No Aplica') AS prdt_cl
                ,COALESCE(a.mfr_atr_no::TEXT,'No Aplica') AS mfr_atr_no
                ,COALESCE(a.crg_plc::TEXT,'No Aplica') AS crg_plc					
                ,COALESCE(nullif(a.trsp_way_nm,'')::TEXT,'No Aplica') AS trsp_way_nm					
                ,COALESCE(nullif(a.ptet_ntn_nm,'')::TEXT,'No Aplica') AS ptet_ntn_nm					
                ,COALESCE(a.ptet_nm::TEXT,'No Aplica') AS ptet_nm					
                ,COALESCE(a.inv_no::TEXT,'No Aplica') AS inv_no
                ,COALESCE(a.whos_trsp_cdt_inf::TEXT,'No Aplica') AS whos_trsp_cdt_inf
                ,COALESCE(nullif(a.carr_nm,'')::TEXT,'No Aplica') AS carr_nm					
                ,COALESCE(nullif(a.trst_ntn_nm,'')::TEXT,'No Aplica') AS trst_ntn_nm					
                ,COALESCE(TO_CHAR(a.crt_de,'DD/MM/YYYY')::TEXT,'No Aplica') AS crt_de
                ,COALESCE(a.hc_cd::TEXT,'No Aplica') AS hc_cd
                ,case
                when aqctr_prdt_fg = 'S' and capt_prdt_fg ='S'
                        then 'De la Acuacultura - De la Pesca'::TEXT
                WHEN aqctr_prdt_fg = 'S' and capt_prdt_fg ='N'
                        then 'De la Acuacultura'::TEXT
                WHEN aqctr_prdt_fg = 'N' and capt_prdt_fg ='S'
                        then 'De la Pesca'::TEXT
                WHEN aqctr_prdt_fg = 'N' and capt_prdt_fg ='N'
                        then ''::TEXT
                else
                        'No aplica'
                end AS naturaleza	
                ,COALESCE(a.prdt_bdnm::TEXT,'No Aplica') AS prdt_bdnm                
                ,COALESCE(a.prdt_prcg_det::TEXT,'No Aplica') AS prdt_prcg_det					
                ,COALESCE(CAST(round(a.pkgs_tot_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS pkgs_tot_qt --UNO
                ,COALESCE(a.pkgs_tot_qt_ut::TEXT,'No Aplica') AS pkgs_tot_qt_ut
                ,COALESCE(CAST(round(a.prdt_tot_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_tot_nwt --UNO
                ,COALESCE(a.prdt_tot_nwt_ut::TEXT,'No Aplica') AS prdt_tot_nwt_ut
                ,COALESCE(nullif(a.dclr_rmk,'')::TEXT,'No Aplica') AS dclr_rmk																			
                ,COALESCE(TO_CHAR(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt					
                from vue_gateway.tn_inp_001_it a		
                where a.req_no='".$req_no."'";               
        $conexion=new DB();
        $row = $conexion->consultar($sql,1);                
        $TnInp001=new TnInp001VO($row); 
        return $TnInp001; 
}

function consulta_datos_producto_001_004($req_no) {   
        $sql="SELECT  					
                COALESCE(a.prdt_sn::TEXT,'No Aplica') AS prdt_sn
                ,COALESCE(a.hc::TEXT,'No Aplica') AS hc					
                ,COALESCE(a.prdt_desc::TEXT,'No Aplica') AS prdt_desc
                ,COALESCE(a.prdt_stn::TEXT,'No Aplica') AS prdt_stn					
                ,COALESCE(CAST(round(a.pkgs_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS pkgs_qt								
                ,COALESCE(a.pkgs_qt_ut::TEXT,'No Aplica') AS pkgs_qt_ut
                ,COALESCE(CAST(round(a.prdt_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_nwt
                ,COALESCE(a.prdt_nwt_ut::TEXT,'No Aplica') AS prdt_nwt_ut														
                ,COALESCE(a.lot_cd::TEXT,'No Aplica') AS lot_cd
                FROM  vue_gateway.tn_inp_001_it_pd as a			  				
                where a.req_no='".$req_no."'";               					
        $conexion=new DB();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp001PdVO();        
        $lista=$objeto->getProducto001($result);  
        return $lista; 
}

function consulta_datos_contenedor_001_004($req_no) {      
        $sql="SELECT  					 
		 COALESCE(a.ctnr_sn::TEXT,'No Aplica') AS ctnr_sn
		,COALESCE(a.ctnr_idt_desc::TEXT,'No Aplica') AS ctnr_idt_desc
		,COALESCE(a.seal_no::TEXT,'No Aplica') AS seal_no					
                FROM  vue_gateway.tn_inp_001_it_cntr as a			  
                where a.req_no='".$req_no."'";               					
        $conexion=new DB();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp001CntrVO();        
        $lista=$objeto->getContenedor001($result);  
        return $lista; 
}