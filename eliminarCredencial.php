<?php
    session_start();
    require_once("credencialCollector.php");
    $valor = $_GET["id"];
    $objeto = new credencialCollector();
    $usubo = $objeto->deleteCredencial($valor);
    $mensaje="Credencial eliminada correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>