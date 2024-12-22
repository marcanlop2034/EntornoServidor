<?php
require('./templates/comprobar_usuario.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {  	
	$usu = comprobar_usuario($_POST['usuario'], $_POST['clave']);
	if($usu==false ){
		$err = true;
		$usuario = $_POST['usuario'];
		header('Location: index.php?redirec='.$err);
	}else{	
		session_start();
		$_SESSION['usuario'] = $_POST['usuario'];
		$_SESSION['rol'] = $usu['rol'];
		$_SESSION['last_activity'] = time();
		if($_SESSION['rol']==1){
			header("Location: listado_usuarios_bd.php");	
		}
		else {
			header("Location: index.php?redirec=2");
		}
		
	}	
}
