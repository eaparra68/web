<?php
//cerrar sesión para el login

include ('../../config.php');

session_start();
if(isset($_SESSION['sesion_correo_electronico'])){
    session_destroy();
    header('Location: '.$URL.'/');
}

?>