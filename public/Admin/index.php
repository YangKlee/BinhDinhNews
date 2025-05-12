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
            <div class="wellcome-title">
                <?php echo "<h1 class='h1-wellcome'> Chào mừng " . $_SESSION['username']."</h1>" ?>
            </div>
            <div class="time-info">
                <h3 class="time-info-title">Thời gian:</h3>
                <div class="time-warpper">
                    <div class="module-time-warpper quy">
                        <label class="time-number" for="">00</label>
                        <label class="detial-time-text" for="">Quý</label>
                    </div>
                    <div class="module-time-warpper thang">
                        <label class="time-number" for="">00</label>
                         <label class="detial-time-text" for="">Tháng</label>
                    </div>
                    <div class="module-time-warpper tuan">
                        <label class="time-number" for="">00</label>
                         <label class="detial-time-text" for="">Tuần</label>
                    </div>
                </div>
             </div>
        </div>

    </div>
</body>
</html>