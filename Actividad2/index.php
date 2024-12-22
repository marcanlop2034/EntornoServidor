<?php
require('./templates/head.php');
?>

    <main>
        <section> 
          <div class="container">
            <div class="row">
              <div class="col col-3"></div>
              <div class="col col-6">
                <form method="post" action="sesiones1_login_bd.php" id="formLogin">
                    <div class="row mb-3">
                      <label for="nombreUsuario" class="col-sm-2 col-form-label">Usuario</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombreUsuario" name="usuario" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="clave" required>
                      </div>
                    </div>
                    <div class="w-33">
                      <button type="submit" class="btn btn-outline-primary btn-sm" id="btnLogin">Login</button>
                      <a href="../home.php" class="btn btn-outline-success btn-sm">Volver a la Home</a>
                    </div>
                    <?php
                        if(isset($_GET['redirigido']) && $_GET['redirigido']==true){
                          echo('<br><div>');
                          echo('<br><p class="alert alert-danger">Sesión Expirada</p>');
                          echo('<br></div>');
                        }
                        if(!isset($_GET['redirec'])){
                          
                        }else{
                          if($_GET['redirec']==1){
                            echo('<br><div>');
                            echo('<br><p class="alert alert-danger">Usuario/Password incorrecto</p>');
                            echo('<br></div>');
                          }
                          else {
                            if($_GET['redirec']==2){
                              echo('<br><div>');
                              echo('<br><p class="alert alert-danger">El usuario no es Administrador</p>');
                              echo('<br></div>');
                            }
                            else {
                              if($_GET['redirec']==true){
                                echo('<br><div>');
                                echo('<br><p class="alert alert-danger">Sesión Expiradar</p>');
                                echo('<br></div>');
                              }
              
                           
                          }
                          }
                        }
                    ?>
                </form>
              </div>
              <div class="col col-3"></div>
            </div>
          </div>
     

        
        </section>
    </main>
    <!-- Button trigger modal -->

 


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>