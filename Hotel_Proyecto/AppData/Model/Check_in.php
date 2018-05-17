<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/05/2018
 * Time: 02:46 PM
 */

namespace AppData\Model;


class Check_in
{
    private  $tabla="check_in";
    private $id_chekin;
    private $id_asignares;
    private $fecha_checkin;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        
$sql="insert into checkin (id_chekin,id_asignares,fecha_checkin) values($id_chekin,$id_asignares,$fecha_chekin)";

    }
    function get(){
        $sql="select*from check_in";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}