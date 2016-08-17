<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tarea
 *
 * @author Jose
 */
class tarea {
    private $iduser;
    private $username;
    private $ciudad;
    private $cantidad;
    
    function __construct($iduser,$username,$ciudad,$cantidad) {
        $this->iduser=$iduser;
        $this->username=$username;
        $this->ciudad=$ciudad;
        $this->cantidad=$cantidad;
    }
    
    function getIduser(){
        return $this->iduser;
    }
                    
    function getUsername(){
        return $this->username;
    }
    
    function getCiudad(){
        return $this->ciudad;
    }
            
    function getCantidad(){
        return $this->cantidad;
    }
    
    function setIduser($iduser){
        $this->iduser=$iduser;
    }
    
    function setUsername($username){
        $this->username=$username;
    }
    
    function setCiudad($ciudad){
        $this->ciudad=$ciudad;
    }
            
    function setCantidad($cantidad){
        $this->cantidad=$cantidad;
    }
    
    static function ordenar($a, $b)
    {
        $al = $a->getCantidad();
        $bl = $b->getCantidad();              
    
        if ($al == $bl) {
            return 0;
        }
        return ($al < $bl) ? -1 : 1;
    }
}
