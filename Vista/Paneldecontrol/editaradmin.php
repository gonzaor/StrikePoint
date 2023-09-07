<?php
include_once("../../Logica/Administrador.php");

$ci_admin = '';
$nombre = '';
$apellido = '';
$contraseña = '';
$mail = '';
$telefono = '';

if(isset($_POST['submit'])){
    $ci_admin = $_POST['ci_admin'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contraseña = $_POST['contraseña'];
    $mail = $_POST['mail'];
    $telefono = $_POST['telefono'];

    // Validar y sanitizar los datos antes de usarlos en la base de datos (para prevenir inyecciones SQL)
    $ci_admin = htmlspecialchars($ci_admin);
    $nombre = htmlspecialchars($nombre);
    $apellido = htmlspecialchars($apellido);
    $contraseña = htmlspecialchars($contraseña);
    $mail = htmlspecialchars($mail);
    $telefono = htmlspecialchars($telefono);

    $admin = new Administrador();
    $admin->setCIAdmin($ci_admin);
    $admin->setNombre($nombre);
    $admin->setApellido($apellido);
    $admin->setContraseña($contraseña);
    $admin->setMail($mail);
    $admin->setTelefono($telefono);

    $resultado = $admin->modificarAdmin();

    if($resultado){
        echo "<script>alert('Admin editado exitosamente.');</script>";
        header("Location: listaradmin.php");

    }else{
        echo "Error al editar el admin.";
    }
} else {
    // Obtener la cédula del administrador de la URL si se proporciona
    $ci_admin = isset($_GET['ci_admin']) ? $_GET['ci_admin'] : '';

    // Obtener los datos del administrador utilizando la cédula
    if (!empty($ci_admin)) {
        $admin = new Administrador();
        $adminItem = $admin->obtenerAdminPorCI($ci_admin);

        if ($adminItem) {
            $nombre = $adminItem->getNombre();
            $apellido = $adminItem->getApellido();
            $contraseña = $adminItem->getContraseña();
            $mail = $adminItem->getMail();
            $telefono = $adminItem->getTelefono();
        } else {
            echo "Error: Administrador no encontrado.";
        }
    }
}
?>

<html>
<head>
    <title>Editar Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Editar Perfil de Administrador</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="ci_admin">Cédula de Identidad:</label>
            <input type="text" class="form-control" id="ci_admin" name="ci_admin" value="<?php echo $ci_admin; ?>" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido; ?>" required>
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña:</label>
            <input type="password" class="form-control" id="contraseña" name="contraseña" value="<?php echo $contraseña; ?>" required>
        </div>
        <div class="form-group">
            <label for="mail">Email:</label>
            <input type="email" class="form-control" id="mail" name="mail" value="<?php echo $mail; ?>" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono; ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
</body>
</html>
