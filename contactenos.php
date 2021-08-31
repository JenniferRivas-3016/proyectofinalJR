<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fondo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Contáctenos</title>
  </head>
  <body>
    <br><br><br>
    <div class="container">
        <div class="btn-group w-100" role="group" aria-label="Basic exaple">
        <a class="btn btn-danger" href="productos.php" role="button">Productos Y Servicios</a>
        <a class="btn btn-warning" href="tiendas.php" role="button">Tiendas</a>
        <a class="btn btn-dark" href="contactenos.php" role="button">Contactenos</a>
        <a class="btn btn-info" href="contraseña.php" role="button">Ver mensajes</a>
        
    </div>
    </div>
    <br>
    <div class="container">
    <h1>Contáctenos</h1>
  </div>
  <div class="container">
    <form action="conexion.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombres *</label>
            <input type="text" name="nombre" class="form-control"   autofocus>
            <small id="nombre" class="form-text text-muted">Ingrese su Nombre y Apellidos</small>
          </div>
          <div class="form-group">
            <label for="telefono">Telefono / Celular</label>
            <input type="text" name="telefono" class="form-control"  >
            <small id="numero" class="form-text text-muted">Ingresa tu Numero de celular</small>
          </div>
        <div class="form-group">
          <label for="correo">Correo Electronico *</label>
          <input type="email" name="correo" class="form-control"  >
          <small id="emailHelp" class="form-text text-muted">Ingresa tu Correo Electronico</small>
        </div>
        <div class="form-group">
          <label for="mensaje">Mensaje *</label>
          <input type="text"  name="mensaje" class="form-control"   >
        </div>
        <br>
       <center> <input type="submit" class="btn btn-primary" value="Enviar Mensaje" name="enviar"></center>
      </form>
</div>
<br><br>   <div class="container">
    <table border="1" width="100%" >
      <tr>
        <td bgcolor="E276EA">
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