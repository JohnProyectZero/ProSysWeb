<?php
class ProyectosController {
    public function __construct() {
        require_once "models/ProyectosModel.php";
    }

    public function index() {
        $proyectos = new Proyectos_model();
        $data["titulo"] = "Proyectos";
        $data["proyectos"] = $proyectos->get_proyectos();
        require_once "views/proyectos/proyectos.php";
    }

    public function nuevo() {
        $data["titulo"] = "Nuevo Proyecto";
        require_once "views/proyectos/proyectos_nuevo.php";
    }

    public function guarda() {
        $id_usuario = $_POST['id_usuario'];
        $id_cliente = $_POST['id_cliente'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $fecha_fin = $_POST['fecha_fin'];

        $proyectos = new Proyectos_model();
        $proyectos->insertar($id_usuario, $id_cliente, $nombre, $descripcion, $fecha_inicio, $fecha_fin);
        $this->index();
    }

    public function eliminar($id) {
        $proyectos = new Proyectos_model();
        $proyectos->eliminar($id);
        $this->index();
    }
}
