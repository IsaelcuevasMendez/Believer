<?php
require_once 'model/model_actores.php';

$pagina = 'Inicio';

$resultado = obtenerActores($conexion);

if (isset($_POST['insetar'])) {
    $nombre = $_POST['nombre'] ?? "";
    $apellido = $_POST['apellido'] ?? "";

    $datos = compact('nombre', 'apellido');

    $inser = insertarActor($conexion, $datos);

    if ($inser){
        $_SESSION['mensaje'] = 'Datos guardados correctamente';
    }
    else{
        $_SESSION['mensaje'] = 'Datos no guardados';
    }
}

require_once 'vistas/actores.html.php';