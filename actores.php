<?php
require_once 'model/model_actores.php';

$pagina = 'Actores';

$resultado = obtenerActores($conexion);

try{
    if (isset($_POST['insetar'])) {
        $nombre = $_POST['nombre'] ?? "";
        $apellido = $_POST['apellido'] ?? "";
        $id = $_POST['id'] ?? "";

        $datos = compact('nombre', 'apellido');


        
        $datos = compact('nombre','apellido');
        #si el id esta vacio, se va a insertar
        if(empty($id)){
            $inser = insertarActor($conexion, $datos);
            
            if ($inser){
            $_SESSION['mensaje'] = 'Datos guardados correctamente';
            }
        } else{
            # de lo contrario, se actualizara
            $datos['id'] = $id;

            $actualizado = editarActorPorID($conexion, $datos);

            if($actualizado){
                $_SESSION['mensaje'] = "Datos actualizado correctamente";
            }
        }
                
       
        refrescar("actores.php");
    }

    if (isset($_GET['eliminar'])) {
        $id = $_GET['eliminar']; 
               
        $eliminar = eliminarActor($conexion, $id);

        // if ($eliminado){
        //     $_SESSION['mensaje'] = "Eliminado Correctamente";
        // }
        // else {
        //     $_SESSION['mensaje'] = "No se puede eliminado";
        // }
        refrescar("actores.php");
    }
    if (isset($_GET['editar'])){
        $id = $_GET['editar'];

        $result = obtenerActoresPorID($conexion, $id);

        $info = mysqli_fetch_assoc($result);

        // if($editar){
        //     $_SESSION['mensaje'] = "Editado correctamente";
        // } else{
        //     $_SESSION['mensaje'] = "No se puede editar";
        // }
    }
    
}catch(Exception $ex){
    $_SESSION['mensaje'] = $ex->getMessage();
}
require_once 'vistas/actores.html.php';