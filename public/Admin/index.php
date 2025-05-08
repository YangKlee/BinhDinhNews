<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý</title>
    <link rel="stylesheet" href="../css/index-admin.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/reset.css">
    <style>

  </style>
</head>
<style>
    .main-container{
        display: grid;

        grid-template-columns: 20% 80%;
        grid-template-rows: 100%;
    }
</style>
<body>

    <div class="main-container">
        <div class="left-container">
            <?php
                include "../../app/views/left/menu-admin.php";
            ?>

        </div>
        <div class="right-container">
            <h1>Chào mừng Username</h1>
            <h1>Trang quản lý cho nhà báo</h1>
        </div>
    </div>
</body>
</html>