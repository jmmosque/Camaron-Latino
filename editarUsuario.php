<?php
    require_once("credencialCollector.php");
    require_once("usuarioCollector.php");
    require_once("rolCollector.php");
    $codper = $_GET["persona"];
    //echo "la persona es: ". $codper."<br>";
    $nombre = $_POST["nom"];
    $cedula = $_POST["ced"];
    $telefo = $_POST["tel"];
    $correo = $_POST["cor"];
    $direcc = $_POST["dir"];
    $usuari = $_POST["usu"];
    $contra = $_POST["con"];
    $opcion = $_POST["select"];
    $idrola = "1";
    $idrolu = "2";

    $colpersona = new usuarioCollector();
    $persona = $colpersona->todaInfoID($codper);
    $colcredencial = new credencialCollector();
    $codcredencial = $persona->getIdcredencial();
    //echo "coda es:".$persona->getIdcredencial()."<br>";
    $arraycre = $colcredencial->showCredenciales();
    $contsi = 0;
    $contno = 0;
    foreach($arraycre as $c){
        if($usuari == $c->getUsuario()){
            if($persona->getIdcredencial()==$codcredencial){
              //  echo "no hya cambio"."<br>";
                $contsi = $contsi + 1;
            }else{
            //    echo "no se puede cambiar"."<br>";
                $contno = $contno + 1;
            }
        }else{
          //  echo "nuevo ingreso"."<br>";
             $contsi = $contsi + 1;
        }
    }
   
    if($contno > 0){
        $mensaje="ya existe un usuario con esta credencial";
        header("location:mensajeAdmin.php?mensaje=$mensaje");
    }else{
        $actcre = $colcredencial->actualizarcredencial($usuari,$contra,$codcredencial);
        $mensaje="credenciales actualizadas correctamente";
        //echo "cod es:".$codcredencial;
        header("location:mensajeAdmin.php?mensaje=$mensaje");
    }
?>