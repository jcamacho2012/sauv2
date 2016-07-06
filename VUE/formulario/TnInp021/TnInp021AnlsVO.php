<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnInp021AnlsVO{   
    private $anls_sn;
    private $anls_type_nm;
    private $anls_qt;  
    
    public function getAnalisis021($result){
        $listaAnalisis=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $anls021=new TnInp021AnlsVO();
            $anls021->setAnls_sn($row['anls_sn']);
            $anls021->setAnls_type_nm($row['anls_type_nm']);                      
            $anls021->setAnls_qt($row['anls_qt']." ".$row['anls_qt_ut']);            
            $listaAnalisis->append($anls021);                        
        }                       
        return $listaAnalisis;
    }
    
    function getAnls_sn() {
        return $this->anls_sn;
    }

    function getAnls_type_nm() {
        return $this->anls_type_nm;
    }

    function getAnls_qt() {
        return $this->anls_qt;
    }

    function setAnls_sn($anls_sn) {
        $this->anls_sn = $anls_sn;
    }

    function setAnls_type_nm($anls_type_nm) {
        $this->anls_type_nm = $anls_type_nm;
    }

    function setAnls_qt($anls_qt) {
        $this->anls_qt = $anls_qt;
    }


}