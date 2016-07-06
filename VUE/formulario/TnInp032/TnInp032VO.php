<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp032VO{
    private $req_no;     
    private $dcm_no;
    private $dcm_nm;
    private $req_city_nm;
    private $exp_sty_ctft_req_no;      
    private $dclr_cl_cd;	
    private $dclr_idt_no;
    private $dclr_nole;
    private $dclr_nm;    
    private $dclr_rpgp_nm;
    private $dclr_prvhc_nm;
    private $dclr_cuty_nm;
    private $dclr_prqi_nm;
    private $dclr_ad;
    private $dclr_tel_no;
    private $dclr_fax_no;
    private $dclr_em;
    private $impr_nm;			
    private $impr_ntn_nm;
    private $impr_city_nm;
    private $impr_ad;
    private $impr_tel_no;
    private $impr_fax_no;
    private $impr_em;    
    private $expr_cl_cd;
    private $expr_idt_no;
    private $expr_nm;
    private $expr_prvhc_nm;
    private $expr_cuty_nm;
    private $expr_prqi_nm;
    private $expr_ad;
    private $expr_tel_no;
    private $expr_fax_no;
    private $expr_em;
    private $pcs_cl_cd;
    private $pcs_idt_no;
    private $pcs_nm;
    private $pcs_atr_no;    
    private $pcs_rpgp_nm;
    private $pcs_prvhc_nm;
    private $pcs_cuty_nm;
    private $pcs_prqi_nm;
    private $pcs_ad;
    private $pcs_tel_no;
    private $pcs_fax_no;
    private $pcs_em;
    private $qlt_ctft_no;
    private $fht_crtfc_no;
    private $inv_no;
    private $ctft_det;
    private $atxd_stdy_rst_nm;						
    private $prdt_type_nm;
    private $prdt_bdmn;
    private $prdt_acido;
    private $prdt_acidez;
    private $prdt_perox_index;
    private $prdt_humedad;
    private $prdt_type_cd_03;
    private $prdt_type_cd_04;
    private $anls_type_cd_01;
    private $anls_type_cd_02;
    private $anls_type_cd_03;
    private $anls_type_cd_04;
    private $anls_type_cd_05;
    private $anls_type_cd_06;
    private $ncdt_type_cd_01;
    private $ncdt_type_cd_02;
    private $ncdt_type_cd_03;
    private $ncdt_type_cd_04;
    private $ncdt_type_cd_05;
    private $ncdt_type_cd_06;
    private $ncdt_type_cd_07;
    private $ncdt_type_cd_08;
    private $ncdt_type_cd_09;
    private $ncdt_type_cd_10;
    private $ncdt_type_cd_11;
    private $ncdt_type_cd_12;
    private $ncdt_type_cd_13;
    private $ncdt_type_cd_14;
    private $ncdt_type_cd_15;
    private $ncdt_type_cd_16;
    private $ncdt_type_cd_17;
    private $ncdt_type_nm_01;
    private $ncdt_type_nm_02;
    private $ncdt_type_nm_03;
    private $ncdt_type_nm_04;
    private $ncdt_type_nm_05;
    private $ncdt_type_nm_06;
    private $ncdt_type_nm_07;
    private $ncdt_type_nm_08;
    private $ncdt_type_nm_09;
    private $ncdt_type_nm_10;
    private $ncdt_type_nm_11;
    private $ncdt_type_nm_12;
    private $ncdt_type_nm_13;
    private $ncdt_type_nm_14;
    private $ncdt_type_nm_15;
    private $ncdt_type_nm_16;
    private $ncdt_type_nm_17;
    private $dclr_rmk;
    private $mdf_dt;
    
    function __construct($array) {
        $this->req_no = $array['req_no'];
        $this->dcm_no = $array['dcm_no'];
        $this->dcm_nm = $array['dcm_nm'];
        $this->req_city_nm = $array['req_city_nm'];
        $this->exp_sty_ctft_req_no = $array['exp_sty_ctft_req_no'];        
        $this->dclr_cl_cd = $array['dclr_cl_cd'];
        $this->dclr_idt_no = $array['dclr_idt_no'];
        $this->dclr_nole = $array['dclr_nole'];
        $this->dclr_nm = $array['dclr_nm'];
        $this->dclr_rpgp_nm = $array['dclr_rpgp_nm'];
        $this->dclr_prvhc_nm = $array['dclr_prvhc_nm'];
        $this->dclr_cuty_nm = $array['dclr_cuty_nm'];
        $this->dclr_prqi_nm = $array['dclr_prqi_nm'];
        $this->dclr_ad = $array['dclr_ad'];
        $this->dclr_tel_no = $array['dclr_tel_no'];
        $this->dclr_fax_no = $array['dclr_fax_no'];
        $this->dclr_em = $array['dclr_em'];
        $this->impr_nm = $array['impr_nm'];
        $this->impr_ntn_nm = $array['impr_ntn_nm'];
        $this->impr_city_nm = $array['impr_city_nm'];
        $this->impr_ad = $array['impr_ad'];
        $this->impr_tel_no = $array['impr_tel_no'];
        $this->impr_fax_no = $array['impr_fax_no'];
        $this->impr_em = $array['impr_em'];
        $this->expr_cl_cd = $array['expr_cl_cd'];
        $this->expr_idt_no = $array['expr_idt_no'];
        $this->expr_nm = $array['expr_nm'];
        $this->expr_prvhc_nm = $array['expr_prvhc_nm'];
        $this->expr_cuty_nm = $array['expr_cuty_nm'];
        $this->expr_prqi_nm = $array['expr_prqi_nm'];
        $this->expr_ad = $array['expr_ad'];
        $this->expr_tel_no = $array['expr_tel_no'];
        $this->expr_fax_no = $array['expr_fax_no'];
        $this->expr_em = $array['expr_em'];
        $this->pcs_cl_cd=$array['pcs_cl_cd'];
        $this->pcs_idt_no=$array['pcs_idt_no'];
        $this->pcs_nm=$array['pcs_nm'];
        $this->pcs_atr_no=$array['pcs_atr_no'];        
        $this->pcs_rpgp_nm=$array['pcs_rpgp_nm'];
        $this->pcs_prvhc_nm=$array['pcs_prvhc_nm'];
        $this->pcs_cuty_nm=$array['pcs_cuty_nm'];
        $this->pcs_prqi_nm=$array['pcs_prqi_nm'];
        $this->pcs_ad=$array['pcs_ad'];
        $this->pcs_tel_no=$array['pcs_tel_no'];
        $this->pcs_fax_no=$array['pcs_fax_no'];
        $this->pcs_em=$array['pcs_em'];
        $this->qlt_ctft_no=$array['qlt_ctft_no'];
        $this->fht_crtfc_no=$array['fht_crtfc_no'];
        $this->inv_no = $array['inv_no'];
        $this->ctft_det= $array['ctft_det'];
        if($array['atxd_stdy_rst_nm']=='No Aplica'){
            $this->atxd_stdy_rst_nm=$array['atxd_stdy_rst_nm'];
        }else{
            $this->atxd_stdy_rst_nm=number_format($array['atxd_stdy_rst_nm'],2)." ".$array['atxd_stdy_rst_ut'];                
        }        
        $this->prdt_type_nm= $array['prdt_type_nm'];
        $this->prdt_bdmn= $array['prdt_bdmn'];
        $this->prdt_acido= $array['prdt_acido'];
        $this->prdt_acidez= $array['prdt_acidez'];
        $this->prdt_perox_index= $array['prdt_perox_index'];
        $this->prdt_humedad= $array['prdt_humedad'];
        $this->prdt_type_cd_03= $array['prdt_type_cd_03'];
        $this->prdt_type_cd_04= $array['prdt_type_cd_04'];
        $this->anls_type_cd_01= $array['anls_type_cd_01'];
        $this->anls_type_cd_02= $array['anls_type_cd_02'];
        $this->anls_type_cd_03= $array['anls_type_cd_03'];
        $this->anls_type_cd_04= $array['anls_type_cd_04'];
        $this->anls_type_cd_05= $array['anls_type_cd_05'];
        $this->anls_type_cd_06= $array['anls_type_cd_06'];
        $this->ncdt_type_cd_01= $array['ncdt_type_cd_01'];
        $this->ncdt_type_cd_02= $array['ncdt_type_cd_02'];
        $this->ncdt_type_cd_03= $array['ncdt_type_cd_03'];
        $this->ncdt_type_cd_04= $array['ncdt_type_cd_04'];
        $this->ncdt_type_cd_05= $array['ncdt_type_cd_05'];
        $this->ncdt_type_cd_06= $array['ncdt_type_cd_06'];
        $this->ncdt_type_cd_07= $array['ncdt_type_cd_07'];
        $this->ncdt_type_cd_08= $array['ncdt_type_cd_08'];
        $this->ncdt_type_cd_09= $array['ncdt_type_cd_09'];
        $this->ncdt_type_cd_10= $array['ncdt_type_cd_10'];
        $this->ncdt_type_cd_11= $array['ncdt_type_cd_11'];
        $this->ncdt_type_cd_12= $array['ncdt_type_cd_12'];
        $this->ncdt_type_cd_13= $array['ncdt_type_cd_13'];
        $this->ncdt_type_cd_14= $array['ncdt_type_cd_14'];
        $this->ncdt_type_cd_15= $array['ncdt_type_cd_15'];
        $this->ncdt_type_cd_16= $array['ncdt_type_cd_16'];
        $this->ncdt_type_cd_17= $array['ncdt_type_cd_17'];
        $this->ncdt_type_nm_01= $array['ncdt_type_nm_01'];
        $this->ncdt_type_nm_02= $array['ncdt_type_nm_02'];
        $this->ncdt_type_nm_03= $array['ncdt_type_nm_03'];
        $this->ncdt_type_nm_04= $array['ncdt_type_nm_04'];
        $this->ncdt_type_nm_05= $array['ncdt_type_nm_05'];
        $this->ncdt_type_nm_06= $array['ncdt_type_nm_06'];
        $this->ncdt_type_nm_07= $array['ncdt_type_nm_07'];
        $this->ncdt_type_nm_08= $array['ncdt_type_nm_08'];
        $this->ncdt_type_nm_09= $array['ncdt_type_nm_09'];
        $this->ncdt_type_nm_10= $array['ncdt_type_nm_10'];
        $this->ncdt_type_nm_11= $array['ncdt_type_nm_11'];
        $this->ncdt_type_nm_12= $array['ncdt_type_nm_12'];
        $this->ncdt_type_nm_13= $array['ncdt_type_nm_13'];
        $this->ncdt_type_nm_14= $array['ncdt_type_nm_14'];
        $this->ncdt_type_nm_15= $array['ncdt_type_nm_15'];
        $this->ncdt_type_nm_16= $array['ncdt_type_nm_16'];
        $this->ncdt_type_nm_17= $array['ncdt_type_nm_17'];
        $this->dclr_rmk = $array['dclr_rmk'];
        $this->mdf_dt = $array['mdf_dt'];
    }
    
    function getReq_no() {
        return $this->req_no;
    }

    function getDcm_no() {
        return $this->dcm_no;
    }

    function getDcm_nm() {
        return $this->dcm_nm;
    }

    function getReq_city_nm() {
        return $this->req_city_nm;
    }

    function getExp_sty_ctft_req_no() {
        return $this->exp_sty_ctft_req_no;
    }

    function getDclr_cl_cd() {
        return $this->dclr_cl_cd;
    }

    function getDclr_idt_no() {
        return $this->dclr_idt_no;
    }

    function getDclr_nole() {
        return $this->dclr_nole;
    }

    function getDclr_nm() {
        return $this->dclr_nm;
    }

    function getDclr_rpgp_nm() {
        return $this->dclr_rpgp_nm;
    }

    function getDclr_prvhc_nm() {
        return $this->dclr_prvhc_nm;
    }

    function getDclr_cuty_nm() {
        return $this->dclr_cuty_nm;
    }

    function getDclr_prqi_nm() {
        return $this->dclr_prqi_nm;
    }

    function getDclr_ad() {
        return $this->dclr_ad;
    }

    function getDclr_tel_no() {
        return $this->dclr_tel_no;
    }

    function getDclr_fax_no() {
        return $this->dclr_fax_no;
    }

    function getDclr_em() {
        return $this->dclr_em;
    }

    function getImpr_nm() {
        return $this->impr_nm;
    }

    function getImpr_ntn_nm() {
        return $this->impr_ntn_nm;
    }

    function getImpr_city_nm() {
        return $this->impr_city_nm;
    }

    function getImpr_ad() {
        return $this->impr_ad;
    }

    function getImpr_tel_no() {
        return $this->impr_tel_no;
    }

    function getImpr_fax_no() {
        return $this->impr_fax_no;
    }

    function getImpr_em() {
        return $this->impr_em;
    }

    function getExpr_cl_cd() {
        return $this->expr_cl_cd;
    }

    function getExpr_idt_no() {
        return $this->expr_idt_no;
    }

    function getExpr_nm() {
        return $this->expr_nm;
    }

    function getExpr_prvhc_nm() {
        return $this->expr_prvhc_nm;
    }

    function getExpr_cuty_nm() {
        return $this->expr_cuty_nm;
    }

    function getExpr_prqi_nm() {
        return $this->expr_prqi_nm;
    }

    function getExpr_ad() {
        return $this->expr_ad;
    }

    function getExpr_tel_no() {
        return $this->expr_tel_no;
    }

    function getExpr_fax_no() {
        return $this->expr_fax_no;
    }

    function getExpr_em() {
        return $this->expr_em;
    }

    function getPcs_cl_cd() {
        return $this->pcs_cl_cd;
    }

    function getPcs_idt_no() {
        return $this->pcs_idt_no;
    }

    function getPcs_nm() {
        return $this->pcs_nm;
    }

    function getPcs_atr_no() {
        return $this->pcs_atr_no;
    }

    function getPcs_rpgp_nm() {
        return $this->pcs_rpgp_nm;
    }

    function getPcs_prvhc_nm() {
        return $this->pcs_prvhc_nm;
    }

    function getPcs_cuty_nm() {
        return $this->pcs_cuty_nm;
    }

    function getPcs_prqi_nm() {
        return $this->pcs_prqi_nm;
    }

    function getPcs_ad() {
        return $this->pcs_ad;
    }

    function getPcs_tel_no() {
        return $this->pcs_tel_no;
    }

    function getPcs_fax_no() {
        return $this->pcs_fax_no;
    }

    function getPcs_em() {
        return $this->pcs_em;
    }

    function getQlt_ctft_no() {
        return $this->qlt_ctft_no;
    }

    function getFht_crtfc_no() {
        return $this->fht_crtfc_no;
    }

    function getInv_no() {
        return $this->inv_no;
    }

    function getCtft_det() {
        return $this->ctft_det;
    }

    function getAtxd_stdy_rst_nm() {
        return $this->atxd_stdy_rst_nm;
    }

    function getPrdt_type_nm() {
        return $this->prdt_type_nm;
    }

    function getPrdt_bdmn() {
        return $this->prdt_bdmn;
    }

    function getPrdt_acido() {
        return $this->prdt_acido;
    }

    function getPrdt_acidez() {
        return $this->prdt_acidez;
    }

    function getPrdt_perox_index() {
        return $this->prdt_perox_index;
    }

    function getPrdt_humedad() {
        return $this->prdt_humedad;
    }

    function getPrdt_type_cd_03() {
        return $this->prdt_type_cd_03;
    }

    function getPrdt_type_cd_04() {
        return $this->prdt_type_cd_04;
    }

    function getAnls_type_cd_01() {
        return $this->anls_type_cd_01;
    }

    function getAnls_type_cd_02() {
        return $this->anls_type_cd_02;
    }

    function getAnls_type_cd_03() {
        return $this->anls_type_cd_03;
    }

    function getAnls_type_cd_04() {
        return $this->anls_type_cd_04;
    }

    function getAnls_type_cd_05() {
        return $this->anls_type_cd_05;
    }

    function getAnls_type_cd_06() {
        return $this->anls_type_cd_06;
    }

    function getNcdt_type_cd_01() {
        return $this->ncdt_type_cd_01;
    }

    function getNcdt_type_cd_02() {
        return $this->ncdt_type_cd_02;
    }

    function getNcdt_type_cd_03() {
        return $this->ncdt_type_cd_03;
    }

    function getNcdt_type_cd_04() {
        return $this->ncdt_type_cd_04;
    }

    function getNcdt_type_cd_05() {
        return $this->ncdt_type_cd_05;
    }

    function getNcdt_type_cd_06() {
        return $this->ncdt_type_cd_06;
    }

    function getNcdt_type_cd_07() {
        return $this->ncdt_type_cd_07;
    }

    function getNcdt_type_cd_08() {
        return $this->ncdt_type_cd_08;
    }

    function getNcdt_type_cd_09() {
        return $this->ncdt_type_cd_09;
    }

    function getNcdt_type_cd_10() {
        return $this->ncdt_type_cd_10;
    }

    function getNcdt_type_cd_11() {
        return $this->ncdt_type_cd_11;
    }

    function getNcdt_type_cd_12() {
        return $this->ncdt_type_cd_12;
    }

    function getNcdt_type_cd_13() {
        return $this->ncdt_type_cd_13;
    }

    function getNcdt_type_cd_14() {
        return $this->ncdt_type_cd_14;
    }

    function getNcdt_type_cd_15() {
        return $this->ncdt_type_cd_15;
    }

    function getNcdt_type_cd_16() {
        return $this->ncdt_type_cd_16;
    }

    function getNcdt_type_cd_17() {
        return $this->ncdt_type_cd_17;
    }

    function getNcdt_type_nm_01() {
        return $this->ncdt_type_nm_01;
    }

    function getNcdt_type_nm_02() {
        return $this->ncdt_type_nm_02;
    }

    function getNcdt_type_nm_03() {
        return $this->ncdt_type_nm_03;
    }

    function getNcdt_type_nm_04() {
        return $this->ncdt_type_nm_04;
    }

    function getNcdt_type_nm_05() {
        return $this->ncdt_type_nm_05;
    }

    function getNcdt_type_nm_06() {
        return $this->ncdt_type_nm_06;
    }

    function getNcdt_type_nm_07() {
        return $this->ncdt_type_nm_07;
    }

    function getNcdt_type_nm_08() {
        return $this->ncdt_type_nm_08;
    }

    function getNcdt_type_nm_09() {
        return $this->ncdt_type_nm_09;
    }

    function getNcdt_type_nm_10() {
        return $this->ncdt_type_nm_10;
    }

    function getNcdt_type_nm_11() {
        return $this->ncdt_type_nm_11;
    }

    function getNcdt_type_nm_12() {
        return $this->ncdt_type_nm_12;
    }

    function getNcdt_type_nm_13() {
        return $this->ncdt_type_nm_13;
    }

    function getNcdt_type_nm_14() {
        return $this->ncdt_type_nm_14;
    }

    function getNcdt_type_nm_15() {
        return $this->ncdt_type_nm_15;
    }

    function getNcdt_type_nm_16() {
        return $this->ncdt_type_nm_16;
    }

    function getNcdt_type_nm_17() {
        return $this->ncdt_type_nm_17;
    }

    function getDclr_rmk() {
        return $this->dclr_rmk;
    }

    function getMdf_dt() {
        return $this->mdf_dt;
    }

    function setReq_no($req_no) {
        $this->req_no = $req_no;
    }

    function setDcm_no($dcm_no) {
        $this->dcm_no = $dcm_no;
    }

    function setDcm_nm($dcm_nm) {
        $this->dcm_nm = $dcm_nm;
    }

    function setReq_city_nm($req_city_nm) {
        $this->req_city_nm = $req_city_nm;
    }

    function setExp_sty_ctft_req_no($exp_sty_ctft_req_no) {
        $this->exp_sty_ctft_req_no = $exp_sty_ctft_req_no;
    }

    function setDclr_cl_cd($dclr_cl_cd) {
        $this->dclr_cl_cd = $dclr_cl_cd;
    }

    function setDclr_idt_no($dclr_idt_no) {
        $this->dclr_idt_no = $dclr_idt_no;
    }

    function setDclr_nole($dclr_nole) {
        $this->dclr_nole = $dclr_nole;
    }

    function setDclr_nm($dclr_nm) {
        $this->dclr_nm = $dclr_nm;
    }

    function setDclr_rpgp_nm($dclr_rpgp_nm) {
        $this->dclr_rpgp_nm = $dclr_rpgp_nm;
    }

    function setDclr_prvhc_nm($dclr_prvhc_nm) {
        $this->dclr_prvhc_nm = $dclr_prvhc_nm;
    }

    function setDclr_cuty_nm($dclr_cuty_nm) {
        $this->dclr_cuty_nm = $dclr_cuty_nm;
    }

    function setDclr_prqi_nm($dclr_prqi_nm) {
        $this->dclr_prqi_nm = $dclr_prqi_nm;
    }

    function setDclr_ad($dclr_ad) {
        $this->dclr_ad = $dclr_ad;
    }

    function setDclr_tel_no($dclr_tel_no) {
        $this->dclr_tel_no = $dclr_tel_no;
    }

    function setDclr_fax_no($dclr_fax_no) {
        $this->dclr_fax_no = $dclr_fax_no;
    }

    function setDclr_em($dclr_em) {
        $this->dclr_em = $dclr_em;
    }

    function setImpr_nm($impr_nm) {
        $this->impr_nm = $impr_nm;
    }

    function setImpr_ntn_nm($impr_ntn_nm) {
        $this->impr_ntn_nm = $impr_ntn_nm;
    }

    function setImpr_city_nm($impr_city_nm) {
        $this->impr_city_nm = $impr_city_nm;
    }

    function setImpr_ad($impr_ad) {
        $this->impr_ad = $impr_ad;
    }

    function setImpr_tel_no($impr_tel_no) {
        $this->impr_tel_no = $impr_tel_no;
    }

    function setImpr_fax_no($impr_fax_no) {
        $this->impr_fax_no = $impr_fax_no;
    }

    function setImpr_em($impr_em) {
        $this->impr_em = $impr_em;
    }

    function setExpr_cl_cd($expr_cl_cd) {
        $this->expr_cl_cd = $expr_cl_cd;
    }

    function setExpr_idt_no($expr_idt_no) {
        $this->expr_idt_no = $expr_idt_no;
    }

    function setExpr_nm($expr_nm) {
        $this->expr_nm = $expr_nm;
    }

    function setExpr_prvhc_nm($expr_prvhc_nm) {
        $this->expr_prvhc_nm = $expr_prvhc_nm;
    }

    function setExpr_cuty_nm($expr_cuty_nm) {
        $this->expr_cuty_nm = $expr_cuty_nm;
    }

    function setExpr_prqi_nm($expr_prqi_nm) {
        $this->expr_prqi_nm = $expr_prqi_nm;
    }

    function setExpr_ad($expr_ad) {
        $this->expr_ad = $expr_ad;
    }

    function setExpr_tel_no($expr_tel_no) {
        $this->expr_tel_no = $expr_tel_no;
    }

    function setExpr_fax_no($expr_fax_no) {
        $this->expr_fax_no = $expr_fax_no;
    }

    function setExpr_em($expr_em) {
        $this->expr_em = $expr_em;
    }

    function setPcs_cl_cd($pcs_cl_cd) {
        $this->pcs_cl_cd = $pcs_cl_cd;
    }

    function setPcs_idt_no($pcs_idt_no) {
        $this->pcs_idt_no = $pcs_idt_no;
    }

    function setPcs_nm($pcs_nm) {
        $this->pcs_nm = $pcs_nm;
    }

    function setPcs_atr_no($pcs_atr_no) {
        $this->pcs_atr_no = $pcs_atr_no;
    }

    function setPcs_rpgp_nm($pcs_rpgp_nm) {
        $this->pcs_rpgp_nm = $pcs_rpgp_nm;
    }

    function setPcs_prvhc_nm($pcs_prvhc_nm) {
        $this->pcs_prvhc_nm = $pcs_prvhc_nm;
    }

    function setPcs_cuty_nm($pcs_cuty_nm) {
        $this->pcs_cuty_nm = $pcs_cuty_nm;
    }

    function setPcs_prqi_nm($pcs_prqi_nm) {
        $this->pcs_prqi_nm = $pcs_prqi_nm;
    }

    function setPcs_ad($pcs_ad) {
        $this->pcs_ad = $pcs_ad;
    }

    function setPcs_tel_no($pcs_tel_no) {
        $this->pcs_tel_no = $pcs_tel_no;
    }

    function setPcs_fax_no($pcs_fax_no) {
        $this->pcs_fax_no = $pcs_fax_no;
    }

    function setPcs_em($pcs_em) {
        $this->pcs_em = $pcs_em;
    }

    function setQlt_ctft_no($qlt_ctft_no) {
        $this->qlt_ctft_no = $qlt_ctft_no;
    }

    function setFht_crtfc_no($fht_crtfc_no) {
        $this->fht_crtfc_no = $fht_crtfc_no;
    }

    function setInv_no($inv_no) {
        $this->inv_no = $inv_no;
    }

    function setCtft_det($ctft_det) {
        $this->ctft_det = $ctft_det;
    }

    function setAtxd_stdy_rst_nm($atxd_stdy_rst_nm) {
        $this->atxd_stdy_rst_nm = $atxd_stdy_rst_nm;
    }

    function setPrdt_type_nm($prdt_type_nm) {
        $this->prdt_type_nm = $prdt_type_nm;
    }

    function setPrdt_bdmn($prdt_bdmn) {
        $this->prdt_bdmn = $prdt_bdmn;
    }

    function setPrdt_acido($prdt_acido) {
        $this->prdt_acido = $prdt_acido;
    }

    function setPrdt_acidez($prdt_acidez) {
        $this->prdt_acidez = $prdt_acidez;
    }

    function setPrdt_perox_index($prdt_perox_index) {
        $this->prdt_perox_index = $prdt_perox_index;
    }

    function setPrdt_humedad($prdt_humedad) {
        $this->prdt_humedad = $prdt_humedad;
    }

    function setPrdt_type_cd_03($prdt_type_cd_03) {
        $this->prdt_type_cd_03 = $prdt_type_cd_03;
    }

    function setPrdt_type_cd_04($prdt_type_cd_04) {
        $this->prdt_type_cd_04 = $prdt_type_cd_04;
    }

    function setAnls_type_cd_01($anls_type_cd_01) {
        $this->anls_type_cd_01 = $anls_type_cd_01;
    }

    function setAnls_type_cd_02($anls_type_cd_02) {
        $this->anls_type_cd_02 = $anls_type_cd_02;
    }

    function setAnls_type_cd_03($anls_type_cd_03) {
        $this->anls_type_cd_03 = $anls_type_cd_03;
    }

    function setAnls_type_cd_04($anls_type_cd_04) {
        $this->anls_type_cd_04 = $anls_type_cd_04;
    }

    function setAnls_type_cd_05($anls_type_cd_05) {
        $this->anls_type_cd_05 = $anls_type_cd_05;
    }

    function setAnls_type_cd_06($anls_type_cd_06) {
        $this->anls_type_cd_06 = $anls_type_cd_06;
    }

    function setNcdt_type_cd_01($ncdt_type_cd_01) {
        $this->ncdt_type_cd_01 = $ncdt_type_cd_01;
    }

    function setNcdt_type_cd_02($ncdt_type_cd_02) {
        $this->ncdt_type_cd_02 = $ncdt_type_cd_02;
    }

    function setNcdt_type_cd_03($ncdt_type_cd_03) {
        $this->ncdt_type_cd_03 = $ncdt_type_cd_03;
    }

    function setNcdt_type_cd_04($ncdt_type_cd_04) {
        $this->ncdt_type_cd_04 = $ncdt_type_cd_04;
    }

    function setNcdt_type_cd_05($ncdt_type_cd_05) {
        $this->ncdt_type_cd_05 = $ncdt_type_cd_05;
    }

    function setNcdt_type_cd_06($ncdt_type_cd_06) {
        $this->ncdt_type_cd_06 = $ncdt_type_cd_06;
    }

    function setNcdt_type_cd_07($ncdt_type_cd_07) {
        $this->ncdt_type_cd_07 = $ncdt_type_cd_07;
    }

    function setNcdt_type_cd_08($ncdt_type_cd_08) {
        $this->ncdt_type_cd_08 = $ncdt_type_cd_08;
    }

    function setNcdt_type_cd_09($ncdt_type_cd_09) {
        $this->ncdt_type_cd_09 = $ncdt_type_cd_09;
    }

    function setNcdt_type_cd_10($ncdt_type_cd_10) {
        $this->ncdt_type_cd_10 = $ncdt_type_cd_10;
    }

    function setNcdt_type_cd_11($ncdt_type_cd_11) {
        $this->ncdt_type_cd_11 = $ncdt_type_cd_11;
    }

    function setNcdt_type_cd_12($ncdt_type_cd_12) {
        $this->ncdt_type_cd_12 = $ncdt_type_cd_12;
    }

    function setNcdt_type_cd_13($ncdt_type_cd_13) {
        $this->ncdt_type_cd_13 = $ncdt_type_cd_13;
    }

    function setNcdt_type_cd_14($ncdt_type_cd_14) {
        $this->ncdt_type_cd_14 = $ncdt_type_cd_14;
    }

    function setNcdt_type_cd_15($ncdt_type_cd_15) {
        $this->ncdt_type_cd_15 = $ncdt_type_cd_15;
    }

    function setNcdt_type_cd_16($ncdt_type_cd_16) {
        $this->ncdt_type_cd_16 = $ncdt_type_cd_16;
    }

    function setNcdt_type_cd_17($ncdt_type_cd_17) {
        $this->ncdt_type_cd_17 = $ncdt_type_cd_17;
    }

    function setNcdt_type_nm_01($ncdt_type_nm_01) {
        $this->ncdt_type_nm_01 = $ncdt_type_nm_01;
    }

    function setNcdt_type_nm_02($ncdt_type_nm_02) {
        $this->ncdt_type_nm_02 = $ncdt_type_nm_02;
    }

    function setNcdt_type_nm_03($ncdt_type_nm_03) {
        $this->ncdt_type_nm_03 = $ncdt_type_nm_03;
    }

    function setNcdt_type_nm_04($ncdt_type_nm_04) {
        $this->ncdt_type_nm_04 = $ncdt_type_nm_04;
    }

    function setNcdt_type_nm_05($ncdt_type_nm_05) {
        $this->ncdt_type_nm_05 = $ncdt_type_nm_05;
    }

    function setNcdt_type_nm_06($ncdt_type_nm_06) {
        $this->ncdt_type_nm_06 = $ncdt_type_nm_06;
    }

    function setNcdt_type_nm_07($ncdt_type_nm_07) {
        $this->ncdt_type_nm_07 = $ncdt_type_nm_07;
    }

    function setNcdt_type_nm_08($ncdt_type_nm_08) {
        $this->ncdt_type_nm_08 = $ncdt_type_nm_08;
    }

    function setNcdt_type_nm_09($ncdt_type_nm_09) {
        $this->ncdt_type_nm_09 = $ncdt_type_nm_09;
    }

    function setNcdt_type_nm_10($ncdt_type_nm_10) {
        $this->ncdt_type_nm_10 = $ncdt_type_nm_10;
    }

    function setNcdt_type_nm_11($ncdt_type_nm_11) {
        $this->ncdt_type_nm_11 = $ncdt_type_nm_11;
    }

    function setNcdt_type_nm_12($ncdt_type_nm_12) {
        $this->ncdt_type_nm_12 = $ncdt_type_nm_12;
    }

    function setNcdt_type_nm_13($ncdt_type_nm_13) {
        $this->ncdt_type_nm_13 = $ncdt_type_nm_13;
    }

    function setNcdt_type_nm_14($ncdt_type_nm_14) {
        $this->ncdt_type_nm_14 = $ncdt_type_nm_14;
    }

    function setNcdt_type_nm_15($ncdt_type_nm_15) {
        $this->ncdt_type_nm_15 = $ncdt_type_nm_15;
    }

    function setNcdt_type_nm_16($ncdt_type_nm_16) {
        $this->ncdt_type_nm_16 = $ncdt_type_nm_16;
    }

    function setNcdt_type_nm_17($ncdt_type_nm_17) {
        $this->ncdt_type_nm_17 = $ncdt_type_nm_17;
    }

    function setDclr_rmk($dclr_rmk) {
        $this->dclr_rmk = $dclr_rmk;
    }

    function setMdf_dt($mdf_dt) {
        $this->mdf_dt = $mdf_dt;
    }




}