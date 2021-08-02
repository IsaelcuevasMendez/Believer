<?php

require_once "model/conexion.php";

function obtenerIdiomas($conexion) {
    $query = "SELECT * FROM language";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}

function insertarIdiomas($conexion, $datos){
    $query = "INSERT INTO language(name) 
              VALUES ('{$datos['nombre']}')";

    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}