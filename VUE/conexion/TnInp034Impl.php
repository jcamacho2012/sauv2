<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp034/TnInp034PdVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/formularioVUE/formulario/TnInp034/TnInp034VO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_datos_formulario_034($req_no) {                           
    $sql="   SELECT  
                 COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
                ,COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
                ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm									
                ,COALESCE(a.req_city_nm::TEXT,'No Aplica') AS req_city_nm
                ,COALESCE(nullif(a.exp_sty_ctft_req_no,'')::TEXT,'No Aplica') AS exp_sty_ctft_req_no
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
                ,COALESCE(nullif(a.inv_no,'')::TEXT,'No Aplica') AS inv_no
                ,COALESCE(nullif(a.para_nm,'')::TEXT,'No Aplica') AS para_nm
                ,COALESCE(nullif(a.para_rst_nm,'')::TEXT,'No Aplica') AS para_rst_nm                
                ,COALESCE(nullif(a.carr_nm,'')::TEXT,'No Aplica') AS carr_nm
                ,COALESCE(nullif(a.vsl_nm,'')::TEXT,'No Aplica') AS vsl_nm
                ,COALESCE(nullif(a.fghnb,'')::TEXT,'No Aplica') AS fghnb
                ,COALESCE(nullif(a.oter_trsp_way_nm,'')::TEXT,'No Aplica') AS oter_trsp_way_nm
                ,COALESCE(nullif(a.crdt_letr_no,'')::TEXT,'No Aplica') AS crdt_letr_no                
		,COALESCE(nullif(a.trst_ntn_nm,'')::TEXT,'No Aplica') AS trst_ntn_nm                
                ,COALESCE(nullif(a.trsp_way_inf,'')::TEXT,'No Aplica') AS trsp_way_inf                                
                ,COALESCE(nullif(a.ctnr_no,'')::TEXT,'No Aplica') AS ctnr_no
                ,COALESCE(nullif(a.seal_no,'')::TEXT,'No Aplica') AS seal_no
                ,COALESCE(CAST(round(a.prdt_tot_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_tot_qt
                ,COALESCE(a.prdt_tot_qt_ut::TEXT,'No Aplica') AS prdt_tot_qt_ut
                ,COALESCE(CAST(round(a.prdt_tot_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_tot_nwt
                ,COALESCE(a.prdt_tot_nwt_ut::TEXT,'No Aplica') AS prdt_tot_nwt_ut
                ,COALESCE(nullif(a.dclr_rmk,'')::TEXT,'No Aplica') AS dclr_rmk										
                ,COALESCE(to_char(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt
                ,COALESCE(nullif(a.estbl_no,'')::TEXT,'No Aplica') AS estbl_no									                
                FROM  vue_gateway.tn_inp_034 as a  
                where a.req_no='".$req_no."'";               
        $conexion=new conexion();
        $row = $conexion->consultar($sql,1);                
        $TnInp034=new TnInp034VO($row);         
        return $TnInp034; 
}

function consulta_datos_producto_034($req_no) {      
        $sql="SELECT  					 
                   COALESCE(a.prdt_sn::TEXT,'No Aplica') AS prdt_sn
                  ,COALESCE(a.hc::TEXT,'No Aplica') AS hc
                  ,COALESCE(a.prdt_bdnm::TEXT,'No Aplica') AS prdt_bdnm
                  ,COALESCE(a.prdt_desc::TEXT,'No Aplica') AS prdt_desc
                  ,COALESCE(a.lot_no::TEXT,'No Aplica') AS lot_no
                  ,COALESCE(to_char(a.prdt_qt,'99999.99')::TEXT,'No Aplica') AS prdt_qt
                  ,COALESCE(a.prdt_qt_ut::TEXT,'No Aplica') AS prdt_qt_ut
                  ,COALESCE(to_char(a.prdt_nwt,'99999.99')::TEXT,'No Aplica') AS prdt_nwt
                  ,COALESCE(a.prdt_nwt_ut::TEXT,'No Aplica') AS prdt_nwt_ut					
                  FROM  vue_gateway.tn_inp_034_pd as a 
                    where a.req_no='".$req_no."'";			  				                 					
        $conexion=new conexion();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp034PdVO();        
        $lista=$objeto->getProducto034($result);                   
        return $lista;         
}

