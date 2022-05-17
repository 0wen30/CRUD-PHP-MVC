<?php

session_start();

if (!isset($_SESSION["usuario"])){
	header("Location: http://localhost:81/index.php");
}

?>

<h1>MODIFICAR UN EMPLEADO</h1>

<form method="post" action="">
	
	<input type="text" placeholder="Nombre" name="nombreE" value="jose" required>

	<input type="text" placeholder="Apellido" name="apellidoE" value="jose" required>

	<input type="email" placeholder="Email" name="emailE" value="jose@jose.com" required>

	<input type="text" placeholder="Puesto" name="puestoE" value="jose" required>

	<input type="text" placeholder="Salario" name="salarioE" value="2000" required>

	<input type="submit" value="Modificar">

</form>

<?php

$ingreso = new EmpleadosC();

$ingreso -> modificar();

?>