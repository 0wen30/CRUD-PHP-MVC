<?php

class Modelo{

    static public function rutasModelo($ruta){

        if (in_array($ruta,["ingreso","registrar","salir","empleados","modificar"])) {
            $pagina = "vistas/modulos/".$ruta.".php";
        }else {
            $pagina = "vistas/modulos/ingreso.php";
        }

        return $pagina;
        
    }
}

?>