<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp006CntrVO{				 
     private $ctnr_sn;
     private $ctnr_idt_desc;
     private $seal_no;
     
     public function getContenedor006($result){
        $listaAnalisis=new ArrayObject();
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $ctnr001=new TnInp001CntrVO();
            $ctnr001->setCtnr_sn($row['ctnr_sn']);
            $ctnr001->setCtnr_idt_desc($row['ctnr_idt_desc']);
            $ctnr001->setSeal_no($row['seal_no']);            
            $listaAnalisis->append($ctnr001);                        
        }                       
        return $listaAnalisis;
    }
    
   
    function getCtnr_idt_desc() {
        return $this->ctnr_idt_desc;
    }

    function getSeal_no() {
        return $this->seal_no;
    }

    function setCtnr_sn($ctnr_sn) {
        $this->ctnr_sn = $ctnr_sn;
    }

    function setCtnr_idt_desc($ctnr_idt_desc) {
        $this->ctnr_idt_desc = $ctnr_idt_desc;
    }

    function setSeal_no($seal_no) {
        $this->seal_no = $seal_no;
    }
}