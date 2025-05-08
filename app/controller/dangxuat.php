<?php
    setcookie("auth", "", time() - 3600, "/");
    header("Location: ../../public/index.php");
    exit();
?>