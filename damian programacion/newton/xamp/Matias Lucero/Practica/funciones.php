<?php 
echo "<pre>";
var_dump ($_POST);

 if ($_POST["nombre"]==null || $_POST["nombre"] == "") {
     getElementId("error")=style="display:block";
 }
if ($_POST["apellido"]==null || $_POST["apellido"] == ""){
    getElementId("error")=style="display:block";
}
if ($_POST["domicilio"]
?>