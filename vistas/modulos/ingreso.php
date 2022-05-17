<?php 

session_start();

if (!isset($_SESSION["usuario"])): 

session_destroy();

?>

<h1>INGRESAR</h1>

<form method="post" action="">
    <input type="text" placeholder="Usuario" name="usuarioI" value="owen" required>
    <input type="password" placeholder="Contraseña" value="santos" name="claveI" required>
    <input type="submit" value="Ingresar">
</form>

<?php else: ?>

<h1>La sesion de <?= $_SESSION["usuario"] ?> esta iniciada. </h1>

<?php endif ?>

<?php

$ingreso = new AdminC();

$ingreso -> ingresoC();

?>