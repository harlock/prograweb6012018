<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/05/2018
 * Time: 02:46 PM
 */

namespace AppData\Model;


class Facturacion
{
    private  $tabla="Facturacion";
    private $id_factura;
    private $id_asignares;
    private $total;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add()
    {
        $sql="insert into Facturacion(id_factura,id_asignares,total) values($id_factura,$id_asignares,$total
    )";

    }
    function get(){
        $sql="select*from Facturacion";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}