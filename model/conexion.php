<?php

$host = "localhost";
$usuario = "root";
$contraseña = "";
$baseDato = "sakila";

$conexion = mysqli_connect($host, $usuario, $contraseña, $baseDato);

if ( $_SERVER['SERVER_NAME'] == 'triliever.000webhostapp.com' ) {
    $host = "localhost";
    $dbname = "id17315730_sakila";
    $usuario = "id17315730_root";
    $contrasena = "8098530778Isael.";
}



if (!$conexion) {
    echo "Hubo un error en la conecarnos";
}
$url = "http://".$_SERVER['HTTP_HOST']."/Sakilaapp";

function refrescar($nombrePagina){
    header("Location: $nombrePagina", true, 303);
}