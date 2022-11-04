<?php
session_start();


?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css" media="screen" />
    <title>Pedidios</title>
    <script src="https://kit.fontawesome.com/35372467ff.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="center mt-5">
        <div class="card pt-3">
            <p style="font-weight: bold; color:brown;font-size: 22px">Mi pedido</p>
            <div class="container-fluid p-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">cantidad</th>
                            <th scope="col">Articulo</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="container_card">
                            <?php
                                 if (isset($_SESSION['carrito'])) {
                                    $total = 0;
                                    for ($i = 0; $i <= count($carrito_mio)-1; $i++) {
                                        if (isset($carrito_mio[$i])) {
                                            if ($carrito_mio[$i] != NULL    ) {
                            ?>
                             <?php if ($carrito_mio[$i]['ref'] != 'portes') { ?>
                                 
                          
                            <tr>
                                <th scope="row" style="vertical-align: middle;"><?php echo $carrito_mio [$i]; ?></th>
                                <td>
                                    <img src="../img/ <?php echo $carrito_mio[$i]['ref']?>" alt="" width="100px">
                                </td>
                                <td style="vertical-align: middle;"><?php echo $carrito_mio ['cantidad'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $carrito_mio ['titulo'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $carrito_mio ['precio'] ?>$</td>
                                <td style="vertical-align: middle;"><?php echo $carrito_mio ['precio'] * $carrito_mio [$i]['cantidad']?>$</td>
                            </tr>
                            <?php } ?>

                            <?php 
                            $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                                            }
                                        }
                                    }
                                 }
                            ?>
                        </div>
                    </tbody>
                </table>
                <li class="list-group-item d-flex justify-content-between">
                        <span style="text-align: left; color:chartreuse"><strong>Total en Pesos</strong></span>
                        <strong style="text-align: left; color:chartreuse">$<?php
                        if (isset($_SESSION['carrito'])) {
                            $total=0;
                            for ($i=0; $i < count($carrito_mio)-1 ; $i++) { 
                                if (isset($carrito_mio[$i])) {
                                    if ($carrito_mio[$i] != NULL) {
                                        $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                                    }
                                }
                            }
                        }
                        if (!isset($total)) {
                            $total=0;
                        }else{
                            $total=$total;
                        }
                        echo number_format($total,2,',', '.');
                        ?>
                        $</strong>
                </li> 
            </div>
        </div>
        <a type="button" class="btn btn-success my-4" href="../php/cart.php">Continuar Pedido</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>