<?php
  // creamos una variable de sesion
  error_reporting(0);
  session_start();
  include 'conecta.php';
  // recuperar datos de el formulario login
  $usuario = $conecta->real_escape_string($_POST['usuario']);
  $password = $conecta->real_escape_string($_POST['password']);
  // consulta para extraer los datos de la base de datos de el alumno
  $consulta = "SELECT * FROM Alumnos WHERE Usuario = '$usuario' and Password = '$password'";
  if ($resultado = $conecta->query($consulta)) {
    while ($row = $resultado->fetch_array()) {
        $userok = $row['Usuario'];
        $passwordok = $row['Password'];
    }
    $resultado->close();
  }
  $conecta->close();
  if (isset($usuario) && isset($password)) {
     if ($usuario == $userok && $password == $passwordok) {
         $_SESSION['login']= TRUE;
         $_SESSION['Usuario']= $usuario;
         header("location:../principal.php");
     }
      else {
          header("location:../Aplicacion1.php");
      }
    }     else{
       header("location:../Aplicacion1.php");
  }
 ?>
