<?php
session_start();

if (isset($_SESSION['nombreLogeado'])) {
    unset($_SESSION['nombreLogeado']);
    session_destroy();
}

header("Location: ../Vista/indexlogin.php");
exit();
?>