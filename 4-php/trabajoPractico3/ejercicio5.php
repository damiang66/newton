
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">
    <input type="text" name="n1">
    <select name="opcion">
    <option value ="0">Sumar</option>
    <option value ="1">Restar</option>
    <option value ="2">Multiplicar</option>
    <option value ="3">Dividir</option>
    </select>
   <input type="text"name="n2"></br>
  <button type="submit"name = "accion">calcular</button>
  </form>

</body>
</html>
<?php
if(isset($_REQUEST['accion'])){
    $opcion=$_POST['opcion'];
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    switch($opcion){
        case 0:
            echo "la suma es: ".$n1+$n2;
            break;
        case 1:
            echo "la resta es: ".$n1-$n2;
            break;
        case 2:
            echo "la multiplicacion es: ".$n1*$n2;
            break;
        case 3:
            echo "la division es: ".$n1/$n2;
            break;
       
    }


}
?>
