<?php

class RutasControlador{

    public function plantilla(){
        include('./vistas/plantilla.php');
    }

    public function rutas(){

        if(isset($_GET["ruta"])){
            $ruta = $_GET["ruta"];
        }else{
            $ruta = "index";
        }

        $respuesta = Modelo::rutasModelo($ruta);

        include($respuesta);

    }

}

?>