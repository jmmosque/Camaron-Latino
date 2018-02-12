<?php
    session_start();
    require_once("comentarioCollector.php");
    $mes = $_POST["message"];
    $opc = $_POST["select"];
    $op2 = $_POST["select2"];

    $objColector = new comentarioCollector();
    $cred = $objColector->crearComentario($mes,$op2,$opc);
    $mensaje="Nuevo Comentario Ingresado";
    header("location:mensajeAdmin.php?mensaje=$mensaje");
?>