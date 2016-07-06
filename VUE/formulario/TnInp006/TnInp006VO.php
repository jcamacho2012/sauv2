<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp006VO{
        private $dcm_nm;
    private $dcm_no;
    private $req_no;
    private $prev_ctft_no;
    private $prev_ctft_iss_de;
    private $dcm_type_nm;
    private $req_city_nm;
    private $rfr_dcm_no;
    private $ctft_no;
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
    private $expr_ntn_nm;
    private $expr_city_nm;
    private $expr_prvhc_nm;
    private $expr_cuty_nm;
    private $expr_prqi_nm;
    private $expr_ad;
    private $expr_tel_no;
    private $expr_fax_no;
    private $expr_em;
    private $mfr_nm;
    private $mfr_prdr_estbl_atr_no;
    private $mfr_ntn_nm;
    private $mfr_city_nm;
    private $mfr_ad;
    private $mfr_tel_no;
    private $mfr_em;
    private $mfr_fax_no;
    private $qlt_ctft_no;
    private $ctft_prdt_nm;
    private $org_ntn_nm;
    private $dst_ntn_nm;
    private $crg_plc;
    private $trsp_way_nm;
    private $ptet_ntn_nm;
    private $ptet_nm;
    private $inv_no;
    private $whos_trsp_cdt_inf;
    private $carr_nm;
    private $crt_de;
    private $hc_cd;
    private $pkgs_tot_qt;
    private $pkgs_tot_qt_ut;
    private $pck_tot_qt;
    private $pck_tot_qt_ut;
    private $tot_wt;
    private $tot_wt_ut;
    private $dclr_rmk;
    private $mdf_dt;
    private $prnt_ctxt_fg;

    function __construct($array){
        $this->dcm_nm=$array['dcm_nm'];
        $this->dcm_no=$array['dcm_no'];
        $this->req_no=$array['req_no'];
        $this->prev_ctft_no=$array['prev_ctft_no'];
        $this->prev_ctft_iss_de=$array['prev_ctft_iss_de'];
        $this->dcm_type_nm=$array['dcm_type_nm'];
        $this->req_city_nm=$array['req_city_nm'];
        $this->rfr_dcm_no=$array['rfr_dcm_no'];
        $this->ctft_no=$array['ctft_no'];
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
        $this->expr_ntn_nm=$array['expr_ntn_nm'];
        $this->expr_city_nm=$array['expr_city_nm'];
        $this->expr_prvhc_nm=$array['expr_prvhc_nm'];
        $this->expr_cuty_nm=$array['expr_cuty_nm'];
        $this->expr_prqi_nm=$array['expr_prqi_nm'];
        $this->expr_ad=$array['expr_ad'];
        $this->expr_tel_no=$array['expr_tel_no'];
        $this->expr_fax_no=$array['expr_fax_no'];
        $this->expr_em=$array['expr_em'];
        $this->mfr_nm=$array['mfr_nm'];
        $this->mfr_prdr_estbl_atr_no=$array['mfr_prdr_estbl_atr_no'];
        $this->mfr_ntn_nm=$array['mfr_ntn_nm'];
        $this->mfr_city_nm=$array['mfr_city_nm'];
        $this->mfr_ad=$array['mfr_ad'];
        $this->mfr_tel_no=$array['mfr_tel_no'];
        $this->mfr_em=$array['mfr_em'];
        $this->mfr_fax_no=$array['mfr_fax_no'];
        $this->qlt_ctft_no=$array['qlt_ctft_no'];
        $this->ctft_prdt_nm=$array['ctft_prdt_nm'];
        $this->org_ntn_nm=$array['org_ntn_nm'];
        $this->dst_ntn_nm=$array['dst_ntn_nm'];
        $this->crg_plc=$array['crg_plc'];
        $this->trsp_way_nm=$array['trsp_way_nm'];
        $this->ptet_ntn_nm=$array['ptet_ntn_nm'];
        $this->ptet_nm=$array['ptet_nm'];
        $this->inv_no=$array['inv_no'];
        $this->whos_trsp_cdt_inf=$array['whos_trsp_cdt_inf'];
        $this->carr_nm=$array['carr_nm'];
        $this->crt_de=$array['crt_de'];
        $this->hc_cd=$array['hc_cd'];
        $this->pkgs_tot_qt=$array['pkgs_tot_qt'];
        $this->pkgs_tot_qt_ut=$array['pkgs_tot_qt_ut'];
        $this->pck_tot_qt=$array['pck_tot_qt'];
        $this->pck_tot_qt_ut=$array['pck_tot_qt_ut'];
        $this->tot_wt=$array['tot_wt'];
        $this->tot_wt_ut=$array['tot_wt_ut'];
        $this->dclr_rmk=$array['dclr_rmk'];
        $this->mdf_dt=$array['mdf_dt'];
        $this->prnt_ctxt_fg=$array['prnt_ctxt_fg'];
    }
    
    public function getDcm_nm() {
        return $this->dcm_nm;
    }

    public function getReq_no() {
        return $this->req_no;
    }

    public function getPrev_ctft_no() {
        return $this->prev_ctft_no;
    }

    public function getPrev_ctft_iss_de() {
        return $this->prev_ctft_iss_de;
    }

    public function getDcm_type_nm() {
        return $this->dcm_type_nm;
    }

    public function getReq_city_nm() {
        return $this->req_city_nm;
    }

    public function getRfr_dcm_no() {
        return $this->rfr_dcm_no;
    }

    public function getCtft_no() {
        return $this->ctft_no;
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

    public function getMfr_nm() {
        return $this->mfr_nm;
    }

    public function getMfr_prdr_estbl_atr_no() {
        return $this->mfr_prdr_estbl_atr_no;
    }

    public function getMfr_ntn_nm() {
        return $this->mfr_ntn_nm;
    }

    public function getMfr_city_nm() {
        return $this->mfr_city_nm;
    }

    public function getMfr_ad() {
        return $this->mfr_ad;
    }

    public function getMfr_tel_no() {
        return $this->mfr_tel_no;
    }

    public function getMfr_em() {
        return $this->mfr_em;
    }

    public function getMfr_fax_no() {
        return $this->mfr_fax_no;
    }

    public function getQlt_ctft_no() {
        return $this->qlt_ctft_no;
    }

    public function getCtft_prdt_nm() {
        return $this->ctft_prdt_nm;
    }

    public function getOrg_ntn_nm() {
        return $this->org_ntn_nm;
    }

    public function getDst_ntn_nm() {
        return $this->dst_ntn_nm;
    }

    public function getCrg_plc() {
        return $this->crg_plc;
    }

    public function getTrsp_way_nm() {
        return $this->trsp_way_nm;
    }

    public function getPtet_ntn_nm() {
        return $this->ptet_ntn_nm;
    }

    public function getPtet_nm() {
        return $this->ptet_nm;
    }

    public function getInv_no() {
        return $this->inv_no;
    }

    public function getWhos_trsp_cdt_inf() {
        return $this->whos_trsp_cdt_inf;
    }

    public function getCarr_nm() {
        return $this->carr_nm;
    }

    public function getCrt_de() {
        return $this->crt_de;
    }

    public function getHc_cd() {
        return $this->hc_cd;
    }

    public function getPkgs_tot_qt() {
        return $this->pkgs_tot_qt;
    }

    public function getPkgs_tot_qt_ut() {
        return $this->pkgs_tot_qt_ut;
    }

    public function getPck_tot_qt() {
        return $this->pck_tot_qt;
    }

    public function getPck_tot_qt_ut() {
        return $this->pck_tot_qt_ut;
    }

    public function getTot_wt() {
        return $this->tot_wt;
    }

    public function getTot_wt_ut() {
        return $this->tot_wt_ut;
    }

    public function getDclr_rmk() {
        return $this->dclr_rmk;
    }

    public function getMdf_dt() {
        return $this->mdf_dt;
    }
    
    public function getDcm_no() {
        return $this->dcm_no;
    }
    
    public function setPrnt_ctxt_fg($prnt_ctxt_fg) {
        $this->prnt_ctxt_fg = $prnt_ctxt_fg;
    }

        
    public function getPrnt_ctxt_fg() {
        return $this->prnt_ctxt_fg;
    }
    
      public function setDcm_no($dcm_no) {
        $this->dcm_no = $dcm_no;
    }

    public function setDcm_nm($dcm_nm) {
        $this->dcm_nm = $dcm_nm;
    }

    public function setReq_no($req_no) {
        $this->req_no = $req_no;
    }

    public function setPrev_ctft_no($prev_ctft_no) {
        $this->prev_ctft_no = $prev_ctft_no;
    }

    public function setPrev_ctft_iss_de($prev_ctft_iss_de) {
        $this->prev_ctft_iss_de = $prev_ctft_iss_de;
    }

    public function setDcm_type_nm($dcm_type_nm) {
        $this->dcm_type_nm = $dcm_type_nm;
    }

    public function setReq_city_nm($req_city_nm) {
        $this->req_city_nm = $req_city_nm;
    }

    public function setRfr_dcm_no($rfr_dcm_no) {
        $this->rfr_dcm_no = $rfr_dcm_no;
    }

    public function setCtft_no($ctft_no) {
        $this->ctft_no = $ctft_no;
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

    public function setMfr_nm($mfr_nm) {
        $this->mfr_nm = $mfr_nm;
    }

    public function setMfr_prdr_estbl_atr_no($mfr_prdr_estbl_atr_no) {
        $this->mfr_prdr_estbl_atr_no = $mfr_prdr_estbl_atr_no;
    }

    public function setMfr_ntn_nm($mfr_ntn_nm) {
        $this->mfr_ntn_nm = $mfr_ntn_nm;
    }

    public function setMfr_city_nm($mfr_city_nm) {
        $this->mfr_city_nm = $mfr_city_nm;
    }

    public function setMfr_ad($mfr_ad) {
        $this->mfr_ad = $mfr_ad;
    }

    public function setMfr_tel_no($mfr_tel_no) {
        $this->mfr_tel_no = $mfr_tel_no;
    }

    public function setMfr_em($mfr_em) {
        $this->mfr_em = $mfr_em;
    }

    public function setMfr_fax_no($mfr_fax_no) {
        $this->mfr_fax_no = $mfr_fax_no;
    }

    public function setQlt_ctft_no($qlt_ctft_no) {
        $this->qlt_ctft_no = $qlt_ctft_no;
    }

    public function setCtft_prdt_nm($ctft_prdt_nm) {
        $this->ctft_prdt_nm = $ctft_prdt_nm;
    }

    public function setOrg_ntn_nm($org_ntn_nm) {
        $this->org_ntn_nm = $org_ntn_nm;
    }

    public function setDst_ntn_nm($dst_ntn_nm) {
        $this->dst_ntn_nm = $dst_ntn_nm;
    }

    public function setCrg_plc($crg_plc) {
        $this->crg_plc = $crg_plc;
    }

    public function setTrsp_way_nm($trsp_way_nm) {
        $this->trsp_way_nm = $trsp_way_nm;
    }

    public function setPtet_ntn_nm($ptet_ntn_nm) {
        $this->ptet_ntn_nm = $ptet_ntn_nm;
    }

    public function setPtet_nm($ptet_nm) {
        $this->ptet_nm = $ptet_nm;
    }

    public function setInv_no($inv_no) {
        $this->inv_no = $inv_no;
    }

    public function setWhos_trsp_cdt_inf($whos_trsp_cdt_inf) {
        $this->whos_trsp_cdt_inf = $whos_trsp_cdt_inf;
    }

    public function setCarr_nm($carr_nm) {
        $this->carr_nm = $carr_nm;
    }

    public function setCrt_de($crt_de) {
        $this->crt_de = $crt_de;
    }

    public function setHc_cd($hc_cd) {
        $this->hc_cd = $hc_cd;
    }

    public function setPkgs_tot_qt($pkgs_tot_qt) {
        $this->pkgs_tot_qt = $pkgs_tot_qt;
    }

    public function setPkgs_tot_qt_ut($pkgs_tot_qt_ut) {
        $this->pkgs_tot_qt_ut = $pkgs_tot_qt_ut;
    }

    public function setPck_tot_qt($pck_tot_qt) {
        $this->pck_tot_qt = $pck_tot_qt;
    }

    public function setPck_tot_qt_ut($pck_tot_qt_ut) {
        $this->pck_tot_qt_ut = $pck_tot_qt_ut;
    }

    public function setTot_wt($tot_wt) {
        $this->tot_wt = $tot_wt;
    }

    public function setTot_wt_ut($tot_wt_ut) {
        $this->tot_wt_ut = $tot_wt_ut;
    }

    public function setDclr_rmk($dclr_rmk) {
        $this->dclr_rmk = $dclr_rmk;
    }

    public function setMdf_dt($mdf_dt) {
        $this->mdf_dt = $mdf_dt;
    }
}