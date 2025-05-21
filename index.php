<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <title></title>
        <style>
            
        </style>
    </head>
    <body>
        <h1>HolaMundo</h1>
        <?php
        require_once "config/config.php";
        require_once "core/routes.php";
        require_once "config/database.php";
        require_once "controllers/ProyectController.php";
        require_once "controllers/CustomerController.php";
        //La función isset en PHP es una herramienta útil para verificar si una 
        //variable existe y no es NULL.
        // c significa el controlador y a significa la accion que realiza el usuario
        // c y a trabajan juntos.
        if (isset($_GET['c'])) {//si existe el parametro "c"(controlador) 
            // El método cargarControlador esta en el archivo routes.php
            $controlador = cargarControlador($_GET['c']); //se crea el controlador
            if (isset($_GET['a'])) {//sino existe a(accion) lo crea
                if (isset($_GET['id'])) {
                    cargarAccion($controlador, $_GET['a'], $_GET['id']); //para modificar o eliminar
                } else {//existe "id" cargara la accion
                    cargarAccion($controlador, $_GET['a']);//para nuevo
                }
            } else { //si no existe accion 'a'
                cargarAccion($controlador, ACCION_PRINCIPAL);
            }
        } else {//sino se tiene c en la url se ejecuta el index		
            $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
            $accionTmp = ACCION_PRINCIPAL;
            $controlador->$accionTmp();
        }
        ?>
    </body>
</html>
