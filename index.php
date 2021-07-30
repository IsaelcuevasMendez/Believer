<?php
require_once 'model/model_index.php';

$pagina = 'Inicio';

$resultado = obtenerActores($conexion);

require_once 'vistas/index.html.php';