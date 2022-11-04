<?php

include 'conexion.php';

$consulta= mysqli_query($con, "SELECT cliente.id,nombre, apellido1,apellido2
FROM pedido JOIN cliente ON
pedido.id_cliente=cliente.id
GROUP BY id_cliente
ORDER BY apellido1 ASC");

?>

<table border>
	<tr>
		<td>
			ID
		</td>
		<td>
			NOMBRE
		</td>	
		<td>
			APELLIDO1
		</td>
		<td>
			APELLIDO2
		</td>
	</tr>

<?php


while ($mostrar_consulta= mysqli_fetch_array($consulta)) {
?>
<tr>
		<td>
			<?php
	echo $mostrar_consulta['id'];?>
		</td>>
		<td>
			<?php echo $mostrar_consulta['nombre'];?>		
		</td>
		<td>
			<?php echo $mostrar_consulta['apellido1'];?>		
		</td>
		<td>
			<?php echo $mostrar_consulta['apellido2'];?>	
		</td>
</tr>	

<?php
}
?>
	
	
</table>

<h2>Ejercicio 2</h2>


<?php


$consulta= mysqli_query($con, "SELECT * FROM pedido 
WHERE total>500 and fecha LIKE '%2017%' ");

?>

<table border>
	<tr>
		<td>
			PEDIDO
		</td>
		<td>
			AÑO
		</td>	
		<td>
			TOTAL
		</td>
		
	</tr>

<?php
while ($mostrar_consulta= mysqli_fetch_array($consulta)) {
?>
<tr>
		<td>
			<?php
	echo $mostrar_consulta['id'];?>
		</td>>
		<td>
			<?php echo $mostrar_consulta['fecha'];?>		
		</td>
		<td>
			<?php echo $mostrar_consulta['total'];?>		
		</td>
		
</tr>	

<?php
}
?>
</table>


<h2>Ejercicio 3</h2>


<?php


$consulta= mysqli_query($con, "SELECT cliente.id,nombre, apellido1,apellido2,fecha,total
FROM pedido RIGHT JOIN cliente ON
pedido.id_cliente=cliente.id
ORDER BY apellido1,apellido2,nombre ASC");

?>

<table border>
	<tr>
		<td>
			ID
		</td>
		<td>
			NOMBRE
		</td>	
		<td>
			APELLIDO1
		</td>
		<td>
			APELLIDO2
		</td>
		<td>
			FECHA
		</td>
		<td>
			TOTAL
		</td>
	</tr>

<?php


while ($mostrar_consulta= mysqli_fetch_array($consulta)) {
?>
<tr>
		<td>
			<?php
	echo $mostrar_consulta['id'];?>
		</td>>
		<td>
			<?php echo $mostrar_consulta['nombre'];?>		
		</td>
		<td>
			<?php echo $mostrar_consulta['apellido1'];?>		
		</td>
		<td>
			<?php echo $mostrar_consulta['apellido2'];?>	
		</td>
		<td>
			<?php echo $mostrar_consulta['fecha'];?>	
		</td>
		<td>
			<?php echo $mostrar_consulta['total'];?>	
		</td>
</tr>	

<?php
}
?>
	
</table>


<h2>Ejercicio 4</h2>


<?php


$consulta= mysqli_query($con, "SELECT SUM(total),COUNT(*) FROM pedido");

?>

<table border>
	<tr>
		<td>
			SUMA
		</td>
		<td>
			COUNT
		</td>	
				
	</tr>

<?php
while ($mostrar_consulta= mysqli_fetch_array($consulta)) {
?>
<tr>
		<td>
			<?php
	echo $mostrar_consulta['SUM(total)'];?>
		</td>>
		<td>
			<?php echo $mostrar_consulta['COUNT(*)'];?>		
		</td>
		
		
</tr>	

<?php
}
?>
</table>


<h2>Ejercicio 5</h2>


<?php


$consulta= mysqli_query($con, "SELECT cliente.id, cliente.nombre, cliente.apellido1, COUNT(total) FROM pedido RIGHT JOIN cliente ON pedido.id=cliente.id GROUP BY cliente.id");

?>

<table border>
	<tr>
		<td>
			ID
		</td>
		<td>
			NOMBRE
		</td>	
		<td>
			APELLIDO1
		</td>
		<td>
			APELLIDO2
		</td>
		<td>
			FECHA
		</td>
		<td>
			TOTAL
		</td>
	</tr>

<?php


while ($mostrar_consulta= mysqli_fetch_array($consulta)) {
?>
<tr>
		<td>
			<?php
	echo $mostrar_consulta['id'];?>
		</td>>
		<td>
			<?php echo $mostrar_consulta['nombre'];?>		
		</td>
		<td>
			<?php echo $mostrar_consulta['apellido1'];?>		
		</td>
		<td>
			<?php echo $mostrar_consulta['apellido2'];?>	
		</td>
		<td>
			<?php echo $mostrar_consulta['fecha'];?>	
		</td>
		<td>
			<?php echo $mostrar_consulta['COUNT(*)'];?>	
		</td>
</tr>	

<?php
}
?>
	
</table>

