<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

<h2>LISTADO GENERAL</h2>

<a href="agregar.php" class="btn btn-primary">Agregar Registro</a>

<?php
	
	include('conexion.php');

	$mostrar = mysqli_query($con,"SELECT * FROM tblusuarios");
?>
	<table border="1" class="table">
	<tr>
		<th>ID</th>
		<th>USUARIO</th>
		<th>NOMBRE</th>
		<th>SEXO</th>
		<th>NIVEL</th>
		<th>CORREO</th>
		<th>MARCA</th>
		<th>COMPAÑIA</th>
		<th>SALDO</th>
		<th>ACTIVO</th>
	</tr>

<?php
	while($datos = mysqli_fetch_array($mostrar)){
		echo '<tr>
				<td>'.$datos['idx'].'</td>';
		echo '<td>'.$datos['usuario'].'</td>';
		echo '<td>'.$datos['nombre'].'</td>';
		echo '<td>'.$datos['sexo'].'</td>';
		echo '<td>'.$datos['nivel'].'</td>';
		echo '<td>'.$datos['email'].'</td>';
		echo '<td>'.$datos['marca'].'</td>';
		echo '<td>'.$datos['compania'].'</td>';
		echo '<td>'.$datos['saldo'].'</td>';
		echo '<td>'.$datos['activo'].'</td>';
		?>
		<td>
			<a href="modificar.php?id=<?php echo $datos['idx'];?>" class="btn btn-success">Editar</a>
		</td>
		<td>
			<a href="eliminar.php?id=<?php echo $datos['idx'];?>" class="btn btn-danger">Eliminar</a>
		</td>
			</tr>
	<?php
	}

?>
</table>