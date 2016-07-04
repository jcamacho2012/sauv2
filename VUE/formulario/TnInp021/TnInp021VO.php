<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp021VO{
    private $req_no;     
    private $dcm_no;
    private $dcm_nm;
    private $dcm_type_nm;
    private $req_city_nm; 
    private $prev_ctft_no;
    private $prev_ctft_iss_de;
    private $dclr_cl_cd;	
    private $dclr_idt_no;
    private $dclr_nole;
    private $dclr_nm;
    private $dclr_odty_nm;
    private $dclr_rpgp_nm;
    private $dclr_prvhc_nm;
    private $dclr_cuty_nm;
    private $dclr_prqi_nm;
    private $dclr_ad;
    private $dclr_tel_no;
    private $dclr_fax_no;
    private $dclr_em;
    private $impr_cl_cd;
    private $impr_idt_no;
    private $impr_nm;
    private $impr_rpst_nm;
    private $impr_prvhc_nm;
    private $impr_cuty_nm;
    private $impr_prqi_nm;
    private $impr_ad;
    private $impr_tel_no;
    private $impr_fax_no;
    private $impr_em;
    private $prdt_nm;
    private $prdt_arv_de;
    private $prdt_type_nm;
    private $smt_frm_inf;
    private $expr_lbty_nm;
    private $pdc_ntn_nm;
    private $inv_no;
    private $prdt_qt;              
    private $prdt_nwt;                    
    private $fobv_val_tot;                    
    private $spm_mtdrt_desc;
    private $hc;
    private $gud_no;
    private $dclr_rmk;
    private $mdf_dt;  
    
    function __construct($array) {
        $this->req_no=$array['req_no'];
        $this->dcm_no=$array['dcm_no'];
        $this->dcm_nm=$array['dcm_nm'];
        $this->dcm_type_nm=$array['dcm_type_nm'];
        $this->req_city_nm=$array['req_city_nm'];
        $this->prev_ctft_no=$array['prev_ctft_no'];
        $this->prev_ctft_iss_de=$array['prev_ctft_iss_de'];
        $this->dclr_cl_cd=$array['dclr_cl_cd'];
        $this->dclr_idt_no=$array['dclr_idt_no'];
        $this->dclr_nole=$array['dclr_nole'];
        $this->dclr_nm=$array['dclr_nm'];
        $this->dclr_odty_nm=$array['dclr_odty_nm'];
        $this->dclr_rpgp_nm=$array['dclr_rpgp_nm'];
        $this->dclr_prvhc_nm=$array['dclr_prvhc_nm'];
        $this->dclr_cuty_nm=$array['dclr_cuty_nm'];
        $this->dclr_prqi_nm=$array['dclr_prqi_nm'];
        $this->dclr_ad=$array['dclr_ad'];
        $this->dclr_tel_no=$array['dclr_tel_no'];
        $this->dclr_fax_no=$array['dclr_fax_no'];
        $this->dclr_em=$array['dclr_em'];
        $this->impr_cl_cd=$array['impr_cl_cd'];
        $this->impr_idt_no=$array['impr_idt_no'];
        $this->impr_nm=$array['impr_nm'];
        $this->impr_rpst_nm=$array['impr_rpst_nm'];
        $this->impr_prvhc_nm=$array['impr_prvhc_nm'];
        $this->impr_cuty_nm=$array['impr_cuty_nm'];
        $this->impr_prqi_nm=$array['impr_prqi_nm'];
        $this->impr_ad=$array['impr_ad'];
        $this->impr_tel_no=$array['impr_tel_no'];
        $this->impr_fax_no=$array['impr_fax_no'];
        $this->impr_em=$array['impr_em'];
        $this->prdt_nm=$array['prdt_nm'];
        $this->prdt_arv_de=$array['prdt_arv_de'];
        $this->prdt_type_nm=$array['prdt_type_nm'];
        $this->smt_frm_inf=$array['smt_frm_inf'];
        $this->expr_lbty_nm=$array['expr_lbty_nm'];
        $this->pdc_ntn_nm=$array['pdc_ntn_nm'];
        $this->inv_no=$array['inv_no'];
        $this->prdt_qt=number_format($array['prdt_qt'],2)." ".$array['prdt_qt_ut'];        
        $this->prdt_nwt=number_format($array['prdt_nwt'],2)." ".$array['prdt_nwt_ut'];        
        $this->fobv_val_tot=number_format($array['fobv_val_tot'],2)." ".$array['fobv_tot_ut'];                                
        $this->spm_mtdrt_desc=$array['spm_mtdrt_desc'];
        $this->hc=$array['hc'];
        $this->gud_no=$array['gud_no'];
        $this->dclr_rmk=$array['dclr_rmk'];
        $this->mdf_dt=$array['mdf_dt'];    
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

    function getDcm_type_nm() {
        return $this->dcm_type_nm;
    }

    function getReq_city_nm() {
        return $this->req_city_nm;
    }

    function getPrev_ctft_no() {
        return $this->prev_ctft_no;
    }

    function getPrev_ctft_iss_de() {
        return $this->prev_ctft_iss_de;
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

    function getDclr_odty_nm() {
        return $this->dclr_odty_nm;
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

    function getImpr_cl_cd() {
        return $this->impr_cl_cd;
    }

    function getImpr_idt_no() {
        return $this->impr_idt_no;
    }

    function getImpr_nm() {
        return $this->impr_nm;
    }

    function getImpr_rpst_nm() {
        return $this->impr_rpst_nm;
    }

    function getImpr_prvhc_nm() {
        return $this->impr_prvhc_nm;
    }

    function getImpr_cuty_nm() {
        return $this->impr_cuty_nm;
    }

    function getImpr_prqi_nm() {
        return $this->impr_prqi_nm;
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

    function getPrdt_nm() {
        return $this->prdt_nm;
    }

    function getPrdt_arv_de() {
        return $this->prdt_arv_de;
    }

    function getPrdt_type_nm() {
        return $this->prdt_type_nm;
    }

    function getSmt_frm_inf() {
        return $this->smt_frm_inf;
    }

    function getExpr_lbty_nm() {
        return $this->expr_lbty_nm;
    }

    function getPdc_ntn_nm() {
        return $this->pdc_ntn_nm;
    }

    function getInv_no() {
        return $this->inv_no;
    }

    function getPrdt_qt() {
        return $this->prdt_qt;
    }

    function getPrdt_nwt() {
        return $this->prdt_nwt;
    }

    function getFobv_val_tot() {
        return $this->fobv_val_tot;
    }

    function getSpm_mtdrt_desc() {
        return $this->spm_mtdrt_desc;
    }

    function getHc() {
        return $this->hc;
    }

    function getGud_no() {
        return $this->gud_no;
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

    function setDcm_type_nm($dcm_type_nm) {
        $this->dcm_type_nm = $dcm_type_nm;
    }

    function setReq_city_nm($req_city_nm) {
        $this->req_city_nm = $req_city_nm;
    }

    function setPrev_ctft_no($prev_ctft_no) {
        $this->prev_ctft_no = $prev_ctft_no;
    }

    function setPrev_ctft_iss_de($prev_ctft_iss_de) {
        $this->prev_ctft_iss_de = $prev_ctft_iss_de;
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

    function setDclr_odty_nm($dclr_odty_nm) {
        $this->dclr_odty_nm = $dclr_odty_nm;
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

    function setImpr_cl_cd($impr_cl_cd) {
        $this->impr_cl_cd = $impr_cl_cd;
    }

    function setImpr_idt_no($impr_idt_no) {
        $this->impr_idt_no = $impr_idt_no;
    }

    function setImpr_nm($impr_nm) {
        $this->impr_nm = $impr_nm;
    }

    function setImpr_rpst_nm($impr_rpst_nm) {
        $this->impr_rpst_nm = $impr_rpst_nm;
    }

    function setImpr_prvhc_nm($impr_prvhc_nm) {
        $this->impr_prvhc_nm = $impr_prvhc_nm;
    }

    function setImpr_cuty_nm($impr_cuty_nm) {
        $this->impr_cuty_nm = $impr_cuty_nm;
    }

    function setImpr_prqi_nm($impr_prqi_nm) {
        $this->impr_prqi_nm = $impr_prqi_nm;
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

    function setPrdt_nm($prdt_nm) {
        $this->prdt_nm = $prdt_nm;
    }

    function setPrdt_arv_de($prdt_arv_de) {
        $this->prdt_arv_de = $prdt_arv_de;
    }

    function setPrdt_type_nm($prdt_type_nm) {
        $this->prdt_type_nm = $prdt_type_nm;
    }

    function setSmt_frm_inf($smt_frm_inf) {
        $this->smt_frm_inf = $smt_frm_inf;
    }

    function setExpr_lbty_nm($expr_lbty_nm) {
        $this->expr_lbty_nm = $expr_lbty_nm;
    }

    function setPdc_ntn_nm($pdc_ntn_nm) {
        $this->pdc_ntn_nm = $pdc_ntn_nm;
    }

    function setInv_no($inv_no) {
        $this->inv_no = $inv_no;
    }

    function setPrdt_qt($prdt_qt) {
        $this->prdt_qt = $prdt_qt;
    }

    function setPrdt_nwt($prdt_nwt) {
        $this->prdt_nwt = $prdt_nwt;
    }

    function setFobv_val_tot($fobv_val_tot) {
        $this->fobv_val_tot = $fobv_val_tot;
    }

    function setSpm_mtdrt_desc($spm_mtdrt_desc) {
        $this->spm_mtdrt_desc = $spm_mtdrt_desc;
    }

    function setHc($hc) {
        $this->hc = $hc;
    }

    function setGud_no($gud_no) {
        $this->gud_no = $gud_no;
    }

    function setDclr_rmk($dclr_rmk) {
        $this->dclr_rmk = $dclr_rmk;
    }

    function setMdf_dt($mdf_dt) {
        $this->mdf_dt = $mdf_dt;
    }


}