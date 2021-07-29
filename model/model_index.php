<?php

require_once "model/conexion.php";

function obtenerActores($conexion) {
    $query = "SELECT * FROM actor";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}