<?php
class publicacion
{
    private $idpublicacion;
    private $titulo;
    private $contenido;
    private $idusuario;
    private $nombre;

     function __construct() {
     }
    
     function setIdPublicacion($idpublicacion){
       $this->idpublicacion = $idpublicacion;
     } 
     function getIdPublicacion(){
       return $this->idpublicacion;
     }
     function setTitulo($titulo){
       $this->titulo = $titulo;
     } 
     function getTitulo(){
       return $this->titulo;
     }
     function setContenido($contenido){
       $this->contenido = $contenido;
     } 
     function getContenido(){
       return $this->contenido;
     }
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idusuario;
     }
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
}
?> 
