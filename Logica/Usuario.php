<?php



class Usuario{

    private $cedula_identidad;
    private $nombre;
    private $apellido;
    private $esActivo;

    private $correo;
    private $contrasenia;
    private $telefono;




    public function getCedulaIdentidad()
    {
        return $this->cedula_identidad;
    }

    public function setCedulaIdentidad($cedula_identidad)
    {
        $this->cedula_identidad = $cedula_identidad;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getApellido()
    {
        return $this->apellido;
    }


    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }


    public function getEsActivo()
    {
        return $this->esActivo;
    }


    public function setEsActivo($esActivo)
    {
        $this->esActivo = $esActivo;
    }

    public function getContrasenia()
    {
        return $this->contrasenia;
    }


    public function setContrasenia($contrasenia)
    {
        $this->contrasenia = $contrasenia;
    }


    public function getTelefono()
    {
        return $this->telefono;
    }


    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }


    public function getCorreo()
    {
        return $this->correo;
    }


    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }
    public function Registro(){
        include_once("../Persistencia/UsuarioBD.php");

        $usuarioBD = new UsuarioBD();
        return $usuarioBD->CrearCuenta($this->cedula_identidad, $this->nombre, $this->apellido, $this->contrasenia, $this->correo, $this->telefono);


}



    public function eliminarUsuario(){
        include_once("../Persistencia/UsuarioBD.php");

        $usuarioBD = new UsuarioBD();
        return $usuarioBD->EliminarUsuario($this->cedula_identidad);
    }


    public function listarUsuarios(){
        include_once("../Persistencia/UsuarioBD.php");

        $usuarioBD = new UsuarioBD();
        return $usuarioBD->listarUsuarios();
    }

    






public function EditarPerfil(){


}
    public function Login() {
        include_once("../Persistencia/UsuarioBD.php");

        $usuarioBD = new UsuarioBD();
        return $usuarioBD->IniciarSesion($this->cedula_identidad, $this->contrasenia);
    }

    public function CerrarSession(){

    }

    public function Recuperar_Contrasenia(){

    }

    public function Ayuda(){

    }

    public function Buscar(){

    }

    public function Tarifas(){


    }

    public function Mostrar_Reservas(){

    }

    public function Modificar_Reserva(){

    }

    public function Cancelar_Reserva(){

    }

    public function Cerrar_Session(){


    }


}