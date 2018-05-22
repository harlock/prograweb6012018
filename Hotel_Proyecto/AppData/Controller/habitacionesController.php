<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 03:54 PM
 */

namespace AppData\Controller;


class habitacionesController
{
    private $habitaciones;

    public function __construct()
    {
        $this->habitaciones= new \AppData\Model\Habitaciones();
    }

    public function index()
    {
        $datos1=$this->habitaciones->getAll();
        $datos2=$this->habitaciones->getdatos();
        $datos3=$this->habitaciones->getdatos2();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        return $datos;
    }
}