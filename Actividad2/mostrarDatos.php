<?php
function mostrardatos(){
    if ( isset($_POST['opcion'])){
        //echo "Zona de administrador";
        require('./templates/connect.php');
        $usuarios=null; 
        try {
            $bd = new PDO($cadena_conexion, $usuario_bd, $clave_bd);
            $administrador=1;
            //echo "<br>"."Conexión realizada con éxito"."<br>";	
            if($_POST['opcion']==1){
                $sql = 'SELECT código, nombre, clave, rol FROM usuarios where rol='.$_POST['opcion'].';';
            }else {
                $sql = 'SELECT código, nombre, clave, rol FROM usuarios where rol<>'.$administrador.';';
            }         
            $usuarios = $bd->query($sql);
            $resultados = $usuarios->fetchAll();
            return $resultados;
        } catch (PDOException $e) {
            echo 'Error con la base de datos: ' . $e->getMessage();
            return null;
        }
    }
}
