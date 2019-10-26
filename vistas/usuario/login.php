<?php
require '../../config/Conexion.php';
require 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
  </head>
  <body style="background: url(../../public/img/fondo.jpg) no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-position: center center;
    height: 800px; 
    background-position: fixed;">

<br> <br> <br> <br>
 
  <div class="container bg-light mt-5 mb-5 w-50 rounded">
    <div class="row">
        <div class="col mx-5 my-5">

        <h1><i class="fas fa-sign-in-alt"></i></i>  Iniciar sesión</h1>
        <br>
        <a class="btn btn-success btn-sm" href="Registro.php" role="button">Regístrate</a>
<hr>
            <form action="../../modelos/admin/Usuario.php?op=ingreso" method="POST">
           
            <div class="form-group w-75">
              <label for="">Correo</label>
              <input type="text"
                class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Ingrese su correo" required>
              <small id="helpId" class="form-text text-muted"></small>
            </div>

            <div class="form-group w-75">
              <label for="">Contraseña</label>
              <input type="password"
                class="form-control" name="clave" id="clave" aria-describedby="helpId" placeholder="Ingrese su contraseña" required>
              <small id="helpId" class="form-text text-muted"></small>
            </div>
            <input class="btn btn-secondary " type="submit" value="Iniciar sesión">
         </form>
            
        </div>            
     </div>
  </div>
  <br> <br> <br> <br>  <br> <br> <br> <br> <br> <br> <br>
         <?php
require 'footer.php';
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
