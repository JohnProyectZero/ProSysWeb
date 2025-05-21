<?php

class Vehiculos_model {

    //definir atributos:
    private $db;
    private $vehiculos;

    public function __construct() {
        //usando atributo db para trabajar con el método conexión 
        //que esta en la carpeta config/database.php
        $this->db = Conectar::conexion();
        $this->vehiculos = array();
    }

    public function get_vehiculos() {
        $sql = "SELECT * FROM vehiculos";
        $resultado = $this->db->query($sql);
        //La función fetch_assoc() en PHP se utiliza para obtener una fila 
        //de resultados de una consulta SQL como un arreglo asociativo, donde 
        //cada columna de la fila se convierte en una clave del arreglo, con 
        //el nombre de la columna como clave y el valor de la celda como el 
        //valor correspondiente.
        while ($row = $resultado->fetch_assoc()) {
            $this->vehiculos[] = $row;
        }
        return $this->vehiculos;
    }

    public function insertar($placa, $marca, $modelo, $anio, $color) {
        $resultado = $this->db->query("INSERT INTO vehiculos (placa, marca, modelo, anio, color) VALUES ('$placa', '$marca', '$modelo', '$anio', '$color')");
    }

    public function modificar($id, $placa, $marca, $modelo, $anio, $color) {

        $resultado = $this->db->query("UPDATE vehiculos SET placa='$placa', marca='$marca', modelo='$modelo', anio='$anio', color='$color' WHERE id = '$id'");
    }

    public function eliminar($id) {

        $resultado = $this->db->query("DELETE FROM vehiculos WHERE id = '$id'");
    }

    public function get_vehiculo($id) {
        $sql = "SELECT * FROM vehiculos WHERE id='$id' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();

        return $row;
    }
}
