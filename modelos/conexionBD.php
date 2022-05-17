<?php

class Conexion{

    public function getConexion(){
        $dsn = 'mysql:dbname=administracion;host=localhost';
        $usuario = 'root';
        $contraseña = '';
        $conn = new PDO($dsn,$usuario,$contraseña);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }

}

?>