<?php
    require_once("productoCollector.php");

    $cod = $_GET["id"];
    $nom = $_POST["nom"];
    $des = $_POST["des"];
    $tse = new productoCollector();
    
    $actcre = $tse->actualizartipoProducto($nom,$des,$cod);
    $mensaje="Producto actualizado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje");
    
?>