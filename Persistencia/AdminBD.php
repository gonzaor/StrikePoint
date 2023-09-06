<?php

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
		$stmt->bind_param("isssssi", $ci_admin, $nombre, $apellido, $contraseña, "Activo", $mail, $telefono);
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
   		$db = $this->conectar();
   		$stmt = $db->prepare("SELECT * FROM Admin");
   		$stmt->execute();
   		$result = $stmt->get_result();
   		$admins = array();
   		while($row = $result->fetch_assoc()) {
   			$admins[] = $row;
   		}
   		return $admins;
   	}

 
    
    



}