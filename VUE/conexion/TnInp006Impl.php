<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp006/TnInp006VO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp006/TnInp006PdVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp006/TnInp006CtnrVO.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_datos_formulario_006_040($req_no) {                           
        $sql="SELECT  
                COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
                ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm					
                ,COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
                ,COALESCE(NULLIF(a.prev_ctft_no,'')::TEXT,'No Aplica') AS prev_ctft_no
                ,COALESCE(NULLIF(a.ctft_no,'')::TEXT,'No Aplica') AS ctft_no
                ,COALESCE(TO_CHAR(a.prev_ctft_iss_de,'DD/MM/YYYY')::TEXT,'No Aplica') AS prev_ctft_iss_de                
                ,COALESCE(a.dcm_type_nm::TEXT,'No Aplica') AS dcm_type_nm
                ,COALESCE(nullif(a.req_city_nm,'')::TEXT,'No Aplica') AS req_city_nm					
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
                ,COALESCE(a.expr_ntn_nm::TEXT,'No Aplica') AS expr_ntn_nm	
		,COALESCE(a.expr_city_nm::TEXT,'No Aplica') AS expr_city_nm				
                ,COALESCE(a.expr_prvhc_nm::TEXT,'No Aplica') AS expr_prvhc_nm					
                ,COALESCE(a.expr_cuty_nm::TEXT,'No Aplica') AS expr_cuty_nm					
                ,COALESCE(a.expr_prqi_nm::TEXT,'No Aplica') AS expr_prqi_nm
                ,COALESCE(a.expr_ad::TEXT,'No Aplica') AS expr_ad
                ,COALESCE(a.expr_tel_no::TEXT,'No Aplica') AS expr_tel_no
                ,COALESCE(nullif(a.expr_fax_no,'')::TEXT,'No Aplica') AS expr_fax_no
                ,COALESCE(nullif(a.expr_em,'')::TEXT,'No Aplica') AS expr_em
                ,COALESCE(nullif(a.mfr_nm,'')::TEXT,'No Aplica') AS mfr_nm
		,COALESCE(nullif(a.mfr_prdr_estbl_atr_no,'')::TEXT,'No Aplica') AS mfr_prdr_estbl_atr_no
                ,COALESCE(nullif(a.mfr_ntn_nm,'')::TEXT,'No Aplica') AS mfr_ntn_nm					
                ,COALESCE(nullif(a.mfr_city_nm,'')::TEXT,'No Aplica') AS mfr_city_nm					
                ,COALESCE(nullif(a.mfr_ad,'')::TEXT,'No Aplica') AS mfr_ad					
                ,COALESCE(nullif(a.mfr_tel_no,'')::TEXT,'No Aplica') AS mfr_tel_no
                ,COALESCE(nullif(a.mfr_em,'')::TEXT,'No Aplica') AS mfr_em---AQ
                ,COALESCE(nullif(a.mfr_fax_no,'')::TEXT,'No Aplica') AS mfr_fax_no
		,COALESCE(nullif(a.qlt_ctft_no,'')::TEXT,'No Aplica') AS qlt_ctft_no
                ,COALESCE(a.ctft_prdt_nm ::TEXT,'No Aplica') AS ctft_prdt_nm 	
                ,COALESCE(a.org_ntn_nm::TEXT,'No Aplica') AS org_ntn_nm					
                ,COALESCE(a.dst_ntn_nm::TEXT,'No Aplica') AS dst_ntn_nm					
                ,COALESCE(a.crg_plc::TEXT,'No Aplica') AS crg_plc					
                ,COALESCE(nullif(a.trsp_way_nm,'')::TEXT,'No Aplica') AS trsp_way_nm					
                ,COALESCE(nullif(a.ptet_ntn_nm,'')::TEXT,'No Aplica') AS ptet_ntn_nm					
                ,COALESCE(a.ptet_nm::TEXT,'No Aplica') AS ptet_nm					
                ,COALESCE(a.inv_no::TEXT,'No Aplica') AS inv_no
                ,COALESCE(a.whos_trsp_cdt_inf::TEXT,'No Aplica') AS whos_trsp_cdt_inf
                ,COALESCE(nullif(a.carr_nm,'')::TEXT,'No Aplica') AS carr_nm					
                ,COALESCE(TO_CHAR(a.crt_de,'DD/MM/YYYY')::TEXT,'No Aplica') AS crt_de
                ,COALESCE(a.hc_cd::TEXT,'No Aplica') AS hc_cd
                ,COALESCE(CAST(round(a.pkgs_tot_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS pkgs_tot_qt --UNO
                ,COALESCE(a.pkgs_tot_qt_ut::TEXT,'No Aplica') AS pkgs_tot_qt_ut
		,COALESCE(CAST(round(a.pck_tot_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS pck_tot_qt --UNO
                ,COALESCE(a.pck_tot_qt_ut::TEXT,'No Aplica') AS pck_tot_qt_ut
		,COALESCE(CAST(round(a.tot_wt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS tot_wt --UNO
                ,COALESCE(a.tot_wt_ut::TEXT,'No Aplica') AS tot_wt_ut
                ,COALESCE(nullif(a.dclr_rmk,'')::TEXT,'No Aplica') AS dclr_rmk																			
                ,COALESCE(TO_CHAR(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt
                ,COALESCE(a.prnt_ctxt_fg::TEXT,'No Aplica') AS prnt_ctxt_fg
                from vue_gateway.tn_inp_006_it a		
                where a.req_no='".$req_no."'";               
        $conexion=new conexion();
        $row = $conexion->consultar($sql,1);                
        $TnInp006=new TnInp006VO($row); 
        return $TnInp006; 
}

function consulta_datos_producto_006_040($req_no) {   
        $sql="SELECT  					
                COALESCE(a.prdt_sn::TEXT,'No Aplica') AS prdt_sn
                ,COALESCE(a.hc::TEXT,'No Aplica') AS hc		
                ,COALESCE(a.prdt_nm::TEXT,'No Aplica') AS prdt_nm
                ,COALESCE(a.prdt_sn::TEXT,'No Aplica') AS prdt_sn	
                ,COALESCE(a.stn::TEXT,'No Aplica') AS stn					
                ,COALESCE(CAST(round(a.pkgs_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS pkgs_qt								
                ,COALESCE(a.pkgs_qt_ut::TEXT,'No Aplica') AS pkgs_qt_ut
                ,COALESCE(CAST(round(a.prdt_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_nwt
                ,COALESCE(a.wt_ut::TEXT,'No Aplica') AS wt_ut		
		,COALESCE(CAST(round(a.pck_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS pck_qt
                ,COALESCE(a.pck_ut::TEXT,'No Aplica') AS pck_ut	
		,COALESCE(a.prdt_lote::TEXT,'No Aplica') AS prdt_lote	
		,COALESCE(TO_CHAR(a.mdf_dt,'DD/MM/YYYY')::TEXT,'No Aplica') AS prdt_prodt	
                FROM  vue_gateway.tn_inp_006_it_pd as a			  				
                where a.req_no='".$req_no."'";               					
        $conexion=new conexion();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp006PdVO();        
        $lista=$objeto->getProducto006($result);  
        return $lista; 
}

function consulta_datos_contenedor_006_040($req_no) {      
        $sql="SELECT  					 
		 COALESCE(a.ctnr_sn::TEXT,'No Aplica') AS ctnr_sn
		,COALESCE(a.ctnr_idt_desc::TEXT,'No Aplica') AS ctnr_idt_desc
		,COALESCE(a.seal_no::TEXT,'No Aplica') AS seal_no					
                FROM  vue_gateway.tn_inp_006_it_cntr as a			  
                where a.req_no='".$req_no."'";
        $conexion=new conexion();   
        $result = $conexion->consultar($sql,2);  
        $objeto=new TnInp006CntrVO();        
        $lista=$objeto->getContenedor006($result);  
        return $lista; 
}