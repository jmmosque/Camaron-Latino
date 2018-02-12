<?php
    session_start();
    require_once("servicioimagenCollector.php");
    $valor = $_GET["id"];
    $objeto = new servicioimagenCollector();
    $img = $objeto->showImagen($valor);
    $dir = $img->getDireccion();
    $nom = $img->getNombre();
    unlink($dir.$nom);
    $usubo = $objeto->deleteImagen($valor);
    $mensaje="Imagen del Servicio eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>