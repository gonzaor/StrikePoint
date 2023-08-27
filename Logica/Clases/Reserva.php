<?php

class Reserva
{
private $reserva;
private $complejo;
 private $usuario;
 private $horario;
 private $estado;
 private $descripcion;

    /**
     * @param $reserva
     * @param $complejo
     * @param $usuario
     * @param $horario
     * @param $estado
     * @param $descripcion
     */
    public function __construct($reserva, $complejo, $usuario, $horario, $estado, $descripcion)
    {
        $this->reserva = $reserva;
        $this->complejo = $complejo;
        $this->usuario = $usuario;
        $this->horario = $horario;
        $this->estado = $estado;
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getReserva()
    {
        return $this->reserva;
    }

    /**
     * @param mixed $reserva
     */
    public function setReserva($reserva)
    {
        $this->reserva = $reserva;
    }

    /**
     * @return mixed
     */
    public function getComplejo()
    {
        return $this->complejo;
    }

    /**
     * @param mixed $complejo
     */
    public function setComplejo($complejo)
    {
        $this->complejo = $complejo;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * @param mixed $horario
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;
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

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
public function RealizarReserva(){

}

}