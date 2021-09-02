<!doctype html>
<html lang="es">
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
        <a class="btn btn-info" href="usuario.php" role="button">Ver mensajes</a>
        
    </div>
    </div>
    <br>
    <div class="container">
    <h1>Contáctenos</h1>
  </div>
    <form action="enviar.php" method="POST">
    <div class="container">
    <br>
    <h5>No. Mensaje*</h5>
    <input type="text" placeholder="Ingresa tu nombre completo" name="nomensaje" size="185">
    <br><br>
    <h5>Nombres*</h5>
    <input type="text" placeholder="Ingresa tu nombre completo" name="nombre" size="185">
    <br><br>
    <h5>Telefóno/Celular*</h5>
    <input type="text" placeholder="Ingresa tu numero de telefono  de 8 digitos*" name="telefono" size="185">
    <br><br>
    <h5>Correo Electronico*</h5>
    <input type="email" placeholder="Ingresa tu email" name="correo" size="185">
    <br><br>
    <h5>Mensaje*</h5>
    <input type="text" placeholder="Ingresa un mensaje" name="mensaje" size="185">
    </div>
    <br><br>
    <center><input type="submit" class="btn btn-danger" name="enviar"></center>

</div>
<br><br>   <div class="container">
    <table border="1" width="100%" >
      <tr>
        <td bgcolor="7FDFF9">
        PBX: 45782169 --- Dirrecion: 15 avenida D 11-50 zona 21 --- Carnet:2020-40120 --- Nombre: Jennifer Gabriela Rivas Soto
        </td>
      </tr>
  </div>
  </table>
  </form>  
  <br>
  <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>