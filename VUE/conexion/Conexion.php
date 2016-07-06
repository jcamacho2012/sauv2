<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DB{
    private $host="192.168.1.175";
    private $port="5432";
    private $dbname="Solicitudes_Dev";
    private $user="postgres";
    private $password="vue_gateway";
    private $conexion;
    
    function __construct() {
        $cadena = "host='$this->host' port='$this->port' dbname='$this->dbname' user='$this->user' password='$this->password'";        
        $this->conexion= pg_connect($cadena) or die('<img src="themes/images/background1.jpg" alt="Smiley face" height="42" width="42">'
                                                    . '<h1>Error al conectar</h1>');   
    }
          
    
    function consultar($sql,$flag){
        if($flag==1){
            $result=  pg_query($this->conexion,$sql)or die("Error sql" . pg_last_error());                        
            $fila = pg_fetch_array($result, NULL, PGSQL_ASSOC);
        }else{
            $fila= pg_query($this->conexion,$sql)or die("Error sql" . pg_last_error());
        }        
        pg_close($this->conexion);
        return $fila;
    }
 
    function getconexion(){
        return $this->conexion;
    }
}
