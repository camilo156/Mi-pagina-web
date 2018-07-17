<?php

$conexion = new mysqli('localhost', 'root', 'a', 'articulos');
if ( $conexion->connect_error){ die('Error de conexión'); }
$conexion->set_charset('utf8');

class Blog {
    function __construct($apellidos, $nombre, $email){
        $this->id_autor = 0;
        $this->apellidos = $apellidos;
        $this->nombre = $nombre;
        $this->email = $email;
   

    }

    function insertaFila(){
        // inserta el objeto actual como nueva fila en la BD
        global $conexion;
        $sql = $conexion->prepare('insert into autores values (0, ?, ?, ?) ');
        $sql->bind_param('sss', $this->apellidos, $this->nombre, $this->email);
        $sql->execute();
    }

    function borraFila(){
        // borra el objeto actual de la BD
        global $conexion;
        $sql = $conexion->prepare('delete from autores where id_autor = ? ');
        $sql->bind_param('i', $this->id_autor);
        $sql->execute();
    }

    /* function actualizaFila(){
        // actualiza el objeto actual en la BD
        global $conexion;
        $sql = $conexion->prepare('update autores set apellidos = ?, nombre = ?, email = ? where id_autores);
        $sql->bind_param('sss', $this->apellidos, $this->nombre, $this->email);
        $sql->execute();
    } */

    /* static function cogeFila(){
        $obj = new Blog('','','');
        global $conexion;
        $sql = $conexion->prepare('select id_autor, apellidos, nombre, email');
        $sql->bind_param('sss');
        $sql->execute();
        $sql->bind_result($obj->id_autor, $obj->apellidos, $obj->nombre, $obj->email);
        $sql->fetch();
        return $obj;
        // toma lo de workbench y las devuelve en x del archipvo pruebas
    } */

}


?>