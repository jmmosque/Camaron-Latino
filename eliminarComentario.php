<?php
    session_start();
    require_once("comentarioCollector.php");
    $valor = $_GET["id"];
    $objeto = new comentarioCollector();
    $usubo = $objeto->deleteComentario($valor);
    $mensaje="Comentario eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>