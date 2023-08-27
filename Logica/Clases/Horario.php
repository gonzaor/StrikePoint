<?php

class Horario
{
private $horario;
private $reserva;
private $complejo;
private $admin;
private $HoraInicio;
private $HoraFin;/**
 * @param $horario
 * @param $reserva
 * @param $complejo
 * @param $admin
 * @param $HoraInicio
 * @param $HoraFin
 */public function __construct($horario, $reserva, $complejo, $admin, $HoraInicio, $HoraFin)
{
    $this->horario = $horario;
    $this->reserva = $reserva;
    $this->complejo = $complejo;
    $this->admin = $admin;
    $this->HoraInicio = $HoraInicio;
    $this->HoraFin = $HoraFin;
}/**
 * @return mixed
 */
public function getHorario()
{
    return $this->horario;
}/**
 * @param mixed $horario
 */
public function setHorario($horario)
{
    $this->horario = $horario;
}/**
 * @return mixed
 */
public function getReserva()
{
    return $this->reserva;
}/**
 * @param mixed $reserva
 */
public function setReserva($reserva)
{
    $this->reserva = $reserva;
}/**
 * @return mixed
 */
public function getComplejo()
{
    return $this->complejo;
}/**
 * @param mixed $complejo
 */
public function setComplejo($complejo)
{
    $this->complejo = $complejo;
}/**
 * @return mixed
 */
public function getAdmin()
{
    return $this->admin;
}/**
 * @param mixed $admin
 */
public function setAdmin($admin)
{
    $this->admin = $admin;
}/**
 * @return mixed
 */
public function getHoraInicio()
{
    return $this->HoraInicio;
}/**
 * @param mixed $HoraInicio
 */
public function setHoraInicio($HoraInicio)
{
    $this->HoraInicio = $HoraInicio;
}/**
 * @return mixed
 */
public function getHoraFin()
{
    return $this->HoraFin;
}/**
 * @param mixed $HoraFin
 */
public function setHoraFin($HoraFin)
{
    $this->HoraFin = $HoraFin;
}

public function MostraInfo(){

}
}