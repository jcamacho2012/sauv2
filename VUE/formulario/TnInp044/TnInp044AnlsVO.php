<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp044AnlsVO{    			
    private $prdt_sn;
    private $anls_type_nm;
    private $anls_qt;    
    
    public function getAnalisis044($result){
        $listaAnalisis=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $anls44=new TnInp044AnlsVO();
            $anls44->setPrdt_sn($row['prdt_sn']);
            $anls44->setAnls_type_nm($row['anls_type_nm']);
            $anls44->setAnls_qt($row['anls_qt']." ".$row['anls_qt_ut']);                        
            $listaAnalisis->append($anls44);                        
        }                       
        return $listaAnalisis;
    }       
    
    function getPrdt_sn() {
        return $this->prdt_sn;
    }

    function getAnls_type_nm() {
        return $this->anls_type_nm;
    }

    function getAnls_qt() {
        return $this->anls_qt;
    }

    function getAnls_qt_ut() {
        return $this->anls_qt_ut;
    }

    function setPrdt_sn($prdt_sn) {
        $this->prdt_sn = $prdt_sn;
    }

    function setAnls_type_nm($anls_type_nm) {
        $this->anls_type_nm = $anls_type_nm;
    }

    function setAnls_qt($anls_qt) {
        $this->anls_qt = $anls_qt;
    }

    function setAnls_qt_ut($anls_qt_ut) {
        $this->anls_qt_ut = $anls_qt_ut;
    }


  
}