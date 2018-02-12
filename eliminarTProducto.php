<?php
    session_start();
    require_once("tipoproductoCollector.php");
    $valor = $_GET["id"];
    $objeto = new tipoproductoCollector();
    $usubo = $objeto->deleteTipoProducto($valor);
    $mensaje="Tipo de Producto eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>