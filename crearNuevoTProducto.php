<?php
    session_start();
    require_once("tipoproductoCollector.php");
    
    $nombre = $_POST["nue"];
    $objColector= new tipoproductoCollector();
    $vrol=$objColector->comprobartipoProducto($nombre);
    if($vrol->getNombre()){
        $mensaje="este tipo de producto ya esta registrado";
        header("location:creacionTProductoPA.php?mensaje=$mensaje");
    }else{
        $nrol = $objColector->creartipoProducto($nombre);
        $mensaje="Nuevo Tipo de Producto Ingresado";
        header("location:mensajeAdmin.php?mensaje=$mensaje");
    }   
?>