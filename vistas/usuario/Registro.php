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

    <title>Registro</title>
    
    <!-- <link rel="stylesheet" href="css/estilos.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="icon" type="image/png"href="favicon/icon.ico"/>

  </head>
  <body style="background: url(../../public/img/fondoo.jpg) no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-position: center center;
    height: 800px; 
    background-position: fixed;">

<br> <br> <br> <br>
 
  <div class="container bg-light mt-5 mb-5 w-50 rounded">
    <div class="row">
        <div class="col mx-5 my-5">
            
        <h1><i class="fas fa-user-plus"></i> Registro</h1>
        <br>
        <a class="btn btn-secondary btn-sm" href="ciudad.php" role="button">Agregar ciudad</a>
        <hr>
            <form action="../../modelos/admin/Usuario.php?op=registro" method="POST">

            <div class="form-group w-75">
              <label for="">Ciudad</label>
              <select class="form-control" name="ciudad" id="">
            <?php
            $consulta="SELECT * FROM ciudad";
            $resultado=mysqli_query($conexion, $consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <option value="<?php echo $mostrar['idciudad'] ?>"><?php echo $mostrar['nombre'] ?></option>
            <?php
            }
            ?>
            </select>
            <small id="helpId" class="form-text text-muted"> Seleccione su ciudad</small>
            </div>
          
            <div class="form-group w-75">
              <label for="">Nombre</label>
              <input type="text"
                class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Ingrese su nombre" required>
              <small id="helpId" class="form-text text-muted"> </small>
            </div>
            <div class="form-group w-75">
              <label for="">Apellido</label>
              <input type="text"
                class="form-control" name="apellido" id="" aria-describedby="helpId" placeholder="Ingrese su apellido" required>
              <small id="helpId" class="form-text text-muted"></small>
            </div>
            <div class="form-group w-75">
              <label for="">Cédula</label>
              <input type="text"
                class="form-control" name="cedula" id="" aria-describedby="helpId" placeholder="Ingrese su numero de cédula" required>
              <small id="helpId" class="form-text text-muted"></small>
            </div>
            <div class="form-group w-75">
              <label for="">Teléfono</label>
              <input type="text"
                class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="Ingrese su numero de teléfono" required>
              <small id="helpId" class="form-text text-muted"></small>
            </div>
            <div class="form-group w-75">
              <label for="">Correo</label>
              <input type="email"
                class="form-control" name="correo" id="" aria-describedby="helpId" placeholder="Ingrese su correo" required>
              <small id="helpId" class="form-text text-muted"></small>
            </div>
            <div class="form-group w-75">
              <label for="">Contraseña</label>
              <input type="text"
                class="form-control" name="clave" id="" aria-describedby="helpId" placeholder="Ingrese su contraseña" required>
              <small id="helpId" class="form-text text-muted"></small>
            </div>

            <button class="btn btn-outline-success" type="submit">Agregar</button>
            <a class="btn btn-outline-danger" href="login.php" role="button">Cancelar</a>

           
         
         
        </form>
        </div>            
     </div>
  </div>
  <br> <br> <br> <br>  
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