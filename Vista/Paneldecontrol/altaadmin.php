<?php

include_once("../../Logica/Administrador.php");

if (isset($_POST['submit'])) {
    $ci_admin = $_POST['ci_admin'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contraseña = $_POST['contraseña'];
    $mail = $_POST['mail'];
    $telefono = $_POST['telefono'];

    // Encriptar la contraseña antes de almacenarla
    $admin = new Administrador();

    $admin->setCIAdmin($ci_admin);
    $admin->setNombre($nombre);
    $admin->setApellido($apellido);
    $admin->setContraseña($contraseña); // Almacena la contraseña en forma de hash
    $admin->setMail($mail);
    $admin->setTelefono($telefono);
    $admin->setEstado('Activo');

    $resultado = $admin->registrarAdmin();

    if ($resultado) {
        echo "<script>alert('Admin agregado exitosamente.');</script>";
        header("Location: listaradmin.php");
    } else {
        echo "Error al agregar el admin.";
    }
}

?>

<html>
<head>
    <title>Alta Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Alta Admin</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="ci_admin">Cedula de Identidad:</label>
            <input type="text" class="form-control" id="ci_admin" name="ci_admin" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña:</label>
            <input type="password" class="form-control" id="contraseña" name="contraseña" required>
        </div>
        <div class="form-group">
            <label for="mail">Mail:</label>
            <input type="email" class="form-control" id="mail" name="mail" required>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>

</body>
</html>
