<?php

include_once("");
class Complejo
{

    /* Variables de la clase */
    private $id;
    private $nombre;
    private $tipoactividad;
    private $descripcion;
    private $estado;
    private $ruta_imagen;

    /* Getters, Setters y contructor */

    public function __construct($id, $nombre, $tipoactividad, $descripcion, $estado)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipoactividad = $tipoactividad;
        $this->descripcion = $descripcion;
        $this->estado = $estado;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getTipoactividad()
    {
        return $this->tipoactividad;
    }


    public function setTipoactividad($tipoactividad)
    {
        $this->tipoactividad = $tipoactividad;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /* Funciones */

    public function cambiar_id($nuevo_id){
        $this->id = $nuevo_id;




    }

    public function cambiar_nombre($nuevo_nombre){

        $this->nombre = $nuevo_nombre;

        // Iria la logica para cambiar el nombre de la BD
    }

    public function cambiar_tipoact($nueva_act){



    }
    public function cambiar_descripcion($nueva_descripcion){

        $this->descripcion = $nueva_descripcion;

        // Iria la logica para cambiar la descripcion de la BD

    }


    public function cambiar_estado($nuevo_estado){

    //Logica cambiar estado
    }

    public function cambiar_rutaimg(){

        // Logica Cambiar Ruta

    }










}