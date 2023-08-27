<?php

class Detalles_reserva
{
private $reserva;
private $cliente;
private $fecha;
private $horario;
private $complejo;

    /**
     * @param $reserva
     * @param $cliente
     * @param $fecha
     * @param $horario
     * @param $complejo
     */
    public function __construct($reserva, $cliente, $fecha, $horario, $complejo)
    {
        $this->reserva = $reserva;
        $this->cliente = $cliente;
        $this->fecha = $fecha;
        $this->horario = $horario;
        $this->complejo = $complejo;
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
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
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

public function CalcularTotal(){
        
}
}