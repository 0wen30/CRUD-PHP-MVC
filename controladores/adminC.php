<?php

class AdminC{

    public function ingresoC(){
        if(isset($_POST['usuarioI'])||isset($_POST['claveI'])){
            $usuario = AdminM::usuarioLoguedo($_POST['usuarioI'],$_POST['claveI']);
            session_start();
            $_SESSION["usuario"] = $usuario;
            header("Location: http://localhost:81/index.php?ruta=empleados");
        }
    }

}

?>