<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/Conexion.php';

  
if(isset($_POST['numero'])){
    $numero=$_POST['numero'];
    $valor=$_POST['valor'];
    $id=$_POST['id'];
    
    $sql="select afr_prst_cd from vue_gateway.tn_eld_edoc_last_stat where req_no=
          (select req_no as valor from vue_gateway.tn_inp_016 where ctft_no='".$secuencial."')";                 
    $conexion=new DB();
    $row = $conexion->consultar($sql,1);       

    
    //echo "<span class='ok' style='display:block;padding:10px;text-align:center;background:green;color:#fff'>Valores modificados correctamente.</span>";
    echo  "<span class='ko' style='display:block;padding:10px;text-align:center;background:red;color:#fff'>error</span>";
    
}


