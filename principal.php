<?php include 'main/conecta.php';
session_start();
$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
   header("location:Aplicacion1.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Inicio de Sistema | 505</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
  </head>
  <body>
    <?php include 'main/navbar.php';?>
     <div class="container">
        <h4>Hola bienvenid@ : <?php echo $usuario; ?></h4>
     </div>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
