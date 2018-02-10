<?php

    require_once("sugerenciaCollector.php");

    $cod = $_GET["id"];
    $tem = $_POST["tem"];
    $mes = $_POST["message"];

    $sug = new sugerenciaCollector();
    $actcre = $sug->editarSugerencia($tem,$mes,$cod);
    $mensaje="sugerencia actualizado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje");
?>