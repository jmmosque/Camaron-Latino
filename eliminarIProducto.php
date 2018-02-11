<?php
    session_start();
    require_once("productoimagenCollector.php");
    $valor = $_GET["id"];
    $objeto = new productoimagenCollector();
    $img = $objeto->showImagen($valor);
    $dir = $img->getDireccion();
    $nom = $img->getNombre();
    unlink($dir.$nom);
    $usubo = $objeto->deleteImagen($valor);
    $mensaje="Imagen del Producto eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>