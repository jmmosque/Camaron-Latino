<?php
    session_start();
    if ($_SESSION){     
        if ($_SESSION["perfil"]=="admin"){                
        }else{
            header("location:index.php"); 
        }                            
    }else{
        header("location:index.php");
    }
    require_once("credencialCollector.php");
    $valor = $_GET["id"];
    $objeto = new credencialCollector();
    $usubo = $objeto->deleteCredencial($valor);
    $mensaje="Credencial eliminada correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>