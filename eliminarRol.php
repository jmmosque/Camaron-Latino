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

    require_once("rolCollector.php");
    $valor = $_GET["id"];
    $objeto = new rolCollector();
    $usubo = $objeto->deleteRol($valor);
    $mensaje="Rol eliminado correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje"); 
?>