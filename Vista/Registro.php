
<?php

if (isset($_POST['btnCrearUsuario'])) {
    include_once("../Logica/Usuario.php");

    $cedula_identidad = $_POST['cedula_identidad'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $esActivo = "true";
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];
    $telefono = $_POST['telefono'];

    $nuevoUsuario = new Usuario();
    $nuevoUsuario->setCedulaIdentidad($cedula_identidad);
    $nuevoUsuario->setNombre($nombre);
    $nuevoUsuario->setApellido($apellido);
    $nuevoUsuario->setEsActivo($esActivo);
    $nuevoUsuario->setCorreo($correo);
    $nuevoUsuario->setContrasenia($contrasenia);
    $nuevoUsuario->setTelefono($telefono);

    $salioBien = $nuevoUsuario->Registro();

    if ($salioBien) {
        echo "<script>alert('Usuario Creado')</script>";
        header("Login.php");

    } else {
        echo "<script>alert('Revise los datos')</script>";
    }




}




?>





<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 



  <link rel="stylesheet" href="style.css">

 </head> 

 <body> <!-- partial:index.partial.html --> 

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 

     <h2>Registro</h2>

        <form action="" method="POST">
            <div class="form">
                <div class="inputBox">
                    <input type="text" name="cedula_identidad" required>
                    <i>Cédula de Identidad</i>
                </div>
                <div class="inputBox">
                    <input type="text" name="nombre" required>
                    <i>Nombre</i>
                </div>
                <div class="inputBox">
                    <input type="text" name="apellido" required>
                    <i>Apellido</i>
                </div>
                <div class="inputBox">
                    <input type="email" name="correo" required>
                    <i>Correo Electrónico</i>
                </div>
                <div class="inputBox">
                    <input type="password" name="contrasenia" required>
                    <i>Contraseña</i>
                </div>
                <div class="inputBox">
                    <input type="tel" name="telefono" required>
                    <i>Teléfono</i>
                </div>
                <div class="inputBox">
                    <input type="submit" name="btnCrearUsuario" value="Crear Usuario">
                </div>
            </div>
        </form>

    </div>

    </div> 

   </div> 

  </section> <!-- partial --> 

 </body>

</html>
<!-- partial -->
  
</body>
</html>
