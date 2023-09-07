<?php
include_once("Conexion.php");
class AdminBD extends Conexion
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
*//**/

	public function registrarAdmin($ci_admin, $nombre, $apellido, $contraseña, $estado, $mail, $telefono) {
		$db = $this->conectar();
		$stmt = $db->prepare("INSERT INTO Admin (ci_admin, nombre, apellido, contraseña, estado, mail, telefono) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isssssi", $ci_admin, $nombre, $apellido, $contraseña, $estado, $mail, $telefono);
		if($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}


    public function IniciarSesion($ci_admin, $contraseña) {
        $db = $this->conectar();
        $stmt = $db->prepare("SELECT * FROM Admin WHERE ci_admin = ? AND contraseña = ?");
        $stmt->bind_param("is", $ci_admin, $contraseña);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function modificarAdmin($ci_admin, $nombre, $apellido, $contraseña, $estado, $mail, $telefono) {
   		$db = $this->conectar();
   		$stmt = $db->prepare("UPDATE Admin SET nombre = ?, apellido = ?, contraseña = ?, estado = ?, mail = ?, telefono = ? WHERE ci_admin = ?");
   		$stmt->bind_param("ssssssi", $nombre, $apellido, $contraseña, $estado, $mail, $telefono, $ci_admin);
   		if($stmt->execute()) {
   			return true;
   		} else {
   			return false;
   		}
   	}
    
    public function eliminarAdmin($ci_admin) {
        $db = $this->conectar();
        $stmt = $db->prepare("UPDATE Admin SET estado = 'F' WHERE ci_admin = ?");
        $stmt->bind_param("i", $ci_admin);
        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }



    public function listarAdmin() {
        $conexion = $this->conectar();
        $query = "SELECT * FROM Admin WHERE ESTADO != 'f'"; // Asumiendo que la tabla se llama Admin
        $resultado = mysqli_query($conexion, $query);

        $admins = array();

        if ($resultado) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                $admin = new Administrador();
                $admin->setCIAdmin($row['ci_admin']);
                $admin->setNombre($row['nombre']);
                $admin->setApellido($row['apellido']);
                $admin->setContraseña($row['contraseña']);
                $admin->setEstado($row['estado']);
                $admin->setMail($row['mail']);
                $admin->setTelefono($row['telefono']);

                $admins[] = $admin;
            }
        }

        mysqli_close($conexion);

        return $admins;
    }

    public function obtenerAdminPorCI($ci_admin) {
        $conexion = $this->conectar();
        $stmt = $conexion->prepare("SELECT * FROM Admin WHERE ci_admin = ?");
        $stmt->bind_param("i", $ci_admin);

        if ($stmt->execute()) {
            $resultado = $stmt->get_result();

            if ($resultado->num_rows === 1) {
                $row = $resultado->fetch_assoc();

                $admin = new Administrador();
                $admin->setCIAdmin($row['ci_admin']);
                $admin->setNombre($row['nombre']);
                $admin->setApellido($row['apellido']);
                $admin->setContraseña($row['contraseña']);
                $admin->setEstado($row['estado']);
                $admin->setMail($row['mail']);
                $admin->setTelefono($row['telefono']);

                return $admin;
            } else {
                return null; // No se encontró ningún administrador con la cédula especificada
            }
        } else {
            return null; // Error en la ejecución de la consulta
        }

        $stmt->close();
        $conexion->close();
    }









}