<?php
require_once 'includes/sau-functions.php';
require_once 'includes/formulario.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_SESSION['iduser'])){
}else{
  header("Location: logout");
}


if(isset($_POST['opcion'])){
    if($_POST['opcion']==2){
        $reqno=$_POST['reqno'];
        $id=$_POST['id'];
        $rank=$_POST['rank'];
        $response = array();
        $response=consultaxid($reqno,$id,$rank);
        $formulario=  dibujarFormulario($response,$rank);
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

