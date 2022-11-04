<link rel="stylesheet" href="../css/style.css">

<?php
    $con = mysqli_connect('localhost','root','','calzadosilvia');   

    $consulta = mysqli_query($con,"SELECT * FROM productos");

    while($mostrar=mysqli_fetch_array($consulta)){
?>
   <div class="form_carga">
   <form action="modificar.php" method="post">
    <h3>ID</h3>
    <input type="text" name="id" value="<?php echo $mostrar['id']?>" readonly>
    
    <h3>TIPO</h3>
    <input type="text" name="tipo" value="<?php echo $mostrar['tipo']?>" readonly>
    <h3>DESCRIPCIÓN</h3>
    <input type="text" name="descripcion" value="<?php echo $mostrar['descripcion']?>" readonly>
    <h3>TALLES</h3>
    <input type="text" name="talles" value="<?php echo $mostrar['talles']?>" readonly>
    <h3>IMAGEN</h3>
    <input type="text" name="imagen" value="<?php echo $mostrar['imagenes']?>" readonly>
    <h3>ARCHIVO</h3>
    <input type="file" name="img">
    <h3>PRECIO</h3>
    <input type="text" name="precio" value="<?php echo $mostrar['precio']?>">

    <input type="submit" name="enviar">
</form>
</div>
<?php
    }

?>
  

<?php

    if(isset($_POST['enviar'])){
        
        $id =$_POST['id'];
        $imagen = "../images/".$_POST['img'];
        $precio = $_POST['precio'];
       
        $modificar = mysqli_query($con,"UPDATE productos SET imagenes='$imagen', precio='$precio' where id='$id'");

        if($modificar==true){
            echo 'modificado con exito' ;
        }
       
    }

?>

