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
    require_once("comentarioCollector.php");
    $mes = $_POST["message"];
    if(empty($_POST["select"])){    
        $mensaje="No existen publicaciones disponibles para crear el comentario";
        header("location:mensajeAdmin.php?mensaje=$mensaje");             
    }else{
         if(empty($_POST["select2"])){    
            $mensaje="No existen usuarios disponibles para crear el comentario";
            header("location:mensajeAdmin.php?mensaje=$mensaje");             
        }else{
            $opc = $_POST["select"];
            $op2 = $_POST["select2"];
            $objColector = new comentarioCollector();
            $cred = $objColector->crearComentario($mes,$op2,$opc);
            $mensaje="Nuevo Comentario Ingresado";
            header("location:mensajeAdmin.php?mensaje=$mensaje");        
        }
    }
?>