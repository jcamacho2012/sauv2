<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp019PdVO{
    private $prdt_sn;
    private $hc;
    private $prdt_nm;
    private $prdt_qt;
    private $lot_no;
    private $sty_rgs_no;
    
     public function getProducto019($result){
        $listaAnalisis=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $pd019=new TnInp019PdVO();
            $pd019->setPrdt_sn($row['prdt_sn']);
            $pd019->setHc($row['hc']);
            $pd019->setPrdt_nm($row['prdt_nm']);  
            $pd019->setPrdt_qt(number_format($row['prdt_qt'],2)." ".$row['prdt_qt_ut']);             
            $pd019->setLot_no($row['lot_no']);            
            $pd019->setSty_rgs_no($row['sty_rgs_no']);
            $listaAnalisis->append($pd019);                        
        }                       
        return $listaAnalisis;
    }
    
    function getPrdt_sn() {
        return $this->prdt_sn;
    }

    function getHc() {
        return $this->hc;
    }

    function getPrdt_nm() {
        return $this->prdt_nm;
    }

    function getPrdt_qt() {
        return $this->prdt_qt;
    }

    function getLot_no() {
        return $this->lot_no;
    }

    function getSty_rgs_no() {
        return $this->sty_rgs_no;
    }

    function setPrdt_sn($prdt_sn) {
        $this->prdt_sn = $prdt_sn;
    }

    function setHc($hc) {
        $this->hc = $hc;
    }

    function setPrdt_nm($prdt_nm) {
        $this->prdt_nm = $prdt_nm;
    }

    function setPrdt_qt($prdt_qt) {
        $this->prdt_qt = $prdt_qt;
    }

    function setLot_no($lot_no) {
        $this->lot_no = $lot_no;
    }

    function setSty_rgs_no($sty_rgs_no) {
        $this->sty_rgs_no = $sty_rgs_no;
    }


}