<?php
// 0 Disabled 1 Sesiones habilitadas pero no existe sesión   2 Sesiones habilitadas y existe sesión

	session_start();
	if(!isset($_SESSION['usuario'])){	
		header("Location: index.php?redirigido=true");
	}else{	 
		session_unset(); // Elimina todas las variables de sesión
    	session_destroy(); // Destruye la sesión
		setcookie(session_name(), 123, time() - 1000); // eliminar la cookie
		header("Location: index.php");
	}
