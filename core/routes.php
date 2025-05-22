<?php
function cargarControlador($controlador) {
    
    $nombreControlador = ucwords($controlador) . "Controller";
    $archivoControlador = 'controllers/' . $nombreControlador . '.php';
    
    if (!is_file($archivoControlador)) {
        
        $archivoControlador = 'controllers/' . CONTROLADOR_PRINCIPAL . 'Controller.php';
    }
    
    require_once $archivoControlador;
    return new $nombreControlador();
}

function cargarAccion($controller, $accion, $id = null) {
    if (isset($accion) && method_exists($controller, $accion)) {
        ($id === null) ? $controller->$accion() : $controller->$accion($id);
    } else {
        // Si no se encuentra la acción, ejecuta la acción principal
        $controller->{ACCION_PRINCIPAL}();
    }
}
