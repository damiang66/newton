<?php
// session_start();
// $conexion = new mysqli("localhost", "root", "", "cerveceria");
// $busqueda = mysqli_query ($conexion, "SELECT * FROM articulos_cp");

// $numero = mysqli_num_rows($busqueda);
// include ('nav_cart.php');
// include('modal_cart.php');
include("ventas.php");
$nombre="";
$apellido="";
$dni="";
$mesa="";
?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/estilos.css" media="screen" />
  <title>Brewery</title>
  <script src="https://kit.fontawesome.com/35372467ff.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <div class="clearfix">
      <img src="../img/fondo_rsv.jpg" class="col-12" alt="...">
    </div>
  </nav>
  </header>

  <section>

    <h1>HACE TUS PEDIDOS</h1>
    <h3>Nuestras Cervezas</h3>
    <!-- <h5 class="card-title">Resultado(<?php //echo $numero; ?>)</5> -->








      <!-- <form id="formulario" name="formulario" method="$_POST" action="cart.php">

        <?php //foreach ($busqueda as $resultado) { ?>


          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="card  pedidos">
              <img src=" <?php //echo $resultado['img'] ?>" class="card-img-top" alt="" srcset="">
              <a class="category">
                <?php //echo $resultado['precio']; ?>
              </a>
              <div class="text-content">
                <input name="titulo" type="hidden" id="titulo" value="<?php //echo $resultado["titulo"]; ?>" />
                <input name="precio" type="hidden" id="precio" value="<?php // echo $resultado["precio"]; ?>" />
                <input name="ref" type="hidden" id="ref" value="<?php //echo $resultado["ref"]; ?>" />
                <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php //echo $resultado["titulo"]; ?></5>
                  <p><?php //echo $resultado["descripcion"]; ?></p>
                  <button class="btn btn-primary" type="submit"><i class="fas-shopping-cart"></i>Añadir al carrito</button>
              </div>
            </div>
          </div>
        <?php //} ?>
      </form> -->
         
      <form class="row g-3" method="POST" action="ventas.php" >
        <div class="col-md-6">
          <label for="validationDefault01" class="form-label">Nombre</label>
          <input type="text" name="usuario" value="<?= $nombre ?>"  required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault01" class="form-label">Apellido</label>
          <input type="text" name="apellido" value="<?= $apellido ?>"  required>
        </div>
        <div class="col-md-6">
          <label for="validationDefault03" class="form-label">DNI</label>
          <input type="text" name="dni" value="<?= $dni?>"  required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Mesa</label>
          <input type="text" name="mesa" value="<?= $mesa ?>" required>
        </div>
        <button>Enviar</button>
      
      </form>





  </section>
  <footer>

  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>