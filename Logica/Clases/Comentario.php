<?php

class Comentario
{
private $texto;
private $fecha;
private $puntuacion;

    /**
     * @param $texto
     * @param $fecha
     * @param $puntuacion
     */
    public function __construct($texto, $fecha, $puntuacion)
    {
        $this->texto = $texto;
        $this->fecha = $fecha;
        $this->puntuacion = $puntuacion;
    }

    /**
     * @return mixed
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @param mixed $texto
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }

    /**
     * @param mixed $puntuacion
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;
    }

public function MostrarInfo(){

}
}