<?php
    session_start();
    require_once("sugerenciaCollector.php");
    $tem = $_POST["tem"];
    $mes = $_POST["message"];
    $opc = $_POST["select"];

    $objColector= new sugerenciaCollector();
    $cred = $objColector->crearSugerencia($tem,$mes,$opc);
    $mensaje="Nueva Sugerencia Ingresada";
    header("location:mensajeAdmin.php?mensaje=$mensaje");
?>