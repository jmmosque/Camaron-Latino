<?php
    session_start();
    require_once("credencialCollector.php");
    require_once("usuarioCollector.php");
    $nombre = $_POST["nom"];
    $cedula = $_POST["ced"];
    $telefo = $_POST["tel"];
    $correo = $_POST["cor"];
    $direcc = $_POST["dir"];
    $usuari = $_POST["usu"];
    $contra = $_POST["con"];
    $opcion = $_POST["select"];
    $idrola = 1;
    $idrolu = 2;

    $objColector= new credencialCollector();
    $credencial=$objColector->comprobarCredencial("$usuari");
    $objColector2= new usuarioCollector();
    $usuario1=$objColector2->comprobarUsuarioxCedula("$cedula");
    $usuario2=$objColector2->comprobarUsuarioxCorreo("$correo");
    $usuario3=$objColector2->comprobarUsuarioxTelefono("$telefo");
    if($credencial->getUsuario()){
        $mensaje="este usuario ya esta registrado";
        header("location:creacionUsuarioPA.php?mensaje=$mensaje");
    }else{
        if($usuario1->getIdentificacion()){
            $mensaje="numero de identificacion ya registrado";
            header("location:creacionUsuarioPA.php?mensaje=$mensaje");
        }else{
            if($usuario2->getCorreo()){
                $mensaje="este correo ya esta registrado";
                header("location:creacionUsuarioPA.php?mensaje=$mensaje");
            }else{
                if($usuario3->getTelefono()){
                    $mensaje="este telefono ya esta registrado";
                    header("location:creacionUsuarioPA.php?mensaje=$mensaje");
                }else{
                    if($opcion == 1){
                        $cred = $objColector->crearcredencial($usuari,$contra);
                        $idcre = $objColector->consultarCredencial($usuari,$contra);
                        $idc = $idcre->getIdCredencial();
                        $prov = $objColector2->crearusuario($nombre,$cedula,$correo,$telefo,$direcc,$idc,$idrola);
                        $mensaje="Usuario creado correctamente";
                        header("location:mensajeAdmin.php?mensaje=$mensaje"); 
                    }else{
                        $cred = $objColector->crearcredencial($usuari,$contra);
                        $idcre = $objColector->consultarCredencial($usuari,$contra);
                        $idc = $idcre->getIdCredencial();
                        $prov = $objColector2->crearusuario($nombre,$cedula,$correo,$telefo,$direcc,$idc,$idrolu);
                        $mensaje="Usuario creado correctamente";
                        header("location:mensajeAdmin.php?mensaje=$mensaje"); 
                    }
                } 
            }
        }   
    }
?>