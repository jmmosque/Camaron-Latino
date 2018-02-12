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
    $nombre = $_POST["nom"];
    $cedula = $_POST["ced"];
    $telefo = $_POST["tel"];
    $correo = $_POST["cor"];
    $direcc = $_POST["dir"];
    $opcion = $_POST["select"];
    
    if(empty($_POST["select2"])){    
        $mensaje="No existen credenciales disponibles";
        header("location:creacionUsuarioPA.php?mensaje=$mensaje");            
    }else{
        $opcion2 = $_POST["select2"];
        $objColector2= new usuarioCollector();
        $usuario1=$objColector2->comprobarUsuarioxCedula("$cedula");
        $usuario2=$objColector2->comprobarUsuarioxCorreo("$correo");
        $usuario3=$objColector2->comprobarUsuarioxTelefono("$telefo");
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
                        $prov = $objColector2->crearusuario($nombre,$cedula,$correo,$telefo,$direcc,$opcion2,$opcion);
                        $mensaje="Usuario creado correctamente";
                        header("location:mensajeAdmin.php?mensaje=$mensaje"); 
                    } 
                }
        }    
    }
       
?>