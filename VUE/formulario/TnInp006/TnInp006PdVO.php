<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class TnInp006PdVO{ 
    private $prdt_sn;
    private $hc;
    private $prdt_nm;
    private $stn;
    private $pkgs_qt;
    private $pkgs_qt_ut;
    private $prdt_nwt;
    private $wt_ut;
    private $pck_qt;
    private $pck_ut;
    private $prdt_lote;
    private $prdt_prodt;
    
    public function getProducto006($result){
        $listaProducto=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $pd006=new TnInp006PdVO();
            $pd006->setPrdt_sn($row['prdt_sn']);
            $pd006->setHc($row['hc']);
            $pd006->setPrdt_nm($row['prdt_nm']);
            $pd006->setStn($row['stn']);
            $pd006->setPkgs_qt($row['pkgs_qt']." ".$row['pkgs_qt_ut']); 
            $pd006->setPrdt_nwt(number_format($row['prdt_nwt'],2)." ".$row['wt_ut']);
            //$pd006->setPck_qt(number_format($row['pck_qt'],2)." ".$row['pck_ut']);
            $pd006->setPrdt_lote($row['prdt_lote']);
            $pd006->setPrdt_prodt($row['prdt_prodt']);
            $listaProducto->append($pd006);                        
        }                       
        return $listaProducto;
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

    public function getStn() {
        return $this->stn;
    }

    public function getPkgs_qt() {
        return $this->pkgs_qt;
    }

    public function getPkgs_qt_ut() {
        return $this->pkgs_qt_ut;
    }

    public function getPrdt_nwt() {
        return $this->prdt_nwt;
    }

    public function getWt_ut() {
        return $this->wt_ut;
    }

    public function getPck_qt() {
        return $this->pck_qt;
    }

    public function getPck_ut() {
        return $this->pck_ut;
    }

    public function getPrdt_lote() {
        return $this->prdt_lote;
    }

    public function getPrdt_prodt() {
        return $this->prdt_prodt;
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

    public function setStn($stn) {
        $this->stn = $stn;
    }

    public function setPkgs_qt($pkgs_qt) {
        $this->pkgs_qt = $pkgs_qt;
    }

    public function setPkgs_qt_ut($pkgs_qt_ut) {
        $this->pkgs_qt_ut = $pkgs_qt_ut;
    }

    public function setPrdt_nwt($prdt_nwt) {
        $this->prdt_nwt = $prdt_nwt;
    }

    public function setWt_ut($wt_ut) {
        $this->wt_ut = $wt_ut;
    }

    public function setPck_qt($pck_qt) {
        $this->pck_qt = $pck_qt;
    }

    public function setPck_ut($pck_ut) {
        $this->pck_ut = $pck_ut;
    }

    public function setPrdt_lote($prdt_lote) {
        $this->prdt_lote = $prdt_lote;
    }

    public function setPrdt_prodt($prdt_prodt) {
        $this->prdt_prodt = $prdt_prodt;
    }
}
