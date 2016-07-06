<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp014VO{
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
    private $expr_ntn_nm;
    private $expr_city_nm;
    private $expr_prvhc_nm;
    private $expr_cuty_nm;
    private $expr_prqi_nm;
    private $expr_ad;
    private $expr_tel_no;
    private $expr_fax_no;
    private $expr_em;
    private $prdr_ntn_nm;
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
    private $org_ntn_nm;    
    private $hc;
    private $prdt_pck_type_inf;
    private $prdt_pck_qt;    
    private $prdt_nwt;    
    private $send_ntn_nm;
    private $send_city_nm;
    private $dst_ntn_nm;
    private $dst_city_nm;
    private $trsp_way_nm;
    private $vsl_nm;
    private $fghnb;
    private $oter_trsp_way_nm;
    private $ctnr_no;
    private $seal_no;
    private $prdt_nm;
    private $inv_no;
    private $lot_cd;
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
        $this->expr_ntn_nm=$array['expr_ntn_nm'];
        $this->expr_city_nm=$array['expr_city_nm'];    
        $this->expr_prvhc_nm=$array['expr_prvhc_nm'];
        $this->expr_cuty_nm=$array['expr_cuty_nm'];
        $this->expr_prqi_nm=$array['expr_prqi_nm'];
        $this->expr_ad=$array['expr_ad'];
        $this->expr_tel_no=$array['expr_tel_no'];
        $this->expr_fax_no=$array['expr_fax_no'];
        $this->expr_em=$array['expr_em'];
        $this->prdr_ntn_nm=$array['prdr_ntn_nm'];
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
        $this->org_ntn_nm=$array['org_ntn_nm'];        
        $this->hc=$array['hc'];
        $this->prdt_pck_type_inf=$array['prdt_pck_type_inf'];
        $this->prdt_pck_qt=number_format($array['prdt_pck_qt'],2)." ".$array['prdt_pck_ut'];        
        $this->prdt_nwt=number_format($array['prdt_nwt'],2)." ".$array['prdt_nwt_ut'];                   
        $this->send_ntn_nm=$array['send_ntn_nm'];
        $this->send_city_nm=$array['send_city_nm'];
        $this->dst_ntn_nm=$array['dst_ntn_nm'];
        $this->dst_city_nm=$array['dst_city_nm'];
        $this->trsp_way_nm=$array['trsp_way_nm'];
        $this->vsl_nm=$array['vsl_nm'];
        $this->fghnb=$array['fghnb'];
        $this->oter_trsp_way_nm=$array['oter_trsp_way_nm'];
        $this->ctnr_no=$array['ctnr_no'];
        $this->seal_no=$array['seal_no'];
        $this->prdt_nm=$array['prdt_nm'];
        $this->inv_no=$array['inv_no'];
        $this->lot_cd=$array['lot_cd'];
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

    public function getDclr_rpgp_nm() {
        return $this->dclr_rpgp_nm;
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

    public function getPrdr_ntn_nm() {
        return $this->prdr_ntn_nm;
    }

    public function getPcs_cl_cd() {
        return $this->pcs_cl_cd;
    }

    public function getPcs_idt_no() {
        return $this->pcs_idt_no;
    }

    public function getPcs_nm() {
        return $this->pcs_nm;
    }

    public function getPcs_rpgp_nm() {
        return $this->pcs_rpgp_nm;
    }

    public function getPcs_atr_no() {
        return $this->pcs_atr_no;
    }

    public function getPcs_prvhc_nm() {
        return $this->pcs_prvhc_nm;
    }

    public function getPcs_cuty_nm() {
        return $this->pcs_cuty_nm;
    }

    public function getPcs_prqi_nm() {
        return $this->pcs_prqi_nm;
    }

    public function getPcs_ad() {
        return $this->pcs_ad;
    }

    public function getPcs_tel_no() {
        return $this->pcs_tel_no;
    }

    public function getPcs_fax_no() {
        return $this->pcs_fax_no;
    }

    public function getPcs_em() {
        return $this->pcs_em;
    }

    public function getOrg_ntn_nm() {
        return $this->org_ntn_nm;
    }    

    public function getHc() {
        return $this->hc;
    }

    public function getPrdt_pck_type_inf() {
        return $this->prdt_pck_type_inf;
    }

    public function getPrdt_pck_qt() {
        return $this->prdt_pck_qt;
    }

    public function getPrdt_nwt() {
        return $this->prdt_nwt;
    }

    public function getSend_ntn_nm() {
        return $this->send_ntn_nm;
    }

    public function getSend_city_nm() {
        return $this->send_city_nm;
    }

    public function getDst_ntn_nm() {
        return $this->dst_ntn_nm;
    }

    public function getDst_city_nm() {
        return $this->dst_city_nm;
    }

    public function getTrsp_way_nm() {
        return $this->trsp_way_nm;
    }

    public function getVsl_nm() {
        return $this->vsl_nm;
    }

    public function getFghnb() {
        return $this->fghnb;
    }

    public function getOter_trsp_way_nm() {
        return $this->oter_trsp_way_nm;
    }

    public function getCtnr_no() {
        return $this->ctnr_no;
    }

    public function getSeal_no() {
        return $this->seal_no;
    }

    public function getPrdt_nm() {
        return $this->prdt_nm;
    }

    public function getInv_no() {
        return $this->inv_no;
    }

    public function getLot_cd() {
        return $this->lot_cd;
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

    public function setDclr_rpgp_nm($dclr_rpgp_nm) {
        $this->dclr_rpgp_nm = $dclr_rpgp_nm;
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

    public function setPrdr_ntn_nm($prdr_ntn_nm) {
        $this->prdr_ntn_nm = $prdr_ntn_nm;
    }

    public function setPcs_cl_cd($pcs_cl_cd) {
        $this->pcs_cl_cd = $pcs_cl_cd;
    }

    public function setPcs_idt_no($pcs_idt_no) {
        $this->pcs_idt_no = $pcs_idt_no;
    }

    public function setPcs_nm($pcs_nm) {
        $this->pcs_nm = $pcs_nm;
    }

    public function setPcs_rpgp_nm($pcs_rpgp_nm) {
        $this->pcs_rpgp_nm = $pcs_rpgp_nm;
    }

    public function setPcs_atr_no($pcs_atr_no) {
        $this->pcs_atr_no = $pcs_atr_no;
    }

    public function setPcs_prvhc_nm($pcs_prvhc_nm) {
        $this->pcs_prvhc_nm = $pcs_prvhc_nm;
    }

    public function setPcs_cuty_nm($pcs_cuty_nm) {
        $this->pcs_cuty_nm = $pcs_cuty_nm;
    }

    public function setPcs_prqi_nm($pcs_prqi_nm) {
        $this->pcs_prqi_nm = $pcs_prqi_nm;
    }

    public function setPcs_ad($pcs_ad) {
        $this->pcs_ad = $pcs_ad;
    }

    public function setPcs_tel_no($pcs_tel_no) {
        $this->pcs_tel_no = $pcs_tel_no;
    }

    public function setPcs_fax_no($pcs_fax_no) {
        $this->pcs_fax_no = $pcs_fax_no;
    }

    public function setPcs_em($pcs_em) {
        $this->pcs_em = $pcs_em;
    }

    public function setOrg_ntn_nm($org_ntn_nm) {
        $this->org_ntn_nm = $org_ntn_nm;
    }    

    public function setHc($hc) {
        $this->hc = $hc;
    }

    public function setPrdt_pck_type_inf($prdt_pck_type_inf) {
        $this->prdt_pck_type_inf = $prdt_pck_type_inf;
    }

    public function setPrdt_pck_qt($prdt_pck_qt) {
        $this->prdt_pck_qt = $prdt_pck_qt;
    }

    public function setPrdt_nwt($prdt_nwt) {
        $this->prdt_nwt = $prdt_nwt;
    }

    public function setSend_ntn_nm($send_ntn_nm) {
        $this->send_ntn_nm = $send_ntn_nm;
    }

    public function setSend_city_nm($send_city_nm) {
        $this->send_city_nm = $send_city_nm;
    }

    public function setDst_ntn_nm($dst_ntn_nm) {
        $this->dst_ntn_nm = $dst_ntn_nm;
    }

    public function setDst_city_nm($dst_city_nm) {
        $this->dst_city_nm = $dst_city_nm;
    }

    public function setTrsp_way_nm($trsp_way_nm) {
        $this->trsp_way_nm = $trsp_way_nm;
    }

    public function setVsl_nm($vsl_nm) {
        $this->vsl_nm = $vsl_nm;
    }

    public function setFghnb($fghnb) {
        $this->fghnb = $fghnb;
    }

    public function setOter_trsp_way_nm($oter_trsp_way_nm) {
        $this->oter_trsp_way_nm = $oter_trsp_way_nm;
    }

    public function setCtnr_no($ctnr_no) {
        $this->ctnr_no = $ctnr_no;
    }

    public function setSeal_no($seal_no) {
        $this->seal_no = $seal_no;
    }

    public function setPrdt_nm($prdt_nm) {
        $this->prdt_nm = $prdt_nm;
    }

    public function setInv_no($inv_no) {
        $this->inv_no = $inv_no;
    }

    public function setLot_cd($lot_cd) {
        $this->lot_cd = $lot_cd;
    }

    public function setDclr_rmk($dclr_rmk) {
        $this->dclr_rmk = $dclr_rmk;
    }

    public function setMdf_dt($mdf_dt) {
        $this->mdf_dt = $mdf_dt;
    }


}