<?php
if (isset($_POST['btnEnviar'])) {
    include_once("../Logica/Administrador.php");
    $admin = new Administrador();
    $admin->setContraseña($_POST['pass']);
    $admin->setCIAdmin($_POST['ci']);

 $nombreAdmin = $admin->iniciarSesion();

    if ($admin->iniciarSesion()) {
        session_start();
        $_SESSION['nombreLogeadoAdmin'] = $admin->getNombre(); //
        header("Location: ../Vista/test.php"); // 
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
        <!-- ... Tu contenido para la página principal ... -->
    </div>

    <div id="login">
        <h1>Iniciar Sesión Administrador</h1>
        <form method="post">
            <input type="text" placeholder="Cedula de Identidad" autocomplete="off" name="ci" required><br>
            <input type="password" placeholder="Contraseña" name="pass" required><br>
            <!-- ... Otros campos de inicio de sesión ... -->
            <input class="submit-btn" type="submit" name="btnEnviar" value="Iniciar Sesión">
        </form>
    </div>
</div>
</body>
</html>
