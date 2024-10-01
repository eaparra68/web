<?php
//voy a traer con el include el archivo config.php que tiene la conexión con la base de datos y evito replicarlo
include ('../../config.php');


$correo_eletronico = $_POST['correo_eletronico'];
$clave = $_POST['clave'];
$contador = 0;
// Prueba de que funciona, se puede colocar también que retorne el correo electrócnico
//echo $passwd;
$sql = "SELECT * FROM t_usuarios WHERE correo_electronico = '$correo_eletronico' AND clave = '$clave'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(fetch_Style: PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
    $correo_db = $usuario ['correo_electronico'];
   # echo $nombres = $usuario ['nombres'];
}
if($contador == 0){
    echo "datos incorrectos, vuelava a intentarlo";
}
else{
        echo "datos correctos";
        session_start ();
        $_SESSION['sesion_correo_electronico'] = $correo_eletronico;
        header('Location: '.$URL.'/index.php');
    }

?>

