<?php
require_once 'model/model_categoria.php';

$pagina = 'Categorias';

$resultado = obtenerCategoria($conexion);

try{
    if (isset($_POST['insetar'])) {
        $nombre = $_POST['nombre'] ?? "";
        $id = $_POST['id'] ?? "";
        
        $datos = compact('nombre');
    
        if ($inser){
            $_SESSION['mensaje'] = 'Datos guardados correctamente';
        }
        else{
            $_SESSION['mensaje'] = 'Datos no guardados';
        }
        #si el id esta vacio, se va a insertar
        if(empty($id)){
            $inser = insertarCategoria($conexion, $datos);
            
            if ($inser){
            $_SESSION['mensaje'] = 'Datos guardados correctamente';
            }
        } else{
            # de lo contrario, se actualizara
            $datos['id'] = $id;

            $actualizado = editarCategoriaPorID($conexion, $datos);

            if($actualizado){
                $_SESSION['mensaje'] = "Datos actualizado correctamente";
            }
        }
                
       
        refrescar("categorias.php");
    }

    if (isset($_GET['eliminar'])) {
        $id = $_GET['eliminar']; 
               
        $eliminar = eliminarCategoria($conexion, $id);

        // if ($eliminado){
        //     $_SESSION['mensaje'] = "Eliminado Correctamente";
        // }
        // else {
        //     $_SESSION['mensaje'] = "No se puede eliminado";
        // }
        refrescar("categorias.php");
    }
    if (isset($_GET['editar'])){
        $id = $_GET['editar'];

        $result = obtenerCategoriaPorID($conexion, $id);

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

require_once 'vistas/categorias.html.php';