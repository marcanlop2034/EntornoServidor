<?php
require('./templates/head.php');
?>
    <main>
        <section> 
          <div class="container">
            <div class="row">
                <div class="col col-3"></div>
                <div class="col col-6">           
                    <?php 
                        session_start();
                        if(isset($_SESSION['nombre']) || isset($_SESSION['apellidos'])){
                          echo ('<p class="alert alert-primary">');
                          if(isset($_SESSION['nombre'])){
                            echo($_SESSION['nombre']);
                          }
                          if(isset($_SESSION['apellidos'])){
                            echo(' ' .$_SESSION['apellidos']);
                          }
                          echo('</p');  
                        }

                    ?>
                </div>
                <div class="col col-3"></div>
            </div>          
          </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>