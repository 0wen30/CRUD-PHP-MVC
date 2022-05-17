<?php

session_start();

if (!isset($_SESSION["usuario"])){
    header("Location: http://localhost:81/index.php");
}else{
    session_destroy();
}

?>

<h1>Haz cerrado sesión</h1>