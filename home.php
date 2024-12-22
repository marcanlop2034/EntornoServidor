<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEC 1 -Desarrollo Web Entorno Servidor  </title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">   
  </head>
<body style="font-family: monospace;">  
    <div class="row">
        <div class="col col-3"></div>
        <div class="col col-6">
            <div class="jumbotron">
            <div class="container">
                <h2>PEC 1 Desarrollo Aplicaciones Web Entorno Servidor 2024-2025</h2>
                <p>Las 2 actividades se han desglosado en <mark><a href="./Actividad1/">Actividad1</a></mark> y <mark><a href="./Actividad2/">Actividad2</a></mark> tal como indica el pdf. Haz click en el botón
                    que desees para ir a la actividad </p>
                <p>
                    <?php
                       require('./configuracion.php');
                    ?>
                </p>
                <p>
                    <a class="btn btn-outline-primary btn-sm" href="./Actividad1/" role="button">Actividad 1</a>
                    <a class="btn btn-outline-primary btn-sm" href="./Actividad2/" role="button">Actividad 2</a>
                    <a class="btn btn-outline-primary btn-sm" href="./Actividad2/" role="button">Pruebas Git, Integración</a>
                    <a class="btn btn-outline-primary btn-sm" href="./Actividad2/" role="button">Trabjando con Ramas </a>
                </p>
              
            </div>
        </div>
        </div>
        <div class="col col-3"></div>
    </div>

 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
