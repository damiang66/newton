<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Turnos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!--CSS PERSONAL-->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
            
<?php 
 include ('menu.php');
?>

    <div class="container">   
    <div class="row">
    <form method="post" action="funciones.php" class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nombre</label>
          <input type="text" class="form-control" name ="nombre" id="inputEmail4">
          <h1 class="danger" id="error" style="display:none">Error</h1>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Domicilio</label>
          <input type="text" class="form-control" name="domicilio" id="inputAddress" placeholder="Entre Rios 158 ">
        </div>

        <div class="col-md-6">
          <label for="inputCity" class="form-label">Ciudad</label>
          <input type="text" class="form-control" name="ciudad" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Provincia</label>
          <select id="inputState" class="form-select" name="provincia">
            <option selected>Selecciona una provincia</option>
            <option value="MZ">Mendoza</option>
            <option value="SJ">San Juan</option>
            <option value="SL">San Luis</option>
            <option value="CB">Cordoba</option>
            <option value="LP">La Pampa</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Codigo Postal</label>
          <input type="text" class="form-control" id="inputZip" name="cod_postal">
        </div>

        <div class="col-4">
            <label for="inputState" class="form-label">Especialidad</label>
            <select id="inputState" class="form-select" name="especialidad">
              <option selected>Elige una especialidad</option>
              <option value="clinica">Clinica</option>
              <option value="oftalm">Oftalmología</option>
              <option value="odont">Odontología</option>
              <option value="cardiologia">Cardiología</option>
            </select>
          </div>
        <div class="col-4">
            <label for="inputState" class="form-label">Fecha de consulta</label>
            <input type="date" class="form-control" name="fecha_consulta" id="">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-success">Pedir Turno</button>
          </div>
      </form>
      <div>

      </div>
    </div>
  </div>
</div> 
</div>
</body>
</html>