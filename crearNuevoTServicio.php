<?php
    session_start();
    require_once("tiposervicioCollector.php");
    
    $nombre = $_POST["nue"];
    $objColector= new tiposervicioCollector();
    $vrol=$objColector->showTiposervicio($nombre);
    if($vrol->getNombre()){
        $mensaje="este tipo de servicio ya esta registrado";
        header("location:creacionTServicioPA.php?mensaje=$mensaje");
    }else{
        $nrol = $objColector->creartipoServicio($nombre);
        $mensaje="Nuevo Tipo de Servicio Ingresado";
        header("location:mensajeAdmin.php?mensaje=$mensaje");
    }   
?>