<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp039PdVO{
    private $prdt_sn;
    private $hc;
    private $prdt_nm;
    private $prdt_spc_nm;
    private $prdt_smt_frm_inf;
    private $anls_type_nm;
    private $anls_rst_nm;
    private $lot_cd;
    private $prdt_nwt;
    private $prdt_qt;    			   
    
    
    public function getProducto039($result){
        $listaProductos=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $pd039=new TnInp039PdVO();
            $pd039->setPrdt_sn($row['prdt_sn']);
            $pd039->setHc($row['hc']);
            $pd039->setPrdt_nm($row['prdt_nm']);
            $pd039->setPrdt_spc_nm($row['prdt_spc_nm']);
            $pd039->setPrdt_smt_frm_inf($row['prdt_smt_frm_inf']);
            $pd039->setAnls_type_nm($row['anls_type_nm']);
            $pd039->setAnls_rst_nm($row['anls_rst_nm']);
            $pd039->setLot_cd($row['lot_cd']);
            $pd039->setPrdt_qt(number_format($row['prdt_qt'],2)." ".$row['prdt_qt_ut']); 
            $pd039->setPrdt_nwt(number_format($row['prdt_nwt'],2)." ".$row['prdt_nwt_ut']);                         
            $listaProductos->append($pd039);                        
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

    public function getPrdt_smt_frm_inf() {
        return $this->prdt_smt_frm_inf;
    }

    public function getAnls_type_nm() {
        return $this->anls_type_nm;
    }
    
    public function getAnls_rst_nm() {
        return $this->anls_rst_nm;
    }
    
    public function getLot_cd() {
        return $this->lot_cd;
    }

    public function getPrdt_nwt() {
        return $this->prdt_nwt;
    }

    public function getPrdt_qt() {
        return $this->prdt_qt;
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

    public function setPrdt_smt_frm_inf($prdt_smt_frm_inf) {
        $this->prdt_smt_frm_inf = $prdt_smt_frm_inf;
    }

    public function setAnls_type_nm($anls_type_nm) {
        $this->anls_type_nm = $anls_type_nm;
    }
    
    public function setAnls_rst_nm($anls_rst_nm) {
        $this->anls_rst_nm = $anls_rst_nm;
    }
    
    public function setLot_cd($lot_cd) {
        $this->lot_cd = $lot_cd;
    }

    public function setPrdt_nwt($prdt_nwt) {
        $this->prdt_nwt = $prdt_nwt;
    }

    public function setPrdt_qt($prdt_qt) {
        $this->prdt_qt = $prdt_qt;
    }



}