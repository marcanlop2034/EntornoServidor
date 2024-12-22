<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEC 1 - Desarrollo Web Entorno Servidor</title>
    <script src="../js/pec1.js"></script>
    <link href="./css/pec1.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
  </head>
  <body style="font-family: monospace;">
    <div class="container">
        <div class="alert alert-primary">
            <h3>PEC 1 - DWES Actividad 1</h3>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Actividad 1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="nombre-1.php">Ir Nombre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="apellidos-1.php">Ir Apellidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ver.php">Ver Datos</a>
                        <!--<a class="nav-link" href="ver.php" data-bs-target="#muestraDatosModal" data-bs-toggle="modal">Mostrar Información</a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="borrar.php" data-bs-target="#exampleModal" data-bs-toggle="modal">Borrar Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../home.php">Volver a la Home</a>
                    </li>
 
                </ul>
              
            </div>
            </div>
        </nav>
    </div>
    <br><br>


    <!-- Modal Borrar Datos-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Borrar Datos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Se van a borrar los datos de Nombre y Apellidos
        ¿Está seguro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <a class="btn btn-outline-danger" href="borrar.php">Borrar</a>
      </div>
    </div>
  </div>
</div>



