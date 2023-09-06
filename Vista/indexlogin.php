<?php
if (isset($_POST['btnCrearUsuario'])) {
    include_once("../Logica/Usuario.php");

    $cedula_identidad = filter_var($_POST['cedula_identidad'], FILTER_SANITIZE_STRING);
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    $esActivo = true;
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    $contrasenia = $_POST['contrasenia'];
    $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);

    $nuevoUsuario = new Usuario();
    $nuevoUsuario->setCedulaIdentidad($cedula_identidad);
    $nuevoUsuario->setNombre($nombre);
    $nuevoUsuario->setApellido($apellido);
    $nuevoUsuario->setEsActivo($esActivo);
    $nuevoUsuario->setCorreo($correo);


    $hashedPassword = password_hash($contrasenia, PASSWORD_DEFAULT);
    $nuevoUsuario->setContrasenia($hashedPassword);

    $nuevoUsuario->setTelefono($telefono);

    $salioBien = $nuevoUsuario->Registro();

    if ($salioBien) {
        echo "<script>alert('Usuario Creado')</script>";
        session_start();
        $_SESSION['nombreLogeado'] = $nombre;
        header("Location: ../Vista/index.php");
    } else {
        echo "<script>alert('Revise los datos')</script>";
    }
}

if (isset($_POST['btnEnviar'])) {
    include_once("../Logica/Usuario.php");
    $usuario = new Usuario();
    $usuario->setContrasenia($_POST['pass']);
    $usuario->setCedulaIdentidad($_POST['ci']);

    $nombreUsuario = $usuario->Login();

    if ($nombreUsuario !== false) {
        session_start();
        $_SESSION['nombreLogeado'] = $nombreUsuario;
        header("Location: ../Vista/index.php");
        exit();
    } else {
        echo "<script>alert('NO COINCIDEN LAS CREDENCIALES');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>StrikePoint</title>
    <link rel="stylesheet" href="./styles.css">
    <style>
        .cover-image {
            background-image: url('images/logo.png');
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.5;
            z-index: -1;
        }
    </style>
</head>
<body>
<div id="container">
    <div id="cover">
        <div class="cover-image"></div>
        <h1 class="sign-up">¡Bienvenido!</h1>
        <p class="sign-up">Ingresa tus detalles personales<br> para poder reservar desde tu casa</p>
        <a class="button sign-up" href="#cover">Registrarse</a>

        <h1 class="sign-in">¡Bienvenido de nuevo!</h1>
        <p class="sign-in">Para poder reservar, por favor<br> inicia sesión con tu información personal</p>
        <br>
        <a class="button sub sign-in" href="#">Iniciar Sesión</a>
    </div>

    <div id="login">
        <h1>Iniciar Sesión</h1>
        <form method="post">
            <input type="text" placeholder="Cedula de Identidad" autocomplete="off" name="ci" required><br>
            <input type="password" placeholder="Contraseña" name="pass" required><br>
            <a id="forgot-pass" href="#">¿Olvidaste tu contraseña?</a><br>
            <input class="submit-btn" type="submit" name="btnEnviar" value="Iniciar Sesión">
        </form>
    </div>

    <div id="register">
        <h1>Crear Cuenta</h1>
        <form method="post">
            <input type="text" placeholder="Número de Cédula" name="cedula_identidad" autocomplete="off" required><br>
            <input type="text" placeholder="Nombre" name="nombre" autocomplete="off" required><br>
            <input type="text" placeholder="Apellido" name="apellido" required autocomplete="off" required><br>
            <input type="email" placeholder="Correo Electrónico" name="correo" autocomplete="off" required><br>
            <input type="text" placeholder="Número de Teléfono" name="telefono" autocomplete="off" required><br>
            <input type="password" placeholder="Contraseña" name="contrasenia" autocomplete="off" required><br>
            <input class="submit-btn" type="submit" name="btnCrearUsuario" value="Crear Usuario">
        </form>
    </div>
</div>
</body>
</html>