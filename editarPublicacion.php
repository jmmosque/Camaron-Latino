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

    $cod = $_GET["id"];
    $tem = $_POST["tem"];
    $mes = $_POST["message"];

    $sug = new publicacionCollector();
    $actcre = $sug->editarPublicacion($tem,$mes,$cod);
    $mensaje="publicacion actualizada correctamente";
    header("location:mensajeAdmin.php?mensaje=$mensaje");
?>