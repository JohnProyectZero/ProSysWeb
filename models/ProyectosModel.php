<?php
class Proyectos_model {
    private $db;
    private $proyectos;

    public function __construct() {
        $this->db = Conectar::conexion();
        $this->proyectos = array();
    }

    public function get_proyectos() {
        $sql = "SELECT proyectos.*, clientes.nombre_empresa AS cliente FROM proyectos 
                LEFT JOIN clientes ON proyectos.id_cliente = clientes.id_cliente";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->proyectos[] = $row;
        }
        return $this->proyectos;
    }

    public function insertar($id_usuario, $id_cliente, $nombre, $descripcion, $fecha_inicio, $fecha_fin) {
        $this->db->query("INSERT INTO proyectos (id_usuario, id_cliente, nombre, descripcion, fecha_inicio, fecha_fin) 
                          VALUES ('$id_usuario', '$id_cliente', '$nombre', '$descripcion', '$fecha_inicio', '$fecha_fin')");
    }

    public function modificar($id, $id_usuario, $id_cliente, $nombre, $descripcion, $fecha_inicio, $fecha_fin) {
        $this->db->query("UPDATE proyectos SET 
                          id_usuario='$id_usuario', id_cliente='$id_cliente', nombre='$nombre', 
                          descripcion='$descripcion', fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin'
                          WHERE id_proyecto = '$id'");
    }

    public function eliminar($id) {
        $this->db->query("DELETE FROM proyectos WHERE id_proyecto = '$id'");
    }
}
