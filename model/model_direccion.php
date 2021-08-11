<?php

require_once "model/conexion.php";


function obtenerDirecciones($conexion) {
    $query = "SELECT * FROM address";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}

function insertarDirecciones($conexion, $datos){
    $query = "INSERT INTO actor(address, address2, district1, city_id, postal_code, phone,location) 
              VALUES ('{$datos['nombre']}', '{$datos['apellido']}', '{$datos['apellido']}')";

    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}

function eliminarDirecciones($conexion, $id){

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