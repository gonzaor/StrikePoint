<?php

class Conexion
{

    private $con;


  public function conectar() {

      $this->con = mysqli_connect("localhost", "root", "", "strikepoint");
      if (!$this->con) {
          die("No se ha podido conectar a MySQL: ". mysqli_connect_error());
      }else{
          return $this->con;

      }

  }

  public function cerrar() {
      mysqli_close($this->con);
  }




}