<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/includes/sau-functions.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/includes/formulario.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_SESSION['iduser'])){
}else{
  header("Location: logout");
}

/*
 * Solicitud aprobada
 */
if (isset($_POST['estado'])){
    if($_POST['estado']=='aprobar'){
        $reqno=$_POST['reqno'];
        $process=$_POST['process'];
        $activity=$_POST['activity'];
        $estado=$_POST['estado'];
        $rank=$_POST['rank'];
        $cedula=$_POST['cedula'];
        $username=$_POST['username'];
        $cadena=$_POST['cadena'];
        if(!consultarDesistimiento($reqno)){
            if($_POST['rank']!=4){            
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
                if(actualizarEstadoActividad($activity,$process,$estado,$rank)){
                     if(preaprobacion($reqno, $cedula, $username,$cadena)){
                         if(imponerTasas($reqno, $username)){
                             echo '4';
                         }else{
                             echo '5';
                         }
                     }else{
                         echo '6';
                     }
                 }else{
                     echo '7';
                 }
            }
        }else{
            if(actualizarEstadoActividad($activity,$process,$estado,'DESISTIDA')){
                 echo '8';
            }else{
                echo '9';
            }
           
        }        
    }
}

/*
 * Solicitud subsanada
 */
if (isset($_POST['estado'])){
    if($_POST['estado']=='subsanar'){
            $reqno=$_POST['reqno'];
            $opcion=$_POST['opcion'];
            $mensaje=$_POST['mensaje'];            
            $process=$_POST['process'];
            $activity=$_POST['activity'];            
            $username=$_POST['username'];
            if(!consultarDesistimiento($reqno)){
                if(actualizarEstadoActividad($activity,$process,$opcion,'')){
                    if(enviarNotificación($reqno, $mensaje, $opcion,$username)){
                        echo '1';
                    }else{
                        echo '2';
                    }
                }else{
                    echo '3';
                }     
            }else{
                 if(actualizarEstadoActividad($activity,$process,$estado,'DESISTIDA')){
                    echo '8';
                }else{
                    echo '9';
                }
            }                       
    }
}

/*
 * Devuelve formulario por ajax en la pagina tareas.php (/task)
 */
if(isset($_POST['opcion'])){
    if($_POST['opcion']=='hacer'){
        $reqno=$_POST['reqno'];
        $id=$_POST['id'];
        $rank=$_POST['rank'];
        $process=$_POST['process'];
        $activity=$_POST['activity'];
        $cedula=$_POST['identity_card'];
        $username=$_POST['username'];
        
        if(!consultarDesistimiento($reqno)){
            $response = array();
            $response=consultaxid($reqno);
            $formulario=  dibujarFormulario($response,$rank,$process,$activity,$cedula,$username);
            echo $formulario;  
        }else{
            if(actualizarEstadoActividad($activity,$process,$estado,'DESISTIDA')){
                echo '8';
            }else{
                echo '9';
            }
        }        
    }
}

/*
 * Liberar una solicitud (Aprobador)
 */
if(isset($_POST['opcion'])){
    if($_POST['opcion']=='liberar'){
           $activity=$_POST['activity'];
           $process=$_POST['process'];
           echo liberar($activity,$process);
    }
 
}

/*
 * Tomar una solicitud que se encuentra sin usuario asignado (Aprobador)
 */
if(isset($_POST['opcion'])){
    if($_POST['opcion']=='tomar'){
        $id=$_POST['id'];
        $process=$_POST['process'];
        $activity=$_POST['activity'];
        $resultado=  tomar($id, $process, $activity);
        if($resultado){
            echo '1';
        }else{
            echo $resultado;
        }        
    }
 
}

/*
 * Vista previa de la Solicitud (Admin)
 */

if(isset($_POST['opcion'])){
    if($_POST['opcion']=='ver'){
        $reqno=$_POST['reqno'];
        $response = array();
        $response=consultaxid($reqno);
        $formulario=  dibujarFormulario($response,'2','','','','');        
        echo $formulario;  
          
    }
}

/*
 * Reasignar tareas a otros usuarios 
 */

if(isset($_POST['opcion'])){
    if($_POST['opcion']=='asignar'){       
        $lista=$_POST['lista'];
        $usuario=$_POST['usuario'];
        if(asignarSolicitudes($lista, $usuario)){
            echo '1';
        }else{
            echo '2';
        }                   
    }
}

if(isset($_POST['opcion'])){
    if($_POST['opcion']=='prueba'){       
                  
    }
}