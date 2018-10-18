<?php
include("conexion.php");
$user = $_POST['usuario'];
$pass = $_POST['contraseña'];
include("conexion.php");
$params= array('usuario'=>$user,'clave' => $pass);
$sql = "INSERT INTO usuario (usuario, clave, habilitado, rol) VALUES (:usuario, :clave, 1, 'user')";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute($params);
header('Location: inicio.html');
?>