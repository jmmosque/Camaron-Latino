<?php
    session_start();
    require_once("tiposervicioCollector.php");
    $valor = $_GET["id"];
    $objeto = new tiposervicioCollector();
    $usubo = $objeto->deleteTipoServicio($valor);
    $mensaje="Tipo de Servicio eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>