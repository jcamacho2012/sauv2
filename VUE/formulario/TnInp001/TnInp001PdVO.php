<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp001PdVO{    				
    private $prdt_sn;
    private $hc;
    private $prdt_desc;
    private $prdt_stn;
    private $pkgs_qt;   
    private $prdt_nwt;    
    private $lot_cd;
    
    public function getProducto001($result){
        $listaProducto=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $pd001=new TnInp001PdVO();
            $pd001->setPrdt_sn($row['prdt_sn']);
            $pd001->setHc($row['hc']);
            $pd001->setPrdt_desc($row['prdt_desc']);
            $pd001->setPrdt_stn($row['prdt_stn']);
            $pd001->setPkgs_qt(number_format($row['pkgs_qt'],2)." ".$row['pkgs_qt_ut']); 
            $pd001->setPrdt_nwt(number_format($row['prdt_nwt'],2)." ".$row['prdt_nwt_ut']);                         
            $pd001->setLot_cd($row['lot_cd']);
            $listaProducto->append($pd001);                        
        }                       
        return $listaProducto;
    }
    
    function getPrdt_sn() {
        return $this->prdt_sn;
    }

    function getHc() {
        return $this->hc;
    }

    function getPrdt_desc() {
        return $this->prdt_desc;
    }

    function getPrdt_stn() {
        return $this->prdt_stn;
    }

    function getPkgs_qt() {
        return $this->pkgs_qt;
    }

    function getPrdt_nwt() {
        return $this->prdt_nwt;
    }

    function getLot_cd() {
        return $this->lot_cd;
    }

    function setPrdt_sn($prdt_sn) {
        $this->prdt_sn = $prdt_sn;
    }

    function setHc($hc) {
        $this->hc = $hc;
    }

    function setPrdt_desc($prdt_desc) {
        $this->prdt_desc = $prdt_desc;
    }

    function setPrdt_stn($prdt_stn) {
        $this->prdt_stn = $prdt_stn;
    }

    function setPkgs_qt($pkgs_qt) {
        $this->pkgs_qt = $pkgs_qt;
    }

    function setPrdt_nwt($prdt_nwt) {
        $this->prdt_nwt = $prdt_nwt;
    }

    function setLot_cd($lot_cd) {
        $this->lot_cd = $lot_cd;
    }


    
}