<?php
    session_start();
    require_once("productoCollector.php");
    $valor = $_GET["id"];
    $objeto = new productoCollector();
    $usubo = $objeto->deleteProducto($valor);
    $mensaje="Producto eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>