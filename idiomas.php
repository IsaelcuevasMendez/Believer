<?php
require_once 'model/model_idiomas.php';

$pagina = 'Inicio';

$resultado = obtenerIdiomas($conexion);

if (isset($_POST['insetar'])) {
    $nombre = $_POST['nombre'] ?? "";

    $datos = compact('nombre');

    $inser = insertarIdiomas($conexion, $datos);

    if ($inser){
        $_SESSION['mensaje'] = 'Datos guardados correctamente';
    }
}

require_once 'vistas/idiomas.html.php';