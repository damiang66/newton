

<?php 
	$conex=mysqli_connect("localhost","root","");
	$base=mysqli_select_db($conex,"ventas");
  	 if ($conex==true) {
  		echo "conexion establecida"."<br>";
  	 }else{
  		echo "error al conectar";
     }

     echo "<h3> CONSULTA 1 </h3>"; 
    $mostrar=mysqli_query($conex,"SELECT c.id , c.nombre , c.apellido1 , c.apellido2 FROM pedido p JOIN cliente c ON c.id = p.id  GROUP BY p.id_cliente ORDER BY apellido1, apellido2 ASC");
    ?>
    	<table border=" solid:black">
    		<tr>
    			<td>nombre</td>
    			<td>apellido1</td>
    			<td>apellido2</td>
    		</tr>
    <?php		
       while ($mostrar_nombres=mysqli_fetch_array($mostrar)){
       	?>
       	<tr>
       		<td> <?php echo $mostrar_nombres['nombre']; ?> </td>
       		<td> <?php echo $mostrar_nombres['apellido1']; ?> </td>
       		<td> <?php echo $mostrar_nombres['apellido2']; ?></td>
       	</tr>
       	<?php
       }
        ?>
    	</table>
    	
    <?php
    echo "<h3> CONSULTA 2 </h3>"; 
    $mostrar=mysqli_query($conex,"SELECT `total`, `fecha` FROM `pedido` WHERE fecha BETWEEN '2017-01-01' AND '2017-12.31' AND total> 500");
    ?>
    	<table border=" solid:black">
    		<tr>
    			<td>total</td>
    			<td>fecha</td>
    			
    		</tr>
    <?php		
       while ($mostrar_fechas=mysqli_fetch_array($mostrar)){
       	?>
       	<tr>
       		<td> <?php echo $mostrar_fechas['total']; ?> </td>
       		<td> <?php echo $mostrar_fechas['fecha']; ?> </td>
       		
       	</tr>
       	<?php
       }
        ?>
    	</table>
    <?php
    echo "<h3> CONSULTA 3 </h3>"; 
     $mostrar=mysqli_query($conex,"SELECT cliente.`id`,nombre, apellido1,apellido2,fecha,total FROM pedido RIGHT JOIN cliente ON pedido.`id_cliente`=cliente.`id` ORDER BY apellido1,apellido2,nombre ASC");
    ?>
    	<table border=" solid:black">
    		<tr>
    			<td>nombre</td>
    			<td>apellido1</td>
    			<td>apellido2</td>
    			<td>fecha</td>
    			<td>total</td>
    		</tr>
    <?php		
       while ($mostrar_nombres=mysqli_fetch_array($mostrar)){
       	?>
       	<tr>
       		<td> <?php echo $mostrar_nombres['nombre']; ?> </td>
       		<td> <?php echo $mostrar_nombres['apellido1']; ?> </td>
       		<td> <?php echo $mostrar_nombres['apellido2']; ?></td>
       		<td> <?php echo $mostrar_nombres['fecha']; ?></td>
       		<td> <?php echo $mostrar_nombres['total']; ?></td>
       	</tr>
       	<?php
       }
        ?>
    	</table>

    <?php
    echo "<h3> CONSULTA 4 </h3>"; 
    $mostrar=mysqli_query($conex,"SELECT SUM(total) as suma FROM pedido");
    ?>
    	<table border=" solid:black">
    		<tr>
    			<td>total</td>
    			
    			
    		</tr>
    <?php		
       while ($mostrar_total=mysqli_fetch_array($mostrar)) {
       	?>
       	<tr>
       		<td> <?php echo $mostrar_total['suma']; ?> </td>
       		     		
       	</tr>
       	<?php
       }
        ?>
    	</table>

    <?php
    echo "<h3> CONSULTA 5 </h3>"; 
     $mostrar=mysqli_query($conex,"SELECT cliente.id , nombre, apellido1 , apellido2, COUNT( pedido.id_cliente ) as coso FROM pedido RIGHT JOIN cliente ON pedido.id_cliente = cliente.id GROUP BY apellido1, apellido2, nombre");
    ?>
    	<table border=" solid:black">
    		<tr>
    			<td>nombre</td>
    			<td>apellido1</td>
    			<td>apellido2</td>
    			<td>fecha</td>
    			
    		</tr>
    <?php		
       while ($mostrar_resultado=mysqli_fetch_array($mostrar)) {
       	?>
       	<tr>
       		<td> <?php echo $mostrar_resultado['nombre']; ?> </td>
       		<td> <?php echo $mostrar_resultado['apellido1']; ?> </td>
       		<td> <?php echo $mostrar_resultado['apellido2']; ?></td>
       		<td> <?php echo $mostrar_resultado['fecha']; ?></td>
       		
       	</tr>
       	<?php
       }
        ?>
    	</table>
    
    <!-- echo "<h3> CONSULTA 5 </h3>"; 

    $mostrar=mysqli_query($conex,"SELECT cliente.id , nombre, apellido1 , apellido2, COUNT( pedido.id_cliente ) as coso FROM pedido RIGHT JOIN cliente ON pedido.id_cliente = cliente.id GROUP BY apellido1, apellido2, nombre");
    while ($mostrar_resultado=mysqli_fetch_array($mostrar)) {
    	echo $mostrar_resultado['nombre'].','.$mostrar_resultado['apellido1'].','.$mostrar_resultado['apellido2'].','.$mostrar_resultado['coso']."<br>";
    } -->  
	<!-- ?> -->

