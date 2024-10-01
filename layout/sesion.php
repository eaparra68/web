<?php

session_start();
if (isset($_SESSION['sesion_correo_electronico'])){
   // echo "si existe sesion de ".$_SESSION['sesion_correo_electronico']; y creo la variable de la sesión del correo electrónico
   $email_sesion = $_SESSION['sesion_correo_electronico'];
//creamos la consulta en la base de datos -->
$sql = "SELECT * FROM t_usuarios WHERE correo_electronico = '$email_sesion'";
  $query = $pdo->prepare($sql);
  $query->execute();
  $usuarios = $query->fetchAll(fetch_Style: PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
   // quito esta variable $contador = $contador + 1;
  //$correo_db = $usuario ['correo_electronico'];
    $nombres = $usuario ['nombres'];
}
} else{
  echo "no existe sesion";
    header( 'Location: '.$URL.'/login');
    
  }
