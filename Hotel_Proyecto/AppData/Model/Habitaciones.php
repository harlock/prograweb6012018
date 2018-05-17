<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/05/2018
 * Time: 02:30 PM
 */

    namespace AppData\Model;


class Habitaciones
{
     private $id_habitacion;
     private $num_habitacion;
     private $descripcion_hab;
     private $id_tipoh;
     private $id_estadoh;

     private $conexion;

     function __construct()
     {
         $this->conexion=new conexion();
     }

     function add(){
         $sql="insert into Habitaciones VALUES ('datos')";
         $datos=$this->conexion->queryResultado($sql);
         return $datos;
     }
     function get(){
         $sql="select*from Habitaciones";
         $datos=$this->conexion->queryResultado($sql);
         return $datos;
     }
     function update(){
         $sql="update Habitaciones set descripcion_hab='variable' where id_habitacion='id'";
         $datos=$this->conexion->queryResultado($sql);
         return $datos;
     }
     function delete(){
         $sql="delete from Habitaciones WHERE id_habitacion='id'";
         $datos=$this->conexion->queryResultado($sql);
         return $datos;
     }
}