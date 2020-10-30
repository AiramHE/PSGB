<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "curso";
$conecta = mysqli_connect($servidor, $usuario, $password, $base);
if($conecta->connect_error){
  die('Error al conectar la Base de datos '.$conecta->connect_error);

}
 ?>
