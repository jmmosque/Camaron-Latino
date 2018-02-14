<?php
    if ($_SESSION){     
        if ($_SESSION["perfil"]=="admin"){                
        }else{
            header("location:index.php"); 
        }                            
    }else{
        header("location:index.php");
    }
include_once('comentario.php');
include_once('Collector.php');

class comentarioCollector extends Collector{

    function showComentario(){
        $rows = self::$db->getRows("SELECT comentario.id_comentario,comentario.comentario,comentario.id_publicacion,comentario.id_usuario,publicacion.titulo,usuario.nombre FROM
        comentario INNER JOIN publicacion ON (comentario.id_publicacion = publicacion.id_publicacion) INNER JOIN usuario ON (comentario.id_usuario = usuario.id_usuario);");
        $array = array();
        foreach($rows as $c){
        $aux = new comentario();
        $aux->setIdComentario($c{'id_comentario'});
        $aux->setComentario($c{'comentario'});
        $aux->setIdPublicacion($c{'id_publicacion'});
        $aux->setIdUsuario($c{'id_usuario'});
        $aux->setTitulo($c{'titulo'});
        $aux->setNombre($c{'nombre'});
        array_push($array, $aux);
        }
        return $array;
    }

    function deleteComentario($id){
        $deleterow = self::$db->deleteRow("DELETE FROM comentario WHERE id_comentario= ?", array($id));
    }
    
    function comprobarComentario($id) {
        $rows = self::$db->getRows("SELECT * FROM comentario WHERE id_comentario=? ", array($id));        
        $aux = new comentario();
        foreach($rows as $c){
        $aux->setIdComentario($c{'id_comentario'});
        $aux->setComentario($c{'comentario'});
        $aux->setIdPublicacion($c{'id_publicacion'});
        $aux->setIdUsuario($c{'id_usuario'});
        }
        return $aux;        
    }
        
    function crearComentario($com,$idp,$idu){
        $insertarrow = self::$db->insertRow("INSERT INTO comentario (comentario,id_publicacion,id_usuario) VALUES (?,?,?)", array("{$com}",$idp,$idu));
    }
    
    function editarComentario($com,$id){
        $row = self::$db->getRows("UPDATE comentario SET comentario = ? where id_comentario= ?",array("{$com}",$id));
    }
}
?>

