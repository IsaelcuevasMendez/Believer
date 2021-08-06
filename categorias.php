<?php
require_once 'model/model_categoria.php';

$pagina = 'Categorias';

$resultado = obtenerCategoria($conexion);

if (isset($_POST['insetar'])) {
    $nombre = $_POST['nombre'] ?? "";

    $datos = compact('nombre');

    $inser = insertarCategoria($conexion, $datos);

    if ($inser){
        $_SESSION['mensaje'] = 'Datos guardados correctamente';
    }
    else{
        $_SESSION['mensaje'] = 'Datos no guardados';
    }
}

require_once 'vistas/categorias.html.php';