<?php
require_once 'model/model_actores.php';

$pagina = 'Actores';

$resultado = obtenerActores($conexion);
try{
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

    if (isset($_GET['eliminar'])) {
        $id = $_GET['eliminar']; 
               
        $eliminar = eliminarActor($conexion, $id);

        if ($eliminado){
            $_SESSION['mensaje'] = "Eliminado Correctamente";
        }
        else {
            $_SESSION['mensaje'] = "No se puede eliminado";
        }
    }
    if (isset($_GET['editar'])){
        $id = $_GET['editar'];

        $info = obtenerActoresPorID($conexion, $id);

        if($editar){
            $_SESSION['mensaje'] = "Editado correctamente";
        } else{
            $_SESSION['mensaje'] = "No se puede editar";

        }
    }
}   catch(Exception $ex){
    $_SESSION['mensaje'] = $ex->getMessage();
}

require_once 'vistas/actores.html.php';