<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp014CtnrVO{
    private $ctnr_sn;
    private $ctnr_no;
    private $seal_no;
    
    public function getContenedor014($result){
        $listaContenedor=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $ctnr014=new TnInp014CtnrVO();
            $ctnr014->setCtnr_sn($row['ctnr_sn']);
            $ctnr014->setCtnr_no($row['ctnr_no']);
            $ctnr014->setSeal_no($row['seal_no']);            
            $listaContenedor->append($ctnr014);                        
        }                       
        return $listaContenedor;
    }
    
    public function getCtnr_sn() {
        return $this->ctnr_sn;
    }

    public function getCtnr_no() {
        return $this->ctnr_no;
    }

    public function getSeal_no() {
        return $this->seal_no;
    }

    public function setCtnr_sn($ctnr_sn) {
        $this->ctnr_sn = $ctnr_sn;
    }

    public function setCtnr_no($ctnr_no) {
        $this->ctnr_no = $ctnr_no;
    }

    public function setSeal_no($seal_no) {
        $this->seal_no = $seal_no;
    }


}