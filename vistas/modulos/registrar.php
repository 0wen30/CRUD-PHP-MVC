<?php

session_start();

if (!isset($_SESSION["usuario"])){
	header("Location: http://localhost:81/index.php");
}

?>

<h1>REGISTRAR UN EMPLEADO</h1>

<form method="post" action="">
	
	<input type="text" placeholder="Nombre" name="nombreR" value="jose" required>

	<input type="text" placeholder="Apellido" name="apellidoR" value="jose" required>

	<input type="email" placeholder="Email" name="emailR" value="jose@jose.com" required>

	<input type="text" placeholder="Puesto" name="puestoR" value="jose" required>

	<input type="text" placeholder="Salario" name="salarioR" value="2000" required>

	<input type="submit" value="Registrar">

</form>

<?php

$ingreso = new EmpleadosC();

$ingreso -> nuevoEmpleado();

?>