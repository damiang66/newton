<?php
session_start();

echo "Bienvenido: ".$_SESSION['usuario'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title> 
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>
	<div class="container">
		
		<div class="noticias">
			
        <?php
        $con = mysqli_connect('localhost','root','','blog');
        
        $consulta = mysqli_query($con,"SELECT * FROM noticias WHERE codNoticia=5");

        while($mostrar=mysqli_fetch_array($consulta)){
        ?>	


			<div class="primero">
				<h2><?php echo $mostrar['titulo']; ?></h2>
				<img src="">
				
				<span id="fecha"><?php echo $mostrar['fechaPosteo']; ?></span>
				
				<span id="autor"><?php echo $mostrar['autor']; ?></span>
				<p><?php echo $mostrar['articulo']; ?></p>	
			</div>

			<?php
			}
		   




			 $consulta = mysqli_query($con,"SELECT * FROM noticias ");

        	while($mostrar=mysqli_fetch_array($consulta)){
        	?>	


			<div class="segundo">
				<h2><?php echo $mostrar['titulo']; ?></h2>
				<img src="">
				
				<span id="fecha"><?php echo $mostrar['fechaPosteo']; ?></span>
				
				<span id="autor"><?php echo $mostrar['autor']; ?></span>
				<p><?php echo $mostrar['articulo']; ?></p>	
			</div>

			<?php
			}
		    ?>
		</div>
		<aside>
			<?php
			$consulta = mysqli_query($con,"SELECT * FROM noticias ");

        	while($mostrar=mysqli_fetch_array($consulta)){
        	?>	
        	<ul>
        		<li>
        			<a href=""><?php echo $mostrar['titulo']; ?></a>
        		</li>
        	</ul>
        	

        	<?php
        	}
        	?>
			
		</aside>




	</div>



		
</body>
</html>