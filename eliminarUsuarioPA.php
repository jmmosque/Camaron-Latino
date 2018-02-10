<?php
    session_start();
    require_once("usuarioCollector.php");
    $valor = $_GET["mensaje"];
    $objeto = new usuarioCollector();
    $usubo = $objeto->deleteUsuario($valor);
    $mensaje="Usuario eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>