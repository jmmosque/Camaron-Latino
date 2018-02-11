<?php

include_once('servicioimagen.php');
include_once('Collector.php');

<<<<<<< HEAD
class servicioimagenCollector extends Collector
=======
class servicioimagenCollector. extends Collector
>>>>>>> fae2899ccc4073f14078b1ae0add480a1d6cc902
{
    function showImagenes() {
        $rows = self::$db->getRows("SELECT * FROM servicio_imagen inner join servicio on servicio.id_servicio = servicio_imagen.id_servicio"); 
        $array = array();
        foreach ($rows as $c){
            $aux = new servicioimagen();
            $aux->setIdServicioImagen($c{'id_servicio_imagen'});
            $aux->setDireccion($c{'direccion'});
            $aux->setNombre($c{'nombre'});
            $aux->setIdServicio($c{'id_servicio'});
            $aux->setServicio($c{'servicio'});
            array_push($array, $aux);
        }
        return $array;        
    }
    function showImagen($id) {
        $rows = self::$db->getRows("SELECT * FROM servicio_imagen WHERE id_servicio_imagen= ?", array($id));        
        $aux = new servicioimagen();
            foreach ($rows as $c){ 
            $aux->setIdServicioImagen($c{'id_servicio_imagen'});
            $aux->setDireccion($c{'direccion'});
            $aux->setNombre($c{'nombre'});
            $aux->setIdServicio($c{'id_servicio'});
        }
        return $aux;        
    }    
    function deleteImagen($id){
        $deleterow = self::$db->deleteRow("DELETE FROM servicio_imagen WHERE id_servicio_imagen= ?", array($id));
    }
    function crearImagen($dir,$nom,$idp){
        $insertarrow = self::$db->insertRow("INSERT INTO servicio_imagen (direccion,nombre,id_servicio) VALUES (?,?,?)", array ("{$dir}","{$nom}",$idp));
    }
    function actualizarImagen($nom,$id){
        $row = self::$db->getRows("UPDATE servicio_imagen SET nombre = ? where id_servicio_imagen= ?",array("{$nom}",$id));
    }
}
?>
