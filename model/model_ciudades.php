<?php

require_once "model/conexion.php";


function obtenerCiudades($conexion){
    $query = "SELECT * FROM city";
    
    $resultado = mysqli_query($conexion, $query);
    
    return $resultado;
}