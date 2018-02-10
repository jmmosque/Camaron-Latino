<?php
    session_start();
    require_once("rolCollector.php");
    $valor = $_GET["id"];
    $objeto = new rolCollector();
    $usubo = $objeto->deleteRol($valor);
    $mensaje="Rol eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>