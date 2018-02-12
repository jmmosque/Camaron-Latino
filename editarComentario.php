<?php
    session_start();
    require_once("comentarioCollector.php");

    $cod = $_GET["id"];
    $mes = $_POST["message"];

    $sug = new comentarioCollector();
    $actcre = $sug->editarComentario($mes,$cod);
    $mensaje="comentario actualizado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje");
?>