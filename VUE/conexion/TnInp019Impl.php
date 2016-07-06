<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/Conexion.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp019/TnInp019VO.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/formulario/TnInp019/TnInp019PdVO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_datos_formulario_019($req_no) {                           
    $sql="  SELECT  
             COALESCE(a.req_no::TEXT,'No Aplica') AS req_no
            ,COALESCE(a.dcm_no::TEXT,'No Aplica') AS dcm_no
            ,COALESCE(a.dcm_nm::TEXT,'No Aplica') AS dcm_nm									                        
            ,COALESCE(nullif(a.req_city_nm,'')::TEXT,'No Aplica') AS req_city_nm            
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
            end AS impr_cl_cd						            
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
            ,COALESCE(nullif(a.inv_no,'')::TEXT,'No Aplica') AS inv_no	
            ,COALESCE(CAST(round(a.prdt_tot_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_tot_qt --UNO	
            ,COALESCE(a.prdt_tot_qt_ut::TEXT,'No Aplica') AS prdt_tot_qt_ut							
            ,COALESCE(nullif(a.dclr_rmk,'')::TEXT,'No Aplica') AS dclr_rmk											
            ,COALESCE(TO_CHAR(a.mdf_dt,'DD/MM/YYYY HH24:MI:SS')::TEXT,'No Aplica') AS mdf_dt							
            FROM  vue_gateway.tn_inp_019 as a			 			 
            where a.req_no='".$req_no."'";               
        $conexion=new DB();
        $row = $conexion->consultar($sql,1);                
        $TnInp019=new TnInp019VO($row);        
    return $TnInp019;     
}

function consulta_datos_producto_019($req_no) {      
        $sql="SELECT  					 
                COALESCE(a.prdt_sn::TEXT,'No Aplica') AS prdt_sn
                ,COALESCE(a.hc::TEXT,'No Aplica') AS hc					
                ,COALESCE(a.prdt_nm::TEXT,'No Aplica') AS prdt_nm
                ,COALESCE(CAST(round(a.prdt_qt,2)AS CHARACTER VARYING)::TEXT,'No Aplica') AS prdt_qt								
                ,COALESCE(a.prdt_qt_ut::TEXT,'No Aplica') AS prdt_qt_ut	
                ,COALESCE(a.lot_no::TEXT,'No Aplica') AS lot_no						
                ,COALESCE(a.sty_rgs_no::TEXT,'No Aplica') AS sty_rgs_no										
                FROM  vue_gateway.tn_inp_019_pd as a			 					  				
                where a.req_no='".$req_no."'";               					
        $conexion=new DB();        
        $result = $conexion->consultar($sql,2);          
        $objeto=new TnInp019PdVO();        
        $lista=$objeto->getProducto019($result);                   
        return $lista; 
}
