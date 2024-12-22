<?php
function comprobar_usuario($nombre, $clave){
	require('./templates/connect.php');
	try {
		$bd = new PDO($cadena_conexion, $usuario_bd, $clave_bd);
		// VALIDAR LOS DATOS DEL LOGIN EN LA BASE DE DATOS EMPRESA
		$sql = "SELECT nombre, clave, rol FROM usuarios WHERE nombre = '$nombre' and clave = '$clave'";
		$usuarios = $bd->query($sql);
		if ($usuarios->rowCount() == 1){
			$resultado = $usuarios->fetch();
			if($resultado['clave']==$clave){
				$usu['nombre']=$resultado['nombre'];
				$usu['rol']=$resultado['rol'];
				return $usu;
			}
		}
	} catch (PDOException $e) {
		echo 'Error con la base de datos: ' . $e->getMessage();
	} 
	return false;
}