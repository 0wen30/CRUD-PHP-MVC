<?php

session_start();

if (!isset($_SESSION["usuario"])){
	header("Location: http://localhost:81/index.php");
}

$empC = new EmpleadosC();

$empleados = $empC -> arrayDeEmpleados();


if (isset($_GET['id'])) {
	$empC -> eliminar($_GET['id']);
	header("Location: http://localhost:81/index.php?ruta=empleados");
}

?>

<h1>Empleados</h1>

<table id="t1" border="1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Puesto</th>
			<th>Salario</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($empleados as $e): ?>
		<tr>
			<td><?= $e['nombre'] ?></td>
			<td><?= $e['apellido'] ?></td>
			<td><?= $e['email'] ?></td>
			<td><?= $e['puesto'] ?></td>
			<td>$<?= $e['salario'] ?></td>
			<td><button><a href="<?= 'index.php?ruta=modificar&&id='.$e['id']; ?>">Editar</a></button></td>
			<td><button><a href="<?= 'index.php?ruta=empleados&&id='.$e['id']; ?>">Eliminar</a></button></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>