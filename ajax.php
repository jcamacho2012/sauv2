<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/Funciones.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if(isset($_POST['secuencial'])){
        $secuencial="INP-R".sprintf("%'.06d",$_POST['secuencial']);
        $existe=consulta_secuencial($secuencial);
        if(empty($existe['afr_prst_cd'])==TRUE){
            echo "Secuencial disponible";        
        }else {
            switch($existe['afr_prst_cd']){
                case '510':{
                    echo 'Solicitud con secuencial: '.$secuencial.' se encuentra aprobada';
                    break;
                }
                case '320':{
                    echo 'Solicitud con secuencial: '.$secuencial.' se encuentra aprobada';
                    break;
                }
                case '330':{
                    echo 'Solicitud con secuencial: '.$secuencial.' se encuentra aprobada';
                    break;
                }
                case '610':{
                    echo 'Solicitud con secuencial: '.$secuencial.' se encuentra desistida';
                    break;
                }
                case '620':{
                    echo 'Solicitud con secuencial: '.$secuencial.' se encuentra desistida';
                    break;
                }
                case '630':{
                    echo 'Solicitud con secuencial: '.$secuencial.' se encuentra revocada';
                    break;
                }
                default :{
                    echo 'Solicitud con secuencial: '.$secuencial.' se encuentra en trámite';
                    break;
                }
            }        
        }            
}