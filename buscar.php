<?php
require_once 'includes/sau-functions.php';
require_once 'includes/formulario.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



if(isset($_POST['opcion'])){
    if($_POST['opcion']==2){
        $reqno=$_POST['reqno'];
        $id=$_POST['id'];
        $response = array();
        $response=consultaxid($reqno,$id);
        $formulario=  dibujarFormulario($response);
        echo $formulario;  
    }
}

if(isset($_POST['opcion'])){
    if($_POST['opcion']==1){
           $reqno=$_POST['reqno'];
           $id=$_POST['id'];
           echo aprobar($reqno,$id);
    }
 
}

if(isset($_POST['opcion'])){
    if($_POST['opcion']==3){
           $reqno=$_POST['reqno'];
           echo liberar($reqno);
    }
 
}

