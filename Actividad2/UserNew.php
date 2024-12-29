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