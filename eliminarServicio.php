<?php
    session_start();
    require_once("servicioCollector.php");
    $valor = $_GET["id"];
    $objeto = new servicioCollector();
    $usubo = $objeto->deleteServicio($valor);
    $mensaje="Servicio eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>