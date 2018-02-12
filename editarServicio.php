<?php
    require_once("servicioCollector.php");

    $cod = $_GET["id"];
    $nom = $_POST["nom"];
    $des = $_POST["des"];
    $tse = new servicioCollector();
    
    $actcre = $tse->actualizartipoServicio($nom,$des,$cod);
    $mensaje="Servicio actualizado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje");
    
?>