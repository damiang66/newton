
	<style type="text/css">
		.principal nav{
			text-align: center;
			background-color: steelblue;
		}
		.principal nav a{
			color: white;
			font-size: 20px;
			margin-left: 50px;
			padding: 30px;
		}
		.principal{
			width: 700px;
			margin: auto;
		}
		.titulo{
			height: 35px;
			background-color: steelblue;
			color: black;
			text-align: center;
		}
		.autor{
			width: 700px;
			height: 20px;
			font-size: 15px;
			margin: 10px;
		}
		.autor #fecha{
			float: left;
		}
		.autor #autor{
			float: right;
		}
		.texto{
			width: 700px;
			position: relative;
		}
		.texto p{
			margin: 15px;
			border: 1px solid block;
			float: left;
		}
		.imagenuno {
			width: 700px;
		}
		.imagenuno img{
			width: 700px;
			height: 400px;
		}
		.texto{
			text-align: left;
			display: flex;
			top:10px;
		}
		.texto img{
			width: 400px;
			left: 100px;
			float: left;
		}
		
	</style>

<div class="principal">
		<nav>
			<a href="listado.php">noticia</a>
			<a href="altablog.php">agregar</a>
			<a href="suscripcion.php">suscribirse</a>
		</nav>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$base = "blog";


$conexion = mysqli_connect($host,$user,$pass,$base)or die(mysqli_error());

$consulta = mysqli_query($conexion, "SELECT * from noticia ORDER BY codNoticia DESC");

while ($mostrar = mysqli_fetch_array($consulta)) {
	?>
	
		<div class="titulo">
			<h2>
				<?php echo $mostrar['titulo']. "<br>"; ?> 
			</h2>
		</div>
		<div class="autor">
			<label id="fecha"><?php echo $mostrar['fechaPosteo']?></label>
			<label id="autor">autor: <?php echo $mostrar['autor']?></label>
		</div>
		<div class="imagenuno">
			<img src="<?php echo $mostrar['imagenuno']?>">
		</div>
		

		<div class="texto">
			<p><?php echo $mostrar['articulo']?></p>
			<img src="<?php echo $mostrar['imagendos']?>">
		</div>

<a href="modificar.php?id=<?php echo $mostrar['codNoticia'] ?>">Modificar</a>
<?php
	
}

?>
</div>