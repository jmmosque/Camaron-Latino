<?php
    session_start();
    require_once("credencialCollector.php");
    require_once("usuarioCollector.php");
    $valor = $_GET["mensaje"];
    $objeto = new usuarioCollector();
    $usuario = $objeto->comprobarUsuarioxCedula($valor);
    $usu = $usuario->getIdUsuario();
    $cla = $usuario->getIdcredencial();
    $objeto2 = new credencialCollector();
    $usubo = $objeto->deleteUsuario($usu);
    $credencial = $objeto2->deleteCredencial($cla);
    $mensaje="Usuario eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>