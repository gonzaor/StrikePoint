<?php
if (isset($_POST['btnEnviar'])) {
    include_once("../Logica/Administrador.php");
    $admin = new Administrador();
    $admin->setCIAdmin($_POST['ci']);
    $admin->setContraseña($_POST['pass']);
  

    if ($admin->Login()) {
        header("Location: ../Vista/test.php");
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
    <h1 class="sign-up">¡Bienvenido Admin!</h1>
    <p class="sign-up">Ingresa tus detalles personales<br> para poder ingresar al panel de Administrador.</p>
  </div>
  
  <div id="login">
    <h1>Iniciar Sesión</h1>
    
    <form action="" method="POST">
      <input type="text" placeholder="Cedula de identidad" name="ci" required><br>
      <input type="password" placeholder="Contraseña" name="pass" autocomplete="off"><br>
      <a id="forgot-pass" href="#">¿Olvidaste tu contraseña?</a><br>
      <input class="submit-btn" type="submit" value="Iniciar Sesión" name="btnEnviar">
    </form>
  </div>
</div>
</body>
</html>
