<?php

class Conectar {

    public static function conexion() {
        $conexion = new mysqli("localhost", "root", "", "proyection");

        // Verificamos error en la conexión.
        if ($conexion->connect_error) {
            
            die("La conexión falló: " . $conexion->connect_error);
        } else {
            
            echo "Conexión exitosa a la base de datos.";
        }
        return $conexion;
    }
}

// Probamos la conexión
Conectar::conexion();