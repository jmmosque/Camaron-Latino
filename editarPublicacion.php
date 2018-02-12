<?php
    session_start();
    require_once("publicacionCollector.php");

    $cod = $_GET["id"];
    $tem = $_POST["tem"];
    $mes = $_POST["message"];

    $sug = new publicacionCollector();
    $actcre = $sug->editarPublicacion($tem,$mes,$cod);
    $mensaje="publicacion actualizada correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje");
?>