<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD CodeIgniter</title>
  </head>
  <body>
   <div class="container"> 
    <h1 class="text-center">CRUD con codeigniter 4</h1>
    <hr>
   <div class="row m-0 justify-content-center">
   <div class="col-auto">
     <form method="POST" action="<?php echo base_url().'/crear' ?>">
       <label for="nombre">Nombre</label>
       <input type="text" name="nombre" id="nombre" class="form-control">
        <label for="paterno">Apellido paterno</label>
       <input type="text" name="paterno" id="paterno" class="form-control">
        <label for="materno">Apellido materno</label>
       <input type="text" name="materno" id="materno" class="form-control">
       <br>
       <button class="btn btn-primary">Guardar</button>
     </form>
   </div>
   </div>  
   <hr>
   <h2 class="text-center">Listado de personas</h2>
<hr>
   <div class="row">
     <div class="col-sm-12">
       <div class="table table-responsive">
        <table class="table table-hover table-bordered">
          <tr>
            <th class="text-center">Nombre </th>
            <th class="text-center"> Apellido paterno  </th>
            <th class="text-center"> Apellido materno </th>
            <th class="text-center"> Editar </th>
            <th class="text-center"> Eliminar </th>
          </tr>
          <?php foreach($datos as $key): ?>
            <tr>
              <td class="text-center"><?php echo $key->nombre ?></td>
              <td class="text-center"><?php echo $key->paterno ?></td>
              <td class="text-center"><?php echo $key->materno ?></td>
              <td class="text-center"><a href="<?php echo base_url().'/obtenerNombre/'.$key->id_nombre ?>"
               class="btn btn-warning btn-sm ">Editar</a></td>
              <td class="text-center"><a href="<?php echo base_url().'/eliminar/'.$key->id_nombre ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
          <?php endforeach; ?>
        </table>
        <div>
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
    <script type="text/javascript">
      let mensaje = '<?php echo $mensaje ?>';

      if (mensaje == '1'){
        swal(':D','Agregado con exito!','success');
      }else if (mensaje == '0'){
        swal(':(','Fallo al agregar!','error');
      }
       else if (mensaje == '2'){
        swal(':D','Actualicado con exito!','success');
      }
       else if (mensaje == '3'){
        swal(':(','Fallo al actualizar!','error');
      }
       else if (mensaje == '4'){
        swal(':D','Eliminado con exito!','success');
      }
       else if (mensaje == '5'){
        swal(':(','Fallo al eliminar!','error');
      }
    </script>
  </body>
</html>
