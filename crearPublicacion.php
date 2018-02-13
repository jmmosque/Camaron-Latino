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
    require_once("publicacionCollector.php");
    $tem = $_POST["tem"];
    $mes = $_POST["message"];
    
    if(empty($_POST["select"])){    
        $mensaje="No existen usuarios disponibles para crear la publicacion";
        header("location:mensajeAdmin.php?mensaje=$mensaje");             
    }else{
        $opc = $_POST["select"];
        $objColector= new publicacionCollector();
        $cred = $objColector->crearPublicacion($tem,$mes,$opc);
        $mensaje="Nueva Publicacion Ingresada";
        header("location:mensajeAdmin.php?mensaje=$mensaje");
    }
    
?>