<?php
    require "../../app/controller/loadsession.php"

?>
<?php
    if($_SESSION['role'] != 2)
    {
        header("Location: ./firewall.php");    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/list-user-admin.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/reset.css">
    <title>Document</title>
</head>
<body>
        <div class="main-container">
            <div class="left-container">
                <?php
                    include "../../app/views/left/menu-admin.php";
                    
                ?>
            </div>
            <div class="right-container">
                <!-- code here -->
            </div>
        </div>
</body>
</html>