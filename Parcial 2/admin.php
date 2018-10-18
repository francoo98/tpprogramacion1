<?php
session_start();
if($_SESSION["rol"] != "admin"){
    header('Location: inicio.html');
    exit;
}
echo "pagina de administracion";
