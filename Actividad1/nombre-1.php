<?php
require('./templates/head.php');
?>

    <main>
        <section> 
            <div class="container">
                <div class="row">
                <div class="col col-4"></div>
                <div class="col col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                       
                        <?php
                            if(isset($_GET['redirec'])){
                                echo ('<h6 class="alert alert-warning">Debe introducir Nombre</h6>');
                            }
                            else{
                                echo(' <h5 class="card-title alert alert-primary">Entrada Nombre</h5>');
                            }
                        ?>
                        <form method="post" id="nombreForm" action="./nombre-2.php">
                            <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"></label>
                            <input type="text" class="form-control" id="formGroupExampleInput" 
                            placeholder="<?php 
                            session_start();
                            if(isset($_SESSION['nombre']))
                            {
                                echo $_SESSION['nombre'];
                            }else{
                                echo('Entrar nombre...');
                            }
                                ?>"
                              name="nombre" >
                            </div>
                            <button class="btn btn-outline-primary btn-sm" type="submit">Enviar Nombre</button>
                         </form>
                       
                    </div>
                </div>
               
                </div>
                <div class="col col-4"></div>
                </div>
            </div>
           
      
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>