<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 08/05/2018
 * Time: 02:15 PM
 */

namespace AppData\Model;


class conexion
{
    private $datos=array("server"=>"localhost","user"=>"root",
        "password"=>"", "db"=>"test_601");
    private $conexion;

    function __construct()
    {
        $this->conexion=new \mysqli($this->datos["server"],$this->datos["user"],
            $this->datos["password"],$this->datos["db"]);
    }

    public function querysimple($sql)
    {
        $this->conexion->query($sql) or die (mysqli_error($this->conexion));
    }
    public function queryResultados($sql)
    {
        $datos=$this->conexion->query($sql) or die (mysqli_error($this->conexion));
        return $datos;
    }
}