<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp010PdVO{
    private $prdt_sn;
    private $hc;
    private $anml_spc_nm;
    private $prdt_desc;    
    private $prdt_nwt;   
    
    public function getProducto010($result){
        $listaAnalisis=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $pd010=new TnInp010PdVO();
            $pd010->setPrdt_sn($row['prdt_sn']);
            $pd010->setHc($row['hc']);
            $pd010->setAnml_spc_nm($row['anml_spc_nm']);
            $pd010->setPrdt_desc($row['prdt_desc']);            
            $pd010->setPrdt_nwt(number_format($row['prdt_nwt'],2)." ".$row['prdt_nwt_ut']);                         
            $listaAnalisis->append($pd010);                        
        }                       
        return $listaAnalisis;
    }
    
    function getPrdt_sn() {
        return $this->prdt_sn;
    }

    function getHc() {
        return $this->hc;
    }

    function getAnml_spc_nm() {
        return $this->anml_spc_nm;
    }

    function getPrdt_desc() {
        return $this->prdt_desc;
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

    function setAnml_spc_nm($anml_spc_nm) {
        $this->anml_spc_nm = $anml_spc_nm;
    }

    function setPrdt_desc($prdt_desc) {
        $this->prdt_desc = $prdt_desc;
    }

    function setPrdt_nwt($prdt_nwt) {
        $this->prdt_nwt = $prdt_nwt;
    }


}