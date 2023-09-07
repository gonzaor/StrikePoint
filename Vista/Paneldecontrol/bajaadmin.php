<?php
include_once("../../Logica/Administrador.php");

$ci_admin = ''; // Variable para almacenar la cédula del administrador

// Verificar si se ha enviado el formulario
if(isset($_POST['submit'])){
    $ci_admin = $_POST['ci_admin'];

    $admin = new Administrador();
    $admin->setCIAdmin($ci_admin);
    $resultado = $admin->eliminarAdmin();

    if($resultado){
        echo "<script>alert('Admin eliminado exitosamente.');</script>";
        header("Location: listaradmin.php");
    }else{
        echo "Error al eliminar el admin.";
    }
} else {
    // Obtener la cédula del administrador de la URL si se proporciona
    $ci_admin = isset($_GET['ci_admin']) ? $_GET['ci_admin'] : '';

    // Obtener los datos del administrador utilizando la cédula
    if (!empty($ci_admin)) {
        $admin = new Administrador();
        $adminItem = $admin->obtenerAdminPorCI($ci_admin);

        if ($adminItem) {
            // Puedes utilizar estos datos para mostrar información adicional sobre el administrador antes de eliminarlo
            $nombre = $adminItem->getNombre();
            $apellido = $adminItem->getApellido();
        } else {
            echo "Error: Administrador no encontrado.";
        }
    }
}
?>

<html>
<head>
    <title>Baja Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Baja Admin</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="ci_admin">Cedula de Identidad:</label>
            <input type="text" class="form-control" id="ci_admin" name="ci_admin" value="<?php echo $ci_admin; ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>

</body>
</html>
