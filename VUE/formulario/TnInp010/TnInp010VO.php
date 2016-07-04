<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp010VO{
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
    private $expr_ntn_nm;
    private $expr_prvhc_nm;
    private $expr_cuty_nm;
    private $expr_prqi_nm;
    private $expr_ad;
    private $expr_tel_no;
    private $expr_fax_no;
    private $expr_em;    
    private $pcs_nm;
    private $pcs_ad;
    private $pcs_city_nm;
    private $pcs_atr_no;
    private $prdr_nm;
    private $prdr_ad;
    private $prdr_city_nm;
    private $prdr_atr_no;
    private $capt_hour_desc;
    private $capt_estbl_ad;
    private $capt_estbl_city_nm;
    private $capt_estbl_atr_no;
    private $vdt_piod;
    private $ctft_iss_orgz_nm;
    private $prdt_tot_nwt;   
    private $prdt_iss_plc;
    private $dst_ntn_nm;
    private $dst_city_nm;    
    private $trst_ntn_nm;
    private $trst_city_nm;
    private $trsp_way_nm;
    private $carr_nm;
    private $pck_ut_piec_no;
    private $trsp_csbt_thml_rank;
    private $strt_tp;
    private $finl_tp;
    private $bdnm;
    private $cmca_bill_no;
    private $rmk;
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
        $this->expr_prvhc_nm=$array['expr_prvhc_nm'];
        $this->expr_cuty_nm=$array['expr_cuty_nm'];
        $this->expr_prqi_nm=$array['expr_prqi_nm'];
        $this->expr_ad=$array['expr_ad'];
        $this->expr_tel_no=$array['expr_tel_no'];
        $this->expr_fax_no=$array['expr_fax_no'];
        $this->expr_em=$array['expr_em'];
        $this->pcs_nm=$array['pcs_nm'];
        $this->pcs_ad=$array['pcs_ad'];
        $this->pcs_city_nm=$array['pcs_city_nm'];
        $this->pcs_atr_no=$array['pcs_atr_no'];
        $this->prdr_nm=$array['prdr_nm'];
        $this->prdr_ad=$array['prdr_ad'];
        $this->prdr_city_nm=$array['prdr_city_nm'];
        $this->prdr_atr_no=$array['prdr_atr_no'];
        $this->capt_hour_desc=$array['capt_hour_desc'];
        $this->capt_estbl_ad=$array['capt_estbl_ad'];
        $this->capt_estbl_city_nm=$array['capt_estbl_city_nm'];
        $this->capt_estbl_atr_no=$array['capt_estbl_atr_no'];
        $this->vdt_piod=$array['vdt_piod'];
        $this->ctft_iss_orgz_nm=$array['ctft_iss_orgz_nm'];
        $this->prdt_tot_nwt=number_format($array['prdt_tot_nwt'],2)." ".$array['prdt_tot_nwt_ut'];                        
        $this->prdt_iss_plc=$array['prdt_iss_plc'];
        $this->dst_ntn_nm=$array['dst_ntn_nm'];
        $this->dst_city_nm=$array['dst_city_nm'];
        $this->trst_ntn_nm=$array['trst_ntn_nm'];
        $this->trst_city_nm=$array['trst_city_nm'];
        $this->trsp_way_nm=$array['trsp_way_nm'];
        $this->carr_nm=$array['carr_nm'];
        $this->pck_ut_piec_no=number_format($array['pck_ut_piec_no'],2)." ".$array['pck_ut_piec_no_ut'];                
        $this->trsp_csbt_thml_rank=$array['trsp_csbt_thml_rank'];
        $this->strt_tp=$array['strt_tp'];
        $this->finl_tp=$array['finl_tp'];
        $this->bdnm=$array['bdnm'];
        $this->cmca_bill_no=$array['cmca_bill_no'];
        $this->rmk=$array['rmk'];                           
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

    function getExpr_ntn_nm() {
        return $this->expr_ntn_nm;
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

    function getPcs_nm() {
        return $this->pcs_nm;
    }

    function getPcs_ad() {
        return $this->pcs_ad;
    }

    function getPcs_city_nm() {
        return $this->pcs_city_nm;
    }

    function getPcs_atr_no() {
        return $this->pcs_atr_no;
    }

    function getPrdr_nm() {
        return $this->prdr_nm;
    }

    function getPrdr_ad() {
        return $this->prdr_ad;
    }

    function getPrdr_city_nm() {
        return $this->prdr_city_nm;
    }

    function getPrdr_atr_no() {
        return $this->prdr_atr_no;
    }

    function getCapt_hour_desc() {
        return $this->capt_hour_desc;
    }

    function getCapt_estbl_ad() {
        return $this->capt_estbl_ad;
    }

    function getCapt_estbl_city_nm() {
        return $this->capt_estbl_city_nm;
    }

    function getCapt_estbl_atr_no() {
        return $this->capt_estbl_atr_no;
    }

    function getVdt_piod() {
        return $this->vdt_piod;
    }

    function getCtft_iss_orgz_nm() {
        return $this->ctft_iss_orgz_nm;
    }

    function getPrdt_tot_nwt() {
        return $this->prdt_tot_nwt;
    }    

    function getPrdt_iss_plc() {
        return $this->prdt_iss_plc;
    }

    function getDst_ntn_nm() {
        return $this->dst_ntn_nm;
    }

    function getDst_city_nm() {
        return $this->dst_city_nm;
    }

    function getTrst_ntn_nm() {
        return $this->trst_ntn_nm;
    }

    function getTrst_city_nm() {
        return $this->trst_city_nm;
    }

    function getTrsp_way_nm() {
        return $this->trsp_way_nm;
    }

    function getCarr_nm() {
        return $this->carr_nm;
    }

    function getPck_ut_piec_no() {
        return $this->pck_ut_piec_no;
    }    

    function getTrsp_csbt_thml_rank() {
        return $this->trsp_csbt_thml_rank;
    }

    function getStrt_tp() {
        return $this->strt_tp;
    }

    function getFinl_tp() {
        return $this->finl_tp;
    }

    function getBdnm() {
        return $this->bdnm;
    }

    function getCmca_bill_no() {
        return $this->cmca_bill_no;
    }

    function getRmk() {
        return $this->rmk;
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

    function setExpr_ntn_nm($expr_ntn_nm) {
        $this->expr_ntn_nm = $expr_ntn_nm;
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

    function setPcs_nm($pcs_nm) {
        $this->pcs_nm = $pcs_nm;
    }

    function setPcs_ad($pcs_ad) {
        $this->pcs_ad = $pcs_ad;
    }

    function setPcs_city_nm($pcs_city_nm) {
        $this->pcs_city_nm = $pcs_city_nm;
    }

    function setPcs_atr_no($pcs_atr_no) {
        $this->pcs_atr_no = $pcs_atr_no;
    }

    function setPrdr_nm($prdr_nm) {
        $this->prdr_nm = $prdr_nm;
    }

    function setPrdr_ad($prdr_ad) {
        $this->prdr_ad = $prdr_ad;
    }

    function setPrdr_city_nm($prdr_city_nm) {
        $this->prdr_city_nm = $prdr_city_nm;
    }

    function setPrdr_atr_no($prdr_atr_no) {
        $this->prdr_atr_no = $prdr_atr_no;
    }

    function setCapt_hour_desc($capt_hour_desc) {
        $this->capt_hour_desc = $capt_hour_desc;
    }

    function setCapt_estbl_ad($capt_estbl_ad) {
        $this->capt_estbl_ad = $capt_estbl_ad;
    }

    function setCapt_estbl_city_nm($capt_estbl_city_nm) {
        $this->capt_estbl_city_nm = $capt_estbl_city_nm;
    }

    function setCapt_estbl_atr_no($capt_estbl_atr_no) {
        $this->capt_estbl_atr_no = $capt_estbl_atr_no;
    }

    function setVdt_piod($vdt_piod) {
        $this->vdt_piod = $vdt_piod;
    }

    function setCtft_iss_orgz_nm($ctft_iss_orgz_nm) {
        $this->ctft_iss_orgz_nm = $ctft_iss_orgz_nm;
    }

    function setPrdt_tot_nwt($prdt_tot_nwt) {
        $this->prdt_tot_nwt = $prdt_tot_nwt;
    }    

    function setPrdt_iss_plc($prdt_iss_plc) {
        $this->prdt_iss_plc = $prdt_iss_plc;
    }

    function setDst_ntn_nm($dst_ntn_nm) {
        $this->dst_ntn_nm = $dst_ntn_nm;
    }

    function setDst_city_nm($dst_city_nm) {
        $this->dst_city_nm = $dst_city_nm;
    }

    function setTrst_ntn_nm($trst_ntn_nm) {
        $this->trst_ntn_nm = $trst_ntn_nm;
    }

    function setTrst_city_nm($trst_city_nm) {
        $this->trst_city_nm = $trst_city_nm;
    }

    function setTrsp_way_nm($trsp_way_nm) {
        $this->trsp_way_nm = $trsp_way_nm;
    }

    function setCarr_nm($carr_nm) {
        $this->carr_nm = $carr_nm;
    }

    function setPck_ut_piec_no($pck_ut_piec_no) {
        $this->pck_ut_piec_no = $pck_ut_piec_no;
    }    

    function setTrsp_csbt_thml_rank($trsp_csbt_thml_rank) {
        $this->trsp_csbt_thml_rank = $trsp_csbt_thml_rank;
    }

    function setStrt_tp($strt_tp) {
        $this->strt_tp = $strt_tp;
    }

    function setFinl_tp($finl_tp) {
        $this->finl_tp = $finl_tp;
    }

    function setBdnm($bdnm) {
        $this->bdnm = $bdnm;
    }

    function setCmca_bill_no($cmca_bill_no) {
        $this->cmca_bill_no = $cmca_bill_no;
    }

    function setRmk($rmk) {
        $this->rmk = $rmk;
    }

    function setDclr_rmk($dclr_rmk) {
        $this->dclr_rmk = $dclr_rmk;
    }

    function setMdf_dt($mdf_dt) {
        $this->mdf_dt = $mdf_dt;
    }


    
}