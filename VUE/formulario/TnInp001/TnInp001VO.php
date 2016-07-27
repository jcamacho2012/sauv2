<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp001VO{
    private $req_no;     
    private $dcm_no;
    private $dcm_nm;
    private $dcm_type_nm;
    private $prev_ctft_no;
    private $prev_ctft_iss_de;
    private $req_city_nm; 
    private $prdt_cl_nm;
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
    private $mfr_ntn_nm;
    private $mfr_city_nm;
    private $mfr_prvhc_nm;
    private $mfr_cuty_nm;
    private $mfr_prqi_nm;
    private $mfr_ad;
    private $mfr_tel_no;
    private $mfr_fax_no;
    private $mfr_em;    
    private $org_ntn_nm;
    private $dst_ntn_nm;
    private $prdt_cl;
    private $mfr_atr_no;
    private $crg_plc;
    private $trsp_way_nm;
    private $ptet_ntn_nm;
    private $ptet_nm;
    private $inv_no;
    private $whos_trsp_cdt_inf;
    private $carr_nm;	
    private $trst_ntn_nm;
    private $crt_de;
    private $hc_cd;
    private $naturaleza;
    private $prdt_bdnm;    
    private $prdt_prcg_det;
    private $pkgs_tot_qt;    
    private $prdt_tot_nwt;    
    private $dclr_rmk;
    private $mdf_dt;
    
    function __construct($array) {
        $this->req_no=$array['req_no'];
        $this->dcm_no=$array['dcm_no'];
        $this->dcm_nm=$array['dcm_nm'];
        $this->dcm_type_nm=$array['dcm_type_nm'];
        $this-> prev_ctft_no=$array['prev_ctft_no'];
        $this->prev_ctft_iss_de=$array['prev_ctft_iss_de'];
        $this->req_city_nm=$array['req_city_nm'];        
        $this->prdt_cl_nm=$array['prdt_cl_nm'];
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
        $this->mfr_ntn_nm=$array['mfr_ntn_nm'];
        $this->mfr_city_nm=$array['mfr_city_nm'];
        $this->mfr_prvhc_nm=$array['mfr_prvhc_nm'];
        $this->mfr_cuty_nm=$array['mfr_cuty_nm'];
        $this->mfr_prqi_nm=$array['mfr_prqi_nm'];
        $this->mfr_ad=$array['mfr_ad'];
        $this->mfr_tel_no=$array['mfr_tel_no'];
        $this->mfr_fax_no=$array['mfr_fax_no'];
        $this->mfr_em=$array['mfr_em']; 
        $this->org_ntn_nm=$array['org_ntn_nm']; 
        $this->dst_ntn_nm=$array['dst_ntn_nm']; 
        $this->prdt_cl=$array['prdt_cl']; 
        $this->mfr_atr_no=$array['mfr_atr_no']; 
        $this->crg_plc=$array['crg_plc']; 
        $this->trsp_way_nm=$array['trsp_way_nm']; 
        $this->ptet_ntn_nm=$array['ptet_ntn_nm']; 
        $this->ptet_nm=$array['ptet_nm']; 
        $this->inv_no=$array['inv_no'];
        $this->whos_trsp_cdt_inf=$array['whos_trsp_cdt_inf'];
        $this->carr_nm=$array['carr_nm'];
        $this->trst_ntn_nm=$array['trst_ntn_nm'];
        $this->crt_de=$array['crt_de'];
        $this->hc_cd=$array['hc_cd'];
        $this->naturaleza=$array['naturaleza'];
        $this->prdt_bdnm=$array['prdt_bdnm'];        
        $this->prdt_prcg_det=$array['prdt_prcg_det'];
        $this->pkgs_tot_qt=$array['pkgs_tot_qt']." ".$array['pkgs_tot_qt_ut'];        
        $this->prdt_tot_nwt=number_format($array['prdt_tot_nwt'],2)." ".$array['prdt_tot_nwt_ut'];                  
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

    function getPrev_ctft_no() {
        return $this->prev_ctft_no;
    }
    
    function getPrev_ctft_iss_de() {
        return $this->prev_ctft_iss_de;
    }
        
    function getReq_city_nm() {
        return $this->req_city_nm;
    }

    function getPrdt_cl_nm() {
        return $this->prdt_cl_nm;
    }

    function getRfr_dcm_no() {
        return $this->rfr_dcm_no;
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

    function getMfr_cl_cd() {
        return $this->mfr_cl_cd;
    }

    function getMfr_idt_no() {
        return $this->mfr_idt_no;
    }

    function getMfr_nm() {
        return $this->mfr_nm;
    }

    function getMfr_rpgp_nm() {
        return $this->mfr_rpgp_nm;
    }

    function getMfr_ntn_nm() {
        return $this->mfr_ntn_nm;
    }

    function getMfr_city_nm() {
        return $this->mfr_city_nm;
    }

    function getMfr_prvhc_nm() {
        return $this->mfr_prvhc_nm;
    }

    function getMfr_cuty_nm() {
        return $this->mfr_cuty_nm;
    }

    function getMfr_prqi_nm() {
        return $this->mfr_prqi_nm;
    }

    function getMfr_ad() {
        return $this->mfr_ad;
    }

    function getMfr_tel_no() {
        return $this->mfr_tel_no;
    }

    function getMfr_fax_no() {
        return $this->mfr_fax_no;
    }

    function getMfr_em() {
        return $this->mfr_em;
    }

    function getOrg_ntn_nm() {
        return $this->org_ntn_nm;
    }

    function getDst_ntn_nm() {
        return $this->dst_ntn_nm;
    }

    function getPrdt_cl() {
        return $this->prdt_cl;
    }

    function getMfr_atr_no() {
        return $this->mfr_atr_no;
    }

    function getCrg_plc() {
        return $this->crg_plc;
    }

    function getTrsp_way_nm() {
        return $this->trsp_way_nm;
    }

    function getPtet_ntn_nm() {
        return $this->ptet_ntn_nm;
    }

    function getPtet_nm() {
        return $this->ptet_nm;
    }

    function getInv_no() {
        return $this->inv_no;
    }

    function getWhos_trsp_cdt_inf() {
        return $this->whos_trsp_cdt_inf;
    }

    function getCarr_nm() {
        return $this->carr_nm;
    }

    function getTrst_ntn_nm() {
        return $this->trst_ntn_nm;
    }

    function getCrt_de() {
        return $this->crt_de;
    }

    function getHc_cd() {
        return $this->hc_cd;
    }

    function getNaturaleza() {
        return $this->naturaleza;
    }

    function getPrdt_bdnm() {
        return $this->prdt_bdnm;
    }

    function getPrdt_prcg_det() {
        return $this->prdt_prcg_det;
    }

    function getPkgs_tot_qt() {
        return $this->pkgs_tot_qt;
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

    function setPrev_ctft_no($prev_ctft_no) {
        $this->prev_ctft_no = $prev_ctft_no;
    }
    
    function setPrev_ctft_iss_de($prev_ctft_iss_de) {
        $this->prev_ctft_iss_de = $prev_ctft_iss_de;
    }

    function setReq_city_nm($req_city_nm) {
        $this->req_city_nm = $req_city_nm;
    }

    function setPrdt_cl_nm($prdt_cl_nm) {
        $this->prdt_cl_nm = $prdt_cl_nm;
    }

    function setRfr_dcm_no($rfr_dcm_no) {
        $this->rfr_dcm_no = $rfr_dcm_no;
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

    function setMfr_cl_cd($mfr_cl_cd) {
        $this->mfr_cl_cd = $mfr_cl_cd;
    }

    function setMfr_idt_no($mfr_idt_no) {
        $this->mfr_idt_no = $mfr_idt_no;
    }

    function setMfr_nm($mfr_nm) {
        $this->mfr_nm = $mfr_nm;
    }

    function setMfr_rpgp_nm($mfr_rpgp_nm) {
        $this->mfr_rpgp_nm = $mfr_rpgp_nm;
    }

    function setMfr_ntn_nm($mfr_ntn_nm) {
        $this->mfr_ntn_nm = $mfr_ntn_nm;
    }

    function setMfr_city_nm($mfr_city_nm) {
        $this->mfr_city_nm = $mfr_city_nm;
    }

    function setMfr_prvhc_nm($mfr_prvhc_nm) {
        $this->mfr_prvhc_nm = $mfr_prvhc_nm;
    }

    function setMfr_cuty_nm($mfr_cuty_nm) {
        $this->mfr_cuty_nm = $mfr_cuty_nm;
    }

    function setMfr_prqi_nm($mfr_prqi_nm) {
        $this->mfr_prqi_nm = $mfr_prqi_nm;
    }

    function setMfr_ad($mfr_ad) {
        $this->mfr_ad = $mfr_ad;
    }

    function setMfr_tel_no($mfr_tel_no) {
        $this->mfr_tel_no = $mfr_tel_no;
    }

    function setMfr_fax_no($mfr_fax_no) {
        $this->mfr_fax_no = $mfr_fax_no;
    }

    function setMfr_em($mfr_em) {
        $this->mfr_em = $mfr_em;
    }

    function setOrg_ntn_nm($org_ntn_nm) {
        $this->org_ntn_nm = $org_ntn_nm;
    }

    function setDst_ntn_nm($dst_ntn_nm) {
        $this->dst_ntn_nm = $dst_ntn_nm;
    }

    function setPrdt_cl($prdt_cl) {
        $this->prdt_cl = $prdt_cl;
    }

    function setMfr_atr_no($mfr_atr_no) {
        $this->mfr_atr_no = $mfr_atr_no;
    }

    function setCrg_plc($crg_plc) {
        $this->crg_plc = $crg_plc;
    }

    function setTrsp_way_nm($trsp_way_nm) {
        $this->trsp_way_nm = $trsp_way_nm;
    }

    function setPtet_ntn_nm($ptet_ntn_nm) {
        $this->ptet_ntn_nm = $ptet_ntn_nm;
    }

    function setPtet_nm($ptet_nm) {
        $this->ptet_nm = $ptet_nm;
    }

    function setInv_no($inv_no) {
        $this->inv_no = $inv_no;
    }

    function setWhos_trsp_cdt_inf($whos_trsp_cdt_inf) {
        $this->whos_trsp_cdt_inf = $whos_trsp_cdt_inf;
    }

    function setCarr_nm($carr_nm) {
        $this->carr_nm = $carr_nm;
    }

    function setTrst_ntn_nm($trst_ntn_nm) {
        $this->trst_ntn_nm = $trst_ntn_nm;
    }

    function setCrt_de($crt_de) {
        $this->crt_de = $crt_de;
    }

    function setHc_cd($hc_cd) {
        $this->hc_cd = $hc_cd;
    }

    function setNaturaleza($naturaleza) {
        $this->naturaleza = $naturaleza;
    }

    function setPrdt_bdnm($prdt_bdnm) {
        $this->prdt_bdnm = $prdt_bdnm;
    }

    function setPrdt_prcg_det($prdt_prcg_det) {
        $this->prdt_prcg_det = $prdt_prcg_det;
    }

    function setPkgs_tot_qt($pkgs_tot_qt) {
        $this->pkgs_tot_qt = $pkgs_tot_qt;
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


    
}