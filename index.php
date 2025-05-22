<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistema MVC</title>
</head>
<body>
    <?php
    require_once "config/config.php";
    require_once "core/routes.php";
    require_once "config/database.php";
    
    if (isset($_GET['c'])) {
        $controlador = cargarControlador($_GET['c']);
        isset($_GET['a']) 
            ? cargarAccion($controlador, $_GET['a'], $_GET['id'] ?? null) 
            : cargarAccion($controlador, ACCION_PRINCIPAL);
    } else {
        $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
        $accionTmp = ACCION_PRINCIPAL;
        $controlador->$accionTmp();
    }
    ?>
    <br>
    
    <a href="cerrar_sesion.php" class="btn btn-secondary">Cerrar Sesión</a>
</body>
</html>
