<?php

class EmpleadosC{

    public function nuevoEmpleado(){
        if(isset($_POST['nombreR'])||isset($_POST['apellidoR'])||isset($_POST['emailR'])||isset($_POST['puestoR'])||isset($_POST['salarioR'])){
            empleadosM::agregarEmpleado($_POST['nombreR'],$_POST['apellidoR'],$_POST['emailR'],$_POST['puestoR'],$_POST['salarioR']);
            header("Location: http://localhost:81/index.php?ruta=empleados");
        }
    }

    public function arrayDeEmpleados(){
        return empleadosM::mostrarEmpleados();
    }

    public function eliminar($id){
        empleadosM::eliminarEmpleado($id);
    }

    public function modificar(){
        if(isset($_POST['nombreE'])||isset($_POST['apellidoE'])||isset($_POST['emailE'])||isset($_POST['puestoE'])||isset($_POST['salarioE'])){
            empleadosM::editarEmpleado($_GET['id'],$_POST['nombreE'],$_POST['apellidoE'],$_POST['emailE'],$_POST['puestoE'],$_POST['salarioE']);
            header("Location: http://localhost:81/index.php?ruta=empleados");
        }
    }

}

?>