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

    require_once("usuarioCollector.php");
    $valor = $_GET["mensaje"];
    $objeto = new usuarioCollector();
    $usubo = $objeto->deleteUsuario($valor);
    $mensaje="Usuario eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>