<?php

require_once "model/conexion.php";

function obtenerCategoria($conexion) {
    $query = "SELECT * FROM category";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}


function insertarCategoria($conexion, $datos){
    $query = "INSERT INTO category(name) 
              VALUES ('{$datos['nombre']}')";

    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}