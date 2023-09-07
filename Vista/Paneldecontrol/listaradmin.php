<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Panel de Administrador</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <?php
            session_start();
            if (isset($_SESSION['Session_Usuario'])) {
                $nombreUsuario = $_SESSION['Session_Usuario'];
                echo "<li><a href='#'>Bienvenido $nombreUsuario</a></li>";
            }
            ?>
        </ul>
    </div>
</nav>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Cédula de Identidad</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include_once("../../Logica/Administrador.php");
        $admin = new Administrador();
        $admins = $admin->listarAdmin();
        foreach ($admins as $adminItem) {
            echo "<tr>";
            echo "<td>" . $adminItem->getCIAdmin() . "</td>";
            echo "<td>" . $adminItem->getNombre() . "</td>";
            echo "<td>" . $adminItem->getApellido() . "</td>";
            echo "<td>" . $adminItem->getMail() . "</td>";

            // Columna de acciones con íconos
            echo "<td>";

            // Icono de editar (redirige a EditarAdmin.php con la cédula predefinida)
            echo "<a href='EditarAdmin.php?ci_admin=" . $adminItem->getCIAdmin() . "'><img src='editar.png' alt='Editar'></a>";

            // Icono de eliminar (redirige a EliminarAdmin.php con la cédula predefinida)
            echo "<a href='bajaadmin.php?ci_admin=" . $adminItem->getCIAdmin() . "'><img src='eliminar.png' alt='Eliminar'></a>";

            echo "</td>";

            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <a href="../index.php" class="btn btn-danger">Cerrar Sesión</a>
            </div>
            <div class="col-xs-6 text-right">
                <a href="altaadmin.php" class="btn btn-primary">Ingresar Admin</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
