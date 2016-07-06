<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp008PdVO{
    private $prdt_sn;
    private $hc;
    private $prdt_nm;
    private $prdt_spc_nm;
    private $pdtn_de;    
    private $pkgs_qt;    			
    private $prdt_nwt;
    private $lot_no;
    private $bdnm;
    private $trsp_whos_cdt_det;
    private $dfct_slz_prcg_tp_ut;
    
    public function getProducto008($result){
        $listaProductos=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $pd008=new TnInp008PdVO();
            $pd008->setPrdt_sn($row['prdt_sn']);
            $pd008->setHc($row['hc']);
            $pd008->setPrdt_nm($row['prdt_nm']);
            $pd008->setPrdt_spc_nm($row['prdt_spc_nm']);
            $pd008->setPdtn_de($row['pdtn_de']);
            $pd008->setPkgs_qt(number_format($row['pkgs_qt'],2)." ".$row['pkgs_qt_ut']); 
            $pd008->setPrdt_nwt(number_format($row['prdt_nwt'],2)." ".$row['nwt_ut']);             
            $pd008->setLot_no($row['lot_no']);
            $pd008->setBdnm($row['bdnm']);
            $pd008->setTrsp_whos_cdt_det($row['trsp_whos_cdt_det']);
            $pd008->setDfct_slz_prcg_tp_ut($row['dfct_slz_prcg_tp_ut']);            
            $listaProductos->append($pd008);                        
        }                       
        return $listaProductos;
    }
    
    public function getPrdt_sn() {
        return $this->prdt_sn;
    }

    public function getHc() {
        return $this->hc;
    }

    public function getPrdt_nm() {
        return $this->prdt_nm;
    }

    public function getPrdt_spc_nm() {
        return $this->prdt_spc_nm;
    }

    public function getPdtn_de() {
        return $this->pdtn_de;
    }

    public function getPkgs_qt() {
        return $this->pkgs_qt;
    }

    public function getPrdt_nwt() {
        return $this->prdt_nwt;
    }

    public function getLot_no() {
        return $this->lot_no;
    }

    public function getBdnm() {
        return $this->bdnm;
    }

    public function getTrsp_whos_cdt_det() {
        return $this->trsp_whos_cdt_det;
    }

    public function getDfct_slz_prcg_tp_ut() {
        return $this->dfct_slz_prcg_tp_ut;
    }

    public function setPrdt_sn($prdt_sn) {
        $this->prdt_sn = $prdt_sn;
    }

    public function setHc($hc) {
        $this->hc = $hc;
    }

    public function setPrdt_nm($prdt_nm) {
        $this->prdt_nm = $prdt_nm;
    }

    public function setPrdt_spc_nm($prdt_spc_nm) {
        $this->prdt_spc_nm = $prdt_spc_nm;
    }

    public function setPdtn_de($pdtn_de) {
        $this->pdtn_de = $pdtn_de;
    }

    public function setPkgs_qt($pkgs_qt) {
        $this->pkgs_qt = $pkgs_qt;
    }

    public function setPrdt_nwt($prdt_nwt) {
        $this->prdt_nwt = $prdt_nwt;
    }

    public function setLot_no($lot_no) {
        $this->lot_no = $lot_no;
    }

    public function setBdnm($bdnm) {
        $this->bdnm = $bdnm;
    }

    public function setTrsp_whos_cdt_det($trsp_whos_cdt_det) {
        $this->trsp_whos_cdt_det = $trsp_whos_cdt_det;
    }

    public function setDfct_slz_prcg_tp_ut($dfct_slz_prcg_tp_ut) {
        $this->dfct_slz_prcg_tp_ut = $dfct_slz_prcg_tp_ut;
    }


}