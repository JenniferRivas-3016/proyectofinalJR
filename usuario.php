<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <link rel="stylesheet" href="fondo.css">

    <title>Inicio Sesión</title>
  </head>
  <body><br>
<div class="container">
<button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  MENÚ
  </button>
</div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">MENÚ:</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
    Ay carmela te invita a que conozcas más nuestra página, somos un restaurante con temática artística dedicado a vender los mejores tacos, crepas, bebidas y muchas cosas más.
    </div>
    <br>
                <div class="d-grid gap-2">
                  <a href="index.html" class="btn btn-warning">Inicio</a>
                </div><br>

                <div class="d-grid gap-2">
                  <a href="tiendas.php" class="btn btn-info">Tiendas</a>
                </div><br>

                <div class="d-grid gap-2">
                  <a href="productos.php" class="btn btn-primary">Productos / Servicios</a>
                </div><br>

                <div class="d-grid gap-2">
                  <a href="contactenos.php" class="btn btn-secondary">contactenos</a>
                </div><br>
  </div></div>
<br><br>

<div class="container">
      <h2><b>Iniciar Sesión</b></h2>
    </div>
      <br>
      
      <center>
      <div class="card" style="width: 30rem;">
        <img src="imagenes/logo.jpg" class="card-img-top" alt="...">
      <div class="container">
      <form action="validar.php" method="POST" >
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Usuario</label>
          <input style="font-family: 'Font Awesome 5 free'; font-weight: 700;" type="text" class="form-control" placeholder="&#Xf007;" name="usuario">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input style="font-family: 'Font Awesome 5 free'; font-weight: 700;" type="text" class="form-control" placeholder="&#Xf023;" name="contraseña">
          </div>
          <div class="mb-3 form-check">
          </div>
          <center><div class="d-grip gap-2"></center>
            
            <input type="submit" value="Aceptar" name="Enviar">
          </form>
        </center>
    <br><br>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  </body>
</html>