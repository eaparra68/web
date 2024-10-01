<?php
include('../../config.php');

$nombres = $_POST['nombres'];
$correo_electronico = $_POST['correo_electronico'];
$clave = $_POST['clave'];
$clave_verificar = $_POST['clave_verificar'];

$sentencia = $pdo->prepare("INSERT INTO t_usuarios (nombres, correo_electronico, clave, fecha_hora_creacion) 
VALUES (:nombres, :correo_electronico, :clave, :fecha_hora_creacion)");

// Enlazar los parámetros a la sentencia
$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':correo_electronico', $correo_electronico);
$sentencia->bindParam(':clave', $clave);
$sentencia->bindParam(':fecha_hora_creacion', $fechaHora);


// Ejecutar la sentencia
$sentencia->execute();

//echo $fechaHora;

?>