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
<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et iure laudantium molestiae nostrum quidem ratione sequi. Aspernatur cupiditate dolorem in temporibus. Alias consequuntur dolorum, fugit perferendis rerum unde. Expedita, fuga.</h1>
</body>
</html>