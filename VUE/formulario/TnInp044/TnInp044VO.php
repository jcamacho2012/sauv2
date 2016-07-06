<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp044VO{
    private $req_no;     
    private $dcm_no;
    private $dcm_nm;
    private $req_city_nm;
    private $rfr_dcm_no;    
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
    private $inv_no;
    private $lbty_zne_nm;
    private $lbty_ad;
    private $lbty_cd;						
    private $hc;
    private $tnk_cd;
    private $lot_cd;
    private $cltr_ut_nm;
    private $smt_frm_nm;
    private $spc_nm;
    private $rpdt_rgm_nm;
    private $dst_ntn_nm;				
    private $prdt_nwt;
    private $nwt_ut;
    private $pck_qt;
    private $pck_ut;
    private $exp_qt;
    private $prdt_qt_ut;    
    private $dclr_rmk;
    private $mdf_dt;  
    private $samp_rcv_de;
    
    function __construct($array) {
        $this->req_no=$array['req_no'];
        $this->dcm_no=$array['dcm_no'];
        $this->dcm_nm=$array['dcm_nm'];
        $this->req_city_nm=$array['req_city_nm'];
        $this->rfr_dcm_no=$array['rfr_dcm_no'];
        $this->dclr_cl_cd=$array['dclr_cl_cd'];	
        $this->dclr_idt_no=$array['dclr_idt_no'];
        $this->dclr_nole=$array['dclr_nole'];
        $this->dclr_nm=$array['dclr_nm'];    
        $this->dclr_rpgp_nm=$array['dclr_rpgp_nm'];
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
        $this->lbty_zne_nm=$array['lbty_zne_nm'];
        $this->lbty_ad=$array['lbty_ad'];
        $this->lbty_cd=$array['lbty_cd'];				
        $this->hc=$array['hc'];
        $this->tnk_cd=$array['tnk_cd'];
        $this->lot_cd=$array['lot_cd'];
        $this->cltr_ut_nm=$array['cltr_ut_nm'];
        $this->smt_frm_nm=$array['smt_frm_nm'];
        $this->spc_nm=$array['spc_nm'];
        $this->rpdt_rgm_nm=$array['rpdt_rgm_nm'];
        $this->dst_ntn_nm=$array['dst_ntn_nm'];		
        $this->prdt_nwt=$array['prdt_nwt'];
        $this->nwt_ut=$array['nwt_ut'];
        $this->pck_qt=$array['pck_qt'];
        $this->pck_ut=$array['pck_ut'];
        $this->exp_qt=$array['exp_qt'];
        $this->prdt_qt_ut=$array['prdt_qt_ut'];
        $this->dclr_rmk=$array['dclr_rmk'];
        $this->mdf_dt=$array['mdf_dt'];
        $this->samp_rcv_de=$array['samp_rcv_de'];
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

    function getRfr_dcm_no() {
        return $this->rfr_dcm_no;
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

    function getInv_no() {
        return $this->inv_no;
    }

    function getLbty_zne_nm() {
        return $this->lbty_zne_nm;
    }

    function getLbty_ad() {
        return $this->lbty_ad;
    }

    function getLbty_cd() {
        return $this->lbty_cd;
    }

    function getHc() {
        return $this->hc;
    }

    function getTnk_cd() {
        return $this->tnk_cd;
    }

    function getLot_cd() {
        return $this->lot_cd;
    }

    function getCltr_ut_nm() {
        return $this->cltr_ut_nm;
    }

    function getSmt_frm_nm() {
        return $this->smt_frm_nm;
    }

    function getSpc_nm() {
        return $this->spc_nm;
    }

    function getRpdt_rgm_nm() {
        return $this->rpdt_rgm_nm;
    }

    function getDst_ntn_nm() {
        return $this->dst_ntn_nm;
    }

    function getPrdt_nwt() {
        return $this->prdt_nwt;
    }

    function getNwt_ut() {
        return $this->nwt_ut;
    }

    function getPck_qt() {
        return $this->pck_qt;
    }   
    
    function getPck_ut() {
        return $this->pck_ut;
    }

    function getExp_qt() {
        return $this->exp_qt;
    }

    function getPrdt_qt_ut() {
        return $this->prdt_qt_ut;
    }
        
    function getDclr_rmk() {
        return $this->dclr_rmk;
    }

    function getMdf_dt() {
        return $this->mdf_dt;
    }
    
    function getSamp_rcv_de() {
        return $this->samp_rcv_de;
    }
    
    function setSamp_rcv_de($samp_rcv_de) {
        $this->samp_rcv_de = $samp_rcv_de;
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

    function setRfr_dcm_no($rfr_dcm_no) {
        $this->rfr_dcm_no = $rfr_dcm_no;
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

    function setInv_no($inv_no) {
        $this->inv_no = $inv_no;
    }

    function setLbty_zne_nm($lbty_zne_nm) {
        $this->lbty_zne_nm = $lbty_zne_nm;
    }

    function setLbty_ad($lbty_ad) {
        $this->lbty_ad = $lbty_ad;
    }

    function setLbty_cd($lbty_cd) {
        $this->lbty_cd = $lbty_cd;
    }

    function setHc($hc) {
        $this->hc = $hc;
    }

    function setTnk_cd($tnk_cd) {
        $this->tnk_cd = $tnk_cd;
    }

    function setLot_cd($lot_cd) {
        $this->lot_cd = $lot_cd;
    }

    function setCltr_ut_nm($cltr_ut_nm) {
        $this->cltr_ut_nm = $cltr_ut_nm;
    }

    function setSmt_frm_nm($smt_frm_nm) {
        $this->smt_frm_nm = $smt_frm_nm;
    }

    function setSpc_nm($spc_nm) {
        $this->spc_nm = $spc_nm;
    }

    function setRpdt_rgm_nm($rpdt_rgm_nm) {
        $this->rpdt_rgm_nm = $rpdt_rgm_nm;
    }

    function setDst_ntn_nm($dst_ntn_nm) {
        $this->dst_ntn_nm = $dst_ntn_nm;
    }

    function setPrdt_nwt($prdt_nwt) {
        $this->prdt_nwt = $prdt_nwt;
    }

    function setNwt_ut($nwt_ut) {
        $this->nwt_ut = $nwt_ut;
    }

    function setPck_qt($pck_qt) {
        $this->pck_qt = $pck_qt;
    }    

    function setPck_ut($pck_ut) {
        $this->pck_ut = $pck_ut;
    }
    
    function setExp_qt($exp_qt) {
        $this->exp_qt = $exp_qt;
    }

    function setPrdt_qt_ut($prdt_qt_ut) {
        $this->prdt_qt_ut = $prdt_qt_ut;
    }

    function setDclr_rmk($dclr_rmk) {
        $this->dclr_rmk = $dclr_rmk;
    }

    function setMdf_dt($mdf_dt) {
        $this->mdf_dt = $mdf_dt;
    }
                           
}