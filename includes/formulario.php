<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp001/TnInp001Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp010/TnInp010Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp012/TnInp012Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp014/TnInp014Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp019/TnInp019Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp021/TnInp021Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp027/TnInp027Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp031/TnInp031Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp032/TnInp032Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp033/TnInp033Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp034/TnInp034Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp044/TnInp044Page.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp045/TnInp045Page.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function dibujarFormulario($array){
    switch ($array['dcm_no']){
        case '130-001':{
            return cargar_formulario_001_004($array['req_no'], $array['dcm_no']);
            //return sanitarios($array['dcm_no']);
            break;
        }
        case '130-004':{
            return sanitarios($array['dcm_no']);
            break;
        }
        case '130-006':{
            return sanitarios($array['dcm_no']);
            break;
        }
        case '130-008':{
            return sanitarios($array['dcm_no']);
            break;
        }
        case '130-010':{
            return cargar_formulario_010($array['req_no']);
            break;
        }
        case '130-012':{
            return cargar_formulario_012($array['req_no']);
            break;
        }
        case '130-014':{
            return cargar_formulario_014($array['req_no']);
            break;
        }
        case '130-016':{
            return importacion();
            break;
        }
        case '130-019':{
            return cargar_formulario_019($array['req_no']);
            break;
        }
        case '130-021':{
            return cargar_formulario_021($array['req_no']);
            break;
        }
        case '130-027':{
            return cargar_formulario_027($array['req_no']);
            break;
        }
        case '130-031':{
            return cargar_formulario_031($array['req_no']);
            break;
        }
        case '130-032':{
            return cargar_formulario_032($array['req_no']);//pendiente por los checks
            break;
        }
        case '130-033':{
            return cargar_formulario_033($array['req_no']);
            break;
        }
        case '130-034':{
            return cargar_formulario_034($array['req_no']);
            break;
        }
        case '130-039':{
            return calidad();
            break;
        }
        case '130-040':{
            return sanitarios($array['dcm_no']);
            break;
        }
        case '130-042':{
            return sanitarios($array['dcm_no']);
            break;
        }
        case '130-044':{
            return cargar_formulario_044($array['req_no'],$rol);//pendiente del 044
            break;
        }
        case '130-045':{
            return cargar_formulario_045($array['req_no']);
            break;
        }
        default :{
            break;
        }
    }                       
}

function sanitarios(){
    return '
                <div class="row" style="padding:5px 20px;">
                    <div class="col-xs-6 form-group">
                        <label>Solicitud</label>                                      
                        <input type="text" class="form-control" name="req_no" disabled="true" value="sanitario" />                                    
                    </div>
                    <div class="col-xs-1 form-group">
                        <!-- espacio entre columnas-->
                    </div>

                    <div class="col-xs-6 form-group">
                        <label>Documento</label>                                        
                        <input type="text" class="form-control" name="dcm_no" disabled="true" />
                    </div>
               </div> 
               <div class="row" style="padding:5px 20px;">
                    <div class="col-xs-6 form-group">
                        <label>Empresa</label>                                      
                        <input type="text" class="form-control" name="empresa" disabled="true" />                                    
                    </div>
                    <div class="col-xs-1 form-group">
                        <!-- espacio entre columnas-->
                    </div>

                    <div class="col-xs-6 form-group">
                        <label>Usuario</label>                                        
                        <input type="text" class="form-control" name="usuario" disabled="true" />
                    </div>
               </div> 
               <div class="form-group">
                   <div class="col-xs-5 col-xs-offset-3">
                       <button type="submit" class="btn btn-success" id="aprobar">Aprobar</button>
                   </div>
               </div>';
}

function calidad(){
 //formulario 130-039   
}


function importacion(){
    
}

function certificacion(){
    
}