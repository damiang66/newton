<!DOCTYPE html>
<html lang="es">
<head>
  <?php include_once "partials/head.php"; ?>
  <?php 
  $user= "<script> document.write(user) </script>";
  $titulo= "INICIO";
  ?>

</head>
<body>
<div class="container d-none col-8" id="area-juego">
    <div class="row mt-3">
      <div class="card d-flex justify-content-center text-center col">
        <div class="row justify-content-end">
          <label class="col-3 text-end">Usuario: </label> <label class="col-4 fw-bold text-start" id="userName"></label> 
          <label class="col-3 text-end">Puntaje: </label> <label class="col-2 fw-bold text-start" id="puntaje"></label> 
        </div>
        <div class="card px-4 w-100"  style="width: 18rem;font-family: 'Architects Daughter', cursive;">
           <div class="cardImg" id="cardImg">
           </div>
           <h2 class="card-title bg-success text-light shadow rounded puntajeFinal" id="puntajeFinal"></h2>

            <div class="card-body w-100" id="card-body">
              <input class="d-none" id="palabra" disabled> <!--agrega value-->
              <div class="d-none" id="sonidos"></div>
              <h2 class="card-title bg-dark text-light shadow rounded" id="titulo" style="letter-spacing:2px;"></h2> <!--agrega titlo-->
              <label for="exampleFormControlInput1" class="form-label" id="labelTexto"></label>
              <input class="form-control" type="text" id="texto" aria-label="default input example" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" onfocus="cambiarNombre()" style="letter-spacing:2px;">
              <h3 id="resultado"></h3>
              <input id="validar" type="button" class="btn btn-primary button shadow" value="VALIDAR" onclick="validar()">
              <button type="button" id="nextBtn" class="btn btn-success d-none" onclick="crearJuego()"><i class="bi bi-forward"></i></button>
            </div>
        </div>
      </div>
    
    </div>
   
  </div>

  <!-- MODALS DE INICIO-->
  <div class="container col-8">
    <div class="row mt-3">
      <div class="modal fade text-center" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">¡HOLA, GRACIAS POR VENIR!</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/hi.jpg" alt="" width="150">
              <h4>Mi nombre es Mike. ¿Cuál es tu nombre?</h4>
            
              <input class='form-control' type='text' id='user' aria-label='default input example' onKeyUp='document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()' onfocus='cambiarNombre()' style='letter-spacing:2px;'>
               
              </div>
            <div class="modal-footer">
              <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">CONTINUAR</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade text-center" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel2">ELEGÍ UN JUEGO PARA COMENZAR</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-success mx-1"  data-bs-dismiss="modal" onclick="elegirJuego('frutas-nombres')">NOMBRAR LAS FRUTAS</button>
                <button type="button" class="btn btn-success mx-1"  data-bs-dismiss="modal" onclick="elegirJuego('numeros-cantidades')">CONTAR NUMEROS</button>
                <button type="button" class="btn btn-success mx-1"  data-bs-dismiss="modal" onclick="elegirJuego('numeros-nombres')">NOMBRAR LOS NUMEROS</button>
              </div>
            </div>
          <!-- <div class="modal-footer">
              <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
            </div>-->
          </div>
        </div>
      </div>
      <img src="img/inicio.jpg" alt="" class="w-60" id="img-inicio">
      <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button" id="btn-comenzar">TOCA PARA COMENZAR</a>
    </div>
  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>