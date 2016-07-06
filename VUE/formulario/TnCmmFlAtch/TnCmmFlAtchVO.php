<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnCmmFlAtchVO{
    private $atch_dcm_ctg_nm;
    private $fl_path;
        
    public function getAdjuntos($result){
        $listaAdjuntos=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $adjunto=new TnCmmFlAtchVO();
            $ruta = str_replace(" ", "%20",$row['fl_path'] );
            $adjunto->setAtch_dcm_ctg_nm($row['atch_dcm_ctg_nm']);
            $adjunto->setFl_path($ruta);            
            $listaAdjuntos->append($adjunto);                        
        }                       
        return $listaAdjuntos;
    }
    
    function getAtch_dcm_ctg_nm() {
        return $this->atch_dcm_ctg_nm;
    }

    function getFl_path() {
        return $this->fl_path;
    }

    function setAtch_dcm_ctg_nm($atch_dcm_ctg_nm) {
        $this->atch_dcm_ctg_nm = $atch_dcm_ctg_nm;
    }

    function setFl_path($fl_path) {
        $this->fl_path = $fl_path;
    }


}