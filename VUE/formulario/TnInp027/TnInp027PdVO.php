<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp027PdVO{
    private $prdt_sn;
    private $hc;
    private $prdt_bdnm;
    private $prdt_desc;
    private $pck_qt;
    private $prdt_lote;
    private $prdt_prodt;
    private $prdt_preservdt;
    private $prdt_nwt;
    
     public function getProducto027($result){
        $listaAnalisis=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $pd027=new TnInp027PdVO();
            $pd027->setPrdt_sn($row['prdt_sn']);
            $pd027->setHc($row['hc']);
            $pd027->setPrdt_bdnm($row['prdt_bdnm']);
            $pd027->setPrdt_desc($row['prdt_desc']);
            $pd027->setPck_qt(number_format($row['pck_qt'],2)." ".$row['pck_ut']);             
            $pd027->setPrdt_lote($row['prdt_lote']);
            $pd027->setPrdt_prodt($row['prdt_prodt']);
            $pd027->setPrdt_preservdt($row['prdt_preservdt']);
            $pd027->setPrdt_nwt(number_format($row['prdt_nwt'],2)." ".$row['prdt_nwt_ut']);             
            $listaAnalisis->append($pd027);                        
        }                       
        return $listaAnalisis;
    }               
    
    function getPrdt_sn() {
        return $this->prdt_sn;
    }

    function getHc() {
        return $this->hc;
    }

    function getPrdt_bdnm() {
        return $this->prdt_bdnm;
    }

    function getPrdt_desc() {
        return $this->prdt_desc;
    }

    function getPck_qt() {
        return $this->pck_qt;
    }

    function getPrdt_lote() {
        return $this->prdt_lote;
    }

    function getPrdt_prodt() {
        return $this->prdt_prodt;
    }

    function getPrdt_preservdt() {
        return $this->prdt_preservdt;
    }

    function getPrdt_nwt() {
        return $this->prdt_nwt;
    }

    function setPrdt_sn($prdt_sn) {
        $this->prdt_sn = $prdt_sn;
    }

    function setHc($hc) {
        $this->hc = $hc;
    }

    function setPrdt_bdnm($prdt_bdnm) {
        $this->prdt_bdnm = $prdt_bdnm;
    }

    function setPrdt_desc($prdt_desc) {
        $this->prdt_desc = $prdt_desc;
    }

    function setPck_qt($pck_qt) {
        $this->pck_qt = $pck_qt;
    }

    function setPrdt_lote($prdt_lote) {
        $this->prdt_lote = $prdt_lote;
    }

    function setPrdt_prodt($prdt_prodt) {
        $this->prdt_prodt = $prdt_prodt;
    }

    function setPrdt_preservdt($prdt_preservdt) {
        $this->prdt_preservdt = $prdt_preservdt;
    }

    function setPrdt_nwt($prdt_nwt) {
        $this->prdt_nwt = $prdt_nwt;
    }


}