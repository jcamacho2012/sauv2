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

if (isset($_POST['comment'])) {

// tomamos el permalink
$getpermalink = $_POST['permalink'];

// otorgamos variable a la sesion
$getusuario = $_SESSION['iduser'];

// otorgamos variable al posts
$getpost = rip_tags($_POST['comment']);

// tomamos la fecha y otra para el permalink
$getdate = date('Y-m-d');


$SQL = "INSERT INTO comments(comment,post,user,datecomment) VALUES(:comment,:post,:user,:datecomment)";
$sentence = $conexion -> prepare($SQL);
$sentence -> bindParam(':comment', $getpost);
$sentence -> bindParam(':post', $_POST['post']); 
$sentence -> bindParam(':user', $getusuario); 
$sentence -> bindParam(':datecomment', $getdate); 
$sentence -> execute();

header("Location: publication".$getpermalink."");

}else{

}