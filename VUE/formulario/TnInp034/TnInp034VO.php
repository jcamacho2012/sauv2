<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp034VO{
    private $req_no;     
    private $dcm_no;
    private $dcm_nm;
    private $req_city_nm;
    private $exp_sty_ctft_req_no; 
    private $qlt_ctft_no;
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
    private $inv_no;						
    private $para_nm;
    private $para_rst_nm;
    private $carr_nm;
    private $vsl_nm;
    private $fghnb;
    private $oter_trsp_way_nm;
    private $crdt_letr_no;
    private $trst_ntn_nm;
    private $trsp_way_inf;
    private $ctnr_no;				
    private $seal_no;
    private $prdt_tot_qt;
    private $prdt_tot_nwt;
    private $dclr_rmk;
    private $mdf_dt;
    private $estbl_no;
    
    function __construct($array) {
        $this->req_no=$array['req_no'];
        $this->dcm_no=$array['dcm_no'];
        $this->dcm_nm=$array['dcm_nm'];
        $this->req_city_nm=$array['req_city_nm'];
        $this->exp_sty_ctft_req_no=$array['exp_sty_ctft_req_no'];
        $this->qlt_ctft_no=$array['qlt_ctft_no'];
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
        $this->impr_nm=$array['impr_nm'];	
        $this->impr_ntn_nm=$array['impr_ntn_nm'];
        $this->impr_city_nm=$array['impr_city_nm'];
        $this->impr_ad=$array['impr_ad'];
        $this->impr_tel_no=$array['impr_tel_no'];
        $this->impr_fax_no=$array['impr_fax_no'];
        $this->impr_em=$array['impr_em'];
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
        $this->inv_no=$array['inv_no'];				
        $this->para_nm=$array['para_nm'];
        $this->para_rst_nm=$array['para_rst_nm'];
        $this->carr_nm=$array['carr_nm'];
        $this->vsl_nm=$array['vsl_nm'];
        $this->fghnb=$array['fghnb'];
        $this->oter_trsp_way_nm=$array['oter_trsp_way_nm'];
        $this->crdt_letr_no=$array['crdt_letr_no'];
        $this->trst_ntn_nm=$array['trst_ntn_nm'];
        $this->trsp_way_inf=$array['trsp_way_inf'];
        $this->ctnr_no=$array['ctnr_no'];	
        $this->seal_no=$array['seal_no'];
        $this->prdt_tot_qt=number_format($array['prdt_tot_qt'],2)." ".$array['prdt_tot_qt_ut'];        
        $this->prdt_tot_nwt=number_format($array['prdt_tot_nwt'],2)." ".$array['prdt_tot_nwt_ut'];        
        $this->dclr_rmk=$array['dclr_rmk'];
        $this->mdf_dt=$array['mdf_dt'];
        $this->estbl_no=$array['estbl_no'];
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

    function getQlt_ctft_no() {
        return $this->qlt_ctft_no;
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

    function getInv_no() {
        return $this->inv_no;
    }

    function getPara_nm() {
        return $this->para_nm;
    }

    function getPara_rst_nm() {
        return $this->para_rst_nm;
    }

    function getCarr_nm() {
        return $this->carr_nm;
    }

    function getVsl_nm() {
        return $this->vsl_nm;
    }

    function getFghnb() {
        return $this->fghnb;
    }

    function getOter_trsp_way_nm() {
        return $this->oter_trsp_way_nm;
    }

    function getCrdt_letr_no() {
        return $this->crdt_letr_no;
    }

    function getTrst_ntn_nm() {
        return $this->trst_ntn_nm;
    }

    function getTrsp_way_inf() {
        return $this->trsp_way_inf;
    }

    function getCtnr_no() {
        return $this->ctnr_no;
    }

    function getSeal_no() {
        return $this->seal_no;
    }

    function getPrdt_tot_qt() {
        return $this->prdt_tot_qt;
    }

    function getPrdt_tot_nwt() {
        return $this->prdt_tot_nwt;
    }

    function getDclr_rmk() {
        return $this->dclr_rmk;
    }

    function getMdf_dt() {
        return $this->mdf_dt;
    }

    function getEstbl_no() {
        return $this->estbl_no;
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

    function setQlt_ctft_no($qlt_ctft_no) {
        $this->qlt_ctft_no = $qlt_ctft_no;
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

    function setInv_no($inv_no) {
        $this->inv_no = $inv_no;
    }

    function setPara_nm($para_nm) {
        $this->para_nm = $para_nm;
    }

    function setPara_rst_nm($para_rst_nm) {
        $this->para_rst_nm = $para_rst_nm;
    }

    function setCarr_nm($carr_nm) {
        $this->carr_nm = $carr_nm;
    }

    function setVsl_nm($vsl_nm) {
        $this->vsl_nm = $vsl_nm;
    }

    function setFghnb($fghnb) {
        $this->fghnb = $fghnb;
    }

    function setOter_trsp_way_nm($oter_trsp_way_nm) {
        $this->oter_trsp_way_nm = $oter_trsp_way_nm;
    }

    function setCrdt_letr_no($crdt_letr_no) {
        $this->crdt_letr_no = $crdt_letr_no;
    }

    function setTrst_ntn_nm($trst_ntn_nm) {
        $this->trst_ntn_nm = $trst_ntn_nm;
    }

    function setTrsp_way_inf($trsp_way_inf) {
        $this->trsp_way_inf = $trsp_way_inf;
    }

    function setCtnr_no($ctnr_no) {
        $this->ctnr_no = $ctnr_no;
    }

    function setSeal_no($seal_no) {
        $this->seal_no = $seal_no;
    }

    function setPrdt_tot_qt($prdt_tot_qt) {
        $this->prdt_tot_qt = $prdt_tot_qt;
    }

    function setPrdt_tot_nwt($prdt_tot_nwt) {
        $this->prdt_tot_nwt = $prdt_tot_nwt;
    }

    function setDclr_rmk($dclr_rmk) {
        $this->dclr_rmk = $dclr_rmk;
    }

    function setMdf_dt($mdf_dt) {
        $this->mdf_dt = $mdf_dt;
    }

    function setEstbl_no($estbl_no) {
        $this->estbl_no = $estbl_no;
    }


}