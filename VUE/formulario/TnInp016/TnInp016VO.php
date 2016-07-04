<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp016VO{
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
    private $impr_prvhc_nm;
    private $impr_cuty_nm;
    private $impr_prqi_nm;
    private $impr_ad;
    private $impr_tel_no;
    private $impr_fax_no;
    private $impr_em;
    private $mfr_cl_cd;
    private $mfr_idt_no;
    private $mfr_nm;    
    private $mfr_rpgp_nm;
    private $mfr_ntn_nm;
    private $mfr_city_nm;
    private $mfr_ad;
    private $mfr_tel_no;
    private $mfr_fax_no;
    private $mfr_em;
    private $hc;
    private $natn_prdt_nm;
    private $prdt_nm;
    private $samp_qt;					
    private $igdt_con;
    private $prdt_smt_frm_inf;
    private $prdt_qt;					
    private $lot_no;
    private $atvi_con;
    private $dcd_cps_inf;
    private $prdt_vdt_term;
    private $org_ntn_nm;
    private $org_sale_free_sty_no;
    private $prdt_cl_nm;
    private $cmca_nm;
    private $admt_mtdrt_desc;
    private $atzd_use;
    private $fml_type_inf;
    private $pam_frm_desc;
    private $toxi_lvl_det;					       
    private $dclr_rmk;
    private $mdf_dt; 
    
     function __construct($array) {
        $this->req_no=$array['req_no'];
        $this->dcm_no=$array['dcm_no'];
        $this->dcm_nm=$array['dcm_nm'];
        $this->dcm_type_nm=$array['dcm_type_nm'];
        $this->req_city_nm=$array['req_city_nm'];
        $this->prev_ctft_no=$array['prev_ctft_no'] ;
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
        $this->impr_prvhc_nm=$array['impr_prvhc_nm'];
        $this->impr_cuty_nm=$array['impr_cuty_nm'];
        $this->impr_prqi_nm=$array['impr_prqi_nm'];
        $this->impr_ad=$array['impr_ad'];
        $this->impr_tel_no=$array['impr_tel_no'];
        $this->impr_fax_no=$array['impr_fax_no'];
        $this->impr_em=$array['impr_em'];
        $this->mfr_cl_cd=$array['mfr_cl_cd'];
        $this->mfr_idt_no=$array['mfr_idt_no'];
        $this->mfr_nm=$array['mfr_nm'];
        $this->mfr_rpgp_nm=$array['mfr_rpgp_nm'];
        $this->mfr_ntn_nm=$array['mfr_ntn_nm'];
        $this->mfr_city_nm=$array['mfr_city_nm'];
        $this->mfr_ad=$array['mfr_ad'];
        $this->mfr_tel_no=$array['mfr_tel_no'];
        $this->mfr_fax_no=$array['mfr_fax_no'];
        $this->mfr_em=$array['mfr_em'];
        $this->hc=$array['hc'];
        $this->natn_prdt_nm=$array['natn_prdt_nm'];
        $this->prdt_nm=$array['prdt_nm'];        
        $this->samp_qt=number_format($array['samp_qt'],2)." ".$array['samp_qt_ut'];        
        $this->igdt_con=$array['igdt_con'];
        $this->prdt_smt_frm_inf=$array['prdt_smt_frm_inf'];        
        $this->prdt_qt=number_format($array['prdt_qt'],2)." ".$array['prdt_qt_ut'];        
        $this->lot_no=$array['lot_no'];
        $this->atvi_con=$array['atvi_con'];
        $this->dcd_cps_inf=$array['dcd_cps_inf'];
        $this->prdt_vdt_term=$array['prdt_vdt_term']." ".$array['prdt_vdt_term_ut'];
        $this->org_ntn_nm=$array['org_ntn_nm'];
        $this->org_sale_free_sty_no=$array['org_sale_free_sty_no'];
        $this->prdt_cl_nm=$array['prdt_cl_nm'];
        $this->cmca_nm=$array['cmca_nm'];
        $this->admt_mtdrt_desc=$array['admt_mtdrt_desc'];
        $this->atzd_use=$array['atzd_use'];
        $this->fml_type_inf=$array['fml_type_inf'];
        $this->pam_frm_desc=$array['pam_frm_desc'];
        $this->toxi_lvl_det=$array['toxi_lvl_det'];        
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

    public function getDclr_odty_nm() {
        return $this->dclr_odty_nm;
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

    public function getImpr_cl_cd() {
        return $this->impr_cl_cd;
    }

    public function getImpr_idt_no() {
        return $this->impr_idt_no;
    }

    public function getImpr_nm() {
        return $this->impr_nm;
    }

    public function getImpr_prvhc_nm() {
        return $this->impr_prvhc_nm;
    }

    public function getImpr_cuty_nm() {
        return $this->impr_cuty_nm;
    }

    public function getImpr_prqi_nm() {
        return $this->impr_prqi_nm;
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

    public function getMfr_fax_no() {
        return $this->mfr_fax_no;
    }

    public function getMfr_em() {
        return $this->mfr_em;
    }

    public function getHc() {
        return $this->hc;
    }

    public function getNatn_prdt_nm() {
        return $this->natn_prdt_nm;
    }

    public function getPrdt_nm() {
        return $this->prdt_nm;
    }

    public function getSamp_qt() {
        return $this->samp_qt;
    }

    public function getIgdt_con() {
        return $this->igdt_con;
    }

    public function getPrdt_smt_frm_inf() {
        return $this->prdt_smt_frm_inf;
    }

    public function getPrdt_qt() {
        return $this->prdt_qt;
    }

    public function getLot_no() {
        return $this->lot_no;
    }

    public function getAtvi_con() {
        return $this->atvi_con;
    }

    public function getDcd_cps_inf() {
        return $this->dcd_cps_inf;
    }

    public function getPrdt_vdt_term() {
        return $this->prdt_vdt_term;
    }

    public function getOrg_ntn_nm() {
        return $this->org_ntn_nm;
    }

    public function getOrg_sale_free_sty_no() {
        return $this->org_sale_free_sty_no;
    }

    public function getPrdt_cl_nm() {
        return $this->prdt_cl_nm;
    }

    public function getCmca_nm() {
        return $this->cmca_nm;
    }

    public function getAdmt_mtdrt_desc() {
        return $this->admt_mtdrt_desc;
    }

    public function getAtzd_use() {
        return $this->atzd_use;
    }

    public function getFml_type_inf() {
        return $this->fml_type_inf;
    }

    public function getPam_frm_desc() {
        return $this->pam_frm_desc;
    }

    public function getToxi_lvl_det() {
        return $this->toxi_lvl_det;
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

    public function setDclr_odty_nm($dclr_odty_nm) {
        $this->dclr_odty_nm = $dclr_odty_nm;
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

    public function setImpr_cl_cd($impr_cl_cd) {
        $this->impr_cl_cd = $impr_cl_cd;
    }

    public function setImpr_idt_no($impr_idt_no) {
        $this->impr_idt_no = $impr_idt_no;
    }

    public function setImpr_nm($impr_nm) {
        $this->impr_nm = $impr_nm;
    }

    public function setImpr_prvhc_nm($impr_prvhc_nm) {
        $this->impr_prvhc_nm = $impr_prvhc_nm;
    }

    public function setImpr_cuty_nm($impr_cuty_nm) {
        $this->impr_cuty_nm = $impr_cuty_nm;
    }

    public function setImpr_prqi_nm($impr_prqi_nm) {
        $this->impr_prqi_nm = $impr_prqi_nm;
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

    public function setMfr_fax_no($mfr_fax_no) {
        $this->mfr_fax_no = $mfr_fax_no;
    }

    public function setMfr_em($mfr_em) {
        $this->mfr_em = $mfr_em;
    }

    public function setHc($hc) {
        $this->hc = $hc;
    }

    public function setNatn_prdt_nm($natn_prdt_nm) {
        $this->natn_prdt_nm = $natn_prdt_nm;
    }

    public function setPrdt_nm($prdt_nm) {
        $this->prdt_nm = $prdt_nm;
    }

    public function setSamp_qt($samp_qt) {
        $this->samp_qt = $samp_qt;
    }

    public function setIgdt_con($igdt_con) {
        $this->igdt_con = $igdt_con;
    }

    public function setPrdt_smt_frm_inf($prdt_smt_frm_inf) {
        $this->prdt_smt_frm_inf = $prdt_smt_frm_inf;
    }

    public function setPrdt_qt($prdt_qt) {
        $this->prdt_qt = $prdt_qt;
    }

    public function setLot_no($lot_no) {
        $this->lot_no = $lot_no;
    }

    public function setAtvi_con($atvi_con) {
        $this->atvi_con = $atvi_con;
    }

    public function setDcd_cps_inf($dcd_cps_inf) {
        $this->dcd_cps_inf = $dcd_cps_inf;
    }

    public function setPrdt_vdt_term($prdt_vdt_term) {
        $this->prdt_vdt_term = $prdt_vdt_term;
    }

    public function setOrg_ntn_nm($org_ntn_nm) {
        $this->org_ntn_nm = $org_ntn_nm;
    }

    public function setOrg_sale_free_sty_no($org_sale_free_sty_no) {
        $this->org_sale_free_sty_no = $org_sale_free_sty_no;
    }

    public function setPrdt_cl_nm($prdt_cl_nm) {
        $this->prdt_cl_nm = $prdt_cl_nm;
    }

    public function setCmca_nm($cmca_nm) {
        $this->cmca_nm = $cmca_nm;
    }

    public function setAdmt_mtdrt_desc($admt_mtdrt_desc) {
        $this->admt_mtdrt_desc = $admt_mtdrt_desc;
    }

    public function setAtzd_use($atzd_use) {
        $this->atzd_use = $atzd_use;
    }

    public function setFml_type_inf($fml_type_inf) {
        $this->fml_type_inf = $fml_type_inf;
    }

    public function setPam_frm_desc($pam_frm_desc) {
        $this->pam_frm_desc = $pam_frm_desc;
    }

    public function setToxi_lvl_det($toxi_lvl_det) {
        $this->toxi_lvl_det = $toxi_lvl_det;
    }

    public function setDclr_rmk($dclr_rmk) {
        $this->dclr_rmk = $dclr_rmk;
    }

    public function setMdf_dt($mdf_dt) {
        $this->mdf_dt = $mdf_dt;
    }

}