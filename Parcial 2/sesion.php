<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        include("conexion.php");
        $params= array('usuario'=>$user,'clave' => $pass);
        $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND clave = :clave";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL ->execute($params);

        $count = $ejecucionSQL->rowCount();
        $resultado = $ejecucionSQL->fetch(PDO::FETCH_ASSOC);

        if($count > 0 and $resultado["habilitado"] == 1){
             $_SESSION["user"] = $_POST["user"];
             $_SESSION["login"] = 1;
             $_SESSION["rol"] = $resultado["rol"];
             if($resultado["rol"] == "user") {
                 header('Location: home.php');
             } else {
                 header('Location: admin.php');
             }
             exit;
        }
        else{
             header('Location: inicio.html');
             exit;
        }
      
         ?>
  </body>
</html>
