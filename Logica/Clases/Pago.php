<?php

class Pago
{
private $fecha;
private $monto;
private $estado;

    /**
     * @param $fecha
     * @param $monto
     * @param $estado
     */
    public function __construct($fecha, $monto, $estado)
    {
        $this->fecha = $fecha;
        $this->monto = $monto;
        $this->estado = $estado;
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
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * @param mixed $monto
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

public function MostrarInfo(){

}
}