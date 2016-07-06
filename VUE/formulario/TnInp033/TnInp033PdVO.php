<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp033PdVO{
    private $prdt_sn;
    private $hc;
    private $prdt_bdnm;
    private $prdt_desc;
    private $prdt_stn;
    private $lot_no;
    private $prdt_qt;    
    private $prdt_nwt;
    
    public function getProducto033($result){
        $listaAnalisis=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $pd033=new TnInp033PdVO();
            $pd033->setPrdt_sn($row['prdt_sn']);
            $pd033->setHc($row['hc']);
            $pd033->setPrdt_bdnm($row['prdt_bdnm']);
            $pd033->setPrdt_desc($row['prdt_desc']);
            $pd033->setPrdt_stn($row['prdt_stn']);
            $pd033->setLot_no($row['lot_no']);
            $pd033->setPrdt_qt(number_format($row['prdt_qt'],2)." ".$row['prdt_qt_ut']); 
            $pd033->setPrdt_nwt(number_format($row['prdt_nwt'],2)." ".$row['prdt_nwt_ut']);             
            $listaAnalisis->append($pd033);                        
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

    function getPrdt_stn() {
        return $this->prdt_stn;
    }

    function getLot_no() {
        return $this->lot_no;
    }

    function getPrdt_qt() {
        return $this->prdt_qt;
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

    function setPrdt_stn($prdt_stn) {
        $this->prdt_stn = $prdt_stn;
    }

    function setLot_no($lot_no) {
        $this->lot_no = $lot_no;
    }

    function setPrdt_qt($prdt_qt) {
        $this->prdt_qt = $prdt_qt;
    }

    function setPrdt_nwt($prdt_nwt) {
        $this->prdt_nwt = $prdt_nwt;
    }


}