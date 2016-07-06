<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp039VO{
    private $req_no;     
    private $dcm_no;
    private $dcm_nm;
    private $req_city_nm;    
    private $dclr_cl_cd;	
    private $dclr_idt_no;
    private $dclr_nole;
    private $dclr_nm;       
    private $dclr_prvhc_nm;
    private $dclr_cuty_nm;
    private $dclr_prqi_nm;
    private $dclr_ad;
    private $dclr_tel_no;
    private $dclr_fax_no;
    private $dclr_em;    
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
    private $prdt_cl;
    private $prdt_tot_nwt;
    private $prdt_tot_qt; 
    private $smp_de;
    private $anls_end_de;
    private $ext_nm;
    private $rmk;
    private $crtfc_fg;
    private $dclr_rmk;
    private $mdf_dt;    
    
    
    
     function __construct($array) {
        $this->req_no=$array['req_no'];
        $this->dcm_no=$array['dcm_no'];
        $this->dcm_nm=$array['dcm_nm'];
        $this->req_city_nm=$array['req_city_nm'];       
        $this->dclr_cl_cd=$array['dclr_cl_cd'];	
        $this->dclr_idt_no=$array['dclr_idt_no'];
        $this->dclr_nole=$array['dclr_nole'];
        $this->dclr_nm=$array['dclr_nm'];            
        $this->dclr_prvhc_nm=$array['dclr_prvhc_nm'];
        $this->dclr_cuty_nm=$array['dclr_cuty_nm'];
        $this->dclr_prqi_nm=$array['dclr_prqi_nm'];
        $this->dclr_ad=$array['dclr_ad'];
        $this->dclr_tel_no=$array['dclr_tel_no'];
        $this->dclr_fax_no=$array['dclr_fax_no'];
        $this->dclr_em=$array['dclr_em'];        
        $this->expr_cl_cd=$array['expr_cl_cd'];
        $this->expr_idt_no=$array['expr_idt_no'];
        $this->expr_nm=$array['expr_nm'];        
        $this->expr_prvhc_nm=$array['expr_prvhc_nm'];
        $this->expr_cuty_nm=$array['expr_cuty_nm'];
        $this->expr_prqi_nm=$array['expr_prqi_nm'];
        $this->expr_ad=$array['expr_ad'];
        $this->expr_tel_no=$array['expr_tel_no'];
        $this->expr_fax_no=$array['expr_fax_no'];
        $this->expr_em=$array['expr_em'];        
        $this->prdt_cl=$array['prdt_cl'];
        $this->prdt_tot_qt=number_format($array['prdt_tot_qt'],2)." ".$array['prdt_tot_qt_ut'];        
        $this->prdt_tot_nwt=number_format($array['prdt_tot_nwt'],2)." ".$array['prdt_tot_nwt_ut'];
        $this->smp_de=$array['smp_de'];
        $this->anls_end_de=$array['anls_end_de'];
        $this->ext_nm=$array['ext_nm'];
        $this->rmk=$array['rmk'];
        $this->crtfc_fg=$array['crtfc_fg'];
        $this->dclr_rmk=$array['dclr_rmk'];
        $this->mdf_dt=$array['mdf_dt'];        
    }
    
    public function getReq_no() {
        return $this->req_no;
    }
    
    public function getDcm_no() {
        return $this->dcm_no;
    }

    public function getDcm_nm() {
        return $this->dcm_nm;
    }

    public function getReq_city_nm() {
        return $this->req_city_nm;
    }

    public function getDclr_cl_cd() {
        return $this->dclr_cl_cd;
    }

    public function getDclr_idt_no() {
        return $this->dclr_idt_no;
    }

    public function getDclr_nole() {
        return $this->dclr_nole;
    }

    public function getDclr_nm() {
        return $this->dclr_nm;
    }

    public function getDclr_prvhc_nm() {
        return $this->dclr_prvhc_nm;
    }

    public function getDclr_cuty_nm() {
        return $this->dclr_cuty_nm;
    }

    public function getDclr_prqi_nm() {
        return $this->dclr_prqi_nm;
    }

    public function getDclr_ad() {
        return $this->dclr_ad;
    }

    public function getDclr_tel_no() {
        return $this->dclr_tel_no;
    }

    public function getDclr_fax_no() {
        return $this->dclr_fax_no;
    }

    public function getDclr_em() {
        return $this->dclr_em;
    }

    public function getExpr_cl_cd() {
        return $this->expr_cl_cd;
    }

    public function getExpr_idt_no() {
        return $this->expr_idt_no;
    }

    public function getExpr_nm() {
        return $this->expr_nm;
    }

    public function getExpr_prvhc_nm() {
        return $this->expr_prvhc_nm;
    }

    public function getExpr_cuty_nm() {
        return $this->expr_cuty_nm;
    }

    public function getExpr_prqi_nm() {
        return $this->expr_prqi_nm;
    }

    public function getExpr_ad() {
        return $this->expr_ad;
    }

    public function getExpr_tel_no() {
        return $this->expr_tel_no;
    }

    public function getExpr_fax_no() {
        return $this->expr_fax_no;
    }

    public function getExpr_em() {
        return $this->expr_em;
    }

    public function getPrdt_cl() {
        return $this->prdt_cl;
    }

    public function getPrdt_tot_nwt() {
        return $this->prdt_tot_nwt;
    }

    public function getPrdt_tot_qt() {
        return $this->prdt_tot_qt;
    }
    
    public function getSmp_de() {
        return $this->smp_de;
    }

    public function getAnls_end_de() {
        return $this->anls_end_de;
    }

    public function getExt_nm() {
        return $this->ext_nm;
    }

    public function getRmk() {
        return $this->rmk;
    }
    
    public function getCrtfc_fg() {
        return $this->crtfc_fg;
    }
            
    public function getDclr_rmk() {
        return $this->dclr_rmk;
    }

    public function getMdf_dt() {
        return $this->mdf_dt;
    }

    public function setReq_no($req_no) {
        $this->req_no = $req_no;
    }

    public function setDcm_no($dcm_no) {
        $this->dcm_no = $dcm_no;
    }

    public function setDcm_nm($dcm_nm) {
        $this->dcm_nm = $dcm_nm;
    }

    public function setReq_city_nm($req_city_nm) {
        $this->req_city_nm = $req_city_nm;
    }

    public function setDclr_cl_cd($dclr_cl_cd) {
        $this->dclr_cl_cd = $dclr_cl_cd;
    }

    public function setDclr_idt_no($dclr_idt_no) {
        $this->dclr_idt_no = $dclr_idt_no;
    }

    public function setDclr_nole($dclr_nole) {
        $this->dclr_nole = $dclr_nole;
    }

    public function setDclr_nm($dclr_nm) {
        $this->dclr_nm = $dclr_nm;
    }

    public function setDclr_prvhc_nm($dclr_prvhc_nm) {
        $this->dclr_prvhc_nm = $dclr_prvhc_nm;
    }

    public function setDclr_cuty_nm($dclr_cuty_nm) {
        $this->dclr_cuty_nm = $dclr_cuty_nm;
    }

    public function setDclr_prqi_nm($dclr_prqi_nm) {
        $this->dclr_prqi_nm = $dclr_prqi_nm;
    }

    public function setDclr_ad($dclr_ad) {
        $this->dclr_ad = $dclr_ad;
    }

    public function setDclr_tel_no($dclr_tel_no) {
        $this->dclr_tel_no = $dclr_tel_no;
    }

    public function setDclr_fax_no($dclr_fax_no) {
        $this->dclr_fax_no = $dclr_fax_no;
    }

    public function setDclr_em($dclr_em) {
        $this->dclr_em = $dclr_em;
    }

    public function setExpr_cl_cd($expr_cl_cd) {
        $this->expr_cl_cd = $expr_cl_cd;
    }

    public function setExpr_idt_no($expr_idt_no) {
        $this->expr_idt_no = $expr_idt_no;
    }

    public function setExpr_nm($expr_nm) {
        $this->expr_nm = $expr_nm;
    }

    public function setExpr_prvhc_nm($expr_prvhc_nm) {
        $this->expr_prvhc_nm = $expr_prvhc_nm;
    }

    public function setExpr_cuty_nm($expr_cuty_nm) {
        $this->expr_cuty_nm = $expr_cuty_nm;
    }

    public function setExpr_prqi_nm($expr_prqi_nm) {
        $this->expr_prqi_nm = $expr_prqi_nm;
    }

    public function setExpr_ad($expr_ad) {
        $this->expr_ad = $expr_ad;
    }

    public function setExpr_tel_no($expr_tel_no) {
        $this->expr_tel_no = $expr_tel_no;
    }

    public function setExpr_fax_no($expr_fax_no) {
        $this->expr_fax_no = $expr_fax_no;
    }

    public function setExpr_em($expr_em) {
        $this->expr_em = $expr_em;
    }

    public function setPrdt_cl($prdt_cl) {
        $this->prdt_cl = $prdt_cl;
    }

    public function setPrdt_tot_nwt($prdt_tot_nwt) {
        $this->prdt_tot_nwt = $prdt_tot_nwt;
    }

    public function setPrdt_tot_qt($prdt_tot_qt) {
        $this->prdt_tot_qt = $prdt_tot_qt;
    }

    public function setSmp_de($smp_de) {
        $this->smp_de = $smp_de;
    }

    public function setAnls_end_de($anls_end_de) {
        $this->anls_end_de = $anls_end_de;
    }

    public function setExt_nm($ext_nm) {
        $this->ext_nm = $ext_nm;
    }

    public function setRmk($rmk) {
        $this->rmk = $rmk;
    }
    
    public function setCrtfc_fg($crtfc_fg) {
        $this->crtfc_fg = $crtfc_fg;
    }
        
    public function setDclr_rmk($dclr_rmk) {
        $this->dclr_rmk = $dclr_rmk;
    }

    public function setMdf_dt($mdf_dt) {
        $this->mdf_dt = $mdf_dt;
    }    
}