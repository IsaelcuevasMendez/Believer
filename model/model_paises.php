<?php

require_once "model/conexion.php";

function obtenerPaises($conexion) {
    $query = "SELECT * FROM country";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}

function insertarPaises($conexion, $datos){
    $query = "INSERT INTO country(country) 
              VALUES ('{$datos['nombre']}')";

    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}