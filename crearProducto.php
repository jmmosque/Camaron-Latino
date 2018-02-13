<?php
    session_start();
    require_once("productoCollector.php");
    $mes = $_POST["message"];
    $nom = $_POST["nue"];
    $opc = $_POST["select"];
    $op2 = $_POST["select2"];

    $objColector = new productoCollector();
    $cred = $objColector->crearProducto($opc,$op2,$nom,$mes);
    $mensaje="Nuevo Producto Ingresado";
    header("location:mensajeAdmin.php?mensaje=$mensaje");
?>