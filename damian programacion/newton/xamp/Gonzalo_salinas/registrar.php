<?php

	$conex = mysqli_connect("localhost","root","","pasteleria_pagina");
		if ($conex) {
			echo "conexion exitosa";
		}else {
			echo "conection no lograda";
		}
	if (isset($_POST['register'])) {
		if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$fechareg = date("d/m/y");
			$consulta = "INSERT INTO registro(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
			$resulado = mysqli_query($conex,$consulta);
			if ($resulado) {
				?>
				<h3 class="cartel"> ¡Te has registrado correctamente!</h3>
				<?php
			}else{
				?>
				<h3 class="cartel1"> ¡Ha ocurrido un error!</h3>
				<?php
			}
		}else{
			?>
			<h3 class="cartel1"> ¡Por favor complete los datos!</h3>
			<?php
		}
	}
		
?>