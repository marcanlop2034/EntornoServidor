<?php
    if(isset($_POST['nombre'])){
        $varNombre = $_POST['nombre'];
        if(strlen($varNombre)==0){
            header("Location: nombre-1.php?redirec=true"); exit;
        }else {
            session_start();
            $_SESSION['nombre']=$varNombre;
            header("Location: index.php"); exit;
        }    
    }
   
