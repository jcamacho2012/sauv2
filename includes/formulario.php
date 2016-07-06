<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/pagina/TnInp001/TnInp001Page.php';

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
            return sanitarios($array['dcm_no']);
            break;
        }
        case '130-012':{
            return sanitarios($array['dcm_no']);
            break;
        }
        case '130-014':{
            return sanitarios($array['dcm_no']);
            break;
        }
        case '130-016':{
            return importacion();
            break;
        }
        case '130-019':{
            return importacion();
            break;
        }
        case '130-021':{
            return importacion();
            break;
        }
        case '130-031':{
            return certificacion();
            break;
        }
        case '130-032':{
            return certificacion();
            break;
        }
        case '130-033':{
            return certificacion();
            break;
        }
        case '130-034':{
            return certificacion();
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
            return certificacion();
            break;
        }
        case '130-045':{
            return certificacion();
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