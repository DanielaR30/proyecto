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

    <title>Ciudad</title>
  </head>
  <body style="background: url(../../public/img/fondoo.jpg) no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-position: center center;
    height: 800px; 
    background-position: fixed;">

<br> <br> <br> <br>

<div class="row">
  <div class="col-lg-3 "></div>
  <div class="col-lg-6">




  <div class="container bg-light mt-5 mb-5 rounded">
    <div class="row">
        <div class="col mx-5 my-5 pb-3">

        <h1>Ciudad</h1>
        <br>
        <a class="btn btn-secondary btn-sm" href="departamento.php" role="button">Agregar departamento</a>
       
        <hr>
            <form action="../../modelos/admin/Usuario.php?op=ciudad" method="POST">
           
            <div class="form-group w-75">
              <label for="">Departamento</label>
              <select class="form-control" name="departamento" id="">
            <?php
            
            $consulta="SELECT * FROM departamento  ";
            $resultado=mysqli_query($conexion, $consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <option value="<?php echo $mostrar['iddepartamento'] ?>"><?php echo $mostrar['nombre'] ?></option>
            <?php
            }
            ?>
            </select>
            <small id="helpId" class="form-text text-muted">Seleccione su departamento</small>
            </div>
            
            <div class="form-group w-75">
              <label for="">Ciudad</label>
              <input type="text"
                class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" required>
              <small id="helpId" class="form-text text-muted">Ingrese una nueva ciudad</small>
            </div>

            <button class="btn btn-outline-success" type="submit">Agregar</button>
            <a class="btn btn-outline-danger" href="Registro.php" role="button">Cancelar</a>
          
        </form>
            
        </div>            
     </div>
  </div>




  </div>
  <div class="col-lg-3"></div>
</div> 


  <br> <br> <br> <br>   <br>
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

