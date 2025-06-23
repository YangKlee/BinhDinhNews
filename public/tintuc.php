<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/rightmenu-style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/tintuc-style.css">
	<link rel="stylesheet" href="./css/footer-style.css">
	<link rel="stylesheet" href="./css/header-style.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./images/logo.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
</head>
<?php 
    include_once '../app/views/partials/header.php';

?>
<body>
    <div class="container-tintuc">
        <div class="container-left">

        </div>
        <div class="container-mid">

        </div>
        <div class="container-right">
            <?php  include "../app/views/right/homepage.php" ?>
        </div>
    </div>
</body>
</html>