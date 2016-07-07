<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp027/TnInp027VO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp027/TnInp027PdVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp027/TnInp027AnlsVO.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function consulta_datos_formulario_027($req_no){
     $sql="   SELECT  
                         COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
                        ,COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
                        ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm					                        
                        ,COALESCE(nullif(a.req_city_nm,'')::TEXT,'No Aplica') AS req_city_nm
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
                        ,COALESCE(nullif(a.dclr_nole,'')::TEXT,'No Aplica') AS dclr_nole
                        ,COALESCE(a.dclr_nm::TEXT,'No Aplica') AS dclr_nm
                        ,COALESCE(a.dclr_idt_no::TEXT,'No Aplica') AS dclr_idt_no
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
			,COALESCE(a.trsp_way_nm::TEXT,'No Aplica') AS trsp_way_nm
                        ,COALESCE(nullif(a.rqt_motv,'')::TEXT,'No Aplica') AS rqt_motv
			,COALESCE(a.dst_ntn_nm::TEXT,'No Aplica') AS dst_ntn_nm
                        ,COALESCE(CAST(round(a.pck_tot_qt,0)AS CHARACTER VARYING)::TEXT,'No Aplica') AS pck_tot_qt
                        ,COALESCE(nullif(a.pck_tot_qt_ut,'')::TEXT,'No Aplica') AS pck_tot_qt_ut
			,COALESCE(CAST(round(a.prdt_tot_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_tot_nwt
                        ,COALESCE(a.prdt_tot_nwt_ut::TEXT,'No Aplica') AS prdt_tot_nwt_ut
                        ,COALESCE(a.dclr_rmk::TEXT,'No Aplica') AS dclr_rmk					                        
                        ,COALESCE(to_char(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt					                                                
			FROM  vue_gateway.tn_inp_027 a 
                where a.req_no='".$req_no."'";              
        $conexion=new DB();
        $row = $conexion->consultar($sql,1);                
        $TnInp027=new TnInp027VO($row);        
    return $TnInp027;            
}

function consulta_datos_producto_027($req_no) {      
        $sql="SELECT  					
                COALESCE(a.prdt_sn::TEXT,'No Aplica') AS prdt_sn
                ,COALESCE(a.hc::TEXT,'No Aplica') AS hc
                ,COALESCE(a.prdt_bdnm::TEXT,'No Aplica') AS prdt_bdnm
                ,COALESCE(a.prdt_desc::TEXT,'No Aplica') AS prdt_desc
                ,COALESCE(a.pck_qt::TEXT,'No Aplica') AS pck_qt
                ,COALESCE(a.pck_ut::TEXT,'No Aplica') AS pck_ut
                ,COALESCE(a.prdt_lote::TEXT,'No Aplica') AS prdt_lote					
                ,COALESCE(to_char(a.prdt_prodt,'DD/MM/YYYY')::TEXT,'No Aplica') AS prdt_prodt
                ,COALESCE(to_char(a.prdt_preservdt,'DD/MM/YYYY')::TEXT,'No Aplica') AS prdt_preservdt
                ,COALESCE(CAST(round(a.prdt_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_nwt
                ,COALESCE(a.prdt_nwt_ut::TEXT,'No Aplica') AS prdt_nwt_ut
                FROM  vue_gateway.tn_inp_027_pd as a			  				
                where a.req_no='".$req_no."'";               					
    $conexion=new DB();        
    $result = $conexion->consultar($sql,2);          
    $objeto=new TnInp027PdVO();        
    $lista=$objeto->getProducto027($result);                   
    return $lista; 
}

function consulta_datos_analisis_027($req_no) {      
        $sql="	SELECT  					 
                COALESCE(a.anls_sn::TEXT,'No Aplica') AS anls_sn
                ,COALESCE(a.anls_type_nm::TEXT,'No Aplica') AS anls_type_nm					
                ,COALESCE(CAST(round(a.anls_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS anls_qt
                ,COALESCE(a.anls_qt_ut::TEXT,'No Aplica') AS anls_qt_ut					
		FROM  vue_gateway.tn_inp_027_anls  a 
                where a.req_no='".$req_no."'";               					
        $conexion=new DB();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp027AnlsVO();        
        $lista=$objeto->getAnalisis027($result);                   
        return $lista; 
}

