<?php 
include ("db.php");
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fondo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Ver Mensajes</title>
  </head>
  <body>
    <br><br><br>
    <div class="container">
        <div class="btn-group w-100" role="group" aria-label="Basic exaple">
        <a class="btn btn-danger" href="index.html" role="button">Pagina de inicio</a>
        <a class="btn btn-warning" href="tiendas.php" role="button">Tiendas</a>
        <a class="btn btn-dark" href="contactenos.php" role="button">Contactenos</a>
    </div>
    <br>
<br><br>
<h2>Mensajes Recibidos</h2>

      <br><br>
      <center>
 <div class="container">
     <div class="col-12">
         <table class="table table-success table-striped">
         <thead>
        <tr>
         <th scope="col">Nombre</th>
         <th scope="col">Telefono</th>
         <th scope="col">Correo</th>
         <th scope="col">Mensaje</th>
         </tr>
         </thead>
<br><br>
<tbody>
    <?php
    $query="SELECT * FROM mensajes";
    $resultat=mysqli_query($conn,$query);
    while ($row=mysqli_fetch_array($resultat)){ ?>
    <tr> 
    <td><?php echo $row ['nombre'] ?> </td>
    <td><?php echo $row ['telefono'] ?> </td>
    <td><?php echo $row ['correo'] ?> </td>
    <td><?php echo $row ['mensaje'] ?> </td>
    <td>
    </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
  </div>
  </center>
<br><br>
<div class="container">
<div class="container">
    <table border="1" width="100%" >
      <tr>
        <td bgcolor="7FDFF9">
        PBX: 45782169 --- Dirrecion: 15 avenida D 11-50 zona 21 --- Carnet:2020-40120 --- Nombre: Jennifer Gabriela Rivas Soto
        </td>
      </tr>
  </div>
  </table>
  <br>
  <br>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    
  </body>
</html>