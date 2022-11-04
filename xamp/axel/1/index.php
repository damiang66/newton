<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/5e9d7f01f0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/estilocss.css">
</head>
<body>
	<header>
		<nav>
			<h1 class="t">TUTSY</h1>
			<a href=""><i class="fab fa-facebook"></i></a>
			<a href=""><i class="fab fa-instagram"></i></a>
			<a href=""><i class="fas fa-bell"></i></a>
		</nav>
		<img src="img/pizza.jpg">
		<div class="cuadro">
			<div class="btn btn-secondary">MENU DEL DIA</div>
			<div class="btn btn-secondary">PROMO</div>
			<div class="btn btn-secondary">ENVIOS</div>
		</div>
	</header>
		<main>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/pizza-pollo.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/peperoni.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/pizza-m.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <section class="titulo">
				<div class="v"></div>
				<div>MENU PIZZA</div>
				<div class="r"></div>
	</section>
</div>
		<section class="menu">
			<?php

			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$base = 'pizzeria';

			$conexion = mysqli_connect($host, $user, $pass, $base) or die(mysqli_error());
			$consulta = mysqli_query($conexion, "SELECT * FROM menu");
			while ($mostrar = mysqli_fetch_array($consulta)){
			?>
			<div class="model">
				<div class="modelo1">
					<h3><?php echo $mostrar['nombre'];?></h3>
					<div class="descripcion">
						<p><?php echo $mostrar['descripcion'];?></p>
					</div>
				</div>
					<div class="precio">
					<?php echo $mostrar['precio'];?>
					</div>
				
			</div>
		<?php
			}
		?>
				
			</section>
			<section class="ubicacion">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13400.75448316813!2d-68.84664275271437!3d-32.893180904468345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e09179799a889%3A0x833224bbff8a46cf!2sTutsy%20Pizza!5e0!3m2!1ses-419!2sar!4v1642599383558!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

					<div class="formulario">
					<form action="registro.php" method="post">
						<h4>Nombre</h4>
						<input class="f" type="text" name="nombre" placeholder="nombre">
						<h4>Mail</h4>
						<input class="f" type="mail" name="mail" placeholder="mail">
						<h4>Telefono</h4>
						<input type="text" name="telefono" placeholder="Telefono">
						<h4>Consulta</h4>
						<textarea class="f" name="consulta"></textarea>
						<input class="b" type="submit" name="enviar">
					</form>
					</div>
			</section>
		</main>

		<footer class="a">
			<div class="direccion">
				<p>calle falsa 123</p>
			</div>
			<div class="derechos">
				<ul>
					<li>derechos reservados</li>
					<li>Axel Figueroa</li>
					<li>final fullstack</li>
				</ul>
			</div>
		</footer>
	</body>

	<a href="https://api.whatsapp.com/send?phone=5492612420125&text=Cual es su consulta?" class="float" target="_blank">
	<i class="fa fa-whatsapp my-float"></i></a>
</html>