<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php'); ?>

<?php
$conn = new mysqli("localhost", "root", "", "BinhDinhNews");
if ($conn->connect_error) {
    die("Không kết nối được: " . $conn->connect_error);
}

function hienThihiepquan($conn, $coquan) {
    // Chủ tịch
    $sql_chutich = "SELECT * FROM donvihiepquan WHERE tencoquan = '$coquan' AND capbac = 1";
    $result_ct = $conn->query($sql_chutich);

    // Phó Chủ tịch
    $sql_pho = "SELECT * FROM donvihiepquan WHERE tencoquan = '$coquan' AND capbac = 2";
    $result_pho = $conn->query($sql_pho);

    echo "<h3> {$coquan} </h3>";

if ($result_ct->num_rows > 0) {
    echo '<div class="chutich-container">';
    while ($row = $result_ct->fetch_assoc()) {
        echo '<div class="item">
                <img src="../../../images/imgChinhquyen/donvihiepquan/'.$row['hinhanh'].'" alt="'.$row['hoten'].'">
                <label><b>'.$row['chucvu'].'</b><br>'.$row['hoten'].'</label>
              </div>';
    }
    echo '</div>';
}

if ($result_pho->num_rows > 0) {
    echo '<div class="pho-container">';
    while ($row = $result_pho->fetch_assoc()) {
        echo '<div class="item">
                <img src="../../../images/imgChinhquyen/donvihiepquan/'.$row['hinhanh'].'" alt="'.$row['hoten'].'">
                <label><b>'.$row['chucvu'].'</b><br>'.$row['hoten'].'</label>
              </div>';
    }
    echo '</div>';
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../../public/css/reset.css">
	<link rel="stylesheet" href="../../../../public/css/footer-style.css">
	<link rel="stylesheet" href="../../../../public/css/header-style.css">
    <link rel="stylesheet" href="../../../../../BinhDinhNews/public/css/rightmenu-style.css">
    <link rel="shortcut icon" href="../../../images/imgChinhquyen/logo/dvhq.jpg" type="image/x-icon">

    <title>Đơn vị Hiệp quản</title>
    <style>
    .container {
        display: grid;
        grid-template-columns: 5% 65% 30%;
        padding: 0 20px; /* tạo khoảng cách 2 bên cho toàn bộ nội dung */
        box-sizing: border-box;
    }

    .container-mid h3 {
        text-align: left;
        margin: 20px 0;
        font-size: 22px;
    }

    .chutich-container,
    .pho-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 30px;
        margin-bottom: 40px;
    }

    .item {
        width: 220px;
        text-align: center;
    }

    .item img {
        width: 100%;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .item label {
        display: block;
        margin-top: 10px;
        font-size: 18px;
    }
    </style>
</head>
<body>
        <script>
        document.querySelector("nav #f3").classList.add('active');
    </script>
    <div class="container">
        <div class="container-left"></div>
        <div class="container-mid">
            <?php
                hienThihiepquan($conn, coquan: "BỘ CHỈ HUY BỘ ĐỘI BIÊN PHÒNG TỈNH");
                hienThihiepquan($conn, coquan: "BỘ CHỈ HUY QUÂN SỰ TỈNH");
                hienThihiepquan($conn, coquan: "CÔNG AN TỈNH");
                hienThihiepquan($conn, coquan: "CHI CỤC THỐNG KÊ TỈNH BÌNH ĐỊNH");
                hienThihiepquan($conn, coquan: "TÒA ÁN NHÂN DÂN TỈNH BÌNH ĐỊNH");
                hienThihiepquan($conn, coquan: "VIỆN KIỂM SÁT NHÂN DÂN TỈNH");
                hienThihiepquan($conn, coquan: "BẢO HIỂM XÃ HỘI KHU VỰC XXIII");
            ?>
        </div>
        <div class="container-right">
            <?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/right/homepage.php'); ?>
        </div>
    </div>
</body>
</html>

<?php $conn->close(); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php'); ?>