<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp010LotVO{
    private $lot_sn;
    private $lot_nm;
    private $pdtn_de;
    private $csbt_lim_de;
    
    public function getLote010($result){
        $listaLote=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $lot010=new TnInp010LotVO();
            $lot010->setLot_sn($row['lot_sn']);
            $lot010->setLot_nm($row['lot_nm']);
            $lot010->setPdtn_de($row['pdtn_de']);
            $lot010->setCsbt_lim_de($row['csbt_lim_de']);                        
            $listaLote->append($lot010);                        
        }                       
        return $listaLote;
    }
    
    function getLot_sn() {
        return $this->lot_sn;
    }

    function getLot_nm() {
        return $this->lot_nm;
    }

    function getPdtn_de() {
        return $this->pdtn_de;
    }

    function getCsbt_lim_de() {
        return $this->csbt_lim_de;
    }

    function setLot_sn($lot_sn) {
        $this->lot_sn = $lot_sn;
    }

    function setLot_nm($lot_nm) {
        $this->lot_nm = $lot_nm;
    }

    function setPdtn_de($pdtn_de) {
        $this->pdtn_de = $pdtn_de;
    }

    function setCsbt_lim_de($csbt_lim_de) {
        $this->csbt_lim_de = $csbt_lim_de;
    }


    
}