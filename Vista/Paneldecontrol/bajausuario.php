<html>
<head>
    <title>Listar Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Cédula de Identidad</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Correo</th>
        <th scope="col">Teléfono</th>
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
        echo "<td>" . $adminItem->getTelefono() . "</td>";

        // Columna de acciones con íconos
        echo "<td>";

        // Icono de editar (redirige a EditarAdmin.php)
        echo "<a href='EditarAdmin.php?ci=" . $adminItem->getCIAdmin() . "'><img src='editar.png' alt='Editar'></a>";

        // Icono de eliminar (redirige a EliminarAdmin.php)
        echo "<a href='EliminarAdmin.php?ci=" . $adminItem->getCIAdmin() . "'><img src='eliminar.png' alt='Eliminar'></a>";

        echo "</td>";

        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</html>
