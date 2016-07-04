<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp012VO{
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
    private $expr_atr_no;
    private $expr_city_nm;
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
    private $pcs_rpgp_nm;
    private $pcs_atr_no;
    private $pcs_prvhc_nm;
    private $pcs_cuty_nm;
    private $pcs_prqi_nm;					
    private $pcs_ad;
    private $pcs_tel_no;
    private $pcs_fax_no;
    private $pcs_em;
    private $pdtn_plc;
    private $expr_ntn_nm;
    private $prdr_ntn_nm;
    private $ctft_iss_dpt_nm;    
    private $prcs_type_inf;
    private $pdtn_mthd_desc;    
    private $aqctr_prdt_nm;
    private $aqctr_ntn_nm;
    private $aqctr_city_nm;    
    private $capt_prdt_nm;
    private $capt_spm_nm;
    private $capt_spm_atr_no;
    private $send_ntn_nm;
    private $send_city_nm;
    private $dst_ntn_nm;
    private $dst_city_nm;
    private $trsp_way_type_inf;
    private $vsl_nm;
    private $fghnb;
    private $oter_trsp_way_nm;
    private $pkgs_tot_qt;    
    private $prdt_tot_nwt;    
    private $inv_no;
    private $dclr_rmk;    
    private $mdf_dt;
    
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
        $this->expr_atr_no=$array['expr_atr_no'];
        $this->expr_city_nm=$array['expr_city_nm'];    
        $this->expr_prvhc_nm=$array['expr_prvhc_nm'];
        $this->expr_cuty_nm=$array['expr_cuty_nm'];
        $this->expr_prqi_nm=$array['expr_prqi_nm'];
        $this->expr_ad=$array['expr_ad'];
        $this->expr_tel_no=$array['expr_tel_no'];
        $this->expr_fax_no=$array['expr_fax_no'];
        $this->expr_em=$array['expr_em'];
        $this->pcs_cl_cd=$array['pcs_cl_cd'];
        $this->pcs_idt_no=$array['pcs_idt_no'];
        $this->pcs_nm=$array['pcs_nm'];
        $this->pcs_rpgp_nm=$array['pcs_rpgp_nm'];
        $this->pcs_atr_no=$array['pcs_atr_no'];
        $this->pcs_prvhc_nm=$array['pcs_prvhc_nm'];
        $this->pcs_cuty_nm=$array['pcs_cuty_nm'];
        $this->pcs_prqi_nm=$array['pcs_prqi_nm'];
        $this->pcs_ad=$array['pcs_ad'];
        $this->pcs_tel_no=$array['pcs_tel_no'];
        $this->pcs_fax_no=$array['pcs_fax_no'];
        $this->pcs_em=$array['pcs_em'];
        $this->pdtn_plc=$array['pdtn_plc'];
        $this->expr_ntn_nm=$array['expr_ntn_nm'];
        $this->prdr_ntn_nm=$array['prdr_ntn_nm'];
        $this->ctft_iss_dpt_nm=$array['ctft_iss_dpt_nm'];        
        $this->prcs_type_inf=$array['prcs_type_inf'];
        $this->pdtn_mthd_desc=$array['pdtn_mthd_desc'];    
        $this->aqctr_prdt_nm=$array['aqctr_prdt_nm'];
        $this->aqctr_ntn_nm=$array['aqctr_ntn_nm'];
        $this->aqctr_city_nm=$array['aqctr_city_nm'];
        $this->capt_prdt_nm=$array['capt_prdt_nm'];
        $this->capt_spm_nm=$array['capt_spm_nm'];
        $this->capt_spm_atr_no=$array['capt_spm_atr_no'];
        $this->send_ntn_nm=$array['send_ntn_nm'];
        $this->send_city_nm=$array['send_city_nm'];
        $this->dst_ntn_nm=$array['dst_ntn_nm'];
        $this->dst_city_nm=$array['dst_city_nm'];
        $this->trsp_way_type_inf=$array['trsp_way_type_inf'];
        $this->vsl_nm=$array['vsl_nm'];
        $this->fghnb=$array['fghnb'];
        $this->oter_trsp_way_nm=$array['oter_trsp_way_nm'];
        $this->pkgs_tot_qt=number_format($array['pkgs_tot_qt'],2)." ".$array['pkgs_tot_qt_ut'];        
        $this->prdt_tot_nwt=number_format($array['prdt_tot_nwt'],2)." ".$array['prdt_tot_nwt_ut'];                
        $this->inv_no=$array['inv_no'];
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

    function getExpr_atr_no() {
        return $this->expr_atr_no;
    }

    function getExpr_city_nm() {
        return $this->expr_city_nm;
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

    function getPcs_rpgp_nm() {
        return $this->pcs_rpgp_nm;
    }

    function getPcs_atr_no() {
        return $this->pcs_atr_no;
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
    
    public function getPdtn_plc() {
        return $this->pdtn_plc;
    }
    
    function getExpr_ntn_nm() {
        return $this->expr_ntn_nm;
    }

    function getPrdr_ntn_nm() {
        return $this->prdr_ntn_nm;
    }

    function getCtft_iss_dpt_nm() {
        return $this->ctft_iss_dpt_nm;
    }    

    function getPrcs_type_inf() {
        return $this->prcs_type_inf;
    }

    function getPdtn_mthd_desc() {
        return $this->pdtn_mthd_desc;
    }   

    function getAqctr_prdt_nm() {
        return $this->aqctr_prdt_nm;
    }

    function getAqctr_ntn_nm() {
        return $this->aqctr_ntn_nm;
    }

    function getAqctr_city_nm() {
        return $this->aqctr_city_nm;
    }    

    function getCapt_prdt_nm() {
        return $this->capt_prdt_nm;
    }

    function getCapt_spm_nm() {
        return $this->capt_spm_nm;
    }

    function getCapt_spm_atr_no() {
        return $this->capt_spm_atr_no;
    }

    function getSend_ntn_nm() {
        return $this->send_ntn_nm;
    }

    function getSend_city_nm() {
        return $this->send_city_nm;
    }

    function getDst_ntn_nm() {
        return $this->dst_ntn_nm;
    }

    function getDst_city_nm() {
        return $this->dst_city_nm;
    }

    function getTrsp_way_type_inf() {
        return $this->trsp_way_type_inf;
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

    function getPkgs_tot_qt() {
        return $this->pkgs_tot_qt;
    }

    function getPrdt_tot_nwt() {
        return $this->prdt_tot_nwt;
    }

    function getInv_no() {
        return $this->inv_no;
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

    function setExpr_atr_no($expr_atr_no) {
        $this->expr_atr_no = $expr_atr_no;
    }

    function setExpr_city_nm($expr_city_nm) {
        $this->expr_city_nm = $expr_city_nm;
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

    function setPcs_rpgp_nm($pcs_rpgp_nm) {
        $this->pcs_rpgp_nm = $pcs_rpgp_nm;
    }

    function setPcs_atr_no($pcs_atr_no) {
        $this->pcs_atr_no = $pcs_atr_no;
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
    
    public function setPdtn_plc($pdtn_plc) {
        $this->pdtn_plc = $pdtn_plc;
    }
    
    function setExpr_ntn_nm($expr_ntn_nm) {
        $this->expr_ntn_nm = $expr_ntn_nm;
    }

    function setPrdr_ntn_nm($prdr_ntn_nm) {
        $this->prdr_ntn_nm = $prdr_ntn_nm;
    }

    function setCtft_iss_dpt_nm($ctft_iss_dpt_nm) {
        $this->ctft_iss_dpt_nm = $ctft_iss_dpt_nm;
    }    

    function setPrcs_type_inf($prcs_type_inf) {
        $this->prcs_type_inf = $prcs_type_inf;
    }

    function setPdtn_mthd_desc($pdtn_mthd_desc) {
        $this->pdtn_mthd_desc = $pdtn_mthd_desc;
    }   

    function setAqctr_prdt_nm($aqctr_prdt_nm) {
        $this->aqctr_prdt_nm = $aqctr_prdt_nm;
    }

    function setAqctr_ntn_nm($aqctr_ntn_nm) {
        $this->aqctr_ntn_nm = $aqctr_ntn_nm;
    }

    function setAqctr_city_nm($aqctr_city_nm) {
        $this->aqctr_city_nm = $aqctr_city_nm;
    }    

    function setCapt_prdt_nm($capt_prdt_nm) {
        $this->capt_prdt_nm = $capt_prdt_nm;
    }

    function setCapt_spm_nm($capt_spm_nm) {
        $this->capt_spm_nm = $capt_spm_nm;
    }

    function setCapt_spm_atr_no($capt_spm_atr_no) {
        $this->capt_spm_atr_no = $capt_spm_atr_no;
    }

    function setSend_ntn_nm($send_ntn_nm) {
        $this->send_ntn_nm = $send_ntn_nm;
    }

    function setSend_city_nm($send_city_nm) {
        $this->send_city_nm = $send_city_nm;
    }

    function setDst_ntn_nm($dst_ntn_nm) {
        $this->dst_ntn_nm = $dst_ntn_nm;
    }

    function setDst_city_nm($dst_city_nm) {
        $this->dst_city_nm = $dst_city_nm;
    }

    function setTrsp_way_type_inf($trsp_way_type_inf) {
        $this->trsp_way_type_inf = $trsp_way_type_inf;
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

    function setPkgs_tot_qt($pkgs_tot_qt) {
        $this->pkgs_tot_qt = $pkgs_tot_qt;
    }

    function setPrdt_tot_nwt($prdt_tot_nwt) {
        $this->prdt_tot_nwt = $prdt_tot_nwt;
    }

    function setInv_no($inv_no) {
        $this->inv_no = $inv_no;
    }

    function setDclr_rmk($dclr_rmk) {
        $this->dclr_rmk = $dclr_rmk;
    }

    function setMdf_dt($mdf_dt) {
        $this->mdf_dt = $mdf_dt;
    }
}