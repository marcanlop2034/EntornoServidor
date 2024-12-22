<?php
    if(isset($_POST['apellidos'])){
        $varApellidos = $_POST['apellidos'];
        if(strlen($varApellidos)==0){
            header("Location: apellidos-1.php?redirec=true"); exit;
        }else {
            session_start();
            $_SESSION['apellidos']=$varApellidos;
            header("Location: index.php"); exit;
        }
    }
  
    