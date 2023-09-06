<?php

include_once("Conexion.php");
class UsuarioBD extends Conexion
{

    public function IniciarSesion($username, $password) {
        $conexion = $this->conectar();
        $query = "SELECT ci_usuario, contraseña, nombre FROM usuario WHERE ci_usuario = ?";

        $stmt = mysqli_prepare($conexion, $query);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $resu = mysqli_stmt_get_result($stmt);

        if ($resu && mysqli_num_rows($resu) === 1) {
            $row = mysqli_fetch_assoc($resu);
            $contraseñaEncriptada = $row['contraseña'];

            if (password_verify($password, $contraseñaEncriptada)) {
                return $row['nombre'];
            }
        }

        return false;
    }
    public function CrearCuenta($CI, $Nombre, $Apellido, $Contraseña, $Mail, $tel){
        $conexion = $this->conectar();
        $query = "INSERT INTO usuario (ci_usuario, nombre, apellido, contraseña, estado, mail, telefono) VALUES ('$CI', '$Nombre', '$Apellido', '$Contraseña','Activo', '$Mail', '$tel')";
        $resultado = mysqli_query($conexion, $query);
        return $resultado;
    }




}





