<?php

include_once("Conexion.php");
class UsuarioBD extends Conexion
{

/* CREATE TABLE Usuario (
	ci_usuario INT NOT NULL PRIMARY KEY,
	nombre VARCHAR(30) NOT NULL,
	apellido VARCHAR(30) NOT NULL,
	contraseña VARCHAR(255) NOT NULL,
	estado VARCHAR(15) NOT NULL,
	mail VARCHAR(30) NOT NULL,
	telefono INT NOT NULL
);
 */
    public function listarUsuarios() {
        $conexion = $this->conectar();
        $query = "SELECT * FROM usuario";
        $resultado = mysqli_query($conexion, $query);

        $usuarios = array();

        if ($resultado) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                $usuarios[] = $row;
            }
        }
        mysqli_close($conexion);

        return $usuarios;
    }


    public function ModificarUsuario($CI, $Nombre, $Apellido, $Contraseña, $Mail, $tel) {
        $conexion = $this->conectar();
        $query = "UPDATE usuario SET nombre = '$Nombre', apellido = '$Apellido', contraseña = '$Contraseña', mail = '$Mail', telefono = '$tel' WHERE ci_usuario = '$CI'";
        $resultado = mysqli_query($conexion, $query);
        return $resultado;
    }

    public function EliminarUsuario($CI) {
        $conexion = $this->conectar();
        $query = "UPDATE usuario SET estado = 'Inactivo' WHERE ci_usuario = '$CI'";
        $resultado = mysqli_query($conexion, $query);
        return $resultado;
    }
    


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





