<?php

$_SERVER    = "localhost";
$_USERNAME  = "root";
$_PASSWORD  = "";
$_DATABASE  = "aula_virtual";


$conexion = new mysqli($_SERVER, $_USERNAME, $_PASSWORD, $_DATABASE);

/*
if($conexion->connect_error){
    die("Error en la conexion: ".$conexion->connect_error);
}
else{
    echo "conexión exitosa";
}
*/
?>