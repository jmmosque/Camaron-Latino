<?php
    session_start();
    require_once("credencialCollector.php");
    $usu = $_POST["usu"];
    $log = $_POST["log"];


    $objColector= new credencialCollector();
    $credencial=$objColector->comprobarCredencial("$usu");
    if($credencial->getUsuario()){
        $mensaje="esta credencial ya esta registrado";
        header("location:creacionCredencialPA.php?mensaje=$mensaje");
    }else{
        $cred = $objColector->crearcredencial($usu,$log);
        $mensaje="Nueva Credencial Ingresada";
        header("location:mensajeAdmin.php?mensaje=$mensaje");
    }   
?>