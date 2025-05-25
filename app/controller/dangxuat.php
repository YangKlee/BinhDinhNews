<?php
    setcookie("auth", "", time() - 3600, "/");
    session_start();
    session_destroy();
    header("Location: ../../public/index.php");
    exit();
?>