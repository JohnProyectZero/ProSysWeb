<?php

class ClientesController {

    public function __construct() {
        require_once "models/ClientesModel.php";
    }

    public function index() {
        $clientes = new Clientes_model();
        $data["titulo"] = "Clientes";
        $data["clientes"] = $clientes->get_clientes();
        require_once "views/clientes/clientes.php";
    }

    public function nuevo() {
        $data["titulo"] = "Nuevo Cliente";
        require_once "views/clientes/clientes_nuevo.php";
    }

    public function guarda() {
        $nombre_empresa = $_POST['nombre_empresa'];
        $direccion = $_POST['direccion'];
        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $telefono = $_POST['telefono'];

        $clientes = new Clientes_model();
        $clientes->insertar($nombre_empresa, $direccion, $ciudad, $pais, $telefono);
        $this->index();
    }

    public function eliminar($id) {
        $clientes = new Clientes_model();
        $clientes->eliminar($id);
        $this->index();
    }

    public function modificar($id) {
        $clientes = new Clientes_model();
        
        $data["cliente"] = $clientes->get_cliente($id);
        $data["titulo"] = "Modificar Cliente";
        require_once "views/clientes/clientes_modifica.php";
    }

    public function actualizar() {
        $id = $_POST["id_cliente"];
        $nombre_empresa = $_POST['nombre_empresa'];
        $direccion = $_POST['direccion'];
        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $telefono = $_POST['telefono'];

        $clientes = new Clientes_model();
        $clientes->modificar($id, $nombre_empresa, $direccion, $ciudad, $pais, $telefono);
        $this->index();
    }
}
