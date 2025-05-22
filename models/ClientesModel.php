<?php
class Clientes_model {
    private $db;
    private $clientes;

    public function __construct() {
        $this->db = Conectar::conexion();
        $this->clientes = array();
    }

    public function get_clientes() {
        $sql = "SELECT * FROM clientes";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->clientes[] = $row;
        }
        return $this->clientes;
    }

    public function insertar($nombre_empresa, $direccion, $ciudad, $pais, $telefono) {
        $this->db->query("INSERT INTO clientes (nombre_empresa, direccion, ciudad, pais, telefono) 
                          VALUES ('$nombre_empresa', '$direccion', '$ciudad', '$pais', '$telefono')");
    }

    public function modificar($id, $nombre_empresa, $direccion, $ciudad, $pais, $telefono) {
        $this->db->query("UPDATE clientes SET nombre_empresa='$nombre_empresa', direccion='$direccion', 
                          ciudad='$ciudad', pais='$pais', telefono='$telefono' WHERE id_cliente = '$id'");
    }

    public function eliminar($id) {
        $this->db->query("DELETE FROM clientes WHERE id_cliente = '$id'");
    }
    
    public function get_cliente($id) {
    $sql = "SELECT * FROM clientes WHERE id_cliente='$id' LIMIT 1";
    $resultado = $this->db->query($sql);
    return $resultado->fetch_assoc();
}

}
