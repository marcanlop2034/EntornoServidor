<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEC 1 - Actividad 2  </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="./js/pec1.js"></script>
    <link href="./css/pec1.css" rel="stylesheet">
  </head>
  <body style="font-family: monospace;">
    <div class="container">
        <div class="alert alert-primary">
            <h3>PEC 1 - DWES Actividad 2 
            <?php
              if(session_status()==2){
                if(isset($_SESSION['usuario'])){
                  echo ('<q>Bienvenido ' . $_SESSION['usuario'] . '</q>');
                }
              }

            ?>

            </h3>
        </div>
    </div>






