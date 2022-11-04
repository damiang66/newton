
<?php

$conexion = mysqli_connect("localhost", "root", "");
$base = mysqli_select_db($conexion, "pruebas");



$listado = mysqli_query($conexion, "SELECT * FROM tblusuarios");
?>

<table border="1" style="border-collapse: collapse;">
	<tr>
		<td>usuario</td>
		<td>nombre</td>
		<td>sexo</td>
		<td>nivel</td>
		<td>email</td>
		<td>telefono</td>
		<td>marca</td>
		<td>compañia</td>
		<td>saldo</td>
		<td>activo</td>
	</tr>
<?php
while ($mostrar = mysqli_fetch_array($listado)) {
?>
<tr>
	<td><?php echo $mostrar ['usuario']?></td>
	<td><?php echo $mostrar ['nombre']?></td>
	<td><?php echo $mostrar ['sexo']?></td>
	<td><?php echo $mostrar ['nivel']?></td>
	<td><?php echo $mostrar ['email']?></td>
	<td><?php echo $mostrar ['telefono']?></td>
	<td><?php echo $mostrar ['marca']?></td>
	<td><?php echo $mostrar ['compañia']?></td>
	<td><?php echo $mostrar ['saldo']?></td>
	<td><?php echo $mostrar ['activo']?></td>
	<td><a href="modificar.php ?id=<?php echo $mostrar ['idx']?>">modificar</a></td>
	<td><a href="eliminar.php ?id= <?php echo $mostrar['idx']?>">eliminar</a></td>
</tr>
<?php


}



?>
</table>
