<?php
    session_start();
    require_once("sugerenciaCollector.php");
    $valor = $_GET["id"];
    $objeto = new sugerenciaCollector();
    $usubo = $objeto->deleteSugerencia($valor);
    $mensaje="Sugerencia eliminada correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>