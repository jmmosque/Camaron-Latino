<?php
    if ($_SESSION){     
        if ($_SESSION["perfil"]=="admin"){                
        }else{
            header("location:index.php"); 
        }                            
    }else{
        header("location:index.php");
    }

    include_once('usuario.php');
    include_once('Collector.php');
    include_once('credencialCollector.php');
    include_once('rolCollector.php');

    class usuarioCollector extends Collector
    {
    function todaInfo() {
        $rows = self::$db->getRows("SELECT * FROM public.usuario ");        
        $arrayUsuario= array();          
        foreach ($rows as $c){
          $aux = new usuario();
          $aux->setIdUsuario($c{'id_usuario'});
          $aux->setNombre($c{'nombre'});
          $aux->setIdentificacion($c{'identificacion'});
          $aux->setCorreo($c{'correo'});
          $aux->setTelefono($c{'telefono'});
          $aux->setDireccion($c{'direccion'});
          $aux->setIdRol($c{'id_rol'});
          $aux->setIdcredencial($c{'id_credencial'});
          $rol = new rolCollector();
          $r = $rol->showRol($aux->getIdRol());
          $aux->setRol($r->getNombre());
          $credencial = new credencialCollector();
          $c = $credencial->showCredencial($aux->getIdcredencial());
          $aux->setUsuario($c->getUsuario());
          $aux->setClave($c->getClave());
          array_push($arrayUsuario, $aux);
          }
        return $arrayUsuario;   
    }
    function todaInfoCed($ced) {
        $rows = self::$db->getRows("SELECT * FROM public.usuario WHERE identificacion=? ", array("{$ced}"));      
        $aux = new usuario();    
        foreach ($rows as $c){  
          $aux->setIdUsuario($c{'id_usuario'});
          $aux->setNombre($c{'nombre'});
          $aux->setIdentificacion($c{'identificacion'});
          $aux->setCorreo($c{'correo'});
          $aux->setTelefono($c{'telefono'});
          $aux->setDireccion($c{'direccion'});
          $aux->setIdRol($c{'id_rol'});
          $aux->setIdcredencial($c{'id_credencial'});
          $rol = new rolCollector();
          $r = $rol->showRol($aux->getIdRol());
          $aux->setRol($r->getNombre());
          $credencial = new credencialCollector();
          $c = $credencial->showCredencial($aux->getIdcredencial());
          $aux->setUsuario($c->getUsuario());
          $aux->setClave($c->getClave());
          }
         return $aux;   
    }
    function todaInfoID($id) {
        $rows = self::$db->getRows("SELECT * FROM public.usuario WHERE id_usuario=? ", array("{$id}"));      
        $aux = new usuario();    
        foreach ($rows as $c){  
          $aux->setIdUsuario($c{'id_usuario'});
          $aux->setNombre($c{'nombre'});
          $aux->setIdentificacion($c{'identificacion'});
          $aux->setCorreo($c{'correo'});
          $aux->setTelefono($c{'telefono'});
          $aux->setDireccion($c{'direccion'});
          $aux->setIdRol($c{'id_rol'});
          $aux->setIdcredencial($c{'id_credencial'});
          $rol = new rolCollector();
          $r = $rol->showRol($aux->getIdRol());
          $aux->setRol($r->getNombre());
          $credencial = new credencialCollector();
          $c = $credencial->showCredencial($aux->getIdcredencial());
          $aux->setUsuario($c->getUsuario());
          $aux->setClave($c->getClave());
          }
         return $aux;   
    }
    function showUsuarios() {
        $rows = self::$db->getRows("SELECT * FROM usuario ");        
        $arrayUsuario= array();          
        foreach ($rows as $c){
          $aux = new usuario();
          $aux->setIdUsuario($c{'id_usuario'});
          $aux->setNombre($c{'nombre'});
          $aux->setIdentificacion($c{'identificacion'});
          $aux->setCorreo($c{'correo'});
          $aux->setTelefono($c{'telefono'});
          $aux->setDireccion($c{'direccion'});
          $aux->setIdRol($c{'id_rol'});
          $aux->setIdcredencial($c{'id_credencial'});
        array_push($arrayUsuario, $aux);
        }
        return $arrayUsuario;        
    }
    function comprobarUsuarioxIdCredencial($idusu) {
        $rows = self::$db->getRows("SELECT * FROM public.usuario WHERE id_credencial=? ",array($idusu));        
        $ObjUsuario = new usuario();
        foreach($rows as $c){
            $ObjUsuario->setIdUsuario($c{'id_usuario'});
            $ObjUsuario->setNombre($c{'nombre'});
            $ObjUsuario->setIdentificacion($c{'identificacion'});
            $ObjUsuario->setCorreo($c{'correo'});
            $ObjUsuario->setTelefono($c{'telefono'});
            $ObjUsuario->setDireccion($c{'direccion'});
            $ObjUsuario->setIdRol($c{'id_rol'});
            $ObjUsuario->setIdcredencial($c{'id_credencial'});   
            $rol = new rolCollector();
            $r = $rol->showRol($ObjUsuario->getIdRol());
            $ObjUsuario->setRol($r->getNombre());
            $credencial = new credencialCollector();
            $c = $credencial->showCredencial($ObjUsuario->getIdcredencial());
            $ObjUsuario->setUsuario($c->getUsuario());
            $ObjUsuario->setClave($c->getClave());  
        }
        return $ObjUsuario;        
    }
    function comprobarUsuarioxCedula($ced) {
        $rows = self::$db->getRows("SELECT * FROM public.usuario WHERE identificacion=? ", array ("{$ced}"));        
        $ObjUsuario = new usuario();
        foreach($rows as $c){
            $ObjUsuario->setIdUsuario($c{'id_usuario'});
            $ObjUsuario->setNombre($c{'nombre'});
            $ObjUsuario->setIdentificacion($c{'identificacion'});
            $ObjUsuario->setCorreo($c{'correo'});
            $ObjUsuario->setTelefono($c{'telefono'});
            $ObjUsuario->setDireccion($c{'direccion'});
            $ObjUsuario->setIdRol($c{'id_rol'});
            $ObjUsuario->setIdcredencial($c{'id_credencial'});   
            $rol = new rolCollector();
            $r = $rol->showRol($ObjUsuario->getIdRol());
            $ObjUsuario->setRol($r->getNombre());
            $credencial = new credencialCollector();
            $c = $credencial->showCredencial($ObjUsuario->getIdcredencial());
            $ObjUsuario->setUsuario($c->getUsuario());
            $ObjUsuario->setClave($c->getClave());  
        }
        return $ObjUsuario;        
    }
    function comprobarUsuarioxCorreo($cor) {
        $rows = self::$db->getRows("SELECT * FROM public.usuario WHERE correo=? ", array ("{$cor}"));        
        $ObjUsuario = new usuario();
    foreach($rows as $c){
        $ObjUsuario->setIdUsuario($c{'id_usuario'});
        $ObjUsuario->setNombre($c{'nombre'});
        $ObjUsuario->setIdentificacion($c{'identificacion'});
        $ObjUsuario->setCorreo($c{'correo'});
        $ObjUsuario->setTelefono($c{'telefono'});
        $ObjUsuario->setDireccion($c{'direccion'});
        $ObjUsuario->setIdRol($c{'id_rol'});
        $ObjUsuario->setIdcredencial($c{'id_credencial'});   
        $rol = new rolCollector();
        $r = $rol->showRol($ObjUsuario->getIdRol());
        $ObjUsuario->setRol($r->getNombre());
        $credencial = new credencialCollector();
        $c = $credencial->showCredencial($ObjUsuario->getIdcredencial());
        $ObjUsuario->setUsuario($c->getUsuario());
        $ObjUsuario->setClave($c->getClave());  
    }
    return $ObjUsuario;        
    }
    function comprobarUsuarioxTelefono($tel) {
    $rows = self::$db->getRows("SELECT * FROM public.usuario WHERE telefono=? ", array ("{$tel}"));        
    $ObjUsuario = new usuario();
    foreach($rows as $c){
        $ObjUsuario->setIdUsuario($c{'id_usuario'});
        $ObjUsuario->setNombre($c{'nombre'});
        $ObjUsuario->setIdentificacion($c{'identificacion'});
        $ObjUsuario->setCorreo($c{'correo'});
        $ObjUsuario->setTelefono($c{'telefono'});
        $ObjUsuario->setDireccion($c{'direccion'});
        $ObjUsuario->setIdRol($c{'id_rol'});
        $ObjUsuario->setIdcredencial($c{'id_credencial'});   
        $rol = new rolCollector();
        $r = $rol->showRol($ObjUsuario->getIdRol());
        $ObjUsuario->setRol($r->getNombre());
        $credencial = new credencialCollector();
        $c = $credencial->showCredencial($ObjUsuario->getIdcredencial());
        $ObjUsuario->setUsuario($c->getUsuario());
        $ObjUsuario->setClave($c->getClave());  
    }
    return $ObjUsuario;        
    }
    
    function deleteUsuario($id){
        $deleterow = self::$db->deleteRow("DELETE FROM usuario WHERE id_usuario= ?", array($id));
    }
    function crearusuario($nom,$ide,$cor,$tel,$dir,$idc,$idr){
        $insertarrow = self::$db->insertRow("INSERT INTO public.usuario (nombre,identificacion,correo,telefono,direccion,id_credencial,id_rol) VALUES (?,?,?,?,?,?,?)", array ("{$nom}","{$ide}","{$cor}","{$tel}","{$dir}","{$idc}","{$idr}"));
    }
    function editarusuario($id,$nom,$ide,$cor,$tel,$dir,$idr){
        $editarrow = self::$db->getRows("update usuario set nombre = ?, identificacion = ?, correo = ?, telefono = ?, direccion = ?, id_rol = ? where id_usuario = ?",array("{$nom}","{$ide}","{$cor}","{$tel}","{$dir}","{$idr}",$id));
    }
}
   /* $objColector = new usuarioCollector();
    
    //print_r($credencial);

    foreach($objColector->todaInfo() as $credencial){
    echo "0: ". $credencial->getIdCredencial()."<br>";
    echo "1: ". $credencial->getNombre()."<br>";
    echo "2: ". $credencial->getIdentificacion()."<br>";
    echo "3: ". $credencial->getCorreo()."<br>";
    echo "4: ". $credencial->getTelefono()."<br>";
    echo "5: ". $credencial->getDireccion()."<br>";
    echo "6: ". $credencial->getIdRol()."<br>";
    echo "7: ". $credencial->getIdcredencial()."<br>";
    echo "8: ". $credencial->getUsuario()."<br>";
    echo "9: ". $credencial->getClave()."<br>";
    echo "10: ". $credencial->getRol()."<br>";
    echo "<br>";
    }*/
?>