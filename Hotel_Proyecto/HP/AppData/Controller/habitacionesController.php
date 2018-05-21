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
        $datos=$this->habitaciones->getAll();
        return $datos;
    }
}