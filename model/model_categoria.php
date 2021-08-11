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

function eliminarCategoria($conexion, $id){

    $query = "DELETE FROM category WHERE category_id = $id";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}


function obtenerCategoriaPorID($conexion, $id){
    $query = "SELECT * FROM category WHERE category_id = $id";
    
    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}


function editarCategoriaPorID($conexion, $datos){
    $query = "UPDATE category
    SET name = '{$datos['nombre']}'
    WHERE category_id = '{$datos['id']}'";

    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}