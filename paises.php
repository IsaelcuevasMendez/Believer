<?php
require_once 'model/model_paises.php';

$pagina = 'Inicio';

$resultado = obtenerPaises($conexion);

if (isset($_POST['insetar'])) {
    $nombre = $_POST['nombre'] ?? "";
   
    $datos = compact('nombre');

    $inser = insertarPaises($conexion, $datos);

    if ($inser){
        $_SESSION['mensaje'] = 'Datos guardados correctamente';
    }
    else{
        $_SESSION['mensaje'] = 'Datos no guardados';
    }
}

require_once 'vistas/paises.html.php';