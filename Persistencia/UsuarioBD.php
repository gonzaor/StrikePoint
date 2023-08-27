<?php

include_once("Conexion.php");
class UsuarioBD extends Conexion
{

    public function IniciarSesion($username, $password) {
        $conexion = $this->conectar();
        $query = "SELECT ci_usuario, contraseña FROM usuario WHERE ci_usuario = '$username' AND contraseña='$password'";
        $resu = mysqli_query($conexion, $query);
        if ($resu && mysqli_num_rows($resu) === 1) {
            return true;
        } else {
            return false;
        }

      /* luego para trabajar con el hash de las contraseñas etc
       if ($resu && mysqli_num_rows($resu) === 1) {
            $row = mysqli_fetch_assoc($resu);
            $hashedPassword = $row['contraseña'];

            if (password_verify($password, $hashedPassword)) {
                return true;
            }
        }

        return false;*/
    }

    public function CrearCuenta($CI, $Nombre, $Apellido, $Contraseña, $Mail, $tel){
        $conexion = $this->conectar();
        $query = "INSERT INTO usuario (ci_usuario, nombre, apellido, contraseña, estado, mail, telefono) VALUES ('$CI', '$Nombre', '$Apellido', '$Contraseña','Activo', '$Mail', '$tel')";
        $resultado = mysqli_query($conexion, $query);
        return $resultado;
    }




}





