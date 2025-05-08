<?php
    setcookie("auth", "", time() - 3600, "/");
    header("Location: ../../public/index.php");
    session_destroy();
    exit();
?>