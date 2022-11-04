

<div class="modal fade" id="modal_cart" tobindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mi carrito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div>
                        <div class="p-2">
                            <ul class="list-group md-3">
                                <?php
                                if (isset($_SESSION['carrito'])) {
                                    $total = 0;
                                    for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
                                        if (isset($carrito_mio[$i])) {
                                            if ($carrito_mio[$i] != NULL) {
                                ?>

                                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                    <div class="row col-12">
                                                        <div class="col-6 p-6" style="text-align:left">
                                                            <h6 class="my-6">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; ?></h6>
                                                        </div>
                                                        <div class="col-6 p-6" style="text-align:right">
                                                            <span class="text-muted" style="text-align:right;color:#000000"> <?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']; ?></span>
                                                        </div>
                                                    </div>
                                                </li>
                                <?php
                                                $total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                                            }
                                        }
                                    }
                                } 
                               ?>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <span style="text-align:left;">Total en pesos</span>
                                    <strong style="text-align:left"><?php
                                                                        if (isset($_SESSION['carrito'])) {
                                                                            $total = 0;
                                                                            for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
                                                                                if (isset($carrito_mio[$i])) {
                                                                                    if ($carrito_mio[$i] != NULL    ) {
                                                                                        $total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                        if (!isset($total)) {
                                                                            $total = '0';
                                                                        } else {
                                                                            $total = $total;
                                                                        }
                                                                        echo $total;
                                                                        ?> PESOS</strong>
                                 </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a type="button" class="btn btn-primary" href="../php/borrarcarro.php"> Vaciar carrito</a>
                <a type="button" class="btn btn-success" href="../php/pedido.php"> Continuar pedidos</a>
            </div>
        </div>
    </div>
</div>