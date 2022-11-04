
<?php 
session_start();
//ACA EMPIEZA EL CARRITO

if(isset($_SESSION ['carrito']) || isset ($_POST['titulo'])){
    if(isset($_SESSION ['carrito'])){
        $carrito_mio=   $_SESSION['carrito'];
        if (isset ($_POST['titulo'])) {
            $tituto =$_POST['titulo'];
            $precio =$_POST['precio'];
            $ref =$_POST['ref'];
             $cantidad =$_POST['cantidad'];
            $donde = -1;
            if ($donde != -1) {
                $cuanto = $carrito_mio[$donde]['cantidad'] + $cantidad;
                $carrito_mio[$donde]=array("titulo"=>$tituto,"precio"=>$precio,"cantidad"=>$cuanto,"ref"=>$ref);
            }else{
                $carrito_mio[$donde]=array("titulo"=>$tituto,"precio"=>$precio,"cantidad"=>$cuanto,"ref"=>$ref);
            }
        }
    }else{
        $tituto =$_POST['titulo'];
        $precio =$_POST['precio'];
        $cantidad =$_POST['cantidad'];
        $ref =$_POST['ref'];
         $carrito_mio[$donde]=array("titulo"=>$tituto,"precio"=>$precio,"cantidad"=>$cuanto,"ref"=>$ref);
         }
          $_SESSION['carrito']=$carrito_mio;       
}
header("Location:". $_SERVER['HTTP_REFERER']."");



?>