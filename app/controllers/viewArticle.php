<?php
    $id_art = $_GET['articleID'] ?? "404 not found";
    include("./app/data/article/${id_art}/article.php");
?>