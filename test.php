<?php
session_start();

if (isset($_SESSION['nombreLogeado'])) {
    $nombree = $_SESSION['nombreLogeado'];

    echo "Hola $nombree! <a href='cerrarSession.php'>Salir</a>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>iniciaste como admin</h1>
</body>
</html>