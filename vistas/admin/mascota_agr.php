
<?php
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

    <title>Mascotas</title>
    <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="icon" type="image/png"href="favicon/icon.ico"/>

  </head>
  <body style="background: url(../../public/img/fondoo.jpg) no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-position: center center;
    height: 800px; 
    background-position: fixed;">
<!-- @media only screen and (max-width: 1024px){ -->
<br> <br> <br> <br>
 <div class="row"> 
    <div class="col-lg-3"></div>

    <div class="col col-lg-6">
      
      <div class="container bg-light mt-5 mb-5 rounded">
      <div class="row">
      <div class="col mx-5 my-5 pb-2">


           <h2><i class="fas fa-dog"></i> Mascota</h2>
            <a class="btn btn-success btn-sm" href="raza.php" role="button">Agregar Raza</a>
            <hr>
       <form action="../../modelos/admin/Mascota.php?op=mascota" method="POST">
        <!-- <input type="file" name="imagen" style="border-radius:5px; color:#424141; width: 100%" required> -->
       
                

  
    <div class="form-group w-75">
      <label for="">Raza</label>
      <select class="form-control" name="raza" id="">
      <?php
            $consulta="SELECT * FROM raza";
            $resultado=mysqli_query($conexion, $consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <option value="<?php echo $mostrar['idraza'] ?>"><?php echo $mostrar['nombre'] ?></option>
            <?php
            }
            ?>
      </select>
    </div>

    <div class="form-group w-75">
              <label for="">Especie</label>
                <select class="form-control" name="especie" id="">
                  <option><i class="fas fa-dog"></i>Perro</option>
                  <option>Gato</option>
                
                </select>
            </div>
       
          
            <!-- <input type="text" name="especie" placeholder="Ingrese la especie" required> -->
         <div class="form-group w-75">
           <label for="">Nombre</label>
           <input type="text"
             class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" required>
           <small id="helpId" class="form-text text-muted">nombre de la mascota</small>
         </div>

          <div class="form-group w-75">
            <label for="">Edad/Meses</label>
            <input type="text"
              class="form-control" name="edad" id="" aria-describedby="helpId" placeholder="" required>
            <small id="helpId" class="form-text text-muted">ingrese la edad en meses/ ejm: 4</small>
          </div>

          

          <div class="form-group w-75">
            <label for="">Tamaño</label>
            <select class="form-control" name="tamanio" id="">
              <option>Pequeño</option>
              <option>Medio</option>
              <option>Grande</option>
            </select>
          </div>


          <div class="form-group w-75">
            <label for="">Género</label>
            <select class="form-control" name="genero" id="">
              <option>Macho</option>
              <option>Hembra</option>
            </select>
          </div>
     <br>


           
            <button class="btn btn-outline-success" type="submit">Agregar</button>
            <!-- <input class="btn btn-primary" type="reset" value="Reiniciar"> -->
            <a class="btn btn-outline-danger btn" href="portfolio.php" role="button">Cancelar</a> 
            
<br>

        </form>        
                 
     
            
        </div>            
     </div>
  </div>

  <div class="col-lg-3"></div>


    </div>
 </div>


 
  <br> <br> 
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
