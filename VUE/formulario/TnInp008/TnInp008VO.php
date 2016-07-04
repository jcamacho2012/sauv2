<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp008VO{
    private $req_no;     
    private $dcm_no;
    private $dcm_nm;
    private $dcm_type_nm;
    private $req_city_nm; 
    private $prev_ctft_no;
    private $prev_ctft_iss_de;       
    private $rfr_dcm_no;
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
    private $expr_atr_no;
    private $expr_ntn_nm;
    private $expr_city_nm;
    private $expr_prvhc_nm;
    private $expr_cuty_nm;
    private $expr_prqi_nm;
    private $expr_ad;
    private $expr_tel_no;
    private $expr_fax_no;
    private $expr_em;
    private $mfr_cl_cd;
    private $mfr_idt_no;
    private $mfr_nm;
    private $mfr_rpgp_nm;
    private $mfr_atr_no;
    private $mfr_prvhc_nm;
    private $mfr_cuty_nm;
    private $mfr_prqi_nm;					
    private $mfr_ad;
    private $mfr_tel_no;
    private $mfr_fax_no;
    private $mfr_em;
    private $vsl_plat_nm;
    private $cntr_ntn_nm;
    private $cdrm_nm;
    private $ctnr_no;
    private $trsp_way_nm;
    private $carr_nm;
    private $trst_ntn_nm;
    private $trst_city_nm;
    private $crfr_pnt_nm;
    private $inv_no;
    private $blno;
    private $pkgs_tot_qt;            
    private $prdt_tot_nwt;            
    private $dclr_rmk;    
    private $mdf_dt;
    private $precinto_nm;
    
     function __construct($array) {
        $this->req_no=$array['req_no'];
        $this->dcm_no=$array['dcm_no'];
        $this->dcm_nm=$array['dcm_nm'];
        $this->dcm_type_nm=$array['dcm_type_nm'];
        $this->req_city_nm=$array['req_city_nm'];        
        $this-> prev_ctft_no=$array['prev_ctft_no'];
        $this->prev_ctft_iss_de=$array['prev_ctft_iss_de'];
        $this->rfr_dcm_no=$array['rfr_dcm_no'];                
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
        $this->expr_atr_no=$array['expr_atr_no'];
        $this->expr_ntn_nm=$array['expr_ntn_nm'];
        $this->expr_city_nm=$array['expr_city_nm'];    
        $this->expr_prvhc_nm=$array['expr_prvhc_nm'];
        $this->expr_cuty_nm=$array['expr_cuty_nm'];
        $this->expr_prqi_nm=$array['expr_prqi_nm'];
        $this->expr_ad=$array['expr_ad'];
        $this->expr_tel_no=$array['expr_tel_no'];
        $this->expr_fax_no=$array['expr_fax_no'];
        $this->expr_em=$array['expr_em'];
        $this->mfr_cl_cd=$array['mfr_cl_cd'];
        $this->mfr_idt_no=$array['mfr_idt_no'];
        $this->mfr_nm=$array['mfr_nm'];
        $this->mfr_rpgp_nm=$array['mfr_rpgp_nm'];
        $this->mfr_atr_no=$array['mfr_atr_no'];
        $this->mfr_prvhc_nm=$array['mfr_prvhc_nm'];
        $this->mfr_cuty_nm=$array['mfr_cuty_nm'];
        $this->mfr_prqi_nm=$array['mfr_prqi_nm'];
        $this->mfr_ad=$array['mfr_ad'];
        $this->mfr_tel_no=$array['mfr_tel_no'];
        $this->mfr_fax_no=$array['mfr_fax_no'];
        $this->mfr_em=$array['mfr_em'];
        $this->vsl_plat_nm=$array['vsl_plat_nm'];
        $this->cntr_ntn_nm=$array['cntr_ntn_nm'];
        $this->cdrm_nm=$array['cdrm_nm'];
        $this->ctnr_no=$array['ctnr_no'];
        $this->trsp_way_nm=$array['trsp_way_nm'];
        $this->carr_nm=$array['carr_nm'];
        $this->trst_ntn_nm=$array['trst_ntn_nm'];
        $this->trst_city_nm=$array['trst_city_nm'];
        $this->crfr_pnt_nm=$array['crfr_pnt_nm'];
        $this->inv_no=$array['inv_no'];
        $this->blno=$array['blno'];
        $this->pkgs_tot_qt=number_format($array['pkgs_tot_qt'],2)." ".$array['pkgs_tot_qt_ut'];        
        $this->prdt_tot_nwt=number_format($array['prdt_tot_nwt'],2)." ".$array['prdt_tot_nwt_ut'];                
        $this->dclr_rmk=$array['dclr_rmk'];
        $this->mdf_dt=$array['mdf_dt'];
        $this->precinto_nm=$array['precinto_nm'];
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

    public function getDcm_type_nm() {
        return $this->dcm_type_nm;
    }

    public function getReq_city_nm() {
        return $this->req_city_nm;
    }

    public function getPrev_ctft_no() {
        return $this->prev_ctft_no;
    }

    public function getPrev_ctft_iss_de() {
        return $this->prev_ctft_iss_de;
    }

    public function getRfr_dcm_no() {
        return $this->rfr_dcm_no;
    }

    public function getQlt_ctft_no() {
        return $this->qlt_ctft_no;
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

    public function getImpr_nm() {
        return $this->impr_nm;
    }

    public function getImpr_ntn_nm() {
        return $this->impr_ntn_nm;
    }

    public function getImpr_city_nm() {
        return $this->impr_city_nm;
    }

    public function getImpr_ad() {
        return $this->impr_ad;
    }

    public function getImpr_tel_no() {
        return $this->impr_tel_no;
    }

    public function getImpr_fax_no() {
        return $this->impr_fax_no;
    }

    public function getImpr_em() {
        return $this->impr_em;
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

    public function getExpr_atr_no() {
        return $this->expr_atr_no;
    }

    public function getExpr_ntn_nm() {
        return $this->expr_ntn_nm;
    }

    public function getExpr_city_nm() {
        return $this->expr_city_nm;
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

    public function getMfr_cl_cd() {
        return $this->mfr_cl_cd;
    }

    public function getMfr_idt_no() {
        return $this->mfr_idt_no;
    }

    public function getMfr_nm() {
        return $this->mfr_nm;
    }

    public function getMfr_rpgp_nm() {
        return $this->mfr_rpgp_nm;
    }

    public function getMfr_atr_no() {
        return $this->mfr_atr_no;
    }

    public function getMfr_prvhc_nm() {
        return $this->mfr_prvhc_nm;
    }

    public function getMfr_cuty_nm() {
        return $this->mfr_cuty_nm;
    }

    public function getMfr_prqi_nm() {
        return $this->mfr_prqi_nm;
    }

    public function getMfr_ad() {
        return $this->mfr_ad;
    }

    public function getMfr_tel_no() {
        return $this->mfr_tel_no;
    }

    public function getMfr_fax_no() {
        return $this->mfr_fax_no;
    }

    public function getMfr_em() {
        return $this->mfr_em;
    }

    public function getVsl_plat_nm() {
        return $this->vsl_plat_nm;
    }

    public function getCntr_ntn_nm() {
        return $this->cntr_ntn_nm;
    }

    public function getCdrm_nm() {
        return $this->cdrm_nm;
    }

    public function getCtnr_no() {
        return $this->ctnr_no;
    }

    public function getTrsp_way_nm() {
        return $this->trsp_way_nm;
    }

    public function getCarr_nm() {
        return $this->carr_nm;
    }

    public function getTrst_ntn_nm() {
        return $this->trst_ntn_nm;
    }

    public function getTrst_city_nm() {
        return $this->trst_city_nm;
    }

    public function getCrfr_pnt_nm() {
        return $this->crfr_pnt_nm;
    }

    public function getInv_no() {
        return $this->inv_no;
    }

    public function getBlno() {
        return $this->blno;
    }

    public function getPkgs_tot_qt() {
        return $this->pkgs_tot_qt;
    }

    public function getPrdt_tot_nwt() {
        return $this->prdt_tot_nwt;
    }

    public function getDclr_rmk() {
        return $this->dclr_rmk;
    }

    public function getMdf_dt() {
        return $this->mdf_dt;
    }

    public function getPrecinto_nm() {
        return $this->precinto_nm;
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

    public function setDcm_type_nm($dcm_type_nm) {
        $this->dcm_type_nm = $dcm_type_nm;
    }

    public function setReq_city_nm($req_city_nm) {
        $this->req_city_nm = $req_city_nm;
    }

    public function setPrev_ctft_no($prev_ctft_no) {
        $this->prev_ctft_no = $prev_ctft_no;
    }

    public function setPrev_ctft_iss_de($prev_ctft_iss_de) {
        $this->prev_ctft_iss_de = $prev_ctft_iss_de;
    }

    public function setRfr_dcm_no($rfr_dcm_no) {
        $this->rfr_dcm_no = $rfr_dcm_no;
    }

    public function setQlt_ctft_no($qlt_ctft_no) {
        $this->qlt_ctft_no = $qlt_ctft_no;
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

    public function setImpr_nm($impr_nm) {
        $this->impr_nm = $impr_nm;
    }

    public function setImpr_ntn_nm($impr_ntn_nm) {
        $this->impr_ntn_nm = $impr_ntn_nm;
    }

    public function setImpr_city_nm($impr_city_nm) {
        $this->impr_city_nm = $impr_city_nm;
    }

    public function setImpr_ad($impr_ad) {
        $this->impr_ad = $impr_ad;
    }

    public function setImpr_tel_no($impr_tel_no) {
        $this->impr_tel_no = $impr_tel_no;
    }

    public function setImpr_fax_no($impr_fax_no) {
        $this->impr_fax_no = $impr_fax_no;
    }

    public function setImpr_em($impr_em) {
        $this->impr_em = $impr_em;
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

    public function setExpr_atr_no($expr_atr_no) {
        $this->expr_atr_no = $expr_atr_no;
    }

    public function setExpr_ntn_nm($expr_ntn_nm) {
        $this->expr_ntn_nm = $expr_ntn_nm;
    }

    public function setExpr_city_nm($expr_city_nm) {
        $this->expr_city_nm = $expr_city_nm;
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

    public function setMfr_cl_cd($mfr_cl_cd) {
        $this->mfr_cl_cd = $mfr_cl_cd;
    }

    public function setMfr_idt_no($mfr_idt_no) {
        $this->mfr_idt_no = $mfr_idt_no;
    }

    public function setMfr_nm($mfr_nm) {
        $this->mfr_nm = $mfr_nm;
    }

    public function setMfr_rpgp_nm($mfr_rpgp_nm) {
        $this->mfr_rpgp_nm = $mfr_rpgp_nm;
    }

    public function setMfr_atr_no($mfr_atr_no) {
        $this->mfr_atr_no = $mfr_atr_no;
    }

    public function setMfr_prvhc_nm($mfr_prvhc_nm) {
        $this->mfr_prvhc_nm = $mfr_prvhc_nm;
    }

    public function setMfr_cuty_nm($mfr_cuty_nm) {
        $this->mfr_cuty_nm = $mfr_cuty_nm;
    }

    public function setMfr_prqi_nm($mfr_prqi_nm) {
        $this->mfr_prqi_nm = $mfr_prqi_nm;
    }

    public function setMfr_ad($mfr_ad) {
        $this->mfr_ad = $mfr_ad;
    }

    public function setMfr_tel_no($mfr_tel_no) {
        $this->mfr_tel_no = $mfr_tel_no;
    }

    public function setMfr_fax_no($mfr_fax_no) {
        $this->mfr_fax_no = $mfr_fax_no;
    }

    public function setMfr_em($mfr_em) {
        $this->mfr_em = $mfr_em;
    }

    public function setVsl_plat_nm($vsl_plat_nm) {
        $this->vsl_plat_nm = $vsl_plat_nm;
    }

    public function setCntr_ntn_nm($cntr_ntn_nm) {
        $this->cntr_ntn_nm = $cntr_ntn_nm;
    }

    public function setCdrm_nm($cdrm_nm) {
        $this->cdrm_nm = $cdrm_nm;
    }

    public function setCtnr_no($ctnr_no) {
        $this->ctnr_no = $ctnr_no;
    }

    public function setTrsp_way_nm($trsp_way_nm) {
        $this->trsp_way_nm = $trsp_way_nm;
    }

    public function setCarr_nm($carr_nm) {
        $this->carr_nm = $carr_nm;
    }

    public function setTrst_ntn_nm($trst_ntn_nm) {
        $this->trst_ntn_nm = $trst_ntn_nm;
    }

    public function setTrst_city_nm($trst_city_nm) {
        $this->trst_city_nm = $trst_city_nm;
    }

    public function setCrfr_pnt_nm($crfr_pnt_nm) {
        $this->crfr_pnt_nm = $crfr_pnt_nm;
    }

    public function setInv_no($inv_no) {
        $this->inv_no = $inv_no;
    }

    public function setBlno($blno) {
        $this->blno = $blno;
    }

    public function setPkgs_tot_qt($pkgs_tot_qt) {
        $this->pkgs_tot_qt = $pkgs_tot_qt;
    }

    public function setPrdt_tot_nwt($prdt_tot_nwt) {
        $this->prdt_tot_nwt = $prdt_tot_nwt;
    }

    public function setDclr_rmk($dclr_rmk) {
        $this->dclr_rmk = $dclr_rmk;
    }

    public function setMdf_dt($mdf_dt) {
        $this->mdf_dt = $mdf_dt;
    }

    public function setPrecinto_nm($precinto_nm) {
        $this->precinto_nm = $precinto_nm;
    }


}
