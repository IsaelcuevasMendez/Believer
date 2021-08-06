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

function eliminarActor($conexion, $id){

    $query = "DELETE FROM film_actor WHERE actor_id = $id";

    $resultado = mysqli_query($conexion, $query);

    $query = "DELETE FROM actor WHERE actor_id = $id";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}


function obtenerActoresPorID($conexion, $id){
    $query = "SELECT * FROM actor WHERE actor_id = $id";
    
    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}


function editarActorPorID($conexion, $datos){
    $query = "UPDATE actor
    SET first_name = '{$datos['nombre']}', last_name = '{$datos['apellido']}'
    WHERE actor_id = '{$datos['id']}'";

    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}