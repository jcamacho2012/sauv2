<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function dibujarFormulario($array){
    if($array['dcm_no']=='130-001'){
        return sanitarios();
    }
                            
}

function sanitarios(){
    return '<div class="row" style="padding:5px 20px;">
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