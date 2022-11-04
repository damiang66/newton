<?php
if ($_FILES){
    if ($_FILES["cv"]["error"] !=0 ){
        echo "hubo un error al cargar su archivo <br>";
    }else{
        $ext=pathinfo ($_FILES["cv"]["name"], PATHINFO_EXTENSION);
        if($ext !="pdf" && $ext != "doc" && $ext != "docx") {
            echo "El cv debe ser . PDF, .DOC o .DOCX";
        } else { 
            move_uploaded_file($_FILES["cv"]["tmp_name"], "files/cv-". $_POST["nombre"]."-". $_POST["apellido"]."-". $ext);
            echo "archivo subido con exito";
        }
    }
    if ($_FILES["foto"]["error"] !=0 ){
        echo "hubo un error al cargar su archivo <br>";
    }else{
        $ext=pathinfo ($_FILES["foto"]["name"], PATHINFO_EXTENSION);
        if($ext !="jpg" && $ext != "png") {
            echo "La foto debe ser . jpg, o .png ";
        } else { 
            move_uploaded_file($_FILES["foto"]["tmp_name"], "files/foto-". $_POST["nombre"]."-". $_POST["apellido"].".". $ext);
            echo "archivo subido con exito";
        }
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="file.php" method="post" enctype="multipart/form-data">
	    Nombre: <input type="text" name="nombre"> <br>
        Apellido: <input type="text" name="apellido"> <br>
        CV: <input type="file" name="cv"> <br>
        Foto: <input type="file" name="foto"> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
