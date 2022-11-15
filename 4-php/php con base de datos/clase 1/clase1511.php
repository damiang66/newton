<?php
	
	include('conexion.php');
if($con){
	$mostrar = mysqli_query($con,"SELECT * FROM tblusuarios");
}else{
	echo 'error';
}
	
?>
	<table border="2">
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
		echo '<td>'.$datos['activo'].'</td>
			</tr>';
	}

?>
</table>