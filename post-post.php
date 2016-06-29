<?php

// pues se incluye el archivo login
require_once 'admin/includes/login.class.php';

// para eliminar los caracteres HTML 
// Evitar XSS
function rip_tags($string){
    // ----- remove HTML TAGs -----
    $string = preg_replace ('/<[^>]*>/', ' ', $string);
    // ----- remove control characters -----
    $string = str_replace("\r", '', $string);    // --- replace with empty space
    $string = str_replace("\n", ' ', $string);   // --- replace with space
    $string = str_replace("\t", ' ', $string);   // --- replace with space
    // ----- remove multiple spaces -----
    $string = trim(preg_replace('/ {2,}/', ' ', $string));
    return $string;

}

// conexon a base de datos
$conexion = Conexion::singleton_conexion();

if (isset($_POST['posts'])) {

// otorgamos variable a la sesion
$getusuario = $_SESSION['iduser'];

// otorgamos variable al posts
$getpost = rip_tags($_POST['posts']);

// tomamos la fecha y otra para el permalink
$getdate = date('Y-m-d');
$getdatehash = date("Y-m-d h:i:s");

// creamos un permalink
$getpermalink = sha1($getdatehash.$getpost.$getusuario);


$SQL = "INSERT INTO posts(post,userpost,datepost,permalink) VALUES(:post,:user,:datepost,:permalink)";
$sentence = $conexion -> prepare($SQL);
$sentence -> bindParam(':post', $getpost); 
$sentence -> bindParam(':user', $getusuario); 
$sentence -> bindParam(':datepost', $getdate); 
$sentence -> bindParam(':permalink', $getpermalink);
$sentence -> execute();

header("Location: dashboard");

}else{

}