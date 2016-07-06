<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp012PdVO{
    private $prdt_sn;
    private $hc;
    private $prdt_nm;
    private $prdt_stn;
    private $pck_qt;    
    private $prdt_nwt;    			
    private $lot_cd;
    private $pdtn_de;
    
    public function getProducto012($result){
        $listaProductos=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $pd012=new TnInp012PdVO();
            $pd012->setPrdt_sn($row['prdt_sn']);
            $pd012->setHc($row['hc']);
            $pd012->setPrdt_nm($row['prdt_nm']);
            $pd012->setPrdt_stn($row['prdt_stn']);
            $pd012->setPck_qt(number_format($row['pck_qt'],2)." ".$row['pck_ut']); 
            $pd012->setPrdt_nwt(number_format($row['prdt_nwt'],2)." ".$row['nwt_ut']);             
            $pd012->setLot_cd($row['lot_cd']);
            $pd012->setPdtn_de($row['pdtn_de']);
            $listaProductos->append($pd012);                        
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

    public function getPrdt_stn() {
        return $this->prdt_stn;
    }

    public function getPck_qt() {
        return $this->pck_qt;
    }

    public function getPrdt_nwt() {
        return $this->prdt_nwt;
    }

    public function getLot_cd() {
        return $this->lot_cd;
    }

    public function getPdtn_de() {
        return $this->pdtn_de;
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

    public function setPrdt_stn($prdt_stn) {
        $this->prdt_stn = $prdt_stn;
    }

    public function setPck_qt($pck_qt) {
        $this->pck_qt = $pck_qt;
    }

    public function setPrdt_nwt($prdt_nwt) {
        $this->prdt_nwt = $prdt_nwt;
    }

    public function setLot_cd($lot_cd) {
        $this->lot_cd = $lot_cd;
    }

    public function setPdtn_de($pdtn_de) {
        $this->pdtn_de = $pdtn_de;
    }


}