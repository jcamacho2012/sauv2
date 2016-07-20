<?php

$dbhost="192.168.1.175";
$dbport="5432";
$dbname="Solicitudes_Dev";
$dbuser="postgres";
$dbpass="vue_gateway";

$cadena = "host='$dbhost' port='$dbport' dbname='$dbname' user='$dbuser' password='$dbpass'";        
$conexion= pg_connect($cadena) or die("<h1>Error conexion con VUE</h1>");

//$file=fopen("datos.txt","a") or die("Problemas");
  //vamos añadiendo el contenido
  
 
if(isset($_POST['numero'])){
    $numero=$_POST['numero'];
    $valor=$_POST['valor'];
    $id=$_POST['id'];
    //echo "<span class='ok' style='display:block;padding:10px;text-align:center;background:green;color:#fff'>Valores modificados correctamente.</span>";
    echo  "<span class='ko' style='display:block;padding:10px;text-align:center;background:red;color:#fff'>error</span>";
}


pg_close($conexion);
