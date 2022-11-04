<?php
if (isset($_SESSION['carrito'])) {
    $carrito_mio=$_SESSION['carrito'];
}

//contamos nuestro carrito
if (isset($_SESSION['carrito'])){
    for ($i=0; $i <= count($carrito_mio) -1 ; $i ++) { 
        if (isset($carrito_mio[$i])) {
            if ($carrito_mio [$i] != NULL) {
                if (!isset($carrito_mio['cantidad'])) {
                    $carrito_mio['cantidad'] = '0';
                }else{
                    $carrito_mio['cantidad'] = $carrito_mio ['cantidad'];
                }
            $total_cantidad = $carrito_mio['cantidad'];
            $total_cantidad++;
            if (!isset($totalcantidad)) {
                $totalcantidad= '0';
            }else{
                $totalcantidad = $totalcantidad;
            }
            $totalcantidad += $total_cantidad;
            }
        }
    }
}

//declaracion de variables
if (!isset($totalcantidad)) {
    $totalcantidad = "";
}else{
    $totalcantidad = $totalcantidad;
}

?>
 <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red; cursor:pointer; "><i class="fas fa-shopping-cart "></i><?php echo $totalcantidad; ?></a>
  </li>
</ul>
    </nav>


<!-- <nav class="navbar nabvar-expand-lg navbar-dark" style="background-color:#112956;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mi tienda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
          
                </li>
            </ul>
        </div>
    </div>
</nav> -->