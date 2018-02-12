<?php
    session_start();
    require_once("servicioCollector.php");
    $mes = $_POST["message"];
    $nom = $_POST["nue"];
    $opc = $_POST["select"];
    $op2 = $_POST["select2"];

    $objColector = new servicioCollector();
    $cred = $objColector->crearServicio($opc,$op2,$nom,$mes);
    $mensaje="Nuevo Servicio Ingresado";
    header("location:mensajeAdmin.php?mensaje=$mensaje");
?>