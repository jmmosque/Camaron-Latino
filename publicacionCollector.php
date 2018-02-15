<?php
    if ($_SESSION){     
        if ($_SESSION["perfil"]=="admin"){            
        }else{
            header("location:index.php"); 
        }                            
    }else{
        header("location:index.php");
    }

    include_once('publicacion.php');
    include_once('Collector.php');

    class publicacionCollector extends Collector{

    function showPublicacion(){
        $rows = self::$db->getRows("SELECT * FROM publicacion INNER JOIN usuario ON usuario.id_usuario = publicacion.id_usuario");
        $array = array();
        foreach($rows as $c){
        $aux = new publicacion();
        $aux->setIdPublicacion($c{'id_publicacion'});
        $aux->setTitulo($c{'titulo'});
        $aux->setContenido($c{'contenido'});
        $aux->setIdUsuario($c{'id_usuario'});
        $aux->setNombre($c{'nombre'});
        $aux->setFecha($c{'fecha_publicacion'});
        $aux->setImagen($c{'imagen'});
        $aux->setDirimg($c{'direccion'});
        array_push($array, $aux);
        }
        return $array;
    }

    function deletePublicacion($id){
        $deleterow = self::$db->deleteRow("DELETE FROM publicacion WHERE id_publicacion= ?", array($id));
    }
    
    function comprobarPublicacion($id) {
        $rows = self::$db->getRows("SELECT * FROM publicacion WHERE id_publicacion=? ", array($id));        
        $aux = new publicacion();
        foreach($rows as $c){
        $aux->setIdPublicacion($c{'id_publicacion'});
        $aux->setTitulo($c{'titulo'});
        $aux->setContenido($c{'contenido'});
        $aux->setIdUsuario($c{'id_usuario'});
        $aux->setFecha($c{'fecha_publicacion'});
        $aux->setImagen($c{'imagen'});
        $aux->setDirimg($c{'direccion'});
        }
        return $aux;        
    }
        
    function crearPublicacion($tit,$con,$idu,$fec,$img,$dii){
        $insertarrow = self::$db->insertRow("INSERT INTO publicacion (titulo,contenido,id_usuario,fecha_publicacion,imagen,direccion) VALUES (?,?,?,?,?,?)", array ("{$tit}","{$con}",$idu,"{$fec}","{$img}","{$dii}"));
    }
    
    function editarPublicacion($tit,$con,$id,$img,$fec){
        $row = self::$db->getRows("UPDATE publicacion SET titulo = ? , contenido = ? , imagen = ? , fecha_publicacion = ? where id_publicacion= ?",array("{$tit}","{$con}","{$img}","{$fec}",$id));
    }
}

?>

