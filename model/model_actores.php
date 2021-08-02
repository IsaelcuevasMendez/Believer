<?php

require_once "model/conexion.php";

function obtenerActores($conexion) {
    $query = "SELECT * FROM actor";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}

function insertarActor($conexion, $datos){
    $query = "INSERT INTO actor(first_name, last_name) 
              VALUES ('{$datos['nombre']}', '{$datos['apellido']}')";

    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}