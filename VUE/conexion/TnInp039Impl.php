<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp039/TnInp039PdVO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp039/TnInp039VO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_datos_formulario_039($req_no) {                           
    $sql=" SELECT
            COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
            ,COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
            ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm										
            ,COALESCE(a.req_city_nm::TEXT,'No Aplica') AS req_city_nm
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
            ,COALESCE(a.prdt_cl::TEXT,'No Aplica') AS prdt_cl
            ,COALESCE(CAST(round(a.prdt_tot_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_tot_nwt										
            ,COALESCE(a.prdt_tot_nwt_ut::TEXT,'No Aplica') AS prdt_tot_nwt_ut
            ,COALESCE(CAST(round(a.prdt_tot_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_tot_qt										
            ,COALESCE(a.prdt_tot_qt_ut::TEXT,'No Aplica') AS prdt_tot_qt_ut
            ,COALESCE(to_char(a.smp_de,'DD/MM/YYYY')::TEXT,'No Aplica') AS smp_de
            ,COALESCE(to_char(a.anls_end_de,'DD/MM/YYYY')::TEXT,'No Aplica') AS anls_end_de
            ,COALESCE(nullif(a.ext_nm,'')::TEXT,'No Aplica') AS ext_nm
            ,COALESCE(nullif(a.rmk,'')::TEXT,'No Aplica') AS rmk
            ,COALESCE(nullif(a.crtfc_fg,'')::TEXT,'No Aplica') AS crtfc_fg
            ,COALESCE(nullif(a.dclr_rmk,'')::TEXT,'No Aplica') AS dclr_rmk					
            ,COALESCE(to_char(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt					
            FROM  vue_gateway.tn_inp_039 as a 
            where a.req_no='".$req_no."'";               
    $conexion=new DB();
    $row = $conexion->consultar($sql,1);                
    $TnInp039=new TnInp039VO($row);         
    return $TnInp039; 
}

function consulta_datos_producto_039($req_no) {      
    $sql="  SELECT  					 
            COALESCE(a.prdt_sn::TEXT,'No Aplica') AS prdt_sn
            ,COALESCE(a.hc::TEXT,'No Aplica') AS hc
            ,COALESCE(a.prdt_nm::TEXT,'No Aplica') AS prdt_nm
            ,COALESCE(a.prdt_spc_nm::TEXT,'No Aplica') AS prdt_spc_nm
            ,COALESCE(a.prdt_smt_frm_inf::TEXT,'No Aplica') AS prdt_smt_frm_inf
            ,COALESCE(a.anls_type_nm::TEXT,'No Aplica') AS anls_type_nm					
            ,COALESCE(a.lot_cd::TEXT,'No Aplica') AS lot_cd
            ,COALESCE(CAST(round(a.prdt_nwt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_nwt					
            ,COALESCE(a.prdt_nwt_ut::TEXT,'No Aplica') AS prdt_nwt_ut
            ,COALESCE(CAST(round(a.prdt_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_qt					
            ,COALESCE(a.prdt_qt_ut::TEXT,'No Aplica') AS prdt_qt_ut					
            FROM  vue_gateway.tn_inp_039_pd as a 
            where a.req_no='".$req_no."'";			  				                 					
    $conexion=new DB();        
    $result = $conexion->consultar($sql,2);          
    $objeto=new TnInp039PdVO();        
    $lista=$objeto->getProducto039($result);                   
    return $lista;         
}
