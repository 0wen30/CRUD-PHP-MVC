<?php

class EmpleadosM{

    static public function agregarEmpleado($nombre,$apellido,$email,$puesto,$salario){
        $bd = new Conexion();
        $conn = $bd->getConexion();
        $sentencia = $conn->prepare("INSERT INTO empleados(nombre,apellido,email,puesto,salario) values(:n,:a,:e,:p,:s)");
        $sentencia->bindParam(':n', $nombre, PDO::PARAM_STR, 100);
        $sentencia->bindParam(':a', $apellido, PDO::PARAM_STR, 100);
        $sentencia->bindParam(':e', $email, PDO::PARAM_STR, 100);
        $sentencia->bindParam(':p', $puesto, PDO::PARAM_STR, 100);
        $sentencia->bindParam(':s', $salario, PDO::PARAM_STR, 100);
        $sentencia->execute();
    }

    static public function mostrarEmpleados(){
        $bd = new Conexion();
        $conn = $bd->getConexion();
        $sentencia = $conn->prepare("SELECT * FROM empleados");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    static public function editarEmpleado($id,$nombre,$apellido,$email,$puesto,$salario){
        $bd = new Conexion();
        $conn = $bd->getConexion();
        $sentencia = $conn->prepare("UPDATE empleados SET nombre=:n,apellido=:a,email=:e,puesto=:p,salario=:s WHERE id = :id");
        $sentencia->bindParam(':n', $nombre, PDO::PARAM_STR, 100);
        $sentencia->bindParam(':a', $apellido, PDO::PARAM_STR, 100);
        $sentencia->bindParam(':e', $email, PDO::PARAM_STR, 100);
        $sentencia->bindParam(':p', $puesto, PDO::PARAM_STR, 100);
        $sentencia->bindParam(':s', $salario, PDO::PARAM_STR, 100);
        $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
        $sentencia->execute();
    }

    static public function eliminarEmpleado($id){
        $bd = new Conexion();
        $conn = $bd->getConexion();
        $sentencia = $conn->prepare("DELETE FROM empleados WHERE id = :id");
        $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
        $sentencia->execute();
    }

}

?>