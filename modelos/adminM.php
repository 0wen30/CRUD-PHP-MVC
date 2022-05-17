<?php

class AdminM{

    static public function usuarioLoguedo($usuario,$clave){
        $bd = new Conexion();
        $conn = $bd->getConexion();
        $sentencia = $conn->prepare("SELECT nombre FROM `usuarios` WHERE nombre=:usuario AND clave = :clave ");
        $sentencia->bindParam(':usuario', $usuario, PDO::PARAM_STR, 50);
        $sentencia->bindParam(':clave', $clave, PDO::PARAM_STR, 255);
        $sentencia->execute();
        return $sentencia->fetchColumn();
    }

}

?>