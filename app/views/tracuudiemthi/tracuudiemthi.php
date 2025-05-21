<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/stylestracuu.css">
    <link rel="stylesheet" href="../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../public/css/header-style.css">
    <link rel="stylesheet" href="../../../public/css/footer-style.css">
    <link rel="shortcut icon" href="../../../public/images/logo.webp" type="image/x-icon">
</head>
<body>

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php');
    ?>

    <div class="container-tracuudiem">
        <form id="searchForm" method="POST" action="tra_cuu.php">
            <h1>TRA CỨU ĐIỂM THI THPT QUỐC GIA NĂM 2024</h1>
            <label for="sbd">Số báo danh của thí sinh:</label>
            <input type="text" id="sbd" name="sbd" placeholder="Nhập số báo danh" required>
            <button type="submit">Tra Cứu</button>
        </form>
    </div>

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php');
    ?>

</body>
</html>
