<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp010CtnrVO{
    private $ctnr_sn;
    private $ctnr_no;
    private $seal_no;
    
    public function getContenedor010($result){
        $listaContenedor=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $ctnr010=new TnInp010CtnrVO();
            $ctnr010->setCtnr_sn($row['ctnr_sn']);
            $ctnr010->setCtnr_no($row['ctnr_no']);
            $ctnr010->setSeal_no($row['seal_no']);            
            $listaContenedor->append($ctnr010);                        
        }                       
        return $listaContenedor;
    }
    
    function getCtnr_sn() {
        return $this->ctnr_sn;
    }

    function getCtnr_no() {
        return $this->ctnr_no;
    }

    function getSeal_no() {
        return $this->seal_no;
    }

    function setCtnr_sn($ctnr_sn) {
        $this->ctnr_sn = $ctnr_sn;
    }

    function setCtnr_no($ctnr_no) {
        $this->ctnr_no = $ctnr_no;
    }

    function setSeal_no($seal_no) {
        $this->seal_no = $seal_no;
    }


}