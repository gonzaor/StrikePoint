<?php

class Administrador 
{

/*Base de datos CREATE TABLE Admin (
	ci_admin INT NOT NULL PRIMARY KEY,
	nombre VARCHAR(30) NOT NULL,
	apellido VARCHAR(30) NOT NULL,
	contraseña VARCHAR(40) NOT NULL,
	estado VARCHAR(15) NOT NULL,
	mail VARCHAR(30) NOT NULL,
	telefono INT NOT NULL
);
*/ 

    private $ci_admin;
    private $nombre;
    private $apellido;
    private $contraseña;
    private $estado;
    private $mail;
    private $telefono;

    public function getCIAdmin() {
        return $this->ci_admin;
    }

    public function setCIAdmin($ci_admin) {
        $this->ci_admin = $ci_admin;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getContraseña() {
        return $this->contraseña;
    }

    public function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    public function registrarAdmin() {
        include_once("Persistencia/AdminBD.php");
        $adminBD = new AdminBD();
        return $adminBD->registrarAdmin($this->ci_admin, $this->nombre, $this->apellido, $this->contraseña, $this->estado, $this->mail, $this->telefono);
    }

    public function iniciarSesion() {
        include_once("Persistencia/AdminBD.php");
        $adminBD = new AdminBD();
        return $adminBD->IniciarSesion($this->ci_admin, $this->contraseña);
    }

    public function listarAdmin() {
        include_once("Persistencia/AdminBD.php");
        $adminBD = new AdminBD();
        return $adminBD->listarAdmin();
    }

    public function eliminarAdmin() {
        include_once("Persistencia/AdminBD.php");
        $adminBD = new AdminBD();
        return $adminBD->eliminarAdmin($this->ci_admin);
    }


}