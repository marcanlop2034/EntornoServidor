<?php
session_start();
$inactive = 600; // 1800 30 minutos. Cierra sesión con 10 minutos de inactividad
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $inactive) {
    session_unset(); // Elimina todas las variables de sesión
    session_destroy(); // Destruye la sesión
    header("Location: sesiones1_logout_bd.php"); // Redirige al usuario a la página de cierre de sesión
    exit();
}
$_SESSION['last_activity'] = time(); // Actualiza la hora de la última actividad

require('./templates/head.php');
require('mostrarDatos.php'); // Funcion que realiza la consulta en bbdd
?>
<br>

<div class="container">
    <div class="row">
        <div class="col col-4"></div>
        <div class="col col-4">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="opcion">
                                <option selected value="0">No Administradores</option>
                                <option value="1">Administradores</option>       
                </select>
            </div>
            <div class="mb-3"> 

                <button type="submit" class="btn btn-outline-primary btn-sm" name="submit" id="btnMostrar">Mostrar

                </button>
                <a class="btn btn-outline-success btn-sm" href="sesiones1_logout_bd.php">Cerrar</a>

            </div>  
           
        </form>
        </div>
        <div class="col col-4"></div>
    </div> 
</div>

<!-- Tabla -->

    <div class="container">
        <div class="row">
            <div class="col col-2"></div>
            <div class="col col-8">
                <table class="table table-hover">
                    <caption>
                   
                                <details>
                                    <summary>
                                        Resultados
                                    </summary>
                                    <p>Total registros ( <?php
                                        $encontrados=0;
                                        try{

                                            if(!is_null($resultados=mostrardatos())){
                                                echo(count($resultados));
                                            }
                                            else{
                                                if(is_null($encontrados)){
                                                    echo('Revise BBDD');
                                                }
                                                else {
                                                    echo($encontrados);
                                                }
                                               
                                            }
                                        } 
                                        catch(Exception $e){
                                            echo($e);
                                        }
        
                                        ?> )
                                    </p>
                                </details>
                                </caption>
                    
                    <thead>
                        <h5>Listado usuarios </h5>
                        <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Clave</th>
                        <th scope="col">Rol</th>
      
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                if(isset($_POST['submit'])){
                                    $resultados=mostrardatos();
                                    if(!is_null($resultados)){
                                        foreach ($resultados as $clave ) {
                                            echo(' <tr>');
                                            echo('<th scope="row">'.$clave['código'].'</th>');
                                            echo('<td>'.$clave['nombre'].'</td>');
                                            echo('<td>'.$clave['clave'].'</td>');
                                            echo('<td>'.$clave['rol'].'</td>');
                                            echo('</tr>');
                                        } 
                                    }
                                }
                                else{
                                    //header("Location: index.php?redirigido=true");
                                }
                                
                            ?>
  
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col col-2"></div>
        </div>
    </div>
 
    <div class="d-flex justify-content-center">
        <div class=""  role="status" id="spinner1">
         <span class="visually-hidden">Loading...</span>
        </div>
    </div>





