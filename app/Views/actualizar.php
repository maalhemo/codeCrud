<?php  
$idNombre = $datos[0]['id_nombre'];
$nombre = $datos[0]['nombre'];
$paterno = $datos[0]['paterno'];
$materno = $datos[0]['materno'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Actualiza un nombre</title>
  </head>
  <body>
     <div class="container"> 
    <h1 class="text-center">Actualizar/Editar con codeigniter 4</h1>
   <div class="row m-0 justify-content-center">
   <div class="col-auto">
     <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
      <input type="text" name="idNombre" id="idNombre" hidden=""
      value="<?php echo $idNombre  ?>">

       <label class="text-center" for="nombre">Nombre</label>
       <input type="text" name="nombre" id="nombre" class="form-control"
       value="<?php echo $nombre  ?>">

        <label class="text-center" for="paterno">Apellido paterno</label>
       <input type="text" name="paterno" id="paterno" class="form-control"
       value="<?php echo $paterno  ?>">

        <label class="text-center" for="materno">Apellido materno</label>
       <input type="text" name="materno" id="materno" class="form-control"
       value="<?php echo $materno ?>">
       <br>
       <button class="btn btn-warning text-center">Guardar</button>
     </form>
   </div>
   </div>  
   </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
