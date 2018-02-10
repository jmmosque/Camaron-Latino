<?php
    session_start();
    require_once("publicacionCollector.php");
    $tem = $_POST["tem"];
    $mes = $_POST["message"];
    $opc = $_POST["select"];

    $objColector= new publicacionCollector();
    $cred = $objColector->crearPublicacion($tem,$mes,$opc);
    $mensaje="Nueva Publicacion Ingresada";
    header("location:mensajeAdmin.php?mensaje=$mensaje");
?>