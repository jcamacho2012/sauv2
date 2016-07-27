<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp001/TnInp001Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp006/TnInp006Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp008/TnInp008Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp010/TnInp010Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp012/TnInp012Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp014/TnInp014Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp016/TnInp016Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp019/TnInp019Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp021/TnInp021Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp027/TnInp027Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp031/TnInp031Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp032/TnInp032Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp033/TnInp033Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp034/TnInp034Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp039/TnInp039Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp044/TnInp044Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp045/TnInp045Page.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function dibujarFormulario($array,$rol,$process,$activity,$cedula,$username){
    switch ($array['dcm_cd']){
        case '130-001':{
            return cargar_formulario_001_004($array['req_no'], $array['dcm_cd'],$rol,$process,$activity,$cedula,$username);            
            break;
        }
        case '130-004':{
            return cargar_formulario_001_004($array['req_no'], $array['dcm_cd'],$rol,$process,$activity,$cedula,$username);
            break;
        }
        case '130-006':{
            return cargar_formulario_006_040($array['req_no'], $array['dcm_cd'], $rol,$process,$activity,$cedula,$username);
            break;
        }
        case '130-008':{
            return cargar_formulario_008($array['req_no'], $array['dcm_cd'],$rol,$process,$activity,$cedula,$username);
            break;
        }
        case '130-010':{
            return cargar_formulario_010($array['req_no'],$rol,$process,$activity,$cedula,$username);
            break;
        }
        case '130-012':{
            return cargar_formulario_012($array['req_no'],$process,$activity,$cedula,$username);
            break;
        }
        case '130-014':{
            return cargar_formulario_014($array['req_no'],$rol,$process,$activity,$cedula,$username);
            break;
        }
        case '130-016':{
            return cargar_formulario_016($array['req_no'],$rol);
            break;
        }
        case '130-019':{
            return cargar_formulario_019($array['req_no'],$process,$activity,$cedula,$username);
            break;
        }
        case '130-021':{
            return cargar_formulario_021($array['req_no'],$process,$activity,$cedula,$username);
            break;
        }
        case '130-027':{
            return cargar_formulario_027($array['req_no'],$process,$activity,$cedula,$username);
            break;
        }
        case '130-031':{
            return cargar_formulario_031($array['req_no'],$process,$activity,$cedula,$username);
            break;
        }
        case '130-032':{
            return cargar_formulario_032($array['req_no'],$process,$activity,$cedula,$username);
            break;
        }
        case '130-033':{
            return cargar_formulario_033($array['req_no'],$process,$activity,$cedula,$username);
            break;
        }
        case '130-034':{
            return cargar_formulario_034($array['req_no'],$process,$activity,$cedula,$username);
            break;
        }
        case '130-039':{
            return cargar_formulario_039($array['req_no'],$rol);
            break;
        }
        case '130-040':{
            return cargar_formulario_006_040($array['req_no'], $array['dcm_cd'], $rol,$process,$activity,$cedula,$username);
            break;
        }
        case '130-042':{
            return cargar_formulario_008($array['req_no'],$array['dcm_cd'],$process,$activity,$cedula,$username);
            break;
        }
        case '130-044':{
           return cargar_formulario_044($array['req_no'],$process,$activity,$cedula,$username);
            break;
        }
        case '130-045':{
            return cargar_formulario_045($array['req_no'],$process,$activity,$cedula,$username);
            break;
        }
        default :{
            break;
        }
    }                       
}
