<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TnNtfcVO{
    private $nombre;
    private $mensaje;
    private $fecha;
    
    public function getNotificacion($result){
        $listaNotificaciones=new ArrayObject();          
        while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {             
            $ntfc=new TnNtfcVO();
            $ntfc->setNombre($row['ntcp_nm']);
            $ntfc->setMensaje($row['ntfc_ctxt']);
            $ntfc->setFecha($row['rgs_dt']);
            $listaNotificaciones->append($ntfc);                        
        }                       
        return $listaNotificaciones;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getMensaje() {
        return $this->mensaje;
    }
    
    public  function getFecha(){
        return $this->fecha;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function setFecha($fecha){
        $this->fecha=$fecha;
    }
}