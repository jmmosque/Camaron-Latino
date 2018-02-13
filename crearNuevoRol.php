<?php
    session_start();
    require_once("rolCollector.php");
    $nombre = $_POST["nue"];
    $descri = $_POST["des"];


    $objColector= new rolCollector();
    $vrol=$objColector->comprobarRol("$nombre");
    if($vrol->getNombre()){
        $mensaje="este rol ya esta registrado";
        header("location:crearRol.php?mensaje=$mensaje");
    }else{
        $nrol = $objColector->crearrol($nombre,$descri);
        $mensaje="Nuevo Rol Ingresado";
        header("location:mensajeAdmin.php?mensaje=$mensaje");
    }   
?>