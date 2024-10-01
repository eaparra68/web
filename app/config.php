<?php
define ('SERVIDOR','localhost');
define ('usuario','root');
define ('password','');
define ('bd','ventas');

 $servidor = "mysql:dbname=".bd.";host=".SERVIDOR;

 try{
      $pdo = new  PDO($servidor, usuario, password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
      echo "la conexion a la base de datos fue con exito" ;
}catch (PDOException $e){
    print_r($e);
}
$URL = "http://localhost/www.ventas.com";

date_default_timezone_set ("America/Bogota");
$fechaHora = date ('Y-m-d H:i:s');

?>