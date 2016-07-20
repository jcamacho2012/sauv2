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

if (isset($_POST['estado'])){
    if($_POST['estado']=='aprobar'){
        if($_POST['rank']!=4){
            $process=$_POST['process'];
            $activity=$_POST['activity'];
            $estado=$_POST['estado'];
            $rank=$_POST['rank'];
            if(actualizarEstadoActividad($activity,$process,$estado,$rank)){
                if(crearNuevaActividad($process)){
                    echo '1';
                }else{
                    echo '2';
                }
            }else{
                echo '3';
            }
        }else{
           $cedula=$_POST['cedula'];
        }
    }
}

if (isset($_POST['estado'])){
    if($_POST['estado']=='subsanar'){
            $process=$_POST['process'];
            $activity=$_POST['activity'];
            $reqno=$_POST['reqno'];
            $opcion=$_POST['opcion'];
            $mensaje=$_POST['mensaje'];
            $rank=$_POST['rank'];
            $username=$_POST['username'];
            enviarNotificación($activity, $process, $reqno, $mensaje, $opcion,$rank,$username);
        
    }
}

if(isset($_POST['opcion'])){
    if($_POST['opcion']=='hacer'){
        $reqno=$_POST['reqno'];
        $id=$_POST['id'];
        $rank=$_POST['rank'];
        $process=$_POST['process'];
        $activity=$_POST['activity'];
        $cedula=$_POST['identity_card'];
        $username=$_POST['username'];
        $response = array();
        $response=consultaxid($reqno,$id,$rank);
        $formulario=  dibujarFormulario($response,$rank,$process,$activity,$cedula,$username);
        echo $formulario;  
    }
}


if(isset($_POST['opcion'])){
    if($_POST['opcion']=='liberar'){
           $activity=$_POST['activity'];
           $process=$_POST['process'];
           echo liberar($activity,$process);
    }
 
}

if(isset($_POST['opcion'])){
    if($_POST['opcion']=='tomar'){
        $id=$_POST['id'];
        $process=$_POST['process'];
        $activity=$_POST['activity'];
        echo tomar($id,$process,$activity);
    }
 
}


